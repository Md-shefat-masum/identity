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
                    <h3 class="text-themecolor">service section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">frontend</li>
                        <li class="breadcrumb-item active">service</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <style>
                .services h4{
                    font-weight:400;
                    text-transform: uppercase;
                }
                .services-box .services-box-icon {
                    border: 1px solid #999;
                    color: #666666;
                    display: inline-block;
                    float: left;
                    height: 60px;
                    width: 60px;
                    line-height: 60px;
                    margin-right: 15px;
                    position: relative;
                    text-align: center;
                    left: 0;
                    top: 5px;
                    padding-top:6px;
                    transition: all 0.3s ease 0s;    
                }
                .services-box .services-box-icon i.fa {
                    font-size: 30px;
                    position: relative;
                    transition: all 0.3s ease 0s;
                }
                .services-box .feature-box-info {
                    padding-left: 65px;
                }
                .service-box-info p {
                    transition: all 0.3s ease 0s;
                }
            </style>
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
                                    <a href="{{route('frontend_service_add')}}" type="button" class="btn btn-block btn-outline-primary" style="">Add New</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('frontend_service')}}" type="button" class="btn active btn-block btn-outline-primary">All services</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('frontend_service_trash')}}" type="button" class="btn btn-block btn-outline-primary">All Trash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:30px">
                @foreach($select as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Service -->
                                <div class="services-box new-line item_left">
                                    <h4>{{$item->name}}</h4>
                                    <div class="services-box-icon">
                                        <i class="{{$item->icon}} fa-3x"></i>
                                    </div>
                                    <div class="service-box-info">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellesque
                                            imperdiet. Nulla lacinia iaculis nulla.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Service -->
                                @if(Session::has('success'))
                                    <script>
                                    swal({title: 'Success!', text: 'Successfully done !', icon: 'success',timer:5000});
                                    </script>
                                @endif
                                <form class="form p-t-20" method="POST" action="{{route('frontend_service_upadate',$item->slug)}}">
                                    @csrf 
                                    <hr>
                                    <div class="input-group">
                                        <label for="name" class="" style=""> change icon </label>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="{{$item->icon}}"></i></div>
                                            <input type="text" name="icon" value="{{$item->icon}}" class="form-control text-lower" id="exampleInputuname" placeholder="input icon class name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="name"> change service name </label><br>
                                            <input type="text" name="name" value="{{$item->name}}" class="form-control text-normal" id="exampleInputuname" placeholder="input icon class name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> change service description </label><br>
                                            <textarea style="height:150px;" type="text" name="description" value="" class="form-control text-normal" id="exampleInputuname" placeholder="">{{$item->description}}</textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light m-r-10">update service information</button>
                                    <a class="btn btn-outline-danger waves-effect waves-light m-r-10" href="{{route('frontend_service_soft_delete',$item->slug)}}">Delete</a>
                                </form>
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
