<?php get_header(); ?>

<main class="container greythink-content greythink-front-page-content">

  <div class="row row-hero">
    <div class="col-12">
      <div class="greythink-school-bg hero-img">
        <div class="hero-img-text-container">
          <div class="hero-img-text text-center">
            <h4>Capitalize on your past. Optimize your present. Realize your future.</h4>
            <h3>Maximise your chances to get to the best business schools.</h3>
            <a href="#" class="hero-cta-btn btn btn-outline-primary">Get a free evaluation</a>
          </div>
        </div>
      </div>
    </div>
  </div> <!--row-hero-->

  <div class="row row-schools">
    <div class="col-12">
      <h4 class="text-center">Our clients regularly receive admits from best schools.</h4>
      <div class="school-logos d-flex flex-wrap flex-md-row justify-content-between align-items-center">
        <img src="<?php echo wp_get_attachment_image_src(22, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(21, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(23, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(28, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(30, 'large')[0]; ?>" alt="">
      </div>
    </div>
  </div><!-- row-school-logos-->

  <div class="row row-home-features">
    <div class="col-md-6 home-feature-text-container">
      <div class="home-feature-text hft-left">
      <h4>Personalized yet structured service</h4>
      <p>
        We don't follow a cookie-cutter approach. We focus on you as an individual and provide honest advice in your best interest. We work at your pace and always available for you (even on Diwali and Christmas).
      </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="home-feature-img">
        <img src="<?php echo wp_get_attachment_image_src(17, 'large')[0]; ?>" alt="">
      </div>
    </div>
  </div> <!--row-home-features-1-->

  <div class="row row-home-features">
    <div class="col-md-6">
      <div class="home-feature-img">
        <img src="<?php echo wp_get_attachment_image_src(14, 'large')[0]; ?>" alt="">
      </div>
    </div>
    <div class="col-md-6 home-feature-text-container">
      <div class="home-feature-text hft-right">
      <h4>Global trends applied to the Indian context</h4>
      <p>
        We have former ad-coms and alumni from top B-schools on our team and a decade-old partnership with a leading player in the admissions consulting space. This gives us an edge in understanding the unique challenges that Indian applicants face.
      </p>
      </div>
    </div>
  </div> <!--row-home-features-2-->

  <div class="row row-home-features">
    <div class="col-md-6 home-feature-text-container">
      <div class="home-feature-text hft-left">
      <h4>The best team in business</h4>
      <p>
        We share the details of each consultant publicly on our website. The team comprises consultants from different industries and geographies - a truly international team that brings real-world insights to the admissions process.
      </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="home-feature-img">
        <img src="<?php echo wp_get_attachment_image_src(13, 'large')[0]; ?>" alt="">
      </div>
    </div>
  </div> <!--row-home-features-3-->

  <div class="row home-testimonials">
    <div class="col-12">
      <h2 class="home-testimonials-heading text-center">Our results speak for themselves</h2>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(37, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Stanford GSB admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(32, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Northwestern School of Management admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(31, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">HBS admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(36, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Wharton admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(37, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Stanford GSB admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(37, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Stanford GSB admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(37, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Stanford GSB admit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 home-testimonial-block-container">
      <div class="home-testimonial-block home-testimonial-block-<?php echo $i + 1; ?>">
        <div class="home-testimonial-content">
          <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="home-testimonial-meta d-flex">
          <div class="home-testimonial-school-image">
            <img src="<?php echo wp_get_attachment_image_src(37, 'full')[0]; ?>" alt="">
          </div>
          <div class="home-testimonial-credentials">
            <p class="home-testimonial-author">Archit Chandra</p>
            <p class="home-testimonial-school">Stanford GSB admit</p>
          </div>
        </div>
      </div>
    </div>

  </div> <!--row-home-testimonials-->

  <div class="row row-cta">
    <div class="col-12">
      <div class="home-cta-container d-flex flex-column justify-content-center align-items-center">
        <h2>Give us 5 minutes of your time and see the difference.</h2>
        <a class="btn btn-primary btn-lg" href="#" role=button>Get a free evaluation</a>
      </div>
    </div>
  </div> <!--row-cta-->

  <div class="row home-blog">
    <div class="col-md-3">
      <div class="home-blog-label home-blog-box d-flex flex-column justify-content-between align-items-start">
        <h3>From the blog</h3>
        <p><a href="#">See all posts  <i class="fas fa-angle-right"></i></a></p>
      </div>
    </div>

    <?php for($i=0; $i<3; $i++): ?>

    <div class="col-md-3">
      <div class="home-blog-box home-blog-post home-blog-post-<?php echo $i + 1; ?>">
        <div class="blog-card-img">
        <img src="<?php echo wp_get_attachment_image_src(13, 'medium')[0]; ?>" alt="">
        </div>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Ante venenatis dapibus aliquet.</p>
        <a href="#">Read more</a>
      </div>
    </div>

    <?php endfor; ?>
  </div> <!--row-blog-->

</main> <!--greythink-content container-fluid-->

<?php get_footer(); ?>

