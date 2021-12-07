<header class="header-container">
    <nav>
        <ul class="d-lg-none">
        <li><a class="sidebar-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <ul class="d-none d-sm-block">
        <li><a class="covermode-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <h2 class="header-title">Blog Site</h2>
        <ul class="float-right mt-3">
        <li class="dropdown"><a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><img class="header-user-image" src="{{asset('img/user/01.jpg')}}" alt="header-user-image"></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-scale">
            <h6 class="dropdown-header">User menu</h6><a class="dropdown-item" href="#"><em class="ion-ios-email-outline icon-lg text-primary"></em>Messages</a><a class="dropdown-item" href="#"><em class="ion-ios-gear-outline icon-lg text-primary"></em>Settings</a>
            <div class="dropdown-divider" role="presentation"></div>
            {{-- Fix log out position --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <em class="ion-log-out icon-lg text-primary"></em>
                        Log Out
                    </a>
                </form>
            </div>
        </li>
        </ul>
    </nav>
</header>