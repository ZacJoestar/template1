<?php
	$icon         = get_sub_field('presentation_icon');
	$title        = get_sub_field('presentation_title');
	$text         = get_sub_field('presentation_text');
	$highlight    = get_sub_field('presentation_highlight');
	$img_left     = get_sub_field('presentation_image_left');
	$img_right    = get_sub_field('presentation_image_right');
	$img_icon     = get_sub_field('presentation_icon_images');
?>

<div class="row text-center strate-presentation">
	<div class="col-xs-12 offset-md-2 col-md-8">
		<?php echo $icon ? '<img src=' . $icon .' alt="" class="nature-icon">' : '' ?>
		<?php echo $title ? '<h2 class="strate-title">' . $title . '</h2>' : '' ?>
		<?php echo $text ? '<p class="paragraph">' . $text . '</p>' : '' ?>
		<?php echo $text ? '<p class="highlight">' . $highlight . '</p>' : '' ?>
	</div>
    <div class="offset-md-2 col-md-8 presentation-wrapper-imgs">
        <div class="row">
            <?php if($img_left) : ?>
                <div class="col-xs-12 col-md-5">
                    <div class="round-img-wrapper">
                        <img src="<?php echo $img_left ?>" alt="">
                    </div>
                    <p class="text-center caption">Zouzou le coquin</p>
                </div>
            <?php endif; ?>
            <?php if($img_icon) : ?>
                <div class="col-xs-12 col-md-2">
                    <div class="round-img-wrapper--icon">
                        <img src="<?php echo $img_icon ?>" alt="">
                    </div>
                </div>
            <?php endif; ?>
            <?php if($img_right) : ?>
                <div class="col-xs-12 col-md-5">
                    <div class="round-img-wrapper">
                        <img src="<?php echo $img_right ?>" alt="">
                    </div>
                    <p class="text-center caption">Zouzou le coquin</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
