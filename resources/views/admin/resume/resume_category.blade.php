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
                    <h3 class="text-themecolor">Resume category section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">resume</li>
                        <li class="breadcrumb-item active">category</li>
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
                  <div class='col-md-3'>
                    <div class='card'>
                        <div class='card-body'>
                            <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('add_resume_category')}}">
                                @csrf
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <label for='name'>add new category</label>
                                    </div>
                                    <div class='input-group'>
                                        <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                        <input name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='category name'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <label for='name'>give a unique serial no</label>
                                    </div>
                                    <div class='input-group'>
                                        <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                        <input name='serial' type="number" value='' class='form-control text-lower' id='exampleInputuname' placeholder='serial'>
                                    </div>
                                </div>
                                <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>Add new category</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>

                <div class='row'>
                @foreach ($select as $item)
                  <div class='col-md-3'>
                    <div class='card'>
                        <div class='card-body'>
                            <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('add_resume_category')}}">
                                @csrf
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <label for='name'>update category</label>
                                    </div>
                                    <div class='input-group'>
                                        <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                        <input name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='category name'>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <label for='name'>change serial no</label>
                                    </div>
                                    <div class='input-group'>
                                        <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                        <input name='serial' type="number" value='' class='form-control text-lower' id='exampleInputuname' placeholder='serial'>
                                    </div>
                                </div>
                                <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>update</button>
                                <button type='submit' class='btn btn-outline-danger text-capitalize waves-effect waves-light m-r-10'>delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
