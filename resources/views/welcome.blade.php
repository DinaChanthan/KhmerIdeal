@extends('layouts.app')

@section('content')

<div class="about-area2 gray-bg pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="whats-news-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">
                                        @foreach($news_contents as $news_content )
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="whats-news-single mb-40 mb-40">
                                                <div class="whates-img">
                                                    <img src={{ Voyager::image($news_content->image) }} alt="">
                                                </div>
                                                <div class="whates-caption whates-caption2">
                                                    <h4>
                                                        <a href="{{ route('news_detail', strip_tags($news_content->header_slug)) }}">
                                                        {!! strip_tags($news_content->header) !!}
                                                        </a>
                                                    </h4>
                                                    @foreach($users as $user)
                                                    <span>by {{ $user->name }} - {{ $news_content->created_at }}</span>
                                                    @endforeach
                                                    <p>{!! strip_tags($news_content->body) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Start pagination -->
<div class="pagination-area  gray-bg pb-45">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                        <li class="page-item"><a class="page-link" href="#">
                            <!-- SVG icon -->
                            <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="15px">
                                <path fill-rule="evenodd"  fill="rgb(221, 221, 221)" d="M8.142,13.118 L6.973,14.135 L0.127,7.646 L0.127,6.623 L6.973,0.132 L8.087,1.153 L2.683,6.413 L23.309,6.413 L23.309,7.856 L2.683,7.856 L8.142,13.118 Z"/>
                                </svg>
                        </span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">
                            <!-- SVG iocn -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="15px">
                            <path fill-rule="evenodd"  fill="rgb(255, 11, 11)" d="M31.112,13.118 L32.281,14.136 L39.127,7.646 L39.127,6.624 L32.281,0.132 L31.167,1.154 L36.571,6.413 L0.491,6.413 L0.491,7.857 L36.571,7.857 L31.112,13.118 Z"/>
                            </svg>
                        </span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End pagination  -->

@endsection
