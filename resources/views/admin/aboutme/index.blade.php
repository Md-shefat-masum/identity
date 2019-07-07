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
                        <li class="breadcrumb-item active">index</li>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Section Heading</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->heading}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Section sub Heading</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->sub_heading}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">paragraph</label>
                                        <div class="input-group">
                                            <textarea type="text" value="" style="height:250px;" class="form-control" id="exampleInputuname" placeholder="">{{$select->paragraph}}</textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">name</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->name}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">Occupation</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->occupation}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">birth date</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->birthdate}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">phone</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->phone}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">email</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->email}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">website</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->website}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">address</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->address}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">happy clients</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->happy_client}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">experience</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->experience}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">award</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->award}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                                <form class="form p-t-20" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname">project done</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$select->project_done}}" class="form-control" id="exampleInputuname" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">update</button>
                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
