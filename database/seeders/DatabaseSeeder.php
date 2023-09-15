<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certification;
use App\Models\Employment;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'ArchipelAdmin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>NOW(),
            'address'=>'Douala',
            'phone_number'=>'237656144363',
            'is_admin'=>1
        ]);
    }
}
