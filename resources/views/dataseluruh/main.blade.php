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
                                                        <th>Kebangsaan</th>
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
                                                    @foreach ($semua_data_pendaftar as $pendaftar)


                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td><a
                                                                    href={{ route('pendaftaran.show', $pendaftar->id) }}>{{ $pendaftar->nama_lengkap }}</a>
                                                            </td>
                                                            <td>{{ $pendaftar->kebangsaan }}</td>
                                                            <td>{{ $pendaftar->alamat }}</td>
                                                            <td>{{ $pendaftar->no_hp }}</td>
                                                            <td>{{ $pendaftar->email }}</td>
                                                            <td>
                                                                {{--  Edit  --}}
                                                                <a href="{{ route('seluruhkapal.edit', $pendaftar->id) }}" class="btn btn-success"><i class="fa fa-trash"></i> Edit</a>
                                                                <button type="button" data-id="{{ $pendaftar->id }}" data-name="{{ $pendaftar->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteUser"><i class="fa fa-trash"></i> Hapus</button>
                                                                <div class="">

                                                                    <input
                                                                        type="checkbox" name="dipilih[]"
                                                                        value="{{ $pendaftar->id }}"
                                                                        style="text-align: center">
                                                                </div>
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
                                                        <th>Nomor Hp</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($pengalaman as $p)

                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td><a
                                                                    href="{{ route('pengalaman.print', $p->id) }}">{{ $p->nama_lengkap }}</a>
                                                            </td>
                                                            <td>{{ $p->alamat }}</td>
                                                            <td>{{ $p->no_hp }}</td>
                                                            <td>{{ $p->email }}</td>
                                                            <td>{{ $p->alamat }}</td>

                                                            <td>
                                                                <div class="glyphicon glyphicon-eye-open"> <input
                                                                        type="checkbox" value="{{ $p->id }}"
                                                                        name="dipilih[]" style="text-align: center"></div>
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
                                                                <div class="glyphicon glyphicon-eye-open"> <input
                                                                        type="checkbox" value="{{ $p->id }}"
                                                                        name="dipilih[]" style="text-align: center"></div>
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
                            <div class="tab-pane " id="proses" role="tabpanel" aria-labelledby="proses-tab">
                                <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                    action="{{ route('seluruhkapal.store') }}" method="POST">
                                    @csrf
                                    <div class="panel panel-default">
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
                                                                <div class="glyphicon glyphicon-eye-open"> <input
                                                                        type="checkbox" value="{{ $pra->id }}"
                                                                        name="dipilih[]" style="text-align: center"></div>
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
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-1 control-label">Tanggal Pemberangkatan</label>
                                        <div class="col-md-2 col-xs-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-success pull-right">Tambahkan Ke Order
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
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $pemb->kapal->nama_kapal }}</td>
                                                        <td>{{ $pemb->kapal->jenis }}</td>
                                                        <td>{{ $pemb->kapal->bendera }}</td>
                                                        <td>{{ $pemb->tanggal_pemberangkatan }}</td>
                                                        <td>
                                                            <a href="{{ route('seluruhkapal.show', $pemb->id) }}"
                                                                class="btn btn-info"> Lihat Penumpang</a>
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
