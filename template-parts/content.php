<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lion-audit
 */

?>
  

<div class="single-post__container content" href="<?php the_permalink() ?>">
    <div class="single-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="single-post__title"><?php the_title() ?></h3>
       <p class="single-post__text"><?php the_content()?>
       </p>
   </div>