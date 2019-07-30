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

        <div class="row page-titles" style="background:url('{{asset('contents/admin')}}/assets/images/background/user-bg.jpg') no-repeat center top">
            <div class="col-lg-12 text-center">
                <h1 class="m-t-30 text-uppercase">{{Auth::user()->name}}</h1>
                 @php $select=App\aboutme::where('id',1)->firstOrFail(); @endphp
                <h5 class="text-muted m-b-30"><i class="ti-pin"></i>{{$select->address}}</h5>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="m-b-0"><i class="fa fa-users text-info"></i></h2>
                            @php $countu=App\user::where('status',1)->count(); @endphp
                            <h3 class="">{{$countu}}</h3>
                            <h6 class="card-subtitle">Total active user</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{$countu}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                            @php $counti=App\user::where('status',0)->count(); @endphp
                            <h3 class="">{{$counti}}</h3>
                            <h6 class="card-subtitle">Total innactive users</h6></div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$counti}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <div class="col-lg-3 col-md-4">
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

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                        </div>
                        <h4 class="card-title m-b-0">All Message</h4>
                    </div>
                    <div class="card-body collapse show">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sms = App\contact_message::where('status',1)->orderBy('id','DESC')->get(); @endphp
                                    @foreach ($sms as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->message}}</td>
                                            <td>
                                                <span class="label label-success font-weight-100">{{$item->created_at}}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('message_view',$item->slug)}}" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="View"><i class="ti-marker-alt"></i></a>
                                                <a href="{{route('message_index')}}" class="text-inverse" title="" data-toggle="tooltip" data-original-title="All Message"><i class="mdi mdi-message"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
