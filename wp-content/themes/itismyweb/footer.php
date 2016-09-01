	<section class="box-content new">
		<form action="#">
			<fieldset>
				<h4>RECEBA AS ÚLTIMAS NOTÍCIAS NO SEU E-MAIL</h4>
				<input type="text" name="" placeholder="Digite seu melhor e-mail">
				<button type="submit">ENVIAR</button>
			</fieldset>
		</form>
	</section>

	<footer class="box-content footer">
		<div class="container">
			<span class="copy"><?php the_field('informações_do_rodape', 'option'); ?></span>
			<span class="info">Mais informações: <?php the_field('e-mail_de_contato', 'option'); ?></span>
		</div>
	</footer>
</body>
</html>