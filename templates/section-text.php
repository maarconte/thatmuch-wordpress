<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       undefined 0.1.0
 *
 */
 ?>

 <section class="section-text
 <? if(get_sub_field('fond') == "Couleur"):?> bg-primary
<? elseif(get_sub_field('fond') == "Gris"):?> bg-light<? endif;?>">

 <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section-title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->
        <!-- Texte -->
        <?php if(get_sub_field('text') ) : ?>
            <div><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>
        <!-- Texte -->
    </div>
 </section>