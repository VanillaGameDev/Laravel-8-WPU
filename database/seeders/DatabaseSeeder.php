<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'windah basudara',
            'email' => 'windahgeming@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Mirza',
            'email' => 'mirzageming@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'GameDev',
            'slug' => 'game-dev'
        ]);

        Post::create([
            'title' => 'judul satu',
            'slug' => 'judul-satu',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum. Dignissimos fuga ipsum similique nam accusamus mollitia at facilis? Dolores
            minima esse harum sit doloribus, facilis totam omnis sunt eaque eveniet aspernatur quas deleniti incidunt officiis
            vel. Necessitatibus, distinctio. Ducimus consequatur cum molestias ullam mollitia voluptatibus deleniti deserunt
            commodi sapiente. Eligendi praesentium similique numquam eveniet magnam, corrupti dolores aspernatur fugiat
            dolorum? In praesentium modi, magni eum labore recusandae voluptas consequuntur. Quae voluptate maxime laudantium
            dolore repellat.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'judul dua',
            'slug' => 'judul-dua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum. Dignissimos fuga ipsum similique nam accusamus mollitia at facilis? Dolores
            minima esse harum sit doloribus, facilis totam omnis sunt eaque eveniet aspernatur quas deleniti incidunt officiis
            vel. Necessitatibus, distinctio. Ducimus consequatur cum molestias ullam mollitia voluptatibus deleniti deserunt
            commodi sapiente. Eligendi praesentium similique numquam eveniet magnam, corrupti dolores aspernatur fugiat
            dolorum? In praesentium modi, magni eum labore recusandae voluptas consequuntur. Quae voluptate maxime laudantium
            dolore repellat.',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'judul tiga',
            'slug' => 'judul-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates, quis tenetur corporis
            totam provident vitae consequatur ut earum, quam commodi error similique aliquid non mollitia ex nam reiciendis
            ipsum excepturi? Ipsum, quam rerum. Dignissimos fuga ipsum similique nam accusamus mollitia at facilis? Dolores
            minima esse harum sit doloribus, facilis totam omnis sunt eaque eveniet aspernatur quas deleniti incidunt officiis
            vel. Necessitatibus, distinctio. Ducimus consequatur cum molestias ullam mollitia voluptatibus deleniti deserunt
            commodi sapiente. Eligendi praesentium similique numquam eveniet magnam, corrupti dolores aspernatur fugiat
            dolorum? In praesentium modi, magni eum labore recusandae voluptas consequuntur. Quae voluptate maxime laudantium
            dolore repellat.',
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }
}
