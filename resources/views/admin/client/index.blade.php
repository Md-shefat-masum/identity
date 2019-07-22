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
                @if(Session::has('success'))
                   <script>
                         swal({title: "Success!", text: "Successfully done !", icon: "success",timer:5000});
                   </script>
                @endif

                <div class='row'>
                    <div class='col-md-4'>
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
                                            <label for='name'>client link</label>
                                        </div>
                                        <div class='input-group'>
                                            <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                            <input name='occupation' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>add comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style='margin-top:30px;'>
                    @foreach ($select as $select)

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <p>{{$select->comment}}</p>
                                        <h4>{{$select->name}}</h4>
                                        <h6>{{$select->occupation}}</h6>
                                        <a style='margin-top:30px;' href="{{route('client_post_delete',$select->slug)}}" class="btn btn-outline-danger text-capitalize waves-effect waves-light">delete</a>
                                    </div>
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
