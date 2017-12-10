<?php
    require_once('../../config/config.php');
    require_once('../routing.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?= BASE ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="icon" href="assets/img/favicon.ico"-->

    <title>BSG :: Search</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- more custom styles for this template -->
    <link href="./assets/css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <div class="container">
    <?php $tab = "search"; require_once("../../header.php"); ?>

    <?php require_once("tabs.php"); ?>

    <?php require_once("../../footer.php"); ?>
  </div>

</body>
</html>
