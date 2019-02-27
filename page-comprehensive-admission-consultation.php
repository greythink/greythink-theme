<?php
/**
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greythink_Theme
 */

get_header();
?>

<main class="container greythink-content greythink-page-cac-content">

<?php 
  while(have_posts()):
  the_post(); 
?>


  <div class="row row-intro-text">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1><?php the_title(); ?></h1>
      <p class="intro-text-paragraph">
        Gaining admission to highly selective graduate schools requires a combination of strategic guidance and tactical support.  The same is true when pursuing a rewarding, long-term career.  Our consulting experience and expertise have made the difference for thousands of individuals since 1996.
        </p>
    </div>
    <div class="col-md-1"></div>
  </div><!-- row-intro-text -->

  <div class="row row-cap-services">

    <div class="col-md-6 cap-services-container">
      <a href="<?php echo esc_url(get_page_link(82)); ?>">
        <div class="cap-service-box">
          <img src="<?php echo wp_get_attachment_image_src(17, 'large')[0]; ?>" alt="">
          <div class="cap-service-box-content">
            <h3>greythink (full or part time)</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 cap-services-container">
      <a href="<?php echo esc_url(get_page_link(90)); ?>">
        <div class="cap-service-box">
          <img src="<?php echo wp_get_attachment_image_src(17, 'large')[0]; ?>" alt="">
          <div class="cap-service-box-content">
            <h3>Executive greythink</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 cap-services-container">
      <a href="#">
        <div class="cap-service-box">
          <img src="<?php echo wp_get_attachment_image_src(17, 'large')[0]; ?>" alt="">
          <div class="cap-service-box-content">
            <h3>MPP/MPA</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 cap-services-container">
      <a href="#">
        <div class="cap-service-box">
          <img src="<?php echo wp_get_attachment_image_src(17, 'large')[0]; ?>" alt="">
          <div class="cap-service-box-content">
            <h3>Other Masters or PhD programs</h3>
          </div>
        </div>
      </a>
    </div>
  </div>

  <?php endwhile; ?>

</main> <!-- container-page-content -->

<?php
get_footer();
