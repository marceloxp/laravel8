<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\Admin\UserCrud;
use App\Models\User;

class UserController extends BaseAdminController
{
    public $model = User::class;
    public $title = 'Usuários';
    
    // create index method with search and pagination limit
    public function index(Request $request)
    {
        $table = UserCrud::index($request);
        return view('admin.user.index', compact('table'));
    }

    // add create or edit method
    public function createOrEdit(Request $request, $id = null)
    {
        $register = UserCrud::createOrEdit($request, $id);
        return view('admin.user.create_edit', compact('register'));
    }

    public function store(Request $request)
    {
        return UserCrud::store($request);
    }

    // create delete method
    public function delete(Request $request, $id)
    {
        return UserCrud::delete($request, $id);
    }

}
