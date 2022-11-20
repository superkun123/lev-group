<?php
/*

*/
?>

<?php
get_header();
?>

<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>
<?php the_post(); ?>

<main class="post-page">
    <aside class="aside-menu">
        <ul class="aside-list">
            <?php wp_nav_menu(array(
                'theme_location' => 'news_menu',
                'fallback_cb' => '__return_empty_string',
                'container' => 'ul',
                'container_class' => 'aside-list',
                'container_id' => 'aside-list'
            )); ?>
        </ul>
    </aside>
    <div class="post-content">
        <div class="text">
            <h2 class="victories__main-title">Полезные материалы</h2>
            <div class="victories-post__row">
                <?php // параметры по умолчанию
                $posts = get_posts(array(
                    'numberposts' => 0,
                    'category' => -19,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <a class="victories-post" href="<?php the_permalink() ?>">
                        <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="victories-post__title"><?php the_title() ?></h3>
                        <div class="victories-post__text"><?php the_excerpt() ?>
                        </div>
                    </a>
                    <?php
                    echo paginate_links(
                        array(
                            'prev_text' => '&larr; Сюда',
                            'next_text' => 'Туда &rarr;',
                        )
                    );
                }

                wp_reset_postdata(); // сброс
                ?>
                <?php if ($wp_query->max_num_pages > 1) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                        console.log('1')
                    </script>
                    <div id="true_loadmore">Загрузить ещё</div>
                <?php endif; ?>


            </div>
        </div>
</main>

<?php
get_footer();
?>
