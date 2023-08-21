<nav
    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top shadow-sm"
    data-aos="fade-down"
>
    <div class="container">
    <a href="/index.html" class="navbar-brand">
        <img src="/images/logo.svg" alt="logo" />
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category') }}" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Rewards</a>
            </li>
        @guest
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Sing Up</a>
            </li>
            <li class="nav-item">
                <a
                href="{{ route('login') }}"
                class="btn btn-success nav-link px-4 text-white"
                >Sign In</a
                >
            </li>
        @endguest
        </ul>
        @auth
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-2">
                <img src="images/icon-cart-empty.svg" alt="" />
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                Hi, {{ Auth::user()->name }}
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle ml-2 profile-picture"
                />
              </a>
              <div class="dropdown-menu">
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dashboard-account') }}" class="dropdown-item"
                  >Setting</a
                >
                <div href="" class="dropdown-divider"></div>
                {{-- <a href="/index.html" class="dropdown-item">Logout</a> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="dropdown-item">
                        Logout
                    </a>
                </form>
              </div>
            </li>
        </ul>
        <!-- Mobile -->
        <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
                <a href="#" class="nav-link">Cart</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard-account') }}" class="nav-link d-inline-block">Hi, {{ Auth::user()->name }}</a>
            </li>
        </ul>
        <!-- End Mobile -->
        @endauth
    </div>
    </div>
</nav>