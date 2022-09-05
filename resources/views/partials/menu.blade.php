<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list') }}">List</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="text" placeholder="Username">
                <input class="form-control me-2" type="password" placeholder="Password">
                <button class="btn btn-outline-success" type="submit">Add</button>
            </form>
        </div>
    </div>
</nav>
