<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
   
    public function index(){

     $dp = DB::select('select * from departments');

     return view('department.index')->with('dp',$dp);

    }

    public function insert(){

      return view('department.insert');

    }

    public function store(Request $req){

      $req->validate([
         'dname' => 'required',
         'location' => 'required'
      ]);

      $res =  DB::insert('insert into departments(dname,location) values(?,?)',[$req['dname'],$req['location']]);

      if($res){
        return redirect('/department');
      }

    }

    public function edit($id){

     $dp =  DB::select('select * from departments where did = ?',[$id]);

     if(!is_null($dp)){

        return view('department.edit')->with('dp',$dp[0]);
        
     }

    }

    public function update(Request $req , $id){

       $dp = DB::select('select * from departments where did = ?',[$id]);

       if(!is_null($dp)){

         $res =  DB::update('update departments set dname = ? , location = ? where did = ?',[$req['dname'],$req['location'],$id]);

          if($res){

            return redirect('/department');

          }

       }
    }

    public function delete($id){

       $dp = DB::select('select * from departments where did = ?',[$id]);

       if(!is_null($dp)){

        $res = DB::delete('delete from departments where did = ?',[$id]);

         if($res){

           return redirect('/department');

         }

       }

    }

}
