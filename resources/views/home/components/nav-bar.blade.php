<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="{{ route("home") }}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-paint-roller text-secondary me-3"></i>Painter</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="{{ route("home") }}" class="nav-item nav-link {{ request()->routeIs("home") ? "active" : "" }}">Home</a>
            <a href="{{ route("about") }}" class="nav-item nav-link {{ request()->routeIs("about") ? "active" : "" }}">About</a>
            <a href="{{ route("service") }}" class="nav-item nav-link {{ request()->routeIs("service") ? "active" : "" }}">Service</a>
            @if(false)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
            @endif
            <a href="{{ route("contact") }}" class="nav-item nav-link {{ request()->routeIs("contact") ? "active" : "" }}">Contact</a>

        </div>
        @yield("callNow")
    </div>
</nav>
