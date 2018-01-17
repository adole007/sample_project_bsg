<?php

Id::$context = $context;
Id::$params = $param1; //or an array
Id::pre();
?>

<?php if (Id::$context == 'new'): ?>
    <h3>Create a Means of Identification</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>id/create<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-9">
               <b>Identification</b>
               <input name="type" type="text" class="form-control" placeholder="Type" />
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

<?php if (Id::$context == 'edit'): ?>
    <h3>Edit a Means of Identification</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>id/update<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" readonly class="form-control" placeholder="ID" value="<?= Id::$single['id'] ?>" />
            </div>
            <div class="col-lg-9">
               <b>Title</b>
               <input name="type" type="text" class="form-control" placeholder="Type" value="<?= Id::$single['type'] ?>" />
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

<?php if (Id::$context == 'delete'): ?>
    <h3>Delete a  Means of Identification</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>id/delete<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-6">
               <b>Confirmation</b>
               <p>Are you sure you want to delete an ID?</p>
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

<?php if (Id::$context == 'list'): ?>
    <h3>Means of Identification
    <a href="<?= $_SERVER['REQUEST_URI'] ?>/new" class="btn btn-success">Add</a></h3>
    <hr />
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>S/No</th>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; foreach (Id::$list as $single => $details): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $details['id'] ?></td>
                    <td><?= $details['type'] ?></td>
                    <td>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/edit/<?= $details['id'] ?>" class="btn btn-default">Edit</a>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/delete/<?= $details['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php ++$index; endforeach ?>
        </tbody>
    </table>
<?php endif; ?>
