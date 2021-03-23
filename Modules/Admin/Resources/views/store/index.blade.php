@extends('admin::layouts.master')
@section('content')
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
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Quán
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="{{ route('admin.create.store') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 20%;">Tên quán</th>
                    <th>Danh Mục</th>
                    <th style="width: 100px;">Hình ảnh</th>
                    <th style="width: 300px;">Mô tả</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th>Khu Vực</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($stores))
            @foreach($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{ $store->sto_name }}</td>
                    <td>{{ $store->category->c_name }}</td>
                    <td>
                        <img src="{{ asset(pare_url_file($store->sto_avatar,'store')) }}" class="img img-responsive" style="width: 100px;height: 80px;">
                    </td>
                    <td><p style="-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;display: -webkit-box;">{{ $store->sto_description }}</p></td>
                    <td>
                        <a href="{{ route('admin.action.store',['hot',$store->id]) }}" class="label {{ $store->getHot($store->sto_hot)['class'] }}">{{ $store->getHot($store->sto_hot)['name'] }}</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.action.store',['active',$store->id]) }}" class="label {{ $store->getStatus($store->sto_active)['class'] }}">{{ $store->getStatus($store->sto_active)['name'] }}</a>
                    </td>
                    <td>{{ $store->area->area_name }}</td>
                    <td>
                        <a class="btn btn-info" style="font-size: 12px" href="{{ route('admin.edit.store',$store->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                        <a class="btn btn-danger" style="font-size: 12px" href="{{ route('admin.action.store',['delete',$store->id]) }}"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->
@stop
