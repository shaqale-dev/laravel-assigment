<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@email.com',
                'country' => 'USA',
                'zip' => '123',
                'status' => 'Member',
            ],
            [
                'first_name' => 'Mark',
                'last_name' => 'Otto',
                'email' => 'mark@email.com',
                'country' => 'UK',
                'zip' => '456',
                'status' => 'Member',
            ],
            [
                'first_name' => 'Jacob',
                'last_name' => 'Thornton',
                'email' => 'jacob@email.com',
                'country' => 'AU',
                'zip' => '789',
                'status' => 'Active',
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
