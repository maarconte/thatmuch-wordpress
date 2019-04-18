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



<!-- <img src='http://thatmuch.local/wp-content/uploads/2019/04/Tatooin.png'> -->
 <section class="section-header">
 <div class="parallax">
    <div data-offset="35" class="decors decors-layer4" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/fond-pointss-2.png);"></div>
    <div data-offset="20" class="decors decors-layer4" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/fond-points-1.png);"></div>
    <div data-offset="30" class="decors decors-layer3" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/planete.png);"></div>
    <div data-offset="10" class="decors decors-layer2" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/Saturne.png);"></div>
    <div data-offset="33" class="decors decors-layer1" style="background-image: url(<?php echo site_url(); ?>/wp-content/themes/thatmuch-wordpress/assets/images/Tatooin.png);"></div>
</div>
     <div class="home-info">
         <img class="section-header-logo" src="<?php echo $image[0]?>" alt="that_much">
         <h2 class="section-header-description"><?php echo get_bloginfo( 'description' ); ?></h2>
                 <!-- Button -->
                 <?php if (have_rows('call_to_action_1')) : ?>
                     <?php while ( have_rows('call_to_action_1') ) : the_row(); ?>
                         <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                             <a href="<?php the_sub_field('url'); ?>" class="btn btn-primary mr-4"><?php the_sub_field('label'); ?></a>
                         <?php endif; ?>
                         <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                             <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-primary mr-4">
                                 <?php the_sub_field('label'); ?>
                             </a>
                         <?php endif; ?>
                     <?php endwhile; ?>
                 <?php endif; ?>
                 <!-- Button -->
                 <!-- Button -->
                 <?php if (have_rows('call_to_action_2')) : ?>
                     <?php while ( have_rows('call_to_action_2') ) : the_row(); ?>
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
 </section>

<!-- <script>
     var currentX = '';
var currentY = '';
var movementConstant = .008;
$(document).mousemove(function(e) {
  if(currentX == '') currentX = e.pageX;
  var xdiff = e.pageX - currentX;
  currentX = e.pageX;
   if(currentY == '') currentY = e.pageY;
  var ydiff = e.pageY - currentY;
  currentY = e.pageY; 
  $('.parallax div').each(function(i, el) {
      var movement = (i + 1) * (xdiff * movementConstant);
	  var movementy = (i + 1) * (ydiff * movementConstant);
      var newX = $(el).position().left + movement;
	  var newY = $(el).position().top + movementy;
      $(el).css('left', newX + 'px');
	  $(el).css('top', newY + 'px');
  });
});
</script> -->

<script>
    $(window).on('mousemove', function(e){
  var w = $(window).width();
  var h = $(window).height();
  
  var offsetX = 0.5 - e.pageX / w;
  var offsetY = 0.5 - e.pageY / h;
    
  $('.decors').each(function(i, el){
    var offset = parseInt($(el).data('offset'));
    
    var translate = "translate3d("+ Math.round(offsetX * offset) + "px," + Math.round(offsetY * offset) + "px, 0px";
    
    
    $(el).css({
      'transform':translate
    })
  })
})

</script>