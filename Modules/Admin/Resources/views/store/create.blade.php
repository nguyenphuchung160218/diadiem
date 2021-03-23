@extends('admin::layouts.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Quán
                    </h1>
                    <ol class="breadcrumb">
                        <li class="">
                            <i class="fa fa-dashboard"></i> Trang Chủ
                        </li>
                        <li class="">
                            <i class="fa fa-dashboard"></i> Quán
                        </li>
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Thêm Mới
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @include('admin::store.form')
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@stop
