<?php get_header(); ?>

<section class="box-content bg-default header-interna">
	<div class="container">
		<h2 class="title-page">Agenda</h2>
	</div>
</section>

<section class="box-content agenda list">
	<div class="container">		
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
								<?php echo get_the_date(); ?>
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