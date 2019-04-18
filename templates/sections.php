<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 *
 */
?>
<? /* Template Name: Sections */ ?>

<? get_header(); ?>
<div class="parallax parallax-fond">
    <div data-offset="35" class="decors decors-layer5" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/fond-points-2.png);"></div>
    <div data-offset="21" class="decors decors-layer4" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/fond-etoile-1.png);"></div>
</div>
<main id="sections">

  <? if (have_posts()): while (have_posts()): the_post() ?>

    <? stanlee_sections() ?>
  <? endwhile; endif ?>

</main>

<? get_footer() ?>
