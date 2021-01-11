<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{


    public function adminLogin()
    {

        return view('admin.auth.adminLogin');
    }


public function checkLogin(Request $request)
{



    $islogin=Auth::attempt(['email' =>$request->email, 'password' =>$request->password]);


    dd($islogin);

}


public function getDashboard()
{

return view('admin/dashboard');

}

// function save()
// {
// $admin=new Admin();
// $admin->name="khaled";
// $admin->email="k@gmail.com";
// $admin->password=encrypt('12345');

// $admin->save();
// }



}
