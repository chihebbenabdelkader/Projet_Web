<?php
    require_once     '../model/participant.php';
    require_once     '../eventC/participantC.php';

    $error = "";

    // create adherent
    $participant = null;

    // create an instance of the controller
    $participantC = new ParticipantC();
    if (
        isset($_POST["idParticipant"]) &&
		isset($_POST["nomParticipant"]) &&		
        isset($_POST["prenomParticipant"]) &&
		isset($_POST["ageParticipant"]) &&
        isset($_POST["emailParticipant"]) &&
        isset($_POST["dateInscri"]) 
        
    ) {
        if (
            !empty($_POST["idParticipant"]) && 
			!empty($_POST['nomParticipant']) &&
            !empty($_POST["prenomParticipant"]) && 
			!empty($_POST["ageParticipant"]) && 
      !empty($_POST["emailParticipant"]) && 
			!empty($_POST["dateInscri"]) 
            
        ) {
            $participant = new Participant(
                $_POST['idParticipant'],
				$_POST['nomParticipant'],
                $_POST['prenomParticipant'], 
				$_POST['ageParticipant'],
               $_POST['emailParticipant'],
               $_POST['dateInscri']
        
            );
            $participantC->ajouter($participant);
           // header('Location:afficherCommande.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/gogame1.3/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 11:23:25 GMT -->
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
								<img src="img/logo.svg" alt="">
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
									<a class="header__nav-link" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg></a>

									<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
										<li><a href="catalog.html">Catalog (sidebar left)</a></li>
										<li><a href="catalog2.html">Catalog (sidebar right)</a></li>
										<li><a href="category.html">Category page</a></li>
										<li><a href="details.html">Details style 1</a></li>
										<li><a href="details2.html">Details style 2</a></li>
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
									<option value="0">All Categories</option>
									<option value="1">Action</option>
									<option value="3">Adventure</option>
									<option value="4">Fighting</option>
									<option value="5">Flight simulation</option>
									<option value="6">Platform</option>
									<option value="7">Racing</option>
									<option value="8">RPG</option>
									<option value="9">Sports</option>
									<option value="10">Strategy</option>
									<option value="11">Survival horror</option>
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

	<!-- page title -->
	<section class="section section--first section--last section--head" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Participer</h2>
						<!-- end section title -->

						<!-- breadcrumb 
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.html">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Contacts</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
	
	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">Frormulaire de Participation </h2>
						</div>
						<!-- end section title -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_222.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produit</h1>
          </div>
        </div>
      </div>
    </section>
</head>  
    <body>
        <br>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center" style="color: white">
                <tr>
                    <td>
                        <label for="idParticipant">idParticipant:
                        </label>
                    </td>
                    <td><input type="number" name="idParticipant" id="idParticipant" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nomParticipant">nomParticipant:
                        </label>
                    </td>
                    <td><input type="text" name="nomParticipant" id="nomParticipant" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomParticipant">prenomParticipant:
                        </label>
                    </td>
                    <td><input type="text" name="prenomParticipant" id="prenomParticipant" maxlength="20"></td>
                </tr>
				        <tr>
                    <td>
                        <label for="ageParticipant">ageParticipant:
                        </label>
                    </td>
                    <td><input type="number" name="ageParticipant" id="ageParticipant" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="emailParticipant">emailParticipant:
                        </label>
                    </td>
                    <td><input type="text" name="emailParticipant" id="emailParticipant" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="dateInscri">dateInscri:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateInscri" id="dateInscri" maxlength="20">
                    </td>
                </tr>  
                   
                                           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>

    <div class="col-12 col-md-5 col-xl-4">
    <div class="row">
        <!-- section title -->
        <div class="col-12">
            <h2 class="section__title">Info</h2>
        </div>
        <!-- end section title -->

        <div class="col-12">
            <p class="section__text section__text--mt">It is a long fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

            <ul class="contacts__list">
                <li><a href="tel:+18092345678">+1 809 234-56-78</a></li>
                <li><a href="mailto:support@gg.template">support@gg.template</a></li>
                <li><a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="open-map">221B Baker St, Marylebone, London</a></li>
            </ul>
            <div class="contacts__social">
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
            <div class="footer__title"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polygon points='336 320 32 320 184 48 336 320' style='fill:none;stroke-linejoin:round;stroke-width:32px'/><path d='M265.32,194.51A144,144,0,1,1,192,320' style='fill:none;stroke-linejoin:round;stroke-width:32px'/></svg> <span>GG.template</span></div>

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
                <a href="#">Selling on GG.template</a>
                <a href="#">Terms and conditions</a>
                <a href="#">Privacy policy</a>
                <a href="#">Marketing Partnership</a>
            </nav>

            <div class="footer__contacts">
                <a class="footer__link" href="tel:+18092345678">+1 809 234-56-78</a>
                <a class="footer__link" href="mailto:support@gg.template">support@gg.template</a>

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
            <img src="img/logo.svg" alt="">
        </a>

        <span class="footer__copyright">© GG.template, 2020—2021 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>
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

<!-- Mirrored from dmitryvolkov.me/demo/gogame1.3/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 11:23:25 GMT -->
</html>