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
                    <h3 class="text-themecolor">process section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item"> </li>
                        <li class="breadcrumb-item active">process</li>
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
                @if(Session::has('success'))
                   <script>
                         swal({title: "Success!", text: "Successfully done !", icon: "success",timer:5000});
                   </script>
                @endif

                <div class='row'>
                    <div class='col-md-4 '>
                        <div class='card'>
                            <div class='card-body'>
                                <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('process_add')}}">
                                    @csrf
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>icon code <sub>use font awesome icon</sub></label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='icon' value='' class='form-control text-lower' id='exampleInputuname' placeholder='ex: fa fa-rocket'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>process name</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='process'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>description</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <textarea name='description' value='' class='form-control text-lower' id='exampleInputuname' placeholder='details'></textarea>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>process serial</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='serial' type='number' value='' class='form-control text-lower' id='exampleInputuname' placeholder='serial no'>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>add process</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    @foreach ($select as $select)

                    <div class='col-md-4 '>
                        <div class='card'>
                            <div class='card-body'>
                                <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('process_update',$select->slug)}}">
                                    @csrf
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>icon code <sub>use font awesome icon</sub></label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='icon' value='{{$select->icon}}' class='form-control text-lower' id='exampleInputuname' placeholder='ex: fa fa-rocket'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>process name</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='name' value='{{$select->name}}' class='form-control text-lower' id='exampleInputuname' placeholder='process'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>description</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <textarea name='description' value='' class='form-control text-lower' id='exampleInputuname' placeholder='details'>{{$select->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <label for='name'>process serial</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='serial' type='number' value='{{$select->serial}}' class='form-control text-lower' id='exampleInputuname' placeholder='serial no'>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>update process</button>
                                    <a href='{{route('process_delete',$select->slug)}}' class='btn btn-outline-danger text-capitalize waves-effect waves-light m-r-10'>Delete</a>
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
