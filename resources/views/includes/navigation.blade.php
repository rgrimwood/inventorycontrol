
    <div class="container">
        
        <!-- Logo Start-->
        <div class="navbar-logo">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'InventoryControl') }}
            </a> 
        </div>
        <!-- Logo Finish-->


        <!-- Search Box Start-->
        <div class="navbar-search">
            <form action="" method="GET" class="navbar-search__form">
                <div class="row">
                    <div class="co-lg-10">
                        <div class="form-group">
                            <input type="text" class="form-control" value=""
                            name="query" id="query"
                            placeholder="Search">
                            <button class="navbar-search__button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Search Box End-->


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars navbar-toggler-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path() === 'home' ? 'current_page_item' : '' }}">
                    <a href="/home" class="nav-link">Home</a>
                </li>


                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item {{ Request::path() === 'login' ? 'current_page_item' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item {{ Request::path() === 'register' ? 'current_page_item' : '' }}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                    <!-- These links are only displayed when a user is logged in -->
                @else
                    <li class="nav-item {{ Request::path() === 'inventory' ? 'current_page_item' : '' }}">
                        <a href="/inventory" class="nav-link">Inventory</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'employees' ? 'current_page_item' : '' }}">
                        <a href="/employees" class="nav-link">Employees</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                           
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="/account">{{ __('Account') }}</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            
                            
                            

                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
