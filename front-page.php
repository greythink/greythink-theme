<?php get_header(); ?>

<main class="container greythink-content greythink-page-greythink-admissions-content">

<?php 
  while(have_posts()):
  the_post(); 
?>

  
<div class="row row-intro-text">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1>Welcome to Greythink.in</h1>
      <p class="intro-text-paragraph">
        We are a small bootstrapped company that makes <strong>finely-crafted software products</strong> for small and medium-sized businesses. We are also working on products that help <strong>solve uniquely Indian problems</strong>. The long-term goal is to build a solid revenue-driven product company where <strong>people love to work</strong>.
        </p>
    </div>
    <div class="col-md-1"></div>
  </div><!-- row-intro-text -->

  <div class="row row-service-feature align-items-center service-feature-left">
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>High-quality technology</h3>
        <ul>
          <li><span>Painstaking attention to detail</span></li>
          <li><span>Focus on usability and convenience</span></li>
          <li><span>Target school-specific positioning using proprietary frameworks</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(106, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-right">
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(105, 'medium_large')[0]; ?>" alt="">
    </div>
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Intuitive Design</h3>
        <ul>
          <li><span>Customized strategies and tactics</span></li>
          <li><span>Constant feedback, answers and guidance via email and phone</span></li>
          <li><span>Optional teleconference on post-greythink career planning</span></li>
          <li><span>Optional translation services for recommendations</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-left">
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Impeccable Service</h3>
        <ul>
          <li><span>Multiple iterations of resume review and refinement</span></li>
          <li><span>Thorough critiques and comments on recommendation outlines</span></li>
          <li><span>Painstakingly detailed reviews of essay outlines</span></li>
          <li><span>Suggestions for stylistic improvements of narrative drafts</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(107, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-internal-cta">
    <div class="col-md-7 d-flex flex-column justify-content-center internal-cta-column">
      <h3>Get your profile evaluated</h3>
      <p class="internal-cta-text">
        Our team will get back to you with the results in a few days
      </p>
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center internal-cta-column align-items-center">
      <a href="#" class="btn btn-lg btn-block">Request a free evaluation</a>
    </div>
  </div>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>
