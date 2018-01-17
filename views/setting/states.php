<?php

State::$context = $context;
State::$params = $param1; //or an array
State::pre();
?>

<?php if (State::$context == 'new'): ?>
    <h3>Create a State</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>state/create<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" class="form-control" placeholder="ID" />
            </div>
            <div class="col-lg-9">
               <b>State</b>
               <input name="state" type="text" class="form-control" placeholder="State" />
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

<?php if (State::$context == 'edit'): ?>
    <h3>Edit a State</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>state/update<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" readonly class="form-control" placeholder="ID" value="<?= State::$single['id'] ?>" />
            </div>
            <div class="col-lg-9">
               <b>State</b>
               <input name="state" type="text" class="form-control" placeholder="State" value="<?= State::$single['state'] ?>" />
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

<?php if (State::$context == 'delete'): ?>
    <h3>Delete a State</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>state/delete<?= '.php' ?>">
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

<?php if (State::$context == 'list'): ?>
    <h3>States
    <a href="<?= $_SERVER['REQUEST_URI'] ?>/new" class="btn btn-success">Add</a></h3>
    <hr />
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>S/No</th>
                <th>ID</th>
                <th>State</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; foreach (State::$list as $single => $details): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $details['id'] ?></td>
                    <td><?= $details['state'] ?></td>
                    <td>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/edit/<?= $details['id'] ?>" class="btn btn-default">Edit</a>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/delete/<?= $details['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php ++$index; endforeach ?>
        </tbody>
    </table>
<?php endif; ?>
