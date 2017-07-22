@extends('home.base.father')

@section('content')
<script type="text/javascript" src='{{ asset("home/js/jquery-1.8.3.min.js") }}'></script>
    <style type="text/css">.SpriteWashings{background-image: url(images/joinimages.ashx); width:60px; height:80px; display:inline-block; margin-right:12px}.SpriteColors{background-image: url(images/joinimages.ashx); width:36px; height:36px; display:inline-block;float:left;}
        
        #clickColor{
            background:#A90808;
        }
        #nowbu{
            font-size:17px;
            color:white;
            line-height:30px;
            text-align:center;
        }
    </style> 
<title>VANCL 凡客诚品</title>

    

<div class="AddtoCar fr">
      <a href="#ProductTitleHide" class="cartab" id="hidCartab"></a>

</div>

    </div>
    
    <div class="danpinBox">
        <input id="CustomerMade" type="hidden" value="NoMade"/>
        <a name="top"></a><span class="blank10"></span>
        
        
        <div class="breadNav">
            <a href="#" title="首页" name="nav">
    首页</a><span>&gt;</span>
<a href="{{ url('home/productlist') }}" title="衬衫">
    衬衫</a><span>&gt;</span>
<a href="{{ url('home/productlist') }}/{{ $shopinfo->Stid }}">
  {{ $ptype->Stype }}  </a><span>&gt;</span>

<input id="mainCategories" type="hidden" value="27531,27544,28806" />
            <span id="styleinfo" name="989576">
                {{ $shopinfo->Sname }}</span>
        </div>
        
        <span class="blank0"></span>
        <div class="danpinArea">
        <div id="ProductTitleShow" class="danpinTitleTab newclear">
                

<style type="text/css">
    #ProductTitleShow #productTitle .brandNumArea
    {
        display: none;
    }
</style>
<div id="productTitle">
    <div class="brandNumArea">
        <span id="productcode">商品编号：5767924</span></div>
    
    <h2 >{{ $shopinfo->Sname }}</h2>
    
    <ul class="ProductSubnav fr" id="ItemTag">
        
        <li><a href="#anchorPinglun">评论</a>|</li>
        <li><a href="#anchorQuiz">提问</a></li>
    </ul>
</div>

    </div>
    <span class="blank30"></span>
    <div class="blank0">
    </div>
    <div class="danpin_colLef">

<div class="danpinColCenter">
    <div class="bigImg" id="vertical">
        <img id="midimg" src="{{ url('admin/picture') }}/{{ ltrim($show[0]->Simgpath,'s_') }}"  />
        <div id="winSelector" style="left: 0px; top: 0px; display: none;">
        </div>
    </div>
    
</div>

            </div>
            <div id="danpinRight" class="danpinRight" style="top: 0px">
                <div class="danpinfixedtitle">
                    <h4 class="fl">
                        加入购物车
                    </h4>
                    <span class="close1 fr"></span>
                </div>
                <div class="danpinFixedLeftContent">
                    <img id="danpinFixedLeftContentImg" src="{{ url('home/picture/5767924-1j201508251312348454.jpg') }}" title=""
                        alt="" />
                </div>
                <div class="danpinFixedRightContent">
                    <div name="Normal" id="pricearea">
                        

<input id="shopid" type="hidden" value="10258" />
<span class="blank10"></span>

<style type="text/css">
    .priceLayout
    {
        color: Black !important;
        
    }
    .priceLayout1
    {
        position: relative;
        top: 1px;
        margin-right: -5px;
        margin-left: -5px;
        *margin-right: 0px !important;
        *margin-left: 0px !important;
    }
    .priceLayout2
    {
        position: relative;
        top: 2px;
    }
    
    .tehuipricelayout
    {
        *position: relative; 
        *top: 13px;
    }
    .tehuipricelayout1
    {
        *position: relative; 
        *top: 14px;
    }
    .tehuipricelayout2
    {
        *top: -1px;
    }
</style>
<div class="cuxiaoPrice ">
    
    <span class="tehuiMoney" style="line-height: 26px;">
        
        <span>
            售价：</span><span>￥<strong id='price'>{{ $show[0]->Sprice }}</strong></span>
    </span>

</div>
<span class="blank20"></span>

    </div>
    <div class="selectArea">
        <div class="selColorArea">
            <span class="blank10"></span>
            
<a id="colorlist"></a>
<div class="danpinColor_Select" >
    <div class="danpinColorTitle" style="line-height: 18px;">
        <p>
            颜色：</p>
    </div>
    <div class="selColor">
        <ul>
             
            @for($i=0;$i<$num;$i += 7)
            <li  name="5767924" onclick='doChange(this,{{ $show[$i]->Sid }})' @if($i == 0) id="onlickColor"  @endif>
                
                <div class="colorBlock" name="False">
                    
                        <p style='width:60px; font-size:15px;'>{{ $show[$i]->Scolor }}</p>
                    
                </div>
                @if($i == 0) 
                    <span class="colorHoverok"></span>
                  @endif
            </li>
            @endfor
        </ul>
    </div>
</div>

                            <div class="selSizeArea">
                                

<div class="danpinColorTitle" >
    <p>
        尺码：</p>
</div>
<div class="selSize" >
    <ul>
    @foreach($show as $v)
    
        @if($v->Scolor == $show[0]->Scolor)
        <li onclick="ChooseThisSize(this)" name="14297589">
            <p>{{ $v->Ssize }}</p>
        </li>
        @endif
   
    @endforeach
     </ul>
</div>

<div class="danpin_xuanzeGMcm" style="display:none;">
    <span style="height: 16px; display: block; width: 16px; background-position: -1911px 0pt; margin: 2px;float: left; " class="sprites"></span>
    <p>
        请选择您要购买的商品尺码</p>
</div>

                            </div>
                            <div class="blank8ie">
                            </div>
                            

<div class="goodsNum">
    <div class="danpinColorTitle" style="line-height: 18px;">
        <p>
            数量：</p>
    </div>
    <div class="danpinnumSelect">
        <select id="selectedAmount">
            
            <option value="1">
                1</option>
            
            <option value="2">
                2</option>
            
            <option value="3">
                3</option>
            
            <option value="4">
                4</option>
            
            <option value="5">
                5</option>
            
            <option value="6">
                6</option>
            
            <option value="7">
                7</option>
            
            <option value="8">
                8</option>
            
            <option value="9">
                9</option>
            
            <option value="10">
                10</option>
            
        </select>
        <span id="comeon" class="LastNum">余量有限</span> <span class="blank15"></span>
    </div>
</div>
<span class="blank0"></span>
<div class="AreaItotal SelectGoods">
    <div class="SelectAreaItotal SelectGoods">
        <div class="goodsAddArea SelectGoods">
            <div class="danpinColorTitle">
                <p class="SelectDetail">
                    已选：</p>
            </div>
            <div class="goodsAdd">
                <p class="SelectName">
                </p>
                <span class="SelectPoint"></span><p class="SelectSize">
                </p>
                <p class="NowHasGoods">
                    现在有货</p>
                <span class="blank0"></span>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .lijidingzhiG
    {
        background: #B4B4B4;
        width: 166px;
        height: 40px;
        display: block;
        float: left;
        margin-right: 13px;
        border: solid 1px #675D5D;
        text-align: center;
        line-height: 40px;
    }
    .lijidingzhiG span
    {
        display: block;
            font-size: 20px;
            font-weight: bold;
            color: white;}
    .lijidingzhiR
    {
        background: #A50309;
        width: 166px;
        height: 40px;
        display: block;
        float: left;
        margin-right: 13px;
        line-height: 40px;
        border: solid 1px rgb(183, 27, 33);
        text-align: center;
        }
        .lijidingzhiR span
        {
            display: block;
            font-size: 20px;
            font-weight: bold;
            color: white;
}
            }
</style>

<div class="shoppingNews">
    @if(session('homeindex'))
    <a id="nowbu" name="item-item-select-shopping" href="javascript:buy({{ $shopinfo->Sid }});" class="btnnowbuy track"><span>立即购买</span></a>
    @else
     <a id="nowbu" name="item-item-select-shopping" href="{{ url('home/login') }}" class="btnnowbuy track"><span>立即购买</span></a>
    @endif
    @if(session('homeindex'))
    <a id="addToShoppingCar" name="item-item-select-shopping" href="javascript:shoppingCar({{ $shopinfo->Sid }});" class="btnaddtocart track"></a>
     @else
     <a id="addToShoppingCar" name="item-item-select-shopping" href="{{ url('home/login') }}" class="btnaddtocart track"></a>
    @endif
</div>

                            <span class="blank20"></span>
                        </div>
                        <div class="blank0">
                        </div>
                    </div>
                    <div id="promotion">
                        
<div class="danpin_YhTsBox danpin_YhTsTab " >
    <h4>
        <span>优惠提示</span></h4>

    <ul>
        
        <li>全场购物满199元免运费 
            </li>
        
    </ul>
</div>

                    </div>
                    <div class="blank15">
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <div id="reshouMainH">
            
        </div>
        <input id="hdCategoryCode" type="hidden" value="1333" />
        
        <span class="blank20"></span>
        <div class="sideBarSettabArea">
            
            <div class="RsetTabArea">
                <div id="product_set">
                    
                </div>
                
                

<div id="floatposition"></div>




                <span class="blank8"></span>
                

<div class="SaleTips">
    
    <span class="TipsTitle" style="font-size: 16px; font-weight: bold; color: #a10000;">
        温馨提示:</span>
    
    <div style="width:850px">
        
        <p>
            
            <p style="font-size: 16px; font-weight: bold; color: #a10000;">
                <em>[售后服务]</em>该商品属于特殊商品，不支持7天无理由退换货。
            </p>
            
        </p>
        
    </div>
    <span class="blank0"></span>
</div>
<span class="blank5"></span>


<div class="itemtagcontentpart">
    <style type="text/css">/* tab */





.danpinTitleTab ul.ProductSubnav li a {
	font-family: 微软雅黑;
	color: #000;
	font-weight: bold;
	font-size: 15px;
}</style>
<p>
    <input id="floatTitleHide" value="购买指南#testFloat1,模特搭配#testFloat2,版型工艺#testFloat3,设计细节#testFloat4,洗涤保养#testFloat5" type="hidden"/>
</p>
<div id="testFloat1">
    
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_03.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="170" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_04.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="126" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_05.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="169" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_06.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="104" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_07.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="111" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_08.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="145" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_09.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="99" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_10.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="158" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_11.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="163" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_12.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="188" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_13.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="67" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_14.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="54" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" align="center" border="0">
        <tbody>
            <tr class="firstRow">
                <td colspan="3">
                    <img src="{{ url('home/picture/300_15.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="141" width="1200"/>
                </td>
            </tr>
        </tbody>
    </table>
    <div id="testFloat2">
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_16.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="158" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_17.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="88" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_18.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="188" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_19.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="199" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_20.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="339" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_21.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="233" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_22.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="183" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_23.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="220" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_24.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="168" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_25.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="257" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td colspan="3">
                        <img src="{{ url('home/picture/300_26.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="138" width="1200"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" align="center" border="0">
            <tbody>
                <tr class="firstRow">
                    <td>
                        <a href="http://item.vancl.com/6373493.html" target="_blank"><img src="{{ url('home/picture/300_27.jpg') }}" alt="凡客羊毛西服" height="577" width="400"/></a><a href="http://item.vancl.com/6373773.html" target="_blank"><img src="{{ url('home/picture/300_28.jpg') }}" alt="凡客羊绒衫" height="577" width="400"/></a>
                    </td>
                    <td>
                        <a href="http://item.vancl.com/6373591.html" target="_blank"><img src="{{ url('home/picture/300_29.jpg') }}" alt="弹力免烫" height="577" width="400"/></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="testFloat3">
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_30.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="231" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_31.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="219" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_32.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="249" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_33.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="164" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_34.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="190" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_35.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="86" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_36.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="100" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_37.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="216" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_38.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="227" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_39.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="225" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_42.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="101" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_43.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="172" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_44.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="197" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_45.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="256" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_46.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="92" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_47.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="81" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_48.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="81" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_49.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="142" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_50.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="198" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_51.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="197" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_52.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="375" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_53.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="189" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_54.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="186" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_55.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="231" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_56.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="235" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_57.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="335" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_58.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="148" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_59.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="188" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_60.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="207" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_61.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="235" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_62.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="273" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_63.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="183" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_64.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="186" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_65.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="155" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_66.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="199" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_67.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="237" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_68.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="162" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_69.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="146" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_70.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="138" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_71.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="282" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_72.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="238" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_73.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="150" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_74.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="134" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_75.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="226" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_76.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="162" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_77.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="297" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_78.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="137" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_79.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="243" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_80.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="276" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_81.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="252" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_82.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="91" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_83.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="207" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_84.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="351" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_85.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="219" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_86.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="380" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_87.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="174" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_88.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="205" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_89.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="234" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_90.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="204" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_91.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="153" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_92.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="132" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_93.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="185" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_94.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="156" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_95.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="210" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_96.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="189" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/5767924.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="139" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_98.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="186" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_99.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="150" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_100.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="158" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_101.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="183" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" align="center" border="0">
                <tbody>
                    <tr class="firstRow">
                        <td colspan="3">
                            <img src="{{ url('home/picture/300_102.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="156" width="1200"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="testFloat4">
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_103.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="222" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_104.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="336" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_105.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="400" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_106.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="218" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_107.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="304" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_108.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="275" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="0" align="center" border="0">
                    <tbody>
                        <tr class="firstRow">
                            <td colspan="3">
                                <img src="{{ url('home/picture/300_109.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="298" width="1200"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="testFloat5">
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_110.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="165" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_111.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="192" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_112.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="216" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_113.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="234" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_114.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="179" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/300_115.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="87" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" align="center" border="0">
                        <tbody>
                            <tr class="firstRow">
                                <td colspan="3">
                                    <img src="{{ url('home/picture/4msjhyss.jpg') }}" alt="凡客衬衫 吉国武 SOKTAS 300" height="202" width="1200"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style type="text/css">
    #anchor1
    {
        width: 1px;
        height: 1px;
        visibility: hidden;
        position: absolute;
        top: 710px;
        *position:static;
        *display:block;
        *width:1px;
        *height:50px;
        *overflow:hidden;
        *top:none
    }
    
    
    
    #feedback
    {
        width: 1px;
        height: 1px;
        visibility: hidden; 
        position: absolute;
        bottom: 40px;
        *position:static;
        *display:block;
        *width:1px;
        *height:30px;
        *overflow:hidden;
        *top:none;
    }
</style>
<div class="RsetTabCon">
    <span class="blank15"></span><a id="anchor1"></a>
    <div class="area1">
        <div style="position: relative; top: 0px; right: 0px; z-index: 0">
            
            <span class="blank20"></span>
            
   <div id="attr" style="display:block;">
<h3>
    产品属性：(点击属性可查看同类商品)</h3>
<div class="dpShuXing">
    <ul>
        
        <li title="点击查看同类商品"><span>人群：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18568.html' target='_blank'>男</a></li>
        
        <li title="点击查看同类商品"><span>风格：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18586.html' target='_blank'>商务</a></li>
        
        <li title="点击查看同类商品"><span>季节：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18706.html' target='_blank'>四季</a></li>
        
        <li title="点击查看同类商品"><span>厚度：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18736.html' target='_blank'>薄</a></li>
        
        <li title="点击查看同类商品"><span>版型：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18758.html' target='_blank'>宽松</a></li>
        
        <li title="点击查看同类商品"><span>袖长：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18769.html' target='_blank'>长袖</a></li>
        
        <li title="点击查看同类商品"><span>袖型：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18771.html' target='_blank'>常规袖</a></li>
        
        <li title="点击查看同类商品"><span>领型：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a20002.html' target='_blank'>温莎领</a></li>
        
        <li title="点击查看同类商品"><span>衣门襟：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a264687.html' target='_blank'>三折门襟</a></li>
        
        <li title="点击查看同类商品"><span>衣长：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a18824.html' target='_blank'>常规款</a></li>
        
        <li title="点击查看同类商品"><span>花色：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a20005.html' target='_blank'>素色</a></li>
        
        <li title="点击查看同类商品"><span>面料：</span><a class='track' name='item-item-info-attrib' href='//s.vancl.com/28806-a20296.html' target='_blank'>纯棉</a></li>
        
    </ul>
    <span class="blank0"></span>
</div>
</div>
<span class="blank20"></span>

        </div>
        
        <a id="feedback"></a>
    </div>
</div>

       
            
            
            
<div class="ptPinglunRig fr" style="width: 1198px; padding: 0px;">
                   
                                

<style type="text/css">
    #anchorQuiz
    {
        width: 1px;
        height: 1px;
        visibility: hidden;
        position: absolute;
        bottom: 42px;
        *position:static;
        *display:block;
        *width:1px;
        *height:1px;
        *overflow:hidden;
        *top:none;
    }
    .tb-thumb{margin:0 0 10px;overflow:hidden;}
    .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
    .tb-thumb .tb-selected{border:1px solid #d46a6a;height:40px;padding:2px;}
    .tb-thumb .tb-selected:after{display: inline-block;
    width: 0;
    height: 0;
    font-size: 0;
    line-height: 0;
    border-top: 6px solid #f60;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;}
    .tb-thumb li div{border:1px solid #CDCDCD;}
    
    .pichide{margin-right: 3px;background-image: url(images/stoppic.png); padding-left: 8px; background-repeat: no-repeat;}
    
    .findyunatu{background-image: url(images/yuantu.png);padding-left: 13px;background-repeat: no-repeat;}
    
    .rotateleft{padding-left: 15px;background: url(images/leftxz.jpg) no-repeat;margin-left: 10px;}
     .rotateright{padding-left: 15px;background: url(images/rightxz.jpg) no-repeat;margin-left: 10px;}
    .toleft{z-index: 1;
    position: absolute;
    left: 10px;
    text-align: center;
    width: 30px;
    height: 92%;
    cursor:pointer;
    top: 30px;
    background-image: url(images/lr.png);
    background-repeat: no-repeat;
    background-position: center;}
    .toleft:hover{ background-image: url(images/lrhover_left.png);}
    
    .toright
    {
        z-index: 1;
        top: 30px;
        right: 10px;
        position: absolute;
        background-image: url(images/lr_r-02.png);
        background-repeat: no-repeat;
        background-position: center;
        width: 30px;
        height: 92%;
        cursor: pointer;
        }
   .toright:hover{ background-image: url(images/rightpichover.png);}
</style>

<div class="NewComment">
    <h2 class="hotTitle" id='hotTitle' style="position: static; top: 0px; left: 0px; height: 40px;
        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
        
        <span style="font-weight: bold;">最新评论(<span id="feedbackcount0">0</span>)</span>
        <input id="hidPlCount" type="hidden" value="0" />
        
        <div class="pinglunTabRig fr" style="line-height: 40px; width: 120px; height: 33px;
            float: right; padding: 0px; margin-top: 3px; *margin-top: -38px; margin-right: 32px;
            border-top: 0px dotted #b4b4b4;">
            <a href="//my.vancl.com/comment/Appraisetransfer/989576" style="width: 120px;
                height: 33px; background-color: #d46a6a; color: #fff; display: block; vertical-align: middle;
                float: right; line-height: 33px;"><span style="line-height: 33px;">我要评论</span></a>
        </div>
    </h2>
    @foreach($list as $v)
   <div>
       <div style='margin-left:24px;border-bottom:1px solid #BBBBBB;border-right:1px solid #BBBBBB;height:150px;width:150px; float:left;'>
          <span style='position:relative; top:20px;'>评论人:{{ $v->Uname }}</span> 
       </div>
       <div style='border-bottom:1px solid #BBBBBB;height:150px;width:1000px; float:left;'>
           <span style='position:relative; top:20px;left:200px;'>{{ $v->details }}</span>
           <span style='position:relative; top:120px;left:700px;'>评论等级:{{ $v->Ugrade }}</span> 
       </div>

   </div>
   <style type="text/css">
        .pagination {
          display: inline-block;
          padding-left: 0;
          margin: 20px 0;
          border-radius: 4px;
        }
        .pagination > li {
          display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
          position: relative;
          float: left;
          padding: 6px 12px;
          margin-left: -1px;
          line-height: 1.42857143;
          color: #337ab7;
          text-decoration: none;
          background-color: #fff;
          border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
          margin-left: 0;
          border-top-left-radius: 4px;
          border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
          border-top-right-radius: 4px;
          border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
          color: #23527c;
          background-color: #eee;
          border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
          z-index: 2;
          color: #fff;
          cursor: default;
          background-color: #B81C22;
          border-color:#B81C22;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
          color: #777;
          cursor: not-allowed;
          background-color: #fff;
          border-color: #ddd;
        }
        .pagination-lg > li > a,
        .pagination-lg > li > span {
          padding: 10px 16px;
          font-size: 18px;
        }
        .pagination-lg > li:first-child > a,
        .pagination-lg > li:first-child > span {
          border-top-left-radius: 6px;
          border-bottom-left-radius: 6px;
        }
        .pagination-lg > li:last-child > a,
        .pagination-lg > li:last-child > span {
          border-top-right-radius: 6px;
          border-bottom-right-radius: 6px;
        }
        .pagination-sm > li > a,
        .pagination-sm > li > span {
          padding: 5px 10px;
          font-size: 12px;
        }
        .pagination-sm > li:first-child > a,
        .pagination-sm > li:first-child > span {
          border-top-left-radius: 3px;
          border-bottom-left-radius: 3px;
        }
        .pagination-sm > li:last-child > a,
        .pagination-sm > li:last-child > span {
          border-top-right-radius: 3px;
          border-bottom-right-radius: 3px;
        }

   </style>

    @endforeach
    {{ $list->links() }}
   <div id='comment'>
       <textarea style='width:1050px; margin-left:70px; margin-top:10px; height:140px;resize:none;' name='details' id='content'></textarea><br><br>
       <input type="radio" name='Ugrade' value='1' style="margin-left:400px;">好评
       <input type="radio" name='Ugrade' value='2' checked>
       中评
       <input type="radio" name='Ugrade' value='3' >
       差评
       <input type="button" value='提交' style="width:160px; height:35px; background:#B81C22;margin-left:50px;color:white;"
       @if(session('homeindex')) 
       onclick="comment({{ $shopinfo->Sid }},'{{ session('homeindex')->Uname }}')" 
       @else onclick='alert("请登录")' 
       @endif>
   </div>
<script type="text/javascript">
    function comment(id,name){
        if ($('#content').val() == '') {
            alert("请输入评论内容");
        }else{
            var details = $('#content').val();
            var grade = $('input:checked').val();
            console.log(grade);

            $.ajax({
                url:'/home/comment/'+id,
                type:'post',
                async:true,
                data:{Ugrade:grade,details:details},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data)
                {
                    if (data >0) {
                        var comment = "<div>"
                           comment += "<div style='margin-left:24px;border-bottom:1px solid #BBBBBB;border-right:1px solid #BBBBBB;height:150px;width:150px; float:left;'>";
                            comment += "<span style='position:relative; top:20px;'>评论人:"+name;
                            comment += "</span>" 
                          comment += "</div>"
                           comment +="<div style='border-bottom:1px solid #BBBBBB;height:150px;width:1000px; float:left;'>"
                              comment += "<span style='position:relative; top:20px;left:200px;'>"+details;
                              comment +="</span>"
                               comment +="<span style='position:relative; top:120px;left:700px;'>评论等级:"+grade;
                              comment += "</span>"
                           comment +="</div>"
                        comment += "</div>";

                       $(comment).insertAfter('#hotTitle');
                    }else{
                        alert('没有购买商品不能评论!');
                    }
                },
                error:function()
                {
                    alert('ajax请求失败');
                }
            });
        }
    }
</script>

</div>
<a id="anchorQuiz">&nbsp</a>
 </div>
<div>                                
<span class="blank20"></span>
<div class="area3 root" name="9">
    
    <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
        <span>常见问题</span> <span class="zuixinpinglunnum">(共<strong id="quizcount">9</strong>条)</span>
        <div class="pinglunTabRig fr" style="line-height: 40px; width: 120px; height: 33px;
            float: right; padding: 0px; margin-top: 3px; *margin-top:-38px; margin-right: 32px;  border-top: 0px dotted #b4b4b4;">
            <span id="tiwen"><a href="#quiz" name="quiz">
                </a></span>
        </div>
    </h2>
    <div class="area3Head" style="display: none;">
        <span style="float: left; display: none;" class="area3Sp01">
            <div class="sprites" style="width: 14px; height: 14px; background-position: -3482px 0;
                margin: 6px;">
            </div>
        </span><span class="zuixinpingluntitle">常见问题</span> <span class="zuixinpinglunnum"></span> <span id="tiwen"><a
                class="danpinBtnStyle track" name="item-item-quiz-mine" href="#1"><span>常见问题</span></a>
                <a href="#quiz" name="quiz"></a></span>
        
        <span style="float: right; display: none;">
            <select style="float: left;" id="questionOrderType">
                <option style="float: left;" selected="selected" value="0">更新时间</option>
                <option value="1">回复次数</option>
            </select>
        </span><span style="float: right; display: none;">排序方式：</span>
        
    </div>
    
    <div id="stylequestionslist">
        
        <div class="area3Con">
        
            <div class="areaquestion" style="    border-top: 0px dotted #b4b4b4;">
           
            
                <span class="blank20"></span>
                <div class="userQuesArea">
                    <h4>
                        <span class="danpinQ fl">Q</span>1376***：</h4>
                    <h5>
                        2016-12-09<a href="/styles/ajaxquizreplylist.mvc?id=3936300&first=true"
                            class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                </div>
                <div class="questionTitle">
                    怎么下不了单</div>
                <span class="blank30"></span>
                
                <h6 style="display: none;">
                    管理员45046<span>回答：</span></h6>
                <p class="adminAsk">
                    <span class="danpinA fl">A</span>
                    亲爱的用户您好，点击单品页面选择颜色和尺码后加入购物车结算，具体流程建议咨询在线客服或者电话客服，感谢您的支持\(^o^)/     </p>
                
            </div>
            <span class="blank15"></span>
            <div style="display: none;" class="notesNewpl">
            </div>
        </div>
        
        <div class="area3Con">
        
                 <div class="areaquestion">
          
            
                <span class="blank20"></span>
                <div class="userQuesArea">
                    <h4>
                        <span class="danpinQ fl">Q</span>1350***：</h4>
                    <h5>
                        2016-12-10<a href="/styles/ajaxquizreplylist.mvc?id=3936541&first=true"
                            class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                </div>
                <div class="questionTitle">
                   衣服价钱不同的原因</div>
                <span class="blank30"></span>
                
                <h6 style="display: none;">
                    管理员45047<span>回答：</span></h6>
                <p class="adminAsk">
                    <span class="danpinA fl">A</span>
                    亲爱的客户您好，此款商品的面料工艺不同，商品价位也是不同的，感谢您的支持！祝您购物愉快！\(^o^)/~</p>
                
            </div>
            <span class="blank15"></span>
            <div style="display: none;" class="notesNewpl">
            </div>
        </div>
        
        <div class="area3Con">
        
                 <div class="areaquestion">
          
            
                <span class="blank20"></span>
                <div class="userQuesArea">
                    <h4>
                        <span class="danpinQ fl">Q</span>1375***：</h4>
                    <h5>
                        2016-12-01<a href="/styles/ajaxquizreplylist.mvc?id=3935632&first=true"
                            class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                </div>
                <div class="questionTitle">
                    什么时候补货啊，尺码都不全</div>
                <span class="blank30"></span>
                
                <h6 style="display: none;">
                    管理员45039<span>回答：</span></h6>
                <p class="adminAsk">
                    <span class="danpinA fl">A</span>
                    亲爱的用户您好，您关注的此款商品现在已经可以正常购买了，~感谢您的支持\(^o^)/ </p>
                
            </div>
            <span class="blank15"></span>
            <div style="display: none;" class="notesNewpl">
            </div>
        </div>
        
        <div class="area3Con">
        
                 <div class="areaquestion">
          
            
                <span class="blank20"></span>
                <div class="userQuesArea">
                    <h4>
                        <span class="danpinQ fl">Q</span>jcjc7***@***：</h4>
                    <h5>
                        2016-11-21<a href="/styles/ajaxquizreplylist.mvc?id=3934785&first=true"
                            class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                </div>
                <div class="questionTitle">
                    300支，不比纸厚了吧，里头肯定要穿贞操小背心的，那等于身体的大部分面积都享受不到300支的好了啊。。。</div>
                <span class="blank30"></span>
                
                <h6 style="display: none;">
                    管理员45039<span>回答：</span></h6>
                <p class="adminAsk">
                    <span class="danpinA fl">A</span>
                    亲爱的用户您好，此款商品面料偏薄，建议穿着背心效果更佳，感谢您的支持\(^o^)/  </p>
                
            </div>
            <span class="blank15"></span>
            <div style="display: none;" class="notesNewpl">
            </div>
        </div>
        
        <div class="area3Con">
        
                 <div class="areaquestion">
          
            
                <span class="blank20"></span>
                <div class="userQuesArea">
                    <h4>
                        <span class="danpinQ fl">Q</span>1807***：</h4>
                    <h5>
                        2016-11-25<a href="/styles/ajaxquizreplylist.mvc?id=3935156&first=true"
                            class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                </div>
                <div class="questionTitle">
                    亲，我买的衣服不喜欢想退货可以把地址给我吗</div>
                <span class="blank30"></span>
                
                <h6 style="display: none;">
                    管理员45047<span>回答：</span></h6>
                <p class="adminAsk">
                    <span class="danpinA fl">A</span>
                    

亲爱的客户您好，如您的商品符合退换货政策，vancl可以为您提供一次免费退换货服务。您只需登录Vancl网站，进入“我的订单”中，查找到您要办理换货（退货）的订单，点击“办理退换货”，按照操作提示即可完成，办理后会有寄回的地址哦，您按照这个地址进行寄回就可以了。另外，2016年8月22日之日起，退换货政策有变更，请您详见网站公告栏。给您带来的不便敬请谅解，感谢您的支持！</p>
                
            </div>
            <span class="blank15"></span>
            <div style="display: none;" class="notesNewpl">
            </div>
        </div>
        
    </div>
    <div id="stylequestionsPager" class="area2Page">
        

<div class="area2Page">
    <ul>
        
                <li class="track" name="item-item-quiz-page_1"><strong>1</strong></li>
            
                <li class="track" name="item-item-quiz-page_2"><a href="/styles/AjaxStyleQuestions.aspx?styleId=989576&pageindex=2" >2</a></li>
            
            <li class="pageRight track" name="item-item-quiz-page_next"><a href="/styles/AjaxStyleQuestions.aspx?styleId=989576&pageindex=2">下一页</a></li>
        
    </ul>
</div>



    </div>
    
    <div class="act0703Link04" style="display: none;">
        <a href="//review.vancl.com/quiz/989576.html" target="_blank">查看全部问答&gt;&gt;</a></div>
    
</div>
<span class="blank10"></span><a name="1"></a>
<div class="Askquestion" style="display: none;">
    <h3>
        <p>
            <span></span>提问：凡客衬衫 吉国武 SOKTAS 300 蓝色</p>
    </h3>
    <input type="hidden" id="title" value="凡客衬衫 吉国武 SOKTAS 300 蓝色" />
    <dl class="questionStyle">
        <dt>提问类型：</dt>
        <dd>
            <ul id="quiztype">
                <li>
                    <input type="radio" value="0" name="questionType" /><span>商品提问</span></li>
                <li>
                    <input type="radio" value="1" name="questionType" /><span>促销活动提问</span></li>
                <li>
                    <input type="radio" value="2" name="questionType" /><span>库存及物流提问</span></li>
                <li>
                    <input type="radio" value="3" name="questionType" /><span>售后提问</span></li>
            </ul>
            <p style="display: none" id="qtype">
                <strong></strong><span>请选择问题分类</span></p>
        </dd>
        <span class="blank0"></span>
    </dl>
    <dl>
        <dt>提问内容：</dt>
        <dd>
            <textarea class="Askcontent" id="content"></textarea>
            <input type="button" class="askSubBtn" id="tijiao" />
        </dd>
        <span class="blank0"></span>
    </dl>
</div>
<form name='buyform' action="/home/buy/{{ $shopinfo->Sid }}" method='post'>
    {{ csrf_field() }}
    <input type="hidden" id='Onum' name='Onum'>
    <input type="hidden" id='Scolor' name='Scolor'>
    <input type="hidden"  id='Ssize' name='Ssize'>
    <input type="hidden" id='Omoney' name='Omoney'>
    <input type="hidden" id='Sname' name='Sname' value='{{ $shopinfo->Sname }}'>
</form>

<script type="text/javascript" src='{{ asset("home/js/productinfo.js") }}'></script>

@endsection
