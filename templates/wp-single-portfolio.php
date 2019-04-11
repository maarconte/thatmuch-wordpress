<?
/**
 * The template for displaying all single posts and attachments
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 */
?>


<? get_header(); ?>
<section class="page-projet">
<div class="container-projet">
    <div class="part_slider">
    <?php 
              $images = get_field('galerie_projet');
              $size = 'full';
              if( $images ): ?>

              <div id="carousel-indicators-projets" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                  <?php foreach( $images as $image ): 
                    $projet = 0; 
                    ?>      
                    <li data-target="#carousel-indicators-projets" data-slide-to="<?php echo $projet++; ?>"></li>
                    <?php endforeach; ?> 
                  </ol>

                  <div class="carousel-inner carousel-inner-projet">
                  <?php foreach( $images as $image ): ?>
                    <div class="carousel-projet carousel-item" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                  <?php endforeach; ?> 
                  </div>
                    
                  <a class="carousel-control-prev" href="#carousel-indicators-projets" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-indicators-projets" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              
              <?php else: ?>
              <div class="img-basic" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'post-thumbnail')); ?>')"></div>
              <?php endif; ?> 
    </div>
    <div class="info_projet">
      <h2 class="title-projet"><?php the_title(); ?></h2>
      <div class="title-line"></div>
      <?php if( get_field('projet') ): ?> 
      <p><?php the_field('projet'); ?></p>
      <?php endif; ?>
      <?php if( get_field('mission') ): ?> 
      <div class="block-mission">
        <h3>Notre mission</h3>
        <p><?php the_field('mission'); ?></p>
      </div>
      <?php endif; ?>
    </div>
  </div>

</section>
<? get_footer(); ?>


<script>
  $(".carousel-indicators li").first().addClass("active");
   $(".carousel-inner-projet .carousel-item").first().addClass("active");
</script>



