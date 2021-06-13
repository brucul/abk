@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" id="menyandar-tab" data-toggle="tab" href="#menyandar" role="tab"
                                    aria-controls="menyandar" aria-selected="true">Data ABK Diatas Kapal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="awak-tab" data-toggle="tab" href="#awak" role="tab"
                                    aria-controls="awak" aria-selected="false">Data ABK Pulang</a>
                            </li>
                        </ul>
                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="menyandar" role="tabpanel" aria-labelledby="menyandar-tab">
                                <div class="panel panel-default">
                                    {{--<div class="panel-heading">
                                        <h3 class="panel-title">{{ $title }}</h3>
                                    </div>--}}
                                    <div class="panel-body">
                                        <div class="row">

                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Kapal</th>
                                                        <th>Jenis Kapal</th>
                                                        <th>Bendera Kapal</th>
                                                        <th>Status</th>
                                                        <th>Tanggal Keberangkatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($abk_kapal as $kap)

                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $kap->kapal->nama_kapal }}</td>
                                                            <td>{{ $kap->kapal->jenis }}</td>
                                                            <td>{{ $kap->kapal->bendera }}</td>
                                                            <td>{{ $kap->kapal->status }}</td>
                                                            <td>{{ $kap->tanggal_pemberangkatan }}</td>
                                                            <td>
                                                                <a href="{{ route('seluruhkapal.show', $kap->id) }}" class="btn btn-info"> Lihat ABK</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </diV>
                            </div>
                            <div class="tab-pane " id="awak" role="tabpanel" aria-labelledby="awak-tab">
                                <div class="panel panel-default">
                                    {{--<div class="panel-heading">
                                        <h3 class="panel-title">{{ $awak }}</h3>
                                    </div>--}}
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Tanggal Pulang</th>
                                                    <th>Kebangsaan</th>
                                                    <th>Alamat</th>
                                                    <th>Nomor HP</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($abk_pulang as $awak)

                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $awak->nama_lengkap }}</td>
                                                        <td>{{ $awak->pulang }}</td>
                                                        <td>{{ $awak->kebangsaan }}</td>
                                                        <td>{{ $awak->alamat }}</td>
                                                        <td>{{ $awak->no_hp }}</td>
                                                        <td>{{ $awak->email }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script type="text/javascript">
        function change() {
            var x = document.getElementById('pass').type;

            if (x == 'password') {
                document.getElementById('pass').type = 'text';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            } else {
                document.getElementById('pass').type = 'password';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
        }

    </script>
@endsection
