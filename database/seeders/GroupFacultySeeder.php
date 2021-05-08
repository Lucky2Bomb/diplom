<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupFacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = ['name' => "Факультет Педагогики"];
        $data[] = ['name' => "Факультет биологии и химии"];
        $data[] = ['name' => "Факультет физики и математики"];
        $data[] = ['name' => "Социально-гуманитарный факультет  "];
        $data[] = ['name' => "Факультет филологии и межкультурных коммуникаций"];
        $data[] = ['name' => "Инженерно-технологический факультет"];

        DB::table('group_faculties')->insert($data);
    }
}
