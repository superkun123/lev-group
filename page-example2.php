<?php
/*
Template Name: обычная страница без полосы
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
<main class="blog-page">


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

                <section class="blog-page">

                    <h1><?php the_title() ?></h1>

                    <?php the_content() ?>



                    <?php
                    if (have_rows('text-left')) : ?>
                        <?php while (have_rows('text-left')) : the_row(); ?>

                            <div class="image-n-text">
                                <div class="col-lg-6">
                                    <div class="img-col">
                                        <img src="<?php echo get_sub_field('text-left_img'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-col">
                                        <p> <?php echo get_sub_field('text-left_text'); ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>



                    <?php
                    if (have_rows('default_slider')) : ?>

                        <div class="big-image-slider">
                            <?php while (have_rows('default_slider')) : the_row(); ?>
                                <div class="big-image-slide">
                                    <img src="<?php echo get_sub_field('default_slider_img'); ?>" alt="">
                                </div>
                            <?php endwhile; ?>

                        </div>
                    <?php endif; ?>
                </section>


            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">

                </div>
            </div>


        </div>


        <div class="container">

        </div>


</main>

<?php
get_footer();
?>

