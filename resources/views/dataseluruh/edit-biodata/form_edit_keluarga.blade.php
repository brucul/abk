@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <!-- START PRIMARY PANEL -->
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">{{$sub_title}}</h3>
            </div>
            <form action="{{ route('keluarga.update', $keluarga->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="panel-body">

                    <div class="form-group row">
                        <label class="col-md-2 ">Hubungan Keluarga</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hubungan" placeholder="ibu/ayah" value="{{ $keluarga->hubungan}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Nama Lengkap</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama_lengkap_saudara" placeholder="Nama Lengkap" value="{{ $keluarga->nama_lengkap}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Usia</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="usia" placeholder="Usia" value="{{ $keluarga->usia}}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Pendidikan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" value="{{ $keluarga->pendidikan }}" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 ">Pekerjaan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan" value="{{ $keluarga->pekerjaan }}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Nomor HP</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="no_hp" placeholder="No HP" value="{{ $keluarga->no_hp }}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 ">Urutan Keluarga</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="urutan_keluarga" placeholder="Urutan Keluarga" value="{{ $keluarga->urutan_keluarga }}" required/>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>                      
    </div>
    <!-- END PRIMARY PANEL -->
</div>
</section>
@endsection
