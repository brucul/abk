@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab"
                        aria-controls="daftar" aria-selected="true">Pengalaman Berlayar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pengalaman-tab" data-toggle="tab" href="#pengalaman" role="tab"
                        aria-controls="pengalaman" aria-selected="false">Informasi Tambahan</a>
                    </li>
                </ul>
                <div class="panel-body tab-content" id="myTabContent">
                    <div class="tab-pane active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                        <!-- START PRIMARY PANEL -->
                        <div class="panel panel-primary">

                            <div class="panel-heading">
                                <h3 class="panel-title">Tambah {{$sub_title}}</h3>
                            </div>
                            <form action="{{ route('pengalaman.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="panel-body">
                                    <input type="hidden" name="id_biodata" value="{{$id_biodata}}">
                                    <div class="form-group row">
                                        <label class="col-md-2">Nama Perusahaan</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="nama_perusahaan"
                                            placeholder="Nama Perusahaan" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Nama Kapal</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="nama_kapal"
                                            placeholder="Nama Kapal" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Tipe Kapal</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="tipe_kapal"
                                            placeholder="Tipe Kapal" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Bendera</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="bendera"
                                            placeholder="Bendera" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Jabatan</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="jabatan"
                                            placeholder="jabatan" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Mulai</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control datepicker" name="mulai"
                                            placeholder="Mulai" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Sampai</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control datepicker" name="sampai"
                                            placeholder="sampai" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Alasan Berhenti</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="alasan_berhenti"
                                            placeholder="Alasan Berhenti" />
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
                                            <th>Nama Perusahaan</th>
                                            <th>Jabatan</th>
                                            <th>Mulai</th>
                                            <th>Sampai</th>
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
                                            <td>{{ $p->nama_perusahaan }}</td>
                                            <td>{{ $p->jabatan }}</td>
                                            <td>{{ $p->mulai }}</td>
                                            <td>{{ $p->sampai }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('pengalaman.edit', $p->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                <button type="button" data-id="{{ $p->id }}" data-name="{{ $p->nama_perusahaan }}" class="btn btn-danger" data-toggle="modal" data-target="#deletePengalaman"><i class="fa fa-times"></i> Hapus</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                      
                        </div>
                        <!-- END PRIMARY PANEL -->
                    </div>
                    <div class="tab-pane " id="pengalaman" role="tabpanel" aria-labelledby="pengalaman-tab">
                        <!-- START PRIMARY PANEL -->
                        <div class="panel panel-primary">
                            <form action="{{ route('informasi.update', $biodata->informasi->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="panel-body">
                                    <input type="hidden" name="id_biodata" value="{{$id_biodata}}">
                                    <div class="form-group row">
                                        <label class="col-md-12">Apakah anda pernah dirawat di rumah sakit disebabkan kecelakaan atau penyakit kritis?</label>
                                        <div class="row col-md-12">
                                            <div class="col-md-2">
                                                <label class="check"><input type="radio" id="sakit" class="" name="q1" value="ya" onclick="show_sakit();" {{ $biodata->informasi->q1 == 'ya' ? "checked" : "" }}/> Ya</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="check"><input type="radio" id="tidak_sakit" class="" name="q1" value="tidak" onclick="hide_sakit();" {{ $biodata->informasi->q1 == 'tidak' ? "checked" : "" }} /> Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="penyakit" style="display: {{ $biodata->informasi->q1 == 'ya' ? "block" : "none" }};">
                                        <div class="form-group row">
                                            @foreach($penyakit as $p)
                                            {{--<form>--}}
                                                <div class="form-group row">
                                                    <input type="hidden" name="id_penyakit[]" value="{{ $p->id }}">
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="tahun[]" placeholder="Tahun/Bulan" value="{{ $p->tahun }}"/>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="penyakit[]" placeholder="Jenis Penyakit/Tindakan" value="{{ $p->jenis_penyakit }}"/>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="status_akhir[]" placeholder="Status Akhir" value="{{ $p->status_akhir }}"/>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="keterangan[]" placeholder="Keterangan" value="{{ $p->keterangan }}" />
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button type="button" data-id="{{ $p->id }}" data-name="{{ $p->jenis_penyakit }}" class="btn btn-danger" data-toggle="modal" data-target="#deletePenyakit"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            {{--</form>--}}
                                            @endforeach
                                        </div>
                                        <div class="form-group row">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <input type="button" class="btn btn-primary" value="Tambah" id="addSakit" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row"><br>
                                        <label class="col-md-12">Jika pembayaran upah dikirim melalui bank, pakah anda setuju?</label>
                                        <div class="row col-md-12">
                                            <div class="col-md-2">
                                                <label class="check"><input type="radio" id="iya_bank" class="" name="q2" value="ya" onclick="show_bank();" {{ $biodata->informasi->q2 != 'tidak' ? "checked" : "" }}/> Ya</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="check"><input type="radio" id="tidak_bank" class="" name="q2" value="tidak" onclick="hide_bank();" {{ $biodata->informasi->q2 == 'tidak' ? "checked" : "" }}/> Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="bank" style="display: {{ $biodata->informasi->q1 == 'ya' ? "block" : "none" }};">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="bank" placeholder="Bank" value="{{ $biodata->informasi->q2 }}" />
                                        </div>
                                        {{--<div class="col-md-3">
                                            <input type="text" class="form-control" name="rekening"
                                            placeholder="Nomor Rekening" />
                                        </div>--}}
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Kapan anda siap mulai bekerja?</label>
                                        <label class="col-md-3">Berapa gaji yang anda harapkan?</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control datepicker" value="{{$biodata->informasi->q3}}" name="q3">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="q4"
                                            placeholder="Gaji" value="{{$biodata->informasi->q4}}"/>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-12">Darimana anda mendapat informasi mengenai lowongan kerja ini?</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="q5" value="{{$biodata->informasi->q5}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Apakah anda pernah melamar kesini sebelumnya, jika pernah sebutkan posisi dan waktunya</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="posisi_sebelumnya"
                                            placeholder="Posisi" value="{{substr($biodata->informasi->q6, 13)}}" />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control datepicker" value="{{substr($biodata->informasi->q6, 0,10)}}" name="tgl">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12">Ceritakan tentang diri anda yang mungkin akan membantu penilaian kami terhadap anda</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="q7">{{$biodata->informasi->q7}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- END PRIMARY PANEL -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Modal Delete --}}
<div class="modal modal-default fade" id="deletePengalaman">
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
                <button type="submit" class="btn btn-danger delete_pengalaman"><i class="fa fa-trash"></i> Hapus Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
{{-- Modal Delete --}}
<div class="modal modal-default fade" id="deletePenyakit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="deleteUser">Delete User</h3>
            </div>
            <div class="modal-body">
                <h5 id="text-delete-penyakit"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger delete_penyakit"><i class="fa fa-trash"></i> Hapus Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript">
    function hide_bank(){
        document.getElementById('bank').style.display = 'none';
    }
    function show_bank(){
        document.getElementById('bank').style.display = 'block';
    }
    function hide_sakit(){
        document.getElementById('penyakit').style.display = 'none';
    }
    function show_sakit(){
        document.getElementById('penyakit').style.display = 'block';
    }
</script>
@endsection