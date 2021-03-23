@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Khu Vực
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                    <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Khu Vực
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->

      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="{{ route('admin.create.area') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên khu vực

                </th>    
                <th class="th-sm">Hình ảnh

                </th>     
                <th class="th-sm">Hiện trang chủ

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
                @if(isset($areas))
                @foreach($areas as $area)
                  <tr>
                      <td>{{ $area->id }}</td>
                      <td>{{ $area->area_name }}</td>
                      <td>
                        <img src="{{ asset(pare_url_file($area->area_avatar,'area')) }}" class="img img-responsive" style="width: 100px;height: 80px;">
                      </td>
                      <td>
                           <a href="{{ route('admin.action.area',['home',$area->id]) }}" class="label {{ $area->getHome($area->area_home)['class'] }}">{{ $area->getHome($area->area_home)['name'] }}</a>
                      </td>
                      <td>
                          <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.edit.area',$area->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                          <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.area',['delete',$area->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
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
