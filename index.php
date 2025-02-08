<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo SITE_TITLE ?></title>
  <link rel="stylesheet" href="css/reset-josh-c.css">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>



  <!-- START BODY -->

  <div class="container">
    <header>
      <!-- Header content -->
      Header
    </header>

    <div class="content-wrapper">

      <!-- BEGIN main-content -->
      <main class="main-content">

        <header class="header-banner">Main Content</header>
        <?php include('inc/main-content.php') ?>
        <?php include('inc/parts/tp-cta-1.php') ?>
        <?php include('inc/parts/tp-cta-2.php') ?>

      </main><!-- END main-content -->

      <!-- BEGIN sidebar -->
      <aside class="sidebar">

        <?php include('inc/parts/tp-ad-banner-1.php') ?>
        <!-- Sidebar / Ads -->
        <?php include('inc/sidebar-main.php') ?>
      
      </aside><!-- END sidebar -->

    </div>

    <footer>
      <!-- Footer content -->
      Footer
    </footer>
  </div>


  <!-- END BODY -->

</body>

</html>