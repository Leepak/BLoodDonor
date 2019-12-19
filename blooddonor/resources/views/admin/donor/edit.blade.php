<?php
/**
 * Created by PhpStorm.
 * User: leepa
 * Date: 1/4/2019
 * Time: 5:38 PM
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                donor
                <small>Edit donor</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="{{ url('/admin/Donor') }}"> Edit donor</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit donor</h3>
                </div>
                <div class="box-body">


                    <form action="{{ url('/admin/Donor/'.$donor->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}


                        <div class="row">
                            <div class="col-md-4">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="fa fa-photo"></i>
                                        <h3 class="box-title">Picture</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="image-div">
                                            @if(isset($donor->image))
                                                <img src="{{ asset('uploads/'.$donor->image) }}" alt="user-image" class="img img-thumbnail" id="preview-image" width="150" height="150">
                                            @else
                                                <img src="{{ asset('uploads/user.jpg') }}" alt="user-image" class="img img-thumbnail" id="preview-image" width="150" height="150">
                                            @endif
                                        </div>
                                        <span class="btn btn-primary btn-file">
                        Upload Picture...<input type="file" name="image"  class="form-control" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
                      </span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <!-- <i class="fa fa-photo"></i> -->
                                        <h3 class="box-title">Contact Information</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-md-14">



                                            <div class="form-group">
                                                <label class="control-label">District</label>
                                                {{ Form::select('district_id', $district, $donor->district_id , ['class' => 'form-control', 'onchange' => 'getCity(this.value)']) }}

                                            </div>
                                            <script>
                                                function getCity(id){
                                                    // alert("<option value='"+id+"'></option>");
                                                    $.ajax({
                                                        url: "{{ url('/city/showCity') }}",
                                                        type: "GET",
                                                        data: {
                                                            '_token': $('input[name=_token]').val(),
                                                            'id': id
                                                        },

                                                        success: function(data){
                                                            var toAppend = '';
                                                            //if(typeof data === 'object'){
                                                            for(var i=0;i<data.length;i++){
                                                                toAppend += '<option value="'+data[i]['id']+'"">'+data[i]['name']+'</option>';
                                                            }
                                                            //}
                                                            $('#showCity').html(toAppend);
                                                        },

                                                        error: function (xhr, ajaxOptions, thrownError) {
                                                            alert(xhr.responseText);
                                                        }
                                                    });
                                                }
                                            </script>



                                            <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
                                                <label class="control-label">City</label>
                                                <select  name="city_id" id="showCity" selected="selected" class="form-control">
                                                    <option value="{{ $donor->city_id }}">{{ $donor->City->city_name }}</option>


                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Phone Number:</label>
                                                <input maxlength="10" type="int" name="phone" value="{{ $donor->phone }}" required="required" class="form-control" placeholder="Enter Phone number">

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="fa fa-user"></i>
                                        <h3 class="box-title">Personal Information</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-md-12">

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">First Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="firstname" value="{{ $donor->firstname }}" required="required" class="form-control" placeholder="Enter First Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Last Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="lastname"value="{{ $donor->lastname }}" required="required" class="form-control" placeholder="Enter Last Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Date of Birth</label>
                                                <div class="col-md-10">
                                                    <input type="date" name="dob" value="{{ $donor->dob }}" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Gender</label>
                                                <div class="col-md-10">
                                                    @if($donor->gender == 0)
                                                        <input type="radio" name="gender" value="Male" checked="checked"> Male
                                                        <input type="radio" name="gender" value="Female"> Female
                                                    @else
                                                        <input type="radio" name="gender" value="Male"> Male
                                                        <input type="radio" name="gender" value="Female" checked="checked"> Female
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Blood Group</label>
                                                <div class="col-md-10">
                                                    {{ Form::select('blood_id', $blood, $donor->blood_id , ['class' => 'form-control']) }}


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12">

                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection




