@extends('main')
@section('content')
<section class="content" >
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                {{--  <form class="form-horizontal" role="form" action="{{route('seluruhkapal.store')}}" method="POST" enctype="multipart/form-data">  --}}
                    {{--  @csrf  --}}
                    {{--  @method('PATCH')  --}}

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="true">Seluruh Pendaftar</a>
                            </li>

                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{$sub_title}}</h3><br><br><br>
                                            {{--  <a href="{{route('pendaftaran.index')}}" class="btn btn-info">Daftar Baru</a>  
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul> --}}
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kebangsaan</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor HP</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($semua_data_pendaftar_normal as $pendaftar)


                                                    <tr>
                                                        <td>{{$pendaftar->nama_lengkap}}</td>
                                                        <td>{{$pendaftar->kebangsaan}}</td>
                                                        <td>{{$pendaftar->alamat}}</td>
                                                        <td>{{$pendaftar->no_hp}}</td>
                                                        <td>{{$pendaftar->email}}</td>
                                                        <td>{{$pendaftar->status}}</td>
                                                        <td>
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
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>

                        </div>

                    </div>
                {{--  </form>  --}}
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function change()
        {
            var x = document.getElementById('pass').type;

            if (x == 'password')
            {
                document.getElementById('pass').type = 'text';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
            }
            else
            {
                document.getElementById('pass').type = 'password';
                document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
            }
        }
</script>
@endsection
