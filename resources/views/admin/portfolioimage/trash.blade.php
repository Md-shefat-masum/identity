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
                    <h3 class="text-themecolor">portfolio image section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item"> frontend </li>
                        <li class="breadcrumb-item active"> portfolio / images</li>
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
                                    <a href="{{route('portfolio_image_add')}}" type="button" class="btn btn-block btn-outline-primary" style="">Add New</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('portfolio_image')}}" type="button" class="btn  btn-block btn-outline-primary">All image</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('portfolio_image_trash')}}" type="button" class="btn active btn-block btn-outline-primary">All Trash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row el-element-overlay" style="margin-top:30px;">
                    @if(Session::has('success'))
                        <script>
                            swal({title: "Success!", text: "Successfully done !", icon: "success",timer:2000});
                        </script>
                    @endif
                    @foreach ($select as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img class="img-fluid" style="height:200px;" src="{{asset('uploads')}}/{{$item->image}}" alt="{{$item->name}}" />
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('uploads')}}/{{$item->image}}"><i class="icon-magnifier"></i></a></li>
                                                <li><a class="btn default btn-outline" href="{{route('frontend_banner_update',$item->slug)}}"><i class="icon-link"></i></a></li>
                                                <li><a class="btn default btn-outline" href="{{route('portfolio_image_harddelete',$item->slug)}}"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h3 class="box-title" style="font-size: 16px;">{{$item->description}}</h3> <small>{{$item->category}}</small>
                                        <br/>
                                    </div>
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
