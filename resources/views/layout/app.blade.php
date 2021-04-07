<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Địa Điểm Tây Nguyên</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Khám phá ngay các địa điểm, hoạt động du lịch và ăn uống cho hành trình du lịch của bạn tại Địa Điểm Tây Nguyên." />
        <meta name="keywords" content="Địa điểm tây nguyên, Địa điểm, Tây nguyên, Quán cafe đẹp buôn ma thuột, Top quán cà phê đẹp ở bmt, Quán ăn ngon ở tây nguyên" />
        <meta name="author" content="NguyenPhucHung" />
        <meta name="email" content="nguyenphuchung120800@gmail.com" />
        <meta name="website" content="http://www.diadiemtaynguyen.cf/" />
        <meta name="Version" content="v1.1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('') }}css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/owl.theme.default.min.css"/>  
        <link rel="stylesheet" href="{{ asset('') }}css/slick.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/slick-theme.css"/>
        <!-- Main Css -->
        <link href="{{ asset('') }}css/style1.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('') }}css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body style="background-color: #f7f7f7">
        @include('layout.messenger')  
        @include('layout.header')       
        @yield('content')
        @include('layout.notification')
        @include('layout.footer')

        <!-- Wishlist Popup Start -->
        <div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlist-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <h1 class="mb-0"><i class="uil uil-heart-break align-middle"></i></h1>
                            </div>
                            <div class="mt-4">
                                <h4>Your wishlist is empty.</h4>
                                <p class="text-muted">Create your first wishlist request...</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">+ Create new wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Popup End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="{{ asset('') }}js/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('') }}js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}js/jquery.easing.min.js"></script>
        <script src="{{ asset('') }}js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="{{ asset('') }}js/owl.carousel.min.js "></script>
        <script src="{{ asset('') }}js/owl.init.js "></script>
        <script src="{{ asset('') }}js/slick.min.js"></script>
        <script src="{{ asset('') }}js/slick.init.js"></script>
        <!-- Icons -->
        <script src="{{ asset('') }}js/feather.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('') }}js/app.js"></script>
        <!-- Load Facebook SDK for JavaScript -->
        <!-- <script type="text/javascript">
            $(function(){
                $heart = $(".heart");
                $heart.click(function(e) {
                    e.preventDefault();

                    $id = $(this).attr("data-key");

                    console.log($id);
                    $.ajax({
                        url: 'heart',
                        type: 'GET',
                        data: 'key':$id},
                    });
            }) 
        </script> -->
        @yield('script')
    </body>
</html>