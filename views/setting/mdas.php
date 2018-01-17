<?php

Mda::$context = $context;
Mda::$params = $param1; //or an array
Mda::pre();
?>

<?php if (Mda::$context == 'new'): ?>
    <h3>Create a MDA</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>mda/create<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-9">
               <b>MDA</b>
               <input name="title" type="text" class="form-control" placeholder="title" />
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

<?php if (Mda::$context == 'edit'): ?>
    <h3>Edit a Title</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>mda/update<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-3">
               <b>ID</b>
               <input name="id" type="text" readonly class="form-control" placeholder="ID" value="<?= Mda::$single['id'] ?>" />
            </div>
            <div class="col-lg-9">
               <b>Title</b>
               <input name="title" type="text" class="form-control" placeholder="title" value="<?= Mda::$single['title'] ?>" />
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

<?php if (Mda::$context == 'delete'): ?>
    <h3>Delete a Title</h3>
    <hr />
    <form method="POST" action="<?= CONTROLLER ?>mda/delete<?= '.php' ?>">
        <div class="row">
            <div class="col-lg-6">
               <b>Confirmation</b>
               <p>Are you sure you want to delete an MDA?</p>
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

<?php if (Mda::$context == 'list'): ?>
    <h3>Mdas
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
            <?php $index = 1; foreach (Mda::$list as $single => $details): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $details['id'] ?></td>
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
