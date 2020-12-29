<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>IURI REIS MOD.5</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php $this->view('home/navigation'); ?>
    <!-- fim Navigation-->

    <!-- Masthead-->
    <?php $this->view('home/masterhead'); ?>
    <!-- fim Masthead-->

    <!-- M O D A L I D A D E S-->
    <?php $this->view('home/modalidades'); ?>
    <!-- fim M O D A L I D A D E S-->

    <!-- A V E N T U R A S-->
    <?php $this->view('home/aventuras'); ?>
    <!-- fim A V E N T U R A S-->

    <!-- R E G I S T R O S-->
    <?php $this->view('home/registros'); ?>
    <!-- fim R E G I S T R O S-->

    <!-- HISTORIA-->
    <?php $this->view('home/historia'); ?>
    <!-- fim HISTORIA-->

    <!-- Team-->
    <?php $this->view('home/time'); ?>
    <!-- fim Team-->

    <!-- Contact-->
    <?php $this->view('home/contact'); ?>
    <!-- fim Contact-->

    <!-- Footer-->
    <?php $this->view('home/footer'); ?>
    <!-- Footer-->

    <!-- Portfolio Modals-->
    <?php $this->view('home/modalidadesfull'); ?>
    <!-- fim Portfolio Modals-->

    <!-- Fotografia Bird-->
    <?php $this->view('home/registrosfull'); ?>
    <!-- Fotografia Bird-->

    <!-- JavaScript -->
    <?php $this->view('home/javas'); ?>
    <!-- JavaScript -->

</body>

</html>