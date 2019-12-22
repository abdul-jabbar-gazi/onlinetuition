<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a href="index.html" class="navbar-brand text-warning">&nbsp;&nbsp;
    <i class="fab fa-apple " ></i>  Online Tution</a>
    <button class="navbar-toggler " data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fas fa-chart-bar"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fas fa-list-ul"></i> Posts</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
        <i class="fas fa-network-wired"></i> Categories</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fas fa-users"></i> Users</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <div class="dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
            <i class="fas fa-id-badge"></i> Online Tution</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Settings</a>
            <a href="#" class="dropdown-item">Change Themes</a>
            <a href="#" class="dropdown-item">About us</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
      </li>



      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </ul>
  </div>
</nav>
