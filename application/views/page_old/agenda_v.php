<style>
    .pagination-container {
        margin: 100px auto;
        text-align: center;
    }

    .pagination {
        position: relative;
    }

    .pagination a {
        position: relative;
        display: inline-block;
        color: #2c3e50;
        text-decoration: none;
        font-size: 1.2rem;
        padding: 8px 16px 10px;
    }

    .pagination a:before {
        z-index: -1;
        position: absolute;
        height: 100%;
        width: 100%;
        content: "";
        top: 0;
        left: 0;
        background-color: #a4c639;
        border-radius: 24px;
        transform: scale(0);
        transition: all 0.2s;
    }

    .pagination a:hover,
    .pagination a .pagination-active {
        color: #fff;
    }

    .pagination a:hover:before,
    .pagination a .pagination-active:before {
        transform: scale(1);
    }

    .pagination .pagination-active {
        color: #fff;
    }

    .pagination .pagination-active:before {
        transform: scale(1);
    }

    .pagination-newer {
        margin-right: 50px;
    }

    .pagination-older {
        margin-left: 50px;
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

<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <?php
            foreach ($events as $row) {
                echo '<div class="col-md-4 p-3">
                            <div class="agenda-item">
                                <a href="'.base_url().'agenda/detail/'.$row['event_id'].'"><img src="' . base_url() . 'public/global-images/events/' . $row['photo'] . '" alt="" height="200" style="width: 100%"></a>
                                <div class="down-content" style="margin-top: -20px;">
                                    <a href="'.base_url().'agenda/detail/'.$row['event_id'].'">' . $row['title'] . '</a>
                                    <p style=""><label class="location">'.$row['location'].'</label>, ' . date("d F Y", strtotime($row['event_date'])) . '</p>
                                    <span>'.substr($row['content'], 0, 175).' ... </span>
                                    <a href="'.base_url().'agenda/detail/'.$row['event_id'].'" class="text-primary">Lihat Selengkapnya >></a>
                                </div>
                            </div>
                        </div>';
            }
            ?>
            <!-- <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/1.jpg" alt="" height="200">
                    <div class="down-content">
                        <h4>Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare... <a href="#" class="">Lihat Detail</a></p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/2.jpeg" alt="" height="200">
                    <div class="down-content">
                        <h4>Rapat Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare...</p>
                        <a href="#" class="filled-button">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="" height="200">
                    <div class="down-content">
                        <h4>Penyampaian Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare...</p>
                        <a href="#" class="filled-button">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
                    <div class="down-content">
                        <h4>Penyampaian Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare...</p>
                        <a href="#" class="filled-button">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
                    <div class="down-content">
                        <h4>Penyampaian Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare...</p>
                        <a href="#" class="filled-button">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-item">
                    <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
                    <div class="down-content">
                        <h4>Penyampaian Koperasi BMI Group</h4>
                        <span>Rabu, 20 April 2023</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare...</p>
                        <a href="#" class="filled-button">Lihat Detail</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="container d-flex justify-content-between">
    <nav class="pagination-container">
        <div class="pagination">
            <?php
            if ($paging['page'] > 1) {
                $previous_page = $paging['page'] - 1;
                echo '<a class="" href="' . base_url() . 'agenda/index/' . $previous_page . '"><< Prev</a>';
            }
            ?>
            <span class="pagination-inner">
                <?php
                if ($paging['page'] - 2 > 1) {
                    echo '<a href="javascript:void(0)">...</a>';
                }
                for ($i = 1; $i <= $total_event->total_event / $paging['perpage'] + 1; $i++) {
                    if ($i > $paging['page'] - 3 && $i <= $paging['page']) {
                        if ($i == $paging['page']) {
                            echo '<a href="' . base_url() . 'agenda/index/' . $i . '" class="pagination-active">' . $i . '</a>';
                        } else {
                            echo '<a href="' . base_url() . 'agenda/index/' . $i . '">' . $i . '</a>';
                        }
                    } else if ($i < $paging['page'] + 3 && $i >= $paging['page']) {
                        if ($i == $paging['page']) {
                            echo '<a href="' . base_url() . 'agenda/index/' . $i . '" class="pagination-active">' . $i . '</a>';
                        } else {
                            echo '<a href="' . base_url() . 'agenda/index/' . $i . '">' . $i . '</a>';
                        }
                    }
                }
                if ($paging['page'] + 2 <= $total_event->total_event / $paging['perpage']) {
                    echo '<a href="javascript:void(0)">...</a>';
                }
                ?>
            </span>
            <?php
            if ($paging['page'] < $total_event->total_event / $paging['perpage']) {
                $previous_page = $paging['page'] + 1;
                echo '<a class="" href="' . base_url() . 'agenda/index/' . $previous_page . '">Next >></a>';
            }
            ?>
        </div>
    </nav>
</div>