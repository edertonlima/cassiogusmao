<?php get_header(); ?>

<section class="box-content bg-default header-interna">
	<div class="container">
		<h2 class="title-page">Notícias</h2>
	</div>
</section>

<section class="box-content noticias">
	<div class="container">
		<article class="noticia">
			<header class="header-noticia">
				<span class="data">
					<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo get_the_date(); ?>
				</span>
				<h3><?php the_title(); ?></h3>
				<div class="social">
					<span class="title">Compartilhe: </span>
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_googleplus_large' displayText='Google +'></span>
					<span class='st_pinterest_large' displayText='Pinterest'></span>
					<span class='st_email_large' displayText='Email'></span>
				</div>
			</header>
			<div class="row">
				<div class="content col col-8">
					<?php 
						if(get_field('video') != ''){ ?>
							<div class="video-noticia">
								<?php the_field('video'); ?>
							</div>
					<?php }else{
							$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
							if($imagem[0]){ ?>
								<img class="img-noticia" src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
							<?php }
						}
					?>
					<?php the_content(); ?>
					<div class="social">
						<span class="title">Compartilhe: </span>
						<span class='st_facebook_large' displayText='Facebook'></span>
						<span class='st_twitter_large' displayText='Tweet'></span>
						<span class='st_linkedin_large' displayText='LinkedIn'></span>
						<span class='st_googleplus_large' displayText='Google +'></span>
						<span class='st_pinterest_large' displayText='Pinterest'></span>
						<span class='st_email_large' displayText='Email'></span>
					</div>
				</div>
				<div class="col col-4">
					<div class="facebook-widget">
						<?php if(get_field('facebook', 'option') != ''){ ?>
							<div class="fb-page" data-href="<?php the_field('facebook', 'option'); ?>" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>

<section class="box-content bg-default noticias">
	<div class="container">
		<h2>Últimas Notícias <a href="<?php echo get_home_url(); ?>/noticias/"><i class="fa fa-plus" aria-hidden="true"></i> Ver mais notícias</a></h2>
		
		<div class="row">

	    <?php
	        $getNoticia = array(
	            'post_type' => 'post',
	            'post_status' => 'any',
	            'orderby'           => date,
	            'order'             => 'DESC',
	            'posts_per_page' => 3
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

<?php get_footer(); ?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-b5032ac-1f13-b8f3-a57c-939948649187", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=677209209084153";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>