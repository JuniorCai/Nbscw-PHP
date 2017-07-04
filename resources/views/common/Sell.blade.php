@extends("layouts.common.layout")

@section("title","宁波石材网-各类大理石、花岗岩供应")

@section("pageCss")
    <link rel="stylesheet" type="text/css" href="../../../css/baseIndex.css">
@endsection

@section("bodyContent")
    <!--banner区-->
    <div class="bannerIndex w100">
        <div class="bannerContainer containerCenter">

            <div class="bannerRight">
                <div class="quickLogin">
                    <div class="loginTip">
                        <img src="../../../images/logosmall.png" style="height: 50px;width:50px">
                        <span>欢迎来到宁波石材网</span>
                    </div>
                    <div class="loginArea">
                        <a class="loginOper" href="{{url('/login')}}">
                            <img src="../../../images/lockMoveOut.png" >
                            <span>登录</span>
                        </a>
                        <a class="registerOper" href="{{url('/register')}}">
                            <img src="../../../images/registerOut.png">
                            <span>注册</span>
                        </a>
                    </div>
                    <div class="logTip">
                    </div>
                </div>
                <div class="panel panel-primary marketNotice">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            市场公告
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="tipContent" >
                            面板内容
                        </div>
                    </div>
                </div>
            </div>

            <div class="bannerArea">
                <div id="myCarousel" class="carousel slide" >
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../../../images/banner1.png" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="../../../images/banner2.png" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="../../../images/banner3.png" alt="Third slide">
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="carousel-control left" href="#myCarousel"
                       data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel"
                       data-slide="next">&rsaquo;</a>
                </div>
            </div>

        </div>
    </div>

    <!--首页内容区-->
    <div class=" containerCenter">
        <div class="dalishiArea w100 clearfix ">
            <div class="areaHeader">
                <div class="areaName">
                    <h3>大理石区</h3>
                </div>
                <div class="areaMore">
                    <a href="#">更多>></a>
                </div>
            </div>
            <div class="areaInfo">
                <div class="areaTitle">热门资讯</div>
                <div class="infoList">
                    <ul>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                    </ul>
                </div>
            </div>
            <div class="areaProducts container">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="areaNew">
                <div class="areaTitle">新品发布</div>
                <div class="productContainer">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="productList" style="overflow-y: hidden; ">
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石1</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石2</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石3</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石4</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石5</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石6</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石7</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石8</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石9</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石10</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石11</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石12</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石13</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石14</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石15</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石16</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石17</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石18</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石19</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石20</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="areaHotShop">
                <div class="shopTitle">
                    <h2 style="color: #ff9c9c">热铺</h2>
                    <h2>推荐</h2>
                </div>
                <div class="shopList">
                    <ul>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="huagangyanArea w100 clearfix">
            <div class="areaHeader">
                <div class="areaName">
                    <h3>花岗岩区</h3>
                </div>
                <div class="areaMore">
                    <a href="#">更多>></a>
                </div>
            </div>
            <div class="areaInfo">
                <div class="areaTitle">热门资讯</div>
                <div class="infoList">
                    <ul>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                        <li><a href="#">建筑石材供给研讨会召开</a></li>
                    </ul>
                </div>
            </div>
            <div class="areaProducts container">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="areaNew">
                <div class="areaTitle">新品发布</div>
                <div class="productContainer">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="productList" style="overflow-y: hidden; ">
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石1</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石2</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石3</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石4</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石5</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石6</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石7</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石8</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石9</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石10</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石11</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石12</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石13</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石14</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石15</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石16</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石17</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石18</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石19</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石20</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="areaHotShop">
                <div class="shopTitle">
                    <h2 style="color: #ff9c9c">热铺</h2>
                    <h2>推荐</h2>
                </div>
                <div class="shopList">
                    <ul>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="gongyiArea  w100 clearfix">
            <div class="areaHeader">
                <div class="areaName">
                    <h3>环境工艺</h3>
                </div>
                <div class="areaMore">
                    <a href="#">更多>></a>
                </div>
            </div>
            <!--产品展示切换区-->
            <div class="areaInfo">
                <ul>
                    <li class="hover list-group-item">环境石材</li>
                    <li class="list-group-item">室内装饰</li>
                    <li class="list-group-item">庭院产品</li>
                    <li class="list-group-item">成品工艺</li>
                </ul>

            </div>

            <!--产品展示切换结果-->
            <div class="areaBlock1 areaProducts container ">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑1</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div style="display: none" class="areaBlock2 areaProducts container ">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑2</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div style="display: none"  class="areaBlock3 areaProducts container ">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑3</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div style="display: none"  class="areaBlock4 areaProducts container ">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑4</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product1.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product2.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product3.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="产品名称" href="#">
                            <img src="../../../public/images/product4.png">
                            <div class="maskTxt">
                                <h3>芝麻黑</h3>
                                <p>公司名称</p>
                                <p>产品价格</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="areaNew">
                <div class="areaTitle">新品发布</div>
                <div class="productContainer">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="productList" style="overflow-y: hidden; ">
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石1</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石2</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石3</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石4</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石5</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石6</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石7</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石8</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石9</a></li>
                                    <li class="pro-item" style=""><a href="#">欣欣石材   芝麻黑大理石10</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石11</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石12</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石13</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石14</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石15</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石16</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石17</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石18</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石19</a></li>
                                    <li class="pro-item" style="display: none;"><a href="#">欣欣石材   芝麻黑大理石20</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="areaHotShop">
                <div class="shopTitle">
                    <h2 style="color: #ff9c9c">热铺</h2>
                    <h2>推荐</h2>
                </div>
                <div class="shopList">
                    <ul>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                        <li><a href="#"><img src="../../../public/images/company1.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="companyLogoArea  w100 clearfix">
            <div class="areaHeader">
                <div class="areaName">
                    <h3>商家推荐</h3>
                </div>
                <div class="areaMore">
                    <a href="#">更多>></a>
                </div>
            </div>
            <div class="areaCompanies container">
                <div class="row">
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend2.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend1.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend3.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend5.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend4.png">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend3.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend5.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend4.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend2.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a alt="公司名称">
                            <img src="../../../public/images/companyRecommend/recommend1.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="informationArea  w100 ">
            <div class="areaHeader">
                <div class="areaName">
                    <h3>资讯</h3>
                </div>
                <div class="areaMore">
                    <a href="#">更多>></a>
                </div>
            </div>
            <div class="informationContainer clearfix">
                <div class="hotInfoContainer">
                    <p class="containerHeader">
                        <b>热门新闻</b>
                        <a href="#">更多>></a>
                    </p>
                    <div class="mainInfo"><img title="中国石材：困难和挑战催化蜕变" src="/news/admin/upload/article/20151208172138_59728.jpg">
                        <p><a target="_blank" href="/news-1000.html"><b>中国石材：困难和挑战催化蜕变</b></a></p>
                        <p class="mainDetail">对以国际贸易和国内中高端建设工程为主要订单来源的规模以上的中国石材企业来说，近几年不景气指数大面积呈现，成为自改革开放以来石材业一路春风发展里程中较为困难的几年。</p>
                    </div>
                    <ul>
                        <li>
                            <span>热点新闻</span>
                            <a target="_blank" href="#">中国石材产业的未来是什么</a>
                        </li>
                        <li>
                            <span>热点新闻</span>
                            <a target="_blank" href="#">仿石建材来势汹汹 石材行业如何借势突围</a>
                        </li>
                        <li>
                            <span>热点新闻</span>
                            <a target="_blank" href="#">“新石器”时代到来,石材机械如何应对?</a>
                        </li>
                        <li>
                            <span>热点新闻</span>
                            <a target="_blank" href="#">提高科技含量　做大石材产业</a>
                        </li>
                        <li>
                            <span>热点新闻</span>
                            <a target="_blank" href="#">海沧口岸1-11月石材进口居全国之首</a>
                        </li>
                    </ul>
                </div>
                <div class="exhibitionContainer">
                    <p class="containerHeader">
                        <b>展会</b>
                        <a href="#">更多>></a>
                    </p>
                    <ul>
                        <li>
                            <a href="http://www.wdscw.com/news-965.html"><img title="2016第十六届中国厦门国际石材展览会" src="/home/templates/default/style/pic/newsnet02.jpg"></a>
                            <div class="exhiDetail">
                                <p class="exhiTitle"><a href="http://www.wdscw.com/news-965.html"><b>2016第十六届中国厦门国际石材展览会</b></a></p>
                                <p>时间：2016.3.6 - 2016.3.9</p>
                                <p>地点：厦门会展中心</p>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img title="第27届加拿大多伦多国际建材博览会" src="/home/templates/default/style/pic/newsnet03.jpg"></a>
                            <div class="exhiDetail">
                                <p class="exhiTitle"><a href="#"><b>第27届加拿大多伦多国际建材博览会</b></a></p>
                                <p>时间：2015.12.03 - 2015.12.04</p>
                                <p>地点：加拿大多伦多</p>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img title="2015第10届广州国际设计周" src="/home/templates/default/style/pic/newsnet01.jpg"></a>
                            <div class="exhiDetail">
                                <p class="exhiTitle"><a href="#"><b>2015第10届广州国际设计周</b></a></p>
                                <p>时间：2015.12.04 - 2015.12.06</p>
                                <p>地点：广东广州</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="encyclopediaContainer">
                    <p class="containerHeader">
                        <b>热门新闻</b>
                        <a href="#">更多>></a>
                    </p>
                    <div class="mainEncy clearfix">
                        <a target="_blank" href="#"><img title="石材业十五载升级机遇" src="/news/admin/upload/article/20151209093222_78090.jpg"></a>
                        <p class="encyTitle"><a target="_blank" href="#"><b>石材业十五载升级机遇</b></a></p>
                        <p class="encyDetail">15年后，斗门龙山工业区，拥有约2000名员工的中润集团已然崛起，五大品牌公司、三大事业部、七大机构屹立海内外。
                            伴随特区珠海步入21世纪以来的跨越发展，中润集团也从青葱树苗茁壮成长为如今的参天大树，
                            从单一的制造企业转型为多元化经营的民企集团。</p>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="#">中国石材产业的未来是什么</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">仿石建材来势汹汹 石材行业如何借势突围</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">“新石器”时代到来,石材机械如何应对?</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">提高科技含量　做大石材产业</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">海沧口岸1-11月石材进口居全国之首</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">海沧口岸1-11月石材进口居全国之首</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">“新石器”时代到来,石材机械如何应对?</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">提高科技含量　做大石材产业</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">“新石器”时代到来,石材机械如何应对?</a>
                        </li>
                        <li>
                            <a target="_blank" href="#">提高科技含量　做大石材产业</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection


@section("pageScripts")
    <script type="text/javascript" src="../../../js/jquery.bootstrap.newsbox.min.js"></script>

    <script type="text/javascript" >
        $(function(){
            $("#myCarousel").carousel({interval: 3000});

            $(".productList").bootstrapNews({
                newsPerPage: 10,
                autoplay: true,
                pauseOnHover: true,
                navigation: false,
                direction: 'up',
                newsTickerInterval: 1000,
                onToDo: function () {
                    //console.log(this);
                }
            });

            $(".dropdown-menu a").click(function(){
                var chooseCategory = this.innerText;
                $('.selectBox').text(chooseCategory);
            });


            //快捷登录图片切换
            $(".loginOper").hover(function(){
                var imgSrc = $(this).children("img");
                imgSrc.attr("src","images/lockMoveIn.png");
            },function(){
                var imgSrc = $(this).children("img");
                imgSrc.attr("src","images/lockMoveOut.png");
            });

            $(".registerOper").hover(function(){
                var imgSrc = $(this).children("img");
                imgSrc.attr("src","images/registerIn.png");
            },function(){
                var imgSrc = $(this).children("img");
                imgSrc.attr("src","images/registerOut.png");
            });



            //产品展示遮罩层
            $(".areaProducts .row .col-md-3").hover(function(){
                $(this).find(".maskTxt").stop().animate({height:"186px"},400);
                $(this).find(".maskTxt h3").stop().animate({paddingTop:"40px"},400);
            },function(){
                $(this).find(".maskTxt").stop().animate({height:"40px"},400);
                $(this).find(".maskTxt h3").stop().animate({paddingTop:"0px"},400);
            });


            //工艺类别区展示切换
            $(".areaInfo .list-group-item").hover(function(){
                $(this).siblings().each(function(){
                    if($(this).hasClass("hover")){
                        $(this).removeClass("hover");
                    }
                });
                var blockIndex = $(this).index()+1;
                var blockName = "areaBlock" + blockIndex;
                var currentBlock = $("."+blockName);
                currentBlock.siblings(".areaProducts").each(function(){
                    $(this).hide();
                });
                currentBlock.show();

                $(this).addClass("hover");
            })



        });

    </script>
@endsection