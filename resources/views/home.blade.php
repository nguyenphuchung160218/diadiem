@extends('layout.app')
@section('content')
    @include('layout.slider')
    
    <section class="section">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Điểm Đến Hàng Đầu</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Khám phá ngay các địa điểm, hoạt động du lịch và ăn uống cho hành trình du lịch của bạn tại <span class="text-primary font-weight-bold">Địa Điểm Tây Nguyên</span>.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <div id="six-slide" class="owl-carousel owl-theme">
                        @if(isset($areas))
                        @foreach($areas as $area)
                        <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">                          
                            <img src="{{ asset(pare_url_file($area->area_avatar,'area')) }}" class="img-fluid" alt="">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <a href="{{ route('get.find.area',$area->area_slug) }}" class="title text-white h4 title-dark">{{ $area->area_name }}</a>
                            </div>
                        </div><!--end tour post-->
                        @endforeach
                        @endif
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>

        <div class="container mt-100 mt-60">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-left">
                        <h4 class="mb-4">Địa Điểm Nổi Bật</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @if(isset($stores))
                @foreach($stores as $store)

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <a href="{{ route('get.detail.store',[$store->category->c_slug,$store->sto_slug]) }}">
                            <div class="position-relative">                                       
                                <img style="min-height: 233px" src="<?php                            
                                    if(substr($store->sto_avatar,0,4)=='http'){
                                        echo $store->sto_avatar;                                    
                                    }
                                    else{
                                        echo asset(pare_url_file($store->sto_avatar,'store'));
                                    }
                                    ?>
                                    " class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                            </div>
                        </a>
                        <div class="card-body content">
                            <h5><a href="{{ route('get.detail.store',[$store->category->c_slug,$store->sto_slug]) }}" class="card-title title text-dark">{{ $store->sto_name }}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <h6 class="text-muted small font-italic mb-0 mt-1"><i class="uil uil-map-marker-alt"></i>{{ $store->sto_address }}</h6>
                            </div>
                        </div>
                        <div class="author">
                            <a href="{{ route('get.heart',$store->id) }}" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a>                             
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
                @endif
                <!-- PAGINATION START -->
                <div class="col-12">
                    <div class="pagination justify-content-center mb-0">
                        {!! $stores->links() !!}
                    </div>                                
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Cta start -->
        <div class="container-fluid mt-100 mt-60">
            <div class="rounded-md shadow-md py-5 position-relative" style="background: url('{{ asset('') }}images/3.jpg') center center;">
                <div class="bg-overlay rounded-md"></div>
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="font-weight-bold text-white title-dark mb-4 pb-2">People are podcasting <br> all over the world</h2>
                                <a href="javascript:void(0)" class="btn btn-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end slide-->
        </div><!--end container-->
        <!-- Cta End -->

        
    </section><!--end section-->
@stop