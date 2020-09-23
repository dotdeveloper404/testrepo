<?php

namespace App\Http\Controllers;

use App\HrDisciplinaryForm;
use App\User;
use Illuminate\Http\Request;

class HrController extends Controller
{

    public function index()
    {
        $data=HrDisciplinaryForm::get();

        return view('hr.index',compact('data'));
    }

    public function jotform()
    {

        return view('hr.jotform');
    }

    public function show()
    {
        return view();
    }

    public function edit($id,Request $request)
    {
        if($request->has('employee_id'))
        {
            $employee_list=User::get();
            $employee_detail=User::find($request->employee_id);
            $hr=HrDisciplinaryForm::find($id);
            return view('hr.edit',compact('employee_list','employee_detail','hr'));
        }

        $hr=HrDisciplinaryForm::find($id);
        $employee_detail=User::find($hr->employee_id);
        $employee_list=User::get();
        return view('hr.edit',compact('employee_list','employee_detail','hr'));
    }

    public function update(Request $request, HrDisciplinaryForm $hr)
    {

        $hr->update($request->except('_token','method'));
        return redirect('/hr');
    }

    public function create(Request $request)
    {
        if($request->has('employee_id'))
        {
            $employee=User::get();
            $employee_detail=User::find($request->employee_id);

            return view('hr.create',compact('employee','employee_detail'));
        }

        $employee=User::get();
        return view('hr.create',compact('employee'));
    }

    public function store(Request $hr)
    {

        HrDisciplinaryForm::create([
              'employee_id'=>$hr->employee_id,
              'supervisor_id'=>$hr->supervisor_id,
              'job_title'=>$hr->job_title,
              'suspension_start_date'=>$hr->suspension_start_date,
              'suspension_end_date'=>$hr->suspension_end_date,
              'reason'=>$hr->reason,
              'other'=>$hr->other,
              'gas_card'=>$hr->gas_card,
              'truck_keys'=>$hr->truck_keys,
              'supervisor_email'=>$hr->supervisor_email,
              'verify'=>$hr->verify,
              'comment'=>$hr->comment
        ]);

        return redirect('/hr');
    }


}
