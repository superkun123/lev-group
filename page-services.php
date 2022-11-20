<?php
/*
Template Name: Услуги
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
<main class="services-page">

<div class="container company-container">
        <div class="row">
            <div class="col-lg-2">
            <?php
                    if (have_rows('left-bar-photo')) : ?>
                        <?php while (have_rows('left-bar-photo')) : the_row(); ?>

               <div class="dir-block">
                   <div class="img" style="background-image: url(<?php get_sub_field('page_service_left_img') ?>)"></div>
                   <div class="quote">
                       <?php get_sub_field('page_service_left_descr') ?>
                   </div>
               </div>

               <?php endwhile; ?>
                    <?php endif; ?>

            </div>  
            <div class="col-lg-10">
                <section class="about-company">
                    <div class="row  space-between about-company-row">
                        <div class="col-lg-12">
                            <div class="about-company__description">
                                <h1 class="about-company-description__title"><?php the_title() ?></h1>
                                <div class="about-company-description__text">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="services-new">
                    <h2 class="section-title">Практики</h2>
                    <div class="services-row animation-block ">
                        <?php
                        $args = array(
                            'post_type' => 'main_service',
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            'posts_per_page' => -1 // Значение «-1» выведет все записи, можно поставить целое число, чтобы ограничить вывод конкретным количеством записей.

                        );
                        $wp_query = new WP_Query($args);
                        // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                        if (have_posts()) {
                            // перебираем все имеющиеся посты и выводим их
                            while (have_posts()) {
                                the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="services-card col-lg">
                                    <div class="services-card__title">
                                        <?php the_title(); ?>
                                    </div>
                                    <img class="services-card__img" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
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
