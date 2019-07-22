@extends('layouts.admin')
@section('contents')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @if(Session::has('success'))
                <script>
                swal({title: 'Success!', text: 'Successfully done !', icon: 'success',timer:2000});
                </script>
            @endif
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Bio data section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">bio data</li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class='row'>
                    <div class='col-md-6 m-auto'>
                        <div class='card'>
                            <div class='card-body'>
                                <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('bio_data_update',$cv->slug)}}">
                                    @csrf
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <a href="{{asset('')}}{{$cv->file}}" target="_parent" class="float-right btn btn-outline-secondary text-capitalize waves-effect waves-light m-r-10" target="_blank" >view C.V</a>
                                            <!-- <label for='name'>upload C.V</label> -->
                                        </div><br><br>
                                        <div class='input-group'>
                                            <!-- <a href="{{asset('uploads')}}/cv.pdf" target="_blank" >view C.V</a> -->
                                            <label for='name'>upload C.V</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-file'></i></div>
                                            <input type='file' name='file' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                        </div>
                                    </div>

                                    <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>update information</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
