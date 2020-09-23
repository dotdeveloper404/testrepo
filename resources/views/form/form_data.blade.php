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
                            Form List</h5>
                        <!--end::Page Title-->

                        <!--begin::Breadcrumb-->
                        <ul
                            class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">
                                    Form </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">
                                    List </a>
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




                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="employee_table">


                            <thead>
                                <tr>
                                    <th>Record ID</th>
                                    <th>Form name</th>
                                    <th>Field</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($formsmeta as $meta)
                                <tr>
                                    <td>{{$meta->form->id}}</td>
                                    <td>{{$meta->form->name}}</td>
                                    <td>{{$meta->form_key}}</td>
                                    <td>{{$meta->form_value}}</td>
                                    <td><a class="btn btn-primary"
                                            href="{{ route('form.get_form_data', $meta->form->id) }}">View Form Data</a>
                                    </td>
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
