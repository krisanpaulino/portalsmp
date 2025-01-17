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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/pendaftaran') ?>">Pendaftaran</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
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
                        <h5>Detail Pendaftaran</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <tbody class="small">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?= $pendaftaran->pendaftaran_nama ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sekolah Mendaftar</th>
                                        <td><?= $pendaftaran->sekolah_nama ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Mendaftar</th>
                                        <td><?= $pendaftaran->pendaftaran_tanggal ?></td>
                                    </tr>
                                    <tr>
                                        <th>Periode</th>
                                        <td><?= $pendaftaran->pendaftaran_ta ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?= $pendaftaran->pendaftaran_tgllahir ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $pendaftaran->pendaftaran_alamat ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $pendaftaran->pendaftaran_email ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Orang Tua</th>
                                        <td><?= $pendaftaran->pendaftaran_ortu ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kontak Orang Tua</th>
                                        <td><?= $pendaftaran->pendaftaran_kontak ?></td>
                                    </tr>

                                    <tr>
                                        <th>File Akta Kelahiran</th>
                                        <td> <a target="_blank" href="<?= base_url('assets/img/pendaftaran/' . $pendaftaran->pendaftaran_akta) ?>" class="text-primary">Lihat File</a></td>
                                    </tr>
                                    <tr>
                                        <th>File KK</th>
                                        <td> <a target="_blank" href="<?= base_url('assets/img/pendaftaran/' . $pendaftaran->pendaftaran_kk) ?>" class="text-primary">Lihat File</a></td>
                                    </tr>
                                    <tr>
                                        <th>File Ijazah</th>
                                        <td> <a target="_blank" href="<?= base_url('assets/img/pendaftaran/' . $pendaftaran->pendaftaran_ijazah) ?>" class="text-primary">Lihat File</a></td>
                                    </tr>
                                    <tr>
                                        <th>File Pas Foto</th>
                                        <td> <a target="_blank" href="<?= base_url('assets/img/pendaftaran/' . $pendaftaran->pendaftaran_pasfoto) ?>" class="text-primary">Lihat File</a></td>
                                    </tr>
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