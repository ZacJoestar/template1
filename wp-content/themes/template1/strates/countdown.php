<?php
	$cd_background = get_sub_field('countdown_background');
	$cd_title      = get_sub_field('countdown_title');
	$cd_date       = get_sub_field('countdown_txt');
	$cd_overlay    = get_sub_field('countdown_overlay');
?>

<div class="row strate-countdown">
	<div class="col-md-12 jumbotron jumbotron-fluid full-height v-align-center strate-header" <?php echo $cd_background ? 'style="background: url('. $cd_background .') no-repeat center center / cover;"' : ''; ?> >
		<?php echo $cd_overlay == 'yes' ? '<div class="header-overlay"></div>' : '' ?>
		<div class="header-text-wrapper <?php echo $cd_overlay =='yes' ? 'header-text-wrapper--white' : '' ?>">
			<h2 class="countdown-title"><?php echo $cd_title; ?></h2>
			<p class="highlight-white"><?php echo $cd_date; ?></p>
		</div>
        <div class="countdown-container text-center">
            <div class="simply-countdown simply-countdown-one"></div>
        </div>
	</div>
</div>