<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>User Administrator</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">User Administrator</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <a href="javascript:;" data-bs-toggle="modal" class="btn btn-primary btn-sm" data-bs-target="#tambah"><i data-feather="plus"></i></a>
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
                        <h5>Profil</h5><span></span>
                    </div>
                    <div class="card-body">
                        <h4>Username : <?= $user->username ?></h4>
                        <hr>
                        <h2>Ganti Password</h2>
                        <form action="<?= base_url('admin/ganti-password') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mb-4">
                                <label for="user_password">Password Sekarang</label>
                                <input type="password" class="form-control <?= (isset(session('errors')['current_password'])) ? 'is-invalid' : '' ?>" id="current_password" name="current_password" value="<?= old('current_password') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['current_password'])) : ?>
                                        <?= session('errors')['current_password'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="user_password">Password</label>
                                <input type="password" class="form-control <?= (isset(session('errors')['user_password'])) ? 'is-invalid' : '' ?>" id="user_password" name="user_password" value="<?= old('user_password') ?>">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['user_password'])) : ?>
                                        <?= session('errors')['user_password'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" class="form-control <?= (isset(session('errors')['password_confirmation'])) ? 'is-invalid' : '' ?>" id="password_confirmation" name="password_confirmation">
                                <div class="invalid-feedback">
                                    <?php if (isset(session('errors')['password_confirmation'])) : ?>
                                        <?= session('errors')['password_confirmation'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-md">Ganti Password</button>
                        </form>
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