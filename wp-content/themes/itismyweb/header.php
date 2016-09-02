<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon">
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo get_bloginfo('description') ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="My Web" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?>" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title><?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		/* OPEN/CLOSE MENU */
		$('#menuCompacto').click(function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$('#menu-principal').removeClass('active');
				$('.redes-sociais').removeClass('active');
			}else{
				$(this).addClass('active');
				$('#menu-principal').addClass('active');
				$('.redes-sociais').addClass('active');
			}
		});

	});	

</script>

</head>
<body>

	<nav class="nav <?php if(!is_home()){ echo 'menu-fixed'; }?>">
		<div class="container">
			<h1><a href="<?php echo get_home_url(); ?>" title="<?php echo get_bloginfo('name') ?>">
				<img src="<?php the_field('logo', 'option'); ?>" alt="<?php echo get_bloginfo('name') ?>">
			</a></h1>

			<div class="menu">				
				<?php 
					$redes_sociais = '<div class="redes-sociais">';
					if(get_field('facebook', 'option') != ''){
						$redes_sociais.='<a href="'.get_field('facebook', 'option').'" title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>';
					}
					if(get_field('instagran', 'option') != ''){
						$redes_sociais.='<a href="'.get_field('instagran', 'option').'" title="Instagran" class="instagran" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
					}
					$redes_sociais.= '</div>';
					wp_nav_menu(array(
						'menu'           => 'Menu',
					    'theme_location' => 'primary',
					    'items_wrap'     => '<a id="menuCompacto"><span></span></a><ul class="menu" id="menu-principal">%3$s</ul>'.$redes_sociais
					)); 
				?>
			</div>
		</div>
	</nav>