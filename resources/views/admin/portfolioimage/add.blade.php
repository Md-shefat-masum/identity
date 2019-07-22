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
                                    <a href="{{route('portfolio_image_add')}}" type="button" class="btn active btn-block btn-outline-primary" style="">Add New</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('portfolio_image')}}" type="button" class="btn  btn-block btn-outline-primary">All image</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('portfolio_image_trash')}}" type="button" class="btn btn-block btn-outline-primary">All Trash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                    @if(Session::has('restore'))
                        <script>
                            swal({title: "Success!", text: "Successfully banner restored !", icon: "success",timer:5000});
                        </script>
                    @endif
                    @if(Session::has('success'))
                        <script>
                            swal({title: "Success!", text: "Successfully banner updated !", icon: "success",timer:5000});
                        </script>
                    @endif
                    
                    <div class='row' style="margin-top:30px;">
                        <div class='col-md-6 m-auto'>
                            <div class='card'>
                                <div class='card-body'>
                                    <form class='form p-t-20' method='POST' enctype="multipart/form-data" action='{{route("portfolio_image_addfn")}}'>
                                        @csrf
                                        <div class='form-group'>
                                            <div class='input-group'>
                                                <label for='name'>select image </label>
                                            </div>
                                            <div class='input-group'>
                                                <!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
                                                <input type='file' name='image' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                            </div>
                                        </div>

                                        <div class='form-group'>
                                            <div class='input-group'>
                                                <label for='name'>type image category from below <br></label>
                                            </div>
                                            <div class='input-group'>
                                                <label for='name'>@foreach($select as $item){{$item->name}}&nbsp;-&nbsp;@endforeach</label>
                                            </div>
                                            <div class='input-group'>
                                                <!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
                                                <input type='text' name='category' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                            </div>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <div class='input-group'>
                                                <label for='name'>add a short description </label>
                                            </div>
                                            <div class='input-group'>
                                                <!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
                                                <input type='text' name='description' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                            </div>
                                        </div>
                                        
                                        <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>add</button>
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
