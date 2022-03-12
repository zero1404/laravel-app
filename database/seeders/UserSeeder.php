<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['firstname' => 'An',
                'lastname' => 'Nhật',
                'avatar' => 'https://lh3.googleusercontent.com/a-/AOh14GgbTYnLp4THmULBL3hvWinMgGV7V0stfA_Jr8_izw=s96-c-rg-br100',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()],
    
        ]);
    }
}
