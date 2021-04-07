@extends('layout.app_outside')
@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-6">                    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                   
                    <img src="{{ asset('/') }}images/404.svg" class="" alt="">
                    <div class="back-to-home rounded d-none d-sm-block">
                        <a href="{{ route('home') }}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i>Về Trang Chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop