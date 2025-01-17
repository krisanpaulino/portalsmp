<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'username',
        'user_password',
        // 'user_active',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'user_id' => 'permit_empty',
        'username' => 'required|is_unique[user.username, user_id, {user_id}]',
        'user_password' => 'required',
        'password_confirmation' => 'required|matches[user_password]'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['hashPassword'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
    {

        if (isset($data['data']['user_password'])) {
            $data['data']['user_password'] = password_hash($data['data']['user_password'], PASSWORD_DEFAULT);
            // unset($data['data']['password']);
        }
        // dd($data);
        return $data;
    }
    public function findUser($username)
    {
        $this->where('username', $username);
        return $this->first();
    }
    public function findActive()
    {
        return $this->findAll();
    }
}
