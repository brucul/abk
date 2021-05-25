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

    .garis_tepi3 {
        border: 1px solid rgba(255, 255, 255, 0);
        tra
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
    <div><br>
        <table>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 20px;">
                    <div class="container">
                        <font size="2"> (Lembaran Halaman 2) </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; background: red">
                    <center style="margin-top: 3px;">
                        <font size="2">
                            PENGALAMAN BERLAYAR
                        </font>
                    </center>
                </div>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 40px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                NO
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                NAMA PERUSAHAAN
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 100px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                NAMA KAPAL
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 80px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                TIPE KAPAL
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 70px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                BENDERA
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 70px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                JABATAN
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                DARI
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 60px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                SAMPAI
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 119px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                ALASAN BERHENTI
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
        @php
            $no = 1;
        @endphp
        @foreach ($pengalaman as $peng)

            {{-- IMPORT DARI DB --}}
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 40px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $no++ }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->nama_perusahaan }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->nama_kapal }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 80px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->tipe_kapal }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 70px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->bendera }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 70px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->jabatan }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ Date::parse($peng->mulai)->format('Y') }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 60px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ Date::parse($peng->sampai)->format('Y') }}
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 119px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="1">
                                    {{ $peng->alasan_berhenti }}
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
            {{-- TERAKHIR IMPORT --}}
        @endforeach

        <div class="garis_tepi2" style="width: 739px; height: 105px; ">
            <div class="container">
                <table><br>
                    <em><label class="col-xs-12 ">* (PENGALAMAN 3 TAHUN TERAKHIR DIMULAI DARI YANG
                            TERAKHIR)</label></em><br><br>
                    <div class="form-group">

                        <div class="col-xs-12" style="text-align: justify; font-size:12px; width: 650px">
                            Apakah Anda Pernah Dirawat Dirumah Sakit Disebabkan Kecelakan Atau Penyakit Kritis, Jika
                            <b>YA</b> Mohon Sebutkan
                        </div>
                    </div>
                </table>
            </div>
        </div>
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                TAHUN/BULAN
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                JENIS PENYAKIT/TINDAKAN
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                STATUS AKHIR
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 239px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                                KETERANGAN
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 239px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 239px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 239px; height: 25px; ">
                        <center style="margin-top: 3px;">
                            <font size="2">
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>

        <div class="garis_tepi2" style="width: 739px; height: 90px; ">
            <div class="container">
                <table><br>
                    <em><label class="col-xs-12 ">Jika Pembayaran Dikirim Melalui Bank Apakah Anda Setuju ? Ya /
                            Tidak</label></em><br>
                    <div class="form-group">
                        <div class="col-xs-12" style="text-align: justify; font-size:12px; width: 650px">
                            Nama Bank : <br>
                            No. Rekening :
                        </div>
                    </div>
                </table>
            </div>
        </div>
        <table>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                            Kapan Anda Siap Mulai Bekerja
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                            Berapa Gaji Yang Anda Harapkan
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                            Dari Mana Anda Mendapat Informasi Mengenai Lowongan Kerja Ini
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                            Apakah Anda Pernah Melamar Keseni Sebelumnya, Jika Pernah Sebutkan Posisi dan Waktunya
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">
                            Ceritakan Tentang Diri Anda Yang Mungkin Akan Membantu Penilaian Kami Terhadap Anda :
                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">

                        </font>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <div class="container" style="margin-top: 3px;">
                        <font size="2">

                        </font>
                    </div>
                </div>
            </tr>
        </table>
        <div class="garis_tepi2" style="width: 739px; height: 160px; text-align: justify;">
            <table><br>
                <label class="col-xs-12 ">Semua Pernyataan Dalam Aplikasi Lamaran Ini Adalah Benar dan Sesuai
                    Keadaan Sebenarnya, Saya Mengerti Jika Ada Pernyataan Yang Terbukti Tidak Benar Maka Saya
                    Bersedia Diberhentikan Seketika/Mendapat Sangsi Sesuai Ketentuan Berlaku.</label><br>
                <div class="form-group">
                    <div class="container">
                        <div class="col-xs-12" style="text-align: justify; font-size:12px; width: 650px">
                            ............, ........................ 20.... <br>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="container">
                        <font size="2">(...................................)<span style="padding-left:340px;">
                                (...................................)</span></font><br>
                        <div class="form-group">
                            <b><label class="col-xs-3 "></label>
                                <div class="col-xs-6" style="text-align: justify; font-size:12px; width: 650px">
                                    <font size="2">Pelamar/Awak Kapal <span style="padding-left:320px;">
                                            Penerima Lamaran</span></font>
                                </div>
                        </div>
                    </div>
                </div>
            </table>
        </div>

        <table><br><br><br><br>
            <tr>
                <div class="garis_tepi2" style="width: 739px; height: 25px; ">
                    <center style="margin-top: 3px;">
                        <font size="2">
                            CHEK LIST DIKUMEN PERSYARATAN
                        </font>
                    </center>
                </div>
            </tr>
        </table>
        <div class="garis_tepi2" style="width: 739px; height: 487px;">
            <table>
                <tr>
                    <td>
                        <div class=" garis_tepi2" style="width: 200px; height: 50px; ">
                            <center style="margin-top: 12px;">
                                <font size="2">
                                    DOKUMEN LAMPIRAN
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    STATUS
                                </font>
                            </center>
                        </div>
                        <div class="garis_tepi2" style="width: 100px; height: 25px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    ADA | TIDAK
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 50px; ">
                            <center style="margin-top: 12px;">
                                <font size="2">
                                    MASA BERLAKU
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 50px; ">
                            <center style="margin-top: 12px;">
                                <font size="2">
                                    KET
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>

            </table>
            <table>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    1
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    PASPOR
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    2
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    BUKU PELAUT
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    3
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    KT KLN
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi3" style="width: 217px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    (............................) <br>
                                    PELAMAR/AWAK KAPAL
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    4
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    BST
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 45px; ">
                            <center style="margin-top: 10px;">
                                <font size="2">
                                    5
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 45px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    SURAT IZIN KELUARGA/ORTU
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 45px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 45px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 45px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 45px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    6
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    FOTO
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    7
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    MEDICAL TEST
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    8
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    IJAZAH TERAKHIR
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    9
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    KTP
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi3" style="width: 217px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    (............................) <br>
                                    PEMERIKSA
                                </font>
                            </center>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    10
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    KK
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    11
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    AKTE LAHIR
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    12
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    SKCK
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    13
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">

                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="garis_tepi2" style="width: 30px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                    14
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 170px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">

                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 50px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 120px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div class="garis_tepi2" style="width: 100px; height: 30px; ">
                            <center style="margin-top: 3px;">
                                <font size="2">
                                </font>
                            </center>
                        </div>
                    </td>

                </tr>
            </table>

        </div>
    </div>

    <script type="text/javascript">
        var css = '@page { size: portrait; }',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');

        style.type = 'text/css';
        style.media = 'print';

        if (style.styleSheet) {
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);

        window.print();

    </script>
    <!-- END THIS PAGE PLUGINS-->

</body>

</html>
