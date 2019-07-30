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
                    <h3 class="text-themecolor"> Settings</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">user</li>
                        <li class="breadcrumb-item active">settings</li>
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
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <center class="m-t-30"> <img src="{{asset('')}}{{Auth::user()->photo}}" class="img-circle" width="150" />
                                        <h4 class="card-title m-t-10">{{Auth::user()->name}}</h4>
                                        <h6 class="card-subtitle">Security Expert</h6>
                                        <div class="row text-center justify-content-md-center">
                                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                        </div>
                                    </center>
                                </div>
                                <div>
                                    <hr> </div>
                                <div class="card-body"> <small class="text-muted">Email address </small>
                                    <h6>{{Auth::user()->email}}</h6>
                                    @php
                                        $select=App\aboutme::where('id',1)->firstOrFail();
                                     @endphp
                                    <small class="text-muted p-t-30 db">Phone</small>
                                    <h6>{{$select->phone}}</h6>
                                    <small class="text-muted p-t-30 db">Address</small>
                                    <h6>{{$select->address}}</h6>
                                    <div class="map-box">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449:0x4fcedd11614f6516!2sAhmedabad,+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                    <br/>
                                    @php
                                        $select=App\personalinfo::where('status',1)->get();
                                    @endphp
                                     @foreach ($select as $item)
                                        <a href="{{$item->link}}" class="btn btn-circle btn-secondary"><i class="{{$item->icon}}"></i></a>
                                     @endforeach
                                </div>
                            </div>
                        </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
