<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndentEditController extends Controller
{
    //
    public function edit(Request $request,$id)
    {
    	$data = $request->except('_token');
    	$row = DB::table('userinfo')->where('id',$id)->update($data);
    	if ($row > 0) {
    		return redirect('home/indents');
    	}
    }
}
