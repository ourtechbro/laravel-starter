<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // Create a initial admin account
         User::create([
             'name' => 'Admin',
             'email' => 'admin@mail.com',
             'password' => bcrypt('password')
         ]);

         // Call other seeder classes
        $this->call([
            ACLDataSeeder::class
        ]);
    }
}
