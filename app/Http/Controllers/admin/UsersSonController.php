<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class usersSonController extends Controller
{
     //查询数据库方法
    public function index(Request $request)
    {
    	// 保存搜索的条件
        $where = [];
        $db = DB::table('users');
        if($request->has('Uname')){
            $db->where('Uname','like',"%{$request->input('Uname')}%");
            $where['Uname'] = $request->input('Uname');
        }
        $list = $db->paginate(3);
        
        return view('admin.usersSon',['list'=>$list,'where'=>$where,'Uid'=>$request]);
    }

    //
    public function create()
    {
    	return view('admin.uadd');
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
    		return redirect('admin/userss')->with('msg','添加成功');
    	}
    }

    public function edit($Uid)
    {
    	$user = DB::table('users')->where('Uid',$Uid)->first();
    	return view('admin.edits',['Uid'=>$user]);
    }

    public function update($Uid,Request $request)
    {
    	//获取指定字段
    	// $data = $request->only('name','sex','age');
    	// 获取除了指定字段，剩下的字段
    	$data = $request->except('_token','_method');
    	// dd($data);
    	$row = DB::table('users')->where('Uid',$Uid)->update($data);
    	if($row>0){
    		return redirect('admin/userss')->with('msg','修改成功');
    	}
    }

    public function destroy($Uid)
    {
    	$row = DB::table('users')->where('Uid',$Uid)->delete();
    	if($row>0){
    		return redirect('/admin/userss');
    	}
    }
}
