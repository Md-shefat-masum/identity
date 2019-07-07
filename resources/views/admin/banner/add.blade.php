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
                    <h3 class="text-themecolor">About me section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">about me</li>
                        <li class="breadcrumb-item active">all</li>
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
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('frontend_banner_add')}}" type="button" class="btn btn-block btn-outline-info" style="">Add New Banner</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('frontend_banner')}}" type="button" class="btn btn-block btn-outline-success">All Banner</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('frontend_banner')}}" type="button" class="btn btn-block btn-outline-primary">All Trash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row " style="margin-top:30px;">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add banner informations</h4>
                                <form class="form p-t-20" enctype="multipart/form-data" method="POST" action="{{route('frontend_banner_add_new')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputuname">upload Banner pic</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-image"></i></div>
                                            <input type="file" name="name" class="form-control" id="exampleInputuname" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Banner Subtitle</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-comment"></i></div>
                                            <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter subtitle">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Banner Title</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-comment-alt"></i></div>
                                            <input type="Title" name="title" class="form-control" id="pwd1" placeholder="Enter title">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>

@endsection
