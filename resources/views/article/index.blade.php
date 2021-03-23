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
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
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
                                                <button type="submit" class="button-search btn btn-pills btn-primary">Tìm Bài Viết</button>
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

        <!-- Blog Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                           @include('article.article')
                            <!-- PAGINATION START -->
                            <div class="col-12">
                                <div class="pagination justify-content-center mb-0">
                                    {!! $articles->links() !!}
                                </div>                                
                            </div><!--end col-->


                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div><!--end col-->
                    @include('article.aside')
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
@stop