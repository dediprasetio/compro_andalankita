<style>
    #slider {
        overflow: hidden;
    }

    @keyframes slider {
        0% {
            left: 0;
        }

        30% {
            left: 0;
        }

        33% {
            left: -100%;
        }

        63% {
            left: -100%;
        }

        66% {
            left: -200%;
        }

        95% {
            left: -200%;
        }

        100% {
            left: 0;
        }
    }

    #slider figure {
        width: 300%;
        position: relative;
        animation: 9s slider infinite;
    }

    #slider figure:hover {
        /*animation-play-state: paused; enable for pause on hover*/
    }

    #slider figure img {
        width: 33.333333333%;
        height: 100%;
        float: left;
    }
</style>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Agenda</h1>
                <span>Agenda Kami</span>
            </div>
        </div>
    </div>
</div>

<!-- <div class="team mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/<?= $data['agenda_detail']->photo ?>" alt="" height="600">
                    <div class="down-content">
                        <?= $data['agenda_detail']->content ?>
                        <h4>Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare... <a href="#" class="">Lihat Detail</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="single-services mb-5">
    <div class="container">
        <div class="row" id="tabs">
            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="<?= base_url() ?>public/global-images/events/<?= $data['agenda_detail']->photo ?>"
                            alt="">
                        <h4>
                            <?= $data['agenda_detail']->title ?>
                        </h4>
                        <span class="text-muted"><b>
                                <?= $data['agenda_detail']->location ?>
                            </b>, 05 January 2023</span>
                        <br><br>
                        <p> <b>KOPERASI KARANGJAYA</b>
                            <?= $data['agenda_detail']->content ?>
                        </p>
                    </article>
                </section>
            </div>
            <div class="col-md-4">
                <!-- <img src="<?= base_url() ?>public/global-images/events/<?= $data['agenda_detail']->photo ?>" style="width: 100%" alt=""> -->
                <div id="slider">
                    <figure>
                        <?php
                            foreach($data['advertisement'] as $row){
                                echo '<img src="'.base_url().'public/global-images/advertisement/'.$row['photo'].'">';
                            }
                        ?>
                    </figure>
                </div>
                <div class="more-info about-info" style="margin-top: 45px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="more-info-content">
                                    <div class="row">
                                        <div class="col-md-12 align-self-center">
                                            <div class="right-content mt-4">
                                                <span>Koperasi Jasa Angkutan</span>
                                                <h5> <strong>Trayek <em>Karanganyar Jaya</em></strong> </h5>
                                                <p>KONTAN.CO.ID - JAKARTA. Kasus yang terjadi pada Koperasi Simpan
                                                    Pinjam (KSP) Sejahtera Bersama telah memasuki babak persidangan.
                                                    Dimana, ada dua terdakwa dalam kasus ini yakni Iwan Setiawan dan
                                                    Dang Zaeny.</p>
                                            </div>
                                            <hr>
                                            <div class="group-title mt-4">
                                                <span>Agenda Terbaru</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="">#1</a>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <!-- <span>Title ini menunjukan judul</span> -->
                                                            <a href=""><h6 class="">Kasus KSP Sejahtera Bersama Masuk Persidangan, Ini Kata Kuasa Hukum Nasabah</h6></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="">#2</a>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <!-- <span>Title ini menunjukan judul</span> -->
                                                            <a href=""><h6 class="">KemenKopUKM Bentuk Tim Khusus Tangani Koperasi Bermasalah, Apa yang Harus Dilakukan?</h6></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="">#3</a>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <!-- <span>Title ini menunjukan judul</span> -->
                                                            <a href=""><h6 class="">Kasus KSP Sejahtera Bersama Masuk Persidangan, Ini Kata Kuasa Hukum Nasabah</h6></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="">#4</a>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <!-- <span>Title ini menunjukan judul</span> -->
                                                            <a href=""><h6 class="">Kasus KSP Sejahtera Bersama Masuk Persidangan, Ini Kata Kuasa Hukum Nasabah</h6></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>