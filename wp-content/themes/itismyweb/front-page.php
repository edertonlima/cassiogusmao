<?php get_header(); ?>

<header class="header box-content" style="background-image: url('<?php the_field('banner_de_fundo', 'option'); ?>');">
	<div class="container">
		<div class="img-header">
			<img src="<?php the_field('imagem_candidato', 'option'); ?>" alt="">
		</div>
	</div>
</header>

<section class="box-content bg-default noticias destaque">
	<div class="container">
		<div class="row">
			<div class="col col-9">
				<h2>Destaque <a href="<?php echo get_home_url(); ?>/noticias/"><i class="fa fa-plus" aria-hidden="true"></i> Ver mais notícias</a></h2>

			    <?php
			        $getNoticia = array(
			            'post_type' => 'post',
			            'post_status' => 'any',
			            'orderby'           => date,
			            'order'             => 'DESC',
			            'posts_per_page' => 1
			        );

			        $noticia = new WP_Query( $getNoticia );

					while($noticia->have_posts()) : $noticia->the_post(); 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

						<a href="<?php the_permalink(); ?>">
							<?php if($imagem[0]){ ?>
								<div class="col col-5">
									<span>
										<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>">
										<div class="saiba-mais">
											<i class="fa <?php if(get_field('video') == ''){ echo 'fa-search'; }else{ echo 'fa-youtube-play'; } ?>" aria-hidden="true"></i>
										</div>
									</span>
								</div>
							<?php } ?>
							<div class="col col-7">
								<h5><?php the_title(); ?></h5>
								<span class="data list">
									<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo get_the_date(); ?>
								</span>
								<p><?php the_field('resumo'); ?></p>
							</div>
						</a>

					<?php endwhile; ?>

			</div>
			<div class="col col-3">
				<div class="facebook-widget">
					<?php if(get_field('facebook', 'option') != ''){ ?>
						<div class="fb-page" data-href="<?php the_field('facebook', 'option'); ?>" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="box-content noticias">
	<div class="container">
		<h2>Notícias <a href="<?php echo get_home_url(); ?>/noticias/"><i class="fa fa-plus" aria-hidden="true"></i> Ver mais notícias</a></h2>
		
		<div class="row">

	    <?php
	        $getNoticia = array(
	            'post_type' => 'post',
	            'post_status' => 'any',
	            'orderby'           => date,
	            'order'             => 'DESC',
	            'posts_per_page' => 3,
	            'offset' => 1
	        );

	        $noticia = new WP_Query( $getNoticia );

			while($noticia->have_posts()) : $noticia->the_post(); 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
				<div class="col col-4">
					<a href="<?php the_permalink(); ?>">
						<?php if($imagem[0]){ ?>
							<span>
								<img src="<?php if($imagem[0]){ echo $imagem[0]; } ?>" alt="<?php the_title(); ?>">
								<div class="saiba-mais">
									<i class="fa <?php if(get_field('video') == ''){ echo 'fa-search'; }else{ echo 'fa-youtube-play'; } ?>" aria-hidden="true"></i>
								</div>
							</span>
						<?php } ?>
						<h5><?php the_title(); ?></h5>
						<span class="data list">
							<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo get_the_date(); ?>
						</span>
						<p><?php the_field('resumo'); ?></p>
					</a>
				</div>

			<?php endwhile; ?>

		</div>
	</div>
</section>

<section class="box-content agenda bg-default">
	<div class="container">
		<h2>Agenda <a href="<?php echo get_home_url(); ?>/agendas/"><i class="fa fa-plus" aria-hidden="true"></i> Ver toda a agenda</a></h2>
		
		<div class="row">
		    <?php
		        $getNoticia = array(
		            'post_type' => 'agendas',
		            'post_status' => 'any',
		            'orderby'           => date,
		            'order'             => 'DESC',
		            'posts_per_page' => 3
		        );

		        $noticia = new WP_Query( $getNoticia );

				while($noticia->have_posts()) : $noticia->the_post(); ?>

					<div class="col col-4">
						<a>
							<span>
								<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
								<?php the_date(); ?>
							</span>
							<h5><?php the_title(); ?></h5>
							<p><?php the_excerpt(); ?></p>
						</a>
					</div>
				
				<?php endwhile; 
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=677209209084153";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">

	/* MENU FIXED */
	var position = '';
	function menuFixed(position){		
		if(position > 1){
			jQuery('.nav').addClass('menu-fixed');
		}else{
			jQuery('.nav').removeClass('menu-fixed');
		}
	}

	$(document).ready(function(){

		/* MENU FIXED */
		position = jQuery(window).scrollTop();
    	menuFixed(position);
	    jQuery(window).scroll(function(){
	    	position = jQuery(window).scrollTop();
	    	menuFixed(position);
	    });

	    /* TABS HOME */	    
	    var height_tabs = ($('.plano-governo').height()) + 20;
	    $('.tabs-item').css('min-height',(height_tabs+'px'));

	    $('.plano-governo li').click(function(){
	    	var tabs_item = $(this).attr('rel');
	    	$('.tabs-item').removeClass('active');
	    	$('.plano-governo li').removeClass('active');

	    	$(this).addClass('active');
	    	$(tabs_item).addClass('active');
	    });

	});	

</script>

<!-- Scrolling Nav JavaScript -->
<script src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript">
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	jQuery(function() {
	    jQuery('.scroll').bind('click', function(event) {
	        var anchor = jQuery(this);
	        var position = (jQuery(anchor.attr('href')).offset().top)-110;
	        jQuery('html, body').stop().animate({
	            scrollTop: position
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
	});
</script>