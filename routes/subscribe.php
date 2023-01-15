<?php
  if (!isset($_POST['emailsub'])) {
    header('Location:/routes/404');
  }

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ha&iuml;ti Brand Services: Abonnement &agrave; l'infolettre</title>
  <meta content="Ha&iuml;ti Brand Services" name="title">
  <meta content="Ha&iuml;ti Brand Services - Abonnement infolettre" name="description">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="shorcut icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v4.10.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <?php include '../partials/topbar.php' ?>

  <!-- ======= Header ======= -->
  <?php require_once '../partials/nav.php' ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Accueil</a></li>
          <li>Abonnement</li>
        </ol>
        <h2>Abonnement r&eacute;ussi !</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-3">
      <div class="container">
        <p>
          Vous &ecirc;tes d&eacute;sormais abonn&eacute;.e &agrave; l'infolettre d'<strong>Ha&iuml;ti Brand Services</strong> !
          <br/>
          <a href="/">Retour &agrave; la page d'accueil</a>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once '../partials/footer.php' ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>