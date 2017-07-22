<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{

  //显示login页面;
    public function index()
    {
        //转到登录页面
        return view('home.login');
    }

    public function doLogin(Request $request)
    {
        //获取session里面的mycode
        $mycode = session()->get('mycode');


        //比较输入的验证码和实际的验证码是否匹配
        if ($mycode != $request->input('code')) {
            return redirect('home/login')->with('msg','验证码错误');
        }

        //接收发送的Uname
        $name = $request->input('Uname');

        //查找数据库查找账号的信息
        $data = DB::table('users')->where('Uname',$name)->first();
        
        //判断账号和密码是否正确
        if ($data) {

            if ($request->input('Upwd') == $data->Upwd) {

                //如果正确就存进session
                session(['homeindex'=>$data]);
            

                //重定向进入主页
                return redirect('home/zhuye');
            }
        }

        //账号密码错误的话就返回登录页面
        return back()->with('msg','账号或密码错误!');
    }

    public function logout()
    {
        //删除session
        session()->forget('homeindex');
        
        //重定向
        return redirect('/home/zhuye')->with('msg','退出登录成功');

    }

    public function captch()
    {
         //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        session()->flash('mycode', $phrase);
        // //生成图片
        return response($builder->output())->header('content-type','image/jpeg');
    }
}
