<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\Image;
use DB;

class ShowController extends Controller
{
    //显示 show 页面;
	public function show($id,Request $request)
	{
		
		// $list = DB::table('show')->where('Sid',$id)->get();
		// //dd($list);
		// //$llist = DB::table('shopinfo')->get();
		// //转到商品信息页面
		// return view('admin.show',['list'=>$list,'id'=>$id]);

		// // 保存搜索的条件
    	$where = [];
    	$db = DB::table('show')->where('Sid',$id);
        $Stid = DB::table('shopinfo')->where('Sid',$id)->select('Stid')->first();
    	if($request->has('Ssize')){
    		$db->where('Ssize','like',"%{$request->input('Ssize')}%");
    		$where['Ssize'] = $request->input('Ssize');
    	}
    	$list = $db->paginate(5);
    	
    	return view('admin.show',['list'=>$list,'id'=>$id,'where'=>$where,'Stid'=>$Stid->Stid]);
    }

    //显示添加页面
    public function create()
    {
    	return view('admin.addShow');
    	// return 111;
    }

    //执行添加 
    public function store(Request $request)
    {
        if($request->hasFile('mypic')){
            $file = $request->file('mypic');
            if ($file->isValid()) {
                //获取后缀
                $ext = $file->getClientOriginalExtension();
                $name = $file->getClientOriginalName();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('./admin/picture/',$picname);
                if($file->getError()>0){
                    return redirect('admin/show/')->with('msg','上传失败');
                }
            }
        }
        $img = new Image();
        $img->open('./admin/picture/'.$picname);
        $img->thumb(50,50)->save('./admin/picture/s_'.$picname);

    	// dd($request->input('Sid'));
    	$data = $request->except('_token','mypic');
        $data['Simgpath'] ='s_'.$picname;
        $name = $file->getClientOriginalName();
    	$row = DB::table('show')->insert($data);
    	if($row>0){
    		return redirect('/admin/show/'.$request->input('Sid'))->with('msg','添加成功');

    	}
    }
 
    //显示修改页面
    public function edit($data)
    {

        $Sdata = explode('.',$data);
    	$ty = DB::table('show')->where('Ssize',$Sdata[0])->where('Scolor',$Sdata[1])->first();
    	return view('admin.editShow',['ty'=>$ty]);
    }

    //执行修改
    public function update($Cdata,Request $request)
    {

    	$Sdata = explode('.',$Cdata);
    	// 获取除了指定字段，剩下的字段
        if($request->hasFile('mypic')){
            $file = $request->file('mypic');
            if ($file->isValid()) {
                //获取后缀
                $ext = $file->getClientOriginalExtension();
                $name = $file->getClientOriginalName();
                $picname = time().rand(1000,9999).'.'.$ext;
                $file->move('./admin/picture/',$picname);
                if($file->getError()>0){
                    return redirect('admin/show/')->with('msg','上传失败');
                }
            }
        }
        $img = new Image();
        $img->open('./admin/picture/'.$picname);
        $img->thumb(50,50)->save('./admin/picture/s_'.$picname);

    	$data = $request->except('_token','_method','mypic');
        $data['Simgpath'] ='s_'.$picname;
    	// dd($data);
     //    die();
    	$row = DB::table('show')->where('Ssize',$Sdata[0])->where('Scolor',$Sdata[1])->update($data);

    	if($row>0){
    		return redirect('/admin/show/'.$Sdata[2])->with('msg','修改成功');
    	}
    }

    //执行删除
    public function destroy($data)
    {
        $Sdata = explode('.',$data);
    	$row = DB::table('show')->where('Ssize',$Sdata[0])->where('Scolor',$Sdata[1])->delete();
    	if($row>0){
    		return redirect('/admin/show/'.$Sdata[2])->with('msg','删除成功');
    	}
    }
}
