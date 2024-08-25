<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $data['about']->page_title ?></h1>
                <span><?= $data['about']->short_description ?></span>
            </div>
        </div>
    </div>
</div>

<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>Tentang Kami</span>
                                <h2>Koperasi Trayek <em>Karanganyar Jaya</em></h2>
                                <?= $data['about']->page_content ?>
                                <!-- <a href="" class="filled-button">Read More</a> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="<?= base_url() ?>public/global-images/pages/<?= $data['about']->photo ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials" style="padding-top: 45px; padding-bottom: 14px; margin-top: 65px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Struktur <em>Organisasi</em></h2>
                    <span>Struktur Organisasi Koperasi</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>Struktur Organisasi</span>
                                <h2>Koperasi Trayek <em>Karanganyar Jaya</em></h2>
                                <br>
                                <?= $data['organization']->page_content ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="<?= base_url() ?>public/global-images/pages/<?= $data['organization']->photo ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <span>Kami hadir untuk anda</span>
                    <h2>Koperasi Trayek Karang <em>Anyar Jaya</em></h2>
                    <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla
                        luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.
                        <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie
                        nunc, ut posuere ante tortor ut neque.
                    </p>
                    <a href="" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">120</div>
                            <div class="count-title">Jumlah Trayek</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">65</div>
                            <div class="count-title">Total Anggota</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">4</div>
                            <div class="count-title">Bidang Usaha Utama</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">7</div>
                            <div class="count-title">Sumber Pendapatan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Apa yang orang katakan <em>Tentang Kami</em></h2>
                    <span>testimonials dari rekan kami</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-testimonials owl-carousel">

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>George Walker</h4>
                            <span>Chief Financial Analyst</span>
                            <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet
                                malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>John Smith</h4>
                            <span>Market Specialist</span>
                            <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc.
                                Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>David Wood</h4>
                            <span>Chief Accountant</span>
                            <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus
                                neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur
                                tristique."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>Andrew Boom</h4>
                            <span>Marketing Head</span>
                            <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper
                                sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>