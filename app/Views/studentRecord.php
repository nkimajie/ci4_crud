<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
       <div class="col">
           <div class="card m-5">
                   <div class="card-header">
                       <h2 class="text-center text-dark">Student Record</h2>
                   </div>
                   <?php 
                   if(isset($_GET['delete'])){
                       echo "<div class='alert alert-danger' role='alert'>Post Has Been Deleted</div>";
                   }
                   if(isset($_GET['edit'])){
                    echo "<div class='alert alert-success' role='alert'>Update Successful</div>";
                    }  
                   ?>
                   <div class="card-body">
                       <table class="table table-bordered">
                           
                           <thead>
                               <tr>
                                   <td>ID</td>
                                   <td>Firstname</td>
                                   <td>Surname</td>
                                   <td>Phone Number</td>
                                   <td>Student Email</td>
                                   <td>Edit</td>
                                   <td>Delete</td>
                               </tr>
                               
                               
                           </thead>
                           <tbody>
                               <?php $i = 1; foreach ($table as $s) { ?>
                           <tr>   
                                <td><?= $i++ ; ?></td>
                                <td><?= $s['firstname']; ?></td>
                                <td><?= $s['surname']; ?></td>
                                <td><?= $s['number']; ?></td>
                                <td><?= $s['email']; ?></td>
                                
                                <td><a href="/Home/Edit/<?= $s['s_id']; ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="/Home/Delete/<?= $s['s_id']; ?>" class="btn btn-danger">Delete</a></td>
                               </tr>
                               <?php
                                   }
                                   ?>
                           </tbody>
                       </table>
                   </div>
           </div>
       </div>
    </div>
</div>

<?= $this->endSection() ?>