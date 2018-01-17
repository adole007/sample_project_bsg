<?php

Marital::$context = $context;
Marital::$params = $param1; //or an array
Marital::pre();
?>

<?php if (Marital::$context == 'new'): ?>
    <h3>Create a Marital status</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>marital/create<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-9">
               <b>Title</b>
               <input name="title" type="text" class="form-control" placeholder="Title" />
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

<?php if (Marital::$context == 'edit'): ?>
    <h3>Edit a Marital status</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>marital/update<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" readonly class="form-control" placeholder="ID" value="<?= Marital::$single['id'] ?>" />
            </div>
            <div class="col-lg-9">
               <b>Title</b>
               <input name="title" type="text" class="form-control" placeholder="Title" value="<?= Marital::$single['title'] ?>" />
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

<?php if (Marital::$context == 'delete'): ?>
    <h3>Delete a Marital status</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>marital/delete<?= '.php' ?>">
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

<?php if (Marital::$context == 'list'): ?>
    <h3>Martial status
    <a href="<?= $_SERVER['REQUEST_URI'] ?>/new" class="btn btn-success">Add</a></h3>
    <hr />
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>S/No</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; foreach (Marital::$list as $single => $details): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $details['title'] ?></td>
                    <td>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/edit/<?= $details['id'] ?>" class="btn btn-default">Edit</a>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>/delete/<?= $details['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php ++$index; endforeach ?>
        </tbody>
    </table>
<?php endif; ?>
