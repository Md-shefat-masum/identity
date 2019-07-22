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
                <div class="row">
                    <div class="col-md-6 card m-auto">
                        <div class="card-body">
                            <div class="row button-group">
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{route('resume_add_view')}}" type="button" class="btn  btn-block btn-outline-primary" style="">Add New</a>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{route('resume')}}" type="button" class="btn active btn-block btn-outline-primary">All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:30px;">
                    @foreach ($select as $item)

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{$item->course_heading}}</h4>
                                <h5>{{$item->course_sub_heading}}</h5>
                                <p>{{$item->course_details}}</p>
                                <span>{{$item->start_date}}</span> &nbsp; TO &nbsp; <span>{{$item->end_date}}</span><br><br>
                                <p>category: <b class="text-uppercase">{{$item->section_name}}</b></p>
                                <a href="{{route('resume_update_view')}}" type="button" class="btn btn-block btn-outline-success">update</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
