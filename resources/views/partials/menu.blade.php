<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!--<li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="{{ route('login') }}">Login</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list') }}">List</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Log out</a>
                </li>-->
            </ul>

            <span class="navbar-text me-2 alert-text">
                Navbar text with an inline element
            </span>

            @if(Request::path() === 'list')
                <form method="POST" id="list_form" class="d-flex" role="search">
                    @csrf
                    <input class="form-control me-2" id="name" type="text" name="name" placeholder="Username">
                    <input class="form-control me-2" id="password" type="password" name="password" placeholder="Password">
                    <input class="btn btn-outline-success" type="button" value="Add">
                </form>
            @endif
        </div>
    </div>
</nav>

