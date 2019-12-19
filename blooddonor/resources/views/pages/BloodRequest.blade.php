@extends('layouts.app')
<link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
@section('title', 'BloodRequest')

@section('content')
    <div class="container">
        <div class="text-center">

            <h1>BLOOD REQUEST</h1>
            <h4>If you need fresh blood Donor then Please fill out the form below to send us and we will get back to you as soon as possible.</h4>
            <hr>
        </div>


        <div class="col-md-12">
            <div class="jumbotron">
                <div class="panel panel-body">
                <div class="error">
                    @if (Session::has('flash_msg'))
                        <div class="alert alert-success">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('flash_msg') }}
                        </div>
                    @endif

                </div>
                    <form action="{{ url('/Blood') }}" method="POST">
                        {{ csrf_field() }}

                          <div class="col-md-6">
                              <div class="panel panel-heading"><h3>Patient Information</h3></div>


                              <div class="form-group">
                                  <label class="control-label">Patient Name</label>
                                  <input id="patientName" type="text"  placeholder="Patient Full Name" class="form-control" name="patientname" value=""  autofocus>
                                  @if(!empty($errors->first()))
                                      <div style=" color:#FF0000;">   <span>{{ $errors->first('patientname') }}</span>  </div>

                                  @endif
                              </div>

                              <div class="form-group ">
                                  <label class="control-label ">Gender:</label>
                                  <input type="radio" id="gender" name="gender" value="Male" checked> Male
                                  <input type="radio" id="gender" name="gender" value="Female"> Female
                              </div>

                              <div class="form-group">
                                  <label class="control-label">Blood Group</label>
                                  {{ Form::select('blood_id', $blood, 'select' , ['class' => 'form-control','placeholder' => 'Select Blood Group']) }}
                                  @if(!empty($errors->first()))
                                      <div style=" color:#FF0000;">   <span>{{ $errors->first('bloodgroup') }}</span>  </div>

                                  @endif
                              </div>


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
                                      <option  selected="selected">Select District First</option>

                                  </select>
                              </div>


                              <script type="text/javascript">
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


                          </div>

                        <div class="col-md-6">
                            <div class="panel panel-heading"><h3>Other Information</h3></div>
                            <div class="form-group">
                                <label class="control-label">Diseases/Case</label>
                                <input id="diseases" type="text"  placeholder="Enter Diseases " class="form-control" name="diseases" value=""  autofocus>
                                @if(!empty($errors->first()))
                                    <div style=" color:#FF0000;">   <span>{{ $errors->first('diseases') }}</span>  </div>

                                @endif
                            </div>

                            <div class="form-group">
                                <label class="control-label">Amount</label>
                                <input id="amount" type="text"  placeholder="Amount of blood need" class="form-control" name="amount" value=""  autofocus>
                                @if(!empty($errors->first()))
                                    <div style=" color:#FF0000;">   <span>{{ $errors->first('amount') }}</span>  </div>

                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Need Date</label>
                                <input id="need_date" type="date"  placeholder="Blood needed date" class="form-control" name="date" value=""  autofocus>
                                @if(!empty($errors->first()))
                                    <div style=" color:#FF0000;">   <span>{{ $errors->first('date') }}</span>  </div>

                                @endif
                            </div>


                            <div class="form-group">
                                <label class="control-label">Hospital Name</label>
                                <input id="hospital_name" type="text"  placeholder=" Hospitan Name" class="form-control" name="hospital" value=""  autofocus>

                                @if(!empty($errors->first()))
                                    <div style=" color:#FF0000;">   <span>{{ $errors->first('hospital') }}</span>  </div>

                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Number</label>
                                <input id="phone" type="number"  placeholder="Contact Person Number" class="form-control" name="phone" value=""  autofocus>
                                @if(!empty($errors->first()))
                                    <div style=" color:#FF0000;">   <span>{{ $errors->first('phone') }}</span>  </div>

                                @endif
                            </div>
                        </div>

                        <div id="success"></div>
                        <div class="form-group">

                            <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                        </div>
                            <!-- For success/fail messages -->





                    </form>





               {{--<div class="col-md-6">--}}

                   {{--<div class="panel panel-default">--}}
                       {{--<div class="panel panel-heading">--}}

                       {{--</div>--}}
                       {{--<div class="panel panel-body">--}}

                       {{--</div>--}}
                   {{--</div>--}}
               {{--</div>--}}

                {{--<div class="col-md-6">--}}

                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel panel-heading">--}}

                        {{--</div>--}}
                        {{--<div class="panel panel-body">--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}



</form>
            </div>
        </div>
        </div>



    </div>
    @endsection
