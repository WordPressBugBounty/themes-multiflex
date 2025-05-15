
<?php
/**
 * Title: Latest News
 * Slug: multiflex/latest-news
 * Categories: multiflex
 */
?>
<!-- wp:group {"metadata":{"name":"Recent News"},"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"30px","left":"30px"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"lower-background","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-lower-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"left","textColor":"primary"} -->
<p class="has-text-align-left has-primary-color has-text-color"><?php echo esc_html__( 'Latest News', 'multiflex' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"2px"},"right":{"color":"var:preset|color|tertiary","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|30"},"margin":{"bottom":"50px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:2px;border-right-color:var(--wp--preset--color--tertiary);border-right-width:2px;margin-bottom:50px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"0px","style":"none"},"right":{"color":"var:preset|color|tertiary","width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"0px","left":"0"}}},"fontSize":"main-title"} -->
<h2 class="wp-block-heading has-text-align-left has-main-title-font-size" style="border-top-color:var(--wp--preset--color--tertiary);border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--tertiary);border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-bottom:0px;margin-left:0;padding-top:0;padding-bottom:0"><?php echo esc_html__( 'Recent News', 'multiflex' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'All News', 'multiflex' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":"3","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"},"border":{"width":"1px","color":"#1A1A1A","radius":"10px"}},"backgroundColor":"background-secondary","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"30rem"}} -->
<div class="wp-block-group alignwide has-border-color has-background-secondary-background-color has-background" style="border-color:#1A1A1A;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"wide","className":"no-padding","style":{"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"10px"}}} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px"},"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"0px","width":"0px","style":"none"}},"textColor":"foreground"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"big"} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":23,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"body-text"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->