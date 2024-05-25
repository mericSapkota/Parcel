<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@123.com',
            'password' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@123.com',
            'password' => 'user@123.com'
        ]);

        DB::table('admins')->insert([
            'parcel_id' => '1',
            'address' => 'Thecho',
            'date' => '2024-01-01',
            'remarks' => 'test1'
        ]);

        DB::table('admins')->insert([
            'parcel_id' => '2',
            'address' => 'Lagankhel',
            'date' => '2024-01-01',
            'remarks' => 'test2'
        ]);

        DB::table('admins')->insert([
            'parcel_id' => '3',
            'address' => 'Patan',
            'date' => '2024-01-05',
            'remarks' => 'test3'
        ]);
    }
}
