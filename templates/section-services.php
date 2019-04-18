<?
/**
 * Services Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>
<section id="services" class="section-services">
<div class="parallax">
    <div class="water water-layer4"></div>
    <div class="water water-layer300"></div>
    <div class="water water-layer100"></div>
</div>
      <div>
            <div class="row">
                  <div class="col-md-6">
                        <ul class="nav nav-pills service-list" id="service-tabs" role="tablist">
                              <?php if (have_rows('service') ) : $i =0;?>
                             <?php  $image = get_sub_field('icon');
                                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size) ?>
                                    <?php while( have_rows('service') ) : the_row(); ?>
                                          <li class="nav-item col service-list-tab">
                                                <a class="nav-link <?php ($i == 0 ? active : '')?>" id="service-tab-<?= $i ?>-link" data-toggle="tab" data-target="#service-tab-<?= $i ?>" role="tab" aria-controls="service-tab-<?= $i ?>" aria-selected="<?php ($i == 0 ? 'true':'false') ?>">
                                                      <!-- Icon -->
                                                            <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                                                                  <!-- Full size image -->
                                                                  <img  class="service-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                                            <?php endif; ?>
                                                      <!-- Icon -->
                                                      <!-- Icon title -->
                                                            <?php if(get_sub_field('title') ) : ?>
                                                                  <p class="service-title"><?php echo get_sub_field('title'); ?></p>
                                                            <?php endif; ?>
                                                      <!-- Icon title -->
                                                </a>
                                          </li>
                                    <? $i++; endwhile; ?>
                              <? endif;?>
                        </ul>
                  </div>
                  <div class="col-md-6 services_info">
                        <!-- Title -->
                              <?php if(get_sub_field('title') ) : ?>
                                    <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
                              <?php endif; ?>
                        <!-- Title -->
                        <div class="tab-content" id="service-tabs-content">
                        <?php if (have_rows('service') ) : $i =0;?>
                              <?php while( have_rows('service') ) : the_row(); ?>
                                    <div class="tab-pane fade service <?php if($i == 0) {echo 'show active';} ?>" id="service-tab-<?= $i ?>" role="tabpanel" aria-labelledby="service-tab-<?= $i ?>-link">
                                          <!-- Texte -->
                                          <?php if( get_sub_field('slogan_service') ) : ?>
                                                <h3 class="slogan_services"><?php echo get_sub_field('slogan_service'); ?></h3>
                                          <?php endif; ?>
                                          
                                                
                                                <?php if(get_sub_field('text') ) : ?>
                                                      <p class="service-text"> <?php echo get_sub_field('text'); ?></p>
                                                <?php endif; ?>
                                          <!-- Texte -->
                                    </div>
                              <? $i++; endwhile; ?>
                        <? endif;?>
                        </div>
                        <!-- Button -->
                              <?php if (have_rows('button')) : ?>
                                    <?php while ( have_rows('button') ) : the_row(); ?>
                                          <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                                                <a href="<?php the_sub_field('url'); ?>" class="btn btn-primary cta"><?php the_sub_field('label'); ?></a>
                                          <?php endif; ?>
                                          <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                                                <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-primary cta">
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