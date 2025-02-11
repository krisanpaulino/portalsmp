<?= $this->extend('front_layout2'); ?>
<?= $this->section('content') ?>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Berita</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Berita terbaru</h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                </div>
                <!-- Experience Card 1-->
                <?php foreach ($berita as $row): ?>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <h4 class="text-primary fw-bolder mb-4"><?= $row->berita_judul ?></h4>

                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <img src="<?= base_url('assets/images/' . $row->berita_gambar) ?>" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mb-2"><?= substr(strip_tags($row->berita_isi), 0, 250) ?>...</div>
                                    <a class="btn btn-primary" href="<?= base_url('berita/' . $row->berita_id) ?>">Read more →</a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <?= $pager->links() ?>


            </section>

        </div>
    </div>
</div>
<!-- </div> -->
<?= $this->endSection(); ?>