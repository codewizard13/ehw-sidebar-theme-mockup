<!-- Sidebar / Ads -->

<aside class="sidebar">

  <aside class="">
    <h4><i class="fa fa-bullhorn"></i>Share your story!</h4>
    <?php echo make_button([
      'text' => 'Share your story!',
      'background-color' => 'transparent',
      'text_color' => $robin_egg_blue
    ]); ?>
  </aside>


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