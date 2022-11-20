<?php
/*
Template Name: Главная страница
Template Post Type: page
*/
get_header();
?>
<main class="main-page">

    <section class="about-company">
        <div class="container">
            <div class="row space-between">
            <a href="/about" class="space-between about-company-row not-bg">
                <h1 class="aboust-company__title">О группе компаний</h1>
            </a>
            <div class="about-company__description">
                    <?php echo get_field('company'); ?>
                </div>
            </div>

            <div class="about-company__small-row">
                <div class="about-company__small gray-bg">

                    <div class="mission-img"
                         style="background-image: url(<?php echo the_field('missiya_img'); ?>)"></div>
                    <div class="mission-text">
                        <?php echo the_field('missiya_tekst'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-new">
        <div class="container">
            <div class="row">
                <a href="/services" class="col-lg-12">
                    <h2 class="section-title">Услуги</h2>
                </a>
            </div>

        </div>
        <div class="container">
            <div class="row services-row animation-block">
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
        </div>
    </section>

    <section class="victories-new">
        <div class="container">
            <a href="/category/new_victories/">
                <h2 class="section-title">Наши победы</h2>
            </a>

            <div class="special-row victories-row">
             
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'new_victories',
                        'posts_per_page' => 3 // Значение «-1» выведет все записи, можно поставить целое число, чтобы ограничить вывод конкретным количеством записей.

                    );
                    $wp_query = new WP_Query($args);
                    // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                    if (have_posts()) {
                        // перебираем все имеющиеся посты и выводим их
                        while (have_posts()) {
                            the_post();
                            ?>

                            <div class="victories-slide-slide">
                                <a href="<?php the_permalink(); ?>" class="victories-slide">
                                    <div class="victories-slide__title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="victories-slide__content">
                                      <div class="victories-slide__text">
                                        <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                                      </div>
                                    </div>
                                </a>
                            </div>

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
  
              
                <a href="https://lev-group.ru/category/new_victories/" class="btn main-btn more-btn">Подробнее</a>
           
           

        </div>
    </section>


    <section class="reviews-new">
        <div class="container">
        <h2 class="section-title">Отзывы клиентов</h2>
<div class="row justify-content-between">

<?php
            if (have_rows('rev_repeater')) : ?>
                <?php while (have_rows('rev_repeater')) : the_row(); ?>
      
            <div class="review-block swiper-slide col-lg-4">
                <div class="review-block__header">
                    <img class="review-block__thumb"
                        src="<?php echo get_sub_field('rev_repeater_img'); ?>">
                    <h3 class="review-block__title"><?php echo get_sub_field('rev_repeater_title'); ?> <div
                            class="reviews-slide__prof">
                            <?php echo get_sub_field('rev_repeater_title2'); ?>
                        </div>
                    </h3>
                    
                </div>
                <div class="review-block__body">
                    <div class="review-block__text">
                    <?php echo get_sub_field('rev_repeater_text'); ?>
                    </div>
                  
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>




             
            </div>
        
           
        </div>
    </section>

    <!-- <section class="reviews-new">
        <div class="container">
            <h2 class="section-title">Отзывы клиентов</h2>
            <div class="slider-row">

                <div class="slider">
                    <?php
                    if (have_rows('rev_repeater')) : ?>
                        <?php while (have_rows('rev_repeater')) : the_row(); ?>
                            <div class="reviews-slide">
                                <div class="reviews-slide__title">
                                    <?php echo get_sub_field('rev_repeater_title'); ?>
                                    <div class="reviews-slide__prof">
                                        <?php echo get_sub_field('rev_repeater_title2'); ?>
                                    </div>
                                </div>

                                <div class="reviews-slide_text">
                                    <?php echo get_sub_field('rev_repeater_text'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </section> -->

    <section class="company-news">
        <div class="container">
            <h2 class="section-title">Новости компании</h2>
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
<section class="map">
    <h2 class="map__title">Наша география</h2>
    <div class="map__container"><img src="<?php echo get_template_directory_uri() ?>/img/map.svg" alt="Карта"/></div>
</section>
<?php
get_footer();
?>
