<?php
	$form = get_field('formulaire');
?>

<div class="row strate-formulaire">
	<div class="strate-formulaire--title-wrapper offset-md-2 col-md-8 text-center">
		<img src="<?php echo get_template_directory_uri() . '/images/nature-2-pink.png'?>" alt="" class="icon nature-icon">
		<h2 class="strate-title">Vous êtes invités</h2>
		<!-- /.strate-title -->
		<p class="paragraph--fancy">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis doloribus ea, ex inventore iusto nesciunt quasi voluptas!
		</p>
		<!-- /.paragraph--fancy -->
	</div>
	<div class="strate-formulaire--form-wrapper offset-md-2 col-md-8 text-center">
		<?php echo $form ?>
	</div>
	<!-- /.strate-formulaire--form-wrapper offset-md-2 col-md-8 text-center -->
</div>