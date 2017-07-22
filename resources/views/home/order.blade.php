@extends('home.base.father')
   @section('content') 
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>购物车 - VANCL 凡客诚品</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="Stylesheet" type="text/css" charset="utf-8" href="{{ asset('home/favorites/css/css.css') }}" />
    <script type="text/javascript" charset="utf-8" src="{{ asset('home/favorites/js/js.js') }}"></script>
    <!--[if IE 6]>
    <script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
    <![endif]-->
    <script type="text/javascript">
        var staticResourcePath = { "img": "http://i.vanclimg.com/", "sslimg": "https://ssl.vanclimg.com/" };
        var staticSitePath ={"isOpened":"false","checkOut":"https://shopping.vancl.com/checkout"};
    </script>
    <script type="text/javascript" src="{{ asset('home/js/jquery-1.8.3.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="{{ asset('home/favorites/css/css_1.css') }}" />

    <style>
        #header{
            position: relative;
            top:-130px;
        }
        #location{
            position: relative;
            top:-100px;
            left:20px;
        }
        #content{
            position: relative;
            top:-70px;
            left:50px;
        }
    </style>
</head>
<body class="mycart">
    <form action='' method='post' name='myform'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='hidden' name='_method' value='delete'>
    </form>
    <div class="shade"></div>
    <div id="wrapper">
        <div id="header" class="clearfix">
            <a class="logo" href="http://www.vancl.com/" title="凡客诚品" target="_blank">
                <img alt="凡客诚品"  src ="favorites/picture/vancl-logo.png" />
            </a>    
        </div>
        <div id="location">
            <em>1.我的订单</em>
        </div> 
    <!-- - =======================** 购物 **  ================================ -->
        <div id="content"> 
            <div id="cart-gift">
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th class="title-white bd-left">
                            &nbsp;
                        </th>
                        <th class="image">
                            &nbsp;
                        </th>
                        <th class="name">
                            商品名称
                        </th>
                        <th class="size">
                            尺寸
                        </th>
                        <th class="price">
                            颜色
                        </th>
                        <th class="price">
                            送货方式
                        </th>
                        <th class="qty">
                            数量
                        </th>
                        <th class="subtotal">
                            小计
                        </th>
                        <th class="operate ">
                            操作
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @for($i = 0;$i < $ss;$i++)
                    <tr>
                        <td>&nbsp;</td>
                        <td><img src="{{ url('/admin/picture') }}/{{ $ll[$i]->Simgpath }}" /></td> 
                        <td>{{ $ll[$i]->Sname }}</td>  
                        <td>{{ $oo[$i]->Ssize }}</td> 
                        <td>{{ $oo[$i]->Scolor }}</td>  
                        <td>{{ $oo[$i]->Dname }}</td>  
                        <td>{{ $oo[$i]->Onum }}</td>  
                        <td class="price">{{ $oo[$i]->Dmoney*$oo[$i]->Onum }}</td> 
                        <td><a class="del track" name="sp_cart_mycart_del" href="javascript:doDel({{ $oo[$i]->Oid }})">
                                删除</a></td>  
                    </tr>
                    @endfor
                </tbody>
            </table>

            
            </div>
        </div>
    </div>
</body>
<script>
   
    function doDel(Oid)
    {
        if(confirm('确定要删除吗？')){
            var form = document.myform;
            form.action = '/home/order/'+Oid;
            form.submit();
        }
    }


    
</script>
@endsection    

