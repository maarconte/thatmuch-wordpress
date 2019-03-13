<?
/**
 * Contact Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

  <section id="contact" class="section-contact">
    <div class="container">
<div class="row">

<div class="contact-form  col-sm-6">
      <!-- Title -->
      <?php if(get_sub_field('title') ) : ?>
  <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
<?php endif; ?>
<!-- Title -->
<!-- Contact form -->
    <?php $form = get_sub_field('contact_form');?>
    <?php if($form) : ?>

          <?php echo $form; ?>

    <?php endif; ?>
    <!-- Contact form -->
  </div>
  <div class="col-sm-6 devis-gratuit">
<?php if ( get_sub_field('text') ) : ?>
  <p><?php echo get_sub_field('text'); ?></p>
<?php endif; ?>
<!-- Button -->
<?php if (have_rows('button')) : ?>
            <?php while ( have_rows('button') ) : the_row(); ?>
                <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                    <a href="<?php the_sub_field('url'); ?>" class="btn btn-primary d-block m-auto"><?php the_sub_field('label'); ?></a>
                <?php endif; ?>
                <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                    <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-primary d-block m-auto">
                        <?php the_sub_field('label'); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Button -->

  </div>

</div>
    </div>
 </section>