<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="text-teal font-weight-bold"><?= $data['page']->short_description?></h5>
            </div>
            <div class="card-body">
                <form action="#" class="form-horizontal" name="edit" id="edit">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Judul Halaman
                            </label>
                            <div class="col-sm-9">
                                <input type="hidden" placeholder="" class="form-control" name="page_id" id="page_id" value="<?= $data['page']->page_id ?>">
                                <input type="text" placeholder="" class="form-control" name="page_title" id="page_title" value="<?= $data['page']->page_title ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Deskripsi Singkat</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="form-control" name="short_description"
                                    id="short_description" value="<?= $data['page']->short_description ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Foto</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control h-auto" name="photo" id="photo">
                            </div>
                            <div class="col-sm-5" id="curent_photo">
                                <img src="<?= base_url() ?>public/global-images/pages/<?= $data['page']->photo  ?>"
                                    class=" mr-2" height="45" width="45" alt="">
                                <label for="" id="foto_existing"><?= $data['page']->photo ?></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Konten</label>
                            <div class="col-sm-9">
                                <textarea name="page_content" id="editor_full" class="left-auto">
                                    <?= $data['page']->page_content ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Clear</button>
                            <button type="submit" class="btn bg-primary">Submit form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>