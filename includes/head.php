<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="icon" href="" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="language" content="pt-br" />
<meta name="title" content="" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		/* OPEN/CLOSE MENU */
		$('.menu-mobile').click(function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$('.nav').css('top','-100vh');
				$('.submenu').hide();
			}else{
				$(this).addClass('active');
				$('.nav').css('top','0');
			}
		});

		/* SUB MENU */
		$('.menu-item-has-children a').click(function(){
			$('.sub-menu').toggle();
		});

	});	

</script>

</head>
<body>