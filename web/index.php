<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/profile.css" type="text/css" media="screen, projection" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

</head>
<?php /* 
<body>
<div class ="nav">
<ul class ="nav">
<li class ="nav"><a href="index.php" class="blocknav">Home</a></li>
<li class ="nav"><a href="index.php?page=res" class="blocknav">Resume</a></li>
<li class ="nav"><a href="index.php?page=project" class="blocknav">Project</a></li>
<li class ="nav"><a href="index.php?page=contact" class="blocknav">Contact</a></li>
<li class ="nav"><a href="index.php?page=more" class="blocknav">More</a></li>
</ul>
</div> */
 ?>

<div>
	<button class="bnav" onclick="loadContent('home.php')" id="bHome">Home</button>
	<button class="bnav" onclick="loadContent('skill.php')" id="bRes">Skill</button>
	<button class="bnav" onclick="loadContent('project.php')" id="bProject">Project</button>
	<button class="bnav" onclick="loadContent('contact.php')" id="bContact">Contact</button>
	<button class="bnav" onclick="loadContent('more.php')" id="bMore">Comments</button>
</div>
<hr>
<button class ="toTop" id="toTop" onclick="goToTop()"><strong>TOP</strong></button>
<div class ="content" id="content">
		<?php
		
			if (isset($_GET["page"]) && $_GET["page"]=="contact") {
				include_once("contact.php");
			}
			else if (isset($_GET["page"]) && $_GET["page"]=="res") {
				include_once("resume.php");
			}
			else if (isset($_GET["page"]) && $_GET["page"]=="more") {
				include_once("more.php");
			}
			else if (isset($_GET["page"]) && $_GET["page"]=="project") {
				include_once("project.php");
			}
			else {
				include_once("home.php");
			}
		
	 	?>
</div>
</body>
</html>
