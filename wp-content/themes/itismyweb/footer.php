	<section class="box-content jingle">
		<div class="container">
			<h4>CONHEÇA NOSSO JINGLE</h4>
			<?php the_field('jingle', 'option'); ?>
		</div>
	</section>

	<footer class="box-content footer">
		<div class="container">
			<span class="copy"><?php the_field('informações_do_rodape', 'option'); ?></span>
			<span class="info">Mais informações: <?php the_field('e-mail_de_contato', 'option'); ?></span>
		</div>
	</footer>
</body>
</html>