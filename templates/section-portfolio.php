<?
/**
 * Portfolio Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

  <section id="portfolio" class="section-portfolio">
      <div class="container">
          <!-- Title -->
          <?php if(get_sub_field('title') ) : ?>
              <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
          <?php endif; ?>

          <?php if(get_sub_field('slogan_title') ) : ?>
              <h3 class="slogan-portfolio"><?php echo get_sub_field('slogan_title'); ?></h3>
          <?php endif; ?>

          <!-- Title -->
          <!-- Portfolio -->
          <?php
            $args = array(
            'post_type' => 'portfolio'
            );
             $the_query = new WP_Query($args);
            if ($the_query->have_posts() ): ?>
            <div class="grid">
              <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
              <div class="project">
                  <a  class="d-block h-100 w-100" href="<?php the_permalink()?>">
                      <img  src="<?php the_post_thumbnail_url( 'full' )?>" alt="">
                    </a>
                    <h5 class="project-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h5>
              </div>
              <?php $i++; endwhile;?>
            </div>
            <? endif; wp_reset_query();?>
          <!-- Portfolio -->
      </div>
 </section>