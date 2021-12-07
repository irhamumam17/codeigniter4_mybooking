<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>MyBooking</title>
    <link href="<?= base_url('landing/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="<?= base_url('landing/css/style.css') ?>" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?= base_url('landing/js/jquery-1.11.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('landing/js/login.js') ?>"></script>
    <script src="<?= base_url('landing/js/jquery.easydropdown.js') ?>"></script>
    <!--Animation-->
    <script src="<?= base_url('landing/js/wow.min.js') ?>"></script>
    <link href="<?= base_url('landing/css/animate.css') ?>" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
    <?= $this->renderSection('css') ?>
</head>

<body>
    <?= $this->include('landing/layout/top') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('landing/layout/bottom') ?>
    <?= $this->renderSection('js') ?>
</body>

</html>