<?
/**
 * Texte-Image Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

  <section id="about" class="section-text-image">
      <div>
          <div class="row">
              <div class="col-md-6 p-0">
                    <!-- Title -->
                    <?php if(get_sub_field('title') ) : ?>
                     <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
              <?php endif; ?>
             <!-- Title -->
              </div>
          </div>

            <div class="row">
                <div class="col-md-6 section-text">
                    <div>
                    <!-- Text -->
                        <?php if(get_sub_field('text') ) : ?>
                        <div class="text"><?php echo get_sub_field('text'); ?></div>
                        <?php endif; ?>
                    <!-- Text -->
                        <!-- Button -->
                    <?php if (have_rows('button')) : ?>
                        <?php while ( have_rows('button') ) : the_row(); ?>
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
                    </div>
                </div>
                <div class="col-md-6 section-image">
                    <?php if(get_sub_field('image') ) : $img = get_sub_field('image');?>
                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
                    <?php endif;?>
                </div>
            </div>
      </div>
 </section>