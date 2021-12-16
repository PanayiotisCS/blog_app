@if(Auth::user()->type == 1)
    <header class="header-container">
    <nav>
        <ul class="d-lg-none">
        <li><a class="sidebar-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <ul class="d-none d-sm-block">
        <li><a class="covermode-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <h2 class="header-title"><a href="{{ route('posts.index') }}"><span class="nav-label">Blog Site</span></a></h2>
        <ul class="float-right mt-3">
        <li class="dropdown">
            @if (auth()->user()->profile->profile_path == null)
            <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><em class="ion-arrow-down-a"></em></a>
            @else
            <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><img class="header-user-image" src="{{asset(auth()->user()->profile->profile_path)}}" alt="header-user-image"></a>                
            @endif
            <div class="dropdown-menu dropdown-menu-right dropdown-scale">
            <h6 class="dropdown-header">User menu</h6><a class="dropdown-item" href="{{ route('profile.show',['profile' => auth()->user()->profile]) }}"><em class="ion-ios-person-outline icon-lg text-primary"></em>Profile</a>
            <div class="dropdown-divider" role="presentation"></div>
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
@else
    <header class="header-container ml-0">
    <nav>
        <h2 class="header-title"><a href="{{ route('posts.index') }}"><span class="nav-label">Blog Site</span></a></h2>
        <ul class="float-right mt-3">
        <li class="dropdown">
            @if (auth()->user()->profile->profile_path == null)
            <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><em class="ion-arrow-down-a"></em></a>
            @else
            <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><img class="header-user-image" src="{{asset(auth()->user()->profile->profile_path)}}" alt="header-user-image"></a>                
            @endif
            <div class="dropdown-menu dropdown-menu-right dropdown-scale">
            <h6 class="dropdown-header">User menu</h6><a class="dropdown-item" href="{{ route('profile.show',['profile' => auth()->user()->profile]) }}"><em class="ion-ios-person-outline icon-lg text-primary"></em>Profile</a>
            <div class="dropdown-divider" role="presentation"></div>
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
@endif
</header>