<?php
define('SITE_TITLE', "ElijahStreams Rebuild 2025")
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo SITE_TITLE ?></title>
</head>

<body>

  <style>
    .container {
      display: grid;

      grid-template-areas:
        "header header header"
        "content content side"
        "footer footer footer";

      grid-template-columns: 200px 1fr 200px;
      grid-template-rows: auto 1fr auto;
      grid-gap: 10px;

      height: 100vh;
    }

    .container > * {
      background:sandybrown;
  padding: 1rem;
  min-height: 3rem;
    }

    header {
      grid-area: header;

      display: flex;
      justify-content: space-between;
      align-items: center;

    }

    nav {
      grid-area: nav;
      margin-left: 0.5rem;
    }

    main {
      grid-area: content;
    }

    aside {
      grid-area: side;
      margin-right: 0.5rem;
    }

    footer {
      grid-area: footer;
    }
  </style>

  <!-- START BODY -->

  <div class="container">
    <header>
      <!-- Header content -->
      hi
    </header>

    <nav>
      <!-- Navigation -->
    </nav>

    <main>
      <!-- Main content -->
    </main>

    <aside>
      <!-- Sidebar / Ads -->
    </aside>

    <footer>
      <!-- Footer content -->
    </footer>
  </div>

  <!-- END BODY -->

</body>

</html>