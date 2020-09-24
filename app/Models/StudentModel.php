<?php namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model {

    protected $table = 'students';
    protected $primaryKey = 's_id';


    protected $allowedFields = ['firstname', 'surname', 'number', 'email'];
}