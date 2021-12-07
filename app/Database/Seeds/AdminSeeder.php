<?php

namespace App\Database\Seeds;

use App\Models\Admin;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'rahasia',
        ];
        $admin = new Admin();
        $admin->insert($data);
    }
}
