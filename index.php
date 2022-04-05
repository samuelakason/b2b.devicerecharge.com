<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - B2B Device Recharge</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">B2B Device Recharge</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Menu</li>

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Mobile</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mobile-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sell Airtime</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mobile-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>MTN Airtime</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Glo Airtime</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Airtel Airtime</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>9mobile Airtime</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Airtime History</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#data-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sell Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="data-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>MTN Data</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Glo Data</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Airtel Data</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>9mobile Data</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Data History</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Cable Subscription</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cable-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sell Cable Subscription</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cable-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Sell DsTv</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Sell GoTv</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Sell StarTimes</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Cable Subscription History</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Wallet</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#wallet-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Wallet</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="wallet-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Fund Wallet</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Wallet History</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Wallet Top-Up Remainder</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Buy Stock</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#buy_stock-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Stock</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="buy_stock-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>My Stock</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Buy Airtime</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Buy Data</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Buy Cable Subscription</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Analysis</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Analysis-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Analysis-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Purchases</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Sales</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Development</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#dev_tools-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Developer Tools</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="dev_tools-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>API Tokens</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>B2B CALLBACK URL</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-heading">Settings</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#account_settings-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Account Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="account_settings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>My Profile</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Change Password</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Update Email & Phone Number</span>
            </a>
          </li>
          </ul>
      </li>
      <li class="nav-heading">Profile</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact Us</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-heading">Admin Portal</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Wallet History</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>All Users Transactions</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Manage Dashboard</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#payments-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Payments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="payments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Flutterwave</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Monify</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Bank Transfer</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span></span>Fund Wallet</span>
            </a>
          </li>
          </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sell_stock-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sell Stock</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sell_stock-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Sell Airtime</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Sell Data</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Sell Cable Connection</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Stock Sold</span>
            </a>
          </li>
          
          </ul>

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#manage_simhosting-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Manage Sim Hosting</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="manage_simhosting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="">
                  <i class="bi bi-circle"></i><span>Server Settings</span>
                </a>
              </li>              
              </ul>

              <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#data_airtime_pin-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Data & Airtime Pin</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="data_airtime_pin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                    <a href="">
                      <i class="bi bi-circle"></i><span>Airtime Pin</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="bi bi-circle"></i><span>Data Pin</span>
                    </a>
                  </li>             
                  </ul>

                  <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#automation-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-menu-button-wide"></i><span>Automation</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="automation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                        <a href="">
                          <i class="bi bi-circle"></i><span>Data Automation</span>
                        </a>
                      </li>
    
                      <li>
                        <a href="">
                          <i class="bi bi-circle"></i><span>Airtime Automation</span>
                        </a>
                      </li>             
                      </ul>

      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            Hello, World!
            
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>B2B Device Recharge</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://his.ng/" target="_blank">HIS</a> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
