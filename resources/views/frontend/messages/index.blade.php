@extends('frontend.layouts.master')

@section('content')

<section class="banner">
    <img src="/images/banner-lesson.png">
    <div class="breadcrumb-position">
        <div class="container">
            <div class="title-breadcrumb">Học tiếng Nhật online</div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thông báo</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="w-100 main-news">
				<div class="container">
                    <div class="row">
                        @if($courseMessages)
                            @foreach($courseMessages as $courseMessage)
                            <div class="col-md-4 col-xs-12 mb-3">
                                <div class="card">
                                    @if($courseMessage['image'])
                                    <a href="/thong-bao/{{$courseMessage['id']}}-{{$courseMessage['slug']}}" title="{{ $courseMessage['title'] }}">
                                        <img class="card-img-top" src="{{ Storage::url($courseMessage['image']) }}" alt="{{ $courseMessage['title'] }}">
                                        </a>
                                    @endif
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $courseMessage['title'] }}
                                    @if($courseMessage['recent'] == 1)
                                        <span class="badge badge-pill badge-danger">New</span>
                                        @endif
                                    </h5>
                                    <p class="card-text">{{ $courseMessage['excerpt'] }}</p>
                                    <a href="/thong-bao/{{$courseMessage['id']}}-{{$courseMessage['slug']}}" class="btn-readmore btn news transition">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        @if($messages)
                            @foreach($messages as $message)
                            <div class="col-md-4 col-xs-12 mb-3">
                                <div class="card">
                                    @if($message['image'])
                                    <a href="/thong-bao/{{$message['id']}}-{{$message['slug']}}" title="{{ $message['title'] }}">
                                        <img class="card-img-top" src="{{ Storage::url($message['image']) }}" alt="{{ $message['title'] }}">
                                        </a>
                                    @endif
                                    <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $message['title'] }}
                                        @if($message['recent'] == 1)
                                        <span class="badge badge-pill badge-danger">New</span>
                                        @endif
                                    </h5>
                                    <p class="card-text">{{ $message['excerpt'] }}</p>
                                    <a href="/thong-bao/{{$message['id']}}-{{$message['slug']}}" class="btn-readmore btn news transition">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        @if(session('totalMessages') == 0)
                        <div class="alert alert-danger w-100">Chưa có thông báo</div>
                        @endif
                    </div>


                    <div class="clearfix" style="height: 50px;"></div>
				</div>
			</section>
@endsection
