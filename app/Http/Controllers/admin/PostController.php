<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PostController extends Controller
{
    //
    public function index($id,Request $request)
    {
        
    	if ($request->input('deliver') == '0') {
    		$row = DB::table('indent')->where('Bid',$id)->update(['Bdelivered'=>'1']);
    		echo $row;
    	}else{
    		$row = DB::table('indent')->where('Bid',$id)->update(['Bdelivered'=>'2']);
    		echo $row;
    	}
    	
    }
}
