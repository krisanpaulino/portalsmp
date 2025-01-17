<?= $this->extend('front_layout2'); ?>
<?= $this->section('content') ?>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Form Pendaftaran</span></h1>
        <div class="mb-2">Silahkan mendaftar melalui form di bawah</div>

    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0"></h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                </div>
                <!-- Experience Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <?php if ($ta == null) : ?>
                            <div class="mb-2">Belum ada tahun ajaran tersedia.</div>

                        <?php else: ?>
                            <form action="<?= base_url('daftar') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_ta">Tahun</label>
                                    <select type="text" class="form-select <?= (isset(session('errors')['pendaftaran_ta'])) ? 'is-invalid' : '' ?>" id="pendaftaran_ta" name="pendaftaran_ta">
                                        <?php foreach ($ta as $row) : ?>
                                            <option value="<?= $row->ta_tahun ?>" <?= (old('pendaftaran_ta') == $row->ta_tahun) ? 'selected' : '' ?>><?= $row->ta_tahun ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['ta_id'])) : ?>
                                            <?= session('errors')['ta_id'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="sekolah_id">Sekolah</label>
                                    <select type="text" class="form-select <?= (isset(session('errors')['sekolah_id'])) ? 'is-invalid' : '' ?>" id="sekolah_id" name="sekolah_id">
                                        <option value="">Pilih Sekolah:</option>
                                        <?php foreach ($sekolah as $row) : ?>
                                            <option value="<?= $row->sekolah_id ?>" <?= (old('sekolah_id') == $row->sekolah_id) ? 'selected' : '' ?>><?= $row->sekolah_nama ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['sekolah_id'])) : ?>
                                            <?= session('errors')['sekolah_id'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_nama">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= (isset(session('errors')['pendaftaran_nama'])) ? 'is-invalid' : '' ?>" id="pendaftaran_nama" name="pendaftaran_nama" value="<?= old('pendaftaran_nama') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_nama'])) : ?>
                                            <?= session('errors')['pendaftaran_nama'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_tgllahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control <?= (isset(session('errors')['pendaftaran_tgllahir'])) ? 'is-invalid' : '' ?>" id="pendaftaran_tgllahir" name="pendaftaran_tgllahir" value="<?= old('pendaftaran_tgllahir') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_tgllahir'])) : ?>
                                            <?= session('errors')['pendaftaran_tgllahir'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_alamat">Alamat</label>
                                    <input type="text" class="form-control <?= (isset(session('errors')['pendaftaran_alamat'])) ? 'is-invalid' : '' ?>" id="pendaftaran_alamat" name="pendaftaran_alamat" value="<?= old('pendaftaran_alamat') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_alamat'])) : ?>
                                            <?= session('errors')['pendaftaran_alamat'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_email">Email</label>
                                    <input type="email" class="form-control <?= (isset(session('errors')['pendaftaran_email'])) ? 'is-invalid' : '' ?>" id="pendaftaran_email" name="pendaftaran_email" value="<?= old('pendaftaran_email') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_email'])) : ?>
                                            <?= session('errors')['pendaftaran_email'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_ortu">Nama Orang Tua</label>
                                    <input type="text" class="form-control <?= (isset(session('errors')['pendaftaran_ortu'])) ? 'is-invalid' : '' ?>" id="pendaftaran_ortu" name="pendaftaran_ortu" value="<?= old('pendaftaran_ortu') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_ortu'])) : ?>
                                            <?= session('errors')['pendaftaran_ortu'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pendaftaran_kontak">Kontak Orang Tua</label>
                                    <input type="text" class="form-control <?= (isset(session('errors')['pendaftaran_kontak'])) ? 'is-invalid' : '' ?>" id="pendaftaran_kontak" name="pendaftaran_kontak" value="<?= old('pendaftaran_kontak') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pendaftaran_kontak'])) : ?>
                                            <?= session('errors')['pendaftaran_kontak'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="akta">Scan Akta Kelahiran (File Gambar)</label>
                                    <input type="file" class="form-control <?= (isset(session('errors')['akta'])) ? 'is-invalid' : '' ?>" id="akta" name="akta" value="<?= old('akta') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['akta'])) : ?>
                                            <?= session('errors')['akta'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="kk">Scan Kartu Keluarga (File Gambar)</label>
                                    <input type="file" class="form-control <?= (isset(session('errors')['kk'])) ? 'is-invalid' : '' ?>" id="kk" name="kk" value="<?= old('kk') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['kk'])) : ?>
                                            <?= session('errors')['kk'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="ijazah">Scan Ijazah SD (File Gambar)</label>
                                    <input type="file" class="form-control <?= (isset(session('errors')['ijazah'])) ? 'is-invalid' : '' ?>" id="ijazah" name="ijazah" value="<?= old('ijazah') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['ijazah'])) : ?>
                                            <?= session('errors')['ijazah'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="pasfoto">Pas Foto (File Gambar)</label>
                                    <input type="file" class="form-control <?= (isset(session('errors')['pasfoto'])) ? 'is-invalid' : '' ?>" id="pasfoto" name="pasfoto" value="<?= old('pasfoto') ?>">
                                    <div class="invalid-feedback">
                                        <?php if (isset(session('errors')['pasfoto'])) : ?>
                                            <?= session('errors')['pasfoto'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                        <?php endif ?>

                    </div>
                </div>

            </section>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>