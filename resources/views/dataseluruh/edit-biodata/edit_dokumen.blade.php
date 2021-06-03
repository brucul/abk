@extends('main')
@section('content')
<section class="content">
    <div class="col-md-12">
        <!-- START PRIMARY PANEL -->
        <div class="panel panel-primary">
            <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{ route('dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="panel-heading">
                    <h3 class="panel-title">{{$sub_title}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>KTP</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_ktp" placeholder="NO KTP" value="{{ $dokumen->no_ktp }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="exp_ktp" value="{{ $dokumen->exp_ktp }}"><br/>
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="ktp" data-filename-placement="inside" title="{{ $dokumen->ktp }}" accept="application/pdf, image/*" value="{{ $dokumen->ktp }}"/>
                                    {{--<input type="file" id="ktp" name="ktp" accept="application/pdf, image/*" value="{{ $dokumen->ktp }}"/>--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>AKTE</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_akte" placeholder="NO AKtE" value="{{ $dokumen->no_akte }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="exp_akte" value="{{ $dokumen->exp_akte }}"><br/>
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="akte" data-filename-placement="inside" title="{{ $dokumen->akte }}" accept="application/pdf, image/*" value="{{ $dokumen->akte }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>IJAZAH</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_ijasah" placeholder="NO IJAZAH" value="{{ $dokumen->no_ijasah }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" name="exp_ijasah" value="{{ $dokumen->exp_ijasah }}"><br/>
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="ijazah" data-filename-placement="inside" title="{{ $dokumen->ijazah }}" accept="application/pdf, image/*" value="{{ $dokumen->ijazah }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Buku Nikah</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_bnikah" placeholder="NO BUKU NIKAH" value="{{ $dokumen->no_bnikah }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_bnikah }}" name="exp_bnikah"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="buku_nikah" data-filename-placement="inside" title="{{ $dokumen->buku_nikah }}" accept="application/pdf, image/*" value="{{ $dokumen->buku_nikah }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Kartu Keluarga</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_kk" placeholder="NO KARTU KELUARGA" value="{{ $dokumen->no_kk }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_kk }}" name="exp_kk"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="kartu_keluarga" data-filename-placement="inside" title="{{ $dokumen->kartu_keluarga }}" accept="application/pdf, image/*" value="{{ $dokumen->kartu_keluarga }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>SKCK</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_skck" placeholder="NO SKCK" value="{{ $dokumen->no_skck }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_skck }}" name="exp_skck"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="skck" data-filename-placement="inside" title="{{ $dokumen->skck }}" accept="application/pdf, image/*" value="{{ $dokumen->skck }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>BST</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_bst" placeholder="NO BST" value="{{ $dokumen->no_bst }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_bst }}" name="exp_bst"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="bst" data-filename-placement="inside" title="{{ $dokumen->bst }}" accept="application/pdf, image/*" value="{{ $dokumen->bst }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>PASPOR</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_paspor" placeholder="NO PASPOR" value="{{ $dokumen->no_paspor }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_paspor }}" name="exp_paspor"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="paspor" data-filename-placement="inside" title="{{ $dokumen->paspor }}" accept="application/pdf, image/*" value="{{ $dokumen->paspor }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>BUKU PELAUT</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_pelaut" placeholder="NO BUKU PELAUT" value="{{ $dokumen->no_pelaut }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_pelaut }}" name="exp_pelaut"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="buku_pelaut" data-filename-placement="inside" title="{{ $dokumen->buku_pelaut }}" accept="application/pdf, image/*" value="{{ $dokumen->buku_pelaut }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>PAS FOTO PUTIH</label><br />
                                    <input type="file" class="fileinput btn-danger" name="pas_foto_putih" data-filename-placement="inside" title="{{ $dokumen->pas_foto_putih }}" accept="application/pdf, image/*" value="{{ $dokumen->pas_foto_putih }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>PAS FOTO BIRU</label><br />
                                    <input type="file" class="fileinput btn-danger" name="pas_foto_biru" data-filename-placement="inside" title="{{ $dokumen->pas_foto_biru }}" accept="application/pdf, image/*" value="{{ $dokumen->pas_foto_biru }}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>MCU</label><br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="no_midikal" placeholder="NO MCU" value="{{ $dokumen->no_midikal }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control datepicker" value="{{ $dokumen->exp_medikal }}" name="exp_medikal"><br />
                                        </div>
                                    </div>
                                    <input type="file" class="fileinput btn-danger" name="mcu" data-filename-placement="inside" title="{{ $dokumen->mcu }}" accept="application/pdf, image/*" value="{{ $dokumen->mcu }}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="Submit" class="btn btn-primary pull-right">Simpan</button>
                </div> 
            </form>                           
        </div>
        <!-- END PRIMARY PANEL -->
    </div>
</section>
@endsection