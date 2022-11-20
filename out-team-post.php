<?php
/*
Template Name: Сотрудник
Template Post Type: team
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


<main class="teammate-page">
    <div class="container company-container">
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

                <section class="person">
                    <div class="col-lg-5">
                        <div class="person-img">
                            <?php the_post_thumbnail(); ?>
<!--                            <div class="person-name">-->
<!--                                --><?php //the_title() ?>
<!--                            </div>-->
<!--                            <div class="person-prof">-->
<!--                                --><?php //echo the_field('rang'); ?>
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="person-descript">
                            <h2 class="person-desc-title">
                                <?php the_title() ?>
                            </h2>
                            <?php the_field('team_short_info'); ?>
                        </div>

<!--                        <div class="person-achiv">-->
<!--                            <h2 class="person-achiv-title">-->
<!--                                Достижения в Левъ-аудит-->
<!--                            </h2>-->
<!--                            <div class="row">-->
<!--                                --><?php
//                                if (have_rows('achievment')) : ?>
<!--                                    --><?php //while (have_rows('achievment')) : the_row(); ?>
<!---->
<!--                                        <div class="col-lg-6">-->
<!--                                            <div class="person-achiv-card">-->
<!--                                                <div class="achiv-card-title">-->
<!--                                                    --><?php //echo get_sub_field('achievment_title'); ?>
<!--                                                </div>-->
<!--                                                <p class="achiv-text">-->
<!--                                                    --><?php //echo get_sub_field('achievment_text'); ?>
<!--                                                </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                    --><?php //endwhile; ?>
<!--                                --><?php //endif; ?>
<!---->
<!---->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </section>
            </div>
        </div>
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
                            <div class="news-slide_text">
                                <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
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
