<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $doctors = [
            [
                'name' => 'Dr. John Doe',
                'specialty' => 'Cardiology',
                'email' => 'johndoe@example.com',
                'phone' => '1234567890',
                'address' => '123 Main Street, City',
                'birth_date' => '1980-05-15',
                'gender' => 'Male',
                'bio' => 'Dr. John Doe is a highly experienced cardiologist...',
            ],
            [
                'name' => 'Dr. Jane Smith',
                'specialty' => 'Pediatrics',
                'email' => 'janesmith@example.com',
                'phone' => '9876543210',
                'address' => '456 Elm Street, City',
                'birth_date' => '1985-09-21',
                'gender' => 'Female',
                'bio' => 'Dr. Jane Smith specializes in providing care for infants and children...',
            ],
            // Add more sample data as needed
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}
