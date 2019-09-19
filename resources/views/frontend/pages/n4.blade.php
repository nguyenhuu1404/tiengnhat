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
                            <a target="_blank" href="https://www.youtube.com/watch?v=8-Hd5Fbr1Go">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ Pháp Bài 26 - Mẫu んです
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=_2_7Jw32Yhc">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Đọc Hiểu Bài 26
                                </div>
                            </a> 
                        </div>
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=S6_t2xqJn58">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ Pháp Bài 29 - Tự động từ và tha động từ 
                                </div>
                            </a> 
                        </div>
                        
                        <div class="col-md-3 mb-4 col-12">
                            <a target="_blank" href="https://www.youtube.com/watch?v=f_J1SKXu-Ww">
                                <div class=" bd-item-free pb-2 relative">
                                    <span class="absolute free-lable mb-3">Miễn phí</span>
                                Ngữ Pháp Bài 35 - Thể điều kiện- Phân biệt と・たら・ば
                                </div>
                            </a> 
                        </div>
                                           
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 bg-chat pt-4 pb-4 text-center">
        
		<a class="buy-item p-3 fs18 bl-sx col-xs-12 text-uppercase" href="https://www.facebook.com/hoctiengnhatcolam">
            <img style="width: 30px;" src="/images/landing/chat.png" />
            Chat với Sensei
        </a>
        <a class="buy-item p-3 fs18 bl-sx col-xs-12 text-uppercase" href="https://tiengnhatcolam.vn/khoa-hoc/17-khoa-hoc-n5">
            <img style="width: 25px;" src="/images/landing/bag.png" />
            Mua khóa học N5
        </a>
		<a class="buy-item p-3 fs18 bl-sx col-xs-12 text-uppercase" href="https://tiengnhatcolam.vn/khoa-hoc/18-khoa-hoc-n4">
            <img style="width: 25px;" src="/images/landing/bag.png" />
            Mua khóa học N4
        </a>
		<a class="buy-item p-3 fs18 bl-sx col-xs-12 text-uppercase" href="https://tiengnhatcolam.vn/khoa-hoc/package/6-combo-n5-n4">
            <img style="width: 25px;" src="/images/landing/bag.png" />
            Mua khóa học N5+N4
        </a>
    </section>

    <section class="bg-sale w-100 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 p-0 bg-white">
                    <div class="customer-sale w-100">
                        <img src="/images/landing/n451.png" />
                        <img src="/images/landing/n452.png" />
                        <img src="/images/landing/n453.png" />
                        <img src="/images/landing/n454.png" />
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
                            <input type="hidden" value="{{ $page }}" name="page" />
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
            25 bài N4 FULL thuộc giáo trình tiếng Nhật Minano Nihogo
        </div>
        <div class="text-center mb-4 fs24 cl1d1d1d">
            Đầy đủ nội dung Từ vựng - Ngữ Pháp - Hội Thoại - Chữ Kanji
        </div>
       
        <div class="container">
            <div class="row">
                <div class="p-2 w-20 dropdown xs-w-100">
                    <div id="bai-0" class="dropdown-toggle ld-lesson" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 26 <span class="ld-free ttfn fs16">Học thử</span></div>
                        <div class="lesson-title fs16"> Tôi phải đổ rác ở đâu</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-0">
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n4/18-222-tu-vung-bai-26">Từ vựng bài 26  <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n4/18-223-ngu-phap-bai-26">Ngữ pháp bài 26<span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n4/18-224-hoi-thoai-bai-26">Hội thoại bài 26 <span class="ld-free fs11">Học thử</span></a>
						<a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n4/18-226-doc-hieu-bai-26">Đọc hiểu bài 26 <span class="ld-free fs11">Học thử</span></a>
                        <a target="_blank" class="dropdown-item" href="https://tiengnhatcolam.vn/khoa-hoc/khoa-hoc-n4/18-227-chu-han-bai-11-phan-2">Chữ Hán bài 11 (Phần 2)	<span class="ld-free fs11">Học thử</span></a>
                        						
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 27 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể khả năng</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-3">
                        
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 27 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 27 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 27 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 27 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 27 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 12 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
					<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 28 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Vừa ~ vừa ~</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-3">
                        
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 28 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 28 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 28 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 28 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 28 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 12 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
                <div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 29 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Câu trạng thái với tự động từ</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-3">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 29 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 29 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 29 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 29 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 29 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 13 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 30 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Câu trạng thái với tha động từ</div>
                    </div>
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-4">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 30 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 30 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 30 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 30 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 30 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 13 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 31 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu dự định</div>
                    </div>
					<div class="dropdown-menu list-lesson" aria-labelledby="bai-5">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 31 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 31  <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 31 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 31 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 31 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 14 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 32 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu phỏng đoán</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-6">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 32 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 32 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 32 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 32 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 32 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 14 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 33 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể mệnh lệnh và cấm chỉ</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-7">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 33 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 33 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 33 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 33 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 33 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 15 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 34 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Hãy làm theo tôi</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-8">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 34 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 34 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 34 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 34 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 34 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 15 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 35 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể điều kiện</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-9">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 35 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 35 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 35  <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 35 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 35 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 16 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 36 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Các mẫu なります </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-10">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 36 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 36 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 36 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 36 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 36 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 16 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 37 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể bị động</div>
                    </div>
				
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-11">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 37 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 37 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 37 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 37 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 37 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 17 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 38 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Danh từ hóa</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-12">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 38 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 38 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 38 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 38 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 38 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 17 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 39 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu vì nên mở rộng</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-13">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 39 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 39 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 39 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 39 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 39 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 18 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 40 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Chèn câu hỏi vào trong câu</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-14">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 40 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 40 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 40 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 40 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 40 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 18 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 41 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mở rộng mẫu câu cho nhận</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-15">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 41 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 41 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 41 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 41 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 41 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 19 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 42 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu câu mục đích </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-16">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 42 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 42 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 42 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 42 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 42 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 19 (phần 2)<i class="fa fa-lock"></i></button><
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 43 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Trông có vẻ</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-17">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 43 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 43 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 43 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 43 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 43 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 20 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 44 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu ghép nối mở rộng nghĩa</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-18">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 44 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 44 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 44  <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 44 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 44 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 20 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 45 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Mẫu thế mà  n</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-19">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 45 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 45 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 45 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 45 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 45 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 21 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 46 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Vừa mới ~ / Chắc chắn là ~  </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-20">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 46 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 46 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 46 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 46 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 46 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 21 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 47 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Nghe nói là ~  </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-21">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 47 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 47 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 47 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 47 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 47 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 22 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 48 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Thể sai khiến </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-22">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 48 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 48 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 48 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 48 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 48 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 22 (phần 2) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-23" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 49 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Tôn kính ngữ</div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-23">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 49 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 49 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 49 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 49 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 49 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 23 (phần 1) <i class="fa fa-lock"></i></button>
                    </div>
                </div>
				
				<div class="p-2 w-20 ld-lesson dropdown xs-w-100">
                    <div id="bai-24" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="lesson-item fs24 fw700 text-uppercase">Bài 50 <i class="fa fa-lock"></i></div>
                        <div class="lesson-title fs16">Khiêm nhường ngữ  </div>
                    </div>
					
                    <div class="dropdown-menu list-lesson" aria-labelledby="bai-24">
                        <button onclick="buynow()" class="dropdown-item" type="button">Từ vựng Bài 50 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Ngữ pháp Bài 50 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Hội thoại Bài 50 <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Nghe hiểu Bài 50 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Đọc hiểu Bài 50 <i class="fa fa-lock"></i></button>
                        <button onclick="buynow()" class="dropdown-item" type="button">Chữ Hán Bài 23 (phần 2) <i class="fa fa-lock"></i></button>
						<button onclick="buynow()" class="dropdown-item" type="button">Bài test tổng hợp ngữ pháp N4 <i class="fa fa-lock"></i></button>
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

    $('.customer-sale').slick({
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

countDownDate('2019-08-31 23:59:59', 'countdown');

</script>
@endpush