<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="<?= base_url() ?>public/global-images/news/<?= $data['news']->image ?>" alt="">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i><?= $data['news']->author ?></small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i><?= $data['news']->publish_start_date ?></small>
                        </div>
                        <h1 class="mb-4"><?= $data['news']->title ?></h1>
                        <?= $data['news']->content ?>
                    </div>
                    <!-- Blog Detail End -->
    
                </div>
    
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
    </div>