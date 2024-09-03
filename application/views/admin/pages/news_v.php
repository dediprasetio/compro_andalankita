<div class="card card-body">
    <div class="media align-items-center align-items-md-start flex-column flex-md-row">
        <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
            <i class="icon-puzzle3 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
        </a>

        <div class="media-body text-center text-md-left">
            <h6 class="media-title font-weight-semibold">Tambah
                <?= strtolower($page_title) ?> baru?
            </h6>
            Tambahkan
            <?= strtolower($page_title) ?> terbaru anda disini.
        </div>

        <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i
                class="icon-add-to-list"></i> &nbsp; Tambahkan
            <?= $page_title ?> Baru
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title text-teal font-weight-bold">Daftar <?= $page_title ?></h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-user">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Foto</th>
                        <th>Title</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Status Agenda</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table-body-user">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">Form tambah
                    <?= strtolower($page_title) ?> baru
                </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add" id="add-user">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Judul <?= $page_title ?> <br><sub class="text-teal">(Judul akan ditampilkan pada daftar agenda.)</sub></label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Deskripsi Singkat</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="short_description">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control h-auto" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Konten</label>
                        <div class="col-sm-9">
                            <textarea name="content" id="editor_full" class="left-auto">
                            </textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label class="col-form-label col-sm-3">Url Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                    foreach($data['mst_category_list'] as $row){
                                        echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Tanggal Publish</label>
                        <div class="col-sm-9">
							<input class="form-control" type="date" name="publish_start_date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status_id">
                                <option value="">-- Pilih Status --</option>
                                <?php
                                    foreach($data['status_list'] as $row){
                                        echo '<option value="'.$row['status_id'].'">'.$row['status'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Author</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="News publisher" class="form-control" name="author">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Add -->

<!-- Modal Edit -->
<div id="modal_form_edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="edit" id="edit">
                <div class="modal-body">
                <div class="form-group row">
                        <label class="col-form-label col-sm-3">Judul <?= $page_title ?> <br><sub class="text-teal">(Judul akan ditampilkan pada daftar agenda.)</sub></label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="news_id" id="news_id">
                            <input type="text" placeholder="" class="form-control" name="title" id="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Deskripsi Singkat</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="short_description" id="short_description">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control h-auto" name="image" id="image">
                        </div>
                        <div class="col-sm-5">
                            <img src="<?= base_url() ?>public/global-images/events/57eb628ccbc1cbb3a27b583b0edb31f3.jpg" class=" mr-2" height="45" width="45" alt="">
                            <label for="" id="foto_existing"></label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Konten</label>
                        <div class="col-sm-9">
                            <textarea name="content" id="e_editor_full" class="left-auto">
                            </textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label class="col-form-label col-sm-3">Url Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                    foreach($data['mst_category_list'] as $row){
                                        echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Tanggal Agenda</label>
                        <div class="col-sm-9">
							<input class="form-control" type="date" name="publish_start_date" id="publish_start_date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status_id" id="status_id">
                                <option value="">-- Pilih Status --</option>
                                <?php
                                    foreach($data['status_list'] as $row){
                                        echo '<option value="'.$row['status_id'].'">'.$row['status'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Author</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="News publisher" class="form-control" name="author" id="author">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->