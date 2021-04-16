<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
		return view('home');
	}

    public function getLogin()
    {
		return view('login');
	}

	public function postLogin(Request $request)
	{
		$username=$request->username;
		$password=md5($request->password);
		$result=Account::where('username',$username)->where('password',$password)->first();
		if ($result==null) {
			$alert='Sai tên đăng nhập hoặc mật khẩu!';
			return redirect()->back()->with('alert',$alert);
		} else {
			session(['user'=>$username]);
			return redirect('/');
		}
	}

}
