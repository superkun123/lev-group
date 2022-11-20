<?php
/*
Template Name: О компании
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

<main class="company-page">
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
                <section class="about-company">
                    <div class="space-between about-company-row gray-bg">
                        <div class="about-company__description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--        <div class="row">-->
        <!--            <div class="col-lg-2"></div>-->
        <!--            <div class="col-lg-10">-->
        <!--                <section class="company-group">-->
        <!---->
        <!--                    <h2 class="company-group__title">-->
        <!--                        Группа компаний ОБЪЕДИНЯЕТ-->
        <!--                    </h2>-->
        <!--                    <div class="row space-between">-->
        <!--                        --><?php
        //                        if (have_rows('group_together')) : ?>
        <!--                            --><?php //while (have_rows('group_together')) : the_row(); ?>
        <!--                                <div class="col-lg services-card">-->
        <!--                                    <div class="services-card__title">-->
        <!--                                        --><?php //echo get_sub_field('group_together_title'); ?>
        <!--                                    </div>-->
        <!--                                    <img class="services-card__img"-->
        <!--                                         src="-->
        <?php //echo get_sub_field('group_together_icon'); ?><!--" alt="">-->
        <!--                                </div>-->
        <!--                            --><?php //endwhile; ?>
        <!--                        --><?php //endif; ?>
        <!--                    </div>-->
        <!--                </section>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <section class="company-history">
                    <h2 class="company-history__title">
                        История компании
                    </h2>

<!--                    <div class="company-history__subtitle">-->
<!--                        --><?php //the_field('company_history_descr') ?>
<!--                    </div>-->

                    <div class="tab-header flex-row">
                        <?php
                        $tabInc = 1;
                        if (have_rows('company_history_repeater')) : ?>
                            <?php while (have_rows('company_history_repeater')) : the_row(); ?>
                                <div class="tab-header__container">
                                    <button class="tab-header__item js-tab-trigger" data-tab="<?php echo $tabInc; ?>">
                                        <?php the_sub_field('company_history_repeater_date') ?>
                                    </button>
                                </div>
                                <?php $tabInc++; endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="row row-no-margin">
                        <div class="tab-content">
                            <?php
                            $contentInc = 1;
                            if (have_rows('company_history_repeater')) : ?>
                                <?php while (have_rows('company_history_repeater')) : the_row(); ?>
                                    <div class="tab-content__item js-tab-content" data-tab="<?php echo $contentInc; ?>">
                                        <div class="col-lg-12">
                                            <?php the_sub_field('company_history_repeater_descr') ?>
                                        </div>
                                    </div>
                                    <?php $contentInc++; endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="company-lion">
                    <p class="company-lion__title">«ЛЕВЪ» – сильный по праву</p>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="patnets">
                    <h2 class="partners-title">Партнёры</h2>
                    <div class="partners-logos">
                        <?php
                        if (have_rows('partner_logo_list')) : ?>
                            <?php while (have_rows('partner_logo_list')) : the_row(); ?>
                                <img src="<?php the_sub_field('partner_logo_item') ?>" alt="">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
            <section class="reviews-new">

            <div class="container">
        <h2 class="section-title">Отзывы клиентов</h2>
<div class="row justify-content-between">

<?php
$page_id = 70;
            if (have_rows('rev_repeater',  $page_id)) : ?>
                <?php while (have_rows('rev_repeater',  $page_id)) : the_row(); ?>
      
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
