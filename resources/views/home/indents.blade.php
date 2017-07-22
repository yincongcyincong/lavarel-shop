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
            <em>1.订单信息</em> 
        </div> 
    <!-- - =======================** 购物 **  ================================ -->
        <div id="content"> 
            <div id="cart-gift">
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th class="name">
                            收货人
                        </th>
                        <th class="size">
                            收货地址
                        </th>
                        <th class="price">
                            收货人电话
                        </th>
                        <th class="price">
                            邮编
                        </th>
                        <th class="qty">
                            订单时间
                        </th>
                        <th class="subtotal">
                            是否送到
                        </th>
                        <th class="operate ">
                            操作
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($ll as $v)
                    <tr>
                        <td>{{ $v->Bconsignee }}</td>  
                        <td>{{ $v->Baddress }}</td> 
                        <td>{{ $v->Bphone }}</td>  
                        <td>{{ $v->Bpostalcode }}</td>  
                        <td>{{ $v->Bdate }}</td>  
                        
                        <td class='post'>
                        @if($v->Bdelivered == 1)
                            已送货
                        @elseif($v->Bdelivered == 2)
                            订单完成
                        @else($v->Bdelivered != 1 && $v->Bdelivered != 2)
                            已支付
                        @endif
                        </td>
                        <td><a class="del track" name="sp_cart_mycart_del" href="javascript:doDel({{ $v->Bid }})">
                                删除</a>
                            @if($v->Bdelivered == 1)
                                <a class="del track" name="sp_cart_mycart_del" onclick = "doPost(this,{{ $v->Bid }});" style='cursor:pointer;'>已收货</a>
                            @endif
                        </td>  
                    </tr>
                    @endforeach       
                </tbody>
            </table>
            </div>
        </div>

    </div>

</body>
<script>
   
    function doDel(Bid)
    {
        if(confirm('确定要删除吗？')){
            var form = document.myform;
            form.action = '/home/indents/'+Bid;
            form.submit();
        }
    }

     function doPost(ob,id)
    {
        
        if (confirm('你确定已经发货了吗?')) {
            $.ajax({
                url:'/admin/post/'+id,
                type:'get',
                async:true,

                success:function(data)
                {
                   $(ob).html('');
                   $(ob).parents('td').siblings('.post').html('订单完成'); 
                   
                },
                error:function()
                {
                    alert('ajax请求失败');
                }
            });
        };
    }

    
</script>
@endsection    

