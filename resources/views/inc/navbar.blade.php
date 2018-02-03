<nav class="navbar navbar-fix navbar-default"
    style="background-color:#1393A9; height: 80px; border-bottom:3px solid #0d0244; padding-bottom:10px;">
    <div class="container-fluid">
        <div class="navbar-header">
                
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top: 4vh">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img style="margin-top: -1.5vh; width:100px ; height:78px;" src="{{url('img/logo.svg')}}" class="img-responsive">
            </a>
        </div>
                
        <div  style="background-color: #272727 ; position:relative;  opacity: 0.75; z-index: 50;"
            class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul  class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    {{--  <li style="margin-top:7vh;">
                        <a style="font-family: 'Exo 2', sans-serif; color: #067E9A; font-variant: small-caps;
                        font-size: 3vmin;font-weight: bold" class="ex1" href="{{ route('login') }}">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> 
                        <strong>SignIn</strong>
                        </a>
                    </li>  --}}
                    {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
                @else
                    <li style="margin-top:3vh;">
                        <h4> <a class="nav_link" href="{{ route('createShow') }}" role="button" aria-expanded="false">
                            ADD BOOK
                        </a></h4>
                    </li>

                    <li  class="dropdown" style="margin-top:1vh;">
                                <a id="nav_linkid" href="#"
                                class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <h4> {{ Auth::user()->name }} <span class="caret"></span></h4>
                                </a>
        
                                <ul class="dropdown-menu" role="menu">
                                    <li >
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
                