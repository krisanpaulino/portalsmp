<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Provinsi</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active">Provinsi</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <form action="<?= base_url('admin/master/province/update') ?>" method="post">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-success btn-sm"><i data-feather="rotate-cw"></i></button>
                    </form>
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
                        <h5>Data Provinsi</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">ID</th>
                                        <th>Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($province as $p) : ?>
                                        <tr>
                                            <td><?= $p->province_id ?></td>
                                            <td><?= $p->province ?></td>
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