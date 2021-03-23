@extends('user.layout')
@section('content_user')
    <div class="col-lg-8 col-12">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Thông Tin Cá Nhân :</h5>

                <div class="mt-3 text-md-left text-center d-sm-flex">
                    <img src="{{ asset('') }}image/unnamed.png" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">
                    
                    <div class="mt-md-4 mt-3 mt-sm-0">
                        <a href="javascript:void(0)" class="btn btn-primary mt-2">Thay Đổi Ảnh</a>
                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2">Xóa Ảnh</a>
                    </div>
                </div>

                <form>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <div class="position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="name" id="first" type="text" class="form-control pl-5" placeholder="First Name :">
                                </div>
                            </div>
                        </div><!--end col-->                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <div class="position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                </div>
                            </div> 
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Số Điện Thoại :</label>
                                <div class="position-relative">
                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                    <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Phone :">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <div class="position-relative">
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <input name="name" id="occupation" type="text" class="form-control pl-5" placeholder="Occupation :">
                                </div>
                            </div> 
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <div class="position-relative">
                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                    <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Description :"></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Lưu Thay Đổi">
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->

                
                <div class="row">
                    <div class="col-md-6 mt-4 pt-2">
                        <h5>Thông Tin Liên Lạc :</h5>

                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Facebook :</label>
                                        <div class="position-relative">
                                            <i data-feather="facebook" class="fea icon-sm icons"></i>
                                            <input name="facebook" id="url" type="text" class="form-control pl-5" placeholder="Url :">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Website :</label>
                                        <div class="position-relative">
                                            <i data-feather="globe" class="fea icon-sm icons"></i>
                                            <input name="url" id="url" type="url" class="form-control pl-5" placeholder="Url :">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <button class="btn btn-primary">Add</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end col-->
                    
                    <div class="col-md-6 mt-4 pt-2"> 
                        <h5>Thay đổi mật khẩu :</h5>
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mật khẩu cũ :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Old password" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mật khẩu mới :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="New password" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu mới :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" placeholder="Re-type New password" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <button class="btn btn-primary">Lưu thay đổi</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>

        <div class="rounded shadow mt-4">
            <div class="p-4 border-bottom">
                <h5 class="mb-0 text-danger">Xóa Tài Khoản :</h5>
            </div>

            <div class="p-4">
                <h6 class="mb-0">Bạn có muốn xóa tài khoản không? Vui lòng nhấn nút "Xóa" bên dưới</h6>
                <div class="mt-4">
                    <button class="btn btn-danger">Xóa Tài Khoản</button>
                </div><!--end col-->
            </div>
        </div>
    </div><!--end col-->
@stop
