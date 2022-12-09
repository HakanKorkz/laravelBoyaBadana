@extends("home.app")
@section("tittle")
    Hakkımızda
@endsection
@section("callNow")
    @include("home.components.call-now")
@endsection
@section("menus")
    <a href="/" class="nav-item nav-link ">Home</a>
    <a href="{{ route("about") }}" class="nav-item nav-link active">About</a>
    <a href="service.html" class="nav-item nav-link">Service</a>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
        <div class="dropdown-menu m-0">
            <a href="blog.html" class="dropdown-item">Blog Grid</a>
            <a href="detail.html" class="dropdown-item">Blog Detail</a>
            <a href="team.html" class="dropdown-item">The Team</a>
            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
        </div>
    </div>
    <a href="contact.html" class="nav-item nav-link">Contact</a>
@endsection
