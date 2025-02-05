<?php require_once( 'init.php' ); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo SITE_TITLE ?></title>
  <link rel="stylesheet" href="css/reset-josh-c.css">
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
    <main class="main-content">
      <!-- Main content -->
      <header class="header-banner">Main Content</header>
      <?php include ( 'inc/main-content.php') ?>

    </main>

    <aside class="sidebar">
      <!-- Sidebar / Ads -->
      <?php include ( 'inc/sidebar-main.php') ?>
    </aside>
  </div>

  <footer>
    <!-- Footer content -->
    Footer
  </footer>
</div>


  <!-- END BODY -->

</body>

</html>