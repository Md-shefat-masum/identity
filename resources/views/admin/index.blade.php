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


    <div class="row" >
        <div class="col-12">
            <div class="card">
                <div class="car-body" style="padding:15px">
                    <h4 class="card-title">All Admin</h4>
                    <h6 class="card-subtitle">modarator of website</h6>
                    <div class="row">
                        @php $select=App\user::where('status',1)->where('role_serial',2)->get(); @endphp
                        @foreach ($select as $select)
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('contents/admin')}}/assets/images/big/img2.jpg" alt="Card image cap">
                                    <div class="card-body little-profile text-center">
                                        <div class="pro-img"><img src="{{asset('')}}{{$select->photo}}" alt="user" /></div>
                                        <h3 class="m-b-0">{{$select->name}}</h3>
                                        <p>role : {{$select->rolename->role_name}}</p>
                                        <a href="{{route('user_profile',$select->slug)}}" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">View</a>
                                        <div class="row text-center m-t-20">
                                            <div class="col-lg-12 col-md-12 m-t-20">
                                                <h3 class="m-b-0 font-light">email:</h3><small>{{$select->email}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
