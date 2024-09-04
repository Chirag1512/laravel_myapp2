<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBcontroller extends Controller
{
    function showUser(){
        $records= DB::select('select * from users');
        return view('users',compact('records'));
    }
    function insertUser(){
        $records = DB::insert('insert into users(name,email,password) values ("abc","abc@gmail.com","abc123")');

        
        // if($qur){
        //     return "data inserted..!!!";
        // }else{
        //     return "somthing is worng...!!";
        // }
    }
}
