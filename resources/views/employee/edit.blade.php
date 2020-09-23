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
                        Employee Form</h5>
                    <!--end::Page Title-->

                                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Employee	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                       Update	                        	</a>
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
                   <form class="form" method="POST" action="{{ route('employee.update', $user->id) }}">
                @csrf
                @method('PUT')
				<div class="card-body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Full Name:</label>
							<input required type="text" name="name" value="{{$user->name}}"  class="form-control" placeholder="Enter full name"/>
							<span class="form-text text-muted">Please enter your full name</span>
						</div>
						<div class="col-lg-6">
							<label>Contact Number:</label>
							<input required type="text" name="phone" value="{{$user->phone}}" class="form-control" placeholder="Enter contact number"/>
							<span class="form-text text-muted">Please enter your contact number</span>
                        </div>
                        <div class="col-lg-6">
							<label>Password:</label>
							<input required type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Enter password"/>
							<span class="form-text text-muted">Please enter your password</span>
                        </div>
                        <div class="col-lg-6">
							<label>Gender:</label>
                            <select required class="form-control"  name="gender">
                                <option value="">Select</option>
                                <option {{$user->gender=='Male' ? 'selected' : ''}} value="Male">Male</option>
                                <option {{$user->gender=='Female' ? 'selected' : ''}}  value="Female">Female</option>
                            </select>
                            <span class="form-text text-muted">Please select gender</span>
                        </div>
                        <div class="col-lg-6">
							<label>Email:</label>
							<input required type="email" name="email" class="form-control" value="{{$user->email}}"  placeholder="Enter Email"/>
							<span class="form-text text-muted">Please enter your email
                            </span>
                        </div>
                        <div class="col-lg-6">
							<label>City:</label>
							<input required type="text" value="{{$user->city}}"  name="city" class="form-control" placeholder="Enter City"/>
							<span class="form-text text-muted">Please enter your city
                            </span>
                        </div>
                        <div class="col-lg-6">
							<label>Address:</label>
							<div class="input-group">
								<input required type="text" value="{{$user->address}}"  name="address" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your address</span>
						</div>
					</div>
					<div class="form-group row">

						<div class="col-lg-6">
							<label>Postcode:</label>
							<div class="input-group">
								<input required type="text"  value="{{$user->post_code}}" name="post_code" class="form-control" placeholder="Enter your postcode"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your postcode</span>
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
