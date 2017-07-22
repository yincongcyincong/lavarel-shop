@extends('home.base.father')
   @section('content') 

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
            <em>1.我的购物车</em>
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
                        <th class="bar-title ">
                            <button onclick='doSelect(1)'>全选</button>
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

                <tbody id='data'>
                    @for($i = 0;$i < $ss;$i++)
                    <tr >
                        <td>&nbsp;</td>
                        <td><input class="track ckb" name="like[]"  checked="checked"  type="checkbox" ></td>
                        <td><img alt="{{ $ll[$i]->Sname }}" src="{{ url('/admin/picture') }}/{{ $ll[$i]->Simgpath }}" /></td> 
                        <td>{{ $ll[$i]->Sname }}</td>  
                        <td>{{ $car[$i]->Ssize }}</td> 
                        <td>{{ $car[$i]->Scolor }}</td>  
                        <td>{{ $car[$i]->Snum }}</td>  
                        <td class="price">{{ $ll[$i]->Sprice*$car[$i]->Snum }}</td> 
                        <td><a class="del track" name="sp_cart_mycart_del" href="javascript:doDel({{ $car[$i]->id }})">
                                删除</a></td>  
                    </tr>
                    @endfor
                </tbody>
            </table>
            
            <div style="top: 0px;" id="bar-summary" class="bar-summary clearfix">
            <div class="summary">
                
                产品金额总计(不含运费)：
                <span class="amount">￥

                    <em class="zong"></em>
                </span>
               
            </div>
            <div class="btn-panel">
                <a href="/home/zhuye" class="go-buy track" name="sp_cart_mycar_goBuy">
                    &lt;&lt;继续购物
                </a>

                <a class="checkout track" href="javascript:buy();" id="nowbuy" name="sp_cart_mycar_goPay">
                    <span>去结算&gt;&gt;</span>
                </a>
            </div>   
    <!-- ================= * 结束 * =============== -->
             
            <form action="{{ url('home/jiesuan') }}" method="post" id="jsform">
                {{ csrf_field() }}
                @for($i = 0;$i < $ss;$i++)
                <input type="hidden" name="Osid{{ $i }}" value="{{ $ll[$i]->Sid }}">
                <input type="hidden" name="Onum{{ $i }}" value="{{ $car[$i]->Snum }}">
                <input type="hidden" name="Scolor{{ $i }}" value="{{ $car[$i]->Scolor }}">
                <input type="hidden" name="Ssize{{ $i }}" value="{{ $car[$i]->Ssize }}" >
                <input type="hidden" name="Dmoney{{ $i }}" value="{{ $ll[$i]->Sprice }}">
                <input type="hidden" name="Sname{{ $i }}" value="{{ $ll[$i]->Sname }}" >
                @endfor
                <input type="hidden" name='n' value='{{ $ss }}'>
                <input type="hidden" name='arr' value='' id='arr'>
            </form>
            
            </div>
            </div>
        </div>
    </div>

<script>
    //点击去结算
    function buy(){
        //设置一个空数组
        var arr = [];

        var n = {{ $ss }}
        for (var i = 0; i < n; i++) {
            if ($('input:checkbox').eq(i).attr('checked')) {
                arr[i] = i;
            };
        };
        
        $('#arr').val(arr);


            var mform = $('#jsform');
            console.log(mform);
            mform.submit();


        
    }
    

    //1.获取所有的多选框
    var list = document.getElementsByTagName('input');
    function doSelect(a)
    {
        switch(a){
            case 1:
                for (var i = 0; i < list.length; i++) {
                    list[i].checked = true;
                };
            break;
        }
        
    }

    function doDel(id)
    {
        if(confirm('确定要删除吗？')){
            var form = document.myform;
            form.action = '/home/car/'+id;
            form.submit();
        }
    }


    var info = 0;
    $("input:checked").each(function(){
        info += Number($(this).parent().siblings('.price').html());
    })
    $('.zong').html(info); 


    // 点击全选
    $('button').click(function(){
        var info = 0;
        $("input:checked").each(function(){
            info += Number($(this).parent().siblings('.price').html());
        })
        $('.zong').html(info);
    });

    //点击选中
    $("input:checkbox").click(function(){
        var info = 0;
        $("input:checked").each(function(){
            info += Number($(this).parent().siblings('.price').html());
        })
        $('.zong').html(info);
    });
</script>
@endsection    

