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
                    <h2 class="text-primary fw-bolder mb-0">Detail Sekolah</h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                </div>
                <!-- Experience Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <h4 class="text-primary fw-bolder mb-4"><?= $sekolah->sekolah_nama ?></h4>
                        <img src="<?= base_url('assets/img/sekolah/' . $sekolah->sekolah_foto) ?>" class="img-thumbnail" alt="">
                        <div class="mb-2"><?= $sekolah->sekolah_deskripsi ?></div>

                        <table class="table table-borderless" id="basic-1">
                            <tbody class="">
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

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <h4 class="text-primary fw-bolder mb-4">Jumlah Siswa per Tahun</h4>

                        <table class="table table-bordered">
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
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>