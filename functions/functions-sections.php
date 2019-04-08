<?php
/**
 * functions to output ACFs flexible content
 *
 * @author     ThatMuch
 * @version    0.1.0
 * @since      undefined 0.1.0
 *
 *
 */


/*==================================================================================
  SETTINGS/SETUP
==================================================================================*/


/* ADD TITLES BLOCKS
/––––––––––––––––––––––––––––––––––––*/
// adds the title sub-field to the ACF-row. Edit `name` at `add_filter` to match your ACF-value.
// » https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
function stanlee_sections_backendtitle( $title, $field, $layout, $i ) {
  if (!empty(get_sub_field('title'))) {
  	$title = get_sub_field('title')." ($title)";
  }
  return $title;
}
add_filter('acf/fields/flexible_content/layout_title/name=sections', 'stanlee_sections_backendtitle', 10, 4);


/* GATHER SECTIONS
/––––––––––––––––––––––––*/
function stanlee_sections() {
  ob_start('sanitize_output');
  if (have_rows('sections')):
    $layouts = get_field('sections', false, false);
    $count = 0;
    $nextSection ="";
    while (have_rows('sections')): the_row();
      if (get_row_layout() == 'text') : stanlee_section_text();getNextSection($layouts, $count);  endif;
      if (get_row_layout() == 'text_image') : stanlee_section_text_img(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'link') : stanlee_section_link(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'services') : stanlee_section_services(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'team') : stanlee_section_team(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'portfolio') : stanlee_section_portfolio(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'testimonials') : stanlee_section_testimonials(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'price') : stanlee_section_price(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'logos') : stanlee_section_logos(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'carousel') : stanlee_section_carousel(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'gallery') : stanlee_section_gallery(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'contact') : stanlee_section_contact(); endif;
      if (get_row_layout() == 'stats') : stanlee_section_stats(); getNextSection($layouts, $count); endif;
      if (get_row_layout() == 'faq') : stanlee_section_faq();getNextSection($layouts, $count);  endif;
      if (get_row_layout() == 'header') : stanlee_section_header(); getNextSection($layouts, $count);  endif;
      $count++;
    endwhile;
  endif;
  return ob_get_flush();
}


function getNextSection($layouts, $count) {
  if (isset($layouts[$count+1])){
    echo ("<p class='next-section'>".array_values($layouts[$count+1])[1]."</p>");
  }
}

/*==================================================================================
  BLOCKS
==================================================================================*/
// add your custom sections here...

/* HEADER
/––––––––––––––––––––––––*/
function stanlee_section_header() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-header.php');
  return ob_get_flush();
}
/* TEXT
/––––––––––––––––––––––––*/
function stanlee_section_text() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text.php');
  return ob_get_flush();
}
/* TEXT + IMAGE
/––––––––––––––––––––––––*/
function stanlee_section_text_img() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text-image.php');
  return ob_get_flush();
}

/* LINK
/––––––––––––––––––––––––*/
function stanlee_section_link() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-link.php');
  return ob_get_flush();
}

/* SERVICES
/––––––––––––––––––––––––*/
function stanlee_section_services() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-services.php');
  return ob_get_flush();
}

/* TEAM
/––––––––––––––––––––––––*/
function stanlee_section_team() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-team.php');
  return ob_get_flush();
}

/* PORTFOLIO
/––––––––––––––––––––––––*/
function stanlee_section_portfolio() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-portfolio.php');
  return ob_get_flush();
}

/* TESTIMONIALS
/––––––––––––––––––––––––*/
function stanlee_section_testimonials() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-testimonials.php');
  return ob_get_flush();
}

/* PRICE
/––––––––––––––––––––––––*/
function stanlee_section_price() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-price.php');
  return ob_get_flush();
}

/* LOGOS
/––––––––––––––––––––––––*/
function stanlee_section_logos() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-logos.php');
  return ob_get_flush();
}

/* CAROUSEL
/––––––––––––––––––––––––*/
function stanlee_section_carousel() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-carousel.php');
  return ob_get_flush();
}

/* GALLERY
/––––––––––––––––––––––––*/
function stanlee_section_gallery() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-gallery.php');
  return ob_get_flush();
}

/* CONTACT
/––––––––––––––––––––––––*/
function stanlee_section_contact() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-contact.php');
  return ob_get_flush();
}

/* STATS
/––––––––––––––––––––––––*/
function stanlee_section_stats() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-stats.php');
  return ob_get_flush();
}

/* FAQ
/––––––––––––––––––––––––*/
function legaware_section_faq() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-faq.php');
  return ob_get_flush();
}

?>