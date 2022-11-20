<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lion-audit
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">
    <title>ЛЕВЪ & ЛЕВЪ-АУДИТ юридические услуги, опыт с 1991 года - группа компаний ЛЕВЪ & ЛЕВЪ-АУДИТ</title>
    <meta name='robots' content='index, follow' />
    <meta name="description" CONTENT="Бухгалтерские, аудиторские, юридические услуги для бизнеса и частных лиц.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/logo.png"/>
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K4FQL8M78B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-K4FQL8M78B');
    </script>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="container">
        <div class="flex-row space-between align-center">
            <div class="logo-container-new">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/white-logo.svg" alt="Логотип">
                </a>
            </div>
            <div class="front-menu">
                <!--                <button class="search">-->
                <!---->
                <!--                </button>-->
                <?php
                $args = array(
                    'post_type' => 'contacts',
                    'posts_per_page' => 1
                );
                $wp_query = new WP_Query($args);
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="header-contacts">
                            <a href="tel:<?php the_field('contacts_phone') ?>" class="front-tel header-contact">
                                <?php the_field('contacts_phone') ?>
                            </a>
                            <a href="mailto:<?php the_field('contacts_email') ?>" class="front-email header-contact">
                                <span class="front-email-icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 100.354 100.352"
                                         style="enable-background:new 0 0 100.354 100.352;" xml:space="preserve">
<path d="M93.09,76.224c0.047-0.145,0.079-0.298,0.079-0.459V22.638c0-0.162-0.032-0.316-0.08-0.462
	c-0.007-0.02-0.011-0.04-0.019-0.06c-0.064-0.171-0.158-0.325-0.276-0.46c-0.008-0.009-0.009-0.02-0.017-0.029
	c-0.005-0.005-0.011-0.007-0.016-0.012c-0.126-0.134-0.275-0.242-0.442-0.323c-0.013-0.006-0.023-0.014-0.036-0.02
	c-0.158-0.071-0.33-0.111-0.511-0.123c-0.018-0.001-0.035-0.005-0.053-0.005c-0.017-0.001-0.032-0.005-0.049-0.005H8.465
	c-0.017,0-0.033,0.004-0.05,0.005c-0.016,0.001-0.032,0.004-0.048,0.005c-0.183,0.012-0.358,0.053-0.518,0.125
	c-0.01,0.004-0.018,0.011-0.028,0.015c-0.17,0.081-0.321,0.191-0.448,0.327c-0.005,0.005-0.011,0.006-0.016,0.011
	c-0.008,0.008-0.009,0.019-0.017,0.028c-0.118,0.135-0.213,0.29-0.277,0.461c-0.008,0.02-0.012,0.04-0.019,0.061
	c-0.048,0.146-0.08,0.3-0.08,0.462v53.128c0,0.164,0.033,0.32,0.082,0.468c0.007,0.02,0.011,0.039,0.018,0.059
	c0.065,0.172,0.161,0.327,0.28,0.462c0.007,0.008,0.009,0.018,0.016,0.026c0.006,0.007,0.014,0.011,0.021,0.018
	c0.049,0.051,0.103,0.096,0.159,0.14c0.025,0.019,0.047,0.042,0.073,0.06c0.066,0.046,0.137,0.083,0.21,0.117
	c0.018,0.008,0.034,0.021,0.052,0.028c0.181,0.077,0.38,0.121,0.589,0.121h83.204c0.209,0,0.408-0.043,0.589-0.121
	c0.028-0.012,0.054-0.03,0.081-0.044c0.062-0.031,0.124-0.063,0.181-0.102c0.03-0.021,0.057-0.048,0.086-0.071
	c0.051-0.041,0.101-0.082,0.145-0.129c0.008-0.008,0.017-0.014,0.025-0.022c0.008-0.009,0.01-0.021,0.018-0.03
	c0.117-0.134,0.211-0.288,0.275-0.458C93.078,76.267,93.083,76.246,93.09,76.224z M9.965,26.04l25.247,23.061L9.965,72.346V26.04z
	 M61.711,47.971c-0.104,0.068-0.214,0.125-0.301,0.221c-0.033,0.036-0.044,0.083-0.073,0.121l-11.27,10.294L12.331,24.138h75.472
	L61.711,47.971z M37.436,51.132l11.619,10.613c0.287,0.262,0.649,0.393,1.012,0.393s0.725-0.131,1.011-0.393l11.475-10.481
	l25.243,23.002H12.309L37.436,51.132z M64.778,49.232L90.169,26.04v46.33L64.778,49.232z"/>
</svg>
                                </span>
                                <?php the_field('contacts_email') ?>
                            </a>
                        </div>

                        <?php
                    }
                    wp_reset_query();
                }
                ?>

                <button class="humburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
        </div>
    </div>


    <div class="main-menu">
        <div class="container">
            <div class="main-menu-head">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/white-logo.svg" alt="Логотип">
                </a>

                <button class="back-btn">✕</button>
            </div>

            <div class="row space-between modal-menu-content">
                <div class="col-lg-4 list-container">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header_menu',
                        'menu' => '',
                        'container' => 'nav',
                        'container_class' => 'main-list-container',
                        'container_id' => 'index-menu',
                        'menu_class' => 'main-list',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'link_after' => '<svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 10L-1.79046e-07 20C-1.79046e-07 20 13.058 10 -4.12912e-07 2.06746e-07L17 10Z" fill="#7D88A3"/>
                                    </svg>'
                    ]);
                    ?>
                </div>
                <div class="col-lg header-right">
                    <?php
                    $args = array(
                        'post_type' => 'contacts',
                        'posts_per_page' => 1
                    );
                    $wp_query = new WP_Query($args);
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="footer-menu_contacts">
                                <ul class="footer-menu ">
                                    <li><strong>Контакты</strong></li>
                                    <li>
                                        <?php the_field('contacts_address') ?>
                                    </li>
                                    <div class="social-medias-text">

                                        <a class="tel" href="#"><?php the_field('contacts_phone') ?></a>
                                        <a href="mail" href="#"><?php the_field('contacts_email') ?></a>
                                    </div>

                                </ul>
                                <div class="social-medias">
                                    <a href="<?php the_field('contacts_youtube') ?>" target="_blank">
                                        <svg width="37" height="27" viewBox="0 0 37 27" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M36.1401 4.35273C35.9282 3.55689 35.5146 2.83135 34.9408 2.24836C34.3669 1.66537 33.6528 1.24529 32.8694 1.02993C30.0016 0.235352 18.4591 0.235352 18.4591 0.235352C18.4591 0.235352 6.91674 0.25943 4.04891 1.05401C3.26553 1.26937 2.55136 1.68945 1.9775 2.27244C1.40365 2.85542 0.990146 3.58097 0.778167 4.37681C-0.0892919 9.55364 -0.425847 17.4417 0.801868 22.4114C1.01385 23.2073 1.42735 23.9328 2.00121 24.5158C2.57506 25.0988 3.28924 25.5189 4.07261 25.7342C6.94044 26.5288 18.4829 26.5288 18.4829 26.5288C18.4829 26.5288 30.0253 26.5288 32.8931 25.7342C33.6765 25.5189 34.3906 25.0988 34.9645 24.5158C35.5383 23.9328 35.9519 23.2073 36.1638 22.4114C37.0787 17.2274 37.3607 9.34416 36.1401 4.35273Z"
                                                  fill="white"/>
                                            <path d="M14.7856 19.0166L24.361 13.3823L14.7856 7.74805V19.0166Z"
                                                  fill="black"/>
                                        </svg>
                                    </a>
                                    <!-- <a href="<?php the_field('contacts_instagram') ?>" target="_blank">
                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.212 26.4229C14.1259 26.4229 14.0398 26.4229 13.9531 26.4224C11.915 26.4275 10.0319 26.3749 8.2005 26.2616C6.52148 26.1578 4.98886 25.5681 3.76808 24.5565C2.59015 23.5804 1.78575 22.2606 1.3773 20.6342C1.02182 19.2182 1.00298 17.8282 0.984925 16.4838C0.971833 15.5192 0.958344 14.3762 0.955566 13.2138C0.958344 12.0466 0.971833 10.9036 0.984925 9.93896C1.00298 8.59476 1.02182 7.20479 1.3773 5.78861C1.78575 4.16217 2.59015 2.84236 3.76808 1.86625C4.98886 0.854671 6.52148 0.265018 8.2007 0.161199C10.0321 0.0481061 11.9156 -0.00471072 13.958 0.000329054C15.9967 -0.00410595 17.8793 0.0481061 19.7106 0.161199C21.3897 0.265018 22.9223 0.854671 24.1431 1.86625C25.3212 2.84236 26.1254 4.16217 26.5338 5.78861C26.8893 7.20458 26.9082 8.59476 26.9262 9.93896C26.9393 10.9036 26.953 12.0466 26.9556 13.209V13.2138C26.953 14.3762 26.9393 15.5192 26.9262 16.4838C26.9082 17.828 26.8895 19.218 26.5338 20.6342C26.1254 22.2606 25.3212 23.5804 24.1431 24.5565C22.9223 25.5681 21.3897 26.1578 19.7106 26.2616C17.9568 26.37 16.1552 26.4229 14.212 26.4229ZM13.9531 24.3582C15.958 24.363 17.7989 24.3116 19.5872 24.2011C20.8568 24.1227 21.9576 23.704 22.8594 22.9567C23.6929 22.2658 24.267 21.3127 24.5656 20.1237C24.8616 18.945 24.8786 17.6795 24.8951 16.4556C24.908 15.4974 24.9215 14.3625 24.9242 13.2114C24.9215 12.0601 24.908 10.9253 24.8951 9.96719C24.8786 8.74333 24.8616 7.47774 24.5656 6.29884C24.267 5.10985 23.6929 4.15673 22.8594 3.46588C21.9576 2.71878 20.8568 2.30008 19.5872 2.22166C17.7989 2.11099 15.958 2.05998 13.9578 2.06442C11.9533 2.05958 10.1122 2.11099 8.32389 2.22166C7.05431 2.30008 5.95354 2.71878 5.05175 3.46588C4.21819 4.15673 3.6441 5.10985 3.34555 6.29884C3.04958 7.47774 3.03252 8.74313 3.01605 9.96719C3.00316 10.9262 2.98967 12.0617 2.98689 13.2138C2.98967 14.3609 3.00316 15.4966 3.01605 16.4556C3.03252 17.6795 3.04958 18.945 3.34555 20.1237C3.6441 21.3127 4.21819 22.2658 5.05175 22.9567C5.95354 23.7038 7.05431 24.1225 8.32389 24.2009C10.1122 24.3116 11.9537 24.3632 13.9531 24.3582ZM13.9047 19.6623C10.4046 19.6623 7.55679 16.7685 7.55679 13.2114C7.55679 9.65432 10.4046 6.76048 13.9047 6.76048C17.405 6.76048 20.2526 9.65432 20.2526 13.2114C20.2526 16.7685 17.405 19.6623 13.9047 19.6623ZM13.9047 8.82477C11.5246 8.82477 9.58811 10.7927 9.58811 13.2114C9.58811 15.6301 11.5246 17.598 13.9047 17.598C16.2849 17.598 18.2213 15.6301 18.2213 13.2114C18.2213 10.7927 16.2849 8.82477 13.9047 8.82477ZM20.9635 4.69619C20.1223 4.69619 19.4401 5.38926 19.4401 6.24441C19.4401 7.09956 20.1223 7.79262 20.9635 7.79262C21.805 7.79262 22.487 7.09956 22.487 6.24441C22.487 5.38926 21.805 4.69619 20.9635 4.69619Z"
                                                  fill="white"/>
                                        </svg>

                                    </a>
                                    <a href="<?php the_field('contacts_facebook') ?>" target="_blank">
                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.2935 0H4.61768C2.59856 0 0.955566 1.7365 0.955566 3.87053V22.5523C0.955566 24.6864 2.59856 26.4229 4.61768 26.4229H11.9907V17.082H9.06104V12.4373H11.9907V9.28928C11.9907 6.72808 13.962 4.64464 16.3853 4.64464H20.8286V9.28928H16.3853V12.4373H20.8286L20.0962 17.082H16.3853V26.4229H22.2935C24.3126 26.4229 25.9556 24.6864 25.9556 22.5523V3.87053C25.9556 1.7365 24.3126 0 22.2935 0Z"
                                                  fill="white"/>
                                        </svg>
                                    </a> -->
                                </div>
                            </div>

                            <?php
                        }
                        wp_reset_query();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>




