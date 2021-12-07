<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountryCitySeeder::class);
    }
}
