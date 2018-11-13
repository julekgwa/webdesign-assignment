<?php

$currentPage = basename($_SERVER['SCRIPT_FILENAME']);

 ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="css/reset.css" /> -->
<link rel="stylesheet" href="css/app.css" />
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">TLO Online Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php echo $currentPage === 'about.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item <?php echo $currentPage === 'products.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item <?php echo $currentPage === 'faq.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
          <li class="nav-item <?php echo $currentPage === 'cart.php' ? 'active' : ''; ?>">
            <a href="cart.php" class="nav-link">
        <i class="fas fa-shopping-cart"></i>
        <span class="badge"><?php echo $cart_items; ?></span>
      </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
