<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class SuperuserController extends Controller
{
    //查询数据库方法
    public function index(Request $request)
    {
    	
    	$where = [];
    	$db = DB::table('controllers');
    	if($request->has('Cname')){
    		$db->where('Cname','like',"%{$request->input('Cname')}%");
    		$where['Cname'] = $request->input('Cname');
    	}
    	$list = $db->paginate(3);
    	
    	return view('admin.users',['list'=>$list,'where'=>$where,'Cid'=>$request]);
    }

    //添加到视图方法
    public function create()
    {
    	return view('admin.add');
    }
    
    //添加数据的方法
    public function store(Request $request)
    {
        //自定义错误信息
        $message = [
            'required' => ':attribute 的字段是必要的',
            'max' => ':attribute 的名字不能大于 :max',

        ];
        //设定验证规则
        $this->validate($request, [
            'Cname' => 'required|unique:controllers|max:12',
            'Cpwd' => 'required|max:12',
        ],$message);

        //去除_token属性
    	$data = $request->except('_token');

    	//定义变量存储添加的数据
    	$row = DB::table('controllers')->insertGetId($data);

    	//判断执行
    	if($row>0){
    		return redirect('admin/users')->with('msg','添加成功');
    	}
    }

    //修改的数据返回到视图
    public function edit($Cid)
    {
    	//存储更新的数据
    	$controllers = DB::table('controllers')->where('Cid',$Cid)->first();

    	//把更新的数据返给视图
    	return view('admin.edit',['controllers'=>$controllers]);
    }
    
    //定义修改方法
    public function update($Cid,Request $request)
    {
    	//获取指定字段
    	// $data = $request->only('name','sex','age');
    	// 获取除了指定字段，剩下的字段
    	$data = $request->except('_token','_method');
    	// dd($data);

    	//定义变量存储添加修改信息
    	$row = DB::table('controllers')->where('Cid',$Cid)->update($data);

    	//判断执行
    	if($row>0){
    		return redirect('admin/users')->with('msg','修改成功');
    	}
    }

    //定义删除方法
    public function destroy($Cid)
    {   
    	//删除指定数据
    	$row = DB::table('controllers')->where('Cid',$Cid)->delete();

    	//判断执行
    	if($row>0){
    		return redirect('/admin/users')->with('msg','删除成功');
    	}
    }
}
