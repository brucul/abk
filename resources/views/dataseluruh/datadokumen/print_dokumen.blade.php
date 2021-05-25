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
    <div class="container">
        <table>
            <center>
                <font size="5"><b>SERAH TERIMA BERKAS DOKUMEN</b></font>
            </center>
            <br><br>
            <label class="col-xs-2 ">No. Reg :</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" placeholder="..............." /><br>
            </div>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 40px; ">
                        <center style="margin-top: 10px;">
                            <font size="2">
                                NO
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 40px; ">
                        <center style="margin-top: 10px;">
                            <font size="2">
                                NAMA DOKUMEN
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 40px; ">
                        <center style="margin-top: 10px;">
                            <font size="2">
                                NO. SURAT
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 40px; ">
                        <center style="margin-top: 10px;">
                            <font size="2">
                                TANGGAL SURAT
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 40px; ">
                        <center style="margin-top: 10px;">
                            <font size="2">
                                KETERANGAN
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                1
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                KTP/EKTP/SURAT CAPIL
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_ktp }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_ktp)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                2
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                AKTE/SUKET LAHIR
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_akte }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_akte)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                3
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                IJASAH : SD/SMP/SMA/AKADEMI
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_ijasah }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_ijasah)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                4
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                BUKU NIKAH / AKTE NIKAH
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_bnikah }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_bnikah)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                5
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                KARTU KELUARGA
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_kk }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_kk)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                6
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                SKCK
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_skck }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->sxp_skck)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                7
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                BST
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_bst }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_bst)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                ASLI / COPY
                            </font>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                8
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                PASPOR BARU / LAMA
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_paspor }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_paspor)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">

                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                9
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                BUKU PELAUT BARU / LAMA
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_pelaut }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_pelaut)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">

                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                10
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                PAS FOTO BACKGROUND PUTIH
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">

                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">

                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">

                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                11
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                PAS FOTO BACKGROUND BIRU
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">

                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">

                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">

                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div class="garis_tepi2" style="width: 50px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                12
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 200px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                MEDICAL CHECK UP
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 170px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ $dokumen->no_midikal }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">
                            <font size="2">
                                {{ Date::parse($dokumen->exp_medikal)->format('d, M Y H:i') }}
                            </font>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="garis_tepi2" style="width: 150px; height: 35px; ">
                        <center style="margin-top: 6px;">

                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div><br><br>
    <div class="container">
        <table>
            <em><label class="col-xs-5 ">*) Coret Yang Tidak Perlu</label></em><br><br>
            <div class="form-group">
                <b><label class="col-xs-5 ">Keterangan</label></b><br>
                <div class="col-xs-8" style="text-align: justify; font-size:12px; width: 650px">
                    1. bahwa seluruh dokumen keterangan jati diri saya adalah sebenar - benarnya dan asli. Jika ternyata
                    di kemudian hari terdapat kekeliruan / kesalahan menjadi tanggung jawab yang menyerahkan dokumen.
                    <br>

                    2. Pengembalian berkas dokumen harus membawa surat serah terima dokumen.
                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <label class="col-xs-3 " style="text-align: right; width: 515px">Tegal</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="..............." /><br><br>
                </div>
            </tr>
        </table>
        <table>
            <tr>
                <label class="col-xs-5 ">Mengetahui</label><br><br>
            </tr>
            <tr>

                <td>
                    <div class="form-group">
                        <b><label class="col-xs-5 "></label>
                            <div class="col-xs-8" style="text-align: justify; font-size:12px; width: 650px">
                                <font size="2">Bagian Interview <span style="padding-left:350px;">
                                        Pelamar Kerja (ABK)</span></font><br>
                                <br><br><br><br>
                            </div>
                    </div>
                    <font size="2">(...................................)<span style="padding-left:340px;">
                            (...................................)</span></font><br>
                </td>
            </tr>
        </table>
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
