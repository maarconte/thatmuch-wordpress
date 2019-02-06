<?
/**
 * Header Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

<? $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

 <section class="section-header">
<img class="section-header-logo" src="<?php echo $image[0]?>" alt="that_much">
<h2 class="section-header-description"><?php echo get_bloginfo( 'description' ); ?></h2>
        <!-- Button -->
        <?php if (have_rows('call_to_action_1')) : ?>
            <?php while ( have_rows('call_to_action') ) : the_row(); ?>
                <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                    <a href="<?php the_sub_field('url'); ?>" class="btn btn-primary"><?php the_sub_field('label'); ?></a>
                <?php endif; ?>
                <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                    <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-primary">
                        <?php the_sub_field('label'); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Button -->
        <!-- Button -->
        <?php if (have_rows('call_to_action_2')) : ?>
            <?php while ( have_rows('call_to_action') ) : the_row(); ?>
                <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                    <a href="<?php the_sub_field('url'); ?>" class="btn btn-outline-light"><?php the_sub_field('label'); ?></a>
                <?php endif; ?>
                <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                    <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-outline-light">
                        <?php the_sub_field('label'); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Button -->
 </section>