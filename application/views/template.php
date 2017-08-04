<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
		<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


<meta property="og:title" content="Oren Epstein"/>
<meta property="og:type" content="movie"/>
<meta property="og:url" content="http://www.oren-epstein.com"/>
<meta property="og:image" content="http://www.oren-epstein.com/assets/oe_img/NameLogo50h.png"/>
<meta property="og:site_name" content="Oren Epstein"/>
<meta property="fb:admins" content="finespun"/>
<meta property="og:description"
      content="Oren Epstein"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- iOS web-app metas -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="shortcut icon" href="http://www.oren-epstein.com/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab|Ubuntu|Bitter|Antic+Slab|PT+Sans" rel="stylesheet"> 
		
		<title><?php echo $title; ?></title>

		<?php
			
		foreach ($stylesheets as $stylesheet):
		$style = HTML::style($stylesheet);
		echo $style ."\n";

		endforeach;


		foreach ($javascripts as $javascript):
			$script= HTML::script($javascript, NULL, FALSE)."\t\t";
			echo $script."\n";
			
		endforeach;

		

				if(isset($js_tags) AND $js_tags!=''){
						foreach($js_tags as $js){
							$script= HTML::script($js, NULL, FALSE)."\t\t";
							echo $script."\n";
						}
				}
 		?>
			
			
		<!--for any custom scripts needed to be echo'd from controller-->
		<script type="text/javascript"><?php echo $js_custom;?></script> 
	
	</head>

	<body>


<center>	
<div style="background-color: #000; width: 100%;">
<?php echo $header;?>	 
</div>
<?php 

	
		
	?>	
<nav class="navbar nav-tabs navbar-inverse navbar-static-top " role="navigation">
   <div class="container" id="navfluid"><!---changed from container-fluid so that we lose the horizontal scroll-->
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand mb-10"><?php echo $gravatar;?></span>
            <a class="navbar-brand mt-10" href=".">

	            <?php echo $branding;?>
	            
	            </a>
           
       </div>
       
       
       
   

<!--  this is the menu for above--->
       <div class="collapse navbar-collapse" id="navigationbar">
           <ul class="nav navbar-nav navbar-right" id="links">
             
             		<li class="active"><a href="/">Home</a></li>
					<li><a href="/oe/resume">Resume</a></li>
                    <li><a href="/oe/contactme">Contact</a></li>
					<li ><a href="#">&nbsp;</a></li>

           </ul>
      </div>
<!-- /.navbar-collapse -->
   </div> <!---/.container-fluid--->
</nav> 


<!---template content holder--->
<div class="container-fluid">

		<?php echo $layout; ?>

</div>		
	
	</body>

	
<style>
	/* keep the padding down from the template, regardless of what css file you may use in the future*/
.container-fluid {
    padding: 0px;
}
</style>	

	
</html>