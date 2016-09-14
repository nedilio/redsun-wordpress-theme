<?php
/**
 * Template Name: Contacto Template
 */
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
 -->
<!-- <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fondoheader.jpg" alt="Header"> -->

<div class="pageheader text-center">
	<h1>Contacto</h1>
</div>

<div class="mapa container">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11446.400347100684!2d5.2699233439737565!3d44.17410155574725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca645aaf6f7367%3A0xd3f24ac5c0a1bcd!2sMt+Ventoux!5e0!3m2!1sen!2sve!4v1471977061249" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container contactos">
	<div class="row">
		<div class="col-sm-6">
			<p>
				Porque atendemos de una manera rapida, eficiente y segura a nuestros clients ahorrandoles tiempo, recursos y minimizamos el riesgo en su inversion.Con nosotros usted podra importar desde china con seguridad y confianza
			</p>
			<br>
			<p><em><strong>Somos tus ojos en china</strong></em></p>
			<br>
			<address>
				1355 Market Street, Suite 900<br>
				San Francisco, CA 94103<br>
				<br>
				<abbr title="Phone">Telefono:</abbr> (123) 456-7890 <br>
				<br>
				<a class="mail" href="mailto:#">info@redsun.com</a>
			</address>
		</div>
		<div class="col-sm-6">
			<h2 class="envianos">ENVIANOS UN MENSAJE</h2>
<?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]'); ?>

		</div>
	</div>
</div>