<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'manager gudang',
            'email' => 'managergudang@example.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER GUDANG',
            'updated_at' => now(),
            'created_at' => now(),
        ]);


        User::create([
            'nama' => 'admin gudang',
            'email' => 'admingudang@example.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN GUDANG',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'staff gudang',
            'email' => 'staffgudang@example.com',
            'password' => Hash::make('password'),
            'role' => 'STAFF GUDANG',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'manager purchasing',
            'email' => 'managerpurchasing@example.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER PURCHASING',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'admin purchasing',
            'email' => 'adminpurchasing@example.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN PURCHASING',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'staff purchasing',
            'email' => 'staffpurchasing@example.com',
            'password' => Hash::make('password'),
            'role' => 'STAFF PURCHASING',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'manager produksi',
            'email' => 'managerproduksi@example.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER PRODUKSI',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'admin produksi',
            'email' => 'adminproduksi@example.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN PRODUKSI',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'staff produksi',
            'email' => 'staffproduksi@example.com',
            'password' => Hash::make('password'),
            'role' => 'STAFF PRODUKSI',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'manager HRD',
            'email' => 'managerhrd@example.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER HRD',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'admin HRD',
            'email' => 'adminhrd@example.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN HRD',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'staff HRD',
            'email' => 'staffhrd@example.com',
            'password' => Hash::make('password'),
            'role' => 'STAFF HRD',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'manager keuangan',
            'email' => 'managerkeuangan@example.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER KEUANGAN',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'admin keuangan',
            'email' => 'adminkeuangan@example.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN KEUANGAN',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        User::create([
            'nama' => 'staff keuangan',
            'email' => 'staffkeuangan@example.com',
            'password' => Hash::make('password'),
            'role' => 'STAFF KEUANGAN',
            'updated_at' => now(),
            'created_at' => now(),
        ]);


}
}

