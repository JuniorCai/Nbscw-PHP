@extends("layouts.common.layout")

@section("title","宁波石材网-石材供应")

@section("pageCss")
    <link rel="stylesheet" type="text/css" href="../../../css/baseSearch.css">
@endsection


@section("bodyContent")

    <!--内容区-->
    <div class="containerCenter clearfix">
        <form id="filterForm" method="get" action="/sell/search">

        <div class="searchArea">
            <div class="filterArea">
                <p>首页 > 供应 {{isset($filterContainer["bigCategory"])?"> ".$filterContainer["bigCategory"]->name:""}}</p>
                <input type="hidden" value="0" name="catId" id="selectedCategory">
                <div class="filterContainer">
                    <div class="bigCategoryList" id="bigCategoryList">
                        <div class="listTitle">类型：</div>
                        <div class="listBody">
                            @if(isset($filterContainer["bigCategory"]))
                                <a rel="nofollow" onclick="loadResults(0)" dataId="0" class="" href="#">全部</a>
                                @foreach($categoryList->where("parentId",0) as $bigCategory)
                                    <a rel="nofollow" onclick="loadResults({{$bigCategory->id}})" dataId="{{$bigCategory->id}}" class="{{$filterContainer["bigCategory"]->id==$bigCategory->id?"on":""}}" >{{$bigCategory->name}}</a>
                                @endforeach

                            @else
                                <a rel="nofollow" class="on" dataId="0" href="#">全部</a>
                                @foreach($categoryList->where("parentId",0) as $bigCategory)
                                    <a rel="nofollow" dataId="{{$bigCategory->id}}" onclick="loadResults({{$bigCategory->id}})"  >{{$bigCategory->name}}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if(isset($filterContainer["bigCategory"]))
                    <div class="smallCategoryList" id="smallCategoryList">
                        <div class="listTitle">小类：</div>
                        <div class="listBody">
                            @if(isset($filterContainer["bigCategory"]))
                                @if(isset($filterContainer["smallCategory"]))
                                    <a rel="nofollow" onclick="loadResults({{$filterContainer["bigCategory"]->id}})" dataId="{{$filterContainer["bigCategory"]->id}}">全部</a>
                                    @foreach($filterContainer["bigCategory"]->childrenCategories as $child)
                                        <a rel="nofollow" dataId="{{$child->id}}" onclick="loadResults({{$child->id}})" class="{{$filterContainer["smallCategory"]->id==$child->id?"on":""}}">{{$child->name}}</a>
                                    @endforeach
                                @else
                                    <a rel="nofollow" onclick="loadResults(0)" dataId="{{$filterContainer["bigCategory"]->id}}" class="on" >全部</a>
                                    @foreach($filterContainer["bigCategory"]->childrenCategories as $child)
                                        <a rel="nofollow" dataId="{{$child->id}}" onclick="loadResults({{$child->id}})">{{$child->name}}</a>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </div>
                    @endif

                    <div class="filterBoard" id="filterBoard">
                        <div class="listTitle">条件：</div>
                        <div class="listBody">
                            <ul>
                            @if(isset($filterContainer["bigCategory"]))
                            <li>类型：{{$filterContainer["bigCategory"]->name}}&nbsp;&nbsp;&nbsp;&nbsp;X</li>
                            @endif
                            @if(isset($filterContainer["smallCategory"]))
                            <li>小类：{{$filterContainer["smallCategory"]->name}}&nbsp;&nbsp;&nbsp;&nbsp;X</li>
                            @endif
                            </ul>
                        </div>
                    </div>
                    <div class="keyFloor" id="keyFloor">
                        <div class="listTitle">搜索：</div>
                        <div class="listBody">
                            <input placeholder="请输入关键词" name="keyword" class="keyInput" value="{{isset($filterContainer["keyword"])?$filterContainer["keyword"]:""}}">
                            <button class="searchBtn" onclick="getParamsAndSubmit()" id="searchBtn">搜索</button>
                        </div>
                    </div>
                </div>

                <div class="sortBoard">
                    <input type="hidden" name="sort" id="sort" value="">
                    <a  item="updateDate" onclick="sortResults(this)" class='{{$filterContainer["Sort"]=="updateDate"?"on":""}}' rel="nofollow">最新</a>
                    <a  item="{{$filterContainer["Sort"]=="asc"?"asc":"desc"}}"  onclick="sortResults(this)" class='{{$filterContainer["Sort"]!="updateDate"?"on":""}}' rel="nofollow">价格&nbsp;&nbsp;&nbsp;&nbsp;<i id="arrowIcon" class="fa {{$filterContainer["Sort"]=="asc"?"fa-long-arrow-up":"fa-long-arrow-down"}}"></i></a>
                </div>
            </div>
            <div class="productResultsList">
                <div class="container" style="width: 100%">
                    <ul>
                        @foreach($result as $item)
                            <li>
                                <div class="col-md-3">
                                    <a href="#"><img alt="{{$item->title}}" src="{{$item->img1}}"></a>
                                    <div class="proInfo">
                                        <p><a href="#" title="{{$item->title}}">{{$item->title}}</a></p>
                                        <p >价格：<sapn class="priceShow">
                                        @if($item->priceType==\App\Models\Member\PriceTypeEnum::Negotiable)
                                        面议
                                        @elseif($item->priceType==\App\Models\Member\PriceTypeEnum::Fixed)
                                            {{$item->price."/".$item->unit}}
                                        @else
                                            {{$item->minPrice."-".$item->maxPrice."/".$item->unit}}
                                        @endif
                                        </sapn></p>
                                        <p>
                                        <span >欣欣石材</span>
                                        <span class="productUpdate">{{date('Y-m-d  h:i:s',strtotime($item->updateDate))}}</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        @endforeach
                    </ul>

                </div>
                <div class="pagerContainer">
                    {{$result->appends(["catId"=>isset($filterContainer["bigCategory"])?$filterContainer["bigCategory"]->id:"0"
                                        ,"keyword"=>isset($filterContainer["keyword"])?$filterContainer["keyword"]:""
                                        ,"sort"=>$filterContainer["Sort"]])->links()}}
                </div>
            </div>
        </div>
        </form>

        <div class="adContainer clearfix">
            <div class="publishApply">
                <a href="#">发布供应信息</a>
            </div>
            <div class="publishPurchase">
                <a href="#">发布求购信息</a>
            </div>
            <ul class="rightAd">
                <li>
                    <h3>推荐商家</h3>
                </li>
                <li><a href="#"><img src="../../../public/images/rightAd1.png"></a></li>
                <li><a href="#"><img src="../../../public/images/rightAd4.png"></a></li>
                <li><a href="#"><img src="../../../public/images/rightAd2.png"></a></li>
                <li><a href="#"><img src="../../../public/images/rightAd1.png"></a></li>
                <li><a href="#"><img src="../../../public/images/rightAd3.png"></a></li>
            </ul>
        </div>
    </div>

@endsection




@section("pageScripts")
    <script type="text/javascript" src="../../../js/extendPagination.js"></script>
    <script type="text/javascript">
        $(function(){
            var totalCount=300,showCount = 32,limit = 10;
//            $('.pagerContainer').extendPagination({
//                totalCount: totalCount,
//                showCount: showCount,
//                limit: limit,
//                callback: function (curr, limit, totalCount) {
//                    //createTable(curr, limit, totalCount);
//                }
//            });


            $(".allCategory a").hover(function(){
                $(".categoryList").show();
            },function(){
                $(".categoryList").hide();
            });



            $("#filterBoard ul li").click(function(){
                var index = $(this).index();
                if(index==0)
                    loadResults(0);
                else
                    loadResults({{isset($filterContainer["bigCategory"])?$filterContainer["bigCategory"]->id:0}});
            });

        });

        function sortResults(obj)
        {
            var preSort = $(".sortBoard .on");
            $(preSort).removeClass("on");
            $(obj).addClass("on");

            if($(obj).attr("item")!="updateDate")
            {
                $(obj).attr("item",$(obj).attr("item")=="asc"?"desc":"asc");
            }

            getParamsAndSubmit();
        }

        function loadResults(v1)
        {
            $("#selectedCategory").val(v1);
            $("#sort").val($(".sortBoard .on").attr("item"));
            $("#filterForm").submit();
        }

        function getParamsAndSubmit()
        {
            var v1 = $("#smallCategoryList .on").attr("dataId");
            $("#selectedCategory").val(v1);
            $("#sort").val($(".sortBoard .on").attr("item"));
            $("#filterForm").submit();
        }
    </script>
@endsection


