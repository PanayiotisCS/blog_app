<aside class="sidebar-container position-fixed">
  <div class="brand-header">
    <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-arrow-left-c icon-lg"></em></div><a class="brand-header-logo" href="#">
      <!-- Logo Imageimg(src="img/logo.png", alt="logo")
      <span class="brand-header-logo-text">Dasha</span></a>-->
  </div>
  <div class="sidebar-content">
    <div class="sidebar-toolbar">
      <div class="sidebar-toolbar-background"></div>
      <div class="sidebar-toolbar-content text-center"><a href="#"><img class="rounded-circle thumb64 m-auto" src="{{asset('img/user/01.jpg')}}" alt="Profile"></a>
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
        <li><a href="#"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-person"></em></span><span>Profile</span></a></li>
        
        <li class="fixed-bottom"><a href="#"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-log-out icon-md"></em></span><span>Log out</span></a></li>
      </ul>
    </nav>
  </div>
</aside>