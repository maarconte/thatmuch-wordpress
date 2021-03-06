<?
/**
 * Gallery Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>
  <section class="section-gallery">
      <div class="container">
          <!-- Title -->
          <?php if(get_sub_field('title') ) : ?>
             <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
      <?php endif; ?>
     <!-- Title -->
  <?php

$images = get_sub_field('images');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
  <div class="row justify-content-center">
      <?php foreach( $images as $image ): ?>
          <div class=" col-6 col-sm-3">
          <a href="<?php echo $image['url']; ?>" target="_blank">
                   <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>
              </div>
      <?php endforeach; ?>
  </div>
<?php endif; ?>
      </div>
 </section>