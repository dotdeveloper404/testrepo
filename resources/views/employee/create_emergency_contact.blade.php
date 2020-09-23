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
                        Employee Emergency Contact Form</h5>
                    <!--end::Page Title-->

                                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Employee	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                       Emergency	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                       Contact                        	</a>
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
                    <h3> Enter Emergency Contact</h3>
                    <!--begin::Form-->



                    <div class="form-group row">


                        @if($employee->emergency_contact != null)

                      @foreach($employee->emergency_contact as $index => $item)

                      <label class="col-lg-2">

                      </label>

                      <div data-repeater-list="contact" class="col-lg-10">

                          <div data-repeater-item class="form-group row align-items-center">
                      <div class="col-md-3">
                          <label>Name:</label>
                          <input type="text" required name="name" value={{$item->name}} class="form-control" placeholder="Enter full name"/>
                          <div class="d-md-none mb-2"></div>
                      </div>
                      <div class="col-md-3">
                          <label>Relation:</label>
                          <input type="text" required  name="relation"  value={{$item->relation}} class="form-control" placeholder="Enter relation "/>
                          <div class="d-md-none mb-2"></div>
                      </div>
                      <div class="col-md-3">
                          <label>Phone:</label>
                          <input type="text" required name="phone"  value={{$item->phone}}  class="form-control" placeholder="Enter emergency phone "/>
                          <div class="d-md-none mb-2"></div>
                      </div>
                      <div class="col-md-3">

                        <form action="{{ route('employee.emergency-contact.destroy', [$employee, $item->id]) }}" method="post" class="d-inline-block">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-sm font-weight-bolder btn-light-danger">
                              <i class="la la-trash-o"></i>Delete
                          </button>
                          </form>

                      </div>

                          </div>
                      </div>


                      @endforeach
                      @endif
                      </div>

                   <form class="form" method="POST" action="{{ route('employee.emergency-contact.store', $employee->id)}}">
                @csrf

				<div class="card-body">




                    <div id="kt_repeater_1">


                        <div class="form-group row">



                            <label class="col-lg-2 col-form-label text-right">

                            </label>

                            <div data-repeater-list="contact" class="col-lg-10">

                                <div data-repeater-item class="form-group row align-items-center">
                                    <div class="col-md-3">
                                        <label>Name:</label>
                                        <input type="text" required name="name" class="form-control" placeholder="Enter full name"/>
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Relation:</label>
                                        <input type="text" required  name="relation" class="form-control" placeholder="Enter relation "/>
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Phone:</label>
                                        <input type="text" required name="phone" class="form-control" placeholder="Enter emergency phone "/>
                                        <div class="d-md-none mb-2"></div>
                                    </div>

                                    <div class="col-md-3">
                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                            <i class="la la-trash-o"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-right"></label>
                            <div class="col-lg-4">
                                <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                    <i class="la la-plus"></i>Add
                                </a>
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
