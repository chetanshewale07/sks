<?php
// Determine current page for active nav highlighting
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle) ? $pageTitle . ' | Shree Kaleshwari Security Services' : 'Shree Kaleshwari Security Services'; ?></title>
<meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Professional security guards, supervisors, bouncers, escort security, housekeeping, labour supply and HR solutions across Maharashtra.'; ?>">

<!-- Favicon -->
<link rel="icon" type="image/png" href="images/logo.png">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ===== TOP BAR ===== -->
<div class="topbar d-none d-lg-block">
  <div class="container topbar-inner">
    <div class="topbar-left">
      <span><i class="bi bi-geo-alt-fill"></i> Koparkhairane, Navi Mumbai</span>
      <span><i class="bi bi-envelope-fill"></i> sksecurityservices1002@gmail.com</span>
    </div>
    <div class="topbar-right">
      <span class="topbar-badge"><i class="bi bi-patch-check-fill"></i> PSARA Approved Agency</span>
    </div>
  </div>
</div>

<!-- ===== NAVBAR ===== -->
<header class="site-header" id="siteHeader">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Shree Kaleshwari Security Services Logo">
        <span class="brand-text">
          <span class="brand-line1">SHREE KALESHWARI</span>
          <span class="brand-line2">SECURITY SERVICES</span>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link <?php echo $current=='index.php'?'active':''; ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $current=='about.php'?'active':''; ?>" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $current=='services.php'?'active':''; ?>" href="services.php">Our Services</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $current=='why-choose-us.php'?'active':''; ?>" href="why-choose-us.php">Why Choose Us</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $current=='compliance.php'?'active':''; ?>" href="compliance.php">Compliance</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $current=='contact.php'?'active':''; ?>" href="contact.php">Contact Us</a></li>
          <li class="nav-item ms-lg-3 d-flex gap-2 py-2 py-lg-0">
            <a href="tel:+918976111002" class="btn btn-outline-nav"><i class="bi bi-telephone-fill"></i> Call Now</a>
            <a href="contact.php#quote" class="btn btn-gold-nav">Get a Quote</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
