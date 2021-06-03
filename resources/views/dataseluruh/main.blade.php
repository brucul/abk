@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    {{-- <form class="form-horizontal" role="form" action="{{route('seluruhkapal.store')}}" method="POST" enctype="multipart/form-data"> --}}
                    {{-- @csrf --}}
                    {{-- @method('PATCH') --}}

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab"
                                    aria-controls="daftar" aria-selected="true">Seluruh Pendaftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pengalaman-tab" data-toggle="tab" href="#pengalaman" role="tab"
                                    aria-controls="pengalaman" aria-selected="false">Pengalaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="non-tab" data-toggle="tab" href="#non" role="tab"
                                    aria-controls="non" aria-selected="false">Non Pengalaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="proses-tab" data-toggle="tab" href="#proses" role="tab"
                                    aria-controls="proses" aria-selected="false">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="selesai-tab" data-toggle="tab" href="#selesai" role="tab"
                                    aria-controls="selesai" aria-selected="false">Selesai Order</a>
                            </li>
                        </ul>
                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                                <div class="panel panel-default">
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('seluruhkapal.store') }}" method="POST">
                                        @csrf
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $sub_title }}</h3><br><br><br>
                                            <a href="{{ route('pendaftaran.index') }}" class="btn btn-info">Daftar
                                                Baru</a>
                                            <ul class="panel-controls">
                                                <li>
                                                    <a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="panel-remove"><span class="fa fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kebangsaan</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor HP</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                        <th>Order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($semua_data_pendaftar as $pendaftar)


                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $pendaftar->nama_lengkap }}</td>
                                                            <td>{{ $pendaftar->kebangsaan }}</td>
                                                            <td>{{ $pendaftar->alamat }}</td>
                                                            <td>{{ $pendaftar->no_hp }}</td>
                                                            <td>{{ $pendaftar->email }}</td>
                                                            <td>
                                                                {{--  Edit  --}}
                                                                <div class="btn-group">
                                                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-edit"></i> Edit <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="{{ route('seluruhkapal.edit', $pendaftar->id) }}">Edit Biodata</a></li>
                                                                        <li><a href="{{ route('keluarga.show', $pendaftar->id) }}">Edit Data Keluarga</a></li>
                                                                        <li><a href="{{ route('pengalaman.show', $pendaftar->id) }}">Edit Data Pengalaman</a></li>
                                                                        <li><a href="{{ route('dokumen.edit', $pendaftar->id) }}">Edit Data Dokumen</a></li>
                                                                    </ul>
                                                                </div>
                                                                <button type="button" data-id="{{ $pendaftar->id }}" data-name="{{ $pendaftar->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteBiodata"><i class="fa fa-times"></i> Hapus</button>
                                                                <a href="{{ route('print-biodata', $pendaftar->id) }}" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="dipilih[]" value="{{ $pendaftar->id }}" style="text-align: center"/>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success pull-right">Tambahkan Ke Order
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane " id="pengalaman" role="tabpanel" aria-labelledby="pengalaman-tab">
                                <div class="panel panel-default">
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('seluruhkapal.store') }}" method="POST">
                                        @csrf

                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $peng }}</h3>
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span
                                                            class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span
                                                            class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Alamat</th>
                                                        <th>Pengalaman</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>Aksi</th>
                                                        <th>Order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($pengalaman as $p)

                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $p->nama_lengkap }}</td>
                                                            <td>{{ $p->alamat }}</td>
                                                            <td>
                                                                @foreach ($p->pengalaman as $peng)
                                                                    -- {{$peng->nama_perusahaan}}<br>
                                                                @endforeach
                                                            </td>
                                                            <td>{{ $p->email }}</td>
                                                            <td>{{ $p->alamat }}</td>

                                                            <td>
                                                                {{--  Edit  --}}
                                                                <div class="btn-group">
                                                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-edit"></i> Edit <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="{{ route('seluruhkapal.edit', $p->id) }}">Edit Biodata</a></li>
                                                                        <li><a href="{{ route('keluarga.show', $p->id) }}">Edit Data Keluarga</a></li>
                                                                        <li><a href="{{ route('pengalaman.show', $p->id) }}">Edit Data Pengalaman</a></li>
                                                                        <li><a href="{{ route('dokumen.edit', $p->id) }}">Edit Data Dokumen</a></li>
                                                                    </ul>
                                                                </div>
                                                                <button type="button" data-id="{{ $p->id }}" data-name="{{ $p->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteBiodata"><i class="fa fa-times"></i> Hapus</button>
                                                                <a href="" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="dipilih[]" value="{{ $p->id }}" style="text-align: center"/>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success pull-right">Tambahkan Ke Order
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane " id="non" role="tabpanel" aria-labelledby="non-tab">
                                <div class="panel panel-default">
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('seluruhkapal.store') }}" method="POST">
                                        @csrf
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $nonpeng }}</h3>
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span
                                                            class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span
                                                            class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Kebangsaan</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor Hp</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                        <th>Order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($non as $p)

                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $p->nama_lengkap }}</td>
                                                            <td>{{ $p->kebangsaan }}</td>
                                                            <td>{{ $p->alamat }}</td>
                                                            <td>{{ $p->no_hp }}</td>
                                                            <td>{{ $p->email }}</td>
                                                            <td>
                                                                {{--  Edit  --}}
                                                                <div class="btn-group">
                                                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-edit"></i> Edit <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="{{ route('seluruhkapal.edit', $p->id) }}">Edit Biodata</a></li>
                                                                        <li><a href="{{ route('keluarga.show', $p->id) }}">Edit Data Keluarga</a></li>
                                                                        <li><a href="{{ route('pengalaman.show', $p->id) }}">Edit Data Pengalaman</a></li>
                                                                        <li><a href="{{ route('dokumen.edit', $p->id) }}">Edit Data Dokumen</a></li>
                                                                    </ul>
                                                                </div>
                                                                <button type="button" data-id="{{ $p->id }}" data-name="{{ $p->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteBiodata"><i class="fa fa-times"></i> Hapus</button>
                                                                <a href="" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="dipilih[]" value="{{ $p->id }}" style="text-align: center"/>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success pull-right">Tambahkan Ke Order
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane " id="proses" role="tabpanel" aria-labelledby="proses-tab">
                                <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                    action="{{ route('seluruhkapal.store') }}" method="POST">
                                    @csrf
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $title }}</h3>
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span
                                                            class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span
                                                            class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor HP</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($praproses as $pra)


                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $pra->nama_lengkap }}</td>
                                                            <td>{{ $pra->alamat }}</td>
                                                            <td>{{ $pra->no_hp }}</td>
                                                            <td>{{ $pra->email }}</td>
                                                            <td>
                                                                <input type="checkbox" value="{{ $pra->id }}" name="dipilih[]" style="text-align: center"/>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-1 control-label">Kapal</label>
                                        <div class="col-md-2 col-xs-6">
                                            <select class="form-control select" name="kapal">
                                                <option>-- Pilih Kapal --</option>
                                                @foreach ($kapal as $kapal)
                                                    <option value="{{ $kapal->id }}"> {{ $kapal->nama_kapal }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{route('datakapal.create')}}" class="btn btn-success">Tambah Kapal</a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-1 control-label">Rencana Pemberangkatan</label>
                                        <div class="col-md-2 col-xs-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-success pull-right">Proses Order
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane " id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">{{ $sub_title }}</h3><br>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-collapse"><span
                                                        class="fa fa-angle-down"></span></a></li>
                                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a>
                                            </li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Kapal</th>
                                                    <th>Jenis Kapal</th>
                                                    <th>Bendera Kapal</th>
                                                    <th>Rencana Pemberangkatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($pemberangkatan as $pemb)

                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $pemb->kapal->nama_kapal }}</td>
                                                        <td>{{ $pemb->kapal->jenis }}</td>
                                                        <td>{{ $pemb->kapal->bendera }}</td>
                                                        <td>{{ $pemb->rencana_pemberangkatan }}</td>
                                                        <td>
                                                            <a href="{{ route('seluruhkapal.show', $pemb->id) }}" class="btn btn-info"> Lihat Penumpang</a>
                                                            <a href="{{ route('seluruhkapal.berangkatkan', $pemb->id) }}" class="btn btn-info">Berangkatkan</a>
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
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </section>

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
