<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = ['name' => "студент"];
        $data[] = ['name' => "новости"];
        $data[] = ['name' => "преподаватель"];
        $data[] = ['name' => "секретарь"];
        $data[] = ['name' => "декан"];
        $data[] = ['name' => "зам. декана"];

        DB::table('positions')->insert($data);
    }
}
