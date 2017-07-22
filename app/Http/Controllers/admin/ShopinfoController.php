<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\Image;
use DB;

class ShopinfoController extends Controller
{
    //显示 shopinfo 页面;
	public function show(Request $request,$id)
	{
        //dd($request);
		// $list = DB::table('shopinfo')->get();
		// //转到商品信息页面
		// return view('admin.shopinfo',['list'=>$list]);

		//保存搜索分页
		$where = [];
    	$db = DB::table('shopinfo')->where('Stid',$id);
    	if($request->has('Sname')){
    		$db->where('Sname','like',"%{$request->input('Sname')}%");
    		$where['Sname'] = $request->input('Sname');
    	}
    	$list = $db->paginate(2);
    	
    	return view('admin.shopinfo',['list'=>$list,'where'=>$where,'id'=>$id]);
    }

    //显示添加页面
    public function create()
    {
    	return view('admin.addInfo');
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
                    return redirect('admin/shopinfo/')->with('msg','上传失败');
                }
            }
        }
        $img = new Image();
        $img->open('./admin/picture/'.$picname);
        $img->thumb(50,50)->save('./admin/picture/s_'.$picname);

        // dd($request->input('Sid'));
        $data = $request->except('_token','mypic','id');
        $data['Simgpath'] ='s_'.$picname;
        $data['Stid'] = $_GET['id'];
        $Stype = DB::table('shoptype')->where('Stid',$_GET['id'])->select('Stype')->first();
        $data['Stype'] = $Stype->Stype;
    	$row = DB::table('shopinfo')->insert($data);
    	if($row>0){
    		return redirect('/admin/shopinfo/'.$_GET['id'])->with('msg','添加成功');
    	}
    }

    //显示修改页面
    public function edit($Sid)
    {
    	$ty = DB::table('shopinfo')->where('Sid',$Sid)->first();
    	return view('admin.editInfo',['ty'=>$ty]);
    }

    //执行修改
    public function update($Sid,Request $request)
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
                    return redirect('admin/shopinfo')->with('msg','上传失败');
                }
            }
        }
        $img = new Image();
        $img->open('./admin/picture/'.$picname);
        $img->thumb(50,50)->save('./admin/picture/s_'.$picname);

        $data = $request->except('_token','_method','mypic');
        $data['Simgpath'] ='s_'.$picname;
    	$row = DB::table('shopinfo')->where('Sid',$Sid)->update($data);
        $Stid = DB::table('shopinfo')->where('Sid',$Sid)->select('Stid')->first();
    	if($row>0){
    		return redirect('/admin/shopinfo/'.$Stid->Stid)->with('msg','修改成功');
    	}
    }

    //执行删除
    public function destroy($Sid)
    {
        $Stid = DB::table('shopinfo')->where('Sid',$Sid)->select('Stid')->first();
    	$row = DB::table('shopinfo')->where('Sid',$Sid)->delete();
    	if($row>0){
    		return redirect('/admin/shopinfo/'.$Stid->Stid)->with('msg','删除成功');
    	}
    }
}
