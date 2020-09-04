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
        $data = [
            [
                'name'       => 'Author not found',
                'email'      => 'author_unknown@gmail.com',
                'password'   => bcrypt(str_random(16)),
            ],
            [
                'name'       => 'Admin',
                'email'      => 'author_@gmail.com',
                'password'   => bcrypt('123456789'),
            ],
        ];


        DB::table('users')->insert($data);
    }
}
