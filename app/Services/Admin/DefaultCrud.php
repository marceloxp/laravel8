<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Traits\Models\Searchable;
use Illuminate\Support\Facades\Schema;

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
            if (in_array(Searchable::class, class_uses($model))) {
                $table = $model::search($search);
            } else {
                $field_search = (Schema::hasColumn($model::getTableName(), 'name')) ? 'name' : 'id';
                $table = $model::where($field_search, 'like', db_fmt_search($search));
            }

            $table = $table
                ->orderBy('id', 'desc')
                ->paginate(db_admin_get_pagination_limit())
            ;
        } else {
            // get all users and roles order by id desc
            $table = $model::orderBy('id', 'desc')->paginate(db_admin_get_pagination_limit());
        }

        // return view with users
        return $table;
    }

    public static function store(Request $request, $model)
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
    
    public static function update(Request $request, $model)
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
    
    public static function destroy($model)
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
