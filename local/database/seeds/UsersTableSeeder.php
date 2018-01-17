<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'name'  => 'admin',
        	'email' => 'admin@gmail.com',
        	'password'	 => bcrypt('123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);

    }
}
