<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Berita</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <a href="<?= base_url('admin/berita/tambah') ?>" class="btn btn-primary btn-sm"><i data-feather="plus"></i></a>
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
                        <h5>Daftar Berita</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($berita as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->berita_judul ?></td>
                                            <td><?= $row->berita_tanggal ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/berita/edit/' . $row->berita_id) ?>" class="badge bg-primary text-light">Edit</a>
                                                <a href="javascript:;" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus" data-id="<?= $row->berita_id ?>">Hapus </a>
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
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="form" action="<?= base_url('admin/berita/delete') ?>" method="post">

                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" name="berita_id" value="" id="iditemhapus">
                <div class="modal-body">
                    <h5>Yakin ingin menghapus berita ini?</h5>
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