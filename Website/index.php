<!DOCTYPE html>
<html lang='en'>
<head>
	<?php
	include('template/head.php');
	?>
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
					<div class="col-sm-5 col-sm-offset-6 col-xs-10 col-xs-offset-1">
						<?php
						<header class="lead"><?php echo $arrFPAboutUs['header'];?></header>
						echo '<p>'.$arrFPAboutUs['body'].'</p>';
						?>
					</div>
					<!-- <div class="col-sm-1"></div> -->
				</div>
			</section>
			<!-- //////////////////////////////////// WHY PAGE -->
			<section id="third-page" class="section">
				<?php
				include('content/why-us.php');
				?>
				<div class="row">
					<div class="col-sm-5 col-sm-offset-4 col-xs-8 col-xs-offset-2">
						<header class="lead"><?php echo $arrFPWhytUs['header'];?></header>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<h2 class="lead text-center">children and young people:</h2>	
						<ul id="ul-orange" class="list-unstyled well">
							<li>provides an online space to share ideas and work collaboratively</li>
							<li>is easily accessible and user friendly</li>
							<li>can also be accessed out of sessions – promotes self-management and can track between session progress</li>
							<li>Encourages young people to play a more active role in their care</li>
						</ul>
					</div>

					<div class="col-sm-4 col-sm-offset-1">
						<h2 class="lead text-center">children and young people:</h2>	
						<ul id="ul-blue" class="list-unstyled well well-lg">
							<li>Provides a secure space and access to an online toolbox</li>
							<li>Allows clinicians and young people to complete and review outcome measures in a collaborative and meaningful way</li>
							<li>Aims to motivate young people to be more involved in their care through collaborative working</li>
						</ul>
					</div>
					<!-- <div class="col-md-1"></div> -->
				</div>
			</section>
			<!-- //////////////////////////////////// TOOLS PAGE -->
			<section id="fourth-page" class="section">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 tools-padding">
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
							/*
							include('content/fp-tools.php');
							foreach($arrFPTools as $arrFPTool){
								$str = '<div>';
								$str .='<h3>'.$arrFPTool[0].'</h3>';
								$str .='<img class="toolsIcons" src="images/ToolsIcons/'.$arrFPTool[1].'">';
								$str .='<div class="tool-text">'.$arrFPTool[2].'</div>';
								$str .= '</div>'.PHP_EOL;
								echo $str;

							}
							*/
							?>
					  	
						  	<div>
						  		<h3>Feelings <br>Finder</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/feelings_finder.png">
						  		<div class="tool-text">
						  			A space to identify, label and learn the meaning of different feelings.
						  		</div>
						  	</div>
						 	<div>
						  		<h3>My <br>Decisions</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/decisions.png">
						  		<div class="tool-text">
						  			Develop effective decision making skills.<!-- <br><br> -->
						  		</div>
						  	</div>
						  	<div>
						  		<h3>Doodle <br>Draw</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/feelings_finder.png">
						  		<div class="tool-text">
						  			A creative drawing tool to aid the expression of thoughts, feelings and difficulties.
						  		</div>
						  	</div>
						  	<div>
						  		<h3>Getting To<br> Know</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/getting_to_know.png">
						  		<div class="tool-text">
						  			To encourage conversations around relationships, interests and hobbies.
						  		</div>
						  	</div>
						 	<div>
						  		<h3>My <br>Library</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/library.png">
						  		<div class="tool-text">
						  			A library of online resources and sites. Designed to promote self-management.
						  		</div>
						  	</div>
						  	<div>
						  		<h3>My <br>Measures</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/measures.png">
						  		<div class="tool-text">
						  			A collaborative tool to access, complete and review measures.
						  		</div>
						  	</div>
						  	<div>
						  		<h3>My <br>Plans</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/plans.png">
						  		<div class="tool-text">
						  			Encourages young people and those supporting them to create & review general plans.
						  		</div>
						  	</div>
						 	<div>
						  		<h3>My <br>Sessions </h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/sessions.png">
						  		<div class="tool-text">
						  			Key information is recorded, encouraging collaborative reflection.
						  		</div>
						  	</div>
						  	<div>
						  		<h3>My <br>Relationships </h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/shared_agreement.png">
						  		<div class="tool-text">
						  			Clarifies the support being offered.<br><br>
						  		</div>
						  	</div>
						  	<div>
						  		<h3>My <br>Strengths</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/strengths.png">
						  		<div class="tool-text">
						  			Encourages reflection on positive characteristics and the development of key strengths.
						  		</div>
						  	</div>
						  	<div>
						  		<h3>My <br>Supporters</h3>
						  		<img class="toolsIcons" src="images/ToolsIcons/supporters.png">
						  		<div class="tool-text">
						  			-----?-------?-----?<br><br>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
			</section>
			<!-- //////////////////////////////////// TESTIMONIALS PAGE -->
			<section id="fifth-page" class="section" style="position: relative;">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="cd-testimonials-wrapper cd-container">
							<ul class="cd-testimonials">
								<li>
									<p>"This is the only one that really considers the young person. All other systems are just about the data and aren't young person friendly."</p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>
						 
								<li>
									<p>“I love that someone is finally using technology in CAMHS.” </p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>
						 
								<li>
									<p>“It makes it easier having something else I can focus on, instead of awkwardly avoiding eye contact.”</p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>

								<li>
									<p>“I love that someone is finally using technology in CAMHS.” </p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>


								<li>
									<p>“I love that someone is finally using technology in CAMHS.” </p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>


								<li>
									<p>“I love that someone is finally using technology in CAMHS.” </p>
									<div class="cd-author">
										<img src="images/Young-Avatar.jpg" alt="Author image">
										<ul class="cd-author-info">
											<li>Young Person</li>
										</ul>
									</div>
								</li>


							</ul> <!-- cd-testimonials -->

						</div> <!-- cd-testimonials-wrapper -->
					</div>
				</div>
			</section>



			</div>
		<!-- Fullpage end div here below -->
			<!-- //////////////////////////////////// FOOTER SECTION -->
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</body>
	</html>