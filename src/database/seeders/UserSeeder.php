<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Userモデルをインポート
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // パスワードはハッシュ化
        ]);
    }
}