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
                                                    <span class="stepDesc">Informasi Tambahan<br /><small>Informasi Tambahan</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-9">
                                                    <span class="stepNumber">5</span>
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
                                                        <label class="col-md-3 control-label">Posisi</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="posisi"
                                                                placeholder="masukan posisi" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Nama Lengkap</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="nama_lengkap"
                                                                placeholder="masukan nama lengkap" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Nama Panggilan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="nama_panggilan"
                                                                placeholder="masukan nama panggilan" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Jenis Kelamin</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-4">
                                                                <label class="check"><input type="radio" class="iradio"
                                                                        name="jk" value="laki-laki" /> laki-laki</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="check"><input type="radio" class="iradio"
                                                                        name="jk" checked="checked" value="perempuan" />
                                                                    perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tanggal Lahir</label>
                                                        <div class="col-md-9">

                                                            <input type="text" class="form-control datepicker"
                                                                value="2021-01-01" name="tanggal_lahir" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Status Pernikahan</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-6">
                                                                <label class="check"><input type="radio" class="iradio"
                                                                        name="status_pernikahan" value="sudah" /> Sudah
                                                                    Menikah</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="check"><input type="radio" class="iradio"
                                                                        name="status_pernikahan" checked="checked"
                                                                        value="belum" /> Belum Menikah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Kebangsaan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="kebangsaan"
                                                                placeholder="masukan kebangsaan" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Agama</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="agama">
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
                                                            <input type="number" class="form-control" name="ktp_sim"
                                                                placeholder="masukan no ktp/sim" requiredrequired/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tinggi Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="tinggi_badan"
                                                                placeholder="masukan tinggi badan /cm" requiredrequired/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Berat Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="berat_badan"
                                                                placeholder="masukan berat badan /kg" requiredrequired/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Warna Mata</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="warna_mata"
                                                                placeholder="masukan warna mata" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Warna Rambut</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="warna_rambut"
                                                                placeholder="masukan warna rambut" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Bentuk Wajah</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="bentuk_wajah"
                                                                placeholder="masukan bentuk wajah" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Ciri Fisik Lain</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="ciri_lain"
                                                                placeholder="masukan ciri fisik lainnya" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" rows="4" name="alamat"
                                                                placeholder="masukan alamat lengkap" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">No HP/Telepon</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="nohp"
                                                                placeholder="masukan no hp" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">No Telepon Darurat</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" name="telepon_darurat"
                                                                placeholder="masukan no telepon darurat" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"> Jumlah Saudara
                                                            Kandung</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="saudara_kandung"
                                                                placeholder="masukan saudara kandung" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="email"
                                                                placeholder="masukan email" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tinggal Bersama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="tinggal_bersama"
                                                                placeholder=" masukan tinggal bersama" required/>
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
                                                                <option>Sangat Baik</option>
                                                                <option>Baik</option>
                                                                <option>Cukup</option>
                                                                <option>Pasif</option>
                                                                <option>Tidak Bisa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Inggris</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="inggris">
                                                                <option>Sangat Baik</option>
                                                                <option>Baik</option>
                                                                <option>Cukup</option>
                                                                <option>Pasif</option>
                                                                <option>Tidak Bisa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Spanyol</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="spanyol">
                                                                <option>Sangat Baik</option>
                                                                <option>Baik</option>
                                                                <option>Cukup</option>
                                                                <option>Pasif</option>
                                                                <option>Tidak Bisa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Mandarin</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control select" name="mandarin">
                                                                <option>Sangat Baik</option>
                                                                <option>Baik</option>
                                                                <option>Cukup</option>
                                                                <option>Pasif</option>
                                                                <option>Tidak Bisa</option>
                                                            </select>
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
                                            <div id="addKeluarga">
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Hubungan Keluarga</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="hubungan[]"
                                                            placeholder="ibu/ayah" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Nama Lengkap</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="nama_lengkap_saudara[]"
                                                            placeholder="Nama Lengkap" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Usia</label>
                                                    <div class="col-md-10">
                                                        <input type="number" class="form-control" name="usia[]"
                                                            placeholder="Usia" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Pendidikan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="pendidikan[]"
                                                            placeholder="Pendidikan" required/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 ">Pekerjaan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="pekerjaan[]"
                                                            placeholder="pekerjaan" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Nomor HP</label>
                                                    <div class="col-md-10">
                                                        <input type="number" class="form-control" name="no_hp[]"
                                                            placeholder="No HP" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 ">Urutan Keluarga</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="urutan_keluarga[]"
                                                            placeholder="Urutan Keluarga" required/>
                                                    </div>
                                                </div><br><br>
                                            </div>

                                                <div class="form-group">
                                                    <center>
                                                        <input type="button" class="btn btn-primary" value="Tambah Anggota Keluarga" id="addButton"/>
                                                    </center>
                                                </div>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                            <br><br><br><br><br><br><br><br><br><br><br>

                                        </div>


                                        <div id="step-7">

                                            <h4>
                                                <center> -- Masukan Data Pengalaman --</center>
                                            </h4><br><br>
                                            <div class="row" id="addcolum">
                                                <div class="form-group">
                                                    <label class="col-md-2">Nama Perusahaan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="nama_perusahaan[]"
                                                            placeholder="Nama Perusahaan" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Nama Kapal</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="nama_kapal[]"
                                                            placeholder="Nama Kapal" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Tipe Kapal</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="tipe_kapal[]"
                                                            placeholder="Tipe Kapal" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Bendera</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="bendera[]"
                                                            placeholder="Bendera" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2">Jabatan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="jabatan[]"
                                                            placeholder="jabatan" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Mulai</label>
                                                    <div class="col-md-10">
                                                        <input type="date" class="form-control datepicker" name="mulai[]"
                                                            placeholder="Mulai" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Sampai</label>
                                                    <div class="col-md-10">
                                                        <input type="date" class="form-control datepicker" name="sampai[]"
                                                            placeholder="sampai" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2">Alasan Berhenti</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="alasan_berhenti[]"
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
                                                <center> -- Pengalaman 3 Tahun Terakhir Dimulai dari yang Terakhir --</center>
                                            </h4><br><br>
                                                <div class="form-group">
                                                    <label class="col-md-12">Apakah anda pernah dirawat di rumah sakit disebabkan kecelakaan atau penyakit kritis?</label>
                                                    <div class="row col-md-12">
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" id="sakit" class="" name="q1" value="ya" onclick="show_sakit();" /> Ya</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" id="tidak_sakit" class="" name="q1" value="tidak" onclick="hide_sakit();" /> Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="penyakit" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control" name="tahun[]"
                                                                placeholder="Tahun/Bulan" />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="penyakit[]"
                                                                placeholder="Jenis Penyakit/Tindakan" />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="status_akhir[]"
                                                                placeholder="Status Akhir" />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control" name="keterangan[]"
                                                                placeholder="Keterangan" />
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="button" class="btn btn-primary" value="Tambah" id="addSakit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Jika pembayaran upah dikirim melalui bank, pakah anda setuju?</label>
                                                    <div class="row col-md-12">
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" id="iya_bank" class="" name="q2" value="ya" onclick="show_bank();" /> Ya</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check"><input type="radio" id="tidak_bank" class="" name="q2" value="tidak" onclick="hide_bank();" /> Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="bank"  style="display: none;">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="bank"
                                                            placeholder="Bank (No. Rekening)" />
                                                    </div>
                                                    {{-- <div class="col-md-3">
                                                        <input type="text" class="form-control" name="rekening"
                                                            placeholder="Nomor Rekening" />
                                                    </div> --}}
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">Kapan anda siap mulai bekerja?</label>
                                                    <label class="col-md-3">Berapa gaji yang anda harapkan?</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control datepicker" value="{{date('Y-m-d')}}" name="q3" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="q4"
                                                            placeholder="Gaji" required/>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-12">Darimana anda mendapat informasi mengenai lowongan kerja ini?</label>
                                                    <div class="row col-md-6">
                                                        <input type="text" class="form-control" name="q5" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Apakah anda pernah melamar kesini sebelumnya, jika pernah sebutkan posisi dan waktunya</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="posisi_sebelumnya"
                                                            placeholder="Posisi" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control datepicker" value="{{date('Y-m-d')}}" name="tgl">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Ceritakan tentang diri anda yang mungkin akan membantu penilaian kami terhadap anda</label>
                                                    <div class="row col-md-12">
                                                        <textarea class="form-control" name="q7" required></textarea>
                                                    </div>
                                                </div>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        </div>
                                        <div id="step-9">
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
                                                            <input type="file" multiple id="ktp" name="ktp"
                                                                accept="application/pdf, image/*" />
                                                        </div>
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


    </section>


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
