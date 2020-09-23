@extends('layouts.master')

@section('styles')
{{-- <link href="/assets/form/index.css" rel="stylesheet" type="text/css"/> --}}

<style>
    .copyright-text {
        display: none;
    }
</style>

@endsection


<script>
    window.formData=<?php echo $formControlData ?>
</script>



@section('content')



<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->

    <!--end::Header-->



    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">





        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">

                     <form id="form" action="{{ route('form.update_form_data',$form)}}" method="post" onkeydown="return event.key
                        !='Enter';">

                        @csrf

                        <editvueform></editvueform>

                       <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-right"></label>
                        <div class="col-lg-4">
                          <input  type="submit" value="Submit"  class="btn btn-primary">
                        </div>
                    </div>

                      </form>
                    </div>


                </div>

            </div>

        </div>
    </div>

</div>


@endsection



@section('scripts')


@endsection
