

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
                            <?php $tab = "transfer_of_service"; require_once("nav.php"); ?>
                            <?php $tab = "transfer_of_service"; require_once("nav_tab.php"); ?>
                            <h4> TRANSFER OF SERVICE</H4>
                      <div class="row">
                            <div class="col-lg-6">
                                <b>TYPE OF TRANSFER</b>
                                <input type="text" list="TYPE OF TRANSFER" class="form-control" />
                                <datalist id="type_of_transfers">
                                  <Option>Normal Transfer</Option>
                                  <Option>Deployment</Option>
                                  <Option>Secondment</Option>
                                </datalist>
                            </div>
                            <div class="col-lg-6">
                                  <b>TO</b>
                                  <input type="text" list="to" class="form-control" />
                                  <datalist id="to">
                                      <Option>Government House</Option>
                                      <Option>Deputy Governor’s office</Option>
                                      <Option>office of The Secretary To The State Govt</Option>
                                      <Option>General Administration Department (Ohcs)</Option>
                                      <Option>Estabs & Servicom Matters Bureau- Ohcs</Option>
                                      <Option>office of The State Accountant General</Option>
                                      <Option>officer of State Auditor General </Option>
                                      <Option>office of The Local Govt Auditor General</Option>
                                      <Option>Ministry of Finance & Eco. Development</Option>
                                      <Option>Ministry of Health</Option>
                                      <Option>Ministry of Women Affairs& Child Development</Option>
                                      <Option>Ministry of Agric. And Natural Resources</Option>
                                      <Option>Ministry of Commerce, Industry & Cooperative</Option>
                                      <Option>Ministry of Justice</Option>
                                      <Option>Ministry of Works, Lands & Housing</Option>
                                      <Option>Ministry of Water Resources</Option>
                                      <Option>Ministry of Information, Culture & Tourism</Option>
                                      <Option>Ministry of Social Welfare, Youth & Sports</Option>
                                      <Option>Ministry of Science & Technology</Option>
                                      <Option>Ministry of Education</Option>
                                      <Option>Ministry of Rural & Community Development</Option>
                                      <Option>Ministry of Local Government Affairs</Option>
                                      <Option>Ministry of Mines, Power, Energy & Environment</Option>
                                      <Option>Ministry of Religious Affairs & Comm. Rel.</Option>
                                      <Option>State Planning Commission</Option>
                                      <Option>Muslim Pilgrims Welfare Board</Option>
                                      <Option>Christian Pilgrims Welfare Board</Option>
                                      <Option>Bauchi State Scholarship Board</Option>
                                      <Option>Bauchi State Library Board</Option>
                                      <Option>Board of Internal Revenue</Option>
                                      <Option>Bauchi State Development Board</Option>
                                      <Option>Local Government Pension Board</Option>
                                      <Option>Bauchi State Universal Basic Education Board</Option>
                                      <Option>Special Schools Management Board</Option>
                                      <Option>Bauchi State Water Board</Option>
                                      <Option>Hospitals Management Board</Option>
                                      <Option>Bauchi State Pension Board</Option>
                                      <Option>Specialist Hospital Board Bauchi</Option>
                                      <Option>Local Government Service Commission</Option>
                                      <Option>State Independent Electoral Commission</Option>
                                      <Option>Civil Service Commission</Option>
                                      <Option>Teachers’ Service Commission</Option>
                                      <Option>House of Assembly Service Commission</Option>
                                      <Option>Bauchi State Boundary Commission</Option>
                                      <Option>Bauchi State Shariah Commission</Option>
                                      <Option>Debt Management Agency</Option>
                                      <Option>State Agency For Persons With Disability</Option>
                                      <Option>Drugs & Medical Consumables Mgt. Agency</Option>
                                      <Option>Bauchi State Orphans And Vulnerable Children Agency</Option>
                                      <Option>Sustainable Develop0ment Goals</Option>
                                      <Option>R U W A S S A </Option>
                                      <Option>Primary Health Care Development Agency</Option>
                                      <Option>Bauchi State Agency For Mass Education</Option>
                                      <Option>State Emergency Management Agency</Option>
                                      <Option>Bauchi State Environmental Protection Agency</Option>
                                      <Option>B A C A T M A</Option>
                                      <Option>Bauchi State Agency For Nomadic Education</Option>
                                      <Option>Bauchi State Agency For Youth & Women Dev.</Option>
                                      <Option>Yankari Transport Company</Option>
                                      <Option>Bauchi State Agricultural Supply Co.</Option>
                                      <Option>Bauchi State Agricultural Dev. Progamme</Option>
                                      <Option>Galambi Ranching Company </Option>
                                      <Option>College of Nursing & Midwifery</Option>
                                      <Option>Bauchi State House of Assembly</Option>
                                      <Option>Bauchi State Judiciary</Option>
                                      <Option>Bauchi State Institute of Education Kangere</Option>
                                      <Option>Abubakar Tatari Ali Polytechnic</Option>
                                      <Option>College of Education Azare</Option>
                                      <Option>A.D. Rufai Col. For Legal & Islamic Studies, Misau</Option>
                                      <Option>College of Agricuture Bauchi</Option>
                                      <Option>College of Health Technology Ningi</Option>
                                      <Option>Bauchi State Television Authority</Option>
                                      <Option>Bauchi Radio Corporation</Option>
                                      <Option>Bauchi State Sports Council</Option>
                                      <Option>Central Store Organization</Option>
                                      <Option>Yankari Express Corporation</Option>
                                      <Option>Bauchi Zonal Education I</Option>
                                      <Option>Bauchi Zonal Education Ii</Option>
                                      <Option>Katagum Zonal Education I</Option>
                                      <Option>Katagum Zonal Education Ii</Option>
                                      <Option>Central Zonal Education I Darazo</Option>
                                      <Option>Central Zonal Education Ii Misau</Option>
                                      <Option>Treasury Division</Option>
                                      <Option>Sharia Court of Appeal</Option>
                                      <Option>Abia State<Option>
                                      <Option>Adamawa State<Option>
                                      <Option>Anambra State<Option>
                                      <Option>Akwa Ibom State<Option>
                                      <Option>Bauchi State<Option>
                                      <Option>Bayelsa State<Option>
                                      <Option>Benue State<Option>
                                      <Option>Borno State<Option>
                                      <Option>Cross River State<Option>
                                      <Option>Delta State<Option>
                                      <Option>Ebonyi State<Option>
                                      <Option>Enugu State<Option>
                                      <Option>Edo State<Option>
                                      <Option>Ekiti State<Option>
                                      <Option>Gombe State<Option>
                                      <Option>Imo State<Option>
                                      <Option>Jigawa State<Option>
                                      <Option>Kaduna State<Option>
                                      <Option>Kano State<Option>
                                      <Option>Katsina State<Option>
                                      <Option>Kebbi State<Option>
                                      <Option>Kogi State<Option>
                                      <Option>Kwara State<Option>
                                      <Option>Lagos State<Option>
                                      <Option>Nasarawa State<Option>
                                      <Option>Niger State<Option>
                                      <Option>Ogun State<Option>
                                      <Option>Ondo State<Option>
                                      <Option>Osun State<Option>
                                      <Option>Oyo State<Option>
                                      <Option>Plateau State<Option>
                                      <Option>Rivers State<Option>
                                      <Option>Sokoto State<Option>
                                      <Option>Taraba State<Option>
                                      <Option>Yobe State<Option>
                                      <Option>Zamfara State<Option>
                                  </datalist>
                            </div>
                      </div>
                      <br />

                      <div class="row">
                            <div class="col-lg-6">
                                <b>FROM</b>
                                <input type="text" list="from" class="form-control" />
                                <datalist id="from">
                                    <Option>Government House</Option>
                                    <Option>Deputy Governor’s office</Option>
                                    <Option>office of The Secretary To The State Govt</Option>
                                    <Option>General Administration Department (Ohcs)</Option>
                                    <Option>Estabs & Servicom Matters Bureau- Ohcs</Option>
                                    <Option>office of The State Accountant General</Option>
                                    <Option>officer of State Auditor General </Option>
                                    <Option>office of The Local Govt Auditor General</Option>
                                    <Option>Ministry of Finance & Eco. Development</Option>
                                    <Option>Ministry of Health</Option>
                                    <Option>Ministry of Women Affairs& Child Development</Option>
                                    <Option>Ministry of Agric. And Natural Resources</Option>
                                    <Option>Ministry of Commerce, Industry & Cooperative</Option>
                                    <Option>Ministry of Justice</Option>
                                    <Option>Ministry of Works, Lands & Housing</Option>
                                    <Option>Ministry of Water Resources</Option>
                                    <Option>Ministry of Information, Culture & Tourism</Option>
                                    <Option>Ministry of Social Welfare, Youth & Sports</Option>
                                    <Option>Ministry of Science & Technology</Option>
                                    <Option>Ministry of Education</Option>
                                    <Option>Ministry of Rural & Community Development</Option>
                                    <Option>Ministry of Local Government Affairs</Option>
                                    <Option>Ministry of Mines, Power, Energy & Environment</Option>
                                    <Option>Ministry of Religious Affairs & Comm. Rel.</Option>
                                    <Option>State Planning Commission</Option>
                                    <Option>Muslim Pilgrims Welfare Board</Option>
                                    <Option>Christian Pilgrims Welfare Board</Option>
                                    <Option>Bauchi State Scholarship Board</Option>
                                    <Option>Bauchi State Library Board</Option>
                                    <Option>Board of Internal Revenue</Option>
                                    <Option>Bauchi State Development Board</Option>
                                    <Option>Local Government Pension Board</Option>
                                    <Option>Bauchi State Universal Basic Education Board</Option>
                                    <Option>Special Schools Management Board</Option>
                                    <Option>Bauchi State Water Board</Option>
                                    <Option>Hospitals Management Board</Option>
                                    <Option>Bauchi State Pension Board</Option>
                                    <Option>Specialist Hospital Board Bauchi</Option>
                                    <Option>Local Government Service Commission</Option>
                                    <Option>State Independent Electoral Commission</Option>
                                    <Option>Civil Service Commission</Option>
                                    <Option>Teachers’ Service Commission</Option>
                                    <Option>House of Assembly Service Commission</Option>
                                    <Option>Bauchi State Boundary Commission</Option>
                                    <Option>Bauchi State Shariah Commission</Option>
                                    <Option>Debt Management Agency</Option>
                                    <Option>State Agency For Persons With Disability</Option>
                                    <Option>Drugs & Medical Consumables Mgt. Agency</Option>
                                    <Option>Bauchi State Orphans And Vulnerable Children Agency</Option>
                                    <Option>Sustainable Develop0ment Goals</Option>
                                    <Option>R U W A S S A </Option>
                                    <Option>Primary Health Care Development Agency</Option>
                                    <Option>Bauchi State Agency For Mass Education</Option>
                                    <Option>State Emergency Management Agency</Option>
                                    <Option>Bauchi State Environmental Protection Agency</Option>
                                    <Option>B A C A T M A</Option>
                                    <Option>Bauchi State Agency For Nomadic Education</Option>
                                    <Option>Bauchi State Agency For Youth & Women Dev.</Option>
                                    <Option>Yankari Transport Company</Option>
                                    <Option>Bauchi State Agricultural Supply Co.</Option>
                                    <Option>Bauchi State Agricultural Dev. Progamme</Option>
                                    <Option>Galambi Ranching Company </Option>
                                    <Option>College of Nursing & Midwifery</Option>
                                    <Option>Bauchi State House of Assembly</Option>
                                    <Option>Bauchi State Judiciary</Option>
                                    <Option>Bauchi State Institute of Education Kangere</Option>
                                    <Option>Abubakar Tatari Ali Polytechnic</Option>
                                    <Option>College of Education Azare</Option>
                                    <Option>A.D. Rufai Col. For Legal & Islamic Studies, Misau</Option>
                                    <Option>College of Agricuture Bauchi</Option>
                                    <Option>College of Health Technology Ningi</Option>
                                    <Option>Bauchi State Television Authority</Option>
                                    <Option>Bauchi Radio Corporation</Option>
                                    <Option>Bauchi State Sports Council</Option>
                                    <Option>Central Store Organization</Option>
                                    <Option>Yankari Express Corporation</Option>
                                    <Option>Bauchi Zonal Education I</Option>
                                    <Option>Bauchi Zonal Education Ii</Option>
                                    <Option>Katagum Zonal Education I</Option>
                                    <Option>Katagum Zonal Education Ii</Option>
                                    <Option>Central Zonal Education I Darazo</Option>
                                    <Option>Central Zonal Education Ii Misau</Option>
                                    <Option>Treasury Division</Option>
                                    <Option>Sharia Court of Appeal</Option>
                                    <Option>Abia State<Option>
                                    <Option>Adamawa State<Option>
                                    <Option>Anambra State<Option>
                                    <Option>Akwa Ibom State<Option>
                                    <Option>Bauchi State<Option>
                                    <Option>Bayelsa State<Option>
                                    <Option>Benue State<Option>
                                    <Option>Borno State<Option>
                                    <Option>Cross River State<Option>
                                    <Option>Delta State<Option>
                                    <Option>Ebonyi State<Option>
                                    <Option>Enugu State<Option>
                                    <Option>Edo State<Option>
                                    <Option>Ekiti State<Option>
                                    <Option>Gombe State<Option>
                                    <Option>Imo State<Option>
                                    <Option>Jigawa State<Option>
                                    <Option>Kaduna State<Option>
                                    <Option>Kano State<Option>
                                    <Option>Katsina State<Option>
                                    <Option>Kebbi State<Option>
                                    <Option>Kogi State<Option>
                                    <Option>Kwara State<Option>
                                    <Option>Lagos State<Option>
                                    <Option>Nasarawa State<Option>
                                    <Option>Niger State<Option>
                                    <Option>Ogun State<Option>
                                    <Option>Ondo State<Option>
                                    <Option>Osun State<Option>
                                    <Option>Oyo State<Option>
                                    <Option>Plateau State<Option>
                                    <Option>Rivers State<Option>
                                    <Option>Sokoto State<Option>
                                    <Option>Taraba State<Option>
                                    <Option>Yobe State<Option>
                                    <Option>Zamfara State<Option>
                                </datalist>
                            </div>
                            <div class="col-lg-6">
                                <b>EFFECTIVE DATE</b>
                                <input type="Date" class="form-control" name="effective_date" />
                            </div> 
                      </div>
                      <br />


        
                <!-- /button function for this form -->
                          <div class="form-group pull-left">
                            <button type="submit" class="btn btn-success">Add More</button>
                          </div>
                          <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                          <?php require_once("footer.php"); ?>

                </form>
            </div>

           	
        </body>
</html>