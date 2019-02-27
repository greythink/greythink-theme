<?php get_header(); ?>

<main class="container greythink-content greythink-page-egreythink-content">

<?php 
  while(have_posts()):
  the_post(); 
?>

  
<div class="row row-intro-text">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1><?php the_title(); ?></h1>
      <p class="intro-text-paragraph">
      For experienced professionals seeking to accelerate their careers, there is no better asset than an Executive greythink education from a top-tier school. We guide individuals who will be sponsored by their current employer as well as those who will be self-sponsored. The greythink Exchange consulting team has unequalled expertise and experience in helping Egreythink applicants succeed.
        </p>
    </div>
    <div class="col-md-1"></div>
  </div><!-- row-intro-text -->

  <div class="row row-schools">
  <div class="col-md-1"></div>
    <div class="col-10">
      <div class="school-logos d-flex flex-wrap flex-md-row justify-content-between align-items-center">
        <img src="<?php echo wp_get_attachment_image_src(23, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(92, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(28, 'large')[0]; ?>" alt="">
        <img src="<?php echo wp_get_attachment_image_src(94, 'large')[0]; ?>" alt="">
      </div>
    </div>
    <div class="col-md-1"></div>
  </div><!-- row-school-logos-->

  <div class="row row-service-feature align-items-center service-feature-left">
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Analysis and Planning</h3>
        <ul>
          <li><span>Thorough analysis of resume, transcripts and background</span></li>
          <li><span>Development of tactical action plan to target particular schools</span></li>
          <li><span>90-minute teleconference to create an action plan
          </span></li>
          <li><span>Target school-specific positioning using proprietary frameworks</span></li>
          <li><span>Strategies and tactics for developing recommendations and essays
          </span></li>
          <li><span>Optional evaluation of TOEFL skills by an expert</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(88, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-right">
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(84, 'medium_large')[0]; ?>" alt="">
    </div>
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Coaching and Guidance</h3>
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
        <h3>Implementation and Support</h3>
        <ul>
          <li><span>Multiple iterations of resume review and refinement</span></li>
          <li><span>Thorough critiques and comments on recommendation outlines</span></li>
          <li><span>Review of sponsorship letter by experts</span></li>
          <li><span>Painstakingly detailed reviews of essay outlines</span></li>
          <li><span>Suggestions for stylistic improvements of narrative drafts</span></li>
        </ul>
      </div>
    </div>
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(85, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-right">
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(86, 'medium_large')[0]; ?>" alt="">
    </div>
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Interview Preparation</h3>
        <ul>
          <li><span>Written strategies and tactics for successful interviews</span></li>
          <li><span>Unlimited access to our exclusive online video-practice facility</span></li>
          <li><span>Real-time, mock interview for each school invitation</span></li>
          <li><span>Optional accent-evaluation by an expert accent-reduction coach</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row row-service-feature align-items-center service-feature-left">
    <div class="col-md-7">
      <div class="service-feature-text">
        <h3>Miscellaneous Coaching</h3>
          <ul>
            <li><span>Additional insights and guidance for doubt clearance</span></li>
          </ul>
      </div>
    </div>
    <div class="col-md-5 service-feature-image">
      <img src="<?php echo wp_get_attachment_image_src(89, 'medium_large')[0]; ?>" alt="">
    </div>
  </div>

  <div class="row home-testimonials">
    <div class="col-12">
      <h2 class="home-testimonials-heading">Our results speak for themselves</h2>
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
