<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lion-audit
 */

?>
<?php 
get_header();
 ?>
<main class="post-page not-found">
	   <div class="not-found__container">
	   <img class="not-found__illu" src="<?php echo get_template_directory_uri() ?>/img/404.png" alt="404">
		<p>Кажется, такой страницы нет...</p>
		<a class="main-link" href="<?php echo home_url()?>">Вернуться на главную<img src="<?php echo get_template_directory_uri() ?>/img/arrow.svg" alt="ссылка"></a>
	   </div>
</main>

<?php
get_footer();
?>
