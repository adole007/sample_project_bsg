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
    
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>	
            <div class="container">
                <form action="insert.php" method="post">
                            <?php $tab = "education"; require_once("nav.php"); ?>
                            <?php $tab = "education"; require_once("nav_tab.php"); ?>
                            <h3>EDUCATIONAL DETAILS FOR EMPLOYEE'S</h3>
                            <hr />
                       <!-- Labels on forms -->
                      <div class="row">
                        <div class="col-lg-6">
                           <b>EMPLOYEE'S NUMBER</b>
                           <input type="text" class="form-control" name="esn" />
                        </div>
                        <div class="col-lg-6">
                            <b>QUALIFICATIONS</b>
                            <input type="text" class="form-control" name="QUALIFICATIONS" />
                        </div>
                      </div>

                      <br />

                      <div class="row">
                        <div class="col-lg-6">
                            <b>COURSE OF STUDY</b>
                            <input type="text" list="COURSE OF STUDY" class="form-control" name="courseofstudy" />
                        </div>
                        <div class="col-lg-6">
                            <b>INSTITUTION</b>
                            <input type="text" class="form-control" name="INSTITUTION" />
                        </div>
                      </div>

                      <br />

                      <div class="row">
                          <div class="col-lg-6">
                              <b>YEAR OBTAINED</b>
                              <input class="date-own form-control" style="width: 300px;" type="text" />
                              <script type="text/javascript">
                                  $('.date-own').datepicker({
                                     minViewMode: 2,
                                     format: 'yyyy'
                                   });
                              </script>
                          </div>
                          <div class="col-lg-6">
                              <b>DOCUMENT TYPE</b>
                              <input type="text" list="documenttype" class="form-control" name="documenttype" />
                              <datalist id="documenttype">
                                <option>Certificate</option>
                                <option>State of Result</option>
                                <option>Testimonial</option>
                                <option>To Whom It may Concern</option>
                              </datalist>
                          </div>
                      </div>
                      <br />

                      <div class="row">
                          <div class="col-lg-6">
                              <b>NYSC</b>
                              <input type="text" class="form-control" list="NYSC" />
                              <datalist id="NYSC">
                                <option> Yes</option>
                                <option>No</option>
                              </datalist>
                          </div>
                          <div class="col-lg-6">
                              <b>RECIEVED YEAR</b>
                              <input class="date-own form-control" style="width: 300px;" type="text" />
                              <script type="text/javascript">
                                  $('.date-own').datepicker({
                                     minViewMode: 2,
                                     format: 'yyyy'
                                   });
                              </script>
                          </div>
                      </div>
                      <br />

                <!-- /button function for this form -->
                          <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                          <?php require_once("footer.php"); ?>
            
             
                </form>
            </div>
        
    </body>
</html>