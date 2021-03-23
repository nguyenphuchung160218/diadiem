<!-- START SIDEBAR -->
    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
        <div class="card border-0 sidebar sticky-bar rounded shadow">
            <div class="card-body">   
                <!-- RECENT POST -->
                <div class="widget mb-4 pb-2">
                    <h5 class="widget-title sidebar-hot">Bài Viết Nổi Bật</h5>
                    <div class="mt-4">
                        @if(isset($articlesHot))
                        @foreach($articlesHot as $articleHot)

                        <div class="clearfix post-recent">
                            <div style="width: 40%" class="post-recent-thumb float-left">
                                <a href="{{ route('get.detail.article',$articleHot->a_slug) }}">
                                    <img alt="img" src="{{ asset(pare_url_file($articleHot->a_avatar,'article')) }}" class="img-fluid rounded">
                                </a>
                            </div>
                            <div style="width: 60%" class="post-recent-content float-left">
                                <a class="text-danger1" href="{{ route('get.detail.article',$articleHot->a_slug) }}">{{ $articleHot->a_name }}</a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <!-- RECENT POST -->

                <!-- TAG CLOUDS -->
                <div class="widget mb-4 pb-2">
                    <h5 class="widget-title">Thẻ Tags</h5>
                    <div class="tagcloud mt-4">
                        @foreach($categoryArticle as $category)
                        <a href="" class="rounded">{{$category->c_name}}</a>
                        @endforeach                                      
                    </div>
                </div>
                <!-- TAG CLOUDS -->
                
                <!-- SOCIAL -->
                <div class="widget">
                    <h5 class="widget-title">Theo dõi chúng tôi</h5>
                    <ul class="list-unstyled social-icon mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div>
                <!-- SOCIAL -->
            </div>
        </div>
    </div><!--end col-->
<!-- END SIDEBAR -->