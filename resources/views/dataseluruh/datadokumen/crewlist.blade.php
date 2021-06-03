<!DOCTYPE html>
<html>
<head>
	<title>Crew List</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--@include('templates._header_admin')--}}
</head>
<body class="page">
	<style type="text/css">
		.page{
			background: white;
			padding: 50px 20px 50px 20px;
		}
		.border{
			border: 1px solid black;
			font-size: 10px;
		}
		table, th, td
		{
			border-collapse:collapse;
			border: 1px solid black;
			font-size: 10px;
		}
	</style>
	<center><span><b>CREW LIST</b></span></center><br>
	<span><b>Kind of Vessel</b></span>
	<table>
		<thead>
			<tr>
				<th rowspan="2">NO.</th>
				<th rowspan="2">NAME</th>
				<th rowspan="2">PLACE/DATE OF BIRTH</th>
				<th rowspan="2">POSITION</th>
				<th rowspan="2">HEIGHT/WEIGHT</th>
				<th colspan="3">WORKING EXPERIENCE</th>
				<th colspan="2">PASSPORT</th>
				<th colspan="2">SEAMAN BOOK</th>
				<th rowspan="2">NO. BST</th>
			</tr>
			<tr>
				<th width="20%">VESSEL NAME, KIND OF VESSEL, POSITION, JOIN PORT</th>
				<th>SIGN ON</th>
				<th>SIGN OFF</th>
				<th>NO.</th>
				<th>EXP. DATE</th>
				<th>NO.</th>
				<th>EXP. DATE</th>
			</tr>
		</thead>
		<tbody>
			@php
			$no = 1;
			@endphp
			@foreach($penumpang as $p)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$p->nama_lengkap}}</td>
				<td>{{$p->tanggal_lahir}}</td>
				<td>
					@foreach($p->pengalaman as $pengalaman)
					{{$pengalaman->jabatan}}<br>
					@endforeach
				</td>
				<td>{{$p->tinggi_badan}}/{{$p->berat_badan}}</td>
				<td>
					@foreach($p->pengalaman as $pengalaman)
					{{$pengalaman->nama_perusahaan}}<br>
					@endforeach
				</td>
				<td>
					@foreach($p->pengalaman as $pengalaman)
					{{substr($pengalaman->mulai,0,4)}}<br>
					@endforeach
				</td>
				<td>
					@foreach($p->pengalaman as $pengalaman)
					{{substr($pengalaman->sampai,0,4)}}<br>
					@endforeach
				</td>
				<td>{{$p->dokumen->no_paspor}}</td>
				<td>{{$p->dokumen->exp_paspor}}</td>
				<td>{{$p->dokumen->no_pelaut}}</td>
				<td>{{$p->dokumen->exp_pelaut}}</td>
				<td>{{$p->dokumen->no_bst}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>