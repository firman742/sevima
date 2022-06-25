  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      @include('layouts.header')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
               @include('layouts.navbar')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                      @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
