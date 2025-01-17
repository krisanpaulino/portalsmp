<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.2;
            /* Reduced line spacing */
            font-size: 12px;
            /* Reduced font size */
            color: #333;
            background-color: #fff;
            margin: 10px;
            /* Reduced margin for content area */
        }

        .container {
            width: 100%;
            margin: auto;
            padding: 10px;
            /* Reduced padding */
            box-sizing: border-box;
        }

        header {
            text-align: center;
            margin-bottom: 10px;
            /* Reduced space below header */
        }

        .company-info {
            width: 100%;
            margin-bottom: 10px;
            /* Reduced margin below company info */
            border-collapse: collapse;
            /* Ensures a clean layout */
        }

        .company-info td {
            vertical-align: middle;
            padding: 3px;
            /* Reduced padding for compactness */
            border: none;
            /* Removed all borders */
        }

        .logo {
            width: 40px;
            /* Smaller logo */
            height: 40px;
        }

        .company-name {
            font-size: 1.2em;
            /* Slightly smaller font for the company name */
            color: #2c3e50;
            font-weight: bold;
        }

        .company-details {
            font-size: 10px;
            /* Reduced font size for details */
            color: #555;
        }

        .separator {
            border-top: 1px solid #d3d3d3;
            /* Reduced thickness of the separator */
            margin: 10px 0;
        }

        h1 {
            font-size: 1.5em;
            /* Reduced font size */
            color: #2c3e50;
        }

        .report-date {
            color: #7f8c8d;
            font-size: 10px;
            /* Reduced font size for date */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            /* Reduced space below table */
            font-size: 10px;
            /* Smaller font for table content */
        }

        table th,
        table td {
            text-align: left;
            padding: 6px;
            /* Reduced padding for tighter spacing */
            border: 1px solid #ddd;
        }

        table th {
            background-color: #34495e;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <table class="company-info">
                <tr>
                    <td>
                        <div>
                            <p class="company-name">Portal Web SMP Kota Kupang</p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="separator"></div>
            <h1><?= $title ?></h1>
        </header>

        <section class="summary">
            <h5>Tanggal Cetak</h5>
            <p><?= $tanggal ?></p>
        </section>

        <section class="report-table">
            <h2>Data Pendaftar</h2>
            <table>
                <thead>
                    <tr>
                        <td width="5%">No</td>
                        <td width="20%">Nama</td>
                        <td width="20%">Sekolah</td>
                        <td width="15%">Tanggal Daftar</td>
                        <td width="15%">Tahun Ajaran</td>
                        <td width="15%">Email</td>
                        <td width="10%">Telepon Ortu</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($pendaftaran as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row->pendaftaran_nama ?></td>
                            <td><?= $row->sekolah_nama ?></td>
                            <td><?= $row->pendaftaran_tanggal ?></td>
                            <td><?= $row->pendaftaran_ta ?></td>
                            <td><?= $row->pendaftaran_email ?></td>
                            <td><?= $row->pendaftaran_kontak ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>