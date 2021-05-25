<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABK KAPAL - {{ $sub_title }}</title>
    @include('templates._header_admin')
</head>
<style>
    div {
        width: 100%;
    }

    .garis_tepi1 {
        border: 1px solid black;
    }

    .garis_tepi2 {
        border: 1px solid black;
    }

</style>

<body><br>
    <center>
        <table>
            <tr>
                <td><img src="{{ asset('template/Icon2.ico') }}" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="5"><b>{{ $title }}</b></font><br>
                        <font size="3"><b>{{ $namaper }}</b></font><br>
                        <font size="2">{{ $alamatperu }}</font><br>
                        <font size="2">{{ $telep }}</font><br>
                    </center>
                </td>
                <td><img src="{{ asset('template/Icon2.ico') }}" width="90" height="90"></td>
            </tr>
        </table>
    </center>
    <hr color="black" size="4">
    <div class="garis_tepi1">
        <div class="container">
            <table>
                <br> Lembaran Halaman (1) <br>
                <center>
                    <font size="3"><b>BIODATA PELAMAR KERJA</b></font>
                </center>
            </table><br>
        </div>

    </div>
    <div class="garis_tepi1">
        <div class="container">
            <table><br>
                <tr>
                    <div class="form-group">
                        <label class="col-xs-3 ">Posisi yang Dilamar :</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" placeholder="Karyawan Baru Pada Posisi Jabatan" />
                        </div><br><br>
                        <label class="col-xs-3 ">(Pilih Salah Satu) :</label>

                        <div class="col-xs-8">
                            <input type="text" class="form-control" placeholder="Awak Kapal Baru Pada Posisi Jabatan" />
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-xs-3 ">Petunjuk :</label>
                        <div class="col-xs-8" style="text-align: justify; font-size:11px">
                            - Surat Lamaran dan Riwayat Hidup Harus disertakan Bersama Fomulir Ini. <br>
                            - Jika Ruang untuk Mengisi data Tidak Cukup Dapat Menggunakan Kertas Tambahan. <br>
                            - Lengkapi Persyaratan Dokumen Lampiran atau Diperbolehkan Susulan Atas Pemenuhan Dokumen
                            Tersebut Sesuai Persetujuan Manajemen.
                        </div>
                    </div>
                    <br><br><br><br>
                </tr>
            </table>
        </div>
    </div>
    {{-- INFORMASI BUKA --}}
    <div class="garis_tepi1"><br>
        <div class="container">
            <table>
                <tr>
                    <td>
                        <font size="2">Nama Lengkap <span style="padding-left:20px;"> :
                                {{ $bio->nama_lengkap }}</span></font><br>
                    </td>
                    <td>
                        <span style="padding-left:200px;">
                            <font size="2">Status Pernikahan <span style="padding-left:20px;"> :
                                    {{ $bio->status_pernikahan }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2">Nama Panggilan <span style="padding-left:11px;"> :
                                {{ $bio->nama_panggilan }}</span><br>
                    </td>
                    <td>
                        <span style="padding-left:200px;">
                            <font size="2">Kebangsaan <span style="padding-left:57px;"> :
                                    {{ $bio->kebangsaan }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2">Jenis Kelamin <span style="padding-left:30px;"> :
                                {{ $bio->jenis_kelamin }}</span></font>
                    </td>
                    <td>
                        <span style="padding-left:200px;">
                            <font size="2">Agama <span style="padding-left:89px;"> :
                                    {{ $bio->agama }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2">Tanggal Lahir <span style="padding-left:30px;"> :
                                {{ Date::parse($bio->tanggal_lahir)->format('d M Y') }}</span></font>
                    </td>
                    <td>
                        <span style="padding-left:200px;">
                            <font size="2">No. KTP/SIM <span style="padding-left:56px;"> :
                                    {{ $bio->no_ktp }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
            </table><br><br>
            <table>
                <tr>
                    <td>
                        <font size="2">Tinggi Badan <span style="padding-left:30px;"> :
                                {{ $bio->tinggi_badan }}</span></font>
                    </td>
                    <td>
                        <span style="padding-left:100px;">
                            <font size="2">Warna Rambut <span style="padding-left:50px;"> :
                                    {{ $bio->warna_rambut }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2">Berat Badan <span style="padding-left:32px;"> :
                                {{ $bio->berat_badan }}</span></font>
                    </td>
                    <td>
                        <span style="padding-left:100px;">
                            <font size="2">Bentuk Wajah <span style="padding-left:57px;"> :
                                    {{ $bio->bentuk_wajah }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font size="2">Warna Mata <span style="padding-left:32px;"> :
                                {{ $bio->warna_mata }}</span></font>
                    </td>
                    <td>
                        <span style="padding-left:100px;">
                            <font size="2">Ciri Fisik Lain <span style="padding-left:62px;"> :
                                    {{ $bio->ciri_lain }}</span>
                            </font>
                        </span><br>
                    </td>
                </tr>
            </table><br>
        </div>
    </div>
    {{-- INFORMASI TUTUP --}}
    {{-- BUKA ALAMAT --}}
    <div class="garis_tepi1"><br>
        <div class="container">
            <table>
                <tr>
                    <div class="garis_tepi2" style="width: 100%; height: 20px;">
                        <center>
                            <font size="2"> Alamat Tempat Tinggal </font>
                        </center>
                    </div>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 450px; height: 35px;">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 235px; height: 35px;">
                            <center style="margin-top: 8px;">
                                <font size="2"> Kepemilikan </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 450px; height: 35px;">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2"> Sendiri </font>
                            </center>

                        </div>

                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>

                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 450px; height: 35px;">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2"> Keluarga </font>
                            </center>

                        </div>

                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>

                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 450px; height: 35px;">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                            <center>
                                <font size="2"> Sewa Kontrak </font>
                            </center>

                        </div>

                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>

                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 70px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Telepon
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 300px; height: 30px; ">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 230px; height: 30px; ">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 30px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 70px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    HP
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 300px; height: 30px; ">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Email
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 230px; height: 30px; ">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 30px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 370px; height: 40px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Telepon Lain / Keadaan Darurat / Sudara Kandung
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 280px; height: 40px; ">
                            <input type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 35px; height: 40px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
            </table><br>
            {{-- TUTUP ALAMAT --}}
            {{-- BAHASA BUKA --}}
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    BAHASA
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Indonesia
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Inggris
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Spanyol
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Mandarin
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Sangat Baik
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Baik
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Cukup
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Pasif
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    Tidak Bisa
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 137px; height: 35px; ">
                            <center style="margin-top: 8px;">
                                <input type="checkbox" name="dipilih[]" style="text-align: center">
                            </center>
                        </div>
                    </td>
                </tr>
            </table><br>
            {{-- TUTUP BAHASA --}}
            {{-- BUKA ORTU --}}
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 684px; height: 30px; ">
                            <center style="margin-top: 8px;">
                                <font size="2">
                                    DATA KELUARGA (Orang Tua)
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Hubungan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Nama Lengkap
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Usia
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pendidikan Terakhir
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pekerjaan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    NO HP
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table><br>
            {{-- TUTUP ORTU --}}
            {{-- BUKA DATA --}}
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 684px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    DATA KELUARGA, SAUDARA LAKI - LAKI dan/atau PEREMPUAN
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Hubungan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Nama Lengkap
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Usia
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pendidikan Terakhir
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pekerjaan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    NO HP
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>

            </table>
            <table class="garis_tepi2" style="width: 685px; height: 30px; ">
                <tr>
                    <td>
                        <div style="margin-top: 5px;" class="">
                            <font size="2"><span style="padding-left:20px;">
                                    Anda Adalah Urutan Ke</span>
                            </font>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Alamat" style="width: 50px;">
                    </td>
                    <td>
                        <div style="margin-top: 5px;">
                            <font size="2">
                                Dari
                            </font>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Alamat" style="width: 50px;">
                    </td>
                </tr>
            </table><br>
            {{-- TUTUP DATA --}}
            {{-- DATA KELUARGA --}}
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 684px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    DATA KELUARGA (ISTRI dan/atau ANAK)
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Hubungan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Nama Lengkap
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Usia
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pendidikan Terakhir
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    Pekerjaan
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center style="margin-top: 5px;">
                                <font size="2">
                                    NO HP
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 160px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 134px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 110px; height: 30px; ">
                            <center>
                                <input type="text" class="form-control" placeholder="Alamat">
                            </center>
                        </div>
                    </td>
                </tr>

            </table><br>
            {{-- TUTUP DATA KELUARGA --}}

        </div>
    </div><br>
    <div class="form-group">
        <center>
            <input type="button" class="btn btn-primary" value="Cetak PDF" id="cetak" />
        </center>
    </div>



    <!-- START PLUGINS -->

    <script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="{{ asset('template/js/plugins/icheck/icheck.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/plugins/morris/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/morris/morris.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/owl/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript">
        $("#cetak").click(function() {
            window.print();
        });

    </script>
    <!-- END THIS PAGE PLUGINS-->

</body>

</html>
