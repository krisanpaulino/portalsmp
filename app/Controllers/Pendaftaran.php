<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftaranModel;
use App\Models\SekolahModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $sekolah_id = $this->request->getVar('sekolah_id');
        $pendaftaran_ta = $this->request->getVar('pendaftaran_ta');
        $action = $this->request->getVar('action');
        // dd($tanggal);
        $model = new PendaftaranModel();
        $mSekolah = new SekolahModel();
        $pendaftaran = $model->getPendaftaran($sekolah_id, $pendaftaran_ta);
        if ($action == null || $action == 'Filter') {
            $data = [
                'title' => 'Pendaftaran',
                'pendaftaran' => $pendaftaran,
                'ta' => $model->getTahun(),
                'sekolah' => $mSekolah->findAll(),
                'sekolah_id' => $sekolah_id,
                'pendaftaran_ta' => $pendaftaran_ta,
            ];
            return view('admin/pendaftaran_index', $data);
        } else {
            $tanggal = date("Y-m-d");
            $data = [
                'title' => 'Laporan Pendaftaran',
                'pendaftaran' => $pendaftaran,
                'tanggal' => $tanggal
            ];
            $filename = $tanggal . '-laproran-pendaftaran';

            // instantiate and use the dompdf class
            $options = new Options();
            $options->set('isRemoteEnabled', TRUE);
            $dompdf = new Dompdf();
            $dompdf->setOptions($options);

            // load HTML content
            $dompdf->loadHtml(view('admin/pendaftaran_laporan', $data));

            // (optional) setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // render html as PDF
            $dompdf->render();

            // output the generated pdf
            return $dompdf->stream($filename);
        }
    }

    function detail($pendaftaran_id)
    {
        $model = new PendaftaranModel();
        $data = [
            'title' => 'Detail Pendaftaran',
            'pendaftaran' => $model->detail($pendaftaran_id),
        ];
        return view('admin/pendaftaran_detail', $data);
    }
}
