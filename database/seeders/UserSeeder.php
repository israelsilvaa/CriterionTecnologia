<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        $user = new User();
        $user->name = 'israel silva';
        $user->email = 'admin@israel';
        $user->password = '123456789';
        $user->perfil_id = 1;
        $user->save();
    }
}
