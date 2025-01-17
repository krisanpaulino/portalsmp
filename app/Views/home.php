<?= $this->extend('front_layout'); ?>
<?= $this->section('content') ?>
<div class="col-lg-8">
    <!-- Featured blog post-->
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        <div class="col-lg-6">
            <!-- Blog post-->
            <?php foreach ($berita as $row): ?>
                <div class="card mb-4">
                    <a href="#!" class="thumb-post"><img class="card-img-top " src="<?= base_url('assets/images/' . $row->berita_gambar) ?>" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?= $row->berita_tanggal ?></div>
                        <h2 class="card-title h4"><?= $row->berita_judul ?></h2>
                        <p class="card-text">
                        <p><?= substr(strip_tags($row->berita_isi), 0, 250) ?>...</p>
                        </p>
                        <a class="btn btn-primary" href="<?= base_url('berita/' . $row->berita_id) ?>">Read more →</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?= $pager->links() ?>
        <!-- Pagination-->

    </div>
</div>
<?= $this->endSection(); ?>