<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'id'=>'53903205Z',
                'name'=>'Jaime',
                'surname'=>'López',
                'email' => 'jaimelopez27@outlook.es',
                'email_verified_at' => now(),
                'birth_date' => '2002-09-27',
                'telephone' => '664646464',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
    }
}
