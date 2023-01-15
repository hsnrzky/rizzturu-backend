<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hasan Rizky',
            'username' => 'hsnrzky',
            'email' => 'hasanrizky@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::factory(5)->create();
        // Category::factory(5)->create();
        Post::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //seed berguna untuk menjalankan fake database agar terisi dengan mudah

        // User::create([
        //     'name' => 'Alwi Irfani',
        //     'email' => 'alwiirfani@example.com',
        //     'password' => bcrypt('12345678'),
        // ]);
        // User::create([
        //     'name' => 'Jundi Rahmat',
        //     'email' => 'jundirahmat@example.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos. Similique ea, molestias, in, dolorem aliquid alias quis expedita deleniti consectetur laborum fugiat. Enim, autem deserunt. Placeat, reprehenderit! Sequi veniam at voluptates doloribus in, labore exercitationem, impedit aspernatur, dolorum et expedita? Ullam exercitationem suscipit voluptatibus atque esse? Quisquam facilis totam atque perferendis natus ipsam sapiente vero fugiat temporibus dolorem distinctio ipsum sequi ab, doloremque fuga laudantium et ducimus rem illo quaerat quos. Illum incidunt sit ipsam quaerat modi facere ad adipisci error. Dolor exercitationem alias at, odit sapiente eius illo. Id, neque doloremque?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos. Similique ea, molestias, in, dolorem aliquid alias quis expedita deleniti consectetur laborum fugiat. Enim, autem deserunt. Placeat, reprehenderit! Sequi veniam at voluptates doloribus in, labore exercitationem, impedit aspernatur, dolorum et expedita? Ullam exercitationem suscipit voluptatibus atque esse? Quisquam facilis totam atque perferendis natus ipsam sapiente vero fugiat temporibus dolorem distinctio ipsum sequi ab, doloremque fuga laudantium et ducimus rem illo quaerat quos. Illum incidunt sit ipsam quaerat modi facere ad adipisci error. Dolor exercitationem alias at, odit sapiente eius illo. Id, neque doloremque?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis culpa ad ipsum, sapiente cumque placeat quos. Similique ea, molestias, in, dolorem aliquid alias quis expedita deleniti consectetur laborum fugiat. Enim, autem deserunt. Placeat, reprehenderit! Sequi veniam at voluptates doloribus in, labore exercitationem, impedit aspernatur, dolorum et expedita? Ullam exercitationem suscipit voluptatibus atque esse? Quisquam facilis totam atque perferendis natus ipsam sapiente vero fugiat temporibus dolorem distinctio ipsum sequi ab, doloremque fuga laudantium et ducimus rem illo quaerat quos. Illum incidunt sit ipsam quaerat modi facere ad adipisci error. Dolor exercitationem alias at, odit sapiente eius illo. Id, neque doloremque?',
        //     'category_id' => 3,
        //     'user_id' => 3,
        // ]);
    }
}
