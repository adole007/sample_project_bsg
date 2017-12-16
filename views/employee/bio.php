<h3>PERSONAL INFORMATION</h3>
<hr />

<?php $flag = 'create' ?>

<?php if ($flag == 'create' || $flag == 'edit'): ?>
<form action="<?= CONTROLLER ?>employee/create<?= '.php' ?>" method="POST">
  <input name="selector" type="hidden" value="employee.create" />

    <div class="row">
       <div class="col-lg-6">
          <b>Employee File Number</b>
          <input name="esn" type="text" class="form-control" />
      </div>
      <div class="col-lg-6">
        <b>Status</b>
        <input name="status" type="text" list="Status" class="form-control" />
        <datalist id="Status">
          <option>Active</option>
          <option>Non-Active</option>
        </datalist>
      </div>
       
    </div>

    <br />

    <div class="row">
        <div class="col-lg-4">
           <b>Surname</b>
           <input name="surname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Firstname</b>
           <input name="firstname" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Middlename</b>
           <input name="middlename" type="text" class="form-control" placeholder="Middle name if any" />
        </div>

    </div>

    <br />

    <div class="row">
      <div class="col-lg-6">
         <b>Gender</b>
         <br />
         <input name="gender"  type="radio" value="M" class="radio-inline" /> Male
         <input name="gender" type="radio" value="F" class="radio-inline" /> Female
      </div>

      <div class="col-lg-6">
         <b>Change of Name</b>
         <br />
         <input name="changeofname"  type="radio" value="Y" class="radio-inline" /> Yes
         <input name="changeofname" type="radio" value="N" class="radio-inline"   /> No
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
           <b>Former Surname</b>
           <input name="surname_f" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Former Firstname</b>
           <input name="firstname_f" type="text" class="form-control" />
        </div>

        <div class="col-lg-4">
           <b>Former Middlename</b>
           <input name="middlename_f" type="text" class="form-control" placeholder="Middle name if any" />
        </div>
    </div>
    <br />

    <div class="row">
        <div class="col-lg-6">
          <b>Date of Birth</b>
          <input type="Date" name="dob" class="form-control" />
        </div>

        <div class="col-lg-6">
          <b>Place of Birth</b>
          <input type="text" name="pob" class="form-control" />
        </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-6">
        <b>Current Address</b>
        <textarea name="address_c" class="form-control"></textarea>
      </div>

      <div class="col-lg-6">
        <b>Permanent Address</b>
        <textarea name="address_p" class="form-control"></textarea>
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-5">
        <b>State of Origin</b>
        <input type="text" list="s_origin" class="form-control"/>
      </div>
      <div class="col-lg-4">
        <b>Local Government Area</b>
        <input type="text" list="lga_origin" class="form-control" />
      
      </div>
      <div class="col-lg-3">
        <b>Other LGA</b>
        <input type="text" name="lga_other" class="form-control" />
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
        <b>Telephone Number</b>
        <input type="tel" name="phone" class="form-control" value="" size="11" maxlength="11" required="required" placeholder="08012345678" />
      </div>
      <div class="col-lg-4">
        <b>Alternative Phone Number</b>
        <input type="tel" name="phone_alt" class="form-control" value="" size="11" maxlength="11" required="required" placeholder="08012345678" />
      </div>
      <div class="col-lg-4">
        <b>Email Address</b>
        <input type="email" name="email" class="form-control">
      </div>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-4">
        <b>Marital Status</b>
        <input type="text" name="status_marital" list="status_marital" class="form-control" />
        <datalist id="status_marital">
            <Option>Married<Option>
            <Option>Single<Option>
            <Option>Widow<Option>
            <Option>Widower<Option>
            <Option>Divorced<Option>
        </datalist>
      </div>
      <div class="col-lg-4">
        <b>Number of Children</b>
        <input name="children" type="number" class="form-control" >
      </div>
      <div class="col-lg-4">
        <b>Number of Dependents</b>
        <input name="dependents" type="number" class="form-control">
      </div>
    </div>
    <br />

    <!-- /button function for this form -->
    <div class="form-group pull-right">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>

</form>
<?php endif; ?>

<?php if ($flag == 'view'): ?>
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
<?php endif; ?>