<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/4/2019
 * Time: 5:38 PM
 */
?>
@extends('admin.layouts.app')
<style>
    .data-table {
        max-width: 600px;
        margin: 0 auto;
    }
    .data-table th, td {
        white-space: nowrap;
    }
</style>
@section('css')
    @parent
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Donor Master List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="#">Donor Master List</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Donor</h3>
                    <div style="float: right;">
                        <a href="{{ url('/admin/Donor/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;Add Donor
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    @if (Session::has('flash_msg'))
                        <div class="alert alert-success">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('flash_msg') }}
                        </div>
                    @endif
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Donor name</th>
                            <th>District</th>
                            <th>City</th>
                            <th style="width: 10px">Blood Group</th>
                            <th>Phone Num</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($donor as $key => $data)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset('uploads/'.$data->image) }}" alt="" width="100" height="100"></td>
                                <td>{{ $data->firstname }}&nbsp;{{ $data->lastname }}</td>
                                <td>{{ $data->District->district_name}}</td>
                                <td>{{ $data->City->city_name }}</td>
                                <td>{{ $data->Blood->blood_group }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>
                                    @if($data->status == 1)
                                        <a href="#" class="btn btn-success btn-xs">Active</a>
                                    @else
                                        <a href="#" class="btn btn-danger btn-xs">In active</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/admin/Donor/'.$data->id.'/edit') }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ url('/admin/Donor/'.$data->id) }}" style="display: inline;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you' +
                       ' want to delete?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
                <!-- <div class="box-footer">
                  Footer
                </div> -->
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    @parent
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#data-table').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });

    </script>
@endsection





