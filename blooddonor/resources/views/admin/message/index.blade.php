<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/5/2019
 * Time: 9:41 PM
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
            Message<small> List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="#">Message </a></li>
        </ol>
    </section>

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
                        <th style="width:80px">Full Name</th>
                        <th style="width:50px">Phone </th>
                        <th style="width:50px">Email</th>
                        <th>Message</th>
                        <th style="width:30px">Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($message as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->fullname}}</td>
                            <td>{{ $data->phone}}</td>
                            <td>{{ $data->email}}</td>
                            <td>{{ $data->message}}</td>
                            <td>

                                <form method="POST" action="{{ url('/admin/Message/'.$data->id) }}" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you' +
                       ' want to delete?')">
                                        <i class="fa fa-trash"></i> Delete
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



