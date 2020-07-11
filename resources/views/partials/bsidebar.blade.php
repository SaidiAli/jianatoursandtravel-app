<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="/backend/assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu"/>
        <img src="/backend/assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu"/>
        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">{{auth()->user()->name}}</h6>
            <span class="pro-user-desc">Champion</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
               aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="#" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                {{-- <a href="{{ route('settings') }}" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a> --}}

                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                    <span>Support</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                    <span>Lock Screen</span>
                </a> --}}

                <div class="dropdown-divider"></div>
                {{-- <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a> --}}

                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                 
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="#">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                <a href="#">
                     <i class="uil  uil-cog"></i>
                        <span> Change Password </span>
                 </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
