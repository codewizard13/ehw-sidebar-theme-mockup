<!-- BEGIN sidebar -->

<aside class="sidebar">

  <!-- BEGIN Testimonial CTA -->
  <article class="cta-vert-stack">

    <!-- Icon link -->
    <?php echo make_button([
      'text' => 'Share your story!',
      'background_color' => 'transparent',
      'text_color' => $theme_colors['secondary'],
      'has_icon' => true,
      'icon_classes' => 'fa fa-bullhorn',
      'icon_side' => 'left',
      'button_styles' => 'font-weight:bold',
      'href' => 'https://www.google.com',
      'link_target' => '_blank',
      'button_classes' => 'text-link'
    ]); ?>

    <!-- Button: Jump to Testimonials Pg -->
    <?php echo make_button([
      'text' => 'Give My Testimony!',
      'background_color' => $theme_colors['primary'],
      'text_color' => $theme_colors['seasalt'],
      'has_icon' => true,
      'icon_classes' => 'fa fa-long-arrow-alt-right',
      'icon_side' => 'right',
      'button_styles' => 'font-weight:bold; text-transform:uppercase',
      'href' => 'https://www.google.com',
      'link_target' => '_blank',
      'button_classes' => 'text-link'
    ]); ?>
  </article>
  <!-- END Testimonial CTA -->

  <?php
  make_button([
    'text' => 'Share your story!'
  ]);
  ?>

  <?php include('inc/parts/tp-ad-banner-1.php') ?>

  <?php include('inc/parts/tp-btn-1.php') ?>


  <h3><?php //echo basename(__FILE__) ?></h3>

  <?php include 'parts/tp-vid-thumb.php'; ?>


  <section class="video-grid">

    <div class="grid-container">

      <?php
      // Mockup 4 dummy vid posts
      for ($i = 0; $i < 5; $i++) {
        include 'parts/tp-vid-thumb.php';
      }
      ?>


    </div><!-- END grid-container -->


  </section><!-- END video-grid -->

</aside><!-- END sidebar -->