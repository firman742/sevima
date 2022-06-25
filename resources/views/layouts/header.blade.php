<nav class="navbar header-navbar pcoded-header">
  <div class="navbar-wrapper">
      <div class="navbar-logo">
          <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="ti-menu"></i>
          </a>
          <a href="/dashboard">
              <img class="img-fluid" style="width:150px; margin-right:5px;"  src="{{ asset('assets/images/logodarussalam5.png') }}" alt="Theme-Logo" />
          </a>
          <a class="mobile-options">
              <i class="ti-more"></i>
          </a>
      </div>

      <div class="navbar-container container-fluid">
          <ul class="nav-left">
              <li>
                  <div class="sidebar_toggle">
                    <a class="text-dacoration-none" href="javascript:void(0)"><i class="ti-menu"></i></a>
                </div>
              </li>
          </ul>
          <ul class="nav-right">
              <li class="user-profile header-notification">
                  <a href="#!" class="text-decoration-none">
                      <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                      <span></span>
                      <i class="ti-angle-down"></i>
                  </a>
                  <ul class="show-notification profile-notification">
                      <li>
                          <a href="#!" class="text-decoration-none">
                              <i class="ti-settings"></i> Settings
                          </a>
                      </li>
                      <li>
                          <a href="#!" class="text-decoration-none">
                              <i class="ti-user"></i> Profile
                          </a>
                      </li>
                      
                      <li>
                          <a href="#!" class="text-decoration-none">
                              <i class="ti-lock"></i> Lock Screen
                          </a>
                      </li>
                      <li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
      
                          <a class="dropdown-item text-decoration-none" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </a>
                      </form>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</nav>