<div class="row">

    <div class="col-lg-12 col-md-3 col-sm-12">
        <!-- Property Right Content -->
        <?php
        $this->load->view('admin/pages/property/property_up_content_v');
        ?>
        <!-- End Property Right Content -->
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                    <li class="nav-item"><a href="#justified-right-icon-tab1" class="nav-link active show font-weight-bold" data-toggle="tab"><b>Formulir Tambah Properti <i class="icon-file-plus2 ml-2"></i></b> </a></li>
                    <li class="nav-item"><a href="#justified-right-icon-tab2" class="nav-link font-weight-bold" data-toggle="tab"><b>Daftar Properti <i class="icon-menu7 ml-2"></i></b></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="justified-right-icon-tab1">
                        <!-- Form Add -->
                        <?php
                        $this->load->view('admin/pages/property/form_add_v');
                        ?>
                        <!-- End Form Add -->
                    </div>

                    <div class="tab-pane fade" id="justified-right-icon-tab2">
                        <!-- Property List -->
                        <?php
                        $this->load->view('admin/pages/property/property_list_v');
                        ?>
                        <!-- End Property List -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php
$this->load->view('admin/pages/property/modal_update_v.php');
?>
<!-- Modal Edit -->