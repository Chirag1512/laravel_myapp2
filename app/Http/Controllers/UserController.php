<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        echo 'hello i am the controller';
    }

    public function userid($id,$name){
        echo "my id is :$id name is $name";
    }

 
}
