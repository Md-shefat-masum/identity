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
                    <h3 class="text-themecolor">port folio category section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item"> frontend </li>
                        <li class="breadcrumb-item active">portfolio categories</li>
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

                <!-- controll bar -->
                <div class="row">
                    <div class="col-md-6 card m-auto">
                        <div class="card-body">
                            <div class="row button-group">
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('fortfolio_categories_add')}}" type="button" class="btn btn-block btn-outline-primary" style="">Add New</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('fortfolio_categories')}}" type="button" class="btn active btn-block btn-outline-primary">All category</a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="{{route('fortfolio_categories_trash')}}" type="button" class="btn btn-block btn-outline-primary">All Trash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row' style='margin:30px'>
                    <div class='col-md-6 m-auto'>
                        <div class='card'>
                            <div class='card-body'>
                                @if(Session::has('success'))
                                    <script>
                                    swal({title: 'Success!', text: 'Successfully done !', icon: 'success',timer:2000});
                                    </script>
                                @endif

                                @foreach($select as $item)
                                <form class='form p-t-20' method='POST' action='{{route("fortfolio_categories_update",$item->slug)}}'>
                                    @csrf
                                    <div class='form-group'>
                                        <div class='input-group'>
                                            <input type='text' name='name' value='{{$item->name}}' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>update</button>
                                    <a class='btn btn-outline-danger text-capitalize waves-effect waves-light m-r-10' href="{{route('fortfolio_categories_soft_delete',$item->slug)}}">delete</a>
                                </form>
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
