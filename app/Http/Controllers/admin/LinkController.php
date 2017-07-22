<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Org\Image;

class LinkController extends Controller
{
    //设置index 方法显示数据
    public function index(Request $request)
    {
    	//把数据库资源赋给一个变量
    	$db = DB::table('links');

    	//设置一个空数组加入搜索条件
    	$where = [];

        //如果有搜索条件,就把搜索条件放入where数组中
        if ($request->input('url')) {
        	$db->where('url','like','%'.$request->input('url').'%');
        	$where['url'] = $request->input('url');
        }

        if ($request->input('name')) {
        	$db->where('name','like','%'.$request->input('name').'%');
        	$where['name'] = $request->input('name');
        }

        //获取数据库数据
        $data = $db->paginate('1');


        //显示视图
        return view('admin.link',['data'=>$data,'where'=>$where]);
    }

    public function create()
    {
    	//显示添加页面;
    	return view('admin.link_add');
    }

    public function store(Request $request)
    {
    	//先判断photo资源传过来了没
    	
    	if (!$request->hasFile('photo')) {
    		return redirect('/admin/link/create')->with('msg','文件上传失败');
    	}

    	//资源传过来直接赋给一个变量
    	$file = $request->file('photo');

        //判断错误号
    	switch($file->getError()) {
    		case 1:
			case 2:
			case 3:
			case 6:
			case 7:
				return redirect('/admin/link/create')->with('msg','文件上传失败');
			break;
			case 4:
				return redirect('/admin/link/create')->with('msg','没有文件上传');
			break;
    	}

    	//设置一个数组装数据类型
    	$mimeType = ['image/jpeg','image/jpg','image/png'];
    	if (!in_array($file->getClientMimeType(),$mimeType)) {
    		return redirect('/admin/link/create')->with('msg','文件类型不符合标准');
    	}

    	//判断文件大小
    	$size = $file->getClientSize();
    	if ($size > 100000000000) {
    		return redirect('/admin/link/create')->with('msg','文件过大');
    	}

    	//转移文件
    	//获取文件后缀名
    	$ext = $file->getClientOriginalExtension();
		$picname = time().rand(1000,9999).'.'.$ext;
		$file->move('./admin/uploads/',$picname);

		//用扩展库进行图片缩放
		$img = new Image();
    	$img->open('./admin/uploads/'.$picname);
    	$img->thumb(100,100)->save('./admin/uploads/s_'.$picname);

		//设置一个看一个空数组储存信息
		$data= [];

		$data['name'] = $request->input('name');
		$data['url'] = $request->input('url');
		$data['photo'] = 'admin/uploads/s_'.$picname;
		
        // 给数据库添加信息
        $row = DB::table('links')->insertGetId($data);

        //添加成功和失败之后的跳转
        if ($row > 0 ) {
        	return redirect('admin/link')->with('msg','添加成功');
        }else{
        	return view('admin.link_add')->with('msg','添加失败');
        }

    }

    //删除方法
    public function destroy($id)
    {
    	//数据库删除
    	$row = DB::table('links')->where('id',$id)->delete();

    	//判断是否成功
    	if ($row > 0) {
    		return redirect('admin/link')->with('msg','删除成功');
    	}
    }

    //修改
    public function edit($id)
    {
    	//获得数据
    	$data = DB::table('links')->where('id',$id)->first();

    	//数据送到修改页面
    	return view('admin/link_edit',['data'=>$data]);
    }

    public function update(Request $request,$id)
    {
    	//获取数据
    	$data = $request->only('url','name');
    	//修改数据
    	$row = DB::table('links')->where('id',$id)->update($data);

    	//判断是否修改成功
    	if ($row > 0) {
    		return redirect('/admin/link')->with('msg','修改成功');
    	}
    }

    public function changeImg($id)
    {
    	//获得数据
    	$data = DB::table('links')->where('id',$id)->first();

    	//显示到修改图片页面
    	return view('admin.link_imgchange',['data'=>$data]);
    }

    public function change(Request $request,$id)
    {
    	//先判断photo资源传过来了没
    	
    	if (!$request->hasFile('photo')) {
    		return redirect('admin/link/img/'.$id)->with('msg','文件上传失败');
    	}

    	//资源传过来直接赋给一个变量
    	$file = $request->file('photo');

        //判断错误号
    	switch($file->getError()) {
    		case 1:
			case 2:
			case 3:
			case 6:
			case 7:
				return redirect('admin/link/img/'.$id)->with('msg','文件上传失败');
			break;
			case 4:
				return redirect('admin/link/img/'.$id)->with('msg','没有文件上传');
			break;
    	}

    	//设置一个数组装数据类型
    	$mimeType = ['image/jpeg','image/jpg','image/png'];
    	if (!in_array($file->getClientMimeType(),$mimeType)) {
    		return redirect('admin/link/img/'.$id)->with('msg','文件类型不符合标准');
    	}

    	//判断文件大小
    	$size = $file->getClientSize();
    	if ($size > 100000000000) {
    		return redirect('admin/link/img/'.$id)->with('msg','文件过大');
    	}

    	//转移文件
    	//获取文件后缀名
    	$ext = $file->getClientOriginalExtension();
		$picname = time().rand(1000,9999).'.'.$ext;
		$file->move('./admin/uploads/',$picname);

		//用扩展库进行图片缩放
		$img = new Image();
    	$img->open('./admin/uploads/'.$picname);
    	$img->thumb(100,100)->save('./admin/uploads/s_'.$picname);

		//设置一个看一个空数组储存信息
		$data= [];

		$data['photo'] = 'admin/uploads/s_'.$picname;
		
        // 给数据库添加信息
        $row = DB::table('links')->where('id',$id)->update($data);

        //添加成功和失败之后的跳转
        if ($row > 0 ) {
        	return redirect('admin/link')->with('msg','修改成功');
        }else{
        	return redirect('admin/link/img/'.$id)->with('msg','修改失败');
        }

    }
}
