@extends('user.layouts.app')


@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Dashboard
        <small>Donor Management</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Welcome {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            @foreach($donor as $key => $data)
          <div class="col-md-4">

                  <div class="box box-primary">
                      <div class="box-body box-profile">
                          <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/'.$data->image) }}" alt="User profile picture">

                          <h3 class="profile-username text-center">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</h3>


                          <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                  <b>Full Name:</b> <a class="pull-right">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</a>
                              </li>
                              <li class="list-group-item">
                                  <b>Email:</b> <a class="pull-right">{{ $data->email }}</a>
                              </li>
                          </ul>

                          <a href="{{ ('/getChangePassword') }}" class="btn btn-primary btn-block"><b>Change Password</b></a>
                      </div>
                      <!-- /.box-body -->
                  </div>
          </div>
                <div class="col-md-4 ">
                  <div class="box box-primary">
                      <div class="box-header with-border">
                          <i class="fa fa-user"></i>
                          <h3 class="box-title">About Me</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <strong><i class="fa fa-calendar margin-r-5"></i> Data of Birth</strong>

                          <p class="text-muted"><strong>{{ $data->dob }}</strong>
                          </p>

                          <hr>

                          <strong><i class="fa fa-transgender margin-r-5"></i> Gender</strong>

                          <p class="text-muted"><strong>{{ $data->gender }}</strong></p>

                          <hr>

                          <strong><i class="fa fa-flask margin-r-5"></i> Blood Group</strong>

                          <p class="text-muted"><strong>{{ $data->Blood->blood_group }}</strong></p>

                          <hr>


                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="fa fa-address-book-o"></i>
                            <h3 class="box-title">Contact information</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i  class="fa fa-map-marker margin-r-5"></i> District</strong>

                            <p class="text-muted"><strong>{{ $data->District->district_name }}</strong></p>

                            <hr>

                            <strong><i class="fa fa-map margin-r-5"></i> City</strong>

                            <p class="text-muted"><strong>{{ $data->City->city_name }}</strong></p>

                            <hr>

                            <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                            <p class="text-muted"><strong>{{ $data->phone }}</strong>
                            </p>




                        </div>
                    </div>
                </div>







            @endforeach
          </div>

          <!-- /.col -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
