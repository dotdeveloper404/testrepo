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
                                        Disciplinary	List </a>
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


                    <div class="card-header flex-wrap py-5">

                        <div class="card-toolbar">
                            <!--begin::Dropdown-->


                <!--begin::Button-->
                <a href="/hr/create" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" cx="9" cy="15" r="6"/>
                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                    </g>
                </svg><!--end::Svg Icon--> </span>Add New Record
                </a>
                <!--end::Button-->
                        </div>
                    </div>


               	<!--begin: Datatable-->
		<table class="table table-separate table-head-custom table-checkable" id="employee_table">


         <thead>
          <tr>
                        <th>Record ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Suspension Start Date</th>
                        <th>Suspension End Date</th>
                       <th>Actions</th>
              </tr>
</thead>

        <tbody>
            @foreach($data as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->employee->name}}</td>
                <td>{{$item->employee->email}}</td>
                <td>{{$item->employee->phone}}</td>
                <td>{{$item->employee->gender}}</td>
                <td>{{$item->employee->city}}</td>
                <td>{{$item->employee->address}}</td>
                <td>{{$item->suspension_start_date}}</td>
                <td>{{$item->suspension_end_date}}</td>
                <td><a class="btn btn-danger" href="{{ route('hr.edit', $item->id) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>

</table>
<!--end: Datatable-->

                   </div>

               </div>

           </div>

       </div>
   </div>

</div>




@endsection

@section('scripts')
 <script>
$("#employee_table").DataTable();
</script>

@endsection

