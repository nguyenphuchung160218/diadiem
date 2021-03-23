<!--Hero Start -->
        <div class="container-fluid px-0 px-md-3 mt-5 pt-md-4">
            <div class="slider single-item">
                <div class="bg-half-170 rounded-md" style="background: url('{{ asset('') }}images/blog/bg1.jpg') center center;">
                    <div class="bg-overlay rounded-md"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center mt-5">
                                    <div class="features-absolute blog-search">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <div class="subcribe-form">
                                                    <form method="post" style="max-width: 800px;" action="{{ route('post.category')}}">
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
                                    <h2 class="text-white title-dark mb-3">Tìm Kiếm Địa Điểm Vui Chơi Nào</h2>
                                    <div class="mt-4">
                                        <a href="{{ route('get.category') }}" class="btn btn-primary">Xem Thêm </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end slide-->

                <div class="bg-half-170 rounded-md" style="background: url('{{ asset('') }}images/blog/bg2.jpg') center center;">
                    <div class="bg-overlay rounded-md"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center mt-5">
                                    <div class="features-absolute blog-search">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <div class="subcribe-form">
                                                    <form method="post" style="max-width: 800px;">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" id="course" name="search" class="rounded-pill shadow-md bg-white" placeholder="Search keywords...">
                                                            <button type="submit" class="button-search btn btn-pills btn-primary">Tìm Bài Viết</button>
                                                        </div>
                                                    </form><!--end form-->
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end div-->
                                    <h2 class="text-white title-dark mb-3">Các Bài Viết Nổi Bật</h2>
                                    <div class="mt-4">
                                        <a href="{{ route('get.list.article') }}" class="btn btn-primary">Xem Thêm</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end slide-->

                <div class="bg-half-170 rounded-md" style="background: url('{{ asset('') }}images/blog/bg3.jpg') center center;">
                    <div class="bg-overlay rounded-md"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center">
                                    <h2 class="text-white title-dark mb-3">Chia Sẻ Địa Điểm Tuyệt Vời Mà Bạn Đã Đi</h2>

                                    <div class="mt-4">
                                        <a href="{{ route('get.user.post') }}" class="btn btn-primary">Đăng Bài </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end slide-->
            </div><!--end slider-->
        </div><!--end container-->
        <!-- Hero End-->