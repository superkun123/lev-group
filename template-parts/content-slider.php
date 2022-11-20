<?php
/*
Template Name: Новость в слайдере
Template Post Type: post
*/
?>
<?php
get_header();
?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
<? the_post(); ?>
<main id="primary" class="single-post gxs">
<div class="single-post__container" href="<?php the_permalink() ?>">
    <div class="single-post__img slider-post-img"><?php the_post_thumbnail(); ?></div>
       <h3 class="single-post__title"><?php the_title() ?></h3>
       <p class="single-post__text"><?php the_content()?>
       </p>
   </div>
   </main>




   <?php
get_footer();
?>
