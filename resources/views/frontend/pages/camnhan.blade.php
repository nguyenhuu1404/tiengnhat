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
                        <li class="breadcrumb-item active" aria-current="page">{!! $title !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="w-100 main-news">
        <div class="container">
            <div class="">
                <div class="col-md-12 pull-right">
                    <h1 class="tit-page">{!! $title !!}</h1>
                    <hr>
                    <div class="wr-content">
                        <div class="customer-fb slider">
                            <div>
                                <h3><img src="/images/landing/1.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/2.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/3.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/4.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/5.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/6.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/7.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/8.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/9.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/10.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/11.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/12.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/13.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/14.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/15.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/16.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/17.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/18.jpg" /></h3>
                            </div>
                            <div>
                                <h3><img src="/images/landing/19.jpg" /></h3>
                            </div>
                            
                        </div>

                        <div class="hotro-p">
                            <div class="row">
                                <div class="hotro-img text-right col-md-2 align-midle d-none d-sm-block"><img src="/images/logo-footer.png" alt=""></div>
                                <div class="hotro-p-content col-md-10 ">
                                    <a href="" class="font20 bold" style="color: #272727"> <i class="fa fa-mobile"></i> {{ setting('site.hotline') }}</a>
                                    <p class="font13">Hãy gọi cho chúng tôi nếu bạn đang có vấn đề về da cần được giải đáp <br>
                                        Hoặc bấm <b>ĐĂNG KÝ TƯ VẤN</b> chúng tôi sẽ hỗ trợ ngay cho bạn <br>
                                        Hoặc gửi thư qua: <b>tuvan.tiengnhatcolam@gmail.com</b> nếu bạn muốn kể chi tiết hơn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="fb-comments full" data-href="{{ url()->full() }}" data-width="100%" data-numposts="5"></div>

                    <div class="clearfix" style="height: 50px;"></div>

                </div>

            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $('.customer-fb').slick({
    autoplay:true,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
        {
        breakpoint: 768,
        settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
        breakpoint: 480,
        settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
</script>
@endpush