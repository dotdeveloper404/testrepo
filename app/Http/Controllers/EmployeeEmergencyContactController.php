<?php

namespace App\Http\Controllers;

use App\EmployeEemergencyContact;
use App\User;
use Illuminate\Http\Request;

class EmployeeEmergencyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $employee)
    {

      //  $contact = $employee->load('emergency_contact');

        return view('employee.create_emergency_contact',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $employee)
    {


        foreach($request->contact as $item)
       {
        $employee->emergency_contact()->create([
            'name'=>$item['name'],
            'relation'=>$item['relation'],
            'phone'=>$item['phone'],
           ]);
       }

       return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $employee,$id)
    {

        EmployeEemergencyContact::destroy($id);

        return view('employee.create_emergency_contact',compact('employee'));
    }
}
