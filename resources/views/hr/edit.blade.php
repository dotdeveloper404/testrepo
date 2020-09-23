@extends('layouts.master')

@section('content')

<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
   <!--begin::Header-->
   <div id="kt_header" class="header  header-fixed ">
       <!--begin::Container-->
       <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
           <!--begin::Header Menu Wrapper-->
           <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
               <!--begin::Header Menu-->
               <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">

               </div>
               <!--end::Header Menu-->
           </div>
           <!--end::Header Menu Wrapper-->

       </div>
       <!--end::Container-->
   </div>
   <!--end::Header-->



   <!--begin::Content-->
   <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Employee Disciplinary Form </h5>
                    <!--end::Page Title-->

                                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Employee	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Disciplinary	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Form                        	</a>
                                </li>

                                                </ul>
                        <!--end::Breadcrumb-->
                                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>


       <!--begin::Entry-->
       <div class="d-flex flex-column-fluid">
           <!--begin::Container-->
           <div class=" container ">
               <!--begin::Card-->
               <div class="card card-custom gutter-b">
                   <div class="card-body">

                    <!--begin::Form-->
                    <form class="form" method="POST" action="{{ route('hr.update',$hr->id) }}">
                @csrf
                @method('put')

                    <input  type="hidden" id="id" value="{{$hr->id}}"/>

				<div class="card-body">
					<div class="form-group row">
						<div class="col-lg-6">
                            <label>Employee Name:</label>
                            <select  name="employee_id" id="employee_id"  class="form-control" required>
                                <option value="">
                                    Select
                                </option>
                            @foreach ($employee_list as $item)
                             <option {{ (  Request()->get('employee_id') == $item->id  ? 'selected' : $hr->employee_id==$item->id ) ? 'selected' : ''}}  value="{{$item->id}}">
                                {{$item->name}}
                             </option>
                            @endforeach
                        </select>
						<span class="form-text text-muted">Please select name</span>
						</div>
						<div class="col-lg-6">
							<label>Job Title:</label>
							<input required type="text" value="{{ $hr->job_title}}" name="job_title" class="form-control" placeholder="Enter title"/>
							<span class="form-text text-muted">Please enter title</span>
                        </div>


                        <div class="col-lg-6">
							<label>Employee Email:</label>
                        <input required type="email" value="{{ isset($employee_detail) ? $employee_detail->email : '' }}" name="" class="form-control" placeholder="Enter Email"/>
							<span class="form-text text-muted">Please enter  email
                            </span>
                        </div>

                        <div class="col-lg-6">
							<label>Address:</label>
							<div class="input-group">
								<input required type="text"  value="{{isset($employee_detail) ? $employee_detail->address : ''}}"  name="" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your address</span>
                        </div>
                        <div class="col-lg-6">
							<label>City:</label>
							<div class="input-group">
								<input  type="text"  value="{{ isset($employee_detail) ? $employee_detail->city : '' }}"  name="" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>

                        </div>
                        <div class="col-lg-6">
							<label>Post Code:</label>
							<div class="input-group">
								<input  type="text"  value="{{ isset($employee_detail) ? $employee_detail->post_code : '' }}"  name="" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>

                        </div>
                        <div class="col-lg-6">
							<label>Phone:</label>
							<div class="input-group">
								<input  type="text"  value="{{ isset($employee_detail) ? $employee_detail->phone : '' }}"  name="" class="form-control" placeholder="Enter your address"/>
							</div>

                        </div>

                        <div class="col-lg-6">
							<label>Gender:</label>
							<div class="input-group">
								<input  type="text"  value="{{isset($employee_detail) ? $employee_detail->gender : '' }}"  name="" class="form-control" placeholder="Enter your address"/>
							</div>

                        </div>


					</div>
					<div class="form-group row">

						<div class="col-lg-6">
							<label>Start Date of Suspension * :</label>
							<div class="input-group">
                            <input  required type="date" value="{{$hr->suspension_start_date}}" name="suspension_start_date" class="form-control"/>
							</div>
							<span class="form-text text-muted">Please enter Date of Suspension</span>
                        </div>

                        <div class="col-lg-6">
							<label>Suspension End Date * :</label>
							<div class="input-group">
								<input required  type="date" value="{{ \Carbon\Carbon::parse($hr->suspension_end_date)->format('m/d/Y')}}"  name="suspension_end_date" class="form-control"/>
							</div>
							<span class="form-text text-muted">Please enter End Date of Suspension</span>
						</div>
                    </div>
                    <div class="form-group row">

						<div class="col-lg-6">
							<label>Reason for suspension * :</label>
							<div class="input-group">
								<textarea required  name="reason" class="form-control">{{$hr->reason}}	</textarea>
							</div>
                        </div>


					</div>


                    <div class="form-group row">

						<div class="col-lg-6">
							<label>If supplied the following MUST BE RETURNED: * :</label>
                            <br>
                            <label>	<input   type="checkbox" value="1"  {{$hr->gas_card=="1" ? 'checked' : ''}}   name="gas_card"/> Gas Card</label><br>
                            <label>	<input   type="checkbox"   value="1"   {{$hr->truck_keys=="1" ? 'checked' : ''}}  name="truck_keys"/>   Truck and Keys</label><br>
                        <label>	<input   type="text" name="other" value="{{$hr->other}}" placeholder="Other"/> </label>
                        </div>


                    </div>
                    <div class="form-group row">
                        <h3>Supervisor Details</h3>
                    </div>
                        <div class="form-group row">
                    <div class="col-lg-6">
                        <label>Supervisor Name:</label>
                        <select name="supervisor_id" class="form-control" required>
                            <option value="">
                                Select
                            </option>
                        @foreach ($employee_list as $item)
                         <option {{$hr->supervisor_id==$item->id ? 'selected' : '' }} value="{{$item->id}}">
                            {{$item->name}}
                         </option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">Please select  supervisor name</span>
                    </div>
                    <div class="col-lg-6">
                        <label>Supervisor Email:</label>
                        <input required type="email" value="{{$hr->supervisor_email}}" name="supervisor_email" class="form-control" placeholder="Enter Email"/>
                        <span class="form-text text-muted">Please enter email</span>
                    </div>
                        </div>
                        <div class="form-group row">

                    <div class="col-lg-6">
                        <label>Supervisor must sign to verify that to his knowledge all information provided is true * :</label>
                        <div class="input-group">
                                <textarea class="form-control" name="verify">{{$hr->verify}}  </textarea>
                                 </div>

                    </div>

                    <div class="col-lg-6">
                        <label>
                            Final Comments
                        </label>
                        <div class="input-group">
                                <textarea class="form-control" name="comment">{{$hr->comment}} </textarea>
                                 </div>

                    </div>
                    </div>
                </div>



				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>

					</div>
				</div>
			</form>
            <!--end::Form-->

                   </div>

               </div>

           </div>

       </div>
   </div>

</div>

@endsection

@section('scripts')
<script>
    $("#employee_id").change(function(){
        window.location.href='/hr/'+$("#id").val()+'/edit?employee_id='+$(this).val()+'';
    });
</script>

@endsection
