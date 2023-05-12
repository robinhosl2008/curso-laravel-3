<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')
            ->insert([
                'name' => 'Robson S Pacheco Lourenço',
                'email' => 'robinhosl2008@gmail.com',
                'password' => password_hash('teste', PASSWORD_ARGON2ID)
            ]);
    }
}
