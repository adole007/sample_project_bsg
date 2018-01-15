<?php

//Search::$context = $context;
//Search::$params = $param1; //or an array
//Search::pre();
?>

<?php //if (Search::$context == 'new'): ?>
    <h3>Search by ESNID</h3>
    <hr />
    <form method="POST" >
        <div class="row">
            <div class="col-lg-6">
               <b>Enter ESNID</b>
               <input name="esnid" type="text" class="form-control" placeholder="Employee ID" />
            </div>
        </div>
        <br />

        <!-- /button function for this form -->
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <br />
    </form>
<?php //endif; ?>
