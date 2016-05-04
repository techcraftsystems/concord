<?php
	session_set_cookie_params(0);
	session_start();
	
	if (!isset($_SESSION['oDate'])){
		$_SESSION['oDate'] = date("Y-m-d");
		$hide_slide = 0;
	}
	elseif ($_SESSION['oDate'] != date("Y-m-d"))
	{
		$_SESSION['oDate'] = date("Y-m-d");
		$hide_slide = 0;
	}
	else
	{
		$hide_slide = 1;
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>The Concord - Hotel & Suites</title>
		<link rel='shortcut icon' href='favicon.ico'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset='utf-8'>
		
		<!--[if lt IE 9]>
				<script src="js/html5shiv.js"></script>
			<![endif]-->
		<!-- Bootstrap -->
		
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<!-- Main Styles -->
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/style-1.css" rel="stylesheet" media="screen">
		<link href="css/responsive.css" rel="stylesheet" media="screen">
		<!-- FLEXSLIDER -->
		<link href="css/flexslider.css" rel="stylesheet" media="screen">
		<!-- FONT AWESOME -->
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
		<!--[if IE 7]>
			  <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
			<![endif]-->
		<!-- SCRIPTS -->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.form.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<script src="js/template.js"></script>
		<script src="js/popups.js"></script>
		
		<script>
			$(document).ready(function() {
				console.log( "ready!" );
			});
			
			function submits(){
				window.location.href = "https://gc.synxis.com/rez.aspx?Hotel=68584&Chain=16365";
			}

			function open_popups(index){
				if (index == 0){
					$('#content').removeClass('visible');
					$('body').removeClass('content_vis');
					document.getElementById('homepage').display = 'none';
					return 0;
				}
				else {
					$('#content').toggleClass('visible');
					$('body').toggleClass('content_vis');
					document.getElementById('homepage').display = 'block';
				}
				
				set_page_opened(index);
			}
			
			function set_page_opened(index){
				if (index == 0) {
					return 0;
				}
				else if(index == 1) {
					document.getElementById('m_about').className = 'flex-active';
					document.getElementById('m_dines').className = '';
					document.getElementById('m_lifes').className = '';
					document.getElementById('m_destn').className = '';
					document.getElementById('m_accom').className = '';
					document.getElementById('m_conts').className = '';
					
					document.getElementById('about').className = 'content_tab_item flex-active-slide';
					document.getElementById('services').className = 'content_tab_item';
					document.getElementById('subscribe').className = 'content_tab_item';
					document.getElementById('destination').className = 'content_tab_item';
					document.getElementById('accomodation').className = 'content_tab_item';
					document.getElementById('contacts').className = 'content_tab_item';
												
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
				else if(index == 2) {
					document.getElementById('m_about').className = '';
					document.getElementById('m_dines').className = 'flex-active';
					document.getElementById('m_lifes').className = '';
					document.getElementById('m_destn').className = '';
					document.getElementById('m_accom').className = '';
					document.getElementById('m_conts').className = '';
				
					document.getElementById('about').className = 'content_tab_item';
					document.getElementById('services').className = 'content_tab_item flex-active-slide';
					document.getElementById('subscribe').className = 'content_tab_item';
					document.getElementById('destination').className = 'content_tab_item';
					document.getElementById('accomodation').className = 'content_tab_item';
					document.getElementById('contacts').className = 'content_tab_item';
					
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(-1349px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
				else if(index == 3) {
					document.getElementById('m_about').className = '';
					document.getElementById('m_dines').className = '';
					document.getElementById('m_lifes').className = 'flex-active';
					document.getElementById('m_destn').className = '';
					document.getElementById('m_accom').className = '';
					document.getElementById('m_conts').className = '';
				
					document.getElementById('about').className = 'content_tab_item';
					document.getElementById('services').className = 'content_tab_item';
					document.getElementById('subscribe').className = 'content_tab_item flex-active-slide';
					document.getElementById('destination').className = 'content_tab_item';
					document.getElementById('accomodation').className = 'content_tab_item';
					document.getElementById('contacts').className = 'content_tab_item';
					
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(-2698px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
				
				else if(index == 4) {
					document.getElementById('m_about').className = '';
					document.getElementById('m_dines').className = '';
					document.getElementById('m_lifes').className = '';
					document.getElementById('m_destn').className = 'flex-active';
					document.getElementById('m_accom').className = '';
					document.getElementById('m_conts').className = '';
				
					document.getElementById('about').className = 'content_tab_item';
					document.getElementById('services').className = 'content_tab_item';
					document.getElementById('subscribe').className = 'content_tab_item';
					document.getElementById('destination').className = 'content_tab_item flex-active-slide';
					document.getElementById('accomodation').className = 'content_tab_item';
					document.getElementById('contacts').className = 'content_tab_item';
					document.getElementById('defaultload').className = 'content_tab_item';
					
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(-4077px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
				
				else if(index == 5) {
					document.getElementById('m_about').className = '';
					document.getElementById('m_dines').className = '';
					document.getElementById('m_lifes').className = '';
					document.getElementById('m_destn').className = '';
					document.getElementById('m_accom').className = 'flex-active';
					document.getElementById('m_conts').className = '';
				
					document.getElementById('about').className = 'content_tab_item';
					document.getElementById('services').className = 'content_tab_item';
					document.getElementById('subscribe').className = 'content_tab_item';
					document.getElementById('destination').className = 'content_tab_item';
					document.getElementById('accomodation').className = 'content_tab_item flex-active-slide';
					document.getElementById('contacts').className = 'content_tab_item';
					document.getElementById('defaultload').className = 'content_tab_item';
					
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(-5426px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
				
								else if(index == 5) {
					document.getElementById('m_about').className = '';
					document.getElementById('m_dines').className = '';
					document.getElementById('m_lifes').className = '';
					document.getElementById('m_destn').className = '';
					document.getElementById('m_accom').className = '';
					document.getElementById('m_conts').className = 'flex-active';
				
					document.getElementById('about').className = 'content_tab_item';
					document.getElementById('services').className = 'content_tab_item';
					document.getElementById('subscribe').className = 'content_tab_item';
					document.getElementById('destination').className = 'content_tab_item';
					document.getElementById('accomodation').className = 'content_tab_item';
					document.getElementById('contacts').className = 'content_tab_item flex-active-slide';
					document.getElementById('defaultload').className = 'content_tab_item';
					
					document.getElementById('slides').style = 'min-height: 200px; padding-top: 0px; height: 100%; width: 1200%; transition-duration: 0s; transform: translate3d(-6775px, 0px, 0px);';
					
					$("#toplinemenu").show();
				}
			}
			
			function HideSideUp() {
				document.getElementById('homepage').display = 'none';
				alert(0);
			}
			
			function SupressIntroPage(){
				$("#homepage").hide();
			}
			function PageHasBeenLoaded(){
				$("#homepage").hide();
				open_popups(0);
				open_popups(6);
			}
			
		</script>
				
		<style type='text/css'>
			.slides #about{
				background: #000 url("img/pop-ups/overview.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.slides #services{
				background: #000 url("img/pop-ups/wine-dine.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.slides #subscribe{
				background: #000 url("img/pop-ups/lifestyle.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.slides #destination{
				background: #000 url("img/pop-ups/destination.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.slides #accomodation{
				background: #000 url("img/pop-ups/accomodation.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.slides #contacts{
				background: #000 url("img/pop-ups/contact.jpg") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			.slides #defaultload{
				background: url("img/pop-ups/black-bgx.png") repeat scroll 0 0;
				min-height: 100%!important;
				display: inline-block;
			}
			
			.defaultload{
				background: url("img/pop-ups/black-bg.png") repeat scroll 0 0;
				
			}
			
			.flex-viewport {
				height:	100%!important;
				bottom: 30px!important;
			}
			.copyright{
				bottom: 5px;
				position:absolute;
				left: 40px;
				width: 100%;
			}
			
			.copyright div {
				float: right;
				display: inline-block;
				text-align: right;
				margin-right: 80px;
			}
			
			.copyright1{
				bottom: 0px;
				width: 100%;
				height:4 	%;
				background: #fff;
				padding-left: 40px;
				position: absolute;
			}
			
			#date1, #date2
			{
				width:95%;
				background:#fff url(images/date_icon.png) no-repeat scroll 87px center / 15px auto;
				border: 1px solid #58595B;
				border-radius: 1px;
				padding: 2px;
				margin: 0px;
				height: 30px;
				cursor: text;
			}
			#adlt1, #chld1, #room1 {
				width:100%;
				background: none repeat scroll 0 0 #FFFFFF;
				border: 1px solid #58595B;
				border-radius: 1px;
				padding: 2px;
				margin: 0px;
				height: 30px;
				-moz-appearance: none;
			}
			@-moz-document url-prefix() {
				#adlt1, #chld1 {
					background:#fff url(images/down_icon.png) no-repeat scroll 87px center / 10px auto;
				}
				#room1 {
					background:#fff url(images/down_icon.png) no-repeat scroll 204px center / 10px auto;
				}
			}
		</style>
	</head>
	
	
	
<body data-spy="scroll" data-target=".navbar" data-offset="150">
	<header id="homepage" class="content-block homepage">
		
		
	  <div class="intro-block"> 
		<div class="flexslider" id="main-slider">
		  <ul class="slides">
			<li>
				<div class="slide-content slide1">
					<div class="slide-header" style="font-family:Times New Roman,Arial">For life’s finest indulgences</div>
				</div>
				<img class="slider-bg" alt="slider" src="img/backgrounds/background-1.jpg" />
				<div class="skip1">SKIP INTRO</div>
			</li>
			
			<li>
				<div class="slide-content slide2">
					<div class="slide-header" style="font-family:Times New Roman,Arial; padding-left:40px;">For experiences designed to awe</div>
				</div>
				
				<img class="slider-bg" alt="slider" src="img/backgrounds/background-2.jpg" />
				<div class="skip2">SKIP INTRO</div>
			</li>
			
			<li>
				<div class="slide-content slide3">
					<div class="slide-header" style="font-family:Times New Roman,Arial; padding-right:40px;">For memories that last a lifetime</div>
				</div>
				<img class="slider-bg" alt="slider" src="img/backgrounds/background-3.jpg" />
				<div class="skip3">SKIP INTRO</div>
			</li>
			
			<li>
				<div class="slide-content slide4">
					<div class="slide-header" style="margin-top:-15%;"><img alt="" src="img/slides/logo-slide.png" style="height:300px" /></div>
				</div>
				<img class="slider-bg" alt="slider" src="img/backgrounds/background-4.jpg" />
				<div class="skip4">SEE WHAT YOU NEED</div>
				
			</li>
		  </ul>
		</div>
		<!-- / Flexslider 
		<a href="#" class="skip-intro"></a> </div>--> 
	</header>
	
	
	
	
	
	
	
	
	<div id="portfolio" class="content-block portfolio">
		<div id="first-line" class="container">
			<a class="brand" href="#homepage">
				<img src="img/logo.png" alt="" width="175px">
			</a>
			
			<div class="nav-collapse collapse" style="float:right;padding-top:20px;">
				<ul class="social">
					<div class="fb"></div>
					<div class="pn"></div>
					<div class="tw"></div>
					<div class="yt"></div>
				</ul>
			</div>
		</div>
		
		
		<table width="106%">
			<tr class="home-items">
				<td width="16%">
					<img src="img/home/overview.jpg" width="100%">
					<div class="ro1" onclick="open_popups(1);">&nbsp;</div>
				</td>
				
				<td width="16%">
					<img src="img/home/wine&dine.jpg" width="100%">
					<div class="ro2" onclick="open_popups(2);">&nbsp;</div>
				</td>
				
				<td width="16%">
					<img src="img/home/swimming-pool.jpg" width="100%">
					<div class="ro3" onclick="open_popups(3);">&nbsp;</div>
				</td>
				
				<td width="16%">
					<img src="img/home/destination.jpg" width="100%">
					<div class="ro4" onclick="open_popups(4);">&nbsp;</div>
				</td>
				
				<td width="16%">
					<img src="img/home/accomodation.jpg" width="100%">
					<div class="ro5" onclick="open_popups(5);">&nbsp;</div>
				</td>
				
				<td width="16%">
					<img src="img/home/contact-us.jpg" width="100%">
					<div class="ro6" onclick="open_popups(6);">&nbsp;</div>
				</td>
			</tr>
		</table>
		
		<div class="copyright">
			<span onclick="open_popups(6);">Sitemap</span>
		
		
			<div>Copyright &copy; The Concord Hotel & Suites, 2015</div>
		</div>
	</div>
	
	<section id="content">
		<div id="content_inner">
			<div id="toplinemenu">
				<div class="closer" onclick="open_popups(0)">
					&nbsp;
				</div>
			
				<ul id="mainmenu">
					<li><a href="#" id="m_about">OVERVIEW</a></li>
					<li><a href="#" id="m_dines">WINE AND DINE</a></li>
					<li><a href="#" id="m_lifes">LIFESTYLE FEATURES</a></li>
					<li><a href="#" id="m_destn">DESTINATION</a></li>
					<li><a href="#" id="m_accom">ACCOMODATION</a></li>
					<li><a href="#" id="m_conts">CONTACT US</a></li>
					<li><a href="#" id="m_conts">&nbsp;</a></li>
					
				</ul>
			</div>
			
			<div id="tab_contents">
				<ul class='slides' id="slides" style="min-height:200px; padding-top:0px; height:100%;">
					
					<!-- About Tab -->
					<li class="content_tab_item" id="about">
						<div class="logo-tabs">
							<img src="img/logo.png" width="175px" alt="" />
						</div>
						
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>A statement of architectural excellence, The Concord is an elegantly designed hotel featuring the best of convenience, luxury and entertainment. Strategically located on Wangapala Road, Nairobi within walking distance from The Diamond Plaza Shopping Centre, it features 86 rooms, tastefully designed, radiating warmth and sophistication.</span><p></p>
								<span><a href="#">Click here</a> to view Gallery </span>

							</div>
							
							<div class="imgframe">
								<iframe src="input-form.html"></iframe> 
							</div>
						</div>
					</li>
					<!-- /About Tab -->	
					
					<!-- Services Tab -->
					
					<li class="content_tab_item" id="services">
						<div class="logo-tabs">
							<img src="img/logo.png" width="175px" alt="" />
						</div>
						
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>A host of mouthwatering delicacies await you at The Concord. Embark on a gastronomic journey filled with delights from all around the world. Sit back, relax and indulge in an exciting and innovative fare.</span><p></p>
								<span>RESTAURANTS</span>
								<span>
													<ul>
									<li>Urbano Restaurant</li>
									<li>Chinese Restaurant & Bar</li>
									<li>Bundoo Khan Restaurant</li>
									
													</ul>
								</span>
							</div>
							
							
							<div class="imgframe">
								 <iframe src="input-form.html"></iframe> 
							</div>
							
							
							
						</div>													
					</li>													
																										
					<!-- /Services Tab -->							
					
					<!-- Subscribe Tab -->	
					
					<li class="content_tab_item" id="subscribe">
							<div class="logo-tabs">
								<img src="img/logo.png" width="175px" alt="" />
							</div>
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>The concord comes replete with life's finest luxuries. Choose between taking a leisurely dip at the aquamarine pool, or let our masseuse pamper you at the spa. Her, you'll never be out of things to do and places to go.</span><p></p>
								<span>FEATURES</span>
								<span>
								<ul>
									<li>Swimming pool on the 7th Floor</li>
									<li>Fitness centre and Spa</li>
									<li>Separate steam, sauna and jacuzzi facilities for ladies and gents</li>										
													</ul>
								</span>
							</div>
							
							<div class="imgframe">
								<iframe src="input-form.html" action='formmail.pl'></iframe> 
							</div>
							
						</div>
					</li>
					<!-- /Subscribe Tab -->
					
					<!-- Contacts Tab -->	
					
					<li class="content_tab_item" id="destination">
						<div class="logo-tabs">
								<img src="img/logo.png" width="175px" alt="" />
						</div>
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>The Hotel is strategically located on Wangapala Road at a walking distance from The Diamond Plaza Shopping Centre and The Aga Khan University Hospital. What's more, everything you need, from parks to airports, is just a short drive away.</span><p></p>
								<span><a href="#">Click here</a> to view the distance chart</span>
							</div>
							
							<div class="imgframe">
								<iframe src="input-form.html"></iframe> 
							</div>
						</div>
					</li>
					<!-- /Contacts Tab -->
					
					<!-- Accomodation Tab -->	
					
					<li class="content_tab_item" id="accomodation">
						<div class="logo-tabs">
							<img src="img/logo.png" width="175px" alt="" />
						</div>
						
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>At The Concord, you will indulge in a stay unlike any other. With over 86 lavish rooms, here, you enjoy the finest indulgence and a lifestyle designed around your wishes. Welcome to a live that that leaves nothing to your imagination.</span><p></p>
								<span>INDOOR FEATURES;</span>
								<span>
								<ul>
									<li>Complete modern pointsfor TV/DSTV/cable TV, telephone, fibreoptic internet, intercom, push button alarm, smoke detectors and instant hot water in each room.</li>																		
													</ul>
								</span>
							</div>
							
							<div class="imgframe">
								<iframe src="input-form.html"></iframe> 
							</div>
							
						</div>
					</li>
					<!-- /Accomodation Tab -->
					
					<!-- Contacts Tab -->	
					
					<li class="content_tab_item" id="contacts">
						<div class="logo-tabs">
								<img src="img/logo.png" width="175px" alt="" />
						</div>
						<div class="content_tab_inner centered">
							<div id="textline">
								<span>The Concord Hotel,<br>
										31 Wangapala Road,<br>
										P. O. Box 49434 - 00100, Nairobi.<p></p>
										T : +254 (20) 386 0119/20<br>
										F : +254 (20) 374 0212<br>
										M : +254 786 404 994/ +254 715 404 994<br>
										E : hospitality@chaturgroup.com
								</span>
							</div>
							
							<div class="imgframe">
								<iframe src="input-form.html"></iframe> 
							</div>
							
						</div>
					</li>
					<!-- /Contacts Tab -->
					
					<li class="content_tab_item" id="defaultload">
						<div class="content_tab_inner centered"  style="margin-right: -25px; overflow:hidden;">
							<div class="defaultload" style="height: 335px; margin-top:175px; margin-left:-25px; margin-right:-45px; ">
								
								<div style="padding-top:35px;">
									<center>
										<table>
											<tr>
												<td width="100px;">
													<div class="imgframe">
														<iframe src="input-form.html"></iframe> 
													</div>
												</td>
												
												<td width=100px; valign="top">
													<div class="closer" onclick="open_popups(0)" style="display:inline-block; margin-right: -500px; overflow:hidden;">
														&nbsp;
													</div>
												</td>
											</tr>
										</table>
									</center>
								</div>
							</div>
							
							
						</div>
					</li>
					
				</ul>
			</div>			
		</div>
	</section>
</body>
</html>