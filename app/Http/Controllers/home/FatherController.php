<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class FatherController extends Controller
{
    public function index()
	{
		return view('home.father');
	}

	public function logout()
    {
        //删除session
        session()->forget('homeindex');
        
        //重定向
        return redirect('/home/login')->with('msg','退出登录成功');

    }
}
