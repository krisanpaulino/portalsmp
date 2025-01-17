<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table            = 'pendaftaran';
    protected $primaryKey       = 'pendaftaran_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'pendaftaran_nama',
        'pendaftaran_tgllahir',
        'pendaftaran_alamat',
        'pendaftaran_email',
        'pendaftaran_ortu',
        'pendaftaran_kontak',
        'sekolah_id',
        'pendaftaran_tanggal',
        'pendaftaran_akta',
        'pendaftaran_kk',
        'pendaftaran_ijazah',
        'pendaftaran_pasfoto',
        'pendaftaran_ta'
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
        'pendaftaran_nama' => 'required',
        'pendaftaran_tgllahir' => 'required',
        'pendaftaran_alamat' => 'required',
        'pendaftaran_email' => 'required',
        'pendaftaran_ortu' => 'required',
        'pendaftaran_kontak' => 'required',
        'sekolah_id' => 'required',
        // 'pendaftaran_tanggal' => 'required',
        // 'pendaftaran_akta' => 'required',
        // 'pendaftaran_kk' => 'required',
        // 'pendaftaran_ijazah' => 'required',
        // 'pendaftaran_pasfoto' => 'required',
        'pendaftaran_ta' => 'required',
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

    function getTahun()
    {
        $this->select('pendaftaran_ta');
        $this->groupBy('pendaftaran_ta');
        return $this->find();
    }
    function getPendaftaran($sekolah_id = null, $pendaftaran_ta = null)
    {
        $this->join('sekolah', 'sekolah.sekolah_id = pendaftaran.sekolah_id');
        if ($sekolah_id != null) {
            $this->where('pendaftaran.sekolah_id', $sekolah_id);
        }
        if ($pendaftaran_ta != null) {
            $this->where('pendaftaran_ta', $pendaftaran_ta);
        }
        return $this->find();
    }
    function detail($pendaftaran_id)
    {
        $this->join('sekolah', 'sekolah.sekolah_id = pendaftaran.sekolah_id');
        return $this->find($pendaftaran_id);
    }
}
