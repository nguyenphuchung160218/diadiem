@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="banner-color bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"></h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('get.category') }}">Chuyên Mục</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-absolute blog-search">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="subcribe-form">
                                    <form action="{{ route('post.category')}}" style="max-width: 800px;" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" id="course" name="search" class="rounded-pill shadow-md bg-white" placeholder="Search keywords...">
                                            <button type="submit" class="button-search btn btn-pills btn-primary">Tìm địa điểm</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end div-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="bg-white mb-2 p-3 border-0 shadow rounded">
                    <h3 class="h1" itemprop="name">{{ $storeDetail->sto_name }} – {{ $storeDetail->sto_title }}</h3>
                    <div class="post-meta">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-user-outline mr-1"></i>Đăng bởi: <strong>Admin</strong></a></li>
                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>{{ $storeDetail->sto_heart }}</a></li>
                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>{{ $storeDetail->sto_comment }}</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-eye-outline mr-1"></i>{{ $storeDetail->sto_view }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <div class="card-body">                             
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <span class="d-block">
                                            <i class="uil uil-map-marker-alt"></i> {{ $storeDetail->sto_address }}</span>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="d-block">
                                            <i class="uil uil-award"></i> <strong>Danh mục:</strong><a href="">{{ $storeDetail->category->c_name }}</a>
                                      </span>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="d-block">
                                          <i class="uil uil-bell"></i> <strong>Khoảng giá:</strong> {{ $storeDetail->sto_price }}                           
                                        </span>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <span class="d-block">
                                            <i class="uil uil-map-marker-alt"></i> <strong>Khu vực:</strong>  <a href="">{{ $storeDetail->area->area_name }}</a>
                                        </span>
                                    </div>                          
                                    <div class="col-12 col-md-12">
                                        <span class="d-block">
                                            <i class="uil uil-tags"></i> <strong>Mô tả ngắn:</strong                               
                                        </span>
                                    </div>
                                </div>
                                <p>Đây là hình mình chụp hồi đầu năm, lúc đó nhà hàng đang chạy Combo Như Ý 379K có 5 món: súp cua tuyết nhĩ, bánh xếp chim hạc, đậu que phú quý, mì trường thọ, kim kê quay sốt tỏi.</p>
                                <blockquote class="line-vertical">
                                    <p><strong>C. Tao – Chinese Restaurant</strong><br>
                                    <strong>Địa chỉ:</strong> Lô A15 – A16, đường 2/9, Đà Nẵng. (Đối diện số 94).</p>
                                </blockquote>
                            </div>
                            <img src="<?php                            
                                    if(substr($storeDetail->sto_avatar,0,4)=='http'){
                                        echo $storeDetail->sto_avatar;                                    
                                    }
                                    else{
                                        echo asset(pare_url_file($storeDetail->sto_avatar,'store'));
                                    }
                                        ?>
                                " class="img-fluid card-body" alt="">
                            <div class="card-body content">
                                {!! $storeDetail->sto_content !!}
                                
                            </div>
                            <span>
                                
                            </span>   
                            <div class="d-flex flex-row-reverse">
                                <div class="p-3">
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href={{$storeUrl}}&layout=button&size=large&width=87&height=28&appId" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>               
                            <div class="card-body mt-3">                              
                                <ul class="media-list list-unstyled mb-0 border-top">
                                    @if($listComments->count()==0)
                                    <h5 class="card-title mb-0">Không có bình luận nào</h5>
                                    @endif
                                    @if(isset($listComments))
                                    @foreach($listComments as $listComment)
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="media align-items-center">
                                                <a class="pr-3" href="#">
                                                    <img src="{{ asset('') }}image/unnamed.png" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">{{ $listComment->co_name }}</a></h6>
                                                    <small class="text-muted">Ngày {{ $listComment->created_at->format('d-m-Y')}} ,vào lúc {{ $listComment->created_at->format('H:i')}}</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted font-italic p-3 bg-light rounded">" {{ $listComment->co_content }} "</p>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Để Lại Bình Luận :</h5>

                                <form method="post" class="mt-3" action="{{ route('save.form.comment.store',$storeDetail->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bình Luận</label>
                                                <div class="position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea id="message" placeholder="Your Comment" rows="5" name="co_content" class="form-control pl-5" required=""></textarea>
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Họ Tên <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input id="name" name="co_name" type="text" placeholder="Name" class="form-control pl-5" required="" value="{{ get_data_user('web','name') }}">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input id="email" type="email" placeholder="Email" name="co_email" class="form-control pl-5" required="" value="{{ get_data_user('web','email') }}">
                                                </div>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-md-12">
                                            <div class="send">
                                            <button type="submit" class="btn btn-primary btn-block">Gửi Bình Luận</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div>
                        </div>
                    </div>
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">   
                                <!-- RECENT POST -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title sidebar-hot">Địa Điểm Nổi Bật</h5>
                                    <div class="mt-4">
                                        @if(isset($storesHot))
                                        @foreach($storesHot as $storeHot)

                                        <div class="clearfix post-recent">
                                            <div style="width: 40%" class="post-recent-thumb float-left">
                                                <a href="{{ route('get.detail.store',[$storeHot->category->c_slug,$storeHot->sto_slug]) }}">
                                                    <img alt="img" src="<?php                            
                                                        if(substr($storeHot->sto_avatar,0,4)=='http'){
                                                            echo $storeHot->sto_avatar;                                    
                                                        }
                                                        else{
                                                            echo asset(pare_url_file($storeHot->sto_avatar,'store'));
                                                        }
                                                            ?>
                                                    " class="img-fluid rounded">
                                                </a>
                                            </div>
                                            <div style="width: 60%" class="post-recent-content float-left">
                                                <a class="text-danger1" href="{{ route('get.detail.store',[$storeHot->category->c_slug,$storeHot->sto_slug]) }}">{{ $storeHot->sto_name }}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- RECENT POST -->
    
                                <!-- TAG CLOUDS -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Thẻ Tags</h5>
                                    <div class="tagcloud mt-4">
                                        @foreach($categories as $category)
                                        <a href="" class="rounded">{{$category->c_name}}</a>
                                        @endforeach                                      
                                    </div>
                                </div>
                                <!-- TAG CLOUDS -->
                                
                                <!-- SOCIAL -->
                                <div class="widget">
                                    <h5 class="widget-title">Theo dõi chúng tôi</h5>
                                    <ul class="list-unstyled social-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Các Địa Điểm Khác</h5>
                    </div><!--end col-->

                    <div class="col-12 mt-4">
                        <div id="client-four" class="owl-carousel owl-theme">

                            @if(isset($storesOther))
                            @foreach($storesOther as $storeOther)               
                            <div class="card shop-list border-0 position-relative m-2">                               
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="{{ route('get.detail.store',[$storeOther->category->c_slug,$storeOther->sto_slug]) }}">
                                        <img 
                                            style="min-height: 174px" 
                                            src="
                                                <?php                            
                                                    if(substr($storeOther->sto_avatar,0,4)=='http'){
                                                        echo $storeOther->sto_avatar;                                    
                                                    }
                                                    else{
                                                        echo asset(pare_url_file($storeOther->sto_avatar,'store'));
                                                    }
                                                ?>
                                            " 
                                            class="img-fluid" alt=""
                                        >
                                    </a>
                                    <a href="{{ route('get.detail.store',[$storeOther->category->c_slug,$storeOther->sto_slug]) }}" class="overlay-work">
                                        <img 
                                            style="min-height: 174px" 
                                            src="
                                                <?php                            
                                                    if(substr($storeOther->sto_avatar,0,4)=='http'){
                                                        echo $storeOther->sto_avatar;                                    
                                                    }
                                                    else{
                                                        echo asset(pare_url_file($storeOther->sto_avatar,'store'));
                                                    }
                                                ?>
                                            " 
                                            class="img-fluid" alt=""
                                        >
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="{{ route('get.detail.store',[$storeOther->category->c_slug,$storeOther->sto_slug]) }}" class="text-dark product-name h6">{{ $storeOther->sto_name }}</a>
                                    <div class="d-flex justify-content-between mt-1">
                                        <h6 class="text-muted small font-italic mb-0 mt-1"><i class="uil uil-map-marker-alt"></i>{{ $storeOther->sto_address }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                    
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
@stop




