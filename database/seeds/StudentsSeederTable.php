<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
           [
               'roll_no'=>12,
               'name'=>'Pradhumna',
               'class'=>'9 B'

           ]
        ]);
    }
}
