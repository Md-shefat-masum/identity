@extends('layouts.admin')
@section('contents')
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All User</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">All User</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">


{{-- edit part start --}}

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body all-user">
                <table id="dt-example-responsive" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>mail</th>
                            <th>mobile</th>
                            <th>role</th>
                            <th>manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <a href="#" title="view user"><i class="fa fa-plus"></i></a>
                                <a href="#" title="edit user information"><i class="fa fa-pencil"></i></a>
                                <a href="#" title="delete user information"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function() {
                        app._loading.show($("#dt-ext-responsive"), {
                            spinner: true
                        });
                        $("#dt-example-responsive").DataTable({
                            "responsive": true,
                            "initComplete": function(settings, json) {
                                setTimeout(function() {
                                    app._loading.hide($("#dt-ext-responsive"));
                                }, 1000);
                            }
                        });
                    });

                </script>
            </div>
        </div>

        <div class='col-md-4'>
            <div class='card'>
                <div class='card-body'>
                    <form class='form p-t-20' enctype='multipart/form-data' method='POST' action="">
                    @csrf
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>Name</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-user'></i></div>
                                <input name='name' value='' required data-validation-required-message="This field is required" class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>email</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-envelope'></i></div>
                                <input name='email' value='' required data-validation-required-message="This field is required" class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>user role</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                {{-- <input name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'> --}}
                                <select name="user_role" id="" class='form-control text-lower' required data-validation-required-message="This field is required">
                                    <option value="">select role</option>
                                    @php
                                        $select=App\user_role::where('status',1)->get();
                                    @endphp
                                    @foreach ($select as $item)
                                        <option value="{{$item->role_serial}}">{{$item->role_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>password</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                <input type="password" name='password' required data-validation-required-message="This field is required" value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>retype password</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-pencil'></i></div>
                                <input name='repass' type="password" value=''required data-validation-match-match="password" class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>Add Photo</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-gallery'></i></div>
                                <input type="file" name='photo' required data-validation-required-message="This field is required" value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
                            </div>
                        </div>
                        <button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>Add user</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
