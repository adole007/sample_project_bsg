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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<font face="Candara" color="BLACK"</font>

</head>

<body>	
<form action="insert.php" method="post">
<div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">BENUE STATE GOVERNMENT EMPLOYEE/PENSIONERS RECORDS</h3>
        <nav>
            <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">PERSONAL INFO</a></li>
            <li role="presentation"><a href="#">CAREER HISTORY</a></li>
            <li role="presentation"><a href="#">PROMOTIONS</a></li>
            <li role="presentation"><a href="#">TRANSFERS</a></li>
            <li role="presentation"><a href="#">EDUCATION</a></li>
            <li role="presentation"><a href="#">PROF. CERTIFICATES</a></li>
              <li role="presentation"><a href="#">PROF. MEMBERSHIP</a></li>
            <li role="presentation"><a href="#">TRAINING</a></li>
            <li role="presentation"><a href="#">BANK</a></li>
            <li role="presentation"><a href="#">NOTES</a></li>
          </ul>
          </ul>
          </nav> 
     </div>

     <h4>PROFESSIONAL CERTIFICATES</H4>

<FORM>
  <FIELDSET>
 <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputORGANISATION">ORGANISATION</label>
      <input type="text" class="form-control" id="inputORGANISATION" placeholder="ORGANISATION">
    </div>

<div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputTYPEOFCERTIFICATE">TYPE OF CERTIFICATE</label>
      <input type="text" class="form-control" id="inputTYPEOFCERTIFICATE" placeholder="TYPE OF CERTIFICATE">
    </div>

 <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputrecievedyear">RECIEVED YEAR</label>
       <input class="date-own form-control" style="width: 300px;" type="text" placeholder="RECIEVED YEAR">
  <script type="text/javascript">
      $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
  </script>
    </div>
 
<!-- /button function to add new record set -->
<div class="form-group col-md-8">
 <button type="submit" class="btn btn-black" id="btnextpage1"><a href="./Professional Certificates.php"/></a><b>ADD MORE</b></button>
 </div>

  <!-- /button function for this form -->
    <div class="form-group col-md-8">
  <button type="submit" class="btn btn-black" id="btnextpage1"><a href="./Professional Membership.php">NEXT PAGE</button>
              </fieldset>
      </form>
   </body>
</html>