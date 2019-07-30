@extends('layouts.admin')
@section('contents')
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dash board</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Dash board</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">

    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="fa fa-users text-info"></i></h2>
                        @php $count=App\user::where('status',1)->count(); @endphp
                        <h3 class="">{{$count}}</h3>
                        <h6 class="card-subtitle">Total active user</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: {{$count}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="fa fa-users text-danger"></i></h2>
                        @php $count=App\user::where('status',1)->count(); @endphp
                        <h3 class="">{{$count}}</h3>
                        <h6 class="card-subtitle">Total innactive users</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$count}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-email text-purple"></i></h2>
                        @php $count=App\contact_message::where('status',1)->count(); @endphp
                        <h3 class="">{{$count}}</h3>
                        <h6 class="card-subtitle">Total Message</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{$count}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                        @php $count=App\partners::where('status',1)->count(); @endphp
                        <h3 class="">{{$count}}</h3>
                        <h6 class="card-subtitle">Total Partners</h6></div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{$count}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            .c
            <h4 class="card-title">Activity Timeline</h4>
            <h6 class="card-subtitle">users activity thourout the day</h6>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('contents/admin')}}/assets/images/background/profile-bg.jpg" alt="Card image cap">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img"><img src="{{asset('contents/admin')}}/assets/images/users/4.jpg" alt="user" /></div>
                            <h3 class="m-b-0">Angela Dominic</h3>
                            <p>Web Designer &amp; Developer</p>
                            <button href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Follow</button>
                            <div class="row text-center m-t-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">1099</h3><small>Articles</small>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">6035</h3><small>Following</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
