<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Sekolah</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/sekolah') ?>">Sekolah</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 mb-1">
                        <h5>Form Tambah Sekolah</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="mb-4 mt-1">
                            <p class="txt-info">Isian yang memiliki tanda (<span class="txt-danger">*</span>) wajib diisi</p>
                        </div>
                        <form action="<?= base_url('admin/sekolah/insert') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <!-- ISBN -->
                            <div class="form-group mb-4">
                                <label for="sekolah_npsn"><span class="txt-danger">*</span>NPSN Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_npsn'])) ? 'is-invalid' : '' ?>" id="sekolah_npsn" name="sekolah_npsn" value="<?= old('sekolah_npsn') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_npsn'])) : ?>
                                        <?= session('errors')['sekolah_npsn'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Judul -->
                            <div class="form-group mb-4">
                                <label for="sekolah_nama"><span class="txt-danger">*</span>Nama Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_nama'])) ? 'is-invalid' : '' ?>" id="sekolah_nama" name="sekolah_nama" value="<?= old('sekolah_nama') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_nama'])) : ?>
                                        <?= session('errors')['sekolah_nama'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_tipe"><span class="txt-danger">*</span>Tipe Sekolah</label>
                                <select class="form-select <?= (isset(session('errors')['sekolah_tipe'])) ? 'is-invalid' : '' ?>" id="sekolah_tipe" name="sekolah_tipe" required>
                                    <option value="Negeri" <?= (old('sekolah_tipe') == 'Negeri') ? 'selected' : '' ?>>Negeri</option>
                                    <option value="Swasta" <?= (old('sekolah_tipe') == 'Swasta') ? 'selected' : '' ?>>Swasta</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_tipe'])) : ?>
                                        <?= session('errors')['sekolah_tipe'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_deskripsi"><span class="txt-danger">*</span>Deskripsi</label>
                                <textarea class="form-control <?= (isset(session('errors')['sekolah_deskripsi'])) ? 'is-invalid' : '' ?>" id="editor2" name="sekolah_deskripsi"><?= old('sekolah_deskripsi') ?></textarea>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_deskripsi'])) : ?>
                                        <?= session('errors')['sekolah_deskripsi'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_lokasi"><span class="txt-danger">*</span>Lokasi Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_lokasi'])) ? 'is-invalid' : '' ?>" id="sekolah_lokasi" name="sekolah_lokasi" value="<?= old('sekolah_lokasi') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_lokasi'])) : ?>
                                        <?= session('errors')['sekolah_lokasi'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_kelurahan"><span class="txt-danger">*</span>Kelurahan</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_kelurahan'])) ? 'is-invalid' : '' ?>" id="sekolah_kelurahan" name="sekolah_kelurahan" value="<?= old('sekolah_kelurahan') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_kelurahan'])) : ?>
                                        <?= session('errors')['sekolah_kelurahan'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_kecamatan"><span class="txt-danger">*</span>Kecamatan</label>
                                <select class="form-select <?= (isset(session('errors')['sekolah_kecamatan'])) ? 'is-invalid' : '' ?>" id="sekolah_kecamatan" name="sekolah_kecamatan" required>
                                    <option value="Alak" <?= (old('sekolah_kecamatan') == 'Alak') ? 'selected' : '' ?>>Alak</option>
                                    <option value="Kelapa Lima" <?= (old('sekolah_kecamatan') == 'Kelapa Lima') ? 'selected' : '' ?>>Kelapa Lima</option>
                                    <option value="Kota Raja" <?= (old('sekolah_kecamatan') == 'Kota Raja') ? 'selected' : '' ?>>Kota Raja</option>
                                    <option value="Kota Lama" <?= (old('sekolah_kecamatan') == 'Kota Lama') ? 'selected' : '' ?>>Kota Lama</option>
                                    <option value="Maulafa" <?= (old('sekolah_kecamatan') == 'Maulafa') ? 'selected' : '' ?>>Maulafa</option>
                                    <option value="Oebobo" <?= (old('sekolah_kecamatan') == 'Oebobo') ? 'selected' : '' ?>>Oebobo</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_kecamatan'])) : ?>
                                        <?= session('errors')['sekolah_kecamatan'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_pos"><span class="txt-danger">*</span>Kode Pos</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_pos'])) ? 'is-invalid' : '' ?>" id="sekolah_pos" name="sekolah_pos" value="<?= old('sekolah_pos') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_pos'])) : ?>
                                        <?= session('errors')['sekolah_pos'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="file"><span class="txt-danger">*</span>Foto Sekolah</label>
                                <input type="file" class="form-control <?= (isset(session('errors')['file'])) ? 'is-invalid' : '' ?>" id="file" name="file" value="<?= old('file') ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['file'])) : ?>
                                        <?= session('errors')['file'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_peta"><span class="txt-danger">*</span>Url Peta Lokasi (GMaps)</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_peta'])) ? 'is-invalid' : '' ?>" id="sekolah_peta" name="sekolah_peta" value="<?= old('sekolah_peta') ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_peta'])) : ?>
                                        <?= session('errors')['sekolah_peta'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_waktupenyelenggara"><span class="txt-danger">*</span>Waktu Penyelenggara</label>
                                <input type="date" class="form-control <?= (isset(session('errors')['sekolah_waktupenyelenggara'])) ? 'is-invalid' : '' ?>" id="sekolah_waktupenyelenggara" name="sekolah_waktupenyelenggara" value="<?= old('sekolah_waktupenyelenggara') ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_waktupenyelenggara'])) : ?>
                                        <?= session('errors')['sekolah_waktupenyelenggara'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_telepon"><span class="txt-danger">*</span>Telepon</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_telepon'])) ? 'is-invalid' : '' ?>" id="sekolah_telepon" name="sekolah_telepon" value="<?= old('sekolah_telepon') ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_telepon'])) : ?>
                                        <?= session('errors')['sekolah_telepon'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_email"><span class="txt-danger">*</span>email</label>
                                <input type="email" class="form-control <?= (isset(session('errors')['sekolah_email'])) ? 'is-invalid' : '' ?>" id="sekolah_email" name="sekolah_email" value="<?= old('sekolah_email') ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_email'])) : ?>
                                        <?= session('errors')['sekolah_email'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_medsos"><span class="txt-danger">*</span>Media Sosial</label>
                                <textarea class="form-control <?= (isset(session('errors')['sekolah_medsos'])) ? 'is-invalid' : '' ?>" id="editor3" name="sekolah_medsos"><?= old('sekolah_medsos') ?></textarea>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_medsos'])) : ?>
                                        <?= session('errors')['sekolah_medsos'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Simpan Sekolah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<?= $this->endSection(); ?>
<?= $this->section('plugincss'); ?>
<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/select2.css"> -->
<?= $this->endSection(); ?>
<?= $this->section('plugins'); ?>
<script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/styles.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/ckeditor.custom.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/select2/select2.full.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/select2/select2-custom.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script>
    $('#hapus').on('show.bs.modal', function(event) {
        var kode = $(event.relatedTarget).data('id');
        $(this).find('#iditemhapus').attr("value", kode);
    });
    CKEDITOR.replace('editor2', {
        toolbar: [{
                name: 'basicstyles',
                groups: ['basicstyles'],
                items: [
                    'Format',
                    'Bold',
                    'Italic',
                    'Underline'
                ]
            },
            {
                name: 'paragraph',
                groups: [
                    'list',
                    'indent',
                    'blocks',
                    'align',
                    'bidi'
                ],
                items: [
                    'NumberedList',
                    'BulletedList',
                    'JustifyLeft',
                    'JustifyCenter',
                    'JustifyRight',
                    'JustifyBlock',
                ]
            },
            {
                name: 'links',
                items: [
                    'Link',
                    'Unlink'
                ]
            },
        ],
        'height': '100px',
    });
    CKEDITOR.replace('editor3', {
        toolbar: [{
                name: 'basicstyles',
                groups: ['basicstyles'],
                items: [
                    'Format',
                    'Bold',
                    'Italic',
                    'Underline'
                ]
            },
            {
                name: 'paragraph',
                groups: [
                    'list',
                    'indent',
                    'blocks',
                    'align',
                    'bidi'
                ],
                items: [
                    'NumberedList',
                    'BulletedList',
                    'JustifyLeft',
                    'JustifyCenter',
                    'JustifyRight',
                    'JustifyBlock',
                ]
            },
            {
                name: 'links',
                items: [
                    'Link',
                    'Unlink'
                ]
            },
        ],
        'height': '100px',
    });
</script>
<?= $this->endSection(); ?>