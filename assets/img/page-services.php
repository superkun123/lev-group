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
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
<main class="services-page">
     

        <div class="container company-container">
     
            <div class="row">
                <div class="col-lg-2">
                    <aside class="aside-menu-new">
                    <?php wp_nav_menu( array(
	'theme_location' => 'services_menu',
    'fallback_cb' => '__return_empty_string',
    'container'     => 'ul',
    'container_class'   => 'aside-list',
    'container_id'      => 'aside-list'
) );?>
                    </aside>
                </div>
                <div class="col-lg-10">
                    
            <section class="about-company">
              
                    <div class="row  space-between about-company-row">
                        <div class="col-lg-12">
                            <div class="about-company__description">
                                <h1 class="about-company-description__title"><?php the_title() ?></h3>
                                <div class="about-company-description__text">
                                <?php the_content() ?>
                                </div>
                               
                            </div>
                            
                        </div>
                      
                    </div>
                    </section>


                    <section class="services-new">
                    
                           
                           
                
          
                        <div class="row services-row long-row">
                            <div class="col-lg services-card">

                                <div class="services-card__title">
                                    <div class="services-card__title-text">
                                        Представление интересов в суде
                                    </div>
                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                           
                                <img class="services-card__img" src="../assets/img/serv4.svg" alt="">
                            </div>
                            <div class="col-lg services-card">
                                <div class="services-card__title">
                                    <div class="services-card__title-text">
                                        Бухгалтерское обслуживание
                                    </div>
                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="<?php get_template_directory()?>/assets/img/serv9.svg" alt="">
                            </div>
                        
                       
                          
                              
                           
                        </div>
        
                        <div class="row services-row short-row space-between">

                            
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    <div class="services-card__title-text">
                                        Защита бизнеса при проверках контрольно-надзорных органов
                                    </div>
                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                   
                                </div>
                                <img class="services-card__img" src="../assets/img/serv1.svg" alt="">
                            </div>
        
                           
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    <div class="services-card__title-text">
                                        Юрист по госзакупкам
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                    
                                </div>
                                <img class="services-card__img" src="../assets/img/serv5.svg" alt="">
                            </div>
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    
                                    <div class="services-card__title-text">
                                        Налоговая практика
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                    
                                </div>
                                <img class="services-card__img" src="../assets/img/serv6.svg" alt="">
                            </div>
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    
                                    <div class="services-card__title-text">
                                        Внешнеэкономическая практика
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv7.svg" alt="">
                            </div>


                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    
                                    <div class="services-card__title-text">
                                        Абонентское правовое обслуживание
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv8.svg" alt="">
                            </div>



                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    
                                    <div class="services-card__title-text">
                                        Оспаривание кадастровой стоимости недвижимости
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv2.svg" alt="">
                            </div>

<div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                    
                                    <div class="services-card__title-text">
                                        Регистрация, реорганизация и ликвидация бизнеса
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv3.svg" alt="">
                            </div>
                        

                         
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                  
                                    <div class="services-card__title-text">
                                        Аудит и ревизии
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv10.svg" alt="">
                            </div>
                            <div class="col-lg-4 services-card">
                                <div class="services-card__title">
                                   
                                    <div class="services-card__title-text">
                                        Банкротство
                                    </div>

                                    <p class="services-card__text">
                                        Но семантический разбор внешних противодействий, в своём классическом представлении, допускает внедрение стандартных подходов.
                                    </p>
                                </div>
                                <img class="services-card__img" src="../assets/img/serv11.svg" alt="">
                            </div>
        
        
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
                                <?php echo wp_trim_words( get_the_content(), 40, '...' );?>
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
