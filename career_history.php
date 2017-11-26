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
            <?php $tab = "career_history"; require_once("nav.php"); ?>
            <?php $tab = "career_history"; require_once("nav_tab.php"); ?>
                
            <h3>CAREER HISTORY</h3>
            <hr />
            <form action="./controllers/career_history.php" method="POST">
              <input name="selector" type="hidden" value="career_history.create" />
                  
                   <!-- Labels on forms -->
                  <div class="row">
                      <div class="col-lg-6">
                          <b>EMPLOYEE'S ID</b>
                          <input name="esn" type="text" class="form-control" />
                      </div>
                      <div class="col-lg-6">
                          <b>MDA</b>
                          <input type="text" list="MDA" class="form-control" />
                          <datalist id="MDA">
                              <Option>Government House</Option>
                              <Option>Deputy Governor’s Office</Option>
                              <Option>Office Of The Secretary To The State Govt</Option>
                              <Option>General Administration Department (Ohcs)</Option>
                              <Option>Estabs & Servicom Matters Bureau- Ohcs</Option>
                              <Option>Office Of The State Accountant General</Option>
                              <Option>Officer Of State Auditor General </Option>
                              <Option>Office Of The Local Govt Auditor General</Option>
                              <Option>Ministry Of Finance & Eco. Development</Option>
                              <Option>Ministry Of Health</Option>
                              <Option>Ministry Of Women Affairs& Child Development</Option>
                              <Option>Ministry Of Agric. And Natural Resources</Option>
                              <Option>Ministry Of Commerce, Industry & Cooperative</Option>
                              <Option>Ministry Of Justice</Option>
                              <Option>Ministry Of Works, Lands & Housing</Option>
                              <Option>Ministry Of Water Resources</Option>
                              <Option>Ministry Of Information, Culture & Tourism</Option>
                              <Option>Ministry Of Social Welfare, Youth & Sports</Option>
                              <Option>Ministry Of Science & Technology</Option>
                              <Option>Ministry Of Education</Option>
                              <Option>Ministry Of Rural & Community Development</Option>
                              <Option>Ministry Of Local Government Affairs</Option>
                              <Option>Ministry Of Mines, Power, Energy & Environment</Option>
                              <Option>Ministry Of Religious Affairs & Comm. Rel.</Option>
                              <Option>State Planning Commission</Option>
                              <Option>Muslim Pilgrims Welfare Board</Option>
                              <Option>Christian Pilgrims Welfare Board</Option>
                              <Option>Bauchi State Scholarship Board</Option>
                              <Option>Bauchi State Library Board</Option>
                              <Option>Board Of Internal Revenue</Option>
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
                              <Option>House Of Assembly Service Commission</Option>
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
                              <Option>College Of Nursing & Midwifery</Option>
                              <Option>Bauchi State House Of Assembly</Option>
                              <Option>Bauchi State Judiciary</Option>
                              <Option>Bauchi State Institute Of Education Kangere</Option>
                              <Option>Abubakar Tatari Ali Polytechnic</Option>
                              <Option>College Of Education Azare</Option>
                              <Option>A.D. Rufai Col. For Legal & Islamic Studies, Misau</Option>
                              <Option>College Of Agricuture Bauchi</Option>
                              <Option>College Of Health Technology Ningi</Option>
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
                              <Option>Sharia Court Of Appeal</Option>        
                          </datalist>
                      </div>
                  </div>
                  <br />

                  <div class="row">
                        <div class="col-lg-6">
                           <b>UNIT/SECTION</b>
                           <input name="unit_section" type="text" class="form-control" />
                        </div>
   
                        <div class="col-lg-6">
                            <b>WORKSTATION</b>
                            <input name="workstation" type="text" class="form-control" />
                        </div>
                  </div>
                  <br />

                  <div class="row">
                        <div class="col-lg-6">
                            <b>JOBTITLE</b>
                            <input name="jobtitle" type="text" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                            <b>RANK</b>
                            <input type="text" list="Rank" class="form-control" />
                            <datalist id="Rank">
                                 <option>Accountant</option>
                                 <option>Assistant Chief Clerical Officer</option>
                                 <option>Senior Clerical Officer</option>
                                 <option>Senior Data processing Officerr</option>
                                 <option>Chief Sectarial Assistant</option>
                                 <option>Senior Secretarial Assistant I</option>
                                 <option>Chief Clerical Officer</option>
                                 <option>S.M. D I</option>
                                 <option>Higher Works Superitendent</option>
                                 <option>H. I. N.S .P</option>
                                 <option>Senior Motor Driver</option>
                                 <option>Clerical Officer</option>
                                 <option>Senior Motor Driver</option>
                                 <option>Senior Motor Driver I</option>
                                 <option>Senior Messenger</option>
                                 <option>Head Watchman</option>
                                 <option>Senior Watchman</option>
                                 <option>Security Guard Grade II</option>
                            </datalist>
                        </div>
                  </div>
                  <br />

                  <div class="row">
                        <div class="col-lg-6">
                            <b>SALARY STRUCTURE</b>
                            <input type="text" list="salary_structure" class="form-control" />
                            <datalist id="salary_structure">
                                  <option>Normal GL</option>
                                  <option>Conhess</option>
                                  <option>Conmess</option>
                                  <option>Compcass</option>
                                  <option>Contediss</option>
                                  <option>Hatiss</option>
                            </datalist>
                        </div>
                        <div class="col-lg-6">
                             <b>GRADE LEVEL</b>
                             <input name="grade_level" type="number" class="form-control"  />
                        </div>
                  </div>
                  <br />

                  <div class="row">
                        <div class="col-lg-6">
                            <b>STEP</b2>
                            <input name="step" type="number" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                           <b>FIXED</b>
                           <input name="fixed" type="number" class="form-control" />
                        </div>
                  </div>
                  <br />

                  <div class="row">
                         <div class="col-lg-6">
                              <b>APPOINTMENT CATEGORY</b>
                              <input type="text" list="appointment_category" class="form-control" />
                              <datalist id="appointment_category">
                                  <option>Permanent</option>
                                  <option>Temporary</option>
                              </datalist>
                          </div>
                          <div class="col-lg-6">
                          <b>COMFIRMATION DATE</b>
                          <input name="comfirmation_date"  type="Date" class="form-control" />
                          </div> 
                  </div>
                  <br />

                  <div class="row">
                     <div class="col-lg-6">
                          <b>APPLDATE</b>
                          <input name="APPLDATE" type="Date" class="form-control" />
                      </div> 
                      <div class="col-lg-6">
                          <b>CIVIL SERVICE FORM DATE</b>
                          <input name="civil_service_form_date" type="Date" class="form-control" />
                      </div> 
                  </div>
                  <br />

                  <div class="row">
                      <div class="col-lg-6">
                            <b>TEMPORARY APPT. DATE</b>
                            <input name="temporary_appt_date" type="Date" class="form-control" />
                      </div> 

                      <div class="col-lg-6">
                            <b>PERMANENT APPT DATE</b>
                            <input name="permanent_appy_date" type="Date" class="form-control" />
                      </div> 
                  </div>
                  <br />

                  <div class="row">
                        <div class="col-lg-6">
                              <b>APPOINTMENT AUTHORISATION</b>
                              <input name="appointment_authorisation" type="text" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                        <b>DATE ON ACCEPTANCE LETTER</b>
                        <input name="date_on_acceptance_letter" type="Date" class="form-control" />
                        </div> 
                  </div>
          
            <!-- /button function for this form -->
                  <div class="form-group pull-right">
                     <button type="submit" class="btn btn-success">Create</button>
                  </div>
                  <?php require_once("footer.php"); ?>
                  
            </form>
      </dev>
    </body>
</html>