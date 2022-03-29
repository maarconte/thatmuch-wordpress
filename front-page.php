<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 */

?>

<? get_header(); ?>

  <main class="content-area front-page">
<section class="hero">
	<div class="container">
		<img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" alt="thatmuch logo">
		<h1>We'll be back !</h1>
		<p>THATMUCH est en pleine refonte, le site sera bientôt de retour ! N'hesitez pas à nous contacter pour toute demande.</p>
	</div>
</section>
<section class="contact">
	<div class="container">
		<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/shell.js"></script>
	<script>
	  hbspt.forms.create({
		region: "eu1",
		portalId: "25329660",
		formId: "bd11f958-5279-47cf-8734-74e7124351ab"
	});
	</script>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
						<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/Illustration.png" alt="thatmuch - illustration alien">
			</div>
			<div class="col-sm-4">
				<div class="block">
					<h2>Mission</h2>
					<p><strong>THATMUCH</strong> vous accompagne dans toutes les étapes de votre projet afin d’atteindre vos objectifs et le faire décoller. Notre expertise et expérience dans la <strong>création et le suivi des projets</strong> , nous permettent de mettre en œuvre une réponse efficace à vos demandes.</p>
				</div>
</div>

<div class="col-sm-4">
				<div class="block">
					<h2>Valeurs</h2>
					<p>Nous attachons une importance particulière à <strong>l’humain, l’échange et la collaboration</strong>  avec le client. Notre principale priorité est de satisfaire le client en livrant rapidement et régulièrement des solutions qui apportent de la valeur.</p>
				</div>
</div>
<div class="col-sm-4">
				<div class="block">
					<h2>Vision</h2>
					<p>Nous utilisons les <strong>méthodes agiles</strong>  pour le pilotage et la réalisation de vos projets.</p>
				</div>
</div>
	<div class="col-sm-12 d-flex justify-content-center">
				<a href="https://www.canva.com/design/DAEyc40-uP0/view?utm_content=DAEyc40-uP0&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" class="btn btn-primary" target="_blank">Notre portfolio</a>
</div>
		</div>
	</div>
</section>
  </main>

<? get_footer(); ?>
