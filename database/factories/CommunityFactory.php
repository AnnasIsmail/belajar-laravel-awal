<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Communities>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'LinkDiscord' => 'https://discord.gg/e3GqQdhGaN',
            'Name' => 'Komunitas Kangkuk',
            'Slug' => 'Komunitas Kangkuk1',
            'Description' => 'Akun - Akun Yang dibawah naungan bos kangkuk',
            'UrlImage' => 'https://images.unsplash.com/photo-1559583985-c80d8ad9b29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxMDY1OTc2fHxlbnwwfHx8fA%3D%3D&w=1000&q=80'
        ];
    }
}
