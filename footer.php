<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 */
?>

	</div><!-- #content -->
    <footer class="footer">
      <div class="container">
        <div class="row inner">
        <?php if (have_rows('rs', 'options')) : ?>
        <div class="col-sm-3">
      <ul class="footer-rs">
        <?php while ( have_rows('rs', 'options') ) : the_row(); ?>
          <?php if (get_sub_field('facebook') ) : ?>
              <li>
                <a href="<?php the_sub_field('facebook');?>">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php if (get_sub_field('twitter') ) : ?>
              <li>
                <a href="<?php the_sub_field('twitter');?>">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php if (get_sub_field('instagram') ) : ?>
              <li>
                <a href="<?php the_sub_field('instagram');?>">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php if (get_sub_field('google') ) : ?>
              <li>
                <a href="<?php the_sub_field('google');?>">
                  <i class="fab fa-google" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php if (get_sub_field('linkedin') ) : ?>
              <li>
                <a href="<?php the_sub_field('linkedin');?>">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php if (get_sub_field('youtube') ) : ?>
              <li>
                <a href="<?php the_sub_field('youtube');?>">
                  <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
              </li>
            <?php endif; ?>
        <? endwhile;?>
      </ul>
        </div>
    <? endif;?>
        </div>
      </div>
    <div class="credits">
      <div class="container">
      <div class="inner">
      <? if(is_active_sidebar('footer-1')){
      dynamic_sidebar('footer-1');
        } ?>
     <a href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer" class="theme_logo">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo-thatmuch-B.png" alt="That Much">
    </a>

      </div>
      </div>
    </div>

    </footer>

    <? wp_footer() ?>
  </body>
</html>
