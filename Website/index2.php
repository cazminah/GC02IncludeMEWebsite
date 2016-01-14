<!DOCTYPE html>
<html lang='en'>

<head>
	<?php
	include('template/head.php');
	?>

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<!-- // Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/testimonial/style.css">

	<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/testimonial/modernizr.js"></script>
	<script type="text/javascript" src="js/testimonial/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="js/testimonial/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/testimonial/main.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
</head>
<!-- //////////////////////////////////// NAVBAR-->
<body>
	<?php
	include('template/header.php');
	?>
	<!-- //////////////////////////////////// MAIN BODY  -->
	<div class="container">
		<div id="fullpage">
			<!-- //////////////////////////////////// PICTURE: SECTION 1 -->
			<!--  <section class="section" id="first-page">
                <div class="row">
              
                </div>
             </section> --> 
			<!-- //////////////////////////////////// ABOUT PAGE -->
			<section id="second-page" class="section">
				<?php
				include('content/fp-about-us.php');
				?>
                <div class="row">                    
                    <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<header class="lead" id="second-header"><?php echo $arrFPAboutUs['header'];?></header>
						<div id="second-text">
						<?php
						echo $arrFPAboutUs['body'];
						?>
                        </div>
                    </div>
                    <!-- <div class="col-sm-1"></div> -->
                </div>
            </section>
			<!-- //////////////////////////////////// WHY PAGE -->
			<section id="third-page" class="section">
				<?php
				include('content/why-us.php');
				?>
				<div id="why-container">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-4 col-xs-8 col-xs-offset-2">
							<h1 class="lead" id="lead-why"><?php echo $arrFPWhyUs['header'];?></h1>
							<hr id="hr-why">
						</div>
					</div>
					<div class="row" id="center-lists">
						<div class="col-sm-4 col-sm-offset-1">
							<h2 class="lead text-center"><?php echo $arrFPWhyUs['FirstColTitle'];?></h2>
							<ul id="ul-orange" class="list-unstyled well">
								<?php
								echo $arrFPWhyUs['FirstColBody'];
								?>
							</ul>
						</div>

						<div class="col-sm-4 col-sm-offset-1">
							<h2 class="lead text-center"><?php echo $arrFPWhyUs['SecondColTitle'];?></h2>
							<ul id="ul-blue" class="list-unstyled well well-lg">
								<?php
								echo $arrFPWhyUs['SecondColBody'];
								?>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- //////////////////////////////////// TOOLS PAGE -->
			<section id="fourth-page" class="section">
				<div id="tools-container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 tools-padding">
							<h1 id="lead-tools">Tools</h1>
							<hr id="hr-tools">
							<div class="responsive">
								<?php
								// read the json file
								$jsonFile = file_get_contents('content/fp-tools.json');
								$arrFPTools = json_decode($jsonFile, true);
								$arrFPTools = $arrFPTools['tools'];
								foreach($arrFPTools as $arrFPTool){
									$str = '<div>';
									$str .= '<h3>'.$arrFPTool['title'].'</h3>';
									$str .= '<img class="toolsIcons" src="images/ToolsIcons/'.$arrFPTool['image'].'">';
									$str .= '<div class="tool-text">'.$arrFPTool['text'].'</div>';
									$str .= '</div>'.PHP_EOL;
									echo $str;

								}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- //////////////////////////////////// TESTIMONIALS PAGE -->
			<section id="fifth-page" class="section" style="position: relative;">
				<div class="row" id="div-fifth-page">
					<div class="col-md-10 col-md-offset-1">
						<div class="cd-testimonials-wrapper cd-container">
							<ul class="cd-testimonials">
								<?php
								// read the json file
								$jsonFile = file_get_contents('content/fp-testimonials.json');
								$arrFPTestimonials = json_decode($jsonFile, true);
								$arrFPTestimonials = $arrFPTestimonials['testimonials'];
								foreach($arrFPTestimonials as $arrFPTestimonial){
									$str = '<li>';
									$str .= '<p>“'.$arrFPTestimonial['text'].'”</p>';
									$str .= '<div class="cd-author">';
									$str .= '<img alt="Author image" src="images/testimonials/'.$arrFPTestimonial['image'].'">';
									$str .= '<ul class="cd-author-info">';
									$str .= '<li>'.$arrFPTestimonial['title'].'</li>';
									$str .= '</ul>';
									$str .= '</div>';
									$str .= '</li>'.PHP_EOL;
									echo $str;
								}
								?>
							</ul> <!-- cd-testimonials -->
						</div> <!-- cd-testimonials-wrapper -->
					</div>
				</div>
			</section>
		</div>
		<!-- Fullpage end div here below -->
	</div>
	<?php
	include('template/footer.php');
	?>
</body>
</html>