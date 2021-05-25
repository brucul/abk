@extends('main')
@section('content')
    <section class="content">
        <!-- START WIDGETS -->
        <div class="row">
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{ $datapen }}</div>
                        <div class="widget-title">Jumlah Pendaftar</div>
                        <div class="widget-subtitle">Masuk</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-anchor"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{ $berang }}</div>
                        <div class="widget-title">Data ABK Di Atas Kapal</div>
                        <div class="widget-subtitle">Masuk</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-ship"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{ $kapalada }}</div>
                        <div class="widget-title">Data Kapal</div>
                        <div class="widget-subtitle">Seluruh</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
        </div>
        <!-- END WIDGETS -->

    </section>
@endsection
