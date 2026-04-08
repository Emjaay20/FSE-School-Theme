<?php
/**
 * Title: Hero Section
 * Slug: edupress/hero
 * Categories: featured
 */

$hero_image_url = esc_url( get_theme_file_uri( 'screenshot.png' ) );
?>
<!-- wp:cover {"url":"<?php echo $hero_image_url; ?>","dimRatio":50,"overlayColor":"navy","minHeight":620,"contentPosition":"center center"} -->
<div class="wp-block-cover" style="min-height:620px">
  <span aria-hidden="true" class="wp-block-cover__background has-navy-background-color has-background-dim-50 has-background-dim"></span>
  <img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Students in classroom', 'edupress' ); ?>" src="<?php echo $hero_image_url; ?>" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","style":{"typography":{"fontSize":"62px"}}} -->
    <h1 class="has-text-align-center has-white-color" style="font-size:62px"><?php echo esc_html__( 'Welcome to EduPress', 'edupress' ); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center","textColor":"white","style":{"typography":{"fontSize":"24px"}}} -->
    <p class="has-text-align-center has-white-color" style="font-size:24px"><?php echo esc_html__( 'Empowering Schools with Modern Technology', 'edupress' ); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"teal","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"36px","right":"36px"}}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-teal-background-color has-background"><?php echo esc_html__( 'Get Started', 'edupress' ); ?></a></div>
      <!-- /wp:button -->
      <!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color"><?php echo esc_html__( 'Browse Announcements', 'edupress' ); ?></a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
</div>
<!-- /wp:cover -->