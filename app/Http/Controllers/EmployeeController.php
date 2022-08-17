<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index ()
    {
        return view('Employee.addemployee');
    }


    public function addemployee (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required|numeric',
            'title' => 'required',
            'address' => 'required',
            
        ]);

        $data =new employee;

        $data->name=$request->name;
        $data->number=$request->number;
        $data->title=$request->title;
        $data->address=$request->address;

        $data->save();
        return redirect()->back();
    }

    public function showemployee()
    {
        $lists = employee::all();
        return view('employee.viewemployee',compact('lists'));
    }

    public function dropEmployee($id)
    {
         Employee::findOrFail($id)->delete();
        
        return back();
    }
}
