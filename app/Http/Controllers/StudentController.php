<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

  public function index(Request $req)
  {

    $search = $req['search'];

    // $st = DB::table('students')->select('students.*')->where('students.stname','like',"%$search%")->paginate(4);
     $st = Student::all();

    //  format($st);

    return view('student.index')->with('st', $st);
  }

  public function trash(){

   $st = Student::onlyTrashed()->get();

   return view('student.trash')->with('st',$st);

  }

  public function insert()
  {

    return view('student.insert');
  }

  public function store(Request $req)
  {

    $req->validate([
      'name' => 'required',
      'guardian' => 'required',
      'age' => 'required',
      'email' => 'required'
    ]);

    $img = $req['img'];
    $name = $img->getClientOriginalName();
    $img->move('images', $name);

    $nst = new Student;

    $nst->stname = $req['name'];
    $nst->guardian = $req['guardian'];
    $nst->age = $req['age'];
    $nst->email = $req['email'];
    $nst->img = $name;
    $nst->save();

    session()->flash('status','Record added successfully!');

    return redirect('/student');
  }

  public function delete($id)
  {

    $st = Student::find($id);

    if (!is_null($st)) {

      $st->delete();

      return redirect('/student');
    }

    return redirect('/student');
  }

  public function edit($id)
  {

    $st = Student::find($id);

    if (!is_null($st)) {

      return view('student.edit')->with('st', $st);

    }
  }

  public function update(Request $req , $id)
  {
      
    $st = Student::find($id);

    if(!is_null($st)){

       if($req['Newimg'] != null){

         $img = $req['Newimg'];
         $name = $img->getClientOriginalName();
         $img->move('images',$name);

         unlink('images/'.$req['oldImg']);

       }
       else{
         $name = $req['oldImg'];
       }


      $st->stname = $req['name'];
      $st->guardian = $req['guardian'];
      $st->age = $req['age'];
      $st->email = $req['email'];
      $st->img = $name;
      $st->save();

      session()->flash('status','Record updated successfully!');
      return redirect('/student');
       
    }

  }

  public function deleteper($id){

   $res = Student::onlyTrashed()->find($id);

   if(!is_null($res)){

    unlink('images/'.$res->img);
    $res->forceDelete();
    return redirect('/student/trash');

   }

  }

  public function restore($id){

  $res = Student::onlyTrashed()->find($id);

  if(!is_null($res)){

   $res->restore();

   return redirect('/student');

  }

  }

  public function view($id){

    $st = Student::find($id);

    if(!is_null($st)){

      return view('student.view')->with('st',$st);

    }

    return redirect('/student');

  }
}
