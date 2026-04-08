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
  <h2 style="font-size:38px">Latest Announcements</h2>
  <!-- /wp:heading -->

  <!-- wp:query {"perPage":3,"layout":{"type":"grid","columnCount":3}} -->
  <!-- wp:post-template -->
    <!-- wp:group {"style":{"spacing":{"padding":"28px"},"border":{"radius":"16px"}},"backgroundColor":"white"} -->
    <div class="wp-block-group has-white-background-color has-background" style="border-radius:16px;padding:28px">
      <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px"}}} /-->
      <!-- wp:post-excerpt /-->
      <!-- wp:post-date /-->
    </div>
    <!-- /wp:group -->
  <!-- /wp:post-template -->
  <!-- /wp:query -->

</div>
<!-- /wp:group -->