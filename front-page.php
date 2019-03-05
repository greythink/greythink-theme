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
    <div class="col-md-6">
      <div class="service-feature-text">
        <h3>High-quality technology</h3>
        <ul>
          <li><span>Use of proven, future-proof techologies and tools</span></li>
          <li><span>Thorough testing before deployment</span></li>
          <li><span>Search engine optimized code</span></li>
          <li><span>Equally good performance on mobiles and tablets</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(116, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-right">
    <div class="col-md-6 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(115, 'medium_large')[0]; ?>" alt="">
    </div>
    <div class="col-md-6">
      <div class="service-feature-text">
        <h3>Intuitive Design</h3>
        <ul>
          <li><span>Painstaking attention to detail</span></li>
          <li><span>Focus on user-experience, usability and convenience</span></li>
          <li><span>Clean and visually appealing design</span></li>
          <li><span>Mobile-friendly layouts</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-left">
    <div class="col-md-6">
      <div class="service-feature-text">
        <h3>Impeccable Service</h3>
        <ul>
          <li><span>Highly-skilled and reliable team</span></li>
          <li><span>Constant communication to set the right expectations</span></li>
          <li><span>Skin in the game-level dedication</span></li>
          <li><span>Just a phone call away, especially in times of need</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(114, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-internal-cta">
    <div class="col-md-7 d-flex flex-column justify-content-center internal-cta-column">
      <h3>Turn your idea into a great product</h3>
      <p class="internal-cta-text">
        Give us a few details about what you want to build and let's get started.
      </p>
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center internal-cta-column align-items-center">
      <a href="#" class="btn btn-lg btn-block">Write to us</a>
    </div>
  </div>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>
