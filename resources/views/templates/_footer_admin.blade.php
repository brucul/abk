<!-- START PLUGINS -->

<script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type="text/javascript" src="{{ asset('template/js/plugins/icheck/icheck.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('template/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js') }}">
</script>

<script type="text/javascript" src="{{ asset('template/js/plugins/morris/raphael-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/rickshaw/d3.v3.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}">
</script>


<script>
    $(document).ready(function() {

        var i = 1;

        $("#addRow").click(function() {
            i++;
            $('#addcolum').append(
                '<div id="row' + i + '">' +
                '<input type="button" class="btn btn-primary btn_remove " value="remove" id="' + i +
                '" />' +
                '<h4 >' +
                '<center> -- Masukan Data Pengalaman --</center>' +
                '</h4><br><br>' +
                '<div class="row" id="addcolum">' +
                '<div class="form-group">' +
                '<label class="col-md-2">Nama Perusahaan</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="nama_perusahaan[]" placeholder="Nama Perusahaan" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Nama Kapal</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="nama_kapal[]" placeholder="Nama Kapal" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Tipe Kapal</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="tipe_kapal[]" placeholder="Tipe Kapal" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Bendera</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="bendera[]" placeholder="Bendera" />' +
                '</div>' +
                '</div>' +


                '<div class="form-group">' +
                '<label class="col-md-2">Jabatan</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="jabatan[]" placeholder="jabatan" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Mulai</label>' +
                '<div class="col-md-10">' +
                '<input type="date" class="form-control datepicker" name="mulai[]" placeholder="Mulai" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Sampai</label>' +
                '<div class="col-md-10">' +
                '<input type="date" class="form-control datepicker" name="sampai[]" placeholder="sampai" />' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2">Alasan Berhenti</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="alasan_berhenti[]" placeholder="Alasan Berhenti" />' +
                '</div>' +
                '</div>' +
                '</div><br><br>' +
                '</div>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>

<script type="text/javascript" src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/owl/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('template/js/plugins/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ asset('template/js/plugins/dropzone/dropzone.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/fileinput/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/filetree/jqueryFileTree.js') }}"></script>
<script>
    $(function() {
        $("#ktp").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "pdf."
        });
        $("#akte").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#ijazah").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#buku_nikah").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#kartu_keluarga").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#skck").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#bst").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#paspor").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#buku_pelaut").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#pas_foto_putih").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#pas_foto_biru").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#mcu").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });

    });

</script>


<script>
    $(document).ready(function() {

        var i = 1;

        $("#addButton").click(function() {
            i++;
            $('#addKeluarga').append(
                '<div id="kel' + i + '">' +
                '<input type="button" class="btn btn-primary btn_remove_keluarga" value="remove" id="' + i +
                '" />' +
                '<h4 >' +
                '<center> -- Masukan Data Keluarga --</center>' +
                '</h4><br><br>' +
                '<div class="row" id="addKeluarga">' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Hubungan Keluarga</label>' +
                '<div class="col-md-10">'+
                '<input type="text" class="form-control" name="hubungan[]" placeholder="ibu/ayah" required/>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Nama Lengkap</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="nama_lengkap_saudara[]" placeholder="Nama Lengkap" required/>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Usia</label>' +
                '<div class="col-md-10">' +
                '<input type="number" class="form-control" name="usia[]" placeholder="Usia" required/>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Pendidikan</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="pendidikan[]" placeholder="Pendidikan" required/>' +
                '</div>' +
                '</div>' +

                '<div class="form-group">' +
                '<label class="col-md-2 ">Pekerjaan</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="pekerjaan[]" placeholder="pekerjaan" required/>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Nomor HP</label>' +
                '<div class="col-md-10">' +
                '<input type="number" class="form-control" name="no_hp[]" placeholder="No HP" required/>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="col-md-2 ">Urutan Keluarga</label>' +
                '<div class="col-md-10">' +
                '<input type="text" class="form-control" name="urutan_keluarga[]" placeholder="Urutan Keluarga" required/>' +
                '</div>' +
                '</div>' +
                '</div><br><br>' +
                '</div>');
        });

        $(document).on('click', '.btn_remove_keluarga', function() {
            var button_id = $(this).attr("id");
            $('#kel' + button_id + '').remove();
        });
    });
</script>

<script>
    $(document).ready(function() {

        var i = 1;

        $("#addSakit").click(function() {
            i++;
            $('#penyakit').append(
                '<div class="form-group row" id="penyakit' + i + '">' +
                '<div class="col-md-2">' +
                '<input type="text" class="form-control" name="add_tahun[]" placeholder="Tahun/Bulan" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<input type="text" class="form-control" name="add_penyakit[]" placeholder="Jenis Penyakit/Tindakan" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<input type="text" class="form-control" name="add_status_akhir[]" placeholder="Status Akhir" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<input type="text" class="form-control" name="add_keterangan[]" placeholder="Keterangan" />' +
                '</div>' +
                '<div class="col-md-1">' +
                '<button class="btn btn-primary btn_remove_penyakit" id="' + i + '"><center>' +
                '<i class="fa fa-times"></i></center></button>' +
                '</div>' +
                '</div>');
        });

        $(document).on('click', '.btn_remove_penyakit', function() {
            var button_id = $(this).attr("id");
            $('#penyakit' + button_id + '').remove();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#deleteBiodata').on("show.bs.modal", (e) => {

            $('#text-delete').text("Yakin ingin Menghapus "+$(e.relatedTarget).data('name')+" ?")

            $('.delete_user').click( () => {
                $.ajax({
                    url : "/seluruhkapal/"+$(e.relatedTarget).data('id'),
                    method : "POST",
                    cache : false,
                    data : {
                        _method: "DELETE",
                    },
                    success : (res) => {
                        location.reload()
                    }
                })
            })
        })

    })
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#deleteKeluarga').on("show.bs.modal", (e) => {

            $('#text-delete').text("Yakin ingin Menghapus "+$(e.relatedTarget).data('name')+" ?")

            $('.delete_keluarga').click( () => {
                $.ajax({
                    url : "/keluarga/"+$(e.relatedTarget).data('id'),
                    method : "POST",
                    cache : false,
                    data : {
                        _method: "DELETE",
                    },
                    success : (res) => {
                        location.reload()
                    }
                })
            })
        })

    })
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#deletePengalaman').on("show.bs.modal", (e) => {

            $('#text-delete').text("Yakin ingin Menghapus Pengalaman di "+$(e.relatedTarget).data('name')+" ?")

            $('.delete_pengalaman').click( () => {
                $.ajax({
                    url : "/pengalaman/"+$(e.relatedTarget).data('id'),
                    method : "POST",
                    cache : false,
                    data : {
                        _method: "DELETE",
                    },
                    success : (res) => {
                        location.reload()
                    }
                })
            })
        })

    })
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#deletePenyakit').on("show.bs.modal", (e) => {

            $('#text-delete-penyakit').text("Yakin ingin Menghapus Penyakit "+$(e.relatedTarget).data('name')+" ?")

            $('.delete_penyakit').click( () => {
                $.ajax({
                    url : "/informasi/"+$(e.relatedTarget).data('id'),
                    method : "POST",
                    cache : false,
                    data : {
                        _method: "DELETE",
                    },
                    success : (res) => {
                        location.reload()
                    }
                })
            })
        })

    })
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#deleteHistory').on("show.bs.modal", (e) => {

            $('#text-delete-history').text("Yakin ingin Menghapus History "+$(e.relatedTarget).data('name')+" ?")

            $('.delete_history').click( () => {
                $.ajax({
                    url : "/history/"+$(e.relatedTarget).data('id'),
                    method : "POST",
                    cache : false,
                    data : {
                        _method: "DELETE",
                    },
                    success : (res) => {
                        location.reload()
                    }
                })
            })
        })

    })
</script>

<script type="text/javascript" src="{{ asset('template/js/settings.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/actions.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('template/js/demo_dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap-file-input.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/js/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>

<!-- END TEMPLATE -->
