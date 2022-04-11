
<?php 

include_once "Controller/categorieC.php";

$catC =new categorieC();
$listeCategorieC=$catC->afficherCategorie();   

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/gogame1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 11:20:21 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/paymentfont.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Digital marketplace HTML Template by Dmitry Volkov">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>GoGame – Digital marketplace HTML Template</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<button class="header__menu" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>

							<a href="index.html" class="header__logo">
								<img src="img/logo.png" alt="">
							</a>

							<ul class="header__nav">
								<li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" id="dropdownMenu0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg></a>

									<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu0">
										<li><a href="index.html">Home style 1</a></li>
										<li><a href="index2.html">Home style 2</a></li>
									</ul>
								</li>
								<li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg></a>

						
									<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
									<?php
				foreach($listeCategorieC as $c) {
			?>
										<li><a href="catalog.php"style="color: white"><?= $c['nom'] ?></a></li>
										<?php
				}
			?>
									</ul>

							
								</li>
								<li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg></a>

									<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu2">
										<li><a href="news.html">News (small grid)</a></li>
										<li><a href="news2.html">News (big grid)</a></li>

										<li class="dropdown-submenu">
											<a class="dropdown-item" href="#" role="button" id="dropdownMenuSub" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Single page</a>

											<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenuSub">
												<li><a href="article.html">Article</a></li>
												<li><a href="interview.html">Interview</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="header__nav-item">
									<a class="header__nav-link" href="faq.html">Help Center</a>
								</li>
								<li class="header__nav-item">
									<a class="header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><circle cx='256' cy='256' r='32' style='fill:none; stroke-miterlimit:10;stroke-width:32px'/><circle cx='416' cy='256' r='32' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><circle cx='96' cy='256' r='32' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/></svg>
									</a>

									<ul class="dropdown-menu header__nav-menu header__nav-menu--scroll" aria-labelledby="dropdownMenu3">
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="favorites.html">Favorites</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="profile.html">Profile</a></li>
										<li><a href="signin.html">Sign in</a></li>
										<li><a href="signup.html">Sign up</a></li>
										<li><a href="forgot.html">Forgot password</a></li>
										<li><a href="privacy.html">Privacy policy</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="404.html">404 Page</a></li>
									</ul>
								</li>
							</ul>

							<div class="header__actions">
								<div class="header__lang">
									<a class="header__lang-btn" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="img/flags/uk.svg" alt="">
										<span>EN</span>
										<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M98,190.06,237.78,353.18a24,24,0,0,0,36.44,0L414,190.06c13.34-15.57,2.28-39.62-18.22-39.62H116.18C95.68,150.44,84.62,174.49,98,190.06Z'/></svg>
									</a>

									<ul class="dropdown-menu header__lang-menu" aria-labelledby="dropdownMenuLang">
										<li><a href="#"><img src="img/flags/spain.svg" alt=""><span>SP</span></a></li>
										<li><a href="#"><img src="img/flags/russia.svg" alt=""><span>RU</span></a></li>
										<li><a href="#"><img src="img/flags/china.svg" alt=""><span>CH</span></a></li>
									</ul>
								</div>

								<a href="signin.html" class="header__login">
									<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M192,176V136a40,40,0,0,1,40-40H392a40,40,0,0,1,40,40V376a40,40,0,0,1-40,40H240c-22.09,0-48-17.91-48-40V336' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><polyline points='288 336 368 256 288 176' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='80' y1='256' x2='352' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
									<span>Sign in</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<form action="#" class="header__form">
								<input type="text" class="header__input" placeholder="I'm searching for...">
								<select class="header__select">
									<?php
				foreach($listeCategorieC as $c  => $value) {
			?>

									<option value='.$c->nom.' ><?= $c['nom'] ?></option>
									<?php 
				}?>
								
								</select>
								<button class="header__btn" type="button">
									<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><line x1='338.29' y1='338.29' x2='448' y2='448' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
								</button>
							</form>

							<div class="header__actions header__actions--2">
								<a href="favorites.html" class="header__link">
									<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
									<span>Favorites</span>
								</a>

								<a href="checkout.html" class="header__link">
									<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><circle cx='176' cy='416' r='16' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><circle cx='400' cy='416' r='16' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><polyline points='48 80 112 80 160 352 416 352' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><path d='M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
									<span>$00.00</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- home -->
	<section class="section section--bg section--first" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--title"><b>Best games</b> of this month</h2>

						<div class="section__nav-wrap">
							<button class="section__nav section__nav--bg section__nav--prev" type="button" data-nav="#carousel0">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='328 112 184 256 328 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>

							<button class="section__nav section__nav--bg section__nav--next" type="button" data-nav="#carousel0">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='184 112 328 256 184 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>
						</div>
					</div>
				</div>
				<!-- end title -->
			</div>
		</div>

		<!-- carousel -->
		<div class="owl-carousel section__carousel section__carousel--big" id="carousel0">
			<!-- big card -->
			<div class="card card--big">
				<a href="details.html" class="card__cover">
					<img src="img/cards/4.jpg" alt="">
				</a>

				<div class="card__wrap">
					<div class="card__title">
						<h3><a href="details.html">X4: Foundations Collector's Edition</a></h3>
					</div>

					<ul class="card__list">
						<li><span>Release date:</span> 30.11.2018</li>
						<li><span>Genres:</span> Simulation, Action, Sci-fi</li>
					</ul>

					<ul class="card__platforms">
						<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
						<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
						<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					</ul>

					<div class="card__price">
						<span>$59.99</span><s>$79.99</s><b>30% OFF</b>
					</div>

					<div class="card__actions">
						<button class="card__buy" type="button">Buy now</button>

						<button class="card__favorite" type="button">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
						</button>
					</div>
				</div>
			</div>
			<!-- end big card -->

			<!-- big card -->
			<div class="card card--big">
				<a href="details.html" class="card__cover">
					<img src="img/cards/2.jpg" alt="">
				</a>

				<div class="card__wrap">
					<div class="card__title">
						<h3><a href="details.html">The Witcher 3: Wild Hunt</a></h3>
					</div>

					<ul class="card__list">
						<li><span>Release date:</span> 24.03.2016</li>
						<li><span>Genres:</span> Action, Role Playing, Open World</li>
					</ul>

					<ul class="card__platforms">
						<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
						<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
						<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
						<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
					</ul>

					<div class="card__price">
						<span>$15.36</span><s>$38.80</s><b>60% OFF</b>
					</div>

					<div class="card__actions">
						<button class="card__buy" type="button">Buy now</button>

						<button class="card__favorite" type="button">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
						</button>
					</div>
				</div>
			</div>
			<!-- end big card -->

			<!-- big card -->
			<div class="card card--big">
				<a href="details.html" class="card__cover">
					<img src="img/cards/9.jpg" alt="">
				</a>

				<div class="card__wrap">
					<div class="card__title">
						<h3><a href="details.html">The Legend of Heroes: Trails in the Sky SC</a></h3>
					</div>

					<ul class="card__list">
						<li><span>Release date:</span> 07.12.2015</li>
						<li><span>Genres:</span> Role-playing, Turn-based, Fantasy</li>
					</ul>

					<ul class="card__platforms">
						<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
						<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
						<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					</ul>

					<div class="card__price">
						<span>$14.99</span><s>$29.99</s><b>50% OFF</b>
					</div>

					<div class="card__actions">
						<button class="card__buy" type="button">Buy now</button>

						<button class="card__favorite" type="button">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
						</button>
					</div>
				</div>
			</div>
			<!-- end big card -->

			<!-- big card -->
			<div class="card card--big">
				<a href="details.html" class="card__cover">
					<img src="img/cards/5.jpg" alt="">
				</a>

				<div class="card__wrap">
					<div class="card__title">
						<h3><a href="details.html">Pillars of Eternity: Hero Edition</a></h3>
					</div>

					<ul class="card__list">
						<li><span>Release date:</span> 18.09.2019</li>
						<li><span>Genres:</span> Role-playing, Adventure, Fantasy</li>
					</ul>

					<ul class="card__platforms">
						<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
						<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
					</ul>

					<div class="card__price">
						<span>$17.99</span><s>$29.99</s><b>40% OFF</b>
					</div>

					<div class="card__actions">
						<button class="card__buy" type="button">Acheter Maintenant</button>

						<button class="card__favorite" type="button">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
						</button>
					</div>
				</div>
			</div>
			<!-- end big card -->
		</div>
		<!-- end carousel -->
	</section>
	<!-- end home -->

	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Jeux Video</h2>

						<div class="section__nav-wrap">
							<a href="catalog.html" class="section__view">View All</a>

							<button class="section__nav section__nav--prev" type="button" data-nav="#carousel1">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='328 112 184 256 328 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>

							<button class="section__nav section__nav--next" type="button" data-nav="#carousel1">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='184 112 328 256 184 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>
						</div>
					</div>
				</div>
				<!-- end title -->
			</div>
		</div>

		<!-- carousel -->
		<div class="owl-carousel section__carousel section__carousel--catalog" id="carousel1">
			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/5.jpg" alt="">
					<span class="card__new">New</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Free Fire</a></h3>
					<span>$49.00</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Buy</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/7.jpg" alt="">
					<span class="card__new">New</span>
				</a>

				<ul class="card__platforms">
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Red Dead Redemption 2</a></h3>
					<span>$34.99 <s>$49.99</s></span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Buy</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/1.jpg" alt="">
					<span class="card__new">New</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Dandara: Trials of Fear Edition</a></h3>
					<span>$7.99 <s>$19.99</s></span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Buy</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/8.jpg" alt="">
					<span class="card__new">New</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Druidstone: The Secret of the Menhir Forest</a></h3>
					<span>$12.49</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Buy</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/3.jpg" alt="">
					<span class="card__new">New</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Baldur's Gate II: Enhanced Edition</a></h3>
					<span>$19.00</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Buy</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end carousel -->
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--pre">Pre-orders</h2>

						<div class="section__nav-wrap">
							<a href="catalog.html" class="section__view">View All</a>

							<button class="section__nav section__nav--prev" type="button" data-nav="#carousel2">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='328 112 184 256 328 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>

							<button class="section__nav section__nav--next" type="button" data-nav="#carousel2">
								<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='184 112 328 256 184 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
							</button>
						</div>
					</div>
				</div>
				<!-- end title -->
			</div>
		</div>

		<!-- carousel -->
		<div class="owl-carousel section__carousel section__carousel--catalog" id="carousel2">
			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/6.jpg" alt="">
					<span class="card__preorder">Pre-order</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Baldur's Gate: Enhanced Edition</a></h3>
					<span>$19.99</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Pre-order</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/1.jpg" alt="">
					<span class="card__preorder">Pre-order</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Dandara: Trials of Fear Edition</a></h3>
					<span>$7.99</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Pre-order</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/2.jpg" alt="">
					<span class="card__preorder">Pre-order</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">SteamWorld Quest: Hand of Gilgamech</a></h3>
					<span>$12.49</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Pre-order</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/9.jpg" alt="">
					<span class="card__preorder">Pre-order</span>
				</a>

				<ul class="card__platforms">
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
					<li class="ap"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.13,136.86c-40.32,0-57.36,19.24-85.44,19.24C234.9,156.1,212.94,137,178,137c-34.2,0-70.67,20.88-93.83,56.45-32.52,50.16-27,144.63,25.67,225.11,18.84,28.81,44,61.12,77,61.47h.6c28.68,0,37.2-18.78,76.67-19h.6c38.88,0,46.68,18.89,75.24,18.89h.6c33-.35,59.51-36.15,78.35-64.85,13.56-20.64,18.6-31,29-54.35-76.19-28.92-88.43-136.93-13.08-178.34-23-28.8-55.32-45.48-85.79-45.48Z'/><path d='M340.25,32c-24,1.63-52,16.91-68.4,36.86-14.88,18.08-27.12,44.9-22.32,70.91h1.92c25.56,0,51.72-15.39,67-35.11C333.17,85.89,344.33,59.29,340.25,32Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">BioShock Infinite Complete Edition</a></h3>
					<span>$55.99 <s>$79.99</s></span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Pre-order</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="card">
				<a href="details.html" class="card__cover">
					<img src="img/cards/4.jpg" alt="">
					<span class="card__preorder">Pre-order</span>
				</a>

				<ul class="card__platforms">
					<li class="ps"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M399.77,203c-.8-17.1-3.3-34.5-10.8-50.1a82.45,82.45,0,0,0-16.5-23.2,105.59,105.59,0,0,0-21.3-16.3c-17.1-10.2-37.5-17-84.4-31S192,64,192,64V422.3l79.9,25.7s.1-198.8.1-299.5v-3.8c0-9.3,7.5-16.8,16.1-16.8h.5c8.5,0,15.5,7.5,15.5,16.8V278c11,5.3,29.2,9.3,41.8,9.1a47.79,47.79,0,0,0,24-5.7,49.11,49.11,0,0,0,18.4-17.8,78.64,78.64,0,0,0,9.9-27.3C400.07,225.5,400.17,214.2,399.77,203Z'/><path d='M86.67,357.8c27.4-9.8,89.3-29.5,89.3-29.5V281.1s-76.5,24.8-111.3,37.1c-8.6,3.1-17.3,5.9-25.7,9.5-9.8,4.1-19.4,8.7-28.1,14.8a26.29,26.29,0,0,0-9.2,10.1,17.36,17.36,0,0,0-.5,13.6c2,5.1,5.8,9.3,10.1,12.6,7.8,5.9,17.1,9.5,26.4,12.2a262.42,262.42,0,0,0,88.4,13.3c14.5-.2,36-1.9,50-4.4v-42s-11,2.5-41.3,12.5c-4.6,1.5-9.2,3.3-14,4.3a104.87,104.87,0,0,1-21.6,2.2c-6.5-.3-13.2-.7-19.3-3.1-2.2-1-4.6-2.2-5.5-4.6-.8-2,.3-4,1.7-5.4C78.87,360.9,82.87,359.3,86.67,357.8Z'/><path d='M512,345.9c-.1-6-3.7-11.2-7.9-15-7.1-6.3-15.9-10.3-24.7-13.5-5.5-1.9-9.3-3.3-14.7-5-25.2-8.2-51.9-11.2-78.3-11.3-8,.3-23.1.5-31,1.4-21.9,2.5-67.3,15.4-67.3,15.4v48.8s67.5-21.6,96.5-31.8a94.43,94.43,0,0,1,30.3-4.6c6.5.2,13.2.7,19.4,3.1,2.2.9,4.5,2.2,5.5,4.5.9,2.6-.9,5-2.9,6.5-4.7,3.8-10.7,5.3-16.2,7.4-41,14.5-132.7,44.7-132.7,44.7v47s117.2-39.6,170.8-58.8c8.9-3.3,17.9-6.1,26.4-10.4,7.9-4,15.8-8.6,21.8-15.3A19.74,19.74,0,0,0,512,345.9Z'/></svg></li>
					<li class="xb"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M126.8,248.3c39.7-58.6,77.9-92.8,77.9-92.8s-42.1-48.9-92.8-67.4l-3.3-.8A224.13,224.13,0,0,0,77.2,391C77.2,386.6,77.8,320.7,126.8,248.3Z'/><path d='M480,256A223.71,223.71,0,0,0,403.4,87.3l-3.2.9c-50.7,18.5-92.9,67.4-92.9,67.4s38.2,34.2,77.9,92.8c49,72.4,49.6,138.3,49.5,142.7A222.8,222.8,0,0,0,480,256Z'/><path d='M201.2,80.9c29.3,13.1,54.6,34.6,54.6,34.6s25.5-21.4,54.8-34.6c36.8-16.5,64.9-11.3,72.3-9.5a224.06,224.06,0,0,0-253.8,0C136.3,69.6,164.3,64.3,201.2,80.9Z'/><path d='M358.7,292.9C312.4,236,255.8,199,255.8,199s-56.3,37-102.7,93.9c-39.8,48.9-54.6,84.8-62.6,107.8l-1.3,4.8a224,224,0,0,0,333.6,0l-1.4-4.8C413.4,377.7,398.5,341.8,358.7,292.9Z'/></svg></li>
					<li class="wn"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M480,265H232V444l248,36V265Z'/><path d='M216,265H32V415l184,26.7V265Z'/><path d='M480,32,232,67.4V249H480V32Z'/><path d='M216,69.7,32,96V249H216V69.7Z'/></svg></li>
				</ul>

				<div class="card__title">
					<h3><a href="details.html">Outcast - Second Contact</a></h3>
					<span>$34.99</span>
				</div>

				<div class="card__actions">
					<button class="card__buy" type="button">Pre-order</button>

					<button class="card__favorite" type="button">
						<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
					</button>
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end carousel -->
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<div class="col-12">
							<!-- title -->
							<div class="section__title-wrap section__title-wrap--single">
								<h2 class="section__title section__title--small">Gaming cards</h2>

								<div class="section__nav-wrap">
									<a href="#" class="section__view">View All</a>
								</div>
							</div>
							<!-- end title -->

							<!-- cards -->
							<ul class="list list--mb">
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/7.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">The Evil Within: The Assignment</a>
										</h3>

										<div class="list__price">
											<span>$1.99</span><s>$4.99</s><b>60% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/5.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">DROD 4: Gunthro and the Epic Blunder</a>
										</h3>

										<div class="list__price">
											<span>$4.99</span><s>$9.99</s><b>50% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/3.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Conquests of the Longbow: The Legend of Robin Hood</a>
										</h3>

										<div class="list__price">
											<span>$3.59</span><s>$5.99</s><b>40% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
							</ul>
							<!-- end cards -->
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<div class="col-12">
							<!-- title -->
							<div class="section__title-wrap section__title-wrap--single">
								<h2 class="section__title section__title--small">Gift cards</h2>

								<div class="section__nav-wrap">
									<a href="#" class="section__view">View All</a>
								</div>
							</div>
							<!-- end title -->

							<!-- cards -->
							<ul class="list list--mb">
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/1.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Phantasmagoria 2: A Puzzle of Flesh</a>
										</h3>

										<div class="list__price">
											<span>$3.89</span><s>$5.99</s><b>35% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/6.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Shadowrun Hong Kong - Extended Edition Deluxe Upgrade</a>
										</h3>

										<div class="list__price">
											<span>$4.99</span><s>$9.99</s><b>50% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/8.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">We are the Dwarves</a>
										</h3>

										<div class="list__price">
											<span>$2.24</span><s>$24.99</s><b>91% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
							</ul>
							<!-- end cards -->
						</div>
					</div>	
				</div>

				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<div class="col-12">
							<!-- title -->
							<div class="section__title-wrap section__title-wrap--single">
								<h2 class="section__title section__title--small">Subscriptions</h2>

								<div class="section__nav-wrap">
									<a href="#" class="section__view">View All</a>
								</div>
							</div>
							<!-- end title -->

							<!-- cards -->
							<ul class="list">
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/9.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Gabriel Knight: Sins of the Fathers</a>
										</h3>

										<div class="list__price">
											<span>$3.89</span><s>$5.99</s><b>35% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/2.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Unrest Special Edition</a>
										</h3>

										<div class="list__price">
											<span>$7.49</span><s>$24.99</s><b>70% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
								<li class="list__item">
									<a href="#" class="list__cover">
										<img src="img/cards/4.jpg" alt="">
									</a>

									<div class="list__wrap">
										<h3 class="list__title">
											<a href="#">Gabriel Knight 3: Blood of the Sacred, Blood of the Damned</a>
										</h3>

										<div class="list__price">
											<span>$3.89</span><s>$5.99</s><b>35% OFF</b>
										</div>

										<button class="list__buy" type="button">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='256' y1='112' x2='256' y2='400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='400' y1='256' x2='112' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
										</button>
									</div>
								</li>
							</ul>
							<!-- end cards -->
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<div class="section__title-wrap section__title-wrap--single">
						<h2 class="section__title">Latest news</h2>

						<div class="section__nav-wrap">
							<a href="news.html" class="section__view">View All</a>
						</div>
					</div>
				</div>
				<!-- end title -->

				<!-- big post -->
				<div class="col-12 col-md-12 col-lg-6">
					<div class="post post--big">
						<a href="article.html" class="post__img">
							<img src="img/posts/2.jpg" alt="">
						</a>

						<div class="post__content">
							<a href="#" class="post__category">NFS</a>
							<h3 class="post__title"><a href="article.html">New hot race from your favorite computer games studio</a></h3>
							<div class="post__meta">
								<span class="post__date"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M256,64C150,64,64,150,64,256s86,192,192,192,192-86,192-192S362,64,256,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><polyline points='256 128 256 272 352 272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> 2 hours ago</span>
								<span class="post__comments"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg> 17</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end big post -->

				<!-- big video post -->
				<div class="col-12 col-md-12 col-lg-6">
					<div class="post post--big">
						<a href="interview.html" class="post__img">
							<img src="img/posts/1.jpg" alt="">
						</a>

						<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="post__video">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M112,111V401c0,17.44,17,28.52,31,20.16l247.9-148.37c12.12-7.25,12.12-26.33,0-33.58L143,90.84C129,82.48,112,93.56,112,111Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/></svg>
						</a>

						<div class="post__content">
							<a href="#" class="post__category">CS:GO</a>
							<h3 class="post__title"><a href="interview.html">Top 20 CS:GO players of 2020 according to HOTFLIX.tv</a></h3>
							<div class="post__meta">
								<span class="post__date"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M256,64C150,64,64,150,64,256s86,192,192,192,192-86,192-192S362,64,256,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><polyline points='256 128 256 272 352 272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> 3 hours ago</span>
								<span class="post__comments"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg> 11</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end big video post -->

				<!-- video post -->
				<div class="col-12 col-md-6 col-xl-4">
					<div class="post">
						<a href="interview.html" class="post__cover">
							<img src="img/posts/3.jpg" alt="">
						</a>

						<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="post__video">
							<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M112,111V401c0,17.44,17,28.52,31,20.16l247.9-148.37c12.12-7.25,12.12-26.33,0-33.58L143,90.84C129,82.48,112,93.56,112,111Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/></svg>
						</a>

						<div class="post__content">
							<a href="#" class="post__category">Overview</a>
							<h3 class="post__title"><a href="interview.html">Updated and customized gamepad</a></h3>
							<div class="post__meta">
								<span class="post__date"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M256,64C150,64,64,150,64,256s86,192,192,192,192-86,192-192S362,64,256,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><polyline points='256 128 256 272 352 272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> 4 hours ago</span>
								<span class="post__comments"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg> 14</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end video post -->

				<!-- post -->
				<div class="col-12 col-md-6 col-xl-4">
					<div class="post">
						<a href="article.html" class="post__img">
							<img src="img/posts/4.jpg" alt="">
						</a>

						<div class="post__content">
							<a href="#" class="post__category">PC</a>
							<h3 class="post__title"><a href="article.html">Gaming computer RXZ-3000 Ultra with revolutionary..</a></h3>
							<div class="post__meta">
								<span class="post__date"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M256,64C150,64,64,150,64,256s86,192,192,192,192-86,192-192S362,64,256,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><polyline points='256 128 256 272 352 272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> 2 hours ago</span>
								<span class="post__comments"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg> 18</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end post -->

				<!-- post -->
				<div class="col-12 col-md-6 col-xl-4">
					<div class="post">
						<a href="article.html" class="post__img">
							<img src="img/posts/5.jpg" alt="">
						</a>

						<div class="post__content">
							<a href="#" class="post__category">VR</a>
							<h3 class="post__title"><a href="article.html">Augmented reality (AR) and Virtual Reality (VR) bridge..</a></h3>
							<div class="post__meta">
								<span class="post__date"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M256,64C150,64,64,150,64,256s86,192,192,192,192-86,192-192S362,64,256,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><polyline points='256 128 256 272 352 272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> 9 hours ago</span>
								<span class="post__comments"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg> 50</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end post -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- section -->
	<div class="section section--last">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="partners owl-carousel">
						<a href="#" class="partners__img">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end section -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__navs">
						<div class="footer__nav footer__nav--1">
							<div class="footer__title"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polygon points='336 320 32 320 184 48 336 320' style='fill:none;stroke-linejoin:round;stroke-width:32px'/><path d='M265.32,194.51A144,144,0,1,1,192,320' style='fill:none;stroke-linejoin:round;stroke-width:32px'/></svg> <span>GoGames</span></div>

							<nav class="footer__list">
								<a href="about.html">About Us</a>
								<a href="catalog.html">Catalog</a>
								<a href="news.html">News</a>
								<a href="faq.html">Help Center</a>
								<a href="contacts.html">Contacts</a>
							</nav>
						</div>

						<div class="footer__nav footer__nav--2">
							<div class="footer__title"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M467.51,248.83c-18.4-83.18-45.69-136.24-89.43-149.17A91.5,91.5,0,0,0,352,96c-26.89,0-48.11,16-96,16s-69.15-16-96-16a99.09,99.09,0,0,0-27.2,3.66C89,112.59,61.94,165.7,43.33,248.83c-19,84.91-15.56,152,21.58,164.88,26,9,49.25-9.61,71.27-37,25-31.2,55.79-40.8,119.82-40.8s93.62,9.6,118.66,40.8c22,27.41,46.11,45.79,71.42,37.16C487.1,399.86,486.52,334.74,467.51,248.83Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><circle cx='292' cy='224' r='20'/><path d='M336,288a20,20,0,1,1,20-19.95A20,20,0,0,1,336,288Z'/><circle cx='336' cy='180' r='20'/><circle cx='380' cy='224' r='20'/><line x1='160' y1='176' x2='160' y2='272' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='208' y1='224' x2='112' y2='224' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg> <span>Games</span></div>

							<nav class="footer__list footer__list--double">
								<a href="#">Dota 2</a>
								<a href="#">StarCraft 2</a>
								<a href="#">CS:GO</a>
								<a href="#">League of Legends</a>
								<a href="#">Battlegrounds</a>
							</nav>

							<nav class="footer__list footer__list--double">
								<a href="#">Call of Duty</a>
								<a href="#">Hearthstone</a>
								<a href="#">Halo</a>
								<a href="#">Vainglory</a>
								<a href="#">World of Tanks</a>
							</nav>
						</div>

						<div class="footer__nav footer__nav--3">
							<div class="footer__title"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='176' y1='416' x2='176' y2='480' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><path d='M80,32H272a32,32,0,0,1,32,32V476a4,4,0,0,1-4,4H48a0,0,0,0,1,0,0V64A32,32,0,0,1,80,32Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><path d='M320,192H432a32,32,0,0,1,32,32V480a0,0,0,0,1,0,0H304a0,0,0,0,1,0,0V208A16,16,0,0,1,320,192Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><path d='M98.08,431.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,431.87Z'/><path d='M98.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,351.87Z'/><path d='M98.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,271.87Z'/><path d='M98.08,191.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,191.87Z'/><path d='M98.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,98.08,111.87Z'/><path d='M178.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,351.87Z'/><path d='M178.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,271.87Z'/><path d='M178.08,191.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,191.87Z'/><path d='M178.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,178.08,111.87Z'/><path d='M258.08,431.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,431.87Z'/><path d='M258.08,351.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,351.87Z'/><path d='M258.08,271.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,271.87Z'/><ellipse cx='256' cy='176' rx='15.95' ry='16.03' transform='translate(-49.47 232.56) rotate(-45)'/><path d='M258.08,111.87a16,16,0,1,1,13.79-13.79A16,16,0,0,1,258.08,111.87Z'/><path d='M400,400a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/><path d='M400,320a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/><path d='M400,240a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/><path d='M336,400a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/><path d='M336,320a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/><path d='M336,240a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z'/></svg> <span>For partners</span></div>

							<nav class="footer__list">
								<a href="#">Affiliate program</a>
								<a href="#">Selling on GoGames</a>
								<a href="#">Terms and conditions</a>
								<a href="#">Privacy policy</a>
								<a href="#">Marketing Partnership</a>
							</nav>

							<div class="footer__contacts">
								<a class="footer__link" href="tel:+18092345678">+216 29106393</a>
								<a class="footer__link" href="mailto:support@GoGames.tn">support@GoGames.tn</a>

								<div class="footer__social">
									<a class="fb" href="#"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z'/></svg></a>
									<a class="inst" href="#"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z'/><path d='M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z'/><path d='M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z'/></svg></a>
									<a class="tw" href="#"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z'/></svg></a>
									<a class="vk" href="#"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M484.7,132c3.56-11.28,0-19.48-15.75-19.48H416.58c-13.21,0-19.31,7.18-22.87,14.86,0,0-26.94,65.6-64.56,108.13-12.2,12.3-17.79,16.4-24.4,16.4-3.56,0-8.14-4.1-8.14-15.37V131.47c0-13.32-4.06-19.47-15.25-19.47H199c-8.14,0-13.22,6.15-13.22,12.3,0,12.81,18.81,15.89,20.84,51.76V254c0,16.91-3,20-9.66,20-17.79,0-61-66.11-86.92-141.44C105,117.64,99.88,112,86.66,112H33.79C18.54,112,16,119.17,16,126.86c0,13.84,17.79,83.53,82.86,175.77,43.21,63,104.72,96.86,160.13,96.86,33.56,0,37.62-7.69,37.62-20.5V331.33c0-15.37,3.05-17.93,13.73-17.93,7.62,0,21.35,4.09,52.36,34.33C398.28,383.6,404.38,400,424.21,400h52.36c15.25,0,22.37-7.69,18.3-22.55-4.57-14.86-21.86-36.38-44.23-62-12.2-14.34-30.5-30.23-36.09-37.92-7.62-10.25-5.59-14.35,0-23.57-.51,0,63.55-91.22,70.15-122' style='fill-rule:evenodd'/></svg></a>
									<a class="tch" href="#"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M80 32l-32 80v304h96v64h64l64-64h80l112-112V32zm336 256l-64 64h-96l-64 64v-64h-80V80h304z'/><path d='M320 143h48v129h-48zM208 143h48v129h-48z'/></svg></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="footer__wrap">
						<a class="footer__logo" href="index.html">
							<img src="img/logo.png" alt="">
						</a>

						<span class="footer__copyright">© GoGames, 2020—2021 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from dmitryvolkov.me/demo/gogame1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 11:21:37 GMT -->
</html>