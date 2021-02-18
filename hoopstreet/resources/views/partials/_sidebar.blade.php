@inject('request', 'Illuminate\Http\Request')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src={{ asset('assets/images/faces/face1.jpg') }} alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
          <span class="text-secondary text-small"><small>{{auth()->user()->email}}</small></span>
        </div>
        <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
      </a>
    </li>
    @can('users_manage')
    <li class="nav-item">
      <a class="nav-link" class="{{ $request->segment(1) == 'home' ? 'active' : '' }}" href={{ route("admin.home") }}>
        <span class="menu-title">{{ trans('global.dashboard') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    @endcan
    @can('is_customer')
    <li class="nav-item">
      <a class="nav-link" class="{{ $request->segment(1) == 'home' ? 'active' : '' }}" href={{ route("customer.home") }}>
        <span class="menu-title">{{ trans('global.dashboard') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    @endcan
    @can('users_manage')
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">{{ trans('cruds.userManagement.title') }}</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route("admin.abilities.index") }}">{{ trans('cruds.ability.title') }}</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("admin.roles.index") }}">{{ trans('cruds.role.title') }}</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route("admin.users.index") }}" >{{ trans('cruds.user.title') }}</a></li>

        </ul>
      </div>
    </li>
    @endcan
    @can('is_customer')
    <li class="nav-item">
    <a class="nav-link" href="{{ route("customer.investment.index") }}">
        <span class="menu-title">Investments</span>
        <i class="mdi mdi-cash-usd menu-icon"></i>
      </a>
      
    </li>
    @endcan
    @can('users_manage')
     <li class="nav-item">
    <a class="nav-link" href="{{ route("admin.investment.index") }}">
        <span class="menu-title">Investments</span>
        <i class="mdi mdi-cash-usd menu-icon"></i>
      </a>
      
    </li>
    @endcan

     @can('users_manage')
     <li class="nav-item">
    <a class="nav-link" href="{{ route("admin.divident.index") }}">
        <span class="menu-title">Divident</span>
        <i class="mdi mdi-wallet menu-icon"></i>
      </a>
      
    </li>
    @endcan
    <li class="nav-item">
      <a class="nav-link" href="{{ route('auth.change_password') }}">
        <span class="menu-title">Change Password</span>
        <i class="mdi mdi-security menu-icon"></i>
      </a>
    </li>
    
    
    <li class="nav-item sidebar-actions">
      
        <button onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="btn btn-block btn-lg btn-gradient-primary mt-4">{{ trans('global.logout') }}</button>
        
     
    </li>
  </ul>
</nav>