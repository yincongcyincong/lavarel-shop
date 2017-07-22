<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="zh-CN" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>
            确认提交订单 - VANCL 凡客诚品
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="{{  url('home/indentimages/favicon.ico')  }}" />
        <link rel="Stylesheet" type="text/css" charset="utf-8" href="{{ url('home/indentcss/css.css')  }}"/>
        <script type="text/javascript" charset="utf-8" src="{{ url('home/indentjs/js.js')  }}">
        </script>
        <!--[if IE 6]>
        <script type="text/javascript">
            document.execCommand("BackgroundImageCache", false, true);
        </script>
        <![endif]-->
        <script type="text/javascript">
            var staticResourcePath = { "img": "http://i.vanclimg.com/", "sslimg": "https://ssl.vanclimg.com/" };
            var staticSitePath ={"isOpened":"false","checkOut":"https://shopping.vancl.com/checkout"};
        </script>
        <script type="text/javascript" src="{{  url('home/js/jquery-1.8.3.min.js')  }}"></script>

    <link rel="Stylesheet" type="text/css" charset="utf-8" href="{{ url('home/indentcss/cs.css')  }}">
    <script type="text/javascript" src="{{ url('home/indentjs/1.js')  }}"></script>
    <script type="text/javascript" src="{{ url('home/indentjs/2.js')  }}"></script>
    <script type="text/javascript" src="{{ url('home/indentjs/3.js')  }}"></script>

    </head>
    <body class="checkout">
        <div class="shade"></div>
        <div id="wrapper">
            <div id="header" class="clearfix">
                    <a class="logo" href="http://www.vancl.com/" title="凡客诚品" target="_blank">
                        <img alt="凡客诚品"  src ="http://i2.vanclimg.com/cms/20140829/vancl-logo.png" />
                    </a>
                    <div class="help-center">
                        <a href="http://help.vancl.com/" target="_blank">帮助中心</a>
                    </div>
            </div>
            <div id="location">
            
               
    <span><a href="http://shopping.vancl.com/mycart">1.我的购物车</a></span> <span>2.填写核对信息单</span>
    <span>3.成功提交订单</span>

            </div>
            <div id="content">
                
<style type="text/css">
    .color{
        border:2px solid #B80000;
    }
</style>
 <script type="text/javascript">
        function change(ob){
            $(ob).siblings('.newaddrdiv').removeClass('color');
            $(ob).addClass('color');
        }
</script>
<div class="wrapper clearfix">
<section class='order-info'  >    <div id="addr" class="addr clearfix">
            <!-- 2015.08.04 更新 -->
        <div class="addr-hd inland-addr-hd addr-hd-new clearfix">
<h3  class="addr-title">收货地址：</h3>    </div>
<section class="inland-addr">
        <form id="modify-addr-form" action="/checkout/setaddress">
        <input type="hidden" name="isForeign" value="false" />
        <div >
         @foreach($list as $v)
        <div class="newaddrdiv addr-selected user-def-addr" onclick='change(this)'>
        <table style='width:500px;'>
        <tbody>
       
                 <tr style='float:left;'>
                    <td >
                        <div class="addr-lang-option-edit">
                            <span>{{  $v->Ufname  }}</span>
                            <span>{{  $v->Ufphone  }}</span>
                            <span>{{  $v->Ufsheng  }}
                                  {{  $v->Ufshi  }}
                                  {{  $v->Uzone  }}
                                  {{  $v->Ufaddress  }}
                            </span>
                            <span>{{ $v->Ufpostalcode }}</span>
                                  
                                 <a href='/indent/{{ $v->id }}/edit'>修改地址</a>
                                 <a href='javascript:doDel({{ $v->id }})'>删除地址</a>
                        </div>

                    </td>
                 </tr>
            
         </tbody>
             </table> 
            
                    </div>

     @endforeach 
     
        </div>
        <div style='clear:both;'>
            <a href='/indent/create' style='color:#B80000;'>添加地址</a>
        </div>
        
        </form>
    <div class="addr-form" style="">
        
    </div>
</section>

    </div>
    <div id="delivery" class="delivery">
      <h3 class="delivery-title addr-hd-new" data-has-delivery=&#39;true&#39; >
    配送方式：
</h3>  

<section class="inland-addr">
    <form id="delivery-form" action="/checkout/setdelivery">
    <ol class="choose-delivery" style="margin-top:8px">
            <li class="delivery-way disnone">
                <h4>
                    送货方式：</h4>
            </li>
            <li class="delivery-way-items " style="margin: 5px 0px 0px 5px;border: none;text-align: left;line-height: 20px; height: 20px;width:100%">                
                <input id="transferId-01" type="radio" class="delivery-radio" style="display:inline;"
                    name="transferId" value="01"
                             checked ="checked"
/>
                <label for="transferId-01" class="delivery-item" style="display:inline;*width:80px; *height:20px;">
                        快递
                </label>
                
                
                       </li>
        <li class="delivery-divide disnone"></li>
        
        <li class="save-delivery-panel" style="line-height: 0px;display:inline">
            <input type="submit" name="sp_cart_delivery_save" style="display:none" class="save-delivery track " value="" />
        </li>
        <li class="delivery-explanation clearfix" style="position:static"><em>声明：</em>
            <div>
                
                <p>1.&nbsp;送货时间：早 8:30至 晚7:30</p>
                2.&nbsp;我们会努力按照您选择的时间进行配送，但因天气、交通等因素影响，您的订单有可能会有延误现象，请您谅解！
            </div>
        </li>
    </ol>
    </form>
    
</section>
<span class="clear"></span>


    </div>
    <div id="pay" class="pay noborder clearfix">
            <div class="pay-hd pay-title">
            <h3  class='pay-title'>支付方式：</h3>
        
        
    </div>    

<section class="inland-addr">
    <form id="pay-form" class="clearfix" action="/checkout/setpayment">
        
       
            <div class="pay-online">            
                <input id="identifier"
                 checked =checked class="fix-ckb-radio other-pay" name="identifier" type="radio" 
                       value="-1$-1$False$False"  
                />
                <label for="identifier" class="  pay-online-label-selected">在线支付</label>            
                       
            </div>
            <div class="cash-on-delivery">         
                
                <label for="COD">&nbsp;</label>
                <span class="cash-on-delivery-items">
                        <input id="01True" name="identifier" type="radio" 
                                value="01$$True$False"
                             class="fix-ckb-radio "/>
                        <label for="01True" class="cash-css-hdfk ">
                            <span class="span1">货到付款</span>
                        </label>
                        <input id="01False" name="identifier" type="radio" 
                                value="01$$False$False"
                             class="fix-ckb-radio "/>
                        <label for="01False" class="cash-css-hdfk ">
                            <span class="span1">在线付款</span>
                        </label>
                    <span class="cash-arrow"></span>
                </span>
                <span class="blankclear" ></span>
            </div>

    </form>
</section>


    </div>

        </div>

        </div>
        
    </section>
    <div id="order-info-panel">
        <div id="all-tips" data-tips="">
</div>
<!--订单显示-->
<form method="post" action="/checkout/save" name="Myform" id="submit-order-form" class="">
<div class="additional-info">
    <h4 class="collapse" style="display: none">
        订单备注</h4>
    <div class="additional-info-content" style="display: none">
        <h5>
            您需要附加说明吗？</h5>
        <div class="additional-info-detail clearfix">
            <div class="comments">
                如有请留言</div>
        </div>
        <div>
            <textarea id="comments" name="comments" class="place-holder" placeholder="此处请勿填写有关配送、支付等方面的信息。留言请在50字以内"></textarea>
            <p class="error">
            </p>
        </div>
    </div>
</div>
<div class="order-info-head">
    <h3 class="clearfix">
        <span class="order-list-title">商品清单</span>
        <a name="sp_cart_gift_back_cart" class="back2cart track" href="{{  url('/home/car')  }}">
            回到购物车，修改产品>></a>  
    </h3>
</div>
    <div class="order-list order-list2 clearfix">
            <div class="order-list-shop" style="display: none">
                店铺:<span class="store-house-shop">
                        <a href="http://mall.vancl.com/10258/">VANCL 凡客诚品旗舰店</a>
                </span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>
                            商品名称
                        </th>
                        <th>
                            尺码
                        </th>
                        <th style="display: none">
                            赠送积分
                        </th>
                        <th>
                            单价
                        </th>
                        <th>
                            数量
                        </th>
                        <th>
                            优惠
                        </th>
                        <th>
                            小计
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $v)
                        <tr class='product'>
                            <td class="name">
                                <a target="_blank" href="{{ url('home/proinfo') }}/{{ $v->Osid }}">{{ $v->Sname }}</a>
                            </td>
                            <td class="size">{{ $v->Ssize }}
                            </td>
                            
                            <td class="price">
                                {{ $v->Dmoney }}￥
                            </td>
                            <td class="qty">{{ $v->Onum }}
                            </td>
                            <td class="preferential">
                                <div class="discount-cx">
                                        -
                                </div>
                            </td>
                            <td class="sub-total">
                                {{ $v->Onum*$v->Dmoney }}￥
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="order-amount">
            商品金额小计:<span class='money'></span> &nbsp;&nbsp;+&nbsp;&nbsp;运费:<span>0￥</span>
            &nbsp;&nbsp;=&nbsp;&nbsp;应付:<em class='money'></em>
        </div>
    </div>
<ul class="all-amount">
        <li><em>已支付：<label id="price-total" data-price-total="0.00">0.00￥</label>，您还需支付：<label id="price-total" data-price-total="168.00" class='money'>168.00￥</label></em></li>
</ul>

<div class="order-submit clearfix">
    <input type="button" id="submit-order-btn" value="提交订单" class='aa' onclick='buy()'>
    <div style="border: 1px solid #EBE5BB; background: #FFFEF5; width: 60%; padding: 15px;
        margin: 0 10px 0 0; float: right; text-align: center; font-size: 14px;">
        祝您下单愉快，普通商品签收之日起7天内，可享受7天无理由退换货
    </div>
    <span style="clear: both;"></span><span class="warn oprate"></span>
</div>
    <!--特惠品移除提示-->
</form>

    </div>
</div>

            </div>

            <div id="footer">
                    <p class="copyrights">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
                    <p class="certs">
                        <a class="ectrustprc" title="中国电子商务诚信单位" href="http://www.ectrustprc.org.cn/seal/splash/1000020.htm" target="_blank">
                            <img alt="中国电子商务诚信单位" src="images/cert-redlogo.gif.png" />
                        </a>
                        <span class="costumeorg" title="中国服装协会会员单位">
                            <img alt="中国服装协会会员单位" src="images/cert-costumeorg.gif" />
                        </span>
                        <a class="online315" href="http://www.315online.com.cn/member/315090053.html" title="网上交易保障中心" target="_blank">
                            <img alt="网上交易保障中心" src="images/cert-wsjybzzx.gif.png" />
                        </a>
                    </p>
            </div>
        </div> 
        <form action='' method='post' name='mform'>
            {{ csrf_field() }}
            <input type='hidden' name='_method' value='delete'>
        </form>  

        <form action="{{ url('home/indentadd') }}" method='post' name='iform'>
            {{ csrf_field() }}
            <input type="hidden" name='Bconsignee' id='Bconsignee'>
            <input type="hidden" name='Bphone' id='Bphone'>
            <input type="hidden" name='Baddress' id='Baddress'>
            <input type="hidden" name='Bpostalcode' id='Bpostalcode'>
            @for ($i = 0;$i < $num;$i++)
                <input type="hidden" name='Bid{{ $i }}' value='{{ $data[$i]->Bid }}'>
                <input type="hidden" name='Osid{{ $i }}' value='{{ $data[$i]->Osid }}'>
            @endfor
            <input type="hidden" name='num' value='{{ $num }}'>
        </form>    
        
<script type="text/javascript">
    var money = 0;
    for (i = 0;i < $('.sub-total').length;i++) {
        
        money += parseInt($('.sub-total').eq(i).html());
    }
    $('.money').html(money+'￥');

    function doDel(id){
        if(confirm('确定要删除吗')){
            var form = document.mform;
            form.action = 'indent/'+id;
            form.submit();
        }
    }

    function buy(){
       console.log($('.color span'))
        if ($('.color span').eq(0).html() != undefined) {
            $('#Bconsignee').val($('.color span').eq(0).html());
            $('#Bphone').val($('.color span').eq(1).html());
            $('#Baddress').val($('.color span').eq(2).html());
            $('#Bpostalcode').val($('.color span').eq(3).html());
            document.iform.submit();
        }else{
            alert('请选择配送地址');
        }
    }
</script>
    </body>
</html>
