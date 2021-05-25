@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="datakapal-tab" data-toggle="tab" href="#datakapal" role="tab"
                                    aria-controls="datakapal" aria-selected="true">Data Kapal Berlayar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="menyandar-tab" data-toggle="tab" href="#menyandar" role="tab"
                                    aria-controls="menyandar" aria-selected="false">Data Kapal Bersandar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="awak-tab" data-toggle="tab" href="#awak" role="tab"
                                    aria-controls="awak" aria-selected="false">Data Seluruh Awak Kapal</a>
                            </li>
                        </ul>
                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="datakapal" role="tabpanel" aria-labelledby="datakapal-tab">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">{{ $title }}</h3><br><br><br>
                                        <a href="{{ route('datakapal.create') }}" class="btn btn-info">Tambah Kapal</a>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-collapse"><span
                                                        class="fa fa-angle-down"></span></a></li>
                                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a>
                                            </li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('datakapal.pulang') }}" method="POST">
                                        @csrf
                                        <div class="panel-body">
                                            <div class="row">

                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Nama Kapal</th>
                                                            <th>Jenis Kapal</th>
                                                            <th>Bendera Kapal</th>
                                                            <th>Tanggal Pemberangkatan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @foreach ($pemberangkatan as $pemb)

                                                            <tr>
                                                                {{ $no++ }}
                                                                <td>{{ $pemb->kapal->nama_kapal }}</td>
                                                                <td>{{ $pemb->kapal->jenis }}</td>
                                                                <td>{{ $pemb->kapal->bendera }}</td>
                                                                <td>{{ $pemb->tanggal_pemberangkatan }}</td>

                                                                <td>
                                                                    <a href="{{ route('seluruhkapal.show', $pemb->id) }}"
                                                                        class="btn btn-info"> Lihat Penumpang</a>
                                                                </td>
                                                                <td>
                                                                    <div class="glyphicon glyphicon-eye-open"> <input
                                                                            type="checkbox" value="{{ $pemb->id }}"
                                                                            name="dipilih[]" style="text-align: center">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="panel-footer">
                                                <button type="submit" class="btn btn-success pull-right">Pulangkan </button>
                                            </div>
                                    </form>
                                </div>
                            </diV>
                        </div>
                        <div class="tab-pane" id="menyandar" role="tabpanel" aria-labelledby="menyandar-tab">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $title }}</h3><br><br><br>
                                    <a href="{{ route('datakapal.create') }}" class="btn btn-info">Tambah Kapal</a>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                                        </li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
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

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($kapal as $kap)

                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $kap->nama_kapal }}</td>
                                                        <td>{{ $kap->jenis }}</td>
                                                        <td>{{ $kap->bendera }}</td>
                                                        <td>{{ $kap->status }}</td>



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
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $awak }}</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                                        </li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama Awak</th>
                                                <th>Nama Kapal</th>
                                                <th>Bendera Kapal</th>
                                                <th>Tanggal Pemberangkatan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($seluruhawak as $awak)

                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $awak->biodata->nama_lengkap }}</td>
                                                    <td>{{ $awak->kapal->nama_kapal }}</td>
                                                    <td>{{ $awak->kapal->bendera }}</td>
                                                    <td>{{ $awak->tanggal_pemberangkatan }}</td>


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
