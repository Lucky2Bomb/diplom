<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupFormOfStudyingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = ['name' => "Очная"];
        $data[] = ['name' => "Заочная"];
        $data[] = ['name' => "Очно-заочная"];
        $data[] = ['name' => "Удалённая"];

        DB::table('group_form_of_studyings')->insert($data);
    }
}
