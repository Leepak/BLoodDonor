<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/6/2019
 * Time: 3:37 PM
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
                Report
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="#">Report</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                <div class="box-body">
                    @if (Session::has('flash_msg'))
                        <div class="alert alert-success">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('flash_msg') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <form class="form-horizontal" action="{{ url('/viewReport') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-md-1 control-label">District:</label>
                                <div class="col-md-3">
                                    {{ Form::select('district', $district, "Select District" , ['class' => 'form-control','placeholder' => 'Select District']) }}
                                </div>
                                <label class="col-md-1 control-label">Blood:</label>
                                <div class="col-md-3">
                                    {{ Form::select('blood', $blood, "Select Blood Group" , ['class' => 'form-control','placeholder' => 'Select Blood Group']) }}
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary" type="submit">View Report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                <div class="panel panel-default">
                    <div class="panel-body">

                    <div class="col-md-12">
                        <table id="data-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Full Name</th>
                                <th>Blood Group</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($report as $key => $data)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->firstname." ".$data->lastname }}</td>
                                    <td>{{ $data->Blood->blood_group }}</td>
                                    <td>{{ $data->District->district_name}}</td>
                                    <td>{{ $data->City->city_name }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="heading" style="padding-bottom: 50px;">
                            <a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>
                        </div>





                    </div>



                     </div>
                </div>









                <!-- /.box-body -->
                <!-- <div class="box-footer">
                  Footer
                </div> -->
                <!-- /.box-footer-->
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
