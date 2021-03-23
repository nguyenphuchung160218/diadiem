@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            @if(isset($article)):
                            <h2> {{ $article->a_name }} </h2>
                            @endif
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 user text-muted mr-2"><i class="mdi mdi-account"></i> Calvin Carlo</li>
                                <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> {{ $article->created_at->format('d-m-Y') }}</li>
                            </ul>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Bài Viết</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
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
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <div class="card-body">
                                <h5>{{ $article->a_name }}</h5>
                                <p>{{ $article->a_description }}</p>
                                <img src="{{ asset(pare_url_file($article->a_avatar,'article')) }}" class="img-fluid rounded-top" alt="">
                            </div>
                            <div class="card-body content">
                                {!! $article->a_content !!}

                                <div class="post-meta mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-eye-outline mr-1"></i>{{ $article->a_view }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <div class="p-3">
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href={{$articleUrl}}&layout=button&size=large&width=87&height=28&appId" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>                         
                            <div class="card-body mt-4">                              
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
                                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
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
                                <form class="mt-3" method="post" action="{{ route('save.form.comment.article',$article->id) }}">
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
                                                    <input id="email" type="email" placeholder="Email" name="co_email" class="form-control pl-5" required="" value="{{ get_data_user('web','name') }}">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="send">
                                            <button type="submit" class="btn btn-primary btn-block">Gửi Bình Luận</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>                 
                    </div>
                    <!-- BLog End -->
                    @include('article.aside')                    
                </div><!--end row-->
            </div><!--end container-->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Các Bài Viết Khác</h5>
                    </div><!--end col-->

                    <div class="col-12 mt-4">
                        <div id="client-four" class="owl-carousel owl-theme">

                            @if(isset($articlesOther))
                            @foreach($articlesOther as $articleOther)               
                            <div class="card shop-list border-0 position-relative m-2">                               
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="">
                                        <img style="min-height: 174px" src="{{ asset(pare_url_file($articleOther->a_avatar,'article')) }}" class="img-fluid">
                                    </a>
                                    <a href="" class="overlay-work">
                                        <img style="min-height: 174px" src="{{ asset(pare_url_file($articleOther->a_avatar,'article')) }}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="" class="text-dark product-name h6">{{ $articleOther->a_name }}</a>
                                    <div class="d-flex justify-content-between mt-1">
                                        <h6 class="text-muted small font-italic mb-0 mt-1">{{ $articleOther->a_decscription }}</h6>
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
