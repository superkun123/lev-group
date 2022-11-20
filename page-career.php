<?php
/*
Template Name: Карьера
Template Post Type: page
*/
?>

<?php
get_header();
?>
<?php the_post(); ?>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>
<main class="career-page">

    <div class="container company-container blog-page-container">
        <div class="row">
            <div class="col-lg-2">
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
                <section class="blog-page post-constructor">
                    <div class="post-constructor-head">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <?php

                    // проверяем есть ли данные в гибком содержании
                    if (have_rows('post_custom')):

                        // перебираем данные
                        while (have_rows('post_custom')) : the_row();

                            if (get_row_layout() == 'post_custom_redactor'): ?>

                                <div class="post-redactor post-custom-section">
                                    <?php the_sub_field('post_custom_redactor_item'); ?>
                                </div>

                            <?php elseif (get_row_layout() == 'post_custom_quote'): ?>

                                <div class="post-quote gray-bg post-custom-section">

                                    « <?php the_sub_field('post_custom_quote_item'); ?> »

                                </div>

                            <?php elseif (get_row_layout() == 'post_custom_big_img'): ?>

                                <div class="post-big-img post-custom-section">
                                    <div class="post-big-img-item"
                                         style="background-image: url(<?php the_sub_field('post_custom_big_img_item'); ?>)">
                                    </div>
                                </div>

                            <?php elseif (get_row_layout() == 'post_custom_slider'): ?>

                                <div class="big-image-slider post-custom-section">
                                    <?php $images = get_sub_field('post_custom_slider_item');

                                    if ($images): ?>

                                        <?php foreach ($images as $image): ?>
                                            <div class="big-image-slide">
                                                <img src="<?php echo $image['url']; ?>"
                                                     alt="<?php echo $image['alt']; ?>"/>
                                            </div>
                                        <?php endforeach; ?>

                                    <?php endif; ?>
                                </div>

                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </section>
            </div>
        </div>

    </div>

    <section class="company-news gray-bg">
        <div class="container">
            <h2 class="section-title">НОВОСТИ КОМПАНИИ</h2>
            <div class="news-slider-new">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'company_news',
                    'posts_per_page' => 12 // Значение «-1» выведет все записи, можно поставить целое число, чтобы ограничить вывод конкретным количеством записей.

                );
                $wp_query = new WP_Query($args);
                // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                if (have_posts()) {
                    // перебираем все имеющиеся посты и выводим их
                    while (have_posts()) {
                        the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="news-slide">
                            <div class="news-slide_data">
                                <?php echo the_date(); ?>
                            </div>
                            <div class="news-slide_title">
                                <?php the_title(); ?>
                            </div>
                        </a>

                        <?php
                    }
                    wp_reset_query();
                    ?>

                    <?php
                } // постов нет
                else {
                    echo "<h2>Записей нет.</h2>";
                } ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
