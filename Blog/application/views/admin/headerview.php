<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Dev blog</title>
    
    <link href="<?php echoURL('css/style.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echoURL('css/smoothness/jquery-ui-1.8.20.custom.css')?>" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="<?php echoURL('js/jquery-1.7.2.min.js')?>"></script>    
    <script type="text/javascript" src="<?php echoURL('js/jquery-ui-1.8.20.custom.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echoURL('js/tiny_mce/tiny_mce.js')?>"></script>
	
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

    <script type="text/javascript">
        tinyMCE.init({
                theme : "advanced",
                mode : "textareas",
                plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
                
                // Theme options
        		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        		theme_advanced_toolbar_location : "top",
        		theme_advanced_toolbar_align : "left",
        		theme_advanced_statusbar_location : "bottom",
        		theme_advanced_resizing : false,                		
        
        		// Drop lists for link/image/media/template dialogs
        		template_external_list_url : "lists/template_list.js",
        		external_link_list_url : "lists/link_list.js",
        		external_image_list_url : "lists/image_list.js",
        		media_external_list_url : "lists/media_list.js",
        
        		// Style formats
        		style_formats : [
        			{title : 'Bold text', inline : 'b'},
        			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
        			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
        			{title : 'Example 1', inline : 'span', classes : 'example1'},
        			{title : 'Example 2', inline : 'span', classes : 'example2'},
        			{title : 'Table styles'},
        			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        		]                
        });
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
			<li><a href="<?php echoURL('blog')?>" title="dev blog">dev blog</a></li>
			<li><a href="<?php echoURL('contact')?>" title="contact">contact</a></li>
			<li><a href="<?php echoURL('admin')?>" title="admin panel" class="hover">admin panel</a>
                <?php
                    if (isset($_SESSION['admin']))
                    {
                        echo '<a href="'.returnURL('admin/logout').'" title="Log out">Log out</a>';
                    }
                ?>
            </li>
		</ul>
	</div>    