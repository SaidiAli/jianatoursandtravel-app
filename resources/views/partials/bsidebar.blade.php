<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="/backend/assets/images/placeholder.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu"/>
        <img src="/backend/assets/images/placeholder.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu"/>
        <div class="media-body">
            @auth
                <h6 class="pro-user-name mt-0 mb-0">{{auth()->user()->name}}</h6>
                <p>{{auth()->user()->email}}</p>
            @endauth
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{route('profile')}}">
                        <i data-feather="user"></i>
                        <span> My Profile </span>
                    </a>
                </li>
                <li>
                <a href="#">
                     <i class="uil  uil-cog"></i>
                        <span> Settings </span>
                 </a>
                </li>
                <li>
                    <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
