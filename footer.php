<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lion-audit
 */

?>
<footer class="new-main-footer">
    <div class="container">
        <div class="footer-logo">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/white-logo.svg" alt="Логотип">
            </a>
        </div>
        <div class="row space-between">
            <div class="col-lg-7">
<!--                --><?php
//                wp_nav_menu([
//                    'theme_location' => 'footer_menu',
//                    'menu' => '',
//                    'container' => 'nav',
//                    'container_class' => 'footer-menu-container',
//                    'container_id' => 'footer-menu',
//                    'menu_class' => 'footer-menu',
//                    'echo' => true,
//                    'fallback_cb' => 'wp_page_menu'
//                ]);
//                ?>
                <?php
                wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'menu' => '',
                    'container' => 'nav',
                    'container_class' => 'footer-menu-container',
                    'container_id' => 'footer-menu',
                    'menu_class' => 'footer-menu',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                ]);
                ?>

            </div>

            <div class="col-lg-2">
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
                        <!-- Не забудь статику убрать -->
                        <ul class="footer-menu footer-menu_contacts">
                            <li><a href="https://lev-group.ru/about/kontakty/">Контакты</a></li>
                            <li>
                                <?php the_field('contacts_address') ?>
                            </li>
                        </ul>
                        <?php
                    }
                    wp_reset_query();
                }
                ?>
            </div>
            <div class="col-lg-2">
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
                        <div class="social-medias">
                            <a href="<?php the_field('contacts_youtube') ?>" target="_blank">
                                <svg width="37" height="27" viewBox="0 0 37 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.1401 4.35273C35.9282 3.55689 35.5146 2.83135 34.9408 2.24836C34.3669 1.66537 33.6528 1.24529 32.8694 1.02993C30.0016 0.235352 18.4591 0.235352 18.4591 0.235352C18.4591 0.235352 6.91674 0.25943 4.04891 1.05401C3.26553 1.26937 2.55136 1.68945 1.9775 2.27244C1.40365 2.85542 0.990146 3.58097 0.778167 4.37681C-0.0892919 9.55364 -0.425847 17.4417 0.801868 22.4114C1.01385 23.2073 1.42735 23.9328 2.00121 24.5158C2.57506 25.0988 3.28924 25.5189 4.07261 25.7342C6.94044 26.5288 18.4829 26.5288 18.4829 26.5288C18.4829 26.5288 30.0253 26.5288 32.8931 25.7342C33.6765 25.5189 34.3906 25.0988 34.9645 24.5158C35.5383 23.9328 35.9519 23.2073 36.1638 22.4114C37.0787 17.2274 37.3607 9.34416 36.1401 4.35273Z"
                                          fill="white"/>
                                    <path d="M14.7856 19.0166L24.361 13.3823L14.7856 7.74805V19.0166Z" fill="black"/>
                                </svg>
                            </a>
                            <!-- <a href="<?php the_field('contacts_instagram') ?>" target="_blank">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.212 26.4229C14.1259 26.4229 14.0398 26.4229 13.9531 26.4224C11.915 26.4275 10.0319 26.3749 8.2005 26.2616C6.52148 26.1578 4.98886 25.5681 3.76808 24.5565C2.59015 23.5804 1.78575 22.2606 1.3773 20.6342C1.02182 19.2182 1.00298 17.8282 0.984925 16.4838C0.971833 15.5192 0.958344 14.3762 0.955566 13.2138C0.958344 12.0466 0.971833 10.9036 0.984925 9.93896C1.00298 8.59476 1.02182 7.20479 1.3773 5.78861C1.78575 4.16217 2.59015 2.84236 3.76808 1.86625C4.98886 0.854671 6.52148 0.265018 8.2007 0.161199C10.0321 0.0481061 11.9156 -0.00471072 13.958 0.000329054C15.9967 -0.00410595 17.8793 0.0481061 19.7106 0.161199C21.3897 0.265018 22.9223 0.854671 24.1431 1.86625C25.3212 2.84236 26.1254 4.16217 26.5338 5.78861C26.8893 7.20458 26.9082 8.59476 26.9262 9.93896C26.9393 10.9036 26.953 12.0466 26.9556 13.209V13.2138C26.953 14.3762 26.9393 15.5192 26.9262 16.4838C26.9082 17.828 26.8895 19.218 26.5338 20.6342C26.1254 22.2606 25.3212 23.5804 24.1431 24.5565C22.9223 25.5681 21.3897 26.1578 19.7106 26.2616C17.9568 26.37 16.1552 26.4229 14.212 26.4229ZM13.9531 24.3582C15.958 24.363 17.7989 24.3116 19.5872 24.2011C20.8568 24.1227 21.9576 23.704 22.8594 22.9567C23.6929 22.2658 24.267 21.3127 24.5656 20.1237C24.8616 18.945 24.8786 17.6795 24.8951 16.4556C24.908 15.4974 24.9215 14.3625 24.9242 13.2114C24.9215 12.0601 24.908 10.9253 24.8951 9.96719C24.8786 8.74333 24.8616 7.47774 24.5656 6.29884C24.267 5.10985 23.6929 4.15673 22.8594 3.46588C21.9576 2.71878 20.8568 2.30008 19.5872 2.22166C17.7989 2.11099 15.958 2.05998 13.9578 2.06442C11.9533 2.05958 10.1122 2.11099 8.32389 2.22166C7.05431 2.30008 5.95354 2.71878 5.05175 3.46588C4.21819 4.15673 3.6441 5.10985 3.34555 6.29884C3.04958 7.47774 3.03252 8.74313 3.01605 9.96719C3.00316 10.9262 2.98967 12.0617 2.98689 13.2138C2.98967 14.3609 3.00316 15.4966 3.01605 16.4556C3.03252 17.6795 3.04958 18.945 3.34555 20.1237C3.6441 21.3127 4.21819 22.2658 5.05175 22.9567C5.95354 23.7038 7.05431 24.1225 8.32389 24.2009C10.1122 24.3116 11.9537 24.3632 13.9531 24.3582ZM13.9047 19.6623C10.4046 19.6623 7.55679 16.7685 7.55679 13.2114C7.55679 9.65432 10.4046 6.76048 13.9047 6.76048C17.405 6.76048 20.2526 9.65432 20.2526 13.2114C20.2526 16.7685 17.405 19.6623 13.9047 19.6623ZM13.9047 8.82477C11.5246 8.82477 9.58811 10.7927 9.58811 13.2114C9.58811 15.6301 11.5246 17.598 13.9047 17.598C16.2849 17.598 18.2213 15.6301 18.2213 13.2114C18.2213 10.7927 16.2849 8.82477 13.9047 8.82477ZM20.9635 4.69619C20.1223 4.69619 19.4401 5.38926 19.4401 6.24441C19.4401 7.09956 20.1223 7.79262 20.9635 7.79262C21.805 7.79262 22.487 7.09956 22.487 6.24441C22.487 5.38926 21.805 4.69619 20.9635 4.69619Z"
                                          fill="white"/>
                                </svg>

                            </a> -->
                            <!-- <a href="<?php the_field('contacts_facebook') ?>" target="_blank">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2935 0H4.61768C2.59856 0 0.955566 1.7365 0.955566 3.87053V22.5523C0.955566 24.6864 2.59856 26.4229 4.61768 26.4229H11.9907V17.082H9.06104V12.4373H11.9907V9.28928C11.9907 6.72808 13.962 4.64464 16.3853 4.64464H20.8286V9.28928H16.3853V12.4373H20.8286L20.0962 17.082H16.3853V26.4229H22.2935C24.3126 26.4229 25.9556 24.6864 25.9556 22.5523V3.87053C25.9556 1.7365 24.3126 0 22.2935 0Z"
                                          fill="white"/>
                                </svg>

                            </a> -->
                        </div>
                        <div class="social-medias-text">
                            <a class="tel" href="#"><?php the_field('contacts_phone') ?></a>
                            <a href="mail" href="#"><?php the_field('contacts_email') ?></a>
                        </div>
                        <?php
                    }
                    wp_reset_query();
                }
                ?>
            </div>
        </div>
        <div class="row add-footer-row flex-end">
            <!-- <div class="col-lg-2">
            <div class="footer-politics">
            <a href="https://lev-audit.na4u.ru/wp-content/uploads/2021/01/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf" target="_blank">
                Политика обработки персональных данных
            </a>
            <a href="http://flashducke.beget.tech/wp-content/docs/otchet-deyatelnosti.docx">
                Отчет Аудиторской компании
            </a>
        </div>

            </div> -->
            <div class="col-lg-2">
            <?php
                wp_nav_menu([
                    'theme_location' => 'footer-extra_menu',
                    'menu' => '',
                    'container' => 'div',
                    'container_class' => 'footer-rights',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                ]);
                ?>
                    
                <!-- <div class="footer-rights">
                    <a href="http://flashducke.beget.tech/info/">Правовая информация</a>
                <a href="https://lev-audit.na4u.ru/wp-content/uploads/2021/01/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf" target="_blank">
                Политика обработки персональных данных
            </a>
            <a href="http://flashducke.beget.tech/wp-content/docs/otchet-deyatelnosti.docx">
                Отчет Аудиторской компании
            </a>
            <p>ООО Юридическая фирма ЛЕВЪ<br>
ИНН 6658465140<br>
ООО Аудиторская фирма ЛЕВЪ-АУДИТ<br>
ИНН 6661063032</p>
                </div> -->
            </div>
        </div>
        
    </div>
</footer>

<div class="modal modal-form">
    <div class="modal__header">
        <h2 class="modal__title">Мы свяжемся с вами</h2><a class="modal__cross" href="#"></a>
    </div>
    <div class="modal__body">
        <?php echo do_shortcode('[contact-form-7 id="1269" title="Контактная форма 1"]') ?>
    </div>
</div>

<div class="modal modal-banner">
    <div class="modal-shadow "></div>
    <div class="modal__body">
        <img src="<?php echo get_template_directory_uri() ?>/img/plashka.svg" alt="">
    </div>
</div>

<div class="modal-cookie" id="cookie_notification">
    <div class="container">
        <div class="cookie-content">
            <p>
                Этот сайт использует cookie для хранения данных.
                <br>Продолжая использовать сайт, Вы даете свое согласие на работу с этими файлами
            </p>
            <button class="cookie_accept">Да, я понимаю</button>
        </div>
    </div>

</div>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=17180776&amp;from=informer"
target="_blank" class="metrica-link" rel="nofollow"><img src="https://informer.yandex.ru/informer/17180776/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="17180776" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter17180776 = new Ya.Metrika({
                    id:17180776,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/17180776" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_footer(); ?>

</body>
</html>
