<?php
/*
Template Name: Достижения
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
<main class="document-page">

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
                <section class="document-section">

                    <h1><?php the_title(); ?></h1>

                    <?php $images = get_field('document_repeater_item');

                    if ($images): ?>
                        <div class="document-container">
                            <?php foreach ($images as $image): ?>
                                <a href="<?php echo $image['url']; ?>" class="document-item" data-fancybox="gallery">
                                    <img class="rounded" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>
                                </a>
                            <?php endforeach; ?>
                        </div>
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
