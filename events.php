<?php
/*
Template Name: Мероприятия
Template Post Type: page
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
<main class="our-team-page event-page">
    <h2 class="victories__main-title">Мероприятия</h2>
    <div class="victories-post__row">
        <?php // параметры по умолчанию
        $posts = get_posts(array(
            'numberposts' => 0,
            'category' => 20,
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($posts

        as $post){
        setup_postdata($post);
        ?>
        <div class="victories-post">
            <a class="permalink" href="<?php the_permalink() ?>">
                <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
                <h3 class="victories-post__title"><?php the_title() ?></h3>
                <p class="date"><?php the_field('дата'); ?></p>
                <p class="place"><?php the_field('место'); ?></p>
            </a>
            <?php the_field('программа'); ?>
        </div>
    </div>
    <?php the_posts_pagination(); ?>
    <?php
    }

    wp_reset_postdata(); // сброс
    ?>
    </div>

    <section class="company-news">
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
                            <!--                            <div class="news-slide_text">-->
                            <!--                                --><?php //echo wp_trim_words(get_the_content(), 15, '...'); ?>
                            <!--                            </div>-->
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
