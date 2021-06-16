@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <!-- START PRIMARY PANEL -->
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">{{$sub_title}}</h3>
            </div>
            <form action="{{ route('pengalaman.update', $pengalaman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-md-2">Nama Perusahaan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama_perusahaan" value="{{ $pengalaman->nama_perusahaan }}" placeholder="Nama Perusahaan" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Nama Kapal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama_kapal" value="{{ $pengalaman->nama_kapal }}" placeholder="Nama Kapal" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Tipe Kapal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tipe_kapal" value="{{ $pengalaman->tipe_kapal }}" placeholder="Tipe Kapal" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Bendera</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bendera" value="{{ $pengalaman->bendera }}" placeholder="Bendera" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Jabatan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="jabatan" value="{{ $pengalaman->jabatan }}" placeholder="jabatan" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Mulai</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control datepicker" name="mulai" value="{{ $pengalaman->mulai }}" placeholder="Mulai" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Sampai</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control datepicker" name="sampai" value="{{ $pengalaman->sampai }}" placeholder="sampai" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Alasan Berhenti</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="alasan_berhenti" value="{{ $pengalaman->alasan_berhenti }}" placeholder="Alasan Berhenti" required/>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default" onclick="javascript:history.go(-1)">Kembali</button>
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>                      
    </div>
    <!-- END PRIMARY PANEL -->
</div>
</section>
@endsection
