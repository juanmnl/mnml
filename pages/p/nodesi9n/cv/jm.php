<?php


include_once('inc-settings.php');

include_once('inc-functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>CV | Juan Manuel Cornejo</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="description" content="This is the CV of Juan Manuel Cornejo. Juan Manuel Cornejo is a designer/frontend developer. www.nodesi9n.com" />

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="schemes/print.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="schemes/mobile.css" />
	<link rel="stylesheet" type="text/css" media="handheld" href="schemes/mobile.css" />

	<?php
	// Setting the color scheme
	color_scheme();

	// Checking for PDF request
	pdf_scheme();
	?>

	<!-- Including jQuery -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

	<!-- Including tipsy (nicer tooltips) -->
	<link rel="stylesheet" type="text/css" href="js/tipsy/stylesheets/tipsy.css" />
	<script type="text/javascript" src="js/tipsy/javascripts/jquery.tipsy.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	jQuery(function($) {
		$('.socialmedia a').tipsy({gravity: 's', fade: true});
		$('.skillbar').tipsy({gravity: 'se', fade: true});
		$('.cvoptions a').tipsy({gravity: 'w', fade: true});
	});
	/* ]]> */
	</script>

	<!-- Including Colorbox (gallery & contact form) -->
	<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" media="screen" />
	<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>

	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(document).ready(function($){
			$(".thumbs a").colorbox();
			$(".emailbutton").colorbox({iframe:true, innerWidth:360, innerHeight:410});
		});
	/* ]]> */
	</script>
</head>

<body>
	<div id="wrap">
	
		<!-- Start: Section 1 - Introduction -->
		<div class="section topsection">
		<h1><a style="color: #6C43FE; text-decoration: none;" href="http://www.nodesi9n.com">⬅GO BACK</a></h1>
			<div class="column titlecolumn">
				<h1 class="myname">Juan Manuel Cornejo</h1>
				<h4 class="myjob">Designer / Frontend developer</h4>
			</div>

			<div class="column">
				<p><img src="img/jm.png" alt="Juan Manuel Cornejo" title="Juan Manuel Cornejo" class="photo myphoto" /> Hello!</br>My name is</br>Juan Manuel Cornejo,</br>I'm a Designer and FrontEnd Developer.</br>I'm passionate about my work because I love what I do.</br>=D</p>
			</div>

			<div class="column lastcolumn">
				<ul class="socialmedia"><?php social_profiles(); ?></ul><div class="clear"></div>

				<ul class="simplelist mt30">
					<li><strong>Email:</strong> <a href="#">jm@nodesi9n.com</a></li>
					<li><strong>Website:</strong> <a href="#">http://nodesi9n.com</a></li>
					<li><strong>Phone:</strong> (+33) 0666733576</li>
					<li><strong>Address:</strong> Bordeaux, France</li>
				</ul>
			</div>
			<div class="column">
				<h4>Languages:</h4>
							<div class="skill">
								<h3>Español</h3>
								<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excelente</div></div>
							</div>
							<div class="skill">
								<h3>Français</h3>
								<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excellent</div></div>
							</div>
							<div class="skill">
								<h3>English</h3>
								<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excellent</div></div>
							</div>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 1 - Introduction -->


		<!-- Start: Section 2 - Profile -->
		<div class="section">
			<div class="column titlecolumn"><h2 class="sectiontitle">Personal</h2></div>

			<div class="largecolumn">
				<p>I'm originally a sound engineer, from Quito, Ecuador. Five years ago I started art school and then turned to graphic design and photography. For a few years now, I've been experimenting with web design and, little by little, fell in love with it. I'll love to contribute and collaborate for the future of the web.</p>

				<p>For the past 8 years i've been working with all sorts of multimedia equipment and all kind of productions. From Madrid, Spain, to Quito, Ecuador, I've pushed the limits of every computer I've touched, but only to achieve what's on my mind. =D.</p>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 2 - Profile -->


		<!-- Start: Section 3 - Technical Skills -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Skills</h2></div>

			
			<div class="column">
				<div class="skill">
					<h3>Graphic Design</h3>
					<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excellent</div></div>
				</div>
				
				<div class="skill mt20">
					<h3>Motion Design</h3>
					<div class="skillbar" title="Excellent"><div class="skillbarfill skill90">Good</div></div>
				</div>

				<div class="skill mt20">
					<h3>Web Design</h3>
					<div class="skillbar" title="Good"><div class="skillbarfill skill90">Good</div></div>
				</div>

				<div class="skill mt20">
					<h3>FrontEnd Development</h3>
					<div class="skillbar" title="Average"><div class="skillbarfill skill70">Average</div></div>
				</div>
				
				<div class="skill mt20">
					<h3>Photography</h3>
					<div class="skillbar" title="Average"><div class="skillbarfill skill80">Good</div></div>
				</div>
				
				<div class="skill mt20">
					<h3>Audio Engineer</h3>
					<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excellent</div></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 3 - Technical Skills -->
		
		<!-- Start: Equipment -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Equipment</h2></div>

			<div class="largecolumn studies">
								<!-- Start: Studies -->
								<h3>MacbookPro 2.8ghz - 8gb ram</h3>
								<h4 class="mt10">Adobe CS5.5 - Espresso - Maxon Cinema 4D - Sketchbook Pro - Pixelmator - Artboard - among others (almost all are multiplataform). </h4>
								<!-- End: Studies -->
				
				<div class="ruler"></div>
				
								<!-- Start: Studies -->
								<h3>Canon EOS 7D - (30mm - 18/135mm)</h3>
								<h4 class="mt10">Digital Photography and Video</h4>
								<!-- End: Studies -->
				
				
				<div class="ruler"></div>
				
								<!-- Start: Studies -->
								<h3>Wacom intuos3 - intuos4 wireless</h3>
								<h4 class="mt10">Cuz there's no good workflow without a graphic tablet.</h4>
								<!-- End: Studies -->
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Equipment -->


		<!-- Start: Section 4 - Work Experience -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Experience</h2></div>

			<!-- Start: Job -->
			<div class="largecolumn">
				<!-- Start: Job -->
				<div class="column employer">
					<h3>Design/Development</h3>
					<h4><a href="http://nodesi9n.com">nodesi9n.com</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> July 2011 - Present day</li>
						<li><strong>Job type:</strong> Freelance</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>I run a very compact web agency from Bordeaux, France.</p>
					<ul>
						<li>Graphic Design</li>
						<li>Web design</li>
						<li>FrontEnd development</li>
						<li>Motion design</li>
						<li>Some photography</li>
						<li>Some video too</li>
					</ul>					
				</div>
				<!-- End: Job -->

				<div class="ruler"></div>

				<!-- Start: Job -->
				<div class="column employer">
					<h3>Art direction / graphic design</h3>
					<h4><a href="http://www.cycloboost.com">www.cycloboost.com</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> March 2011 - Present day</li>
						<li><strong>Job type:</strong> Feelance</li>
						<li><strong>References:</strong> Cyril Louiset</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>Cycloboost is a french e-bike manufacturer and distributor.</p>
					<ul>
						<li>Motion design</li>
						<li>Product photography</li>
						<li>Graphic design</li>
						<li>Video montage (filming, editing)</li>
						<li>Web banners & design</li>
					</ul>
				</div>
				<!-- End: Job -->
				
				<div class="ruler"></div>
				
				<!-- Start: Job -->
				<div class="column employer">
					<h3>Sound Engineer</h3>
					<h4><a href="http://www.clubblues.com">www.clubblues.com</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> March 2006 - October 2010</li>
						<li><strong>Job type:</strong> Sound Engineer</li>
						<li><strong>References:</strong> Santiago Vinueza</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>Blues is one of the best latin american nightclubs.[top10]</p>
					<ul>
						<li>Sound design</li>
						<li>Acoustics</li>
						<li>Equipment maitenance</li>
						<li>Light design</li>
						<li>Video montage (filming, editing)</li>
					</ul>
				</div>
			    <!-- End: Job -->
				
				<div class="ruler"></div>
				
				<!-- Start: Job -->
				<div class="column employer">
					<h3>Audio - Video - Photo - Design</h3>
					<h4><a href="#">Quitolab</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> September 2007 - October 2010</li>
						<li><strong>Job type:</strong> Freelance</li>
						<li><strong>References:</strong> ###</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>Quitolab is an ecuadorian digital agency</p>
					<ul>
						<li>Sound design</li>
						<li>Acoustics</li>
						<li>Studio Building</li>
						<li>Photography</li>
						<li>Video</li>
						<li>Graphic/Web design</li>
						<li>Motion graphics</li>
					</ul>
				</div>
			    <!-- End: Job -->
				
				<div class="ruler"></div>
				
				<!-- Start: Job -->
				<div class="column employer">
					<h3>Sound Engineer/Producer/Motion graphics</h3>
					<h4><a href="#">GOZA comunicación</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> February 2006 - September 2007</li>
						<li><strong>Job type:</strong> Full-time</li>
						<li><strong>References:</strong> Erich Gómez Sarrade</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>GOZA comunicación is an ecuadorian communication agency.</p>
					<ul>
						<li>Sound design</li>
						<li>Motion graphics</li>
						<li>Video & Sound production</li>
						<li>Graphic design</li>
					</ul>
				</div>
			    <!-- End: Job -->
			    
			    <div class="ruler"></div>
			    
			    <!-- Start: Job -->
				<div class="column employer">
					<h3>Audio Engineering class</h3>
					<h4><a href="#">TRACK escuela de sonido</a></h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> May 2005 - July 2007</li>
						<li><strong>Job type:</strong> Part-time</li>
						<li><strong>References:</strong> Patricia de la Torre</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>TRACK is an ecuadorian school of recording arts.</p>
					<ul>
						<li>Protools teacher</li>
						<li>Sound designer</li>
						<li>Studio Construction</li>
						<li>Studio recording teacher</li>
					</ul>
				</div>
			    <!-- End: Job -->
				
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 4 - Work Experience -->

		
		<!-- Start: Section 5 - Education -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Education</h2></div>

			<div class="largecolumn studies">
								<!-- Start: Studies -->
								<h3>Academy of Art University (online)</h3>
								<h4 class="mt10">Bachelor of Arts degree in Multimedia Communications.</h4>
								<!-- End: Studies -->
				
				<div class="ruler"></div>
				
								<!-- Start: Studies -->
								<h3>Alianza Francesa, Quito, Ecuador</h3>
								<h4 class="mt10">Digital Photography</h4>
								<!-- End: Studies -->
				
				
				<div class="ruler"></div>
				
								<!-- Start: Studies -->
								<h3>SAE institute, Madrid, Spain.</h3>
								<h4 class="mt10">Bachelor of Arts degree in Audio Engineering</h4>
								<!-- End: Studies -->
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 5 - Education -->


		<!-- Start: Section 6 - Clients and works -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Clients And Portfolio</h2></div>

			<!-- Start: Clients -->
			<div class="column clients">
				<h3><a href="http://www.nodesi9n.com/#portfolio">www.nodesi9n.com</a></h3>
				
			</div>
			<!-- End: Clients -->

			
			<div class="clear"></div>
		</div>
		<!-- Start: Section 6 - Clients and works -->
	</div>

	<!-- Start: CV/Resume options toolbar -->
	<ul class="cvoptions">
		<li><a href="contact-form.php" class="emailbutton" title="Send me an email">3mail</a></li>
		<!--<li><a href="http://pdfmyurl.com?url=<?php echo resume_url(); ?>?version=pdf&amp;-O=Portrait&amp;-s=A4&amp;--filename=juancornejocv.pdf" class="pdfbutton" title="Download my resume as PDF">PDF</a></li>-->
		<li><a href="javascript:print();" class="printbutton" title="Print my resume">Print</a></li>
	</ul>
	<!-- End: CV/Resume options toolbar -->
</body>

</html>