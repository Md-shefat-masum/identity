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
            <div class="card">
                <div class="card-body all-user" style="overflow-x:scroll;">
                    <table id="dt-example-responsive" class="table table-bordered"  cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>mail</th>
                                <th>role</th>
                                <th>creator</th>
                                <th>photo</th>
                                <th>manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($all as $data)
                            @php $check=$data->role_serial; $check= (int)$check; @endphp
                            @php $role=App\user_role::where('role_serial',$check)->select('role_name')->firstOrFail();  @endphp
                            <tr>
                                <td style="vertical-align:middle;">{{$i++}}</td>
                                <td style="vertical-align:middle;">{{$data->name}}</td>
                                <td style="vertical-align:middle;">{{$data->email}}</td>
                                <td style="vertical-align:middle;">{{$data->rolename->role_name}}</td>
                                <td style="vertical-align:middle;">{{$data->creator}}</td>
                                <td style="vertical-align:middle;">
                                    <div class="div" style="height:70px; width:70px; overflow:hidden; border-radius:50%;padding:2px; border:1px solid gray;">
                                        <img style="height:100%;width:100%;border-radius:50%;" src="{{asset('')}}{{$data->photo}}" alt="profile pic">
                                    </div>
                                </td>
                                <td style="vertical-align:middle;">
                                    <a href="{{route('user_view',$data->slug)}}"title="view user"><i class="fa fa-plus"></i></a>
                                    {{-- <a href="{{$data->name}}" id="viewData" data-id="{{$data->id}}" data-toggle="modal" data-target="#viwModal" title="view user"><i class="fa fa-plus"></i></a> --}}
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
                                "responsive": false,
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
        </div>

        <div class='col-md-4'>
            <div class='card'>
                <div class='card-body'>
                    <form class='form p-t-20' novalidate enctype='multipart/form-data' method='POST' action="{{route('user_add')}}">
                    @csrf
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>Name</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-user'></i></div>
                                <input name='name' value='' required data-validation-required-message="This field is required" class='form-control text-lower' id='exampleInputuname' placeholder='name'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>email</label>
                            </div>
                            <div class='input-group'>
                                <div class='input-group-addon'><i class='ti ti-envelope'></i></div>
                                <input name='email' type="email" value='' required data-validation-required-message="This field is required" class='form-control text-lower' id='exampleInputuname' placeholder='email'>
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
                                <div class="controls">
                                    <input type="password" name='password' required data-validation-required-message="This field is required" value='' class='form-control text-lower' id='exampleInputuname' placeholder='password'>
                                </div>
                        </div>
                        <div class='form-group'>
                            <div class='input-group'>
                                <label for='name'>retype password</label>
                            </div>
                                <div class="controls">
                                    <input name='repass' type="password" value=''required data-validation-match-match="password" class='form-control text-lower' id='exampleInputuname' placeholder='re type password'>
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

    <div class="modal fade" id="viwModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
