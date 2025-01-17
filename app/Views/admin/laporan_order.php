<?= $this->extend(session('user')->user_type . '_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Laporan Order </h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row d-flex justify-content-start">
            <form action="<?= base_url(session('user')->user_type . '/laporan') ?>" method="post" class="col-md-10">
                <?= csrf_field() ?>
                <div class="row d-flex align-items-end">
                    <div class="col-md-3 form-group mr-4">
                        <label for="">Dari Tanggal</label>
                        <input class="datepicker-here form-control digits" type="text" data-language="en" data-bs-original-title="" title="" name="tgldari">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['tgl'])) : ?>
                                <?= session('errors')['tgl'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-3 form-group mr-2">
                        <label for="">Sampai Tanggal</label>
                        <input class="datepicker-here form-control digits" type="text" data-language="en" data-bs-original-title="" title="" name="tglsampai">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['tgl'])) : ?>
                                <?= session('errors')['tgl'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">Status</label>
                        <select class="form-select <?= (isset(session('errors')['status'])) ? 'is-invalid' : '' ?>" id="status" name="status">
                            <option value="">Semua</option>
                            <?php foreach ($status as $s) : ?>
                                <option value="<?= $s->statusorder_kode ?>" <?= (isset($_POST['status']) && $_POST['status'] == $s->statusorder_kode) ? 'selected' : '' ?>><?= $s->statusorder_nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['status'])) : ?>
                                <?= session('errors')['status'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <button class="btn btn-primary btn" type="submit"><i class="icon-filter"></i> Filter</button>
                    </div>
                </div>
            </form>
            <?php if ($items != null) : ?>
                <?php $kode = ''; ?>
                <?php if ($statusorder != null) {
                    $kode = $statusorder->statusorder_kode;
                } ?>
                <form action="<?= base_url(session('user')->user_type . '/cetak-laporan/' . $kode) ?>" method="get" class="col-md-2 d-flex align-items-end">
                    <div class="row">
                        <input type="hidden" name="tgldari" value="<?= (isset($_POST['tgldari'])) ? $_POST['tgldari'] : null ?>">
                        <input type="hidden" name="tglsampai" value="<?= (isset($_POST['tglsampai'])) ? $_POST['tglsampai'] : null ?>">
                        <input type="hidden" name="status" value="<?= (isset($_POST['status'])) ? $_POST['status'] : null ?>">
                        <div class="form-group col-md-12">
                            <button class="btn btn-secondary btn" type="submit"><i class="icon-printer"></i> Cetak</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        </div>
        <?php if ($items != null) : ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5><?= ($statusorder != null) ? $statusorder->statusorder_nama : '' ?></h5><span></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Nomor Invoice</th>
                                            <th>Tgl Pesan</th>
                                            <th>Kota/Provinsi</th>
                                            <th>Alamat</th>
                                            <th>Jasa Kirim</th>
                                            <th>Resi</th>
                                            <th>Status</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total = 0; ?>
                                        <?php foreach ($items as $i) : ?>
                                            <tr>
                                                <td>#<?= $i->invoice_nomor ?></td>
                                                <td><?= $i->invoice_tanggal ?></td>
                                                <td><?= $i->city ?>/<?= $i->province ?></td>
                                                <td><?= $i->invoice_alamat ?></td>
                                                <td><?= $i->invoice_pengiriman ?></td>
                                                <td><?= $i->invoice_resi ?></td>
                                                <td><?= $i->invoice_status ?> (<?= $i->statusorder_nama ?>)</td>
                                                <td>Rp<?= number_format(($total += $i->invoice_totalharga + $i->invoice_ongkir), 0, ',', '.') ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                        <tr>
                                            <td colspan="7"><b>Total</b></td>
                                            <th>Rp<?= number_format($total, 0, ',', '.') ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- Container-fluid Ends-->
</div>

<?= $this->endSection(); ?>
<?= $this->section('plugincss'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/date-picker.css">
<?= $this->endSection(); ?>
<?= $this->section('plugins'); ?>
<script src="<?= base_url('assets/admin') ?>/js/datepicker/date-picker/datepicker.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/datepicker/date-picker/datepicker.custom.js"></script>
<?= $this->endSection(); ?>