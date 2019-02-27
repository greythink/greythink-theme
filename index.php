<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greythink_Theme
 */

get_header();
?>

<div class="row row-page">
		<div class="col-md-3"></div>
		<div class="col-md-6 content-column">

      <?php
      
      if ( have_posts() ) :

        if ( is_home() && ! is_front_page() ) :
          ?>
          <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
          </header>
          <?php
        endif;

        /* Start the Loop */

        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', get_post_type() );

        endwhile;

        the_posts_navigation();

      else :

        get_template_part( 'template-parts/content', 'none' );

      endif;

      wp_reset_postdata();

      ?>

    </div> <!--content-column-->
		<div class="col-md-3"></div>
	</div> <!--row-page-->

<?php
get_footer();