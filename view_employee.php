<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>BENUE STATE GOVERNMENT EMPLOYEE/PENSIONERS RECORDS<br></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- more custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>	
  <div class="container">
    <?php $tab = "employee"; require_once("nav.php"); ?>
    
        
    <h3>Personal Info</h3>
    <hr />

    <div class="row marketing">
        <div class="col-lg-12">
          <b>Employee ID</b>
          <h4>ESN 1234</h4>

          <b>Employee</b>
          <h4><b>SURNAME</b>, Firstname Middlename </h4>

          <b>Address</b>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        </div>
      </div>


    <h3>Next of Kin</h3>
    <hr />
    <div class="row marketing">
        <div class="col-lg-6">
          <b>Next of Kin 1</b>
          <p>SURNAME, First M.</p>

          <b>Address</b>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>

        <div class="col-lg-6">
          <b>Next of Kin 2</b>
          <p>SURNAME, First M.</p>

          <b>Address</b>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
      </div>

    <h3>Category Name</h3>
    <div class="row marketing">
        <div class="col-lg-6">
        </div>

        
        <div class="col-lg-6">
        </div>

    </div>

    <?php require_once("footer.php"); ?>
  </div>
	
</body>
</html>