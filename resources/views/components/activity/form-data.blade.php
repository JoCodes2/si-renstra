
<div>
    <div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xxl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Form Data Aktivitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="upsertData">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group fill modal-show-validation">
                                    <label>Misi</label>
                                    <select class="form-control" name="id_company_profile" id="id_company_profile" >
                                        <option value="" selected disabled>-- Pilih --</option>
                                    </select>
                                </div>
                                <div class="form-group fill modal-show-validation">
                                    <label>Kategori Aktivitas</label>
                                    <select class="form-control" name="category_activity" id="category_activity" >
                                        <option value="" selected disabled>-- Pilih --</option>
                                        <option value="internal"></option>
                                        <option value="economic-empowerment"></option>
                                        <option value="partnership"></option>
                                    </select>
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Kegiatan</label>
                                    <input id="activity_name" name="activity_name" type="text" class="form-control" placeholder="Masukkan nama aktivitas..." autocomplete="off">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Nama Supervisor</label>
                                    <input id="supervisor_name" name="supervisor_name" type="text" class="form-control" placeholder="Masukkan nama pengawas..." autocomplete="off">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Divisi</label>
                                    <input id="devisi" name="devisi" type="text" class="form-control" placeholder="Masukkan divisi..." autocomplete="off">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>PIC</label>
                                    <input id="pic" name="pic" type="text" class="form-control" placeholder="Masukkan PIC..." autocomplete="off">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group fill modal-show-validation">
                                    <label>Target</label>
                                    <input id="target" name="target" type="text" class="form-control" placeholder="Masukkan target..." autocomplete="off">
                                </div>
                                 <div class="form-group fill modal-show-validation">
                                    <label>Realisasi</label>
                                    <input id="realization" name="realization" type="text" class="form-control" placeholder="Masukkan realisasi..." autocomplete="off">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Pencapaian</label>
                                    <input id="achievement" name="achievement" type="text" class="form-control" placeholder="Masukkan pencapaian..." autocomplete="off">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Tenggat Waktu</label>
                                    <input id="deadline" name="deadline" type="date" class="form-control">
                                </div>

                                <div class="form-group fill modal-show-validation">
                                    <label>Keterangan</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi..."></textarea>
                                </div>
                            </div>
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

