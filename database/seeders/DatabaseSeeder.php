<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Divisi::factory(3)->create();
        Karyawan::factory(6)->create();
        \App\Models\Barang::factory(12)->create();
    }
}
