<div>
    <div class="modal fade" id="swotModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="swot-title">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="upsertData">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="category" id="category" value="">
                        <div class="form-group fill modal-show-validation">
                            <label>Deskripsi</label>
                            <input id="description" name="description" type="text" class="form-control"
                                placeholder="input here...." autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-outline-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
