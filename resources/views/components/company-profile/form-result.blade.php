
<div>
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="resultForm">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="category_brainstorming" id="category_brainstorming" value="">
                        <div class="form-group fill modal-show-validation">
                            <label>Tulis Hasil Brainstorming</label>
                            <textarea id="description" name="description" class="form-control" rows="3" style="display: none"></textarea>
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

