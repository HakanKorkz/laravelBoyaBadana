<!-- Jquery Core Js -->
<script src="{{ asset("assets/admin") }}/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset("assets/admin") }}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
@if(!in_array(Route::currentRouteName(),["login","register"]))
<script src="{{ asset("assets/admin") }}/bundles/mainscripts.bundle.js"></script>
@endif
@yield("customJs")

