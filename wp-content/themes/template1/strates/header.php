<?php
    $background = get_sub_field('header_bg');
    $title      = get_sub_field('main_title');
    $subtitle   = get_sub_field('subtitle');
    $icon       = get_sub_field('header_icon');
    $overlay    = get_sub_field('header_overlay');
?>

<div class="row">
	<div class="col-md-12 jumbotron jumbotron-fluid full-height v-align-center strate-header" <?php echo $background ? 'style="background: url('. $background .') no-repeat center center / cover;"' : ''; ?> >
        <?php echo $overlay == 'yes' ? '<div class="header-overlay"></div>' : '' ?>
        <div class="header-text-wrapper <?php echo $overlay =='yes' ? 'header-text-wrapper--white' : '' ?>">
            <?php echo $icon ? '<img src="' . $icon . '" alt="" class="nature-icon">' : '' ?>
            <h2 class="text-center fancy-title">mariage de</h2>
            <h1 class="text-center"><?php echo $title ? $title : '' ?></h1>
            <p class="text-center header-date"><?php echo $subtitle ? $subtitle : '' ?></p>
        </div>
	</div>
</div>

