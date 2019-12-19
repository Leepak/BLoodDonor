  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <span class="fa fa-user fa-4x" style="color: #fff;"></span> -->
            @if(isset($donor->image))
                <img src="{{ asset('uploads/'.$data->image) }}" alt="user-image" class="img-circle" id="preview-image" width="150" height="150">
            @else
                <img src="{{ asset('uploads/user.jpg') }}" alt="user-image"  class="img-circle" id="preview-image" width="150" height="150">
            @endif
        </div>
        <div class="pull-left info">
          <p>{{ Sentinel::getUser()->first_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ asset('files/help.pdf') }}" target="__blank"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
