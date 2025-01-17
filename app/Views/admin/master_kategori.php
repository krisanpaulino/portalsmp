<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Kategori</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <a href="javascript:;" data-bs-toggle="modal" class="btn btn-primary btn-sm" data-bs-target="#tambah"><i data-feather="plus"></i></a>
                    <!-- Plus Button Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Kategori</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Jumlah Buku</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as $k) : ?>
                                        <tr>
                                            <td><?= $k->kategori_nama ?></td>
                                            <td><?= $k->jumlahbuku ?></td>
                                            <td>
                                                <a href="javascript:;" class="badge bg-primary text-light" data-bs-toggle="modal" data-bs-target="#edit<?= $k->kategori_id ?>" data>Edit</a>
                                                <a href="javascript:;" class="badge bg-danger text-light" data-bs-toggle="modal" data-bs-target="#hapus" data-id="<?= $k->kategori_id ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Kategori</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="<?= base_url('admin/master/savekategori') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="kategori_id" value="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label" for="recipient-name">Kategori Nama:</label>
                        <input class="form-control" name="kategori_nama" type="text" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($kategori as $k) : ?>
    <div class="modal fade" id="edit<?= $k->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Kategori</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" action="<?= base_url('admin/master/savekategori') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="kategori_id" value="<?= $k->kategori_id ?>" id="iditem">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Kategori Nama:</label>
                            <input id="namaitem" name="kategori_nama" class="form-control" type="text" value="<?= $k->kategori_nama ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit Kategori</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="<?= base_url('admin/master/deletekategori') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="kategori_id" value="" id="iditemhapus">
                <div class="modal-body">
                    <h5>Yakin ingin menghapus item ini?</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    $('#hapus').on('show.bs.modal', function(event) {
        var kode = $(event.relatedTarget).data('id');
        $(this).find('#iditemhapus').attr("value", kode);
    });
</script>
<?= $this->endSection(); ?>