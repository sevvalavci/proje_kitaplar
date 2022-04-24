<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Educenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
 <?php  $this->load->view("includes/proje_css.php"); ?>
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url("assets/"); ?>images/favicon.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url("assets/"); ?>images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="<?php echo base_url("assets/"); ?>images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <?php $this->load->view("includes/header.php"); ?>
  <!-- navbar -->
  <?php $this->load->view("includes/navbar.php"); ?>
</header>
<!-- /header -->
<!-- Modal -->
<?php $this->load->view("includes/kayitol_modal.php"); ?>
<!-- Modal -->
<?php $this->load->view("includes/giris_modal.php"); ?>

<!-- hero slider -->
<?php $this->load->view("includes/slider.php"); ?>
<!-- /hero slider -->

<!-- banner-feature -->

<!-- /banner-feature -->

<!-- sirket hakkinda -->
<?php $this->load->view("includes/sirket_about.php"); ?>
<!-- /about us -->

<!-- courses -->
<?php $this->load->view("includes/books.php"); ?>
<!-- /course list -->
    <!-- mobile see all button -->
    

<!-- /courses -->

<!-- cta -->

<!-- /cta -->

<!-- success story -->

<!-- /success story -->

<!-- events -->

<!-- hakkımızda -->
<?php $this->load->view("includes/hakkimizda.php"); ?>
<!-- /teachers -->

<!-- blog -->

  
<!-- /blog -->

<!-- footer -->
<?php $this->load->view("includes/footer.php"); ?>
<!-- /footer -->

<!-- jQuery -->
<script src="<?php echo base_url("assets/") ?>js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url("assets/") ?>js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?php echo base_url("assets/") ?>js/slick.min.js"></script>
<!-- aos -->
<script src="<?php echo base_url("assets/") ?>js/aos.js"></script>
<!-- venobox popup -->
<script src="<?php echo base_url("assets/") ?>js/venobox.min.js"></script>
<!-- filter -->
<script src="<?php echo base_url("assets/") ?>js/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="<?php echo base_url("assets/") ?>js/gmap.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url("assets/") ?>js/script.js"></script>

</body>
</html>