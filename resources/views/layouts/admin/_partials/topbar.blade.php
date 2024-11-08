<!-- Topbar -->
<nav id="topbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <a class="toggle-sidebar"><i class="ti-menu"></i></a>
    <a class="navbar-brand" href="index.html">
      <span>Light Admin</span>
    </a>
  </div>
  <!-- /.navbar-header -->
  <ul class="nav navbar-nav navbar-left search-nav">
    <li class="search">
      <i class="ti-search"></i>
      <form>
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right profile-nav">
    <li class="dropdown">
      <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
        <img class="avatar" src="{{ asset('/') }}assets/images/avatar3.jpg">
        <span class="name hidden-sm hidden-xs">John Doe</span>
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="profile.html"><i class="ti-user"></i> User Profile</a></li>
        <li><a href="#"><i class="ti-settings"></i> Settings</a></li>
        <li><a href="#"><i class="ti-help-alt"></i> Help</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="ti-power-off"></i> Logout</a></li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <ul class="nav navbar-nav navbar-right icons-nav">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="ti-bell"></i>
        <span class="indicator indicator-warning"></span>
      </a>
      <ul class="dropdown-menu dropdown-notifications">
        <li>
          <a href="#">
            <div>
              <i class="ti-comment-alt"></i> <span class="title">New Comment</span>
              <span class="pull-right text-muted small">10:24</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="ti-alert"></i> <span class="title">Server Alert</span>
              <span class="pull-right text-muted small">10:21</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="ti-email"></i> <span class="title">New Email</span>
                <span class="pull-right text-muted small">10:19</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="ti-flag-alt-2"></i> <span class="title">New Task</span>
              <span class="pull-right text-muted small">10:16</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="ti-server"></i> <span class="title">Server Rebooted</span>
              <span class="pull-right text-muted small">10:14</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="text-center" href="#">
            <small>View all notifications</small>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-notifications -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="ti-flag-alt-2"></i>
      </a>
      <ul class="dropdown-menu dropdown-tasks">
        <li>
          <a href="#">
            <div>
              <p>
                <span class="title">Task 1</span>
                <span class="pull-right text-muted">20%</span>
              </p>
              <div class="progress progress-striped progress-mini active">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                     aria-valuemax="100" style="width: 20%">
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <span class="title">Task 2</span>
                <span class="pull-right text-muted">40%</span>
              </p>
              <div class="progress progress-striped progress-mini active">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                     aria-valuemax="100" style="width: 40%">
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <span class="title">Task 3</span>
                <span class="pull-right text-muted">60%</span>
              </p>
              <div class="progress progress-striped progress-mini active">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                     aria-valuemax="100" style="width: 60%">
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <span class="title">Task 4</span>
                <span class="pull-right text-muted">80%</span>
              </p>
              <div class="progress progress-striped progress-mini active">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                     aria-valuemax="100" style="width: 80%">
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="text-center" href="#">
            <small>View all tasks</small>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-tasks -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="ti-settings"></i>
      </a>
      <ul class="dropdown-menu dropdown-settings non-closing-dropdown">
        <li>
          <a>
            White header
            <div class="pull-right">
              <div class="onoffswitch onoffswitch-sm">
                <input type="checkbox" name="white-header-switch" class="onoffswitch-checkbox toggle-white-header" id="white-header-switch">
                <label class="onoffswitch-label" for="white-header-switch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a>
            Filled topbar
            <div class="pull-right">
              <div class="onoffswitch onoffswitch-sm">
                <input type="checkbox" name="filled-topbar-switch" class="onoffswitch-checkbox toggle-filled-topbar" id="filled-topbar-switch">
                <label class="onoffswitch-label" for="filled-topbar-switch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a>
            Mini sidebar
            <div class="pull-right">
              <div class="onoffswitch onoffswitch-sm">
                <input type="checkbox" name="mini-sidebar-switch" class="onoffswitch-checkbox toggle-sidebar" id="mini-sidebar-switch">
                <label class="onoffswitch-label" for="mini-sidebar-switch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li class="text-center dropdown-title">
          Themes:
        </li>
        <li>
          <a href="index.html">
            <div>
              <span class="indicator theme-default"></span>
              <span class="title">Default theme (turquoise)</span>
            </div>
          </a>
        </li>
        <li>
          <a href="index-blue.html">
            <div>
              <span class="indicator theme-blue"></span>
              <span class="title">Blue theme</span>
            </div>
          </a>
        </li>
        <li>
          <a href="index-red.html">
            <div>
              <span class="indicator theme-red"></span>
              <span class="title">Red theme</span>
            </div>
          </a>
        </li>
        <li>
          <a href="index-purple.html">
            <div>
              <span class="indicator theme-purple"></span>
              <span class="title">Purple theme</span>
            </div>
          </a>
        </li>
        <li>
          <a href="index-yellow.html">
            <div>
              <span class="indicator theme-yellow"></span>
              <span class="title">Yellow theme</span>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-notifications -->
    </li>
    <!-- /.dropdown -->
  </ul>
</nav>
