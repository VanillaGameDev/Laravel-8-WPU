<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
    <div class="container">
        <a class="navbar-brand">OxNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if($active == "home")
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ $active == "home" ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Home
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#home">Home</a></li>
                  <li><a class="dropdown-item" href="#profile">Profile</a></li>
                  <li><a class="dropdown-item" href="#about">About</a></li>
                  <li><a class="dropdown-item" href="#projects">Project</a></li>
                  <li><a class="dropdown-item" href="#parthner">Parthner Ship</a></li>
                  <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </li>
            @else

            <li class="nav-item">
                <a class="nav-link {{ $active == "home" ? 'active' : '' }} " href="/">Home</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link {{ $active == "posts" ? 'active' : '' }} " href="/posts">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active == "categories" ? 'active' : '' }} " href="/categories">Categories</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ Auth()->user()->name }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item" href="/dashboard" >
                    <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-left"></i> Logout</a></button>
                    </form>
                </li>
                </ul>
            </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ $active == "login" ? 'active' : '' }} ">
                        <i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
        </ul>


        </div>
    </div>
</nav>
