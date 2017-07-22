<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class RegisterController extends Controller
{

	public function index()
	{
		return view('home.register');
	}

    public function create()
    {
    	return view('home.register');
    }

    public function store(Request $request)
    {
        //自定义错误信息
        $message = [
            'required' => ':attribute 的字段是必须的',
            'digits_between' => ':attribute 的字段必须在 3-12 字符之间',
            'max' => ':attribute 的字段长度不能超过 :max',
        ];
        //设定验证规则
        $this->validate($request, [
            'Uname' => 'required|unique:users|max:12',
            'Upwd' => 'required|max:12',
            'Uage' => 'required|numeric|max:200',
            'Ufsex' => 'required',
            'Rname' => 'required|max:15',
        ],$message);
    	$data = $request->except('_token');
    	$row = DB::table('users')->insertGetId($data);
    	if($row>0){
    		return redirect('home/login')->with('msg','注册成功');
    	}
    }
}
