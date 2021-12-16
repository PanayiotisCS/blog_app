<aside class="sidebar-container position-fixed">
  <div class="brand-header">
    <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-arrow-left-c icon-lg"></em></div><a class="brand-header-logo" href="#">
  </div>
  <div class="sidebar-content">
    <div class="sidebar-toolbar">
      <div class="sidebar-toolbar-background"></div>
      <div class="sidebar-toolbar-content text-center">
        <a href="{{ route('profile.show',['profile' => auth()->user()->profile]) }}">
        @if (auth()->user()->profile->profile_path == null)
          <span class="nav-icon"><em class="ion-person"></em></span><span>Profile</span>
        @else
          <img class="rounded-circle thumb64 m-auto" src="{{asset(auth()->user()->profile->profile_path)}}" alt="Profile"></a>
        @endif
        <div class="mt-3">
          <div class="lead">{{ Auth::user()->name}}</div>
        </div>
      </div>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li>
          <div class="sidebar-nav-heading">MENU</div>
        </li>
        @if (Auth::user()->type == 1)
          <li><a href="{{ route('dashboard')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-speedometer-outline"></em></span><span>Dashboard</span></a></li>
        @endif
        <li><a href="{{ route('posts.index') }}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-clipboard"></em></span><span>Posts</span></a></li>
        <li><a href="{{ route('profile.show',['profile' => auth()->user()->profile->id]) }}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-person"></em></span><span>Profile</span></a></li>
        
        <li class="fixed-bottom">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="btn" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                  <span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-log-out icon-md"></em></span>
                  <span>Log Out</span>
              </a>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>