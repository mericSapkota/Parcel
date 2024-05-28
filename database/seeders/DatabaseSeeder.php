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
            'password' => bcrypt('admin')
        ]);

        DB::table('admins')->insert([
            'parcel_id'=>'1'
        ]);


        DB::table('parcel_details')->insert([
            'parcel_id' => '1',
            'address' => 'Thecho',
            'date' => '2024-01-01',
            'remarks' => 'test1',
            'status' => 'Order Confirmed',
            'time' => '10:10:00',
        ]);

        DB::table('parcel_details')->insert([
            'parcel_id' => '1',
            'address' => 'Lagankhel',
            'date' => '2024-01-02',
            'status' => 'Reached Lagankhel',
            'remarks' => 'Shipped to Lagankhel',
            'time' => '9:00:00',

        ]);

       
    }
}
