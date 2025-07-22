<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
      aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ url('dashboard') }}">
      <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="ni ni-bell-55"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>My profile</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>Settings</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>Activity</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>Support</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#!" class="dropdown-item">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
          </a>
        </div>
      </li>
    </ul>


    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{ url('/') }}">
              <img src="{{ asset('assets/img/brand/blue.png') }}">
            </a>
          </div>
          <!-- <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div> -->
        </div>
      </div>

      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link active" href="{{ url('dashboard') }}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>

        {{-- Master Data --}}
        <li class="nav-item">
          <a class="nav-link" href="#navbar-master-data" data-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="navbar-master-data">
            <i class="ni ni-bullet-list-67 text-blue"></i>
            <span class="nav-link-text">Master Data</span>
          </a>
          <div class="collapse" id="navbar-master-data">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-square-pin"></i> Area
                </a>
              </li>
            </ul>
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-archive-2"></i> Criteria
                </a>
              </li>
            </ul>
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-atom"></i> Commodity
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-primary"></i> User profile
          </a>
        </li>
      </ul>

      <hr class="my-3">
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-chart-bar-32 text-primary"></i> Criteria Range
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-compass-04 text-primary"></i> Area Data
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>