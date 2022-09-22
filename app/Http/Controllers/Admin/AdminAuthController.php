<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /**
     * Show the application login form.
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            return redirect()->route('admin.dashboard')->with('success', 'You are Logged in sucessfully.');
        } else {
            return back()->with('error', 'Whoops! invalid email and password.');
        }
    }

    /**
     * Handle a logout request to the application.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function getLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->flush();
        $request->session()->flash('success', 'Sistema desconectado com sucesso');
        return redirect(route('admin.login'));
    }
}
