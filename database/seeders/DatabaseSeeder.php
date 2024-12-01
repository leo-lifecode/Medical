<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'user'
            ],
        ]);

        Speciality::insert([
            [
                'name' => 'Cardiology',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ],
            [
                'name' => 'Pediatrics',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ],
            [
                'name' => 'Dentistry',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ]
        ]);

        Doctor::insert([
            [
                'name' => 'Dr. John Doe',
                'age' => '35',
                'gender' => 'Male',
                'speciality_id' => 1,
                'email' => 'johndoe@gmail.com',
                'phone' => '123-456-7890',
                'password' => Hash::make('12345678'),
                'bio' => 'Dr. Petra Winsburry is a seasoned general medicine practitioner with over 15 years of experience in providing comprehensive healthcare services. He is dedicated to ensuring the overall well-being of his patients through routine check-ups and preventive care.',
                'location' => '123 Main Street, Anytown, USA',
                'schedule' => 'Monday to Friday: 9:00 AM - 5:00 PM'
            ]
        ]);
    }
}
