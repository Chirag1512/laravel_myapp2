<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Postdata extends Controller
{
    public function insert(Request $req ){
        $name = $req->input('name');
        $email = $req->input('email');
        $pass = $req->input('password');
        $query = DB::insert('Insert into users(name,email,password) values (?,?,?)',[$name,$email,$pass]);

        if($query){
            return redirect('login');
        }else{
            return 'Something is Wrong..!';
        }

    }

    public function check(Request $req){

        $name = $req->input('name');
        $email = $req->input('email');
        $data = DB::select('select * from users where name=? and email=?',[$name,$email]);

        if($data){
            return redirect('users');
        }else{ 
            return 'wrong information....!';
        }
    }

    public function search(Request $req) {
        $name = $req->input('txt1');
        $records = DB::select('select * from users where name = ?', [$name]);
        return view('users', compact('records'));
    }
    
    function updateUser(Request $req){
        $id = $req->query('id');
        $records = DB::table('users')->where('id',$id)->get();
        return view ('update',compact('records'));
    }

    function updatedUser(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');
        $pass = $req->input('password');

        $status = DB::update("UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?",[$name,$email,$pass,$id]);
        $records = DB::table('users')->get();
        return view ('users',compact('records'));

    }
}
