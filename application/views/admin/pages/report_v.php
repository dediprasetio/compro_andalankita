<div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <div class="card card-body">
            <div class="media align-items-center align-items-md-start flex-column flex-md-row">
                <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
                    <i class="icon-calendar text-teal-400 border-teal-400 border-3 rounded-round p-2"></i>
                </a>

                <div class="media-body text-center text-md-left">
                    <h6 class="media-title font-weight-semibold text-teal">LAPORAN TRANSAKSI PROPERTI</h6>
                    Buat laporan transaksi anda dalam bentuk dokumen secara periode sesuai yang dibutuhkan.
                </div>
            </div>
        </div>
        <!-- Invoice archive -->
        <div class="card">

            <div class="card-body">
                <form action="#" class="form-horizontal" name="proccess-report" id="proccess-report">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-success">Tanggal Awal</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control border-success" name="effective_start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-purple">Tanggal Akhir</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control border-purple" name="effective_end_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2 font-weight-semibold text-warning"></label>
                            <div class="col-lg-10">
                                <button type="submit" class="btn bg-info">Proses Laporan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <!-- /invoice archive -->
    </div>
</div>

<div class="row report-list-view d-none">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card card-body">
            <table id="table-transaction-report" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Properti</th>
                        <th>Agen</th>
                        <th>Owner</th>
                        <th>Pembeli</th>
                        <th>Tanggal (Beli / Jual)</th>
                    </tr>
                </thead>
                <tbody id="body-report-list">

                </tbody>
            </table>
        </div>
    </div>
</div>