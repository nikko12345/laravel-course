<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //I will create 3 people
        DB::table('students')->insert([
            'first_name' => 'John Nikko',
            'middle_name' => 'Fulloso',
            'last_name' => 'Boloron'
        ]);
        DB::table('students')->insert([
            'first_name' => 'Leo ',
            'middle_name' => 'Elecion',
            'last_name' => 'Cabanig'
        ]);
        DB::table('students')->insert([
            'first_name' => 'Keinth',
            'middle_name' => 'Inabanga',
            'last_name' => 'Canete'
        ]);
    }
}
