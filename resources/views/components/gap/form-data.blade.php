
<div>
    <div class="modal fade" id="gapModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gap-title">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="upsertData">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="id_swot" id="id_swot" value="">
                        <div class="form-group fill modal-show-validation">
                            <label>Current State</label>
                            <input id="current_state" name="current_state" type="text" class="form-control"
                                placeholder="input here...." autocomplete="off">
                        </div>
                        <input type="hidden" id="hidden_gap" name="gap">
                        <div class="form-group fill modal-show-validation">
                            <label>Gap</label>
                            <input id="gap" type="text" class="form-control"
                                placeholder="input here...." autocomplete="off">
                        </div>
                         <div class="form-group fill modal-show-validation">
                            <label>Planing</label>
                            <textarea name="planing" id="planing" class="form-control" style="display: none"></textarea>
                            <div id="summernote" ></div>
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
