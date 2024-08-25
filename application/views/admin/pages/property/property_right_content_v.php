<div class="card">
    <div class="card-header bg-transparent header-elements-inline">
        <span class="card-title font-weight-semibold"><b> Import Excel <i class="icon-folder-upload ml-2"></i></b></span>
    </div>

    <div class="card-body p-0">
        <div class="nav nav-sidebar my-2">
            <form id="upload-excel" name="upload-excel">
                <div class="form-group row">
                    <div class="col-12 ml-1 mr-1">
                        <small class="text-warning">*Maksimal 500 baris properti import</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-11 ml-1 mr-1">
                        <input type="file" class="form-control h-auto" name="file">
                    </div>
                    <div class="col-12 ml-1 mr-1">
                        <small>Jika belum memiliki contoh dokumen upload maka klik <a target="_blank" href="<?= base_url() . "admin/property/import-sample" ?>">disini</a>.</small>
                    </div>
                    <div class="col-sm-11 ml-1 mr-1 mt-3">
                        <button type="submit" class="btn btn-block bg-primary">Import Data Properti</button>
                    </div>
                    <div class="container loader-import d-none">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="loader">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-12 font-weight-bold text-center text-teal-400 mt-3">
                                Import Data dalam Proses . . .
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-transparent header-elements-inline">
        <span class="card-title font-weight-semibold"><b> Kalkulasi Properti <i class="icon-office ml-2"></i></b></span>
    </div>
</div>
<div class="card card-body">
    <div class="media mb-3">
        <div class="mr-3 align-self-center">
            <i class="icon-city icon-2x text-teal-400 opacity-75"></i>
        </div>

        <div class="media-body">
            <h1 class="float-right font-weight-bold text-secondary total-property">0</h1>
            <h6 class="font-weight-semibold mb-0">TOTAL PROPERTI</h6>
            <span class="text-muted">Kalkulasi Semua Properti</span>
        </div>
    </div>

    <div class="progress mb-2" style="height: 0.125rem;">
        <div class="progress-bar bg-teal" style="width: 100%">
            <span class="sr-only"></span>
        </div>
    </div>

    <div>
        Semua Properti Yang Terdaftar
    </div>
</div>
<div class="card card-body">
    <div class="media mb-3">
        <div class="mr-3 align-self-center">
            <i class="icon-price-tag icon-2x text-primary-400 opacity-75"></i>
        </div>

        <div class="media-body">
            <h1 class="float-right font-weight-bold text-secondary property-sold">0</h1>
            <h6 class="font-weight-semibold mb-0">PROPERTI TERJUAL / TERSEWA</h6>
            <span class="text-muted">Kalkulasi Semua Properti terjual dan tersewa</span>
        </div>
    </div>

    <div class="progress mb-2" style="height: 0.125rem;">
        <div class="progress-bar bg-primary" style="width: 100%">
            <span class="sr-only"></span>
        </div>
    </div>

    <div>
        Berdasarkan Kategori Tersewa & Terjual
    </div>
</div>
<div class="card card-body">
    <div class="media mb-3">
        <div class="mr-3 align-self-center">
            <i class="icon-price-tag2 icon-2x text-purple-400 opacity-75"></i>
        </div>

        <div class="media-body">
            <h1 class="float-right font-weight-bold text-secondary property-available">0</h1>
            <h6 class="font-weight-semibold mb-0">PROPERTI TERSEDIA</h6>
            <span class="text-muted">Kalkulasi Semua Properti yang belum terjual / tersewa</span>
        </div>
    </div>

    <div class="progress mb-2" style="height: 0.125rem;">
        <div class="progress-bar bg-purple" style="width: 100%">
            <span class="sr-only"></span>
        </div>
    </div>

    <div>
        Properti yang Siap Dipasarkan
    </div>
</div>