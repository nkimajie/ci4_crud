<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="jumbotron mt-5">
  <h1 class="display-4">Welcome....</h1>
  <p class="lead">This is a student registration page where you can Create, Read, Update and Delete student record, created with<br>CodeIgniter 4</p>
  <hr class="my-4">
  <p>Register Student Below....</p>
  <a class="btn btn-primary btn-lg" href="/register" role="button">Register Student</a>
</div>

<?= $this->endSection() ?>