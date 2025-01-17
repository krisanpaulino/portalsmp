<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Edit</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/sekolah') ?>">Sekolah</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <div class="card-header pb-0">
                        <h5>Edit Buku</h5><span></span>
                    </div>
                    <!-- Untuk refresh csrf token di ajax -->
                    <div class="card-body">
                        <span class="txt-warning">Isian yang memiliki tanda (<span class="txt-danger">*</span>) wajib diisi</span>
                        <form action="<?= base_url('admin/sekolah/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <input type="hidden" name="sekolah_id" value="<?= $sekolah->sekolah_id ?>" />
                            <!-- ISBN -->
                            <div class="form-group mb-4">
                                <label for="sekolah_npsn"><span class="txt-danger">*</span>NPSN Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_npsn'])) ? 'is-invalid' : '' ?>" id="sekolah_npsn" name="sekolah_npsn" value="<?= old('sekolah_npsn', $sekolah->sekolah_npsn) ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_npsn'])) : ?>
                                        <?= session('errors')['sekolah_npsn'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Judul -->
                            <div class="form-group mb-4">
                                <label for="sekolah_nama"><span class="txt-danger">*</span>Nama Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_nama'])) ? 'is-invalid' : '' ?>" id="sekolah_nama" name="sekolah_nama" value="<?= old('sekolah_nama', $sekolah->sekolah_nama) ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_nama'])) : ?>
                                        <?= session('errors')['sekolah_nama'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_tipe"><span class="txt-danger">*</span>Tipe Sekolah</label>
                                <select class="form-select <?= (isset(session('errors')['sekolah_tipe'])) ? 'is-invalid' : '' ?>" id="sekolah_tipe" name="sekolah_tipe" required>
                                    <option value="Negeri" <?= (old('sekolah_tipe', $sekolah->sekolah_tipe) == 'Negeri') ? 'selected' : '' ?>>Negeri</option>
                                    <option value="Swasta" <?= (old('sekolah_tipe', $sekolah->sekolah_tipe) == 'Swasta') ? 'selected' : '' ?>>Swasta</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_tipe'])) : ?>
                                        <?= session('errors')['sekolah_tipe'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_deskripsi"><span class="txt-danger">*</span>Deskripsi</label>
                                <textarea class="form-control <?= (isset(session('errors')['sekolah_deskripsi'])) ? 'is-invalid' : '' ?>" id="editor2" name="sekolah_deskripsi"><?= old('sekolah_deskripsi', $sekolah->sekolah_deskripsi) ?></textarea>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_deskripsi'])) : ?>
                                        <?= session('errors')['sekolah_deskripsi'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_lokasi"><span class="txt-danger">*</span>Lokasi Sekolah</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_lokasi'])) ? 'is-invalid' : '' ?>" id="sekolah_lokasi" name="sekolah_lokasi" value="<?= old('sekolah_lokasi', $sekolah->sekolah_lokasi) ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_lokasi'])) : ?>
                                        <?= session('errors')['sekolah_lokasi'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_kelurahan"><span class="txt-danger">*</span>Kelurahan</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_kelurahan'])) ? 'is-invalid' : '' ?>" id="sekolah_kelurahan" name="sekolah_kelurahan" value="<?= old('sekolah_kelurahan', $sekolah->sekolah_kelurahan) ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_kelurahan'])) : ?>
                                        <?= session('errors')['sekolah_kelurahan'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_kecamatan"><span class="txt-danger">*</span>Kecamatan</label>
                                <select class="form-select <?= (isset(session('errors')['sekolah_kecamatan'])) ? 'is-invalid' : '' ?>" id="sekolah_kecamatan" name="sekolah_kecamatan" required>
                                    <option value="Alak" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Alak') ? 'selected' : '' ?>>Alak</option>
                                    <option value="Kelapa Lima" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Kelapa Lima') ? 'selected' : '' ?>>Kelapa Lima</option>
                                    <option value="Kota Raja" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Kota Raja') ? 'selected' : '' ?>>Kota Raja</option>
                                    <option value="Kota Lama" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Kota Lama') ? 'selected' : '' ?>>Kota Lama</option>
                                    <option value="Maulafa" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Maulafa') ? 'selected' : '' ?>>Maulafa</option>
                                    <option value="Oebobo" <?= (old('sekolah_kecamatan', $sekolah->sekolah_kecamatan) == 'Oebobo') ? 'selected' : '' ?>>Oebobo</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_kecamatan'])) : ?>
                                        <?= session('errors')['sekolah_kecamatan'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_pos"><span class="txt-danger">*</span>Kode Pos</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_pos'])) ? 'is-invalid' : '' ?>" id="sekolah_pos" name="sekolah_pos" value="<?= old('sekolah_pos', $sekolah->sekolah_pos) ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_pos'])) : ?>
                                        <?= session('errors')['sekolah_pos'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="file">Foto Sekolah (Biarkan kosong jika tidak ingin mengubah foto)</label>
                                <input type="file" class="form-control <?= (isset(session('errors')['file'])) ? 'is-invalid' : '' ?>" id="file" name="file">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['file'])) : ?>
                                        <?= session('errors')['file'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_peta"><span class="txt-danger">*</span>Url Peta Lokasi (GMaps)</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_peta'])) ? 'is-invalid' : '' ?>" id="sekolah_peta" name="sekolah_peta" value="<?= old('sekolah_peta', $sekolah->sekolah_peta) ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_peta'])) : ?>
                                        <?= session('errors')['sekolah_peta'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_waktupenyelenggara"><span class="txt-danger">*</span>Waktu Penyelenggara</label>
                                <input type="date" class="form-control <?= (isset(session('errors')['sekolah_waktupenyelenggara'])) ? 'is-invalid' : '' ?>" id="sekolah_waktupenyelenggara" name="sekolah_waktupenyelenggara" value="<?= old('sekolah_waktupenyelenggara', $sekolah->sekolah_waktupenyelenggara) ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_waktupenyelenggara'])) : ?>
                                        <?= session('errors')['sekolah_waktupenyelenggara'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_telepon"><span class="txt-danger">*</span>Telepon</label>
                                <input type="text" class="form-control <?= (isset(session('errors')['sekolah_telepon'])) ? 'is-invalid' : '' ?>" id="sekolah_telepon" name="sekolah_telepon" value="<?= old('sekolah_telepon', $sekolah->sekolah_telepon) ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_telepon'])) : ?>
                                        <?= session('errors')['sekolah_telepon'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_email"><span class="txt-danger">*</span>email</label>
                                <input type="email" class="form-control <?= (isset(session('errors')['sekolah_email'])) ? 'is-invalid' : '' ?>" id="sekolah_email" name="sekolah_email" value="<?= old('sekolah_email', $sekolah->sekolah_email) ?>" required>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_email'])) : ?>
                                        <?= session('errors')['sekolah_email'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sekolah_medsos"><span class="txt-danger">*</span>Media Sosial</label>
                                <textarea class="form-control <?= (isset(session('errors')['sekolah_medsos'])) ? 'is-invalid' : '' ?>" id="editor3" name="sekolah_medsos"><?= old('sekolah_medsos', $sekolah->sekolah_medsos) ?></textarea>
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['sekolah_medsos'])) : ?>
                                        <?= session('errors')['sekolah_medsos'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Ubah Data Sekolah</button>
                                <a href="javascript:;" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#hapus" data-id="<?= $sekolah->sekolah_id ?>">Hapus Sekolah</a>
                            </div>
                        </form>
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
            <form class="form" action="<?= base_url('admin/sekolah/delete') ?>" method="post">

                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="hidden" name="sekolah_id" value="" id="iditemhapus">
                <div class="modal-body">
                    <h5>Yakin ingin menghapus sekolah ini?</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
    <?= $this->section('plugincss'); ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/select2.css">
    <?= $this->endSection(); ?>
    <?= $this->section('plugins'); ?>
    <script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/ckeditor.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/styles.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/photoswipe/photoswipe.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="<?= base_url('assets/admin') ?>/js/photoswipe/photoswipe.js"></script>
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