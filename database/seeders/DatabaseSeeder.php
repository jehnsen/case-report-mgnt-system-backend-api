<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'firstname' => 'Admin',
            'lastname' => '',
            'username' => 'admin',
            'password' => '$2y$10$HISXN0QX/ZvDs6J3CR2fUuAcgcaH1xehR3luj..WVMZ1MkPFM6FBa',
            'usertype' => 'Administrator',
            'division' => ''
        ]);
    }
}
