<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'user_id' => '1',
            'username' => 'sampleUser',
            'job_position' => 'Developer',
            'password' => Hash::make('password123'),
            'fullname' => 'Jhon Doe',
            'department' => 'IT Department',
            'division' => 'Development Division'
        ]);
    }
}
