<?php
/*
Template Name: Новости компании
Template Post Type: page
*/
?>

<?php
get_header();
?>
<div class="container">
    <div class="breadcrumbs">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>

<main class="news-page">
    <div class="container company-container">

        <div class="row">
            <div class="col-lg-2">
                <aside class="aside-menu-new">

                    <aside class="aside-menu-new">

                        <?php wp_nav_menu(array(
                            'theme_location' => 'company_menu',
                            'fallback_cb' => '__return_empty_string',
                            'container' => 'ul',
                            'container_class' => 'aside-list',
                            'container_id' => 'aside-list'
                        )); ?>

                    </aside>
            </div>
            <div class="col-lg-10">
                <section class="news-section">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="team-title">
                                Новости компании
                            </h1>
                        </div>
                    </div>

                    <div class="news-row">
                        <?php
                        $category = get_the_category();
                        $thisCat = $category[0]->slug;

                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $thisCat,
                            'paged'=>$paged,
                            'posts_per_page' => 12 // Значение «-1» выведет все записи, можно поставить целое число, чтобы ограничить вывод конкретным количеством записей.

                        );

                        $wp_query = new WP_Query($args);

                        $argsP = array(
                            'show_all' => true, // показаны все страницы участвующие в пагинации
                            'end_size' => 5,     // количество страниц на концах
                            'mid_size' => 5,     // количество страниц вокруг текущей
                            'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                            'prev_text' => __('« Назад '),
                            'next_text' => __(' Далее »'),
                        );

                         ?>

                        <?php if ($wp_query->have_posts()) { ?>
                            <?php while ($wp_query->have_posts()) {
                                $wp_query->the_post(); ?>
                                <article class="news-item">
                                    <a href="<?php the_permalink() ?>" class="news-block">
                                        <h3 class="news-title"><?php the_title() ?></h3>
                                        <div class="news-text"><?php the_excerpt() ?></div>
                                    </a href="<?php the_permalink() ?>">
                                </article>
                            <?php }
                        } ?>

                    </div>
                    <div class="paging-wrap">
                        <?php
                        $GLOBALS['wp_query']->max_num_pages = $wp_query->max_num_pages;
                        the_posts_pagination($argsP); ?>
                    </div>
                    <?php wp_reset_postdata(); ?>

                </section>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>

