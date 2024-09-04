
<div class="container py-5">
    <div class="row g-5">
        <!-- Blog list Start -->
        <div class="col-lg-8">
            <div class="row g-5">
                
            <?php foreach ($data['news'] as $news_item): ?>
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= base_url() ?>public/global-images/news/<?= $news_item['image'] ?>" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?= base_url('news/category/'.$news_item['category_id']) ?>"><?= $news_item['category_description'] ?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?= $news_item['author'] ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?= $news_item['publish_start_date'] ?></small>
                            </div>
                            <h4 class="mb-3"><?= $news_item['title'] ?></h4>
                            <?php
                                $short_description = $news_item['short_description'];
                                $short_description = (strlen($short_description) > 60) ? substr($short_description, 0, 60) . '...' : $short_description;
                                echo  '<p>'.$short_description.'</p>';
                            ?>
                            <a class="text-uppercase" href="<?= base_url('news/detail/'.$news_item['slug']) ?>">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php
                // echo json_encode($data['pagination']);
            ?>

                <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                    <nav aria-label="Page navigation">
                        <?php if (isset($data['pagination'])): ?>
                            <ul class="pagination pagination-lg m-0">
                                <?= $data['pagination']; ?>
                            </ul>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <div class="input-group">
                    <input type="text" class="form-control p-3" placeholder="Keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div> -->
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="mb-0">Categories</h3>
                </div>
                <div class="link-animated d-flex flex-column justify-content-start">
                    <?php foreach ($data['categories'] as $category): ?>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?= base_url('news/category/'.$category['category_id']) ?>">
                            <i class="bi bi-arrow-right me-2"></i><?php echo htmlspecialchars($category['category_description']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Category End -->

            <!-- Recent Post Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="mb-0">Recent Post</h3>
                </div>
                <?php foreach ($data['latest_news'] as $latest_news): ?>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/global-images/news/<?= $latest_news['image'] ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="<?= base_url('/news/detail/'.$latest_news['slug']) ?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?= $latest_news['title'] ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
            </div>
            <!-- Image End -->

            
        </div>
        <!-- Sidebar End -->
    </div>
</div>