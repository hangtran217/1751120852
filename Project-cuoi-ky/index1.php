<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<title>Trang chủ - Giáo dục sớm online</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/style-index2.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="signin-signup.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqpLLVKr2zswsaxq_KbZ_ODei0cTahPTw&callback=initMap"
	type="text/javascript"></script>
</head>
<body id="homepage">
	<div class="container-fluid">
		<div class="row" id="sec1">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive" id="img-logo"/></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav" id="menu-el1">
							<li><a href="">TRANG CHỦ</a></li>
							<li><a href="/gioithieu">GIỚI THIỆU</a></li>
							<li><a href="/doitac">ĐỐI TÁC</a></li>
							<li><a href="/huongdan">HƯỚNG DẪN</a></li>
							<li><a href="/lienhe">LIÊN HỆ</a></li>
							<li><a href="/napthe">NẠP BIGOLD</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" id="menu-el2">
														<li><a href="#" data-toggle="modal" data-target="#myModal2">ĐĂNG KÝ</a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModal1">ĐĂNG NHẬP</a></li>
							
							<li><a href="#"><img src="/themes/bibook/images/search2222.png" class="img-responsive"></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
				</div>
			</div>
		</div>

		<div class="row">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
              <div class="modal-content" id="modal-signin">
                  <button type="button" class="close" data-dismiss="modal" style="opacity:1;"><img width="52%" src="/themes/bibook/images/close-signin.png"></button>
                  <img src="/themes/bibook/images/vachmau-signin.png" id="vachmau1" class="img-responsive">
                <div class="modal-body" style="padding:0;margin-top:30px;">
                    <div id="sign-in">
                        <h2>ĐĂNG NHẬP</h2>
                        <form action="" method="post" id="form-signin">
                            <input type="text" id="user" placeholder="Email hoặc số điện thoại">
                            <p id="username_error" style="color:#ff5482;text-align:left;width:77%;margin:0px auto 10px auto;"></p>
                            <input type="password" id="pass" placeholder="Mật khẩu">
                            <p id="password_error" style="color:#ff5482;text-align:left;width:77%;margin:0px auto 10px auto;"></p>
                            <input type="submit" id="btnsubmit" value="ĐĂNG NHẬP">
                            <input type="hidden" id="login-csrf" value="FjkfxjTCBq65HE0eHmRwFJsfKVeTDCfggfDqybNN" />
                        </form>
                        <ul>
                            <li><a href="/user/forgotpassword">Quên mật khẩu</a></li>
                            <li><a href="" data-toggle="modal" data-target="#myModal2">Đăng ký thành viên</a></li>
                        </ul>
                        <a href="/auth/facebook"><img src="/themes/bibook/images/fb-signin.jpg" class="img-responsive"></a>
                        <a href="/auth/google"><img src="/themes/bibook/images/gg-signin.jpg" class="img-responsive"></a>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
              <div class="modal-content" id="modal-signup">
                  <button type="button" class="close" data-dismiss="modal" style="opacity:1;"><img width="52%" src="/themes/bibook/images/close-signin.png"></button>
                  <img src="/themes/bibook/images/vachmau-signup.png" id="vachmau2" class="img-responsive">
                <div class="modal-body" style="padding:0;margin-top:30px;">
                    <div id="sign-up">
                        <h2>ĐĂNG KÝ</h2>
                        <a href="/auth/facebook"><img src="/themes/bibook/images/fb-signin.jpg" class="img-responsive" style="margin-bottom:10px"></a>
                        <a href="/auth/google"><img src="/themes/bibook/images/gg-signin.jpg" class="img-responsive" style="margin-bottom:10px"></a>
                        <form action="" method="post" id="form-signup">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span>Họ tên*</span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <input type="text" id="signup-user">
                            </div>
                            <p id="signup_user_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span>Email*</span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <input type="text" id="email">
                            </div>
                            <p id="email_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span>Mật khẩu*</span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <input type="password" id="signup-pass">
                            </div>

                            <p id="signup_pass_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span>Xác nhận mật khẩu*</span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <input type="password" id="repass">
                            </div>

                            <p id="repass_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span>Điện thoại*</span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <input type="text" id="phone">
                            </div>
                            <p id="phone_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            <!-- <input type="hidden" id="signup-csrf" value="FjkfxjTCBq65HE0eHmRwFJsfKVeTDCfggfDqybNN" /> -->
                            <input type="hidden" id="signup-csrf" name="_token" value="FjkfxjTCBq65HE0eHmRwFJsfKVeTDCfggfDqybNN">
                            <p id="phone_error" style="color:#ff5482;text-align:left;width:77%;margin:0px auto 10px auto;"></p>
                            <!--<img src="/themes/bibook/images/captcha.jpg" class="img-responsive">-->

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 fix-padding-left">
                                <script type="text/javascript">
        var RecaptchaOptions = {"curl_timeout":1,"curl_verify":true,"lang":"vi"};
    </script>
<script src='https://www.google.com/recaptcha/api.js?render=onload&amp;hl=vi'></script>
<div class="g-recaptcha" data-sitekey="6Lfbjy0UAAAAAG4rMNkYeA06bfYij8U17xTK-CLp" ></div>
<noscript>
    <div style="width: 302px; height: 352px;">
        <div style="width: 302px; height: 352px; position: relative;">
            <div style="width: 302px; height: 352px; position: absolute;">
                <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Lfbjy0UAAAAAG4rMNkYeA06bfYij8U17xTK-CLp"
                        frameborder="0" scrolling="no"
                        style="width: 302px; height:352px; border-style: none;">
                </iframe>
            </div>
            <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0; padding: 0; resize: none;"></textarea>
            </div>
        </div>
    </div>
</noscript>

                                <br>
                                <p id="captcha_error" style="color:#ff5482;text-align:center;width:77%;margin:0px auto 10px auto;"></p>
                            </div>

                            <div class="col-md-9 col-sm-9 col-md-offset-3 col-xs-12 fix-padding-left fix-padding-right" style="margin-top:20px;">
                                <input type="submit" id="btnsignup" value="ĐĂNG KÝ">
                            </div>
                        </form>
                        <ul>
                            <li>Bạn đã có tài khoản?</li>
                            <li><a href="" data-toggle="modal" data-target="#myModal1">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

		<div class="row" id="sec2">
			<section>
				<div class="container">
					<div class="row" style="margin-bottom:60px">
						<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" id="el1">
							 <iframe src="https://www.youtube.com/embed/FJnuc4d8rX4" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" id="el2">
							<h1>Giới thiệu về chương trình giáo dục sớm online</h1>
							<p>Chương trình Giáo dục sớm Online hướng dẫn cha mẹ thực hành từ thai giáo, sơ sinh cho tới khi bé 3 tuổi được nghiên cứu và xây dựng bởi các chuyên gia của Viện nghiên cứu giáo dục trẻ thông minh sớm VSK. Chương trình gồm hàng trăm hoạt động phát triển toàn diện cho bé với nhiều các lĩnh vực: vận động thô, vận động tinh, ngôn ngữ, nhận thức, giác quan, nghệ thuật và tình cảm xã hội.</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="container" id="sec3">
			<h2>HỆ THỐNG SẢN PHẨM</h2>
			<section id="program-list">
				<div id="program-list-mobile" class="hidden-md hidden-lg">
							<div class="program-item">
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/108">
										<img src="http://giaoducsom.vn/public/images/combo/c41bfde7f9142fb9b840425aa307498e.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh Thai gi&aacute;o</h4>
										<p>Chương tr&igrave;nh l&agrave; bộ cẩm nang hữu &iacute;ch hướng dẫn cha mẹ tương t&aacute;c với thai nhi đ&uacute;ng c&aacute;ch, gi&uacute;p con ph&aacute;t triển tối ưu c&aacute;c chức năng n&atilde;o bộ ngay từ những ng&agrave;y đầu của thai kỳ.</p>
										<button onclick="location.href='/chuongtrinh/108'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																								<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/65">
										<img src="http://giaoducsom.vn/public/images/combo/01446dc0bdba5e0a4f9bfe283ebc4574.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 0-6 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 0-6 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/65'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																								<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/64">
										<img src="http://giaoducsom.vn/public/images/combo/e863e848504f0c6f9b759380d2589745.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 4-6 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 4-6 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/64'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																								<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/102">
										<img src="http://giaoducsom.vn/public/images/combo/5064cc046f364d4a0814f5d9b2bab688.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 7-12 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 7-12 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/102'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																								<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/103">
										<img src="http://giaoducsom.vn/public/images/combo/768bbac704bbc6398dc5b425e06013d9.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 10-12 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 10-12 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/103'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																								<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/126">
										<img src="http://giaoducsom.vn/public/images/combo/fe92541631b57d330c87c0c9bf362c68.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh vận động 1-3 tuổi</h4>
										<p>Chương tr&igrave;nh vận động cho trẻ giai đoạn 1-3 tuổi, hướng dẫn cha mẹ gi&uacute;p trẻ thực hiện c&aacute;c kỹ năng vận động ph&ugrave; hợp n&acirc;ng cao thể chất, sức khỏe.</p>
										<button onclick="location.href='/chuongtrinh/126'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
															</div>
				</div>

				<div id="myCarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" class=""></li>
					</ol>

					<!-- Wrapper for slides -->
					<div id="wrapper-slider" class="wrapper-slider">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/108">
										<img src="http://giaoducsom.vn/public/images/combo/c41bfde7f9142fb9b840425aa307498e.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh Thai gi&aacute;o</h4>
										<p>Chương tr&igrave;nh l&agrave; bộ cẩm nang hữu &iacute;ch hướng dẫn cha mẹ tương t&aacute;c với thai nhi đ&uacute;ng c&aacute;ch, gi&uacute;p con ph&aacute;t triển tối ưu c&aacute;c chức năng n&atilde;o bộ ngay từ những ng&agrave;y đầu của thai kỳ.</p>
										<button onclick="location.href='/chuongtrinh/108'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/65">
										<img src="http://giaoducsom.vn/public/images/combo/01446dc0bdba5e0a4f9bfe283ebc4574.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 0-6 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 0-6 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/65'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/64">
										<img src="http://giaoducsom.vn/public/images/combo/e863e848504f0c6f9b759380d2589745.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 4-6 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 4-6 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/64'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/102">
										<img src="http://giaoducsom.vn/public/images/combo/5064cc046f364d4a0814f5d9b2bab688.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 7-12 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 7-12 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/102'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
															</div>
							<div class="item">
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/103">
										<img src="http://giaoducsom.vn/public/images/combo/768bbac704bbc6398dc5b425e06013d9.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh 10-12 th&aacute;ng</h4>
										<p>Chương tr&igrave;nh d&agrave;nh cho trẻ trong giai đoạn 10-12 th&aacute;ng tuổi, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện tr&ecirc;n c&aacute;c lĩnh vực: vận động, ng&ocirc;n ngữ, gi&aacute;c quan, nhận thức, t&igrave;nh cảm v&agrave; nghệ thuật.</p>
										<button onclick="location.href='/chuongtrinh/103'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																																<div class="col-sm-6 col-md-3 col-xs-12 fix">
									<a class="thumbnail fix-thumbnail" href="/chuongtrinh/126">
										<img src="http://giaoducsom.vn/public/images/combo/fe92541631b57d330c87c0c9bf362c68.jpg" class="img-responsive">
										<h4>Chương tr&igrave;nh vận động 1-3 tuổi</h4>
										<p>Chương tr&igrave;nh vận động cho trẻ giai đoạn 1-3 tuổi, hướng dẫn cha mẹ gi&uacute;p trẻ thực hiện c&aacute;c kỹ năng vận động ph&ugrave; hợp n&acirc;ng cao thể chất, sức khỏe.</p>
										<button onclick="location.href='/chuongtrinh/126'">Xem chi tiết</button>
									</a>
								</div>
								<div class="carousel-caption">
								</div>
																							</div>

						</div><!-- /.carousel-inner -->


						<!-- Left and right controls
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span aria-hidden="true"><img src="/themes/bibook/images/arrow-left.png" class="img-reponsive"></span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span aria-hidden="true"><img src="/themes/bibook/images/arrow-right.png" class="img-reponsive"></span>
							<span class="sr-only">Next</span>
						</a>
						-->
					</div>
				</div>
			</section>
		</div>

		<div class="row" id="sec4">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12" id="total-el">
					<div class="row">
						<div id="download-app-section">
							<div class="col-md-6 col-sm-6 col-xs-12" id="sec4-el1">
								<a href="#">Tải miễn phí <img src="/themes/bibook/images/down.png" class="img-responsive"></a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12" id="sec4-el2">
								<ul>
									<li><a href="https://itunes.apple.com/vn/app/giáo-dục-sớm/id1020522126?mt=8"><img src="/themes/bibook/images/apple.png" class="img-responsive"></a></li>
									<li><a href="https://play.google.com/store/apps/details?id=vn.giaoducsom"><img src="/themes/bibook/images/android.png" class="img-responsive"></a></li>
									<li><a href="/"><img src="/themes/bibook/images/monitor.png" class="img-responsive"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row" id="sec5" style="background-color:#a93f93">
			<footer style="text-align:center;padding-top:10px;font-family:webfont;padding-bottom:35px;">
				<h5 style="color:#fff;">CÔNG TY TNHH VVN PHÁT TRIỂN</h5>
				<p style="color:#fff;">Tòa nhà CT2B, Tây hồ Residence, ngõ 445, Lạc Long Quân, Tây Hồ, Hà Nội.</p>
				<p style="color:#fff;">Hotline: 0915944497, Email: contact@giaoducsom.vn hoặc contact@bibook.vn</p>
			</footer>
		</div>

	</div>
</body>
</html>
