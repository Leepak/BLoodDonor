<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/4/2019
 * Time: 5:38 PM
 */
?>
@extends('admin.layouts.app')

@section('css')
    @parent
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Request Request List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="#">Donor Request List</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Blood Request</h3>

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
                            <th>Patient Name</th>
                            <th>Gender</th>
                            <th>Diseases</th>
                            <th>Hospital</th>
                            <th>City</th>
                            <th>Blood</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($bloodrequest as $key => $data)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $data->patientname}}</td>
                                <td>{{ $data->gender}}</td>
                                <td>{{ $data->diseases}}</td>
                                <td>{{ $data->hospital}}</td>
                                <td>{{ $data->City->city_name}}</td>
                                <td>{{ $data->Blood->blood_group}}</td>
                                <td>
                                    @if($data->status == 1)
                                        <a href="#" class="btn btn-success btn-xs">Accepted</a>
                                    @else
                                        <a href="#" class="btn btn-danger btn-xs">Pending</a>
                                    @endif



                                </td>
                                <td>
                                    <a href="{{ url('/admin/ViewRequest/'.$data->id)}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ url('/admin/BloodRequest/'.$data->id) }}" style="display: inline;">
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
        $(function () {
            $('#data-table').DataTable();
        });

    </script>
@endsection
