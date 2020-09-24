<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>


<form method="post" action="register" class="mt-5">
<h2>Register Student</h2>
<?php
if(isset($_GET['registered'])){
  echo "<div class='alert alert-success' role='alert'>Registration Successful</div>";
}
?>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="form-group">
    <label >Surname</label>
    <input class="form-control" type="text" name="surname">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control" name="number">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>

  <button type="submit" class="btn btn-primary" >Submit</button>
</form>

<?= $this->endSection() ?>