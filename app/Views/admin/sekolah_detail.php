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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/sekolah') ?>">Sekolah</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <a href="<?= base_url('admin/sekolah/tambah') ?>" class="btn btn-primary btn-sm"><i data-feather="plus"></i></a>
                    <!-- Plus Button Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Detail <?= $sekolah->sekolah_nama ?></h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <tbody class="small">
                                    <tr>
                                        <th>Nama Sekolah</th>
                                        <td><?= $sekolah->sekolah_nama ?></td>
                                    </tr>
                                    <tr>
                                        <th>NPSN Sekolah</th>
                                        <td><?= $sekolah->sekolah_npsn ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tipe Sekolah</th>
                                        <td><?= $sekolah->sekolah_tipe ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lokasi Sekolah</th>
                                        <td><?= $sekolah->sekolah_lokasi ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kelurahan</th>
                                        <td><?= $sekolah->sekolah_kelurahan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <td><?= $sekolah->sekolah_kecamatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kota / Kabupaten</th>
                                        <td><?= $sekolah->sekolah_region ?></td>
                                    </tr>
                                    <tr>
                                        <th>Provinsi</th>
                                        <td><?= $sekolah->sekolah_provinsi ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td><?= $sekolah->sekolah_pos ?></td>
                                    </tr>
                                    <tr>
                                        <th>Url Lokasi</th>
                                        <td><?= $sekolah->sekolah_peta ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Sekolah</th>
                                        <td><?= $sekolah->sekolah_email ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td><?= $sekolah->sekolah_telepon ?></td>
                                    </tr>
                                    <tr>
                                        <th>Media Sosial</th>
                                        <td><?= $sekolah->sekolah_medsos ?></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Penyelenggara</th>
                                        <td><?= $sekolah->sekolah_waktupenyelenggara ?></td>
                                    </tr>
                                    <tr>
                                        <th>Foto Sekolah</th>
                                        <td> <img src="<?= base_url('assets/img/sekolah/' . $sekolah->sekolah_foto) ?>" class="img-thumbnail" width="300px" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi Sekolah</th>
                                        <td><?= $sekolah->sekolah_deskripsi ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-end">
                            <h5>Riwayat Jumlah Siswa</h5>
                            <!-- Plus Button Start-->
                            <!-- Plus Button Ends-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered small">
                                <thead>
                                    <tr>
                                        <th>Tahun Ajaran</th>
                                        <th>Jumlah Siswa</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    <?php foreach ($riwayat as $row): ?>
                                        <tr>
                                            <td><?= $row->riwayat_ta ?></td>
                                            <td><?= $row->riwayat_jumlah ?></td>
                                            <td>
                                                <a href="javascript:;" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus" data-id="<?= $row->riwayat_id ?>">Hapus </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                        <a href="javascript:;" class="btn btn-primary text-light mt-4" data-bs-toggle="modal" data-bs-target="#tambah" data-id="<?= $sekolah->sekolah_id ?>">Tambah </a>

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
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Riwayat Siswa</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="<?= base_url('admin/sekolah/insert-riwayat') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="sekolah_id" id="kodeitem" value="">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label" for="recipient-name">Tahun Ajaran:</label>
                        <input class="form-control" name="riwayat_ta" type="text" value="" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="recipient-name">Jumlah:</label>
                        <input class="form-control" name="riwayat_jumlah" type="numeric" value="" required>
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
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="form" action="<?= base_url('admin/sekolah/delete-riwayat') ?>" method="post">

                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" name="riwayat_id" value="" id="iditemhapus">
                <div class="modal-body">
                    <h5>Yakin ingin menghapus riwayat ini?</h5>
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
    $('#tambah').on('show.bs.modal', function(event) {
        var kode = $(event.relatedTarget).data('id');
        $(this).find('#kodeitem').attr("value", kode);
    });
</script>

<?= $this->endSection(); ?>