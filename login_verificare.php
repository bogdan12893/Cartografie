<?php
	session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>We &hearts; Cartography</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/my_style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/college.css"> 
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body>
<div class="wrap-body">
	<header class="zerogrid">
		<div class="content-box backgr">
			<h1 class = "title_header" href="#">Cartografie si GIS</h1>
			<h2 class = "title_header_two" >Cursuri postuniversitare</h3>
		</div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'><span>Home</span></a></li>
			   <li class='has-sub'><a href='informatii.html'><span>Informatii</span></a>
				  <ul class="submenu_opacity">
					 <li><a href='formular_inscriere.html'><span>Formular de Inscriere</span></a></li>
					 <li><a href='activitati.html'><span>Activitati</span></a></li>
				  </ul>
			   </li>
			   <li class='has-sub'><a href='pagina_studenti.html'><span>Pagina Studenti</span></a>
			   		<ul class="submenu_opacity">
					 <li><a href='orar.html'><span>Orar</span></a></li>
					 <li><a href='login.html'><span>Note</span></a></li>
				  </ul>
			   </li>

			  <li class="active"><a href='login.html'><span>Login</span></a></li>
			   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
			</ul>
		</div>
	</header>
	<!--Container-->
	<section class="content-box zerogrid">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
						<article class="background-lighterblue">
							<div class="art-content">
								<div class="row">
										<div class="wrap-col post">
											<div style="padding-bottom: 10px; font-size: 5em;">
												<h1 class = "clg clg-identification28"></h1>
										</div>
									</div>
								</div>
						</article>
				</section>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
						<article class="background-lightblue">
							<div class="art-content">
								<div class="row">
									<?php
										function testare($data) {
											$data = trim($data);
											$data = stripslashes($data);
											$data = htmlspecialchars($data);
											return $data;
										}
										$n = testare($_REQUEST["nume"]);
										$p = testare($_REQUEST["parola"]);
										try {
												$cnx = new PDO("mysql:host=localhost;charset=utf8;dbname=cartografie","root", "");
												$interogare = $cnx->prepare("SELECT * from admin");
												$interogare->execute();
													$gasit = false;
												foreach ($interogare->fetchAll() as $linie) {
												if (($n== $linie['nume'])&& ($p== $linie['parola'])) {
												echo "<h3>Sunteti autorizat</h3>";

												$gasit = true;
												break;
											}
											}
											if(!$gasit) {
												echo "<a href='login.html'><span style='color:#BF4949; font-size: 20px; line-height: 40px; magin: 10px;'> Datele introduse sunt gresite. Incercati din nou.</a></span>";

											}

											$cnx = null;
										}
										catch(PDOException $e) {
											die("Conectare imposibila: " . $e->getMessage());
										}
										?>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
			<section class="content-box zerogrid">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
						<article class="background-lighterblue">
							<div class="art-content">
								<div class="row">
										<div class="wrap-col post">
											<div style="padding-bottom: 90px">
										</div>
									</div>
								</div>
						</article>
				</section>
		<hr class="line">
		<hr class="line">
		<hr class="line">
		<hr class="line">
		<hr class="line">
		<hr class="line">
		<hr class="line">
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<p>Proiect Integrator II modified by <a href="http://www.bogdancadar.info" target="_blank" rel="nofollow">Bogdan Cadar</a></p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="social_icon">
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	<script src="js/lightbox-plus-jquery.min.js"></script>
</div>
</body>
</html>