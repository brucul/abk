@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <!-- START PRIMARY PANEL -->
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">Tambah {{$sub_title}}</h3>
            </div>
            <form action="{{ route('keluarga.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <input type="hidden" name="id_biodata" value="{{$id_biodata}}">
                    <div class="form-group row">
                        <label class="col-md-2 ">Hubungan Keluarga</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hubungan" placeholder="ibu/ayah" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Nama Lengkap</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama_lengkap_saudara" placeholder="Nama Lengkap" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Usia</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="usia" placeholder="Usia" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Pendidikan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 ">Pekerjaan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Nomor HP</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="no_hp" placeholder="No HP" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Urutan Keluarga</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="urutan_keluarga" placeholder="Urutan Keluarga" required/>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</button>
                </div>
            </form>
        </div>
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">{{$sub_title}}</h3>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Hubungan</th>
                            <th>Nama Lengkap</th>
                            <th>Usia</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>No. HP</th>
                            <th>Urutan Keluarga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($keluarga as $k)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $k->hubungan }}</td>
                                <td>{{ $k->nama_lengkap }}</td>
                                <td>{{ $k->usia }}</td>
                                <td>{{ $k->pendidikan }}</td>
                                <td>{{ $k->pekerjaan }}</td>
                                <td>{{ $k->no_hp }}</td>
                                <td>{{ $k->urutan_keluarga }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('keluarga.edit', $k->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                    <button type="button" data-id="{{ $k->id }}" data-name="{{ $k->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteKeluarga"><i class="fa fa-times"></i> Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                      
        </div>
        <!-- END PRIMARY PANEL -->
    </div>
</section>
{{-- Modal Delete --}}
<div class="modal modal-default fade" id="deleteKeluarga">
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
                <button type="submit" class="btn btn-danger delete_keluarga"><i class="fa fa-trash"></i> Hapus Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection