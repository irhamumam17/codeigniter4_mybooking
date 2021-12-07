<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'admins';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username',
        'password',
        'email',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';

    // Validation
    protected $validationRules      = [
        'username' => 'required|alpha_numeric_space|min_length[3]|max_length[20]',
        'password' => 'required|min_length[6]|max_length[20]',
        'email'    => 'required|valid_email',
    ];
    protected $validationMessages   = [
        'username' => [
            'required' => 'Username harus diisi',
            'alpha_numeric_space' => 'Username hanya boleh berisi huruf dan angka',
            'min_length' => 'Username minimal 3 karakter',
            'max_length' => 'Username maksimal 20 karakter',
        ],
        'password' => [
            'required' => 'Password harus diisi',
            'min_length' => 'Password minimal 6 karakter',
            'max_length' => 'Password maksimal 20 karakter',
        ],
        'email' => [
            'required' => 'Email harus diisi',
            'valid_email' => 'Email tidak valid',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [
        'hashPassword',
    ];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [
        'hashPassword',
    ];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
    {
        if(isset($data['data']['password']))
        {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
