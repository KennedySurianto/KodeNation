<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $instructors = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'), // Hashed password
                'role' => 'instructor', // Assuming you have a role column
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'role' => 'instructor',
            ],
            [
                'name' => 'Robert Brown',
                'email' => 'robert.brown@example.com',
                'password' => Hash::make('password123'),
                'role' => 'instructor',
            ],
            [
                'name' => 'Emily White',
                'email' => 'emily.white@example.com',
                'password' => Hash::make('password123'),
                'role' => 'instructor',
            ],
            [
                'name' => 'Michael Green',
                'email' => 'michael.green@example.com',
                'password' => Hash::make('password123'),
                'role' => 'instructor',
            ],
            [
                'name' => 'Laura Black',
                'email' => 'laura.black@example.com',
                'password' => Hash::make('password123'),
                'role' => 'instructor',
            ],
        ];

        foreach ($instructors as $instructor) {
            User::create($instructor);
        }
    }
}
