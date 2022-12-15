<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{

  public function index(Request $req)
  {

     $search = $req['search'];

    // $dp = DB::select('select * from employees inner join departments on employees.did = departments.did');

    $dp = DB::table('employees')->join('departments','employees.did','=','departments.did')->select('employees.*','departments.dname','departments.location')->where('employees.ename','like',"%$search%")->paginate(3);

    return view('employee.index',compact('dp'));
  }

  public function insert()
  {

    $dp = DB::select('select * from departments');

    return view('employee.insert')->with('dp', $dp);
  }

  public function store(Request $req)
  {

    $req->validate([
      'ename' => 'required',
      'age' => 'required',
      'email' => 'required',
      'dname' => 'required'
    ]);

    $result = DB::insert('insert into employees(ename,email,age,did) values(? , ? , ? , ?)', [$req['ename'], $req['email'], $req['age'], $req['dname']]);

    if ($result) {

      return redirect('/employee');
    }
  }

  public function edit($id)
  {

    $emp = DB::select('select * from employees where eid = ?', [$id]);

    $dp = DB::select('select * from departments');

    if (!is_null($emp)) {
      return view('employee.edit', compact('emp', 'dp'));
    }
  }

  public function update(Request $req, $id)
  {

    $emp = DB::select('select * from employees where eid = ?', [$id]);

    if (!is_null($emp)) {

      $res = DB::update('update employees set ename = ? , email = ? , age = ? , did = ? where eid = ?', [$req['ename'], $req['email'], $req['age'], $req['dname'], $id]);

      if ($res > 0) {

        return redirect('/employee');
      }
    }
  }

  public function delete($id)
  {

  $emp = DB::select('select * from employees where eid = ?',[$id]);

  if(!is_null($emp)){

  $res = DB::delete('delete from employees where eid = ?',[$id]);

    if($res){

     return redirect('/employee');

    }

  }

  }
}
