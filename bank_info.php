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
          <form action="insert.php" method="post">
          <?php $tab = "bank_info"; require_once("nav.php"); ?>
          <?php $tab = "bank_info"; require_once("nav_tab.php"); ?>

          <h3>BANK ACCOUNT DETAILS FOR EMPLOYEE'S</h3>
          <hr />
            <input name="selector" type="hidden" value="bank_info.create">
            
            <!-- Labels on forms -->
            <div class="row">
              <div class="col-lg-6">
              <b>Employee ID</b>
              <input name="esn" type="text" class="form-control" />
              </div>

              <div class="col-lg-6">
                <b>BVN</b>
                <input type="text" class="form-control"/>
              </div>
            </div>

            <br />

            <div class="row">
              <div class="col-lg-6">
                <b>BANK NAME</b>
                <input type="text" list="BANK NAME" class="form-control"/>
                <datalist id="BANK NAME">
                   <option>Access Bank</option>
                   <option>Citibank</option>
                   <option>Dynamic Standard Bank</option>
                   <option>Diamond Bank</option>
                   <option>Development Financial Pruben Bank</option>
                   <option>Ecobank Nigeria</option>
                   <option>Fidelity Bank Nigeria</option>
                   <option>First Bank of Nigeria</option>
                   <option>First City Monument Bank</option>
                   <option>Guaranty Trust Bank</option>
                   <option>Heritage Bank plc</option>
                   <option>Keystone Bank Limited</option>
                   <option>Providus Bank plc</option>
                   <option>Skye Bank</option>
                   <option>Stanbic IBTC Bank Nigeria Limited</option>
                   <option>Standard Chartered Bank</option>
                   <option>Sterling Bank</option>
                   <option>Suntrust Bank Nigeria Limited</option>
                   <option>Union Bank of Nigeria</option>
                   <option>United Bank for Africa</option>
                   <option>Unity Bank plc</option>
                   <option>Wema Bank</option>
                   <option>Zenith Bank</option>
                   <option>Non-interest banks</option>
                   <option>Jaiz Bank</option>
                   <option>Coronation Merchant Bank</option>
                   <option>Rand Merchant Bank</option>
                   <option>FBN Merchant Bank Limited</option>
                   <option>FSDH Merchant Bank</option>
                </datalist>
              </div>
            
              <div class="col-lg-6">
                <b>ACCOUNT NUMBER</>
                <input type="text" class="form-control" />
             </div>
            </dev>

             <br />

             <br />

             <br />

            <!-- /button function for this form -->
            <div class="form-group pull-right">
              <button type="submit" class="btn btn-success">Create</button>
            </div>
            <?php require_once("footer.php"); ?>
            </div>
         </form>
      </dev>


    
  </body>
   
</html>