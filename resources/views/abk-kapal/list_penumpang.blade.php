@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    {{-- <form class="form-horizontal" role="form" action="{{route('seluruhkapal.store')}}" method="POST" enctype="multipart/form-data"> --}}
                    {{-- @csrf --}}
                    {{-- @method('PATCH') --}}

                    <div class="panel panel-default tabs">
                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                                <div class="panel panel-default">
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('seluruhkapal.pulang') }}" method="POST">
                                        @csrf
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $sub_title }}</h3><br></br>
                                            <h3 class="panel-title">Nama Kapal:{{ $nama_kapal }}</h3><br></br>
                                            <h3 class="panel-title">Jenis Kapal:{{ $jenis_kapal }}</h3><br></br>
                                            <h3 class="panel-title">Bendera:{{ $bendera }}</h3><br></br>
                                            <h3 class="panel-title">Tanggal Pemberangkatan:{{ $rencana_pemberangkatan }}
                                            </h3><br><br><br>
                                            <a href="{{ route('dataseluruh.print', $id) }}" class="btn btn-info">Print</a>
                                            <a href="{{ route('dataseluruh.download', $id) }}"
                                                class="btn btn-info">Download
                                                PDF</a>
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span
                                                            class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span
                                                            class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kebangsaan</th>
                                                        <th>Alamat</th>
                                                        <th>Nomor HP</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($penumpang as $pen)


                                                        <tr>
                                                            <td>{{ $pen->nama_lengkap }}</td>
                                                            <td>{{ $pen->kebangsaan }}</td>
                                                            <td>{{ $pen->alamat }}</td>
                                                            <td>{{ $pen->no_hp }}</td>
                                                            <td>{{ $pen->email }}</td>
                                                            <td>{{ $pen->status }}</td>
                                                            <td>
                                                                <div>
                                                                    <input type="checkbox" value="{{ $pen->id }}" name="dipilih[]" style="text-align: center">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success pull-right">Pulang
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    {{-- </form> --}}
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
