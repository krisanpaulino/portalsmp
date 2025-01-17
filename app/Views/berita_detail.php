<?= $this->extend('front_layout2'); ?>
<?= $this->section('content') ?>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Berita</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0"></h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                </div>
                <!-- Experience Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <h4 class="text-primary fw-bolder mb-4"><?= $berita->berita_judul ?></h4>
                        <div class="small text-muted"><?= $berita->berita_tanggal ?></div>
                        <div class="mb-2"><?= $berita->berita_isi ?></div>

                    </div>
                </div>

            </section>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>