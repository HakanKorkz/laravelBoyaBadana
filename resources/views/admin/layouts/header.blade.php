

<!-- Page Loader -->
@include("admin.components.page-loader")
<!-- Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
@if(!in_array(Route::currentRouteName(),["login","register"]))
<!-- Main Search -->
@include("admin.components.search")
<!-- Main Search -->
<!-- Right Icon menu Sidebar -->
@include("admin.components.navbar-right")
<!-- Right Icon menu Sidebar -->
<!-- Left Sidebar -->
@include("admin.components.left-sidebar")
<!-- Left Sidebar -->
<!-- Right Sidebar -->
@include("admin.components.right-sidebar")
<!-- Right Sidebar -->
@endif
