<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route("admin.home") }}"><img src="{{ asset("assets/admin") }}/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset("assets/admin") }}/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin </small>
                    </div>
                </div>
            </li>
            <li {{ request()->routeIs("admin.home") ?  "class=active" : "" }} ><a href="{{ route("admin.home") }}"><i class="zmdi zmdi-home"></i><span>Anasayfa</span></a></li>
            <li {{ request()->routeIs("admin.blank") ?  "class=active" : "" }} ><a href="{{ route("admin.blank") }}"><i class="zmdi zmdi-hc-fw"></i><span>Boş sayfa</span></a></li>

        </ul>
    </div>
</aside>
