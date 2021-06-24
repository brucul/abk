@extends('main')
@section('content')
<section class="content" >
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                {{--  <form class="form-horizontal" role="form" action="{{route('seluruhkapal.store')}}" method="POST" enctype="multipart/form-data">  --}}
                    {{--  @csrf  --}}
                    {{--  @method('PATCH')  --}}

                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="true">{{$title}}</a>
                            </li>
                        </ul>

                        <div class="panel-body tab-content" id="myTabContent">
                            <div class="tab-pane active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{$sub_title}}</h3><br><br><br>
                                            {{--  <a href="{{route('pendaftaran.index')}}" class="btn btn-info">Daftar Baru</a>  
                                            <ul class="panel-controls">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul> --}}
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Nama Kapal</th>
                                                        <th>Keterangan</th>
                                                        <th>Tanggal Berangkat/Pulang</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no=1; @endphp
                                                    @foreach ($history as $history)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$history->biodata->nama_lengkap}}</td>
                                                        <td>{{$history->kapal->nama_kapal}}</td>
                                                        <td>{{$history->keterangan}}</td>
                                                        <td>{{$history->tanggal}}</td>
                                                        <td>
                                                            <button type="button" data-id="{{ $history->id }}" data-name="{{ $history->biodata->nama_lengkap }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteHistory"><i class="fa fa-times"></i> Hapus</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>

                        </div>

                    </div>
                {{--  </form>  --}}
            </div>
        </div>
    </div>
</section>
{{-- Modal Delete --}}
<div class="modal modal-default fade" id="deleteHistory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="deleteUser">Delete User</h3>
            </div>
            <div class="modal-body">
                <h5 id="text-delete-history"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger delete_history"><i class="fa fa-trash"></i> Hapus Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
