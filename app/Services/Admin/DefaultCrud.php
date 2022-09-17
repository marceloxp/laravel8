<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

/**
 * Class DefaultCrud.
 */
class DefaultCrud
{
    public static function index(Request $request, $model)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));

        // share $search to view
        View::share(compact('search'));

        if (!empty($search)) {
            // get all users and roles order by id desc
            $table = $model::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->paginate($request->get('limit', 10));
        } else {
            // get all users and roles order by id desc
            $table = $model::orderBy('id', 'desc')->paginate($request->get('limit', 10));
        }

        // return view with users
        return $table;
    }

    public static function defaultCreateOrEdit(Request $request, $model, $id = null)
    {
        // get table or create new table
        $register = $model::find($id);
        if(!$register)
        {
            $register = new $model();
        }

        return $register;
    }

    public static function defaultStore(Request $request, $model)
    {
        try
        {
            $id = $request->get('id');

            // get request except _token
            $form = $request->except('_token');
    
            // validate request
            $valid = $model::validate($form, $id);
            if (!$valid['success'])
            {
                throw new \Exception($valid['single']);
            }
    
            if (!empty($id))
            {
                $register = $model::firstOrNew(['id' => $id]);
                $register->fill($form);
            }
            else
            {
                $register = $model::create($form);
            }
            $saved = (empty($id)) ? ($register->save()) : ($register->update());
    
            if ($saved)
            {
                $message = ($id) ? 'Registro atualizado com sucesso.' : 'Registro criado com sucesso.';
                $request->session()->flash('messages', [$message]);
    
                if ($id)
                {
                    return redirect()->route($model::getAdminRouteName('edit'), ['id' => $id]);
                }
                else
                {
                    return redirect()->route($model::getAdminRouteName('index'));
                }
            }
            else
            {
                return back()
                    ->withErrors('Ocorreu um erro na gravação do registro.')
                    ->withInput();
            }
        }
        catch(\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }
    
    public static function defaultDelete(Request $request, $model, $id)
    {
        $register = $model::find($id);
        if($register)
        {
            $register->delete();
            $request->session()->flash('messages', ['Registro excluído com sucesso.']);
        }
        else
        {
            $request->session()->flash('messages', ['Registro não encontrado.']);
        }
        return redirect()->route($model::getAdminRouteName('index'));
    }

}
