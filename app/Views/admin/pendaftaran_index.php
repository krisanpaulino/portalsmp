<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Pendaftaran</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftaran</li>
                    </ol>
                </div>

            </div>
            <form action="" method="get">
                <div class="row d-flex justify-content-start mt-4">
                    <!-- Plus Button Start-->
                    <div class="col-md-3">
                        <select type="text" class="form-select <?= (isset(session('errors')['sekolah_id'])) ? 'is-invalid' : '' ?>" id="sekolah_id" name="sekolah_id">
                            <option value="">Pilih Sekolah:</option>
                            <?php foreach ($sekolah as $row) : ?>
                                <option value="<?= $row->sekolah_id ?>" <?= (old('sekolah_id', $sekolah_id) == $row->sekolah_id) ? 'selected' : '' ?>><?= $row->sekolah_nama ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select type="text" class="form-select <?= (isset(session('errors')['pendaftaran_ta'])) ? 'is-invalid' : '' ?>" id="pendaftaran_ta" name="pendaftaran_ta">
                            <option value="">Pilih Periode:</option>
                            <?php foreach ($ta as $row) : ?>
                                <option value="<?= $row->pendaftaran_ta ?>" <?= (old('pendaftaran_ta', $pendaftaran_ta) == $row->pendaftaran_ta) ? 'selected' : '' ?>><?= $row->pendaftaran_ta ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <input type="submit" class="btn btn-primary btn-sm" name="action" value="Filter"></input>
                    </div>
                    <div class="col-md-1">
                        <input type="submit" class="btn btn-secondary btn-sm" name="action" value="Cetak"></input>
                    </div>
                    <!-- Plus Button Ends-->
                </div>
            </form>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Data Pendaftaran</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Sekolah</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Email</th>
                                        <th>Telepon Ortu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pendaftaran as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->pendaftaran_nama ?></td>
                                            <td><?= $row->sekolah_nama ?></td>
                                            <td><?= $row->pendaftaran_tanggal ?></td>
                                            <td><?= $row->pendaftaran_ta ?></td>
                                            <td><?= $row->pendaftaran_email ?></td>
                                            <td><?= $row->pendaftaran_kontak ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/pendaftaran/' . $row->pendaftaran_id) ?>" class="badge bg-primary text-light">Detail</a>
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