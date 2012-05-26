<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dev blog</title>
<link href="<?php echoURL('css/style.css')?>" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="<?php echoURL('js/highslide/highslide.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echoURL('js/highslide/highslide.css') ?>" />
	
	<script type="text/javascript">
		//<![CDATA[
		hs.registerOverlay({
			html: '<div class="closebutton" onclick="return hs.close(this)" title="Close"></div>',
			position: 'top right',
			fade: 2 // fading the semi-transparent overlay looks bad in IE
		});
		
		hs.graphicsDir = <?php echoURL('js/highslide/graphics/') ?>;
		hs.wrapperClassName = 'borderless';
		//]]>
	</script>

</head>

<body>
	<div id="topNav" style="width: <?php  
            if (empty($_SESSION['admin']))
            {
                echo '440px';
            }
            else
            {
                echo '518px';
            }
        ?>;">	
		<ul>
			<li><a href="<?php echoURL('home')?>" title="home">home</a></li>
			<li><a href="<?php echoURL('projects')?>" title="my projects">my projects</a></li>
			<li><a href="<?php echoURL('blog')?>" title="dev blog" class="hover">dev blog</a></li>
			<li><a href="<?php echoURL('contact')?>" title="contact">contact</a></li>
			<li><a href="<?php echoURL('admin')?>" title="admin panel">admin panel</a>
                <?php
                    if (isset($_SESSION['admin']))
                    {
                        echo '<a href="'.returnURL('admin/logout').'" title="Log out">Log out</a>';
                    }
                ?>
            </li>
		</ul>
	</div>    