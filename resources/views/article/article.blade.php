@if(isset($articles))
@foreach($articles as $article)
<div class="col-lg-6 col-md-12 mb-4 pb-2">
    <div class="card blog rounded border-0 shadow">
        <a href="{{ route('get.detail.article',$article->a_slug) }}">
            <div class="position-relative">                                       
                <img src="{{ asset(pare_url_file($article->a_avatar,'article')) }}" class="card-img-top rounded-top" alt="...">
            <div class="overlay rounded-top bg-dark"></div>
            </div>
        </a>
        <div class="card-body content">
            <h5><a href="{{ route('get.detail.article',$article->a_slug) }}" class="card-title title text-dark">{{ $article->a_name }}</a></h5>
            <div class="post-meta d-flex justify-content-between mt-3">
                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                </ul>
                <a href="{{ route('get.detail.article',$article->a_slug) }}" class="text-muted readmore">Xem Thêm <i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
        <div class="author">
            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ $article->created_at->format('d-m-Y') }}</small>
        </div>
    </div>
</div><!--end col-->                                           
@endforeach
@endif