<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_id' => '1',
            'username' => 'sampleuser',
            'job_position' => 'Developer',
            'password' => Hash::make('password123'), // Hash the password
            'fullname' => 'John Doe',
            'department' => 'IT Department',
            'division' => 'Development Division',
        ]);

    }
}
