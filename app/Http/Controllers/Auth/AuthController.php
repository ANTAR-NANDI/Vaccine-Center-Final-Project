<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }
    public function AuthCheck(Request $request)
    {

        $email = $request->email;
        $password = md5($request->password);

        $obj = User::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        if ($obj) {
            $request->session()->put('userid', $obj->id);
            $request->session()->put('username', $obj->fullname);
            $request->session()->put('userrole', 'Admin');

            if ($request->session()->get('userrole') == 'Admin') {
                return redirect('admin/home')->with('loggedin', 'Successfully Logged in');
            }
        } else {
            return redirect()->back()->with('message', "Invalid Email or Password");
        }
    }
    public function home()
    {
        return view('Admin.pages.index');
    }
    public function logout()
    {
        Session::flush();
        return redirect()->to('/');
    }
}
