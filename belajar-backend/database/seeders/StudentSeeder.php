<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh dari Database Seeder
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Bayu', 'gender' => 'L', 'nim' => 'E31212345', 'class_id' => 1],
        //     ['name' => 'Ayu', 'gender' => 'P', 'nim' => 'E31212346', 'class_id' => 2],
        //     ['name' => 'Indah', 'gender' => 'P', 'nim' => 'E31212347', 'class_id' => 3],
        //     ['name' => 'Gilang', 'gender' => 'L', 'nim' => 'E31212348', 'class_id' => 4],
        //     ['name' => 'Dwi', 'gender' => 'P', 'nim' => 'E31212349', 'class_id' => 5],
        // ];

        // foreach ($data as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nim' => $value['nim'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(20)->create();
    }
}
