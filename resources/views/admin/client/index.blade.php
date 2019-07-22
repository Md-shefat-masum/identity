@extends('layouts.admin')
@section('contents')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item"> </li>
                        <li class="breadcrumb-item active"> </li>
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
                                <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('client_post_add')}}">
                                    @csrf
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>client's comment</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <textarea name='comment' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'></textarea>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>client Name</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>client Occupation</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='occupation' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
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
