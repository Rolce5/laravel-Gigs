<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory()->create();

        $user= User::factory()->create([
            'name'=>'TITASHIPU SERGE',
            'email'=>'titashipuserge@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id'=> $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' =>'laravel,javascript',
        //     'company'=>'Acme Corp',
        //     'location'=>'Buea CM',
        //     'email' =>'titashipuserge@gmail.com',
        //     'website'=>'https://www.acme.com',
        //     'description'=>'This is a website where you can
        //     post job and find job '
        // ]);
        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' =>'laravel,java',
        //     'company'=>'Acme Corp',
        //     'location'=>'Buea CM',
        //     'email' =>'titashipuserge@gmail.com',
        //     'website'=>'https://www.acme.com',
        //     'description'=>'This is a website where you can
        //     post job and find job '
        // ]);
    }
}
