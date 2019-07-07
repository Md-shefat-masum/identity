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
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>mail</th>
                <th>mobile</th>
                <th>role</th>
                <th>manage</th>
            </tr>
        </tfoot>
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
@endsection
