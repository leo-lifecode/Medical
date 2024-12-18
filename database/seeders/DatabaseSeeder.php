<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Speciality;
use App\Models\User;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;
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
                'role' => 'admin',
                'image' => "User-images/user-1.jpg",
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'image' => "User-images/user-1.jpg",
            ],
        ]);

        Speciality::insert([
            [
                'name' => 'Cardiology',
                'image' => 'Speciality-images/departments-1.jpg',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ],
            [
                'name' => 'Pediatrics',
                'image' => 'Speciality-images/departments-2.jpg',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ],
            [
                'name' => 'Dentistry',
                'image' => 'Speciality-images/departments-3.jpg',
                'about' => 'Provides comprehensive healthcare services including routine check-ups,
                            preventive care, and treatment for a wide range of medical conditions.',
            ]
        ]);

        Doctor::insert([
            [
                'name' => 'Dr. John Doe',
                'age' => '35',
                'gender' => 'Male',
                'image' => "Doctor-images/doctors-1.jpg",
                'speciality_id' => 1,
                'email' => 'admin@gmail.com',
                'phone' => '123-456-7890',
                'password' => Hash::make('12345678'),
                'bio' => 'Dr. Petra Winsburry is a seasoned general medicine practitioner with over 15 years of experience in providing comprehensive healthcare services. He is dedicated to ensuring the overall well-being of his patients through routine check-ups and preventive care.',
                'location' => '123 Main Street, Anytown, USA',
                'schedule' => 'Monday to Friday: 9:00 AM - 5:00 PM'
            ],
            [
                'name' => 'Dr. Jane Doe',
                'age' => '28',
                'gender' => 'Female',
                'image' => 'Doctor-images/doctors-3.jpg',
                'speciality_id' => 1,
                'email' => 'janedoe@gmail.com',
                'phone' => '987-654-3210',
                'password' => Hash::make('12345678'),
                'bio' => 'Dr. Jane Doe is a skilled pediatrician specializing in childrens health. She has a passion for providing compassionate care to children and their families.',
                'location' => '456 Elm Street, Anytown, USA',
                'schedule' => 'Monday to Friday: 9:00 AM - 5:00 PM'
            ]
        ]);


        DB::table('appointments')->insert([
            [
                'user_id' => 2, // Sesuaikan dengan ID user
                'email' => 'user@gmail.com',
                'phone' => '987-654-3210',
                'treatment' => 'Routine Check-up',
                'doctor_id' => 1, // Sesuaikan dengan ID doctor
                'status' => 'Pending',
                'date' => '2024-12-20',
                'time' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'email' => 'user@gmail.com',
                'phone' => '987-654-3210',
                'treatment' => 'Pediatrics Consultation',
                'doctor_id' => 2,
                'status' => 'Approved',
                'date' => '2024-12-21',
                'time' => '14:00:00',
            ],
        ]);

        $faker = Faker::create();

        // Mendapatkan dokter secara acak untuk dihubungkan dengan pasien
        $doctors = Doctor::all();

        // Membuat 10 data pasien palsu
        foreach (range(1, 10) as $index) {
            Patient::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'image' => $faker->imageUrl(640, 480, 'people'), // URL gambar palsu
                'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
                'age' => $faker->numberBetween(18, 90),
                'dob' => $faker->date('Y-m-d', '2000-01-01'), // Tanggal lahir (dob)
                'notes' => json_encode([ // Menggunakan JSON untuk menyimpan beberapa catatan
                    [
                        'date' => 'Jun 8, 2027, 4:45 PM',
                        'condition' => 'Asthma',
                        'instructions' => 'Ensure the patient always carries an inhaler and avoids allergy triggers.'
                    ],
                    [
                        'date' => 'Apr 9, 2028, 9:15 AM',
                        'condition' => 'Hypertension',
                        'instructions' => 'Advise the patient to engage in light exercise and monitor blood pressure weekly.'
                    ],
                    [
                        'date' => 'Oct 10, 2027, 2:30 PM',
                        'condition' => 'Type 2 Diabetes',
                        'instructions' => 'Patient needs to monitor blood sugar levels regularly & follow the recommended diet.'
                    ]
                ]),
                'room' => $faker->word, // bisa diganti sesuai format kamar
                'treatment' => $faker->word, // bisa diganti sesuai treatment yang tersedia
                'doctor_id' => $doctors->random()->id, // Menghubungkan dengan dokter secara acak
            ]);
        }
    }
}
