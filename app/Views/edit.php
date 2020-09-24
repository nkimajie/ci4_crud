<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>


<form method="post" action="" class="mt-5">
<h2>Edit Student Record</h2>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" value="<?= $edit['firstname']; ?>">
  </div>
  <div class="form-group">
    <label >Surname</label>
    <input class="form-control" type="text" name="surname" value="<?= $edit['surname']; ?>">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control" name="number" value="<?= $edit['number']; ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?= $edit['email']; ?>">
  </div>

  <button type="submit" class="btn btn-primary" >Update</button>
</form>

<?= $this->endSection() ?>