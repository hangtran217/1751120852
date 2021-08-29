<?php  
    // We need to use sessions, so you should always start sessions using the below code.
    include('admin/connection.php');
    session_start();
    // If the user is not logged in redirect to the login page...
    
	include("navbar.php")
?>
	<!-- Bắt đầu phần Giới thiệu -->
	<div class="row" id="section2">
		<section>
			<div class="container">
				<div class="row" style="margin-bottom:60px">
					<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" id="section2-el1">
							 <iframe src="https://www.youtube.com/embed/FJnuc4d8rX4" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:60px;" id="section2-el2">
							<h1>Giới thiệu về chương trình giáo dục sớm online</h1>
							<p>Chương trình Giáo dục sớm Online hướng dẫn cha mẹ thực hành từ thai giáo, sơ sinh cho tới khi bé 3 tuổi được nghiên cứu và xây dựng bởi các chuyên gia của Viện nghiên cứu giáo dục trẻ thông minh sớm VSK. Chương trình gồm hàng trăm hoạt động phát triển toàn diện cho bé với nhiều các lĩnh vực: vận động thô, vận động tinh, ngôn ngữ, nhận thức, giác quan, nghệ thuật và tình cảm xã hội.</p>
					</div>
				</div>
			</div>
		</section>
			
			

		</div>
	</section>
	<!-- Kết thúc phần Giới thiệu -->



<?php 
	include("carousel.php")
?>

<div class="row" id="sec4">
	<div class="" id="">
		<div class="container bg-white">
			<div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12" id="total-el">
					<div class="row">
						<div id="download-app-section">
							<div class="col-md-6 col-sm-6 col-xs-12" id="sec4-el1">
								<a href="#">Tải miễn phí <img src="images/down.png" class="img-responsive"></a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12" id="sec4-el2">
								<ul>
									<li><a href="https://itunes.apple.com/vn/app/giáo-dục-sớm/id1020522126?mt=8"><img src="images/apple.png" class="img-responsive"></a></li>
									<li><a href="https://play.google.com/store/apps/details?id=vn.giaoducsom"><img src="images/android.png" class="img-responsive"></a></li>
									<li><a href="/"><img src="images/monitor.png" class="img-responsive"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


<?php 
	include("footer.php")
?>