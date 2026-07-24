<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['first_name'=>'John','last_name'=>'Doe','email'=>'john.doe@student.test','created_at'=>now(),'updated_at'=>now()],
            ['first_name'=>'Jane','last_name'=>'Smith','email'=>'jane.smith@student.test','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
