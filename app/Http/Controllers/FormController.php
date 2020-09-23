<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormData;
use App\FormMeta;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms=Form::get();
      return view('form.index',compact('forms'));
    }

    public function form_data()
    {
        $formsmeta=FormMeta::get(); //groupBy('form_id')->get();
        return view('form.form_data',compact('formsmeta'));
    }

    public function test()
    {
        return view();
    }




    public function get_form_data(Form $form)
    {

        $formMetas=$form->form_meta;

        $formControlData=json_decode($form->form_data->data);

        foreach($formControlData->controls as $controlItem)
        {

             foreach($formMetas as $meta)
             {
               if($meta->form_key == $controlItem->name)
               {
                   if($controlItem->type=="date")
                   {
                    $controlItem->setDate=$meta->form_value;
               //     $controlItem->singleMode=false;
              //  $controlItem->defaultValue=strval($meta->form_value);
                   }else{
                //if($meta->form_key == $controlItem->name)
                $controlItem->defaultValue=$meta->form_value;
                   }
               }
             }
        }

     // dd($formControlData->controls);
        $formControlData=json_encode($formControlData);
       // dd();
      //  dd($form->form_data->data);
      //  $form->form_data->data->controls=$formControlData->controls;

         return view('form.get_form_data',compact('form','formControlData'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //die('dsadsa');
        $formConfig=$request->get('formData')['formConfig'];
       // dd();
     //dd($request->get('formData'));

          $form=Form::create([
                    "name"=>$formConfig["headline"],
                    "version"=>1,
            ]);


            $form->form_data()->create([
                    "version"=>1,
                    "data"=>json_encode($request->get('formData')),
            ]);

            return redirect('/form');

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

        $form=Form::find($id);


       // dd($form->form_data->data);
        return view('form.edit',compact('form'));

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

    public function save_form_data(Request $request,Form $form)
    {

        //dd($request->all());
        foreach($request->except('_token') as $key=>$value){
        $form->form_meta()->create([
            "form_key"=>$key,
            "form_value"=>$value
        ]);
        }

        return redirect('/form');
    }


    public function update_form_data(Request $request,Form $form)
    {

      //  dd($request->all());
        $form->form_meta()->delete();
        foreach($request->except('_token') as $key=>$value){
        $form->form_meta()->create([
            "form_key"=>$key,
            "form_value"=>$value
        ]);
        }

        return redirect('/form/form_data');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
