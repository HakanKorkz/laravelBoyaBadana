@extends("admin.app")
@section("tittle")
    {{ $tittle }}
@endsection
@section("content")
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="post">
                        @csrf

                        <div class="header">
                            <img class="logo" src="{{ asset("assets/admin/images/") }}/logo.svg" alt="">
                            <h5>Giriş yap</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="userNameOrEmail" id="userNameOrEmail"
                                       placeholder="Kullanıcı Adı/E-posta Giriniz" aria-label="" autofocus>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="Şifreniz" aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="forgot-password.html" class="forgot"
                                                                      title="Forgot Password"><i
                                                class="zmdi zmdi-lock"></i></a></span>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox">
                                <label for="remember_me">Beni Hatırla</label>
                            </div>
                            <button href="index.html" class="btn btn-primary btn-block waves-effect waves-light">Giriş
                                Yap
                            </button>
                            @if(false)
                                <div class="signin_with mt-3">
                                    <p class="mb-0">or Sign Up using</p>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i
                                            class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i
                                            class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i
                                            class="zmdi zmdi-google-plus"></i></button>
                                </div>
                            @endif
                        </div>
                    </form>
                    <div class="copyright text-center">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        ,
                        <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="{{ asset("assets/admin/images/") }}/signin.svg" alt="Sign In"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("customJs")
    <script>
        window.addEventListener("load",()=>{
            setTimeout(()=>{
               document.getElementsByClassName("page-loader-wrapper")[0].style.display="none"
            },100)
        })
    </script>
@endsection
