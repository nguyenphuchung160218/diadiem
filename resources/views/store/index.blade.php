@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"></h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Chuyên Mục</li>
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
                                        <form method="post" style="max-width: 800px;">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" id="course" name="search" class="rounded-pill shadow-md bg-white" placeholder="Search keywords...">
                                                <button type="submit" class="button-search btn btn-pills btn-primary">Tìm Địa Điểm</button>
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
            	<form action="{{ route('post.category')}}" method="post" id="filter" class="mb-2 bg-white p-2">
                    @csrf
					<div class="row align-items-center">
					    <div class="col-md-3">
					        <strong>Chọn tìm kiếm của bạn</strong>
					    </div>
					    <div class="col-md-3">
					        <select class="form-control border-danger m-1" name="areaId">
					            <option value="">Chọn thành phố...</option>
                                @if(isset($areas))
                                @foreach($areas as $area)
					               <option value="{{ $area->id }}" 
                                        <?php

                                            if($activeArea==$area->area_slug){
                                                echo 'selected="selected"';
                                            }
                                            elseif(Request::post('areaId') == $area->id){
                                                echo 'selected="selected"';
                                            }
                                            else{
                                                echo '';
                                            }
                                        ?>
                                    >{{ $area->area_name }}</option>
					            @endforeach
                                @endif
					        </select>
					    </div>
					    <div class="col-md-3">
					        <select class="form-control border-danger m-1" name="categoryId">
					            <option value="">Chọn chuyên mục...</option>
					            @if(isset($categories))
                                @foreach($categories as $category)
                                   <option value="{{ $category->id }}" 
                                        <?php
                                            if($activeSlug==$category->c_slug){
                                                echo 'selected="selected"';
                                            }
                                            elseif(Request::post('categoryId') == $category->id){
                                                echo 'selected="selected"';
                                            }
                                            else{
                                                echo '';
                                            }
                                       ?>
                                   >{{ $category->c_name }}</option>
                                @endforeach
                                @endif
					        </select>
					    </div>
					    <div class="col-md-3">
					        <button type="submit" class="btn btn-block btn-danger m-1">Tìm kiếm</button>
					    </div>					   
					</div>
					</form>
                <div class="row">
                    @if($stores->total()==0)
                    <div class="col-lg-12 col-md-12 mb-4 mt-4 pb-2">
                        <h5 style="background: #f8d7da" class="text-danger text-center p-4">Ôi không, mục này chưa có dữ liệu bạn à.</h5>
                    </div>
                    @endif
                    @if(isset($stores))                       
                    @foreach($stores as $store)

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <a href="{{ route('get.detail.store',[$store->category->c_slug,$store->sto_slug]) }}">
                                <div class="position-relative">                                       
                                    <img width="350px" height="233px" src="<?php                            
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
                                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a>                             
                            </div>
                        </div>
                    </div><!--end col-->                   
                    @endforeach
                    @endif

                    <!-- PAGINATION START -->
                    <div class="col-12">
                        <div class="pagination justify-content-center mb-0">
                            @if(isset($query))
                                {!! $stores->appends($query)->links() !!}
                            @else
                                {!! $stores->links() !!}
                            @endif
                        </div>                                
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
@stop