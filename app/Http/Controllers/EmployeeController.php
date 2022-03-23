<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    //use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function _construct()
    {
        $this->middleware('');
    }
    public function register()
    {
        return view('employee');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['reqiured', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required', 'string', 'max:255'],
            'rank' => ['reqiured', 'string', 'max:255'],
            'address' => ['reqiured', 'string', 'max:255'],
            'phone' => ['reqiured', 'string', 'max:30'],
            'dob' => ['reqiured', 'string', 'max:255'],
            'lga' => ['reqiured', 'string', 'max:255'],
            'stateOfOrigin' => ['reqiured', 'string', 'max:255'],
            'country' => ['reqiured', 'string', 'max:255'],
        ]);
    }

    public function createEmployee(Request $request)
    {

        Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'department' => $request->input('department'),
            'rank' => $request->input('rank'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'lga' => $request->input('lga'),
            'stateOfOrigin' => $request->input('stateOfOrigin'),
            'country' => $request->input('country'),
        ]);
        return redirect('home')->with('status', 'Employee created Successfully');
    }

    // public function editEmployee($id)
    // {
    //     $employees = Employee::find($id);
    //     return view('edit', compact('$employees'));
    //     // return view('edit')->with('employee', $employees);
    // }

    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);
        $employees->name = $request->input('name');
        $employees->email = $request->input('email');
        $employees->department = $request->input('department');
        $employees->rank = $request->input('rank');
        $employees->address = $request->input('address');
        $employees->phone = $request->input('phone');
        $employees->dob =$request->input('dob');
        $employees->lga =$request->input('lga');
        $employees->stateOfOrigin =$request->input('stateOfOrigin');
        $employees->country =$request->input('country');
        $employees->update();
        return redirect('home')->with('status', 'Record Updated Successfully');
    }
    public function show($id)
    {
        $employees = DB::table('employees')->where('id', $id)->first();
        return view('edit')->with('employees', $employees);
    }
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('edit', compact('employees', $employees));
        
    }
    
}
