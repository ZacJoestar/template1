<div class="row strate-ceremonie">
	<?php if(have_rows('event_card')):
			while(have_rows('event_card')) : the_row();

				$image          = get_sub_field('event_image');
				$title          = get_sub_field('event_title');
				$date           = get_sub_field('event_date');
				$day            = get_sub_field('event_day');
				$hour_start     = get_sub_field('event_hour_start');
				$hour_end       = get_sub_field('event_hour_end');
				$icon           = get_sub_field('event_icon');
				$text           = get_sub_field('event_text');
				$url            = get_sub_field('event_url');
	?>
    <div class="col-md-4 offset-md-2 ceremonie-card">
        <div class="ceremonie-card__image-wrapper">
            <img src="<?php echo $image ?>" alt="" class="ceremonie-card__image">
        </div>
        <div class="ceremonie-card__wrapper">
            <div class="ceremonie-card__inner">
                <div class="ceremonie-card__header">
                    <h3 class="ceremonie-card__title"><?php echo $title ?></h3>
                </div>
                <div class="ceremonie-card__dates">
                    <div class="ceremonie-card__days">
                        <i class="far fa-calendar-alt"></i>
                        <span><?php echo $day ?></span>
                        <span><?php echo $date ?></span>
                    </div>
                    <div class="ceremonie-card__icon-wrapper">
                        <img src="<?php echo $icon ?>" alt="" class="heart-icon">
                    </div>
                    <div class="ceremonie-card__hours">
                        <i class="far fa-clock"></i>
                        <span><?php echo $hour_start ?></span>
                        <span><?php echo $hour_end ?></span>
                    </div>
                </div>
                <div class="ceremonie-card__text">
                    <p>
	                    <?php echo $text ?>
                    </p>
                </div>
                <div class="ceremonie-card__footer text-center">
                    <a href="<?php echo $url ?>" class="button"><span>En savoir plus</span></a>
                </div>
            </div>
        </div>
    </div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
