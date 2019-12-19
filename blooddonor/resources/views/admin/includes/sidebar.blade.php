  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <span class="fa fa-user fa-4x" style="color: #fff;"></span>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Donors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/admin/Donor/create') }}"><i class="fa fa-circle-o"></i> Add Donor</a></li>
            <li><a href="{{ url('/admin/Donor/') }}"><i class="fa fa-circle-o"></i> Donor Masterlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bell-o"></i> <span>Blood Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/BloodRequest/') }}"><i class="fa fa-circle-o"></i> Request Masterlist</a></li>
          </ul>
        </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-envelope-o"></i> <span>Enquery Message</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ url('admin/Message/') }}"><i class="fa fa-circle-o"></i> Message Masterlist</a></li>
              </ul>
          </li>

        <li><a href="{{ url('/admin/Report/') }}"><i class="fa fa-book"></i> <span>Report</span></a></li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
