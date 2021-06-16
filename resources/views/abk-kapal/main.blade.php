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
                                                                <a href="{{ route('seluruhkapal.show_abk', $kap->id) }}" class="btn btn-info"> Lihat ABK</a>
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
                                                    <th>Action</th>
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
                                                        <td>
                                                                {{--  Edit  --}}
                                                                <div class="btn-group">
                                                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-edit"></i> Edit <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="{{ route('seluruhkapal.edit', $awak->id) }}">Edit Biodata</a></li>
                                                                        <li><a href="{{ route('keluarga.show', $awak->id) }}">Edit Data Keluarga</a></li>
                                                                        <li><a href="{{ route('pengalaman.show', $awak->id) }}">Edit Data Pengalaman</a></li>
                                                                        <li><a href="{{ route('dokumen.edit', $awak->id) }}">Edit Data Dokumen</a></li>
                                                                    </ul>
                                                                </div>
                                                                <button type="button" data-id="{{ $awak->id }}" data-name="{{ $awak->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteBiodata"><i class="fa fa-times"></i> Hapus</button>
                                                                <a href="{{ route('print-biodata', $awak->id) }}" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                                            </td>
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
    {{-- Modal Delete --}}
<div class="modal modal-default fade" id="deleteBiodata">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="deleteUser">Delete User</h3>
            </div>
            <div class="modal-body">
                <h5 id="text-delete"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger delete_user"><i class="fa fa-trash"></i> Hapus Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
