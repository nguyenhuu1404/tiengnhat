<header class="header">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="/">
							<img src="{{ Storage::url(setting('site.logo')) }}" alt="logo">
						</a>

                        <div class="s-xs text-white">
                            @guest
                            <button type="button" data-toggle="modal" data-target="#login" class="info-user d-flex pointer btn transition">
                                <i class="fa fa-user mg4" aria-hidden="true"></i>
                                Đăng nhập
                            </button>
                            <button type="button" onclick="register();" data-toggle="modal" data-target="#signup" class="info-user d-flex pointer btn transition">
                                <i class="fa fa-user mg4" aria-hidden="true"></i>
                                Đăng kí
                            </button>
                            @else
                            <button onclick="mbileProfile();" type="button" class="info-user d-flex pointer">
                                <div class="avatar-user">
                                    @if (Storage::disk('public')->exists(Auth::user()->avatar))
                                        <img style="width: 26px; border-radius: 50%;" src="{{ Storage::url(Auth::user()->avatar) }}" alt="avatar">
                                    @elseif (Auth::user()->avatar == 'users/default.png')
                                        <img style="width: 26px; border-radius: 50%;" src="/{{ Auth::user()->avatar }}" alt="avatar">
                                    @else
                                        <img style="width: 26px; border-radius: 50%;" src="{{ Auth::user()->avatar }}" alt="avatar">
                                    @endif
                                </div>
                                <div class="name-user">{{ Auth::user()->name }}</div>
                                @if(session('totalMessages') > 0)
                                <div class="notification-user">{{ session('totalMessages')  }}</div>
                                @endif
                                <style>
                                    #m-mobile{position: absolute; background: white; top:33px;list-style: none;
                                    padding: 10px;
                                    text-align: right;
                                    border-radius: 10px;
                                    transition: all 0.8s ease;
                                    width: 200px;
                                    display: none;
                                    right: 0px;
                                    }
                                    #m-mobile li a{color: black;}
                                </style>
                                <ul id="m-mobile">
                                    <li><a href="/khoa-hoc-cua-toi">Khóa học của tôi <i class="fa fa-file-text-o"></i></a></li>
                                    <li><a href="/thong-bao">Thông báo <i class="fa fa-exclamation-circle "></i></a></li>
                                    <li><a href="/trang-ca-nhan">Trang cá nhân<i class="fa fa-lock"></i></a></li>
                                    <li>
                                    <a class="dropdown-item" href="{{route('frontend.logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Thoát<i class="fa fa-sign-out"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('frontend.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </button>
                            @endguest
                        </div>

						<button class="navbar-toggler collapsed " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>

						<div class="collapse navbar-collapse " id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto" id="andy">
								<?php
								echo menu('topmenu', 'topmenu');
								?>

								<li  class="nav-item d-flex hd-xs align-items-center">
									<div class="search-nav">
										<!-- <button type="button" class="btn-search toggle-search"><i class="fa fa-search"></i></button>
										<div class="form-search">
											<div class="input-group">
												<input type="search" class="form-control">
												<div class="input-group-prepend">
													<button type="button" class="btn btn-search"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</div> -->
									</div>

									<!-- Authentication Links -->
									@guest
									<button type="button" data-toggle="modal" data-target="#login" class="info-user pointer btn transition">
										<i class="fa fa-user mg4" aria-hidden="true"></i>
										Đăng nhập
                                    </button>
                                    <button type="button" onclick="register();" data-toggle="modal" data-target="#signup" class="info-user pointer btn transition">
										<i class="fa fa-user mg4" aria-hidden="true"></i>
										Đăng kí
									</button>

									@else
									<button type="button" class="info-user pointer">
										<div class="avatar-user">
                                            @if (Storage::disk('public')->exists(Auth::user()->avatar))
											    <img style="width: 26px; border-radius: 50%;" src="{{ Storage::url(Auth::user()->avatar) }}" alt="avatar">
                                            @elseif (Auth::user()->avatar == 'users/default.png')
                                                <img style="width: 26px; border-radius: 50%;" src="/{{ Auth::user()->avatar }}" alt="avatar">
                                            @else
                                                <img style="width: 26px; border-radius: 50%;" src="{{ Auth::user()->avatar }}" alt="avatar">
                                            @endif
										</div>
										<div class="name-user">{{ Auth::user()->name }}</div>
                                        @if(session('totalMessages') > 0)
										<div class="notification-user">{{ session('totalMessages')  }}</div>
                                        @endif
										<ul class="nav-toogle">
											<li><a href="/khoa-hoc-cua-toi">Khóa học của tôi <i class="fa fa-file-text-o"></i></a></li>
											<li><a href="/thong-bao">Thông báo <i class="fa fa-exclamation-circle "></i></a></li>
											<li><a href="/trang-ca-nhan">Trang cá nhân <i class="fa fa-lock"></i></a></li>
											<li>
											<a class="dropdown-item" href="{{route('frontend.logout') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												Thoát<i class="fa fa-sign-out"></i>
											</a>

											<form id="logout-form" action="{{ route('frontend.logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
											</li>
										</ul>
									</button>
									@endguest

									<div class="hotline-nav">
										<img src="/images/icon-phone.png" alt="icon hotline">
										<div class="text-hotline">
											<span>{{ setting('site.hotline') }}</span>
											{{ setting('site.open_time') }}
										</div>
									</div>
								</li>
							</ul>
						</div>
                        @guest
                        <!-- Modal -->
                        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content f7fbfe">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title text-sign mt-3 text-uppercase w-100 text-center" id="loginLabel">Đăng nhập</h5>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10  offset-md-1 ">
                                            <form method="POST" action="{{ route('frontend.login') }}">
                                                @csrf
                                                <input type="hidden" name="url" value="<?php if(isset($url)){ echo $url; }else{echo '/';} ?>" />
                                                <div class="form-group">
                                                    <div class="input-group">

                                                        <input id="email" type="email" class="sign-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" />

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">

                                                        <input id="password" type="password" class="sign-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mật khẩu" required />

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn signin btn-lg btn-primary btn-block" value="ĐĂNG NHẬP">
                                                </div>

                                                <div class="form-group mt-4 mb-5 form-check">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Ghi nhớ tài khoản
                                                    </label>
                                                    <a class="float-right" href="{{ route('frontend.password.request') }}">Quên mật khẩu?</a>
                                                </div>

                                            </form>



                                                <div class="mb-5">Bạn chưa có tài khoản? <a onclick="register();" data-toggle="modal" data-target="#signup" class="text-danger" href="#">Đăng ký ngay!</a></div>


                                                <div class="text-center mb-3">
                                                    <a href="/login/facebook">
                                                    <img class='pointer img-fluid' src="/images/facebook_login.png" alt=""/></a>
                                                </div>
                                                <div class="text-center mb-5 img-fluid">
                                                <a href="/login/google">
                                                    <img class='pointer' src="/images/google_login.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end login-->
                        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content f7fbfe">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title text-sign mt-3 text-uppercase w-100 text-center" id="loginLabel">Đăng ký tài khoản</h5>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10  offset-md-1 ">
                                            <form method="POST" action="{{ route('frontend.register') }}">
                                                @csrf
                                                <input type="hidden" name="url" value="<?php if(isset($url)){ echo $url; }else{echo '/';} ?>" />
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input placeholder="Họ tên" id="name" type="text" class="sign-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">

                                                        <input placeholder="Địa chỉ mail" id="email" type="email" class="sign-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">

                                                        <input placeholder="Mật khẩu" id="password" type="password" class="sign-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input placeholder="Nhập lại mật khẩu" id="password-confirm" type="password" class="sign-input form-control" name="password_confirmation" required />

                                                    </div>
                                                </div>

                                                <div class="form-group mb-5">
                                                    <input type="submit" class="btn signin btn-lg btn-primary btn-block" value="Tạo tài khoản">
                                                </div>

                                            </form>

                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                        @endguest

					</nav>
				</div>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '663045330760044');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=663045330760044&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
			</header>
