<?php

namespace App\Http\Controllers;

use App\EmployeEemergencyContact;
use App\User;
use Illuminate\Http\Request;
use App\UserEmergencyContact;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;


class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees=User::get();

        return view('employee.index',compact('employees'));
    }

    public function create()
    {

        return view('employee.create');
    }


    public function store(Request $employee)
    {

        User::create([
            'name'=> $employee->name,
            'password'=>$employee->password,
            'gender'=> $employee->gender,
            'phone'=> $employee->phone,
            'email'=> $employee->email,
            'address'=> $employee->address,
            'city'=> $employee->city,
            'post_code'=> $employee->post_code,
        ]);

        return redirect('/employee');
    }


    public function edit($id)
    {

        $user=User::find($id);

        return view('employee.edit',['user'=>$user]);
    }



    public function update(Request $request, User $employee)
    {

        $employee->update(
            $request->except('_token', '_method')
        );

        return redirect('/employee');
    }


    public function contact($id)
    {

        $contact=EmployeEemergencyContact::find($id);

        $employee_id=$id;
        return view('employee.create_emergency_contact',compact('contact','employee_id'));
    }


}
