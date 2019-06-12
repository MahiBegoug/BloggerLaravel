<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="#">{{config('app.name','LSAPP')}}</a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>-->

        <!-- Collapsed Hamburger -->


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                 <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="/services">Services</a>
            </li>

             <li class="nav-item">
                <a class="nav-link " href="/posts">Blog</a>
            </li>
        </ul>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>




        <!-- Right Side Of Navbar -->
            <ul class=" nav navbar-nav navbar-right ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guest())
                            <li class="nav-item" ><a class="nav-link "  href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item" ><a class="nav-link "   href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown" >
                    <a id="#" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" >
                         <li><a href="/home">dashboard</a></li>
                        <li>
                        <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                             Logout
                        </a>

                    <form id="logout-form" action="{{'App\Admin'== Auth::getProvider()->getModel() ? route('admin.logout'):route('logout')}}" method="POST" style="display: none;">
                        {{csrf_field()}}
                 </form>
                </li>
              </ul>
            </li>
            @endif
           </ul>
        </div>
    </div>
</nav>




