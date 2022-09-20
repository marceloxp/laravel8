<?php

namespace App\Utilities;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\Models\Searchable;

class AdminCrud
{
    /**
     * Get the search query.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public static function getSearchValue(Request $request)
    {
        $search = request()->get('search');
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));
        View::share(compact('search'));
        return $search;
    }

    /**
     * Get table fields on index screen.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Model::class  $modelClass
     * @param string $search
     * @return array
     */
    public static function index(Request $request, $modelClass, $search = '')
    {
        $search = ($search) ? $search : AdminCrud::getSearchValue($request);
        if (!empty($search)) {
            if (in_array(Searchable::class, class_uses($modelClass))) {
                $table = $modelClass::search($search);
            } else {
                $field_search = (Schema::hasColumn($modelClass::getTableName(), 'name')) ? 'name' : 'id';
                $table = $modelClass::where($field_search, 'like', db_fmt_search($search));
            }

            $table = $table
                ->orderBy('id', 'desc')
                ->paginate(db_admin_get_pagination_limit())
            ;
        } else {
            // get all users and roles order by id desc
            $table = $modelClass::orderBy('id', 'desc')->paginate(db_admin_get_pagination_limit());
        }

        return $table;
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Http\Response
     */
    public static function store(FormRequest $request, Model $model)
    {
        try
        {
            if ($model::create($request->validated()))
                return redirect()
                    ->route($model::getAdminPathByDotNotation('index'))
                    ->withMessages('Registro criado com sucesso.')
                ;
            else
                return back()
                    ->withErrors('Ocorreu um erro na gravação do registro.')
                    ->withInput();
        }
        catch(\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Http\Response
     */
    public static function update(FormRequest $request, Model $model)
    {
        try
        {
            if ($model->update($request->validated()))
                return redirect()
                    ->route($model::getAdminPathByDotNotation('index'))
                    ->withMessages('Registro atualizado com sucesso.')
                ;
            else
                return back()
                    ->withErrors('Ocorreu um erro na gravação do registro.')
                    ->withInput()
                ;
        }
        catch(\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Http\Response
     */
    public static function destroy(Model $model)
    {
        try
        {
            $model->delete();
            return redirect()
                ->route($model::getAdminPathByDotNotation('index'))
                ->withMessages('Registro excluído com sucesso.')
            ;
        }
        catch (\Exception $e)
        {
            return back()->withErrors($e->getMessage());
        }
    }
}
