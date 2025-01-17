<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\PendaftaranModel;
use App\Models\RiwayatModel;
use App\Models\SekolahModel;
use App\Models\TaModel;

class Home extends BaseController
{
    public function index(): string
    {
        // $pager = service('pager');
        // $model = new BeritaModel();
        // $data = [
        //     'title' => 'Portal Web SMP Kota Kupang',
        //     'berita' => $model->orderBy('berita_id', 'desc')->paginate(6),
        //     'pager' => $model->pager
        // ];
        // return view('home', $data);
        return view('home2');
    }
    public function berita(): string
    {
        // $pager = service('pager');
        $model = new BeritaModel();
        $data = [
            'title' => 'Berita',
            'berita' => $model->paginate(6),
            'pager' => $model->pager
        ];
        return view('berita_index', $data);
    }
    function beritaDetail($berita_id)
    {
        // $pager = service('pager');
        $model = new BeritaModel();
        $data = [
            'title' => 'Berita',
            'berita' => $model->find($berita_id),
        ];
        return view('berita_detail', $data);
    }
    public function sekolah(): string
    {
        // $pager = service('pager');
        $model = new SekolahModel();
        $data = [
            'title' => 'Portal Web SMP Kota Kupang',
            'sekolah' => $model->paginate(15),
            'pager' => $model->pager
        ];
        return view('sekolah_index', $data);
    }
    function sekolahDetail($sekolah_id)
    {
        // $pager = service('pager');
        $model = new SekolahModel();
        $riwayatM = new RiwayatModel();
        $data = [
            'title' => 'Sekolah',
            'sekolah' => $model->find($sekolah_id),
            'riwayat' => $riwayatM->bySekolah($sekolah_id),
        ];
        return view('sekolah_detail', $data);
    }
    function pendaftaran()
    {
        $model = new TaModel();
        $smodel = new SekolahModel();
        $data = [
            'title' => 'Pendaftaran',
            'ta' => $model->getTa(),
            'sekolah' => $smodel->findAll(),
        ];
        return view('pendaftaran_form', $data);
    }

    function daftar()
    {
        // Proses Data Sekolah
        $pendaftar = $this->request->getPost();
        // dd($pendaftar);

        // Validasi Image
        $validationRule = [
            'akta' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[akta]',
                    'is_image[akta]',
                    'mime_in[akta,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[akta,2048]',
                    // 'max_dims[file,1920,1080]',
                ],
            ],
            'kk' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[kk]',
                    'is_image[kk]',
                    'mime_in[kk,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[kk,2048]',
                    // 'max_dims[file,1920,1080]',
                ],
            ],
            'ijazah' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[ijazah]',
                    'is_image[ijazah]',
                    'mime_in[ijazah,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[ijazah,2048]',
                    // 'max_dims[file,1920,1080]',
                ],
            ],
            'pasfoto' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[pasfoto]',
                    'is_image[pasfoto]',
                    'mime_in[pasfoto,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[pasfoto,2048]',
                    // 'max_dims[file,1920,1080]',
                ],
            ],
        ];
        if (!$this->validateData([], $validationRule)) {
            $errors = ['errors' => $this->validator->getErrors()];
            dd($errors);
            return redirect()->back()->with('errors', $errors)
                ->with('message', "Toastify({'text':'Gagal Daftar! File tidak valid.', style: {
            background: '#fd2e64',
          }}).showToast()")->withInput();
        }
        $akta = $this->request->getFile('akta');
        $kk = $this->request->getFile('kk');
        $ijazah = $this->request->getFile('ijazah');
        $pasfoto = $this->request->getFile('pasfoto');
        if (!$akta->isValid()) {
            return redirect()->back()->with('errors', ['image' => 'File tidak valid'])
                ->with('message', "Toastify({'text':'Gagal mendaftar! akta tidak valid!', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
        }
        if (!$kk->isValid()) {
            return redirect()->back()->with('errors', ['image' => 'File tidak valid'])
                ->with('message', "Toastify({'text':'Gagal mendaftar! kk tidak valid!', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
        }
        if (!$ijazah->isValid()) {
            return redirect()->back()->with('errors', ['image' => 'File tidak valid'])
                ->with('message', "Toastify({'text':'Gagal mendaftar! ijazah tidak valid!', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
        }
        if (!$pasfoto->isValid()) {
            return redirect()->back()->with('errors', ['image' => 'File tidak valid'])
                ->with('message', "Toastify({'text':'Gagal mendaftar! pasfoto tidak valid!', style: {
                background: '#fd2e64',
              }}).showToast()")->withInput();
        }

        //Insert data to Sekolah
        $model = new PendaftaranModel();
        $pendaftaran_id = $model->insert($pendaftar, true);
        if ($pendaftaran_id == false) {
            // dd($model->errors());
            return redirect()->back()->with('errors', $model->errors())
                ->with('message', "Toastify({'text':'Gagal menambahkan sekolah! Data tidak lengkap', style: {
            background: '#fd2e64',
          }}).showToast()")->withInput();
        }

        //File Upload 
        $aktaname = 'akta' . $pendaftaran_id . '.' . $akta->getClientExtension();
        $akta->move('assets/img/pendaftaran', $aktaname, true);

        //Updating data 
        $data['pendaftaran_akta'] = $aktaname;

        //File Upload 
        $kkname = 'kk' . $pendaftaran_id . '.' . $kk->getClientExtension();
        $kk->move('assets/img/pendaftaran', $kkname, true);

        //Updating data 
        $data['pendaftaran_kk'] = $kkname;

        //File Upload 
        $ijazahname = 'ijazah' . $pendaftaran_id . '.' . $ijazah->getClientExtension();
        $ijazah->move('assets/img/pendaftaran', $ijazahname, true);

        //Updating data 
        $data['pendaftaran_ijazah'] = $ijazahname;

        //File Upload 
        $pasfotoname = 'pasfoto' . $pendaftaran_id . '.' . $pasfoto->getClientExtension();
        $pasfoto->move('assets/img/pendaftaran', $pasfotoname, true);

        //Updating data 
        $data['pendaftaran_pasfoto'] = $pasfotoname;


        $model->update($pendaftaran_id, $data);
        //done
        return redirect()->to('success-page')
            ->with('pendaftar', $pendaftar);
    }
    function successPage()
    {
        $data = [
            'title' => 'Sukses mendaftar',
        ];
        return view('success-page', $data);
    }
}
