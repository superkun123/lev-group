<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lion-audit
 */

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
    <main id="post-item" class="post-item">
        <?php
        while (have_posts()) :
            the_post();

            echo "<!-- GX_ " . get_post_type() . " -->";
            get_template_part('template-parts/content', get_post_type());

            // the_post_navigation(
            // 	array(
            // 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'lion-audit' ) . '</span> <span class="nav-title">%title</span>',
            // 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'lion-audit' ) . '</span> <span class="nav-title">%title</span>',
            // 	)
            // );

            // // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            // 	comments_template();
            // endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
