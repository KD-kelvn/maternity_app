<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $doctors = [
            [
                'name' => 'Dr. Kelvin Msindai',
                'specialty' => 'Cardiology',
                'email' => 'kelvin@example.com',
                'phone' => '0657676767',
                'address' => 'Kigamboni, Dar es salaam',
                'birth_date' => '1980-05-15',
                'gender' => 'Male',
                'hospital' => 'Kigamboni',
                'password' => Hash::make('12345'), // Hash the password for security
                'bio' => 'Dr. Kelvin Msindai is a highly experienced cardiologist...',
            ],
            [
                'name' => 'Dr. Jane Smith',
                'specialty' => 'Pediatrics',
                'email' => 'janesmith@example.com',
                'phone' => '9876543210',
                'address' => '456 Elm Street, Dar es salaam',
                'birth_date' => '1985-09-21',
                'gender' => 'Female',
                'hospital' => 'Muhimbili',
                'password' => Hash::make('12345'), // Hash the password for security
                'bio' => 'Dr. Jane Smith specializes in providing care for infants and children...',
            ],
            // Add more sample data as needed
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}
