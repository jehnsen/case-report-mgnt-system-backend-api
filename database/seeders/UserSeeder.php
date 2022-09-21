<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'firstname' => 'Admin',
            'lastname' => '',
            'username' => 'admin',
            'password' => '$2y$10$HISXN0QX/ZvDs6J3CR2fUuAcgcaH1xehR3luj..WVMZ1MkPFM6FBa',
            'usertype' => 'Administrator',
            'division' => 'NA'
        ]);
    }
}
