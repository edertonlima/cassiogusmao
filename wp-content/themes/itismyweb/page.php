<?php get_header(); ?>

<section class="box-content bg-default header-interna">
	<div class="container">
		<h2 class="title-page">Plano de Governo</h2>
	</div>
</section>

<section class="box-content plano-governo">
	<div class="container">
		<h2>Se você quiser, Uruana muda!</h2>
		<p class="sub-titulo">Veja nossas propostas</p>

		<?php if( have_rows('propostas') ): ?>
			<ul class="menu-plano-governo">
				<?php 
					$i = 0;
					while( have_rows('propostas') ): the_row(); 
						$i = $i+1 ?>
						<li rel="#tab-<?php echo $i; ?>" class="<?php if($i == 1){ echo 'active'; } ?>"><?php the_sub_field('area'); ?></li>
					<?php endwhile; 
				?>
			</ul>

			<div class="tabs">
				<?php 
					$i = 0;
					while( have_rows('propostas') ): the_row();
						$i = $i+1 ?>
						<div id="tab-<?php echo $i; ?>" class="tabs-item <?php if($i == 1){ echo 'active'; } ?>">
							<h4><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php the_sub_field('area'); ?></h4>
							<div class="cont-tabs">
								<?php the_sub_field('texto'); ?>
							</div>
						</div>
					<?php endwhile; 
				?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">

	$(document).ready(function(){

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