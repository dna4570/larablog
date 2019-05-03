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
          DB::table('Users')->insert([
                'name'= 'test',
                'email'= 'test@test.com',
                'password'= bcrypt('testtest'),
            ]);
    }
}
