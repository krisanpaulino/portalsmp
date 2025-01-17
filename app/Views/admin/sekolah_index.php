<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Sekolah</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Sekolah</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <a href="<?= base_url('admin/sekolah/tambah') ?>" class="btn btn-primary btn-sm mr-2"><i data-feather="plus"></i></a>
                    <a href="<?= base_url('admin/sekolah/laporan') ?>" target="_blank" class="btn btn-secondary btn-sm m-2" name="action">Cetak</a>

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
                        <h5>Daftar SMP</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Sekolah</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($sekolah as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->sekolah_npsn ?></td>
                                            <td><?= $row->sekolah_nama ?></td>
                                            <td><?= $row->sekolah_kelurahan ?></td>
                                            <td><?= $row->sekolah_kecamatan ?></td>
                                            <td><?= $row->sekolah_email ?></td>
                                            <td><?= $row->sekolah_telepon ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/sekolah/edit/' . $row->sekolah_id) ?>" class="badge bg-primary text-light">Edit</a>
                                                <a href="<?= base_url('admin/sekolah/' . $row->sekolah_id) ?>" class="badge bg-primary text-light">Detail</a>
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
<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    $('#hapus').on('show.bs.modal', function(event) {
        var kode = $(event.relatedTarget).data('id');
        $(this).find('#iditemhapus').attr("value", kode);
    });
</script>
<?= $this->endSection(); ?>