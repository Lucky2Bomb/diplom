<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] =
            [
                'name'                          => "Деканат физмата",
                'is_closed'                     => true,
                'university_name'               => 'Бирский филиал БашГУ',
                'faculty_name'                  => null,
                'specialty_name'                => null,
                'start_date'                    => null,
                'end_date'                      => null,
                'group_form_of_studying_type'   => null,
                // 'created_at'                    => '01.09.2016',
                // 'updated_at'                    => '01.09.2016',
            ];

        $data[] =
            [
                'name'                          => "МИ 2 группа",
                'is_closed'                     => false,
                'university_name'               => 'Бирский филиал БашГУ',
                'faculty_name'                  => 'Факультет физики и математики',
                'specialty_name'                => 'Педагогическое образование: Математика и информатика',
                'start_date'                    => '2016-09-01',
                'end_date'                      => '2021-05-31',
                'group_form_of_studying_type'   => 'Очная',
                // 'created_at'                    => '01.09.2016',
                // 'updated_at'                    => '01.09.2016',
            ];

        $data[] =
            [
                'name'                          => "ФМ 3 группа",
                'is_closed'                     => false,
                'university_name'               => 'Бирский филиал БашГУ',
                'faculty_name'                  => 'Факультет физики и математики',
                'specialty_name'                => 'Педагогическое образование: Физика',
                'start_date'                    => '2016-09-01',
                'end_date'                      => '2021-05-31',
                'group_form_of_studying_type'   => 'Очная',
                // 'created_at'                    => '01.09.2016',
                // 'updated_at'                    => '01.09.2016',
            ];

        $data[] =
            [
                'name'                          => "ПИ 4 группа",
                'is_closed'                     => false,
                'university_name'               => 'Бирский филиал БашГУ',
                'faculty_name'                  => 'Факультет физики и математики',
                'specialty_name'                => 'Прикладная информатика',
                'start_date'                    => '2016-09-01',
                'end_date'                      => '2021-05-31',
                'group_form_of_studying_type'   => 'Очная',
                // 'created_at'                    => '01.09.2016',
                // 'updated_at'                    => '01.09.2016',
            ];

        DB::table('groups')->insert($data);
    }
}
