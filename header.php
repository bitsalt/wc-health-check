<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="assets/image/png" sizes="16x16" href="<?php echo $dir; ?>assets/images/icon/wakeicon.ico">
    <title>WCPSS Employee Health Screening</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $dir; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $dir; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $dir; ?>vendor/fortawesome/font-awesome/css/fontawesome.min.css" rel="stylesheet">

    <link href="<?php echo $dir; ?>assets/plugins/jquery-validation/css/cmxform.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo $dir; ?>css/wcpss.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="fix-header card-no-border">
<!-- Preloader - style in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div id="main-wrapper">
    <header>
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div id="gb-logo" class="gb header left"><img src="<?php echo $dir; ?>assets/images/logos/blue.png" /></div>
            <!-- End Logo -->
        </nav>
    </header>
    <div id="sp-section-name-outer" class="noprint">
        <div id="sp-section-name">
            <h1><?php echo $headerText; ?></h1>
        </div>
    </div>

    <!-- End Topbar header -->
