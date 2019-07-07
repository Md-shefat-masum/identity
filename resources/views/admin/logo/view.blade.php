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
                    <div class="col-md-4 m-auto">
                        <div class="card">
                            <div class="card-body">
                                    <img src="{{asset('uploads')}}/{{$item->name}}" class="img-fluid" style="background:rgba(0,0,0,.6);padding:10px;border-radius:5px;" alt="{{$item->title}}">
                                <form class="form p-t-20" method="POST" action="{{route('frontend_logo_update',$item->slug)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title"> Update Title </label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                            <input name="title" value="{{$item->title}}" type="text" class="form-control" id="pwd2" placeholder="update title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Update Logo </label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-image"></i></div>
                                            <input name="name" type="file" value="{{$item->name}}" class="form-control" id="pwd2" placeholder="update logo">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
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
