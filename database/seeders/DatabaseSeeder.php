<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
        DB::table('users')->insert([
            'name' => 'Axel Tahmid',
            'email' => 'axel.tahmid@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_admin' => true,
            'remember_token' => 'mehmeh',
        ]);

        // Author::factory(10)->create();
        // BlogCategory::factory(20)->create();
        // BlogPost::factory(5)->hasAuthor(1)->hasCategory(1)->create();
    }
}
