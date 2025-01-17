<?= $this->extend(session('user')->user_type . '_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Penulis</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Penulis</li>
                    </ol>
                </div>
                <?php if (session('user')->user_type == 'admin') : ?>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <!-- Plus Button Start-->
                        <a href="javascript:;" data-bs-toggle="modal" class="btn btn-primary btn-sm" data-bs-target="#tambah"><i data-feather="plus"></i></a>
                        <!-- Plus Button Ends-->
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Daftar Penulis</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Penulis</th>
                                        <th>Alamat Email</th>
                                        <th>Jumlah Buku</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penulis as $p) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $p->penulis_nama ?></td>
                                            <td><?= $p->penulis_email ?></td>
                                            <td><?= $p->jumlahbuku ?></td>
                                            <?php if (session('user')->user_type == 'admin') : ?>
                                                <td>
                                                    <a href="javascript:;" class="badge bg-primary text-light" data-bs-toggle="modal" data-bs-target="#edit<?= $p->penulis_id ?>" data>Edit</a>
                                                    <a href="javascript:;" class="badge bg-danger text-light" data-bs-toggle="modal" data-bs-target="#hapus" data-id="<?= $p->penulis_id ?>">Hapus</a>
                                                </td>
                                            <?php endif; ?>
                                            <?php if (session('user')->user_type == 'bendahara') : ?>
                                                <td></td>
                                            <?php endif; ?>

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
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Penulis</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="<?= base_url('admin/penulis/save') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label" for="namaitem">Nama Penulis:</label>
                        <input id="namaitem" name="penulis_nama" class="form-control" type="text" value="">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="email">Email Penulis:</label>
                        <input id="email" name="penulis_email" class="form-control" type="text" value="">
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

<?php foreach ($penulis as $p) : ?>
    <div class="modal fade" id="edit<?= $p->penulis_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Penulis</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" action="<?= base_url('admin/penulis/save') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="penulis_id" value="<?= $p->penulis_id ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="col-form-label" for="namaitem">Nama Penulis:</label>
                            <input id="namaitem" name="penulis_nama" class="form-control" type="text" value="<?= $p->penulis_nama ?>">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="email">Email Penulis:</label>
                            <input id="email" name="penulis_email" class="form-control" type="text" value="<?= $p->penulis_email ?>">
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
                <h5 class="modal-title" id="exampleModalLabel2">Edit penulis Buku</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="<?= base_url('admin/penulis/delete') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="penulis_id" value="" id="iditemhapus">
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