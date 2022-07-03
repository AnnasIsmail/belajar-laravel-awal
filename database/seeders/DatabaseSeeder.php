<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Communities;
use App\Models\detail_communities;
use App\Models\Account;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Users::create([
            'FirstName' => 'Annas',
            'LastName' => 'Ismail',
            'Slug' => 'Annas1',
            'Username' => 'Annas123',
            'Email' => 'annas@gmail.com',
            'Password' => 'annasPassword',
            'UrlImage' => 'https://awsimages.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90'
        ]);

        Users::create([
            'FirstName' => 'Ansellma',
            'LastName' => 'Putri',
            'Slug' => 'Ansellma2',
            'Username' => 'Ansellma123',
            'Email' => 'ansell@gmail.com',
            'Password' => 'Ansell123',
            'UrlImage' => 'https://i.pinimg.com/originals/44/47/d4/4447d410926006981dca927da8a8af4e.jpg'
        ]);
        
        Account::create([
            'communities_id' => 1,
            'RiotId' => 'LUHUTFORPRESIDEN',
            'Slug' => 'LUHUTFORPRESIDEN1',
            'TagLine' => 'NGNTT',
            'Rank' => 'Silver 1',
            'Username' => 'annas2111',
            'Password' => 'Annas211112345'
        ]);

        Account::create([
            'communities_id' => 1,
            'RiotId' => 'LUHUTFORPRESIDEN',
            'Slug' => 'LUHUTFORPRESIDEN2',
            'TagLine' => 'DREAM',
            'Rank' => 'Silver 1',
            'Username' => 'annas2110',
            'Password' => 'Annas211012345'
        ]);

        Communities::create([
            'LinkDiscord' => 'https://discord.gg/e3GqQdhGaN',
            'Name' => 'Komunitas Kangkuk',
            'Slug' => 'Komunitas Kangkuk1',
            'Description' => 'Akun - Akun Yang dibawah naungan bos kangkuk',
            'UrlImage' => 'https://images.unsplash.com/photo-1559583985-c80d8ad9b29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxMDY1OTc2fHxlbnwwfHx8fA%3D%3D&w=1000&q=80'
        ]);

        detail_communities::create([
            'users_id' => 1,
            'Role' => 'Owner',
            'communities_id' => 1
        ]);

        detail_communities::create([
            'users_id' => 2,
            'Role' => 'Member',
            'communities_id' => 1
        ]);

    }
}
