<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <label for="name"> Tên khu vực:</label>
                <input type="text" class="form-control" placeholder="Tên khu vực" value="{{ old('name',isset($area->area_name) ? $area->area_name : '') }}" name="name" >
                @if($errors->has('name'))<span class="error-text">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <img id="out_img" src="{{ asset('image/unnamed.png') }}" style="height: 300px;width: 100%">
            </div>
            <div class="form-group">
                <label for="name"> Hình ảnh:</label>
                <input type="file" id="input_img" name="avatar" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success"> Lưu thông tin</button>
</form>


