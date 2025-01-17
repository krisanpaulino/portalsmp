<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $table            = 'sekolah';
    protected $primaryKey       = 'sekolah_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'sekolah_nama',
        'sekolah_npsn',
        'sekolah_deskripsi',
        'sekolah_lokasi',
        'sekolah_peta',
        'sekolah_medsos',
        'sekolah_kelurahan',
        'sekolah_kecamatan',
        'sekolah_region',
        'sekolah_provinsi',
        'sekolah_foto',
        'sekolah_pos',
        'sekolah_tipe',
        'sekolah_waktupenyelenggara',
        'sekolah_telepon',
        'sekolah_email',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'sekolah_nama' => 'required',
        'sekolah_npsn' => 'required',
        'sekolah_deskripsi' => 'required',
        'sekolah_lokasi' => 'required',
        'sekolah_peta' => 'required',
        'sekolah_medsos' => 'required',
        'sekolah_kelurahan' => 'required',
        'sekolah_kecamatan' => 'required',
        // 'sekolah_region' => 'required',
        // 'sekolah_provinsi' => 'required',
        // 'sekolah_foto' => 'required',
        'sekolah_pos' => 'required',
        'sekolah_tipe' => 'required',
        'sekolah_waktupenyelenggara' => 'required',
        'sekolah_telepon' => 'required',
        'sekolah_email' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
