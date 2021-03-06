<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        //
        DB::table('users')->insert([
            'is_active'=>1,
            'role_id'=>1, // administrator id
            'name' => 'Tom',
            'email'=>'vanhoutte.tom@gmail.com',
            'photo_id'=>1,
            'password'=>bcrypt(12345678), // maakt een wachtwoord aan door bcrypt
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'), // is een package => methodchaning
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'), // is een package => methodchaning
        ]);
        User::factory()->count(100)->create();
    }
}
