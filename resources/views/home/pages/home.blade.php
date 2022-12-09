@extends("home.app")
@section("tittle")
    Anasayfa
@endsection
@section("callNow")
    @include("home.components.call-now")
@endsection
@section("menus")
    <a href="/" class="nav-item nav-link active">Home</a>
    <a href="{{ route("about") }}" class="nav-item nav-link">About</a>
    <a href="service.html" class="nav-item nav-link">Service</a>
    <a href="contact.html" class="nav-item nav-link">Contact</a>
@endsection
