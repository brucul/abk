@extends('main')
@section('content')
    <section class="content">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default ">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="panel-body">
                            <h4>
                                <center> --Lengkapi Dokumen Yang Ada--</center>
                            </h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>KTP</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_ktp"
                                                        value="{{ $dokumen->no_ktp }}"
                                                        placeholder="Tidak Ada Data di Database" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_ktp }}"
                                                        placeholder="Tidak Ada Data di Database" name="exp_ktp"
                                                        disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/ktp/' . $dokumen->ktp) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>AKTE</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_akte"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_akte }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_akte }}"
                                                        placeholder="Tidak Ada Data di Database" name="exp_akte"
                                                        disabled><br />
                                                </div>
                                            </div>

                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/akte/' . $dokumen->akte) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>IJAZAH</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_ijasah"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_ijasah }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_ijasah }}" name="exp_ijasah"
                                                        placeholder="Tidak Ada Data di Database" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/ijazah/' . $dokumen->ijazah) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>BUKU NIKAH</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_bnikah"
                                                        value="{{ $dokumen->no_bnikah }}"
                                                        placeholder="Tidak Ada Data di Database" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_bnikah }}" name="exp_bnikah"
                                                        placeholder="Tidak Ada Data di Database" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/buku_nikah/' . $dokumen->buku_nikah) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>KARTU KELUARGA</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_kk"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_kk }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_kk }}" name="exp_kk"
                                                        placeholder="Tidak Ada Data di Database" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/kartu_keluarga/' . $dokumen->kartu_keluarga) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>SKCK</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_skck"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_skck }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value=" {{ $dokumen->sxp_skck }}" name="sxp_skck"
                                                        placeholder="Tidak Ada Data di Database" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/skck/' . $dokumen->skck) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>BST</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_bst"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_bst }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker"
                                                        value="{{ $dokumen->exp_bst }}" name="exp_bst"
                                                        placeholder="Tidak Ada Data di Database" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/bst/' . $dokumen->bst) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>PASPOR</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_paspor"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_paspor }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" name="exp_paspor"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->exp_paspor }}" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/paspor/' . $dokumen->paspor) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>BUKU PELAUT</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_pelaut"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_pelaut }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" value="2021-01-01"
                                                        name="exp_pelaut" placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->exp_pelaut }}" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/buku_pelaut/' . $dokumen->buku_pelaut) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>PAS FOTO PUTIH</label><br />
                                            <img src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/pas_foto_putih/' . $dokumen->pas_foto_putih) }}"
                                                width="340px" height="340px">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>PAS FOTO BIRU</label><br />
                                            <img src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/pas_foto_biru/' . $dokumen->pas_foto_biru) }}"
                                                width="340px" height="340px">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>MCU</label><br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="no_midikal"
                                                        placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->no_midikal }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control datepicker" value="2021-01-01"
                                                        name="exp_medikal" placeholder="Tidak Ada Data di Database"
                                                        value="{{ $dokumen->exp_medikal }}" disabled><br />
                                                </div>
                                            </div>
                                            <embed
                                                src="{{ url('files' . '/' . $biodatass->nama_lengkap . '/uploads/mcu/' . $dokumen->mcu) }}"
                                                type="application/pdf" width="340px" height="340px">
                                            </embed>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                    <center>
                        <a href="{{ route('dokumen.cetak', $biodatass->id) }}" class="btn btn-info">Cetak Dokumen</a>
                    </center><br>
                </div>
            </div>
        </div>

    </section>
@endsection
