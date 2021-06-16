@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <!-- START PRIMARY PANEL -->
        <div class="panel panel-primary">
            <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{ route('pendaftaran.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="panel-heading">
                    <h3 class="panel-title">{{$sub_title}}</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Posisi</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="posisi"
                                placeholder="masukan posisi" value="{{$biodata->posisi}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama_lengkap"
                                placeholder="masukan nama lengkap" value="{{$biodata->nama_lengkap}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Panggilan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama_panggilan"
                                placeholder="masukan nama panggilan" value="{{$biodata->nama_panggilan}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <div class="col-md-4">
                                    <label class="check"><input type="radio" class="iradio" name="jk" value="laki-laki" {{ $biodata->jenis_kelamin == 'laki-laki' ? "checked" : "" }} /> laki-laki</label>
                                </div>
                                <div class="col-md-4">
                                    <label class="check"><input type="radio" class="iradio" name="jk" value="perempuan" {{ $biodata->jenis_kelamin == 'perempuan' ? "checked" : "" }} />
                                    perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control datepicker" value="{{$biodata->tanggal_lahir}}" name="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status Pernikahan</label>
                            <div class="col-md-9">
                                <div class="col-md-6">
                                    <label class="check"><input type="radio" class="iradio" name="status_pernikahan" value="sudah" {{ $biodata->status_pernikahan == 'sudah' ? "checked" : "" }} /> Sudah
                                    Menikah</label>
                                </div>
                                <div class="col-md-6">
                                    <label class="check"><input type="radio" class="iradio" name="status_pernikahan" checked="checked" value="belum" {{ $biodata->status_pernikahan == 'belum' ? "checked" : "" }} /> Belum Menikah</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Kebangsaan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="kebangsaan"
                                placeholder="masukan kebangsaan" value="{{ $biodata->kebangsaan }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Agama</label>
                            <div class="col-md-9">
                                <select class="form-control select" name="agama">
                                    <option {{ $biodata->agama == 'Islam' ? "selected" : "" }}>Islam</option>
                                    <option {{ $biodata->agama == 'Kristen' ? "selected" : "" }}>Kristen</option>
                                    <option {{ $biodata->agama == 'Hindu' ? "selected" : "" }}>Hindu</option>
                                    <option {{ $biodata->agama == 'Budha' ? "selected" : "" }}>Budha</option>
                                    <option {{ $biodata->agama == 'Khatolik' ? "selected" : "" }}>Khatolik</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No KTP/SIM</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="ktp_sim"
                                placeholder="masukan no ktp/sim" value="{{ $biodata->no_ktp }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tinggi Badan</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="tinggi_badan"
                                placeholder="masukan tinggi badan /cm" value="{{ $biodata->tinggi_badan }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Berat Badan</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="berat_badan"
                                placeholder="masukan berat badan /kg" value="{{ $biodata->berat_badan }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Warna Mata</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="warna_mata"
                                placeholder="masukan warna mata" value="{{ $biodata->warna_mata }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Warna Rambut</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="warna_rambut"
                                placeholder="masukan warna rambut" value="{{ $biodata->warna_rambut }}" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Bentuk Wajah</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bentuk_wajah"
                                placeholder="masukan bentuk wajah" value="{{ $biodata->bentuk_wajah }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ciri Fisik Lain</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ciri_lain"
                                placeholder="masukan ciri fisik lainnya" value="{{ $biodata->ciri_lain }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alamat</label>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="4" name="alamat"
                                placeholder="masukan alamat lengkap" required>{{ $biodata->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No HP/Telepon</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="nohp"
                                placeholder="masukan no hp" value="{{ $biodata->no_hp }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No Telepon Darurat</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="telepon_darurat" placeholder="masukan no telepon darurat" value="{{ $biodata->telepon_darurat }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Jumlah Saudara
                            Kandung</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="saudara_kandung"
                                placeholder="masukan saudara kandung" value="{{ $biodata->saudara_kandung }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email"
                                placeholder="masukan email" value="{{ $biodata->email }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tinggal Bersama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tinggal_bersama"
                                placeholder=" masukan tinggal bersama" value="{{ $biodata->tinggal_bersama }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <label class="col-md-9">Bahasa</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Indonesia</label>
                            <div class="col-md-9">
                                <select class="form-control select" name="indo">
                                    <option {{ $biodata->indonesia == 'Sangat Baik' ? "selected" : "" }}>Sangat Baik</option>
                                    <option {{ $biodata->indonesia == 'Baik' ? "selected" : "" }}>Baik</option>
                                    <option {{ $biodata->indonesia == 'Cukup' ? "selected" : "" }}>Cukup</option>
                                    <option {{ $biodata->indonesia == 'Pasif' ? "selected" : "" }}>Pasif</option>
                                    <option {{ $biodata->indonesia == 'Tidak Bisa' ? "selected" : "" }}>Tidak Bisa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Inggris</label>
                            <div class="col-md-9">
                                <select class="form-control select" name="inggris">
                                    <option {{ $biodata->inggris == 'Sangat Baik' ? "selected" : "" }}>Sangat Baik</option>
                                    <option {{ $biodata->inggris == 'Baik' ? "selected" : "" }}>Baik</option>
                                    <option {{ $biodata->inggris == 'Cukup' ? "selected" : "" }}>Cukup</option>
                                    <option {{ $biodata->inggris == 'Pasif' ? "selected" : "" }}>Pasif</option>
                                    <option {{ $biodata->inggris == 'Tidak Bisa' ? "selected" : "" }}>Tidak Bisa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Spanyol</label>
                            <div class="col-md-9">
                                <select class="form-control select" name="spanyol">
                                    <option {{ $biodata->spanyol == 'Sangat Baik' ? "selected" : "" }}>Sangat Baik</option>
                                    <option {{ $biodata->spanyol == 'Baik' ? "selected" : "" }}>Baik</option>
                                    <option {{ $biodata->spanyol == 'Cukup' ? "selected" : "" }}>Cukup</option>
                                    <option {{ $biodata->spanyol == 'Pasif' ? "selected" : "" }}>Pasif</option>
                                    <option {{ $biodata->spanyol == 'Tidak Bisa' ? "selected" : "" }}>Tidak Bisa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mandarin</label>
                            <div class="col-md-9">
                                <select class="form-control select" name="mandarin">
                                    <option {{ $biodata->mandarin == 'Sangat Baik' ? "selected" : "" }}>Sangat Baik</option>
                                    <option {{ $biodata->mandarin == 'Baik' ? "selected" : "" }}>Baik</option>
                                    <option {{ $biodata->mandarin == 'Cukup' ? "selected" : "" }}>Cukup</option>
                                    <option {{ $biodata->mandarin == 'Pasif' ? "selected" : "" }}>Pasif</option>
                                    <option {{ $biodata->mandarin == 'Tidak Bisa' ? "selected" : "" }}>Tidak Bisa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default" onclick="javascript:history.go(-1)">Kembali</button>
                    <button type="Submit" class="btn btn-primary pull-right">Simpan</button>
                </div> 
            </form>                           
        </div>
        <!-- END PRIMARY PANEL -->
    </div>
</section>
@endsection