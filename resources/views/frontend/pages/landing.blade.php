@extends('frontend.layouts.page')

@section('content')

    @isset($banners)
        <section class="banner">
            @foreach ($banners as $banner)
                <div>
                    <img src="{{ Storage::url($banner['image']) }}">
                    @if($banner['text_button'])
                    <div class="title-description">
                        <div class="container">
                            <h2 class="title-slider">{{ $banner['title'] }}</h2>
                            <a href="" class="btn-slider ml-3">{{ $banner['text_button']}}</a>
                        </div>
                    </div>
                    @endif
                </div>
            @endforeach

        </section>
    @endisset

    <section class="w-100 bg-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-0 col-12 d-none d-sm-block">
                    <img class="w-100" src="/images/landing/mienphi.jpg" />
                </div>
                <div class="col-md-8 bd-free pl-0 pt-4 col-12">
                    <div class="row">
                        <div class="col-md-3 mb-4 col-12">
                            <div class="ld-lesson dropdown">
                                <div id="bangchu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                    Bảng chữ
                                </div>
                                <div class="dropdown-menu list-lesson" aria-labelledby="bangchu1">
                                    <a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=CMQ8EXkGmMM">Bảng chữ Hiragana  <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=gXsrIIKxT0E">Ghép chữ Hiragana  <span class="ld-free fs11">Học thử</span></a>
									 <a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=DhCuuLv4AEs">Âm đục, âm ghép Hiragana <span class="ld-free fs11">Học thử</span></a>
                                    <a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=P4v4mY0W3WU">Bảng chữ Katakana <span class="ld-free fs11">Học thử</span></a>
                                    <a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=CazigCH6vP4">Ghép chữ Katakana <span class="ld-free fs11">Học thử</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=LVu9eDsAwnk">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Đếm số, đếm tuổi
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="hhttps://www.youtube.com/watch?v=ZTme5T-L9SM">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Tổng quan về Kanji
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <div class="ld-lesson dropdown">
                                <div id="bangchu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                    Kanji Look and Learn
                                </div>
                                <div class="dropdown-menu list-lesson" aria-labelledby="bangchu">
                                    <a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=CZPJf6NLA-w&t=74s">Kanji 1A <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=i2SIO4gfUjA">Kanji 1B <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=vxXNhmZukL0&t=263s">Kanji 2A <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=caZQ2sGXMEY&t=843s">Kanji 2B <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=3_RVpiVeSiI&t=363s">Kanji 3A <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=N4k_1DLoX3w&t=184s">Kanji 3B <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=jSzhfYOLeGo&t=363s">Kanji 4A <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=XNeV-NBT6II">Kanji 4B <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=6J4bJaqMdYs">Kanji 5A <span class="ld-free fs11">Học thử</span></a>
									<a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=I-R1zVxkaTk&t=390s">Kanji 5B <span class="ld-free fs11">Học thử</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=PABaXjxOzNA">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ pháp bài 1
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=RJRgIiGiTRE">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ pháp Bài 8
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=XYKH8CiOD1c">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ pháp Bài 14
                                </div>
                            </a> 
                        </div>
                        <div target="_blank" class="col-md-3 mb-4 col-12">
                            <a href="https://www.youtube.com/watch?v=MO4WU2sXgDU">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ pháp Bài 22
                                </div>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 bg-chat pt-4 pb-4 text-center">
        
		<a class="buy-item fs28 bl-sx col-xs-12 text-uppercase" href="https://www.facebook.com/hoctiengnhatcolam">
            <img style="width: 50px;" src="/images/landing/chat.png" />
            Chat với Sensei
        </button>
        <a class="buy-item fs28 bl-sx col-xs-12 text-uppercase" href="https://tiengnhatcolam.vn/khoa-hoc/package/1-combo-n5-full">
            <img src="/images/landing/bag.png" />
            Mua khóa học N5
        </a>
    </section>

    <section class="bg-sale w-100 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 p-0 bg-white">
                    <div class="relative">
                        <img class="w-100" src="/images/landing/bg_sale.jpg" />
                        <div class="absolute ab-sale">
                            <div class="text-center w-100"><span class="uudai">Ưu đãi khóa học N5 FULL giảm tới</span></div>
                            <div class="text-center w-100">
                                <b class="big-sale tsd">38</b>
                                <span class="phantram tsd">%</span>
                            </div>
                            
                            <div class="d-flex lh1 justify-content-center flex-row">
                                <div class="p-1">
                                    <div class="giagoc xs-white lt cl818181 fw900">
                                        <span class="fs27">Giá gốc</span> 
                                        <b class="fs54">800k</b>
                                    </div>
                                </div>
                                <div class="p-1">
                                    <div class="giasale">
                                        <span class="cl424242 xs-white align-items-center fs27">Chỉ còn</span> 
                                        <b class="fs77 cl00a99d">500k</b>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="fs16 text-center mt-4 mb-4 cl595959">
                        Thời gian ưu đãi đến <span class="cl4f52d0">23h ngày 31 tháng 7 năm 2019</span>
                    </div>
                    <div class="cl424242 text-center mb-2 fs20">
                        Chỉ dành cho những người nhận được mã ưu đãi này
                    </div>
                    <div class="d-flex lh1 mb-2 justify-content-center flex-row">
                        <div class="p-2">
                            <img src="/images/landing/write.png" />
                            lamdaothanh305@gmail.com
                        </div>
                        <div class="p-2">
                            <img src="/images/landing/phone.png" />
                            037 223 2268
                        </div>
                    </div>
                </div>
                <div class="col-md-5 bg-form-sale p-0">
                    <div class="relative">
                        <img class="absolute icon-sale" src="/images/landing/sale.png" />
                    </div>
                    <div class="p-5">
                        <div class="text-center mb-2 fs36 text-white">Thời gian chỉ còn</div>
                        <div id="countdown" class="row mb-3 text-white">

                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('frontend.save.landing') }}" method="post">
                            @csrf
                            <input type="hidden" name="page" value="{{ $page }}" />
                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control form-control-lg bdr30" required placeholder="Họ tên">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control form-control-lg bdr30" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control form-control-lg bdr30" required placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control form-control-lg bdr30"  placeholder="Địa chỉ">
                            </div>
                            <button type="submit" class="guidangki text-uppercase bdr30">Đăng kí ngay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <section class="bg-lesson pt-4 pb-4 w-100">
        <div class="text-center fs30 text-uppercase fw700 clff6c00">
            25 bài N5 FULL thuộc giáo trình tiếng Nhật Minano Nihogo
        </div>
        <div class="text-center mb-4 fs24 cl1d1d1d">
            Đầy đủ nội dung Từ vựng - Ngữ Pháp - Hội Thoại - Chữ Kanji
        </div>
       
        <div class="container">
            <div class="row">
                <div class="p-2 w-20 dropdown xs-w-100">
                    <div id="bai-0" class="dropdown-toggle ld-lesson" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 0 <span class="ld-free ttfn fs16">Học thử</span></div>
                        <div class="lesson-title fs16"> Nhập Môn</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-0">
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-15-bang-chu-hiragana">Bảng chữ Hiragana  <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-16-am-duc-am-ghep-hiragana">Âm đục, âm ghép Hiragana <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-17-ghep-chu-hiragana">Ghép chữ Hiragana <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-18-bang-chu-katakana">Bảng chữ Katakana <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-19-ghep-chu-katakana">Ghép chữ Katakana	<span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-20-dem-so-dem-tuoi">Đếm số, đếm tuổi <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-21-gioi-thieu-giao-trinh">Giới thiệu giáo trình<span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-22-gioi-thieu-ban-than">Giới thiệu bản thân  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-23-cac-cau-giao-tiep-c-ban">Các câu giao tiếp cơ bản <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-24-cau-lenh-tieng-nhat-trong-lop-hoc">Câu lệnh tiếng Nhật trong lớp học <span class="ld-free fs11">Học thử</span></a>
                       <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-21-gioi-thieu-giao-trinh">Hướng dẫn lộ trình học vào bài ngữ pháp <span class="ld-free fs11">Học thử</span></a>
                    </div>
                </div>
				<div class="p-2 w-20 dropdown xs-w-100">
                    <div id="bai-1" class="dropdown-toggle ld-lesson" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 1 <span class="ld-free ttfn fs16">Học thử</span></div>
                        <div class="lesson-title fs16"> Giới thiệu bản thân</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-1">
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-27-tu-vung-bai-1">Từ vựng Bài 1  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-28-ngu-phap-bai-1">Ngữ pháp Bài 1  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-29-hoi-thoai-bai-1">Hội thoại Bài 1  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-30-nghe-hieu-bai-1">Nghe hiểu Bài 1  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-31-doc-hieu-bai-1">Đọc hiểu Bài 1  <span class="ld-free fs11">Học thử</span></a>
					    </div>
                </div>
					<div class="p-2 w-20 dropdown xs-w-100">
                    <div id="bai-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 2 <span class="ld-free ttfn fs16">Học thử</span></div>
                        <div class="lesson-title fs16"> Giới thiệu về đồ vật</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-2">
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-34-tu-vung-bai-2">Từ vựng Bài 2  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-35-ngu-phap-bai-2">Ngữ pháp Bài 2  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-36-hoi-thoai-bai-2">Hội thoại Bài 2  <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-37-nghe-hieu-bai-2">Nghe hiểu Bài 2<span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n5a/1-38-doc-hieu-bai-2">Đọc hiểu Bài 2  <span class="ld-free fs11">Học thử</span></a>
					    </div>
                </div>
                <div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 3 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Giới thiệu về địa điểm</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-3">
                        <button onclick="buynow()" class="dropdown-item" type="button">Đếm giá tiền (Hàng trăm đến nghìn tỉ) <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 3 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 3 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 3 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 3 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 3 <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 4 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thời gian thực hiện hành động</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-4">
                        <button onclick="buynow()" class="dropdown-item" type="button">Đếm giờ, phút, giây <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 4 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 4 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 4 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 4 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 4 <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 5 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Cách nói về sự di chuyển</div>
                    </div>
					<div class="dropdown-menu list-lesson" aria-labelledby="bai-5">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 5 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 5  <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 5 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 5 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 5 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Tổng quan về chữ Hán <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">80 Bộ thủ hay gặp <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 1 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 6 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Miêu tả hành động</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-6">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 6 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 6 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 6 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 6 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 6 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 1 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 7 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu cho nhận</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-7">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 7 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 7 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 7 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 7 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 7 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 2 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 8 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu tính từ</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-8">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 8 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 8 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 8 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 8 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 8 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 2 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 9 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu vì nên</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-9">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 9 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 9 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 9  <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 9 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 9 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 3 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 10 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu vị trí</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-10">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 10 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 10 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 10 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 10 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 10 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 3 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 11 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Lượng từ trong tiếng Nhật</div>
                    </div>
				
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-11">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 11 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 11 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 11 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 11 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 11 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 4 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 12 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu tính từ mở rộng</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-12">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 12 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 12 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 12 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 12 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 12 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 4 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 13 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu ý muốn</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-13">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 13 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 13 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 13 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 13 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 13 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 5 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 14 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Chia động từ thể Te</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-14">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 14 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 14 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 14 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 14 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 14 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 5 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 15 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mở rộng mẫu câu thể Te</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-15">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 15 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 15 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 15 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 15 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 15 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 6 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 16 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Nối câu</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-16">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 16 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 16 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 16 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 16 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 16 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 6 (phần 2)<i class="fa fa-lock"></i></button><
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 17 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể phủ định dạng ngắn</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-17">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 17 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 17 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 17 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 17 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 17 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 7 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 18 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể từ điển</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-18">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 18 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 18 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 18  <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 18 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 18 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 7 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 19 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể Quá khứ dạng ngắn</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-19">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 19 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 19 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 19 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 19 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 19 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 8 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 20 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể thông thường</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-20">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 20 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 20 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 20 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 20 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 20 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 8 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 21 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu nói suy nghĩ</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-21">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 21 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 21 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 21 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 21 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 21 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 9 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 22 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mệnh đề bổ ngữ </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-22">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 22 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 22 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 22<i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 22 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 22 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 9 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-23" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 23 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu khi A thì B</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-23">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 23 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 23 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 23 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 23 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 23 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 10 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-24" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 24 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu cho nhận mở rộng</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-24">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 24 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 24 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 24 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 24 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 24 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 10 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
				</div>
				
					<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 25 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu nếu thì, mặc dù </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-25">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 25 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 25 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 25 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 25 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 25 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 11 (phần 1) <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Bài test tổng ngữ pháp 25 bài <i class="fa fa-lock"></i></button>
                    </div>
					</div>
				</div>			
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <button class="phone2 text-uppercase">
                <div class="d-flex justify-content-center flex-row">
                    <div class="p-2">
                        <img style="width: 50px;" src="/images/landing/phone2.png" />
                    </div>
                    <div class="p-2 fs27 align-self-center">
                        Hotline
                    </div>
                    <div style="font-size: 30px;" class="align-self p-2 fw700">
                        037 223 2268
                    </div>
                </div>
            </button>
        </div>
    </section>
    <section class="bg-customers pt-5 pb-5 w-100">
        <div class="container">
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
        </div>
    </section>
@endsection
@push('scripts')

<script>
    $('.banner').slick({
        autoplay: true,
        autoplaySpeed: 5000
    });

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
    function buynow()
    {
        alert('Bạn cần mua tài khoản để xem nội dung này!');
        return false;
    }

function countDownDate(strtime, elm)
{
    var countDownDate = new Date(strtime).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    var html = '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">'+days+'</div>'+
            '<div class="w-100 downtime">Ngày</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">'+hours+'</div>'+
            '<div class="w-100 downtime">Giờ</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">'+minutes+'</div>'+
            '<div class="w-100 downtime">Phút</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">'+seconds+'</div>'+
            '<div class="w-100 downtime">Giây</div>'+
        '</div>';
    document.getElementById(elm).innerHTML = html;

    // If the count down is finished, write some text 
    if (distance < 0) {
        clearInterval(x);
        var html = '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">0</div>'+
            '<div class="w-100 downtime">Ngày</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">0</div>'+
            '<div class="w-100 downtime">Giờ</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">0</div>'+
            '<div class="w-100 downtime">Phút</div>'+
        '</div>'+
        '<div class="p-2 text-center w-25">'+
            '<div class="w-100 toptime">0</div>'+
            '<div class="w-100 downtime">Giây</div>'+
        '</div>';
        document.getElementById(elm).innerHTML = html;
    }
    }, 1000);
}   

countDownDate('2019-07-20 10:10:0', 'countdown');

</script>
@endpush