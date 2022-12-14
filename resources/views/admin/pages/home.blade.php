@extends("admin.app")
@section("tittle")
    {{ $tittle }}
@endsection
@section("content")
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Anasayfa Sayfası</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("admin.home") }}"><i class="zmdi zmdi-home"></i>Anasayfa</a></li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body">
                                <h6>Toplam Erişim</h6>
                                <h2 class="text-center">0</h2>
                                <div class="progress">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
