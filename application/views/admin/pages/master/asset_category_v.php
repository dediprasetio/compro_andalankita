
<div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
    <div class="card card-body">
    <div class="media align-items-center align-items-md-start flex-column flex-md-row">
        <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
            <i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
        </a>

        <div class="media-body text-center text-md-left">
            <h6 class="media-title font-weight-semibold">Jenis Properti</h6>
            Anda dapat menambahkan jenis properti baru.
        </div>

        <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Tambahkan Jenis Properti</button>
    </div>
</div>
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title text-teal font-weight-bold">Pemilik Properti</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-asset-category">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Jenis Properti</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body-asset-category">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM TAMBAH JENIS ASET</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-asset-category" id="add-asset-category">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis Aset</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="asset_category_name">
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

            <form action="#" class="form-horizontal" name="edit-asset-category" id="edit-asset-category">
                <div class="modal-body">
                <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="asset_category_id" id="asset_category_id">
                            <input type="text" placeholder="" class="form-control" name="asset_category_name" id="asset_category_name">
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