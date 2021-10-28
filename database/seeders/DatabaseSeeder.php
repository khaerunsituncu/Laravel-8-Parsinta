<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::create([
        //     'name' => 'Khaerun Situncu',
        //     'email' => 'khaerunsituncu@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        // ]);
        
        // foreach ($users as $user) {
        //     \App\Models\User::create($user);
        // }
        $this->call([
            // UsersSeeder::class,
            TasksSeeder::class,
        ]);
    }
}
