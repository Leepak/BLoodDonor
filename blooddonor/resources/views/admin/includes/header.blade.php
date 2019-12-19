  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Blood Donor</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Blood Donors</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user fa-1x"></i>
              <span class="hidden-xs">{{ Sentinel::getUser()->first_name }}&nbsp;&nbsp;<i class="fa fa-caret-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <i class="fa fa-user fa-3x"></i>

                <p>
                  {{ Sentinel::getUser()->first_name }}
                  <?php 
                  	$dt = Carbon\Carbon::parse(Sentinel::getUser()->created_at); 
                  	$dt = $dt->toFormattedDateString();
                  ?>
                  <small>Member since :: {{ $dt }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form action="{{ url('/logout') }}" method="post" id="logout-form">
                      {{ csrf_field() }}
                      <button type="submit" class="logout-link btn btn-default"><i class="icon_key_alt"></i> Log Out</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
