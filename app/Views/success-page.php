<?= $this->extend('front_layout2'); ?>
<?= $this->section('content') ?>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Sukses!</span></h1>
        <div class="mb-2">Selamat <b><?= session('pendaftar')['pendaftaran_nama'] ?></b>, pendaftaran kamu berhasil direkam!</div>
    </div>
</div>

<?= $this->endSection(); ?>