<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class todo extends BaseController{
    function index(){
        
        return view('welcome_message');

    }

    function createNew(){

        return view('header');
        return view('register');
        return view('footer');

    }
}