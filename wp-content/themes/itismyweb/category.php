<?php get_header(); ?>

<section class="box-content bg-default header-interna">
	<div class="container">
		<h2 class="title-page">Notícias</h2>
	</div>
</section>

<section class="box-content noticias list">
	<div class="container">
		<div class="row">

	    	<?php
	        $getNoticia = array(
	            'post_type' => 'post',
	            'post_status' => 'any',
	            'orderby'           => date,
	            'order'             => 'DESC'
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