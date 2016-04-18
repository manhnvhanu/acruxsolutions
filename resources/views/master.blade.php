<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('engine1/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">

    <script type="text/javascript" src="{{ URL::asset('engine1/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Google map javascript api -->
    <script type="text/javascript"
        src="{{  URL::asset('http://maps.googleapis.com/maps/api/js') }}">
    </script>

    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(20.989486, 105.795580),
                zoom:17,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
<div class="container">
    <div id="header">
       <div class="nav-side">
           <div class="col-lg-6 d-left">
           <img class="dragon" src="img/dragon.png">
           </div>
           <div class="col-lg-6 d-right">
           <img class="dragon" src="img/dragon.png">
               </div>
       </div>

       <nav class="navbar navbar-default nav-pattern" role="navigation">

           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Brand</a>

           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse" id="nav1">

               <ul class="nav navbar-nav navbar-left">
                   <li class="active"><a href="/">Trang Chủ</a></li>
                   <li><a href="product">Sản Phẩm</a></li>
                   <li><a href="news">Tin Tức</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a href="intro">Giới Thiệu</a></li>
                   <li><a href="contact">Liên Hệ</a></li>
                   <li><a href="#">Đặt Hàng Ngay!</a></li>
               </ul>
           </div><!-- /.navbar-collapse -->
       </nav>
    </div>
        <!--start slider-->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="img/banner/banner1.jpg" alt="" title="" id="wows0"/></li>
                <li><img src="img/banner/banner2.jpg" alt="" title="" id="wows1"/></li>
                <li><img src="img/banner/banner3.jpg" alt="" title="" id="wows2"/></li>
                <li><img src="img/banner/banner4.jpg" alt="" title="" id="wows3"/></li>
                <li><img src="img/banner/banner5.jpg" alt="" title="" id="wows4"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=""><img src="img/banner/banner1.jpg" alt=""/></a>
                <a href="#" title=""><img src="img/banner/banner2.jpg" alt=""/></a>
                <a href="#" title=""><img src="img/banner/banner3.jpg" alt=""/></a>
                <a href="#" title=""><img src="img/banner/banner4.jpg" alt=""/></a>
                <a href="#" title=""><img src="img/banner/banner5.jpg" alt=""/></a>

            </div></div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('engine1/wowslider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('engine1/script.js') }}"></script>
    <!-- End slider-->


    <div class="main">
        @yield('content')
    </div>

    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li>
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                                </div>
                            </li>
                        </ul>
                        <ul class="social">
                            <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                        </ul>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-amex"></i></li>
                        <li><i class="fa fa-cc-paypal"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.footer-bottom-->
    </footer>

</div> <!--/.container-->

</body>
</html>
