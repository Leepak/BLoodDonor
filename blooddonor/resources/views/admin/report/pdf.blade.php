<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/6/2019
 * Time: 6:12 PM
 */
?>
@extends('admin.layouts.app')

@section('css')
    @parent
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
               Showing Result
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="{{ url('/admin/Report') }}">Report</a></li>
            </ol>
        </section>
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
                        <div class="heading" style="padding-bottom: 50px;">
                            <a href="{{'/report/pdf'}}" class="btn btn-info btn-sm pull-right">
                                <i class="fa fa-download"></i> Download Pdf
                            </a>
                            <a href="{{'admin/Report'}}" class="btn btn-info btn-sm pull-left">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
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





                    </div>

                </div>
            </div>
        </section>



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
