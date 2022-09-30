<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\BaseModel;
use App\Traits\Models\Searchable;

/**
 * Class BaseCrud.
 *
 * @property string $indexViewPath
 * @property string $createViewPath
 * @property string $showViewPath
 * @property string $editViewPath
 */
class BaseCrud extends BaseAdmin
{
    public $model;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $fields_captions = $this->model::getFieldsCaptions();
        View::share([
            'fields_captions' => $fields_captions,
            'model' => $this->model,
        ]);
        parent::__construct();

        $this->setOption('index.search', true);
    }

    /**
     * Get the dot notation path to the $route resource.
     *
     * @return string
     */
    private function getAdminViewPath($route)
    {
        $singular_name = str_to_singular(strtolower($this->model::getTableName()));
        return sprintf('admin.%s.%s', $singular_name, $route);
    }

    public function __get($name)
    {
        if (substr($name, -8) == 'ViewPath') {
            $route = str_replace('ViewPath', '', $name);
            return $this->getAdminViewPath($route);
        }

        if (substr($name, -9) == 'ViewRoute') {
            $route = str_replace('ViewRoute', '', $name);
            return route($this->getAdminViewPath($route));
        }
    }

    /**
     * Set pagination limit.
     *
     * @param int $limit
     * @return int
     */
    public function setPaginationLimit($limit)
    {
        return db_admin_set_pagination_limit($limit);
    }

    public function getCaption($fieldname)
    {
        return $this->model::getFieldsCaptions()->get($fieldname);
    }

    /**
     * Get table fields on index screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $search
     * @return array
     */
    public function getIndexTable(Request $request, $search = '')
    {
        $search = ($search) ? $search : admin_get_search();
        if (!empty($search)) {
            if (in_array(Searchable::class, class_uses($this->model))) {
                $table = $this->model::search($search);
            } else {
                $field_search = (Schema::hasColumn($this->model::getTableName(), 'name')) ? 'name' : 'id';
                $table = $this->model::where($field_search, 'like', db_fmt_search($search));
            }

            $table = $table
                ->orderBy('id', 'desc')
                ->paginate(db_admin_get_pagination_limit());
        } else {
            $table = $this->model::orderBy('id', 'desc')->paginate(db_admin_get_pagination_limit());
        }

        return $table;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function defaultStore(FormRequest $request)
    {
        try {
            if ($this->model::create($request->validated())) {
                return redirect()
                    ->route($this->indexViewPath)
                    ->withMessages('Registro criado com sucesso.');
            } else {
                return back()
                    ->withErrors('Ocorreu um erro na gravação do registro.')
                    ->withInput();
            }
        } catch (\Exception $e) {
            return back()
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\BaseModel  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function defaultUpdate(FormRequest $request, BaseModel $model)
    {
        try {
            if ($model->update($request->validated())) {
                return redirect()
                    ->route($this->indexViewPath)
                    ->withMessages('Registro atualizado com sucesso.');
            } else {
                return back()
                    ->withErrors('Ocorreu um erro na gravação do registro.')
                    ->withInput();
            }
        } catch (\Exception $e) {
            return back()
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaseModel  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function defaultDestroy(BaseModel $model)
    {
        try {
            $model->delete();
            return redirect()
                ->route($this->indexViewPath)
                ->withMessages('Registro excluído com sucesso.');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }
}
