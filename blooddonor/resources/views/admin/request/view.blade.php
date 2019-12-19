<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/5/2019
 * Time: 11:41 PM
 */
?>
@extends('admin.layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blood<small> Request List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="#">Blood Request</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bell"></i>
                    <h3 class="box-title">Blood Request information</h3>
                </div>


                <div class="box-body">
                    <form method="POST" action="{{ url('blood/' . $bloodrequest->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                    <div class='col col-xs-6'>
                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <strong> <i class="fa fa-user-circle-o margin-r-5"></i>Patient Name: <a class="pull-center">&nbsp;&nbsp;
                                       {{$bloodrequest->patientname}}</a></strong>
                            </li>

                            <li class="list-group-item">
                                <strong><i class="fa fa-intersex margin-r-5"></i> Gender:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->gender}}</a></strong>
                            </li>


                            <li class="list-group-item">
                                <strong><i class="fa fa-ambulance margin-r-5"></i> Diseases:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->diseases}}</a></strong>
                            </li>

                            <li class="list-group-item">
                                <strong><i class="fa fa-phone margin-r-5"></i> Contact person phone:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->phone}}</a></strong>

                            </li>
                        </ul>
                    </div>

                    <div class="col col-xs-6">
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <strong><i class="fa fa-flask margin-r-5"></i> Blood Group:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->Blood->blood_group}}</a></strong>

                            </li>


                            <li class="list-group-item">
                                <strong><i class="fa fa-plus-square margin-r-5"></i> Amount:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->amount}}</a></strong>

                            </li>

                            <li class="list-group-item">

                                <strong><i class="fa fa-calendar margin-r-5"></i> Required Date:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->date}}</a></strong>

                            </li>

                            <li class="list-group-item">
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Address:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->District->district_name}},{{$bloodrequest->City->city_name}}</a></strong>
                            </li>

                            <li class="list-group-item">
                                <strong><i class="fa fa-hospital-o margin-r-5"></i> Hospital:&nbsp;&nbsp;<a class="pull-center">
                                        {{$bloodrequest->hospital}}</a></strong>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-12">

                            <input type="hidden" name="patientname" value="{{$bloodrequest->patientname}}">
                            <input type="hidden" name="gender" value="{{$bloodrequest->gender}}">
                            <input type="hidden" name="blood_id" value="{{$bloodrequest->blood_id}}">
                            <input type="hidden" name="district_id" value="{{$bloodrequest->district_id}}">
                            <input type="hidden" name="city_id" value="{{$bloodrequest->city_id}}">
                            <input type="hidden" name="phone" value="{{$bloodrequest->phone}}">
                            <input type="hidden" name="diseases" value="{{$bloodrequest->diseases}}">
                            <input type="hidden" name="amount" value="{{$bloodrequest->amount}}">
                            <input type="hidden" name="date" value="{{$bloodrequest->date}}">
                            <input type="hidden" name="hospital" value="{{$bloodrequest->hospital}}">
                            <input type="hidden" name="status" value="1">




                            <button type="submit" class="btn btn-lg btn-success pull-right" >ok</button>




                    </div>
                 </form>

                </div>
            </div>
            <!-- /.box-header -->





        </div>
</section>
</div>
    @endsection




