<?php

namespace App\Database\Seeds;

use App\Models\Admin;
use App\Models\File;
use App\Models\User;
use CodeIgniter\Database\Seeder;
use CodeIgniter\Files\File as FilesFile;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $file = new File();
        $path = 'storage/user/images';
        $avatarFile = new FilesFile(FCPATH.'/storage/user/images/default.png', true);
        $file->insert([
            'name' => $avatarFile->getBasename(),
            'path' => $path,
            'type' => $avatarFile->getMimeType(),
            'size' => $avatarFile->getSize(),
        ]);
        $user->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'rahasia',
            'avatar' => $file->getInsertID(),
            'phone_number' => '081234567890',
            'address' => 'Jl. Kebon Jeruk No. 1',
        ]);
    }
}
