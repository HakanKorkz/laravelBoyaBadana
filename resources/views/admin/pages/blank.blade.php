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
                        <h2>Stater Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("admin.home") }}"><i class="zmdi zmdi-home"></i>Anasayfa</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route("admin.blank") }}"><i class="zmdi zmdi-hc-fw"></i> Boş Sayfa</a></li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Stater</strong> page</h2>
                            </div>
                            <div class="body">
                                <h5>Stater page</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
