<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $appointments = [
            [
                'doctor_id' => 1,
                'user_id' => 1,
                'appointment_date' => '2023-07-05',
                'appointment_time' => '10:00:00',
                'phonenumber' => '0657454545',
                'description' => 'Appointment for consultation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Add more sample data as needed
        ];

        DB::table('appointments')->insert($appointments);
    }
}
