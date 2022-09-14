<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Utilities\Datasite;


class BaseAdminController extends Controller
{
	public $admin_title = 'UMS Admin';
	public $pagination_limit = 10;

	public $user;
	public $route_name;
	public $fields_captions;
	public $model;

    // create constructor method
    public function __construct()
    {
		$this->middleware
		(
			function($request, $next)
			{
                $user = auth()->guard('admin')->user();
				$route_name = Route::currentRouteName();
				$this->setPaginationLimit(intval(env('ADMIN_PAGINATION_LIMIT')));

				// get config from browser cookie
				$darkMode = \Cookie::get('dark-mode');
				$darkMode = (!empty($darkMode)) ? 'dark-mode' : '';
				View::share('darkMode', $darkMode);

				$is_ajax = $request->ajax();
				if ($is_ajax)
				{
					return $next($request);
				}

				// get count of cached
				$cached_count = \App\Http\Utilities\Cached::count();
				View::share('cached_count', $cached_count);

				$this->setAdminTitle($this->admin_title);
				$this->user = $user;
				$this->route_name = $route_name;

				// get all field captions
				if (isset($this->model))
				{
					$this->fields_captions = $this->model::getFieldsCaptions();
					View::share('fields_captions', $this->fields_captions);
					View::share('model', $this->model);
				}

				// add view share data with compact function
                View::share(compact('user','route_name'));

                return $next($request);
			}
		);
    }

	public function defaultIndex(Request $request)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));

        if (!empty($search)) {
			$fields_search = $this->fields_captions->keys()->toArray();
			// remove created_at, updated_at and deleted_at from fields_search
			$fields_search = array_diff($fields_search, ['created_at', 'updated_at', 'deleted_at']);

            // get all table order by id desc
            $table = $this->model::select();
			// foreach $fields_search, add orWhere condition
			foreach ($fields_search as $field) {
				$table->orWhere($field, 'like', '%' . $search . '%');
			}
            $table = $table->orderBy('id', 'desc')->paginate($this->getpaginationLimit());
        } else {
            // get all table order by id desc
            $table = $this->model::orderBy('id', 'desc')->paginate($this->getpaginationLimit());
        }

		Datasite::add(compact('table'));

        // return view with table
        return view($this->model::getAdminViewPath('index'), compact('table','search'));
    }

    // add create or edit method
    public function defaultCreateOrEdit(Request $request, $id = null)
    {
        // get table or create new table
        $register = $this->model::find($id);
        if(!$register)
        {
            $register = new $this->model();
        }
        // return view with table
        return view($this->model::getAdminViewPath('create_edit'), compact('register'));
    }

    // add store method
    public function defaultStore(Request $request)
    {
        $id = $request->get('id');

        // get request except _token
        $form = $request->except('_token');

        // validate request
		$valid = $this->model::validate($form, $id);
		if (!$valid['success'])
		{
			return back()
				->withErrors($valid['single'])
				->withInput()
			;
		}

		if (!empty($id))
		{
			$register = $this->model::firstOrNew(['id' => $id]);
			$register->fill($form);
		}
		else
		{
			$register = $this->model::create($form);
		}
        $saved = (empty($id)) ? ($register->save()) : ($register->update());

		if ($saved)
		{
			$message = ($id) ? 'Registro atualizado com sucesso.' : 'Registro criado com sucesso.';
			$request->session()->flash('messages', [$message]);

            if ($id)
            {
                return redirect()->route($this->model::getAdminRouteName('edit'), ['id' => $id]);
            }
            else
            {
                return redirect()->route($this->model::getAdminRouteName('index'));
            }
		}
		else
		{
			return back()
				->withErrors('Ocorreu um erro na gravação do registro.')
				->withInput();
		}
    }

    // add delete method
    public function defaultDelete(Request $request, $id)
    {
        $register = $this->model::find($id);
        if($register)
        {
            $register->delete();
            $request->session()->flash('messages', ['Registro excluído com sucesso.']);
        }
        else
        {
            $request->session()->flash('messages', ['Registro não encontrado.']);
        }
        return redirect()->route($this->model::getAdminRouteName('index'));
    }

	public function processUploads($request, $form)
	{
		try
		{
			foreach ($request->files as $field_name => $file)
			{
				$file = $form[$field_name];

				if (!$file->isValid())
				{
					$messages = ['Ocorreu um erro no envio da imagem.'];

					switch ($file->getError())
					{
						case UPLOAD_ERR_INI_SIZE:
							$messages[] = sprintf('O tamanho do arquivo excede o limite permitido pelo servidor (%s).', ini_get('upload_max_filesize'));
						break;
						case UPLOAD_ERR_FORM_SIZE:
							$messages[] = 'O tamanho do arquivo excede o limite permitido pelo formulário.';
						break;
						case UPLOAD_ERR_PARTIAL:
							$messages[] = 'O upload do arquivo foi feito parcialmente.';
						break;
						case UPLOAD_ERR_NO_FILE:
							$messages[] = 'Nenhum arquivo foi enviado.';
						break;
						case UPLOAD_ERR_NO_TMP_DIR:
							$messages[] = 'Não há pasta temporária definida.';
						break;
						case UPLOAD_ERR_CANT_WRITE:
							$messages[] = 'Falha em escrever o arquivo em disco.';
						break;
						case UPLOAD_ERR_EXTENSION:
							$messages[] = 'Uma extensão do PHP interrompeu o upload do arquivo.';
						break;
					}

					return back()
						->withErrors($messages)
						->withInput()
					;
				}

				$extension = $file->getClientOriginalExtension();

				switch ($extension)
				{
					case 'pdf':
						$disk_name  = 'upload_pdfs';
					break;
					default:
						$disk_name  = 'upload_images';
					break;
				}

				$file_name  = $file->getClientOriginalName();
				$check_file = disk_new_file_name($disk_name, $file->getClientOriginalName());
				$saved_file = $request->file($field_name)->storeAs('', $check_file, ['disk' => $disk_name]);

				if (!$saved_file)
				{
					return back()
						->withErrors('Ocorreu um erro na gravação do arquivo.')
						->withInput()
					;
				}

				$form[$field_name] = $saved_file;
			}

			return $form;
		}
		catch (\Exception $e)
		{
			report($e);
			return back()
				->withErrors('Ocorreu um erro não esperado no processamento do arquivo.')
				->withInput()
			;
		}
	}

	// add function set admin title
	public function setAdminTitle($admin_title)
	{
		$this->admin_title = $admin_title;
		View::share(['admin_title' => $this->admin_title]);
	}

	// add set pagination limit method
	public function setPaginationLimit($pagination_limit)
	{
		$this->pagination_limit = $pagination_limit;
	}

	// add function get pagination limit
	public function getPaginationLimit()
	{
		return $this->pagination_limit;
	}
    
}
