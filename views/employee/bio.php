<h3>PERSONAL INFORMATION</h3>
<hr />

<form action="./controllers/employee.php" method="POST">
  <input name="selector" type="hidden" value="employee.create" />

    <div class="row">
       <div class="col-lg-6">
       <b>Employee ID</b>
       <input name="esn" type="text" class="form-control" />
       </div>

       <div class="col-lg-6">
        <b>MDA</b>
        <input type="text" list="MDA" class="form-control" />
        <datalist id="MDA">
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
        </datalist>
       </div>
    </div>

    <br />

    <div class="row">
       <div class="col-lg-6">
        <b>Status</b>
        <input type="text" list="Status" class="form-control" />
        <datalist id="Status">
          <option>Active</option>
          <option>Non-Active</option>
        </datalist>
       </div>

       <div class="col-lg-6">
        <b>Means of Identification</b>
        <input type="text" list="Means_of_Identification"  class="form-control" />
        <datalist id="Means_of_Identification">
              <option>Staff ID Card</option>
              <option>National ID Card</option>
              <option>Driver's License</option>
              <option>International Passport</option>
        </datalist>
       </div>
    </div>

    <br />
    <div class="row">
        <div class="col-lg-6">
           <b>Number on Means of ID</b>
           <input name="Number on Means of ID" type="text" class="form-control" />
        </div>

        <div class="col-lg-6">
           <b>Employee File Number</b>
           <input name="Employee File Number" type="text" class="form-control" />
        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-lg-4">
           <b>Surname</b>
           <input name="Surname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>FirstName</b>
           <input name="firstname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>MiddleName</b>
           <input name="middlename" type="text" class="form-control" placeholder="Middle name if any" />
        </div>

    </div>

    <br />

    <div class="row">
      <div class="col-lg-6">
         <b>Change of Name</b>
         <br />
         <input name="changeofname"  type="radio" class="radio-inline" /> Yes
         <br/>
         <input name="changeofname" type="radio" class="radio-inline"   /> No
      </div>

      <div class="col-lg-6">
         <b>Gender</b>
         <br />
         <input name="gender"  type="radio" class="radio-inline" /> Male
         <br/>
         <input name="gender" type="radio" class="radio-inline" /> Female
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
           <b>Former Surname</b>
           <input name="formersurname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Former FirstName</b>
           <input name="formerfirstname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Former MiddleName</b>
           <input name="formermiddlename" type="text" class="form-control" placeholder="Middle name if any" />
        </div>
    </div>
    <br />

    <div class="row">
        <div class="col-lg-6">
          <b>Date of Birth</b>
          <input type="Date" name="dateofbirth" class="form-control" />
        </div>

        <div class="col-lg-6">
          <b>Place of Birth</b>
          <input type="text" name="placeofbirth" class="form-control" />
        </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-6">
        <b>Current Address</b>
        <textarea name="currentaddress" class="form-control"></textarea>
      </div>

      <div class="col-lg-6">
        <b>Permanent Address</b>
        <textarea name="permanentaddress" class="form-control"></textarea>
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-5">
        <b>State of Origin</b>
        <input type="text" list="State_of_Origin" class="form-control"/>
        <datalist id="State_of_Origin">
          <Option>Abia State<Option>
          <Option>Adamawa State<Option>
          <Option>Akwa Ibom State<Option>
          <Option>Anambra State<Option>
          <Option>Bauchi State<Option>
          <Option>Bayelsa State<Option>
          <Option>Benue State<Option>
          <Option>Borno State<Option>
          <Option>Cross River State<Option>
          <Option>Delta State<Option>
          <Option>Ebonyi State<Option>
          <Option>Edo State<Option>
          <Option>Ekiti State<Option>
          <Option>Enugu State<Option>
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
          <Option>Zamfara<Option>
          <Option>FCT<Option>
        </datalist>
      </div>
      <div class="col-lg-4">
        <b>Local Government Area</b>
        <input type="text" list="Local_Government_Area" class="form-control" />
        <datalist id="Local_Government_Area">
            <Option>Ado<Option>
            <Option>Agatu<Option>
            <Option>Apa<Option>
            <Option>Buruku<Option>
            <Option>Gboko<Option>
            <Option>Guma<Option>
            <Option>Gwer East<Option>
            <Option>Gwer West<Option>
            <Option>Katsina-Ala<Option>
            <Option>Konshisha<Option>
            <Option>Kwande<Option>
            <Option>Logo<Option>
            <Option>Makurdi<Option>
            <Option>Obi<Option>
            <Option>Ogbadibo<Option>
            <Option>Ohimini<Option>
            <Option>Oju<Option>
            <Option>Okpokwu<Option>
            <Option>Otukpo<Option>
            <Option>Tarka<Option>
            <Option>Ukum<Option>
            <Option>Ushongo<Option>
            <Option>Vandeikya<Option>
        </datalist>
      </div>
      <div class="col-lg-3">
        <b>Other LGA</b>
        <input type="text" name="otherlga" class="form-control" />
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
        <b>Telephone Number</b>
        <input type="tel" name="Telephone" class="form-control" value="" size="11" maxlength="11" required="required" title="" />
      </div>
      <div class="col-lg-4">
        <b>Alternative Phone Number</b>
        <input type="tel" name="alternativephone" class="form-control" value="" size="11" maxlength="11" required="required" title="">
      </div>
      <div class="col-lg-4">
        <b>Email Address</b>
        <input type="text" name="emailaddress" class="form-control">
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
        <b>Marital Status</b>
        <input type="text" list="Marital_Status" class="form-control" />
        <datalist id="Marital_Status">
            <Option>Married<Option>
            <Option>Single<Option>
            <Option>Widow<Option>
            <Option>Widower<Option>
            <Option>Divorced<Option>
        </datalist>
      </div>
      <div class="col-lg-4">
        <b>Number of Children</b>
        <input type="number" class="form-control" name="numberofchildren">
      </div>
      <div class="col-lg-4">
        <b>Number of Dependant</b>
        <input type="number" class="form-control" name="numberofdependant">
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-6">
        <b>Next of Kin</b>
        <input type="text" name="nextofkin" class="form-control">
      </div>
      <div class="col-lg-6">
        <b>Next of Kin Address</b>
        <textarea name="nextofkinaddress" class="form-control"></textarea>
      </div>
    </div><br />

    <div class="row">
      <div class="col-lg-6">
        <b>Next of Kin Phone Number</b>
        <input type="tel" name="nextofkinphone" class="form-control" value="" size="11" maxlength="11" required="required" title="">
      </div>
      <div class="col-lg-6">
        <b>Next of Kin Relationship</b>
        <input type="text" name="nextofkinrelationship" class="form-control">
      </div>
    </div>
    <br />

    <div class="row">
        <div class="col-lg-6">
          <b>Next of Kin2</b>
          <input type="text" name="nextofkin2" class="form-control">
        </div>
        <div class="col-lg-6">
          <b>Next of Kin2 Address</b>
          <textarea name="nextofkin2address" class="form-control"></textarea>
        </div>
    </div><br />

    <div class="row">
        <div class="col-lg-6">
          <b>Next of Kin2 Phone Number</b>
          <input type="tel" name="nextofkin2phone" class="form-control" value="" size="11" maxlength="11" required="required" title="">
        </div>
        <div class="col-lg-6">
          <b>Next of Kin2 Relationship</b>
          <input type="text" name="nextofkin2relationship" class="form-control">
        </div>
    </div><br />

    <!-- /button function for this form -->
    <div class="form-group pull-right">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>

</form>
