<?= $this->extend(session('user')->user_type . '_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Order Masuk</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Order Masuk</li>
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
                        <h5>Order Masuk</h5><span></span>
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
                                        <th>Total Bayar</th>
                                        <th>Waktu Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($invoice as $i) : ?>
                                        <tr>
                                            <td><?= $i->invoice_nomor ?></td>
                                            <td><?= $i->invoice_tanggal ?></td>
                                            <td><?= $i->city ?>/<?= $i->province ?></td>
                                            <td><?= $i->invoice_alamat ?></td>
                                            <td>Rp<?= number_format($i->invoice_totalharga + $i->invoice_ongkir, 0, ',', '.') ?></td>
                                            <td><?= $i->invoice_bayar ?></td>
                                            <td>
                                                <a href="<?= base_url(session('user')->user_type . '/order/' . $i->invoice_nomor) ?>" class="badge bg-primary text-light">Detail</a>
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