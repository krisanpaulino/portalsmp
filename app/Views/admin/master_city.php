<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Kota</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active">Kota</li>
                    </ol>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <!-- Plus Button Start-->
                    <form action="<?= base_url('admin/master/city/update') ?>" method="post">
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
                        <h5>Data Kota</h5><span></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">ID</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($city as $c) : ?>
                                        <tr>
                                            <td><?= $c->city_id ?></td>
                                            <td><?= $c->city ?></td>
                                            <td><?= $c->province ?></td>
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