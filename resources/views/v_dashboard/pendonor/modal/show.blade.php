<div class="modal modal-lg" id="modal-detail" tabindex="-1" aria-labelledby="modal-detail" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="">Detail Pendonor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="px-2">
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Nomor Piagam</label>
                            <div class="col">
                                <input type="text" id="no_piagam" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Nama</label>
                            <div class="col">
                                <input type="text" id="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Alamat</label>
                            <div class="col">
                                <input type="text" id="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Tempat Lahir</label>
                            <div class="col">
                                <input type="text" id="tempat_lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click','.modal-detail',function(){
        var url = "/dashboard/pendonor";
        var pendonor_id = $(this).data('id');
        $.get(url + '/' + pendonor_id, function (data) {
            $('#no_piagam').val(data.no_piagam);
            $('#nama').val(data.nama);
            $('#alamat').val(data.alamat);
            $('#tempat_lahir').val(data.tempat_lahir);
            $('#modal-detail').modal('show');
        }) 
    });
</script>