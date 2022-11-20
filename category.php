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
                            'theme_location' => 'news_menu',
                            'fallback_cb' => '__return_empty_string',
                            'container' => 'ul',
                            'container_class' => 'aside-list',
                            'container_id' => 'aside-list'
                        )); ?>

                    </aside>
            </div>
            <div class="col-lg-10">
                <section class="news-section">

                    <?php
                    $currCat = get_category(get_query_var('cat'));
                    $cat_name = $currCat->name;
                    $cat_id = get_cat_ID($cat_name);
                    $cat_category = 'new_victories'
                    //   $cat_slug = $currCat->slug;
                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="team-title">
                                <?php echo $cat_name; ?>
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

                        $argsP = array(
                            'show_all' => true, // показаны все страницы участвующие в пагинации
                            'end_size' => 5,     // количество страниц на концах
                            'mid_size' => 5,     // количество страниц вокруг текущей
                            'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                            'prev_text' => __('« Назад '),
                            'next_text' => __(' Далее »'),
                            'screen_reader_text' => __('Posts navigation'),
                        );

                        $wp_query = new WP_Query($args); ?>

                        <?php if ($wp_query->have_posts()) { ?>
                            <?php while ($wp_query->have_posts()) {
                                $wp_query->the_post(); ?>

                                <?php if (get_field('post_outher_link')) : ?>
                                    <article class="news-item">
                                        <a href="<?php the_field('post_outher_link'); ?>" class="news-block">
                                            <h3 class="news-title" style="margin-bottom: 0"><?php the_title(); ?></h3>
                                        </a href="<?php the_permalink(); ?>">
                                    </article>
                                <?php else: ?>
                                    <article class="news-item">
                                        <a href="<?php the_permalink(); ?>" class="news-block">
                                            <h3 class="news-title"><?php the_title(); ?></h3>
                                            <div class="news-text"><?php the_excerpt(); ?></div>
                                        </a href="<?php the_permalink(); ?>">
                                    </article>
                                <?php endif; ?>

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

