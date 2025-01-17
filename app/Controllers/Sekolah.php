<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RiwayatModel;
use App\Models\SekolahModel;
use App\Models\TaModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class Sekolah extends BaseController
{
    public function index()
    {
        $model = new SekolahModel();
        $data = [
            'title' => 'Daftar Sekolah',
            'sekolah' => $model->findAll()
        ];
        return view('admin/sekolah_index', $data);
    }
    function tambah()
    {
        $data = [
            'title' => 'Tambah Sekolah',
        ];
        return view('admin/sekolah_tambah', $data);
    }
    function insert()
    {

        // Proses Data Sekolah
        $datasekolah = $this->request->getPost();
        // dd($this->request->getFile('file'));

        // Validasi Image
        $validationRule = [
            'file' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,2048]',
                    // 'max_dims[file,1920,1080]',
                ],
            ],
        ];
        if (!$this->validateData([], $validationRule)) {
            $errors = ['errors' => $this->validator->getErrors()];
            return redirect()->back()->with('errors', $errors)
                ->with('message', "Toastify({'text':'Gagal 1 menambahkan sekolah! File tidak valid.', style: {
            background: '#fd2e64',
          }}).showToast()")->withInput();
        }
        $file = $this->request->getFile('file');
        if (!$file->isValid()) {
            return redirect()->back()->with('errors', ['image' => 'File tidak valid'])
                ->with('message', "Toastify({'text':'Gagal menambahkan sekolah File tidak valid!', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
        }

        //Insert data to Sekolah
        $model = new SekolahModel();
        $sekolah_id = $model->insert($datasekolah, true);
        if ($sekolah_id == false) {
            // dd($model->errors());
            return redirect()->back()->with('errors', $model->errors())
                ->with('message', "Toastify({'text':'Gagal menambahkan sekolah! Data tidak lengkap', style: {
            background: '#fd2e64',
          }}).showToast()")->withInput();
        }

        //File Upload 
        $filename = 'sekolah' . $sekolah_id . '.' . $file->getClientExtension();
        $file->move('assets/img/sekolah', $filename, true);

        //Updating data in sekolah
        $data['sekolah_foto'] = $filename;
        $model->update($sekolah_id, $data);


        //done
        return redirect()->to('admin/sekolah')
            ->with('message', "Toastify({'text':'Sekolah ditambahkan!'}).showToast()");
    }
    function edit($sekolah_id)
    {
        $model = new SekolahModel();

        $data = [
            'title' => 'Edit Sekolah',
            'sekolah' => $model->find($sekolah_id),
        ];
        return view('admin/sekolah_edit', $data);
    }
    function detail($sekolah_id)
    {
        $model = new SekolahModel();
        $riwayatM = new RiwayatModel();
        $data = [
            'title' => 'Detail Sekolah',
            'sekolah' => $model->find($sekolah_id),
            'riwayat' => $riwayatM->bySekolah($sekolah_id)
        ];
        return view('admin/sekolah_detail', $data);
    }
    function update()
    {
        $sekolah_id = $this->request->getPost('sekolah_id');
        // Proses Data Sekolah
        $datasekolah = $this->request->getPost();
        $file = $this->request->getFile('file');
        // dd($file->getName());

        // Validasi Image Jika Image tidak kosong
        if ($this->request->getFile('file') != null && $file->getName() != '') {
            $validationRule = [
                'file' => [
                    'label' => 'Image File',
                    'rules' => [
                        'uploaded[file]',
                        'is_image[file]',
                        'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                        'max_size[file,2048]',
                        // 'max_dims[file,1920,1080]',
                    ],
                ],
            ];
            if (!$this->validateData([], $validationRule)) {
                $errors = ['errors' => $this->validator->getErrors()];
                return redirect()->back()->with('errors', $errors)
                    ->with('message', "Toastify({'text':'Gagal 1 update sekolah! File tidak valid', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
            }
            $file = $this->request->getFile('file');
            if ($file->getName() == '') {
                return redirect()->back()->with('errors', ['file' => 'File tidak valid'])
                    ->with('message', "Toastify({'text':'Gagal update sekolah! File tidak valid', style: {
                    background: '#fd2e64',
                  }}).showToast()")->withInput();
            }
        }

        //Update data to sekolah
        $model = new SekolahModel();
        if (!$model->where('sekolah_id', $sekolah_id)->set($datasekolah)->update()) {
            dd($model->errors());
            return redirect()->back()->with('errors', $model->errors())
                ->with('message', "Toastify({'text':'Gagal update sekolah! Data tidak lengkap', style: {
            background: '#fd2e64',
          }}).showToast()")->withInput();
        }

        // File upload dan update data cover di sekolah JIKA IMAGE NOT NULL
        if ($file->getName() != '') {
            //File Upload 
            $filename = 'sekolah' . $sekolah_id . '.' . $file->getClientExtension();
            $file->move('assets/img/sekolah', $filename, true);

            //Updating data in sekolah still necessary in case we got different extension
            $data['sekolah_foto'] = $filename;
            $model->update($sekolah_id, $data);
        }

        //done
        return redirect()->back()
            ->with('message', "Toastify({'text':'Sekolah diupdate!'}).showToast()");
    }
    function delete()
    {
        $sekolah_id = $this->request->getPost('sekolah_id');
        // dd($sekolah_id);
        $model = new SekolahModel();
        $model->where('sekolah_id', $sekolah_id);
        $model->delete();
        return redirect()->back()
            ->with('message', "Toastify({'text':'Sekolah dihapus!'}).showToast()");
    }
    function insertRiwayat()
    {
        $data = $this->request->getPost();
        $model = new RiwayatModel();
        if (!$model->insert($data)) {
            return redirect()->back()->with('errors', $model->errors())
                ->with('message', "Toastify({'text':'Gagal update sekolah! Data tidak lengkap', style: {
        background: '#fd2e64',
      }}).showToast()")->withInput();
        }
        return redirect()->back()
            ->with('message', "Toastify({'text':'Riwayat ditambahakan!'}).showToast()");
    }
    function deleteRiwayat()
    {
        $riwayat_id = $this->request->getPost('riwayat_id');
        // dd($riwayat_id);
        $model = new RiwayatModel();
        $model->where('riwayat_id', $riwayat_id);
        $model->delete();
        return redirect()->back()
            ->with('message', "Toastify({'text':'Riwayat dihapus!'}).showToast()");
    }

    function ta()
    {
        $model = new TaModel();
        $data = [
            'title' => 'Periode',
            'ta' => $model->getTa()
        ];
        return view('admin/ta_index', $data);
    }
    function taDelete()
    {
        $ta_id = $this->request->getPost('ta_id');
        // dd($ta_id);
        $model = new TaModel();
        $model->where('ta_id', $ta_id);
        $model->delete();
        return redirect()->back()
            ->with('message', "Toastify({'text':'Periode ditutup!'}).showToast()");
    }
    function taInsert()
    {
        $data = $this->request->getPost();
        $model = new TaModel();
        if (!$model->insert($data)) {
            return redirect()->back()->with('errors', $model->errors())
                ->with('message', "Toastify({'text':'Gagal menambahkan TA! Data tidak lengkap', style: {
        background: '#fd2e64',
      }}).showToast()")->withInput();
        }
        return redirect()->back()
            ->with('message', "Toastify({'text':'Periode ditambahakan!'}).showToast()");
    }

    function laporan()
    {
        $tanggal = date("Y-m-d");
        $model = new SekolahModel();
        $sekolah = $model->findAll();
        $data = [
            'title' => 'Laporan Sekolah',
            'sekolah' => $sekolah,
            'tanggal' => $tanggal
        ];
        $filename = $tanggal . '-laproran-sekolah';

        // instantiate and use the dompdf class
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf();
        $dompdf->setOptions($options);

        // load HTML content
        $dompdf->loadHtml(view('admin/sekolah_laporan', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        return $dompdf->stream($filename);
    }
}
