<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
    @include('templates._header_admin')
</head>
<body class="border-page">
	<style type="text/css">
		.break{
			page-break-after: always;
		}
		.border-page{
			border-top: 1px solid black;
			border-left: 1px solid black;
			border-right: 1px solid black;
			border-bottom: 1px solid black;
		}
		.page{
			padding: 5px;
		}
		.border{
			border: 1px solid black;
		}
		.border td, th{
			border: 1px solid black;
		}
		.border th{
			text-align: center;
		}
	</style>
	<div class="page break">
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
	    <hr style="border-bottom: 5px solid black;">
		<div style="border-bottom: 1px solid black; border-top: 1px solid black">
			<p>(Lembaran hal 1)</p>
			<h5 align="center"><b>BIODATA PELAMAR KERJA</b></h5>
		</div>
		<br>
		<table width="100%">
			<tr>
				<td width="15%">Posisi yang dilamar</td>
				<td>:</td>
				<td class="border">Karyawan Baru Pada Posisi Jabatan : {{$biodata->posisi}}</td>
				<td>&emsp;</td>
				<td rowspan="8" class="border" width="15%" align="center">Pas Foto Terbaru</td>
				<td>&emsp;</td>
			</tr>
			<tr>
				<td width="15%">(pilih salah satu)</td>
				<td>:</td>
				<td class="border">Awak Kapal Baru Pada Posisi Jabatan : {{$biodata->posisi}}</td>
				<td></td>
			</tr>
			<tr><td>&emsp;</td></tr>
			<tr>
				<td>Petunjuk</td>
				<td>:</td>
				<td>- Surat Lamaran dan Riwayat Hidup harus disertakan bersama formulir ini</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>- Jika ruang untuk mengisi data tidak cukup dapat menggunakan kertas tambahan</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>- Lengkapi Persyaratan Dokumen Lampiran atau diperbolehkan susulan</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>atas pemenuhan dokumen tersebut sesaui persetujuan manajemen</td>
			</tr>
			<tr><td colspan="5" style="border-bottom: 1px solid black">&emsp;</td></tr>
		</table>
		<br>
		<table width="100%">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->nama_lengkap }}</td>
				<td width="5%">&emsp;</td>
				<td>Status Pernikahan</td>
				<td>:</td>
				<td width="20%">{{ $biodata->status_pernikahan }}</td>
			</tr>
			<tr>
				<td>Nama Panggilan</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->nama_panggilan }}</td>
				<td width="5%">&emsp;</td>
				<td>Kebangsaan</td>
				<td>:</td>
				<td width="20%">{{ $biodata->kebangsaan }}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->jenis_kelamin }}</td>
				<td width="5%">&emsp;</td>
				<td>Agama</td>
				<td>:</td>
				<td width="20%">{{ $biodata->agama }}</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->tanggal_lahir }}</td>
				<td width="5%">&emsp;</td>
				<td>No. KTP / SIM</td>
				<td>:</td>
				<td width="20%">{{ $biodata->no_ktp }}</td>
			</tr>
			<tr><td>&emsp;</td></tr>
			<tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->tinggi_badan }}</td>
				<td width="5%">&emsp;</td>
				<td>Warna Rambut</td>
				<td>:</td>
				<td width="20%">{{ $biodata->warna_rambut }}</td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->berat_badan }}</td>
				<td width="5%">&emsp;</td>
				<td>Bentuk Wajah</td>
				<td>:</td>
				<td width="20%">{{ $biodata->bentuk_wajah }}</td>
			</tr>
			<tr>
				<td>Warna Mata</td>
				<td>:</td>
				<td width="45%" style="border-bottom: 1px solid black">{{ $biodata->warna_mata }}</td>
				<td width="5%">&emsp;</td>
				<td>Ciri Fisik Lain</td>
				<td>:</td>
				<td width="20%">{{ $biodata->ciri_lain }}</td>
			</tr>
		</table>
		<br><br>
		<table width="100%">
			<tr>
				<td width="50%">
					<table>
						<tr>
							<th class="border" colspan="5"><center>Alamat Tempat Tinggal</center></th>
						</tr>
						<tr>
							<td class="border" colspan="3" rowspan="4">{{ $biodata->alamat }}</td>
							<td class="border" colspan="2" width="30%">Kepemilikan</td>
						</tr>
						<tr>
							<td class="border">Sendiri</td>
							<td class="border" width="5%"></td>
						</tr>
						<tr>
							<td class="border">Keluarga</td>
							<td class="border"></td>
						</tr>
						<tr>
							<td class="border">Sewa / Kontrak</td>
							<td class="border"></td>
						</tr>
						<tr>
							<td class="border"></td>
							<td class="border"></td>
						</tr>
						<tr>
							<td class="border" width="5%">Telepon</td>
							<td class="border"></td>
							<td class="border"></td>
							<td class="border"></td>
							<td class="border"></td>
						</tr>
							<td class="border" width="5%">HP</td>
							<td class="border">{{ $biodata->no_hp }}</td>
							<td class="border" width="5%">Email</td>
							<td class="border">{{$biodata->email}}</td>
							<td class="border"></td>
						</tr>	
						<tr>
							<td class="border" colspan="2">Telepon lain / Keadaan darurat / Saudara kandung</td>
							<td class="border" colspan="2">{{ $biodata->telepon_darurat }}</td>
							<td class="border"></td>
						</tr>					
					</table>
				</td>
				<td width="5%">&emsp;</td>
				<td>
					<table width="100%">
						<thead>
							<tr>
								<th class="border"><center>Bahasa</center></th>
								<th class="border"><center>Indonesia</center></th>
								<th class="border"><center>Inggris</center></th>
								<th class="border"><center>Spanyol</center></th>
								<th class="border"><center>Mandarin</center></th>
							</tr>
						</thead>
						<tbody>
							<tr align="center">
								<td class="border" align="left">Sangat Baik</td>
								<td class="border">{{ $biodata->indonesia == 'Sangat Baik' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->inggris == 'Sangat Baik' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->spanyol == 'Sangat Baik' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->mandarin == 'Sangat Baik' ? "V" : "" }}</td>
							</tr>
							<tr align="center">
								<td class="border" align="left">Baik</td>
								<td class="border">{{ $biodata->indonesia == 'Baik' ? "checked" : "" }}</td>
								<td class="border">{{ $biodata->inggris == 'Baik' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->spanyol == 'Baik' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->mandarin == 'Baik' ? "V" : "" }}</td>
							</tr>
							<tr align="center">
								<td class="border" align="left">Cukup</td>
								<td class="border">{{ $biodata->indonesia == 'Cukup' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->inggris == 'Cukup' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->spanyol == 'Cukup' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->mandarin == 'Cukup' ? "V" : "" }}</td>
							</tr>
							<tr align="center">
								<td class="border" align="left">Pasif</td>
								<td class="border">{{ $biodata->indonesia == 'Pasif' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->inggris == 'Pasif' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->spanyol == 'Pasif' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->mandarin == 'Pasif' ? "V" : "" }}</td>
							</tr>
							<tr align="center">
								<td class="border" align="left">Tidak Bisa</td>
								<td class="border">{{ $biodata->indonesia == 'Tidak Bisa' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->inggris == 'Tidak Bisa' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->spanyol == 'Tidak Bisa' ? "V" : "" }}</td>
								<td class="border">{{ $biodata->mandarin == 'Tidak Bisa' ? "V" : "" }}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
		<br>
		<table width="100%">
			<tr>
				<th class="border" align="center" colspan="6"><center>DATA KELUARGA</center></th>
			</tr>
			<tr>
				<td class="border" align="center">Hubungan</td>
				<td class="border" align="center">Nama Lengkap</td>
				<td class="border" align="center">Usia</td>
				<td class="border" align="center">Pendidikan Terakhir</td>
				<td class="border" align="center">Pekerjaan</td>
				<td class="border" align="center">No. HP</td>
			</tr>
			@foreach($biodata->keluarga as $keluarga)
			<tr>
				<td class="border" >{{$keluarga->hubungan}}</td>
				<td class="border" >{{$keluarga->nama_lengkap}}</td>
				<td class="border" >{{$keluarga->usia}}</td>
				<td class="border" >{{$keluarga->pendidikan}}</td>
				<td class="border" >{{$keluarga->pekerjaan}}</td>
				<td class="border" >{{$keluarga->no_hp}}</td>
			</tr>
			@endforeach
		</table>
		<br>{{--
		<table width="100%">
			<tr>
				<th class="border" align="center" colspan="6"><center>DATA KELUARGA, SAUDARA LAKI-LAKI dan / atau PEREMPUAN</center></th>
			</tr>
			<tr>
				<td class="border" align="center">Hubungan</td>
				<td class="border" align="center">Nama Lengkap</td>
				<td class="border" align="center">Usia</td>
				<td class="border" align="center">Pendidikan Terakhir</td>
				<td class="border" align="center">Pekerjaan</td>
				<td class="border" align="center">No. HP</td>
			</tr>
			@foreach($biodata->keluarga as $keluarga)
			<tr>
				<td class="border" >{{$keluarga->hubungan}}</td>
				<td class="border" >{{$keluarga->nama_lengkap}}</td>
				<td class="border" >{{$keluarga->usia}}</td>
				<td class="border" >{{$keluarga->pendidikan}}</td>
				<td class="border" >{{$keluarga->pekerjaan}}</td>
				<td class="border" >{{$keluarga->no_hp}}</td>
			</tr>
			@endforeach
		</table>
		<br>
		<table width="100%">
			<tr>
				<th class="border" align="center" colspan="6"><center>DATA KELUARGA (ISTRI dan / atau ANAK)</center></th>
			</tr>
			<tr>
				<td class="border" align="center">Hubungan</td>
				<td class="border" align="center">Nama Lengkap</td>
				<td class="border" align="center">Usia</td>
				<td class="border" align="center">Pendidikan Terakhir</td>
				<td class="border" align="center">Pekerjaan</td>
				<td class="border" align="center">No. HP</td>
			</tr>
			@foreach($biodata->keluarga as $keluarga)
			<tr>
				<td class="border" >{{$keluarga->hubungan}}</td>
				<td class="border" >{{$keluarga->nama_lengkap}}</td>
				<td class="border" >{{$keluarga->usia}}</td>
				<td class="border" >{{$keluarga->pendidikan}}</td>
				<td class="border" >{{$keluarga->pekerjaan}}</td>
				<td class="border" >{{$keluarga->no_hp}}</td>
			</tr>
			@endforeach
		</table>--}}
	</div>
	<div class="page break">
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
	    <hr style="border-bottom: 5px solid black;">
		<div style="border-bottom: 1px solid black; border-top: 1px solid black">
			<p>(Lembaran hal 2)</p>
		</div>
		<table width="100%" class="border">
			<tr><th colspan="9"><center>PENGALAMAN BERLAYAR</center></th></tr>
			<tr align="center">
				<td>No</td>
				<td>Nama Perusahaan</td>
				<td>Nama Kapal</td>
				<td>Tipe Kapal</td>
				<td>Bendera/Flag</td>
				<td>Rank/Jabatan</td>
				<td>Dari</td>
				<td>Sampai</td>
				<td>Alasan Berhenti</td>
			</tr>
			@php $no=1 @endphp
			@foreach($biodata->pengalaman as $pengalaman)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $pengalaman->nama_perusahaan }}</td>
				<td>{{ $pengalaman->nama_kapal }}</td>
				<td>{{ $pengalaman->tipe_kapal }}</td>
				<td>{{ $pengalaman->bendera }}</td>
				<td>{{ $pengalaman->jabatan }}</td>
				<td>{{ $pengalaman->mulai }}</td>
				<td>{{ $pengalaman->sampai }}</td>
				<td>{{ $pengalaman->alasan_berhenti }}</td>
			</tr>
			@endforeach
		</table><br>
		<p><b>* (PENGALAMAN 3 TAHUN TERAKHIR DIMULAI DARI YANG TERAKHIR)</b> <br>
		Apakah andapernah dirawat di rumah sakit disebabkan kecelakaan atau penyakit kritis, jika Ya, mohon sebutkan</p>
		<table class="border" width="100%">
			<tr>
				<th>Tahun/Bulan</th>
				<th>Jenis Penyaki/Tindakan</th>
				<th>Status Akhir</th>
				<th>Keterangan</th>
			</tr>
			@foreach($biodata->informasi->penyakit as $penyakit)
			<tr>
				<td>{{ $penyakit->tahun }}</td>
				<td>{{ $penyakit->jenis_penyakit }}</td>
				<td>{{ $penyakit->status_akhir }}</td>
				<td>{{ $penyakit->keterangan }}</td>
			</tr>
			@endforeach
		</table>
		<br>
		<table class="border" width="100%">
			<tr>
				<td>Jika pembayaran upah dikirim melalui bank, pakah anda setuju? <span><b>{{ $biodata->informasi->q2 }}</b></span></td>
			</tr>
			<tr>
				<td>Kapan anda siap mulai bekerja? <span><b>{{ $biodata->informasi->q3 }}</b></span></td>
			</tr>
			<tr>
				<td>Berapa gaji yang anda harapkan? <span><b>{{ $biodata->informasi->q4 }}</b></span></td>
			</tr>
			<tr>
				<td>Darimana anda mendapat informasi mengenai lowongan kerja ini? <span><b>{{ $biodata->informasi->q5 }}</b></span></td>
			</tr>
			<tr>
				<td>Apakah anda pernah melamar kesini sebelumnya, jika pernah sebutkan posisi dan waktunya</td>
			</tr>
			<tr>
				<td> <span><b>{{ $biodata->informasi->q6 }}</b></span></td>
			</tr>
			<tr>
				<td>Ceritakan tentang diri anda yang mungkin akan membantu penilaian kami terhadap anda :</td>
			</tr>
			<tr>
				<td> <span><b>{{ $biodata->informasi->q7 }}</b></span></td>
			</tr>
		</table>
		<br>
		<p>Semua pernyataan dalam aplikasi lamaran ini adalah benar dan sesuai keadaan sebenarnya, saya mengerti jika ada pernyataan yang terbukti tidak benar maka saya bersedia diberhentikan seketika / mendapatkan sangsi sesuai ketentuan berlaku.</p>
		<p style="padding-left: 180px">{{date('d M Y')}}</p>
		<br><br>
		<table width="100%">
			<tr align="center">
				<td>( ................................. )</td>
				<td>( ................................. )</td>
			</tr>
			<tr align="center">
				<td>Pelamar / Awak Kapal</td>
				<td>Penerima Lamaran</td>
			</tr>
		</table>
		<br>
		<table class="border" width="100%">
			<tr><th colspan="7" align="center">CHECK LIST DOKUMEN PERSYARATAN</th></tr>
			<tr>
				<th colspan="2" rowspan="2" align="center">DOKUMEN LAMPIRAN</th>
				<th colspan="2">STATUS</th>
				<th rowspan="2">MASA BERLAKU</th>
				<th rowspan="2" width="15%">KET</th>
				<th rowspan="16" width="30%">
					<p style="padding-top: 70px">
					(..................................)<br>Pelamar / Awak Kapal
					<br><br><br><br><br><br><br>
					(..................................)<br>Pemeriksa
					</p>
				</th>
			</tr>
			<tr>
				<th>ADA</th>
				<th>TDK</th>
			</tr>
			<tr>
				<td align="center">1</td>
				<td>PASPOR</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">2</td>
				<td>BUKU PELAUT</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">3</td>
				<td>KT KLN</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">4</td>
				<td>BST</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">5</td>
				<td>SURAT IZIN KELUARGA/ORTU</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">6</td>
				<td>FOTO</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">7</td>
				<td>IJAZAH TERAKHIR</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">8</td>
				<td>IJAZAH TERAKHIR</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">9</td>
				<td>KTP</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">10</td>
				<td>KK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">11</td>
				<td>AKTE LAHIR</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">12</td>
				<td>SKCK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">13</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="center">14</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>