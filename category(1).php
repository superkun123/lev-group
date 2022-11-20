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

<main class="post-page">
    <aside class="aside-menu">
        <ul class="aside-list">
        <?php wp_nav_menu( array(
	'theme_location' => 'news_menu',
    'fallback_cb' => '__return_empty_string',
    'container'     => 'ul',
    'container_class'   => 'aside-list',
    'container_id'      => 'aside-list'
) );?>
        </ul>
    </aside>
    <div class="post-content">
    <?php
  $currCat = get_category(get_query_var('cat'));
  $cat_name = $currCat->name;
  $cat_id   = get_cat_ID( $cat_name );
?>
        <h2><?php echo $cat_name?></h2>
        <div class="text">
            <div class="victories-post__row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Цикл WordPress -->
<a class="victories-post" href="<?php the_permalink() ?>">
    <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="victories-post__title"><?php the_title()?></h3>
       <div class="victories-post__text"><?php the_excerpt()?>
       </div>
   </a>
<?php endwhile; else : ?>
<p>Записей нет.</p>
<?php endif; ?>       
        </div>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

    </div>
</main>

<?php
get_footer();
?>

