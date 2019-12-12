<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name'=>'henrry',
            'email'=>'henrryrj@gmail.com',
            'password'=>bcrypt('1234'),
            'role'=>'Admin'
        ]);
    }
}
