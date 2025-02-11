<?= $this->extend('admin_layout'); ?>
<?= $this->section('content') ?>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <div class="col-xl-5 box-col-12 des-xl-100">
                <div class="row">
                    <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                        <div class="card income-card card-primary">
                            <div class="card-body text-center">
                                <div class="round-box">
                                    <!-- Icons Here -->
                                    <svg width="64px" height="64px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M23 8V29.5H9.00001V8C8.99897 7.6698 9.0797 7.34448 9.235 7.05308C9.3903 6.76167 9.61533 6.51326 9.89001 6.33L14.89 3C15.2187 2.78072 15.6049 2.6637 16 2.6637C16.3951 2.6637 16.7813 2.78072 17.11 3L22.11 6.33C22.3847 6.51326 22.6097 6.76167 22.765 7.05308C22.9203 7.34448 23.001 7.6698 23 8Z" fill="#2E7D32"></path>
                                            <path d="M27 15.5H23V29.5H27C27.7956 29.5 28.5587 29.1839 29.1213 28.6213C29.6839 28.0587 30 27.2956 30 26.5V18.5C30 17.7044 29.6839 16.9413 29.1213 16.3787C28.5587 15.8161 27.7956 15.5 27 15.5Z" fill="#FF6F00"></path>
                                            <path d="M18 17.5H14C13.7348 17.5 13.4804 17.6054 13.2929 17.7929C13.1054 17.9804 13 18.2348 13 18.5V29.5H15V19.5H17V29.5H19V18.5C19 18.2348 18.8946 17.9804 18.7071 17.7929C18.5196 17.6054 18.2652 17.5 18 17.5Z" fill="#263238"></path>
                                            <path d="M18 10.5H14C13.7348 10.5 13.4804 10.3946 13.2929 10.2071C13.1054 10.0196 13 9.76522 13 9.5C13 9.23478 13.1054 8.98043 13.2929 8.79289C13.4804 8.60536 13.7348 8.5 14 8.5H18C18.2652 8.5 18.5196 8.60536 18.7071 8.79289C18.8946 8.98043 19 9.23478 19 9.5C19 9.76522 18.8946 10.0196 18.7071 10.2071C18.5196 10.3946 18.2652 10.5 18 10.5Z" fill="#F5F5F5"></path>
                                            <path d="M18 14.5H14C13.7348 14.5 13.4804 14.3946 13.2929 14.2071C13.1054 14.0196 13 13.7652 13 13.5C13 13.2348 13.1054 12.9804 13.2929 12.7929C13.4804 12.6054 13.7348 12.5 14 12.5H18C18.2652 12.5 18.5196 12.6054 18.7071 12.7929C18.8946 12.9804 19 13.2348 19 13.5C19 13.7652 18.8946 14.0196 18.7071 14.2071C18.5196 14.3946 18.2652 14.5 18 14.5Z" fill="#F5F5F5"></path>
                                            <path d="M14.91 2.99995L9.91 6.32995C9.63162 6.5109 9.40266 6.75831 9.2438 7.04986C9.08493 7.34141 9.00114 7.66793 9 7.99995V29.4899H16V2.69995C15.6157 2.69581 15.238 2.79976 14.91 2.99995Z" fill="#388E3C"></path>
                                            <path d="M14 17.49C13.7348 17.49 13.4804 17.5953 13.2929 17.7829C13.1054 17.9704 13 18.2248 13 18.49V29.49H15V19.49H16V17.49H14Z" fill="#37474F"></path>
                                            <path d="M14 8.48999C13.7348 8.48999 13.4804 8.59535 13.2929 8.78288C13.1054 8.97042 13 9.22477 13 9.48999C13 9.75521 13.1054 10.0096 13.2929 10.1971C13.4804 10.3846 13.7348 10.49 14 10.49H16V8.48999H14Z" fill="#F5F5F5"></path>
                                            <path d="M14 12.49C13.7348 12.49 13.4804 12.5953 13.2929 12.7829C13.1054 12.9704 13 13.2248 13 13.49C13 13.7552 13.1054 14.0096 13.2929 14.1971C13.4804 14.3846 13.7348 14.49 14 14.49H16V12.49H14Z" fill="#F5F5F5"></path>
                                            <path d="M5 15.49C4.60603 15.49 4.21593 15.5676 3.85195 15.7184C3.48797 15.8691 3.15726 16.0901 2.87868 16.3687C2.6001 16.6472 2.37913 16.978 2.22836 17.3419C2.0776 17.7059 2 18.096 2 18.49V26.49C2 27.2856 2.31607 28.0487 2.87868 28.6113C3.44129 29.1739 4.20435 29.49 5 29.49H9V15.49H5Z" fill="#F9A825"></path>
                                            <path d="M27 15.5H23V7.49996C22.9991 7.33526 22.9576 7.17331 22.8791 7.02851C22.8006 6.88371 22.6876 6.76055 22.55 6.66996L16.55 2.66996C16.3867 2.56243 16.1955 2.50513 16 2.50513C15.8045 2.50513 15.6133 2.56243 15.45 2.66996L9.45 6.66996C9.31244 6.76055 9.19938 6.88371 9.12088 7.02851C9.04237 7.17331 9.00085 7.33526 9 7.49996V15.5H5C4.20435 15.5 3.44129 15.816 2.87868 16.3786C2.31607 16.9413 2 17.7043 2 18.5V28.5C2 28.7652 2.10536 29.0195 2.29289 29.2071C2.48043 29.3946 2.73478 29.5 3 29.5H29C29.2652 29.5 29.5196 29.3946 29.7071 29.2071C29.8946 29.0195 30 28.7652 30 28.5V18.5C30 17.7043 29.6839 16.9413 29.1213 16.3786C28.5587 15.816 27.7956 15.5 27 15.5ZM4 18.5C4 18.2347 4.10536 17.9804 4.29289 17.7929C4.48043 17.6053 4.73478 17.5 5 17.5H9V27.5H4V18.5ZM11 16.5V7.99996L16 4.69996L21 7.99996V27.5H11V16.5ZM28 27.5H23V17.5H27C27.2652 17.5 27.5196 17.6053 27.7071 17.7929C27.8946 17.9804 28 18.2347 28 18.5V27.5Z" fill="#263238"></path>
                                        </g>
                                    </svg>
                                    <!-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                                    </svg> -->

                                </div>
                                <h5><?= $sekolahCount ?></h5>
                                <p>Sekolah </p><a class="btn-arrow arrow-primary" href="<?= base_url('admin/sekolah') ?>"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>Lihat Sekolah</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                        <div class="card income-card card-secondary">
                            <div class="card-body text-center">
                                <div class="round-box">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                <h5><?= $pendaftarCount ?></h5>
                                <p>Pendaftar</p><a class="btn-arrow arrow-secondary" href="<?= base_url('admin/pendaftaran') ?>"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>Lihat Pendaftaran </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Laporan Jumlah SMP Per Kecamatan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table-border-vertical table">
                            <thead>
                                <tr>
                                    <th>Kecamatan</th>
                                    <th>Negeri</th>
                                    <th>Swasta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kecamatan as $row) : ?>
                                    <tr>
                                        <td><?= $row->sekolah_kecamatan ?></td>
                                        <td><?= $row->negeri ?></td>
                                        <td><?= $row->swasta ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-8 box-col-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Grafik Pendaftaran Sekolah</h5>
                    </div>
                    <div class="card-body">
                        <div id="basic-bar"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<?= $this->endSection(); ?>
<?= $this->section('plugincss'); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/vector-map.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/prism.css">
<?= $this->endSection(); ?>
<?= $this->section('plugins'); ?>
<script src="<?= base_url('assets/admin') ?>/js/counter/counter-custom.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/custom-card/custom-card.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/dashboard/default.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/clipboard/clipboard.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/chart/apex-chart/apex-chart.js"></script>
<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    var options2 = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            data: [<?php foreach ($sekolah as $row) : ?><?= $row->jumlah ?>, <?php endforeach ?>]
        }],
        xaxis: {
            categories: [<?php foreach ($sekolah as $row) : ?> '<?= $row->sekolah_nama ?>', <?php endforeach ?>],
        },
        colors: [vihoAdminConfig.primary]
    }

    var chart2 = new ApexCharts(
        document.querySelector("#basic-bar"),
        options2
    );

    chart2.render();
</script>
<?= $this->endSection(); ?>