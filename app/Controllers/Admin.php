<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftaranModel;
use App\Models\SekolahModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $MSekolah = new SekolahModel();
        $MPendaftaran = new PendaftaranModel();
        $data = [
            'title' => 'Dashboard',
            'sekolahCount' => $MSekolah->countAllResults(),
            'pendaftarCount' =>  $MPendaftaran->countAllResults()
        ];
        return view('admin/dashboard', $data);
    }

    public function user()
    {
        $model = new UserModel();
        $user = $model->findActive();
        $data = [
            'title' => 'User Management',
            'user' => $user,
        ];
        return view('admin/user_index', $data);
    }

    public function storeuser()
    {
        $model = new UserModel();
        $data = $this->request->getPost();
        $data['role_id'] = 3;
        if (!$model->insert($data))
            // dd($model->errors());
            return redirect()->back()->with('danger', ' Gagal Menambahkan')->withInput()->with('errors', $model->errors());
        return redirect()->back()->with('success', 'Berhasil menambah user');
    }
}
