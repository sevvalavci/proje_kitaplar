<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Educenter</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <?php $this->load->view("includes/proje_css.php"); ?>

    <link rel="shortcut icon" href="<?php echo base_url("assets/"); ?>images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url("assets/"); ?>images/favicon.png" type="image/x-icon">

</head>

<body>

    <div class="preloader">
        <img src="<?php echo base_url("assets/"); ?>images/preloader.gif" alt="preloader">
    </div>


    <header class="fixed-top header">

        <?php $this->load->view("includes/header.php"); ?>

        <?php $this->load->view("includes/navbar.php"); ?>
    </header>

    <?php $this->load->view("includes/kayitol_modal.php"); ?>

    <?php $this->load->view("includes/giris_modal.php"); ?>

    <?php $this->load->view("includes/slider.php"); ?>

    <?php $this->load->view("includes/sirket_about.php"); ?>

    <?php $this->load->view("includes/books.php"); ?>

    <?php $this->load->view("includes/hakkimizda.php"); ?>

    <?php $this->load->view("includes/footer.php"); ?>

    <?php $this->load->view("includes/proje_script.php"); ?>
</body>

</html>