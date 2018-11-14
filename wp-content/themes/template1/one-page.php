<?php
/**
 * Template Name: One page template
 * Created by PhpStorm.
 * User: Clément Hmich
 * Date: 02/10/2018
 * Time: 14:25
 */

get_header();

?>

<div class="container-fluid">
    <?php while(have_posts()) : the_post() ?>
        <?php while(have_rows('header') ) : the_row()  ?>
            <?php get_template_part('strates/header'); ?>
        <?php endwhile; ?>
	    <?php while(have_rows('presentation') ) : the_row()  ?>
	        <?php get_template_part('strates/presentation'); ?>
        <?php endwhile; ?>
	    <?php while(have_rows('countdown') ) : the_row()  ?>
		    <?php get_template_part('strates/countdown'); ?>
	    <?php endwhile; ?>
	    <?php get_template_part('strates/ceremonie'); ?>
	    <?php get_template_part('strates/formulaire'); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>