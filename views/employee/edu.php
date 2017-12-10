<form action="insert.php" method="post">
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
    
</form>
