<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lion-audit
 */

get_header();
?>

<div class="breadcrumbs">
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
    <h2 class="victories__main-title all-news-title">Все материалы</h2>
        <div class="text">
            <div class="victories-post__row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if (in_category('22')) continue; ?>
<?php if (in_category('20')) continue; ?>
<!-- Цикл WordPress -->
<a class="victories-post" href="<?php the_permalink() ?>">
    <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="victories-post__title"><?php the_title() ?></h3>
       <div class="victories-post__text"><?php the_excerpt()?>
       </div>
   </a>
<?php endwhile; else : ?>
<p>Записей нет.</p>
<?php endif; ?>



       
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</main>

<?php
get_footer();
?>
