<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['course_code' => 101, 'course_name' => 'Introduction to Programming', 'capacity' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['course_code' => 102, 'course_name' => 'Data Structures', 'capacity' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['course_code' => 103, 'course_name' => 'Database Systems', 'capacity' => 35, 'created_at' => now(), 'updated_at' => now()],
            ['course_code' => 104, 'course_name' => 'Web Development', 'capacity' => 50, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('courses')->insertOrIgnore($courses);
    }
}
