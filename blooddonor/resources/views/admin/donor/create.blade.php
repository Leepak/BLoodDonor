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
<link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
@section('title', '|Donor Register')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Donor
                <small>Add Donor</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="{{ url('/admin/Donor') }}"> Add Donor</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Employee</h3>
                </div>
                <div class="box-body">
                    <div class="error">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="container"></div><div class="container">

                        <div class="stepwizard col-md-offset-2">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>personal Information</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Contact Information</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="jumbotron">

                                <div class="error">
                                    @if (Session::has('flash_msg'))
                                        <div class="alert alert-success">
                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {{ Session::get('flash_msg') }}
                                        </div>
                                    @endif
                                </div>

                                <form action="{{ url('/admin/Donor') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row setup-content" id="step-1">
                                        <div class="col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel panel-body">
                                                    <div class="panel panel-heading">
                                                        <div class="text-center">
                                                            <h4>Personal Information</h4>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input id="firstname" type="text"  placeholder="Enter Your FirstName" class="form-control" name="firstname" required="required"  autofocus>
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('firstname') }}</span>  </div>

                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input id="lastname" type="text"  placeholder="Enter Your LastName" class="form-control" name="lastname" required="required" autofocus >
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('lastname') }}</span>  </div>

                                                        @endif
                                                    </div>

                                                    <div class="form-group ">
                                                        <label class="control-label ">Gender:</label>
                                                        <input type="radio" id="gender" name="gender" value="Male" checked> Male
                                                        <input type="radio" id="gender" name="gender" value="Female"> Female
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('gender') }}</span>  </div>

                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Date of Birth</label>
                                                        <input id="dob" type="date"  placeholder="Enter Birth date" class="form-control" name="dob" required="required"  autofocus>
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('dob') }}</span>  </div>

                                                        @endif
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label">Blood Group</label>
                                                        {{ Form::select('blood_id', $blood, 'select' , ['class' => 'form-control' ,'placeholder' => 'Select Blood Group',]) }}
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('bloodgroup') }}</span>  </div>

                                                        @endif
                                                    </div>



                                                </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group row">
                                                            <div class="image-div">
                                                                <img src="{{ asset('images/user.jpg') }}" alt="user-image" class="img img-thumbnail" id="preview-image" width="200" height="200">
                                                            </div>
                                                            <span class="btn btn-primary btn-file">
                        Upload Picture...<input type="file" name="image" class="form-control" onchange="document.getElementById('preview-image').src = window.URL.createObjectURL(this.files[0])">
                      </span>
                                                            @if(!empty($errors->first()))
                                                                <div style=" color:#FF0000;">   <span>{{ $errors->first('image') }}</span>  </div>

                                                            @endif
                                                        </div>
                                                    </div>
                                            </div>

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

                                        </div>
                                    </div>
                                    </div>

                                    <div class="row setup-content" id="step-2">
                                        <div class="col-xs-12">
                                            <div class="panel panel-body">
                                                <div class="panel panel-heading">
                                                    <div class="text-center">
                                                        <h4>Contact Information</h4>
                                                    </div>
                                                </div>

                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label class="control-label">District</label>
                                                        {{ Form::select('district_id', $district, "Select District" , ['class' => 'form-control','placeholder' => 'Select District', 'onchange' => 'getCity(this.value)']) }}
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('district') }}</span>  </div>

                                                        @endif
                                                    </div>



                                                    <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
                                                        <label class="control-label">City</label>
                                                        <select  name="city_id" id="showCity" selected="selected" class="form-control">
                                                            <option >Select District First</option>

                                                        </select>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="control-label">Phone Number:</label>
                                                        <input id="phone" type="text"  placeholder="Enter your Mobile Number" class="form-control" name="phone" required="required"  autofocus>
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('phone') }}</span>  </div>

                                                        @endif


                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>

                                                        <input type="text" name="email" class="form-control" placeholder="Example@gmail.com" required="required">
                                                        @if(!empty($errors->first()))
                                                            <div style=" color:#FF0000;">   <span>{{ $errors->first('email') }}</span>  </div>

                                                        @endif
                                                    </div>



                                                </div>
                                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                                                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>






                                </form>
                            </div>
                        </div>

                        <!-- /.box-body -->
                    <!-- <div class="box-footer">
                      Footer
                    </div> -->
                    <!-- /.box-footer-->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    @parent
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


    <script type="text/javascript">
        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepWizard.removeAttr('disabled').trigger('click');
            });

            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');
        });

    </script>
@endsection
