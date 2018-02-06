<?php

Lga::$context = $context;
Lga::$params = $param1; //or an array
Lga::pre();
?>

<?php if (Lga::$context == 'new'): ?>
    <h3>Create an LGA</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>lga/create<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-4">
               <b>State</b>
               <select name="state_id" class="form-control">
                   <?php foreach (Lga::$states as $state_id => $state): ?>
                       <option value="<?= $state_id ?>"><?= $state ?></option>
                   <?php endforeach; ?>
               </select>
            </div>
            <div class="col-lg-8">
               <b>LGA</b>
               <input name="lga" type="text" class="form-control" placeholder="LGA" />
            </div>
        </div>
        <br />

        <!-- /button function for this form -->
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <br />
    </form>
<?php endif; ?>

<?php if (Lga::$context == 'edit'): ?>
    <h3>Edit an LGA</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>lga/update<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" readonly class="form-control" placeholder="ID" value="<?= Lga::$single['id'] ?>" />
            </div>
            <div class="col-lg-4">
               <b>State</b>
               <select name="state_id" class="form-control">
                   <?php foreach (Lga::$states as $state_id => $state): ?>
                       <option value="<?= $state_id ?>"
                           <?php
                            if (Lga::$single['state_id'] == $state_id) echo ' selected ';
                           ?>
                           ><?= $state ?></option>
                   <?php endforeach; ?>
               </select>
            </div>
            <div class="col-lg-4">
               <b>LGA</b>
               <input name="lga" type="text" class="form-control" placeholder="LGA" value="<?= Lga::$single['lga'] ?>" />
            </div>
        </div>
        <br />

        <!-- /button function for this form -->
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        <br />
    </form>
<?php endif; ?>

<?php if (Lga::$context == 'delete'): ?>
    <h3>Delete an LGA</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>lga/delete<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-6">
               <b>Confirmation</b>
               <p>Are you sure you want to delete?</p>
            </div>
        </div>
        <br />

        <input name="id" type="hidden" value="<?= $param1 ?>" />

        <!-- /button function for this form -->
        <div class="form-group">
          <button type="submit" class="btn btn-danger">Yes</button>
          <a href="#" class="btn btn-default">No</a>
        </div>
        <br />
    </form>
<?php endif; ?>

<?php if (Lga::$context == 'list'): ?>
    <h3>LGA
    <a href="<?= $_SERVER['REQUEST_URI'] ?>/new" class="btn btn-success">Add</a></h3>
    <hr />
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>S/No</th>
                <th>State</th>
                <th>LGA</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; foreach (Lga::$list as $single => $details): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $details['state_id'] ?></td>
                    <td><?= $details['lga'] ?></td>
                    <td>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/edit/<?= $details['id'] ?>" class="btn btn-default">Edit</a>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/delete/<?= $details['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php ++$index; endforeach ?>
        </tbody>
    </table>
<?php endif; ?>
