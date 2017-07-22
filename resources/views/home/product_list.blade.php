@extends('home.base.father')

@section('content')
<style type="text/css">
        .pagination {
          display: inline-block;
          padding-left: 0;
          margin: 20px 0;
          border-radius: 4px;
        }
        .pagination > li {
          display: inline;
          width:20px;
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
<body id="body" class="cols_manage full">

<div style="margin: 0 auto;" class="">
    <span class="selectareali"></span>
    <div class="sr_contation">
        <div class="sr_left" id="vjiaTop">
            <div class="breadnav">
<div class="locationdiv">
    <span>当前位置：</span><a class="track" name="s-s-filter_cat-0" href="/search">所有分类</a></div>
            </div>
<div class="selectarea">
    <div class="typearea">
                    <div class="autoheightcontrol                                                       selectareali01
 clearfix" toggle="0" style="">
                        <div class="selectareaLeft">
                                <em>衬衫专区</em>
                        </div>
                        <div class="selectareaRight                                                         autoheight
" loadAttribute="false">
                        
                            <ul>
                                     <li  >
                                     <a class="track" name="s-s-filter_cat-27531" href="27531-s1.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                                     全部商品<span>({{ $num }})</span>
                                     </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        <span class="selectareali_a" toggle="0" style=""></span>

    </div>

</div>
            <div id="recommendkeywords" style="display: none;
        height: 0px;
        width: 100%;
        overflow: hidden;">
            </div>
            <div id="floatposition" style="margin-bottom: 15px">
            </div>
            <div id="floatdiv" style="background-color: White;
        z-index: 80;">
<div class="filterTabBarN5">
        <ul class="searchTabbarN5">
                <li class="hover" ><a class="track" name="s-s-link-all" href="s1.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">全部商品</a></li>
    </ul>
    <div class="pageBoxN5">
        <div class="pagediv">
            <span>1/1</span>
            <span>
                <a class="jquery_pager_prevpage jquery_pager_margintop11" href="javascript:void(0)"></a>
            </span>
            <span>
                <a class="jquery_pager_nextpage jquery_pager_margintop11" href="javascript:void(0)"></a>
            </span>
        </div>
    </div>
</div>
<div class="filterFormN5">
<div class="filterForm0703">
        <div class="searchCol">
            <ul>
                <li class="moren">
                    <a title="按推荐由高到低" name="s_order_0_10" class="track" href="p1.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                    <em>默认</em>
                    <span class="upTrendBottom">按推荐由高到低</span></a></li>
                <li class="jiage jiageHover" id="sortTypeMore">
                        <a title="按价格从低到高" name="s_order_0_3" class="track" href="s3.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                            <em>价格</em>
                            <span class="BottomTrendUp">按价格从低到高</span></a>                        
                    <span class="triggerMore">更多</span>
                    <div class="dropdownList" id="sortTypeList" style="display:none;">
                        <p><a title="按价格从低到高" name="s_order_0_3" class="track" href="s3.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                        <em>价格</em>
                        <span class="BottomTrendUp" style="margin-left:0px;">按价格从低到高</span></a></p>
                        <p><a title="按价格从高到低" name="s_order_0_4" class="track" href="s4.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                            <em>价格</em><span class="upTrendBottom">按价格从高到低</span></a></p>
                        <p><a title="按折扣从高到低" name="s_order_0_13" class="track" href="s13.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                            <em>折扣</em><span class="upTrendBottom">按折扣从高到低</span></a></p>
                        <p><a title="按直降从高到低" name="s_order_0_12" class="track" href="s12.html?k=%e6%b3%95%e5%85%b0%e7%bb%92">
                            <em>直降</em><span class="upTrendBottom">默直降高到低</span></a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="searchbarPrice">
            <div class="searchbarTextN50124" id="searchPriceArea">
                <div class="searchbarInit">
                    <input type="text" title="按价格区间筛选 最低价" value="" id="minPrice" class="FpriceText0124">
                    <span class="Fline0124">-</span>
                    <input type="text" title="按价格区间筛选 最低价" value="" id="maxPrice" class="FpriceText0124 FpriceTextMal0124">
                </div>
                <div class="searchbarFoused" id="searchPriceButtonArea" style="display:none">
                    <p>
                        <a href="javascript:void(0)" class="searchbarBtnCommon" id="clearPrice">清空</a>
                        <a href="javascript:void(0)" class="searchbarBtnStrong" onclick="trackurl('s-s-price-0')" id="selectPrice"></a>
                    </p>
                </div>
            </div>
        </div>
        
</div>
</div>
            </div>
            <span class="blank15"></span>
<div class="pruarea pruarea0124" id="vanclproducts" counts="25">
    <ul >
        @foreach($shopinfo as $v)
        <li class="scListArea borCdbd7d6 productwrapper border">
            <div pop="6375275" class="pic" time="20161208100348">
                <a href="{{ url('home/productinfo') }}/{{ $v->Sid }}" name="" title="凡客衬衫 法兰绒 男款 黑卫士格绿蓝" target="_blank">
                    <img class="productPhoto" src="{{ url('admin/picture') }}/{{ ltrim($v->Simgpath,'s_') }}" alt="凡客衬衫 法兰绒 男款 黑卫士格绿蓝" width="230" height="230" />
                </a>
            </div>
            <p>
                   <a href="http://item.vancl.com/6375275.html"  class="track"  name="s-s-k_rs__36dac694ed274756af1ae9f6b7c269a2_d22d258a58c1d8e1-1_22-6375275_Sort01_qb_000-v"  target="_blank">{{ $v->Sname }}</a>
            </p>
            <div class="Mpricediv0124">
        <span class="Sprice">售价￥ {{ $v->Sprice }}
        </span>
         </div>                 
     </li>
    @endforeach

    </ul>
    {{ $shopinfo->appends($where)->links() }}
</div>            
<span class="blank0"></span>
<span class="blank25"></span>

            <span class="blank15" id="BottomPagerBlank"></span>
            <div id="recommendproductposition">
            </div>
        </div>
    </div>
</div>
@endsection