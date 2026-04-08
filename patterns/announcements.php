<?php
/**
 * Title: Announcements Section
 * Slug: edupress/announcements
 * Categories: featured
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px">

  <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"38px"}}} -->
  <h2 style="font-size:38px"><?php echo esc_html__( 'Latest Announcements', 'edupress' ); ?></h2>
  <!-- /wp:heading -->

  <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"grid","columns":3}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"}},"border":{"radius":"16px","width":"1px","color":"#e2e8f0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-white-background-color has-background" style="border-color:#e2e8f0;border-width:1px;border-radius:16px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px">
        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px"}}} /-->
        <!-- wp:post-excerpt /-->
        <!-- wp:post-date /-->
      </div>
      <!-- /wp:group -->
    <!-- /wp:post-template -->
  </div>
  <!-- /wp:query -->

</div>
<!-- /wp:group -->