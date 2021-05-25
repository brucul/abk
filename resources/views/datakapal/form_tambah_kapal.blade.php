@extends('main')
@section('content')
<section class="content" >
<h4><center> Masukan Data Kapal</center></h4>
    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{route('datakapal.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Nama Kapal</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama_kapal" required placeholder="masukan nama kapal"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Jenis Kapal</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="jenis_kapal" required placeholder="masukan jenis kapal"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Bendera</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="bendera" required placeholder="masukan bendera kapal"/>
            </div>

        </div>
        <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-9">
        <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
        </div>
    </div>
</form>
</div>
@endsection
