<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10) . ' NAME',
            'description' => str_random(10). ' DESC',
            'flag' => rand(0,1)
        ]);
        //
    }
}
