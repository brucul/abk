@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="datakapal-tab" data-toggle="tab" href="#datakapal" role="tab"
                                    aria-controls="datakapal" aria-selected="true">Data Kapal Berlayar</a>
                            </li>
                        </ul>
                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="datakapal" role="tabpanel" aria-labelledby="datakapal-tab">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">{{ $title }}</h3><br><br><br>
                                        <a href="{{ route('datakapal.create') }}" class="btn btn-info">Tambah Kapal</a>
                                    </div>
                                    <form enctype="multipart/form-data" class="form-horizontal" role="form"
                                        action="{{ route('datakapal.pulang') }}" method="POST">
                                        @csrf
                                        <div class="panel-body">
                                            <div class="row">

                                                <table class="table datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Nama Kapal</th>
                                                            <th>Jenis Kapal</th>
                                                            <th>Bendera Kapal</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $no = 1;
                                                        @endphp
                                                        @foreach ($kapal as $k)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $k->nama_kapal }}</td>
                                                            <td>{{ $k->jenis }}</td>
                                                            <td>{{ $k->bendera }}</td>
                                                            <td>
                                                                <a href="{{ route('datakapal.edit', $k->id) }}" class="btn btn-info"> Edit</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="panel-footer">
                                                <button type="submit" class="btn btn-success pull-right">Pulangkan </button>
                                            </div>
                                    </form>
                                </div>
                            </diV>
                        </div>
                    </div>
                </div>
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
