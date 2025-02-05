<h3><?php //echo basename(__FILE__) ?></h3>

<?php include 'parts/tp-vid-thumb.php'; ?>


<section class="video-grid">

  <div class="grid-container">

    <?php
    // Mockup 4 dummy vid posts
    for ($i = 0; $i < 12; $i++) {
      include 'parts/tp-vid-thumb.php';
    }
    ?>


  </div><!-- END grid-container -->


</section><!-- END video-grid -->