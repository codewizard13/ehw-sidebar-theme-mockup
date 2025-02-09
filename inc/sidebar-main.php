<!-- Sidebar / Ads -->

<aside class="sidebar">

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