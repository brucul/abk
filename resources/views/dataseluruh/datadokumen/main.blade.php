@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default ">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                        action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="panel-body">

                            <!-- START WIZARD WITH SUBMIT BUTTON -->
                            <div class="block">
                                <form action="javascript:alert('Submited!');" role="form" class="form-horizontal">
                                    <div class=" wizard show-submit">
                                        <ul>
                                            <li>
                                                <a href="#step-5">
                                                    <span class="stepNumber">1</span>
                                                    <span class="stepDesc">Biodata<br /><small>Biodata Calon
                                                            Abk</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-6">
                                                    <span class="stepNumber">2</span>
                                                    <span class="stepDesc">Data Keluarga<br /><small>Data Keluarga
                                                            Abk</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-7">
                                                    <span class="stepNumber">3</span>
                                                    <span class="stepDesc">Pengalaman<br /><small>Pengalaman Berlayar
                                                            Abk</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-8">
                                                    <span class="stepNumber">4</span>
                                                    <span class="stepDesc">Dokumen<br /><small>Dokumen Calon
                                                            Abk</small></span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div id="step-5">

                                            <h4>
                                                <center> --Masukan Biodata Calon ABK--</center>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Nama Lengkap</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" value="{{$biodatass->nama_lengkap}}" name="nama_lengkap"
                                                                placeholder="masukan nama lengkap" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Nama Panggilan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->nama_panggilan}}" name="nama_panggilan"
                                                                placeholder="masukan nama panggilan" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Jenis Kelamin</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-4">
                                                                <label class="check"><input type="radio"  value="{{$biodatass->jenis_kelamin}}" class="iradio"
                                                                        name="jk" value="laki-laki" /> laki-laki</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="check"><input type="radio"  value="{{$biodatass->jenis_kelamin}}" class="iradio"
                                                                        name="jk" checked="checked" value="perempuan" />
                                                                    perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tanggal Lahir</label>
                                                        <div class="col-md-9">

                                                            <input type="text" value="{{$biodatass->tanggal_lahir}}" class="form-control datepicker"
                                                                value="2021-01-01" name="tanggal_lahir">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Status Pernikahan</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-6">
                                                                <label class="check"><input type="radio"  value="{{$biodatass->status_pernikahan}}" class="iradio"
                                                                        name="status_pernikahan" value="laki-sudah" /> Sudah
                                                                    Menikah</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="check"><input type="radio"  value="{{$biodatass->status_pernikahan}}" class="iradio"
                                                                        name="status_pernikahan" checked="checked"
                                                                        value="belum" /> Belum Menikah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Kebangsaan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->kebangsaan}}" name="kebangsaan"
                                                                placeholder="masukan kebangsaan" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Agama</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select"   value="{{$biodatass->agama}}" name="agama">
                                                                <option>Islam</option>
                                                                <option>Kristen</option>
                                                                <option>Hindu</option>
                                                                <option>Budha</option>
                                                                <option>Khatolik</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">No KTP/SIM</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" value="{{$biodatass->no_ktp}}" name="no_ktp"
                                                                placeholder="masukan no ktp/sim" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tinggi Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"  value="{{$biodatass->tinggi_badan}}" name="tinggi_badan"
                                                                placeholder="masukan tinggi badan /cm" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Berat Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"  value="{{$biodatass->berat_badan}}" name="berat_badan"
                                                                placeholder="masukan berat badan /kg" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Warna Mata</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->warna_mata}}" name="warna_mata"
                                                                placeholder="masukan warna mata" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Warna Rambut</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->warna_rambut}}" name="warna_rambut"
                                                                placeholder="masukan warna rambut" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Bentuk Wajah</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->bentuk_wajah}}" name="bentuk_wajah"
                                                                placeholder="masukan bentuk wajah" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Ciri Fisik Lain</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->ciri_lain}}" name="ciri_lain"
                                                                placeholder="masukan ciri fisik lainnya" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" rows="4"   name="alamat"
                                                                placeholder="masukan alamat lengkap">{{$biodatass->alamat}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">No HP/Telepon</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"  value="{{$biodatass->no_hp}}" name="no_hp"
                                                                placeholder="masukan no hp" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">No Telepon Darurat</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"  value="{{$biodatass->telepon_darurat}}" name="telepon_darurat"
                                                                placeholder="masukan no telepon darurat" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"> Jumlah Saudara
                                                            Kandung</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->saudara_kandung}}" name="saudara_kandung"
                                                                placeholder="masukan saudara kandung" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->email}}" name="email"
                                                                placeholder="masukan email" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tinggal Bersama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  value="{{$biodatass->tinggal_bersama}}" name="tinggal_bersama"
                                                                placeholder=" masukan tinggal bersama" />
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                        {{-- Data Keluarga --}}
                                        <div id="step-6">
                                            <h4>
                                                <center> -- Masukan Data Keluarga --</center>
                                            </h4><br><br>

                                            <div class="form-group">
                                                <label class="col-md-2 ">Hubungan Keluarga</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{$keluarga->hubungan}}" name="hubungan"
                                                        placeholder="ibu/ayah" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 ">Nama Lengkap</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{$keluarga->nama_lengkap}}" name="nama_lengkap_saudara"
                                                        placeholder="Nama Lengkap" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 ">Usia</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="{{$keluarga->usia}}" name="usia"
                                                        placeholder="Usia" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 ">Pendidikan</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{$keluarga->pendidikan}}" name="pendidikan"
                                                        placeholder="Pendidikan" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 ">Pekerjaan</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{$keluarga->pekerjaan}}" name="pekerjaan"
                                                        placeholder="pekerjaan" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 ">Nomor HP</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="{{$keluarga->no_hp}}" name="no_hp"
                                                        placeholder="No HP" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 ">Urutan Keluarga</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{$keluarga->urutan_keluarga}}" name="urutan_keluarga"
                                                        placeholder="Urutan Keluarga" />
                                                </div>
                                            </div>

                                        </div>


                                        <div id="step-7">

                                            <h4>
                                                <center> -- Masukan Data Pengalaman --</center>
                                            </h4><br><br>
                                            <div class="row" id="addcolum">
                                                <div class="form-group">
                                                    <label class="col-md-2">Nama Perusahaan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"  value="{{$pengalaman[0]->nama_perusahaan}}" name="nama_perusahaan"
                                                            placeholder="Nama Perusahaan" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Nama Kapal</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{$pengalaman[0]->nama_kapal}}" name="nama_kapal"
                                                            placeholder="Nama Kapal" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Tipe Kapal</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{$pengalaman[0]->tipe_kapal}}" name="tipe_kapal"
                                                            placeholder="Tipe Kapal" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Bendera</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{$pengalaman[0]->bendera}}" name="bendera"
                                                            placeholder="Bendera" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2">Jabatan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{$pengalaman[0]->jabatan}}" name="jabatan"
                                                            placeholder="jabatan" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Mulai</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control datepicker" value="{{$pengalaman[0]->mulai}}" name="mulai"
                                                            placeholder="Mulai" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Sampai</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control datepicker" value="{{$pengalaman[0]->sampai}}" name="sampai"
                                                            placeholder="sampai" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Alasan Berhenti</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{$pengalaman[0]->alasan_berhenti}}" name="alasan_berhenti"
                                                            placeholder="Alasan Berhenti" />
                                                    </div>
                                                </div><br><br>
                                            </div>

                                            <div class="form-group">
                                                <center>
                                                    <input type="button" class="btn btn-primary" value="add" id="addRow" />
                                                </center>
                                            </div>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br><br><br><br><br>

                                        </div>
                                        <div id="step-8">
                                            <h4>
                                                <center> --Lengkapi Dokumen Yang Ada--</center>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>KTP</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control" name="no_ktp"
                                                                        placeholder="NO KTP">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_ktp"><br />
                                                                </div>
                                                            </div>
                                                            @if (empty($berkas[0]->ktp))

                                                            @endif
                                                            <input type="file" id="ktp" value="{{url('files' . '/' . $biodatass->nama_lengkap . '/uploads/ktp/' . $berkas[0]->ktp) }}" name="ktp"
                                                            accept="application/pdf, image/*" />

                                                            {{--  <input type="file"  name="ktp" accept="application/pdf, image/*" value="{{$berkas[0]->ktp}}">  --}}
                                                        </div>
                                                        @if ($berkas[0]->ktp)
                                                        <embed
                                                            src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/ktp/' . $dokumen->ktp) }}"
                                                            type="application/pdf" width="340px" height="340px">
                                                        </embed>

                                                        @endif

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>AKTE</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control" name="no_akte"
                                                                        placeholder="NO AKtE">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_akte"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="akte" name="akte"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>IJAZAH</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control"
                                                                        name="no_ijasah" placeholder="NO IJAZAH">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_ijasah"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="ijazah" name="ijazah"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Buku Nikah</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control"
                                                                        name="no_bnikah" placeholder="NO BUKU NIKAH">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_bnikah"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="buku_nikah" name="buku_nikah"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Kartu Keluarga</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control" name="no_kk"
                                                                        placeholder="NO KARTU KELUARGA">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_kk"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="kartu_keluarga"
                                                                name="kartu_keluarga" accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>SKCK</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control" name="no_skck"
                                                                        placeholder="NO SKCK">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="sxp_skck"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="skck" name="skck"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>BST</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control" name="no_bst"
                                                                        placeholder="NO BST">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_bst"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="bst" name="bst"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>PASPOR</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control"
                                                                        name="no_paspor" placeholder="NO PASPOR">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_paspor"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="paspor" name="paspor"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>BUKU PELAUT</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control"
                                                                        name="no_pelaut" placeholder="NO BUKU PELAUT">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_pelaut"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="buku_pelaut" name="buku_pelaut"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>PAS FOTO PUTIH</label><br />
                                                            <input type="file" multiple id="pas_foto_putih"
                                                                name="pas_foto_putih" accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>PAS FOTO BIRU</label><br />
                                                            <input type="file" multiple id="pas_foto_biru"
                                                                name="pas_foto_biru" accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>MCU</label><br />
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="number" class="form-control"
                                                                        name="no_midikal" placeholder="NO MCU">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control datepicker"
                                                                        value="2021-01-01" name="exp_medikal"><br />
                                                                </div>
                                                            </div>
                                                            <input type="file" multiple id="mcu" name="mcu"
                                                                accept="application/pdf, image/*" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- END WIZARD WITH SUBMIT BUTTON -->
                        {{-- <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-info">Daftar</button>
                                </div>
                            </div> --}}

                </div>
                </form>
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
