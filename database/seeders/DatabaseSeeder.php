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
            'name' => 'Rezal Wahyu Pratama',
            'email' => 'rezalwahyu29@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create(
            [
                'name' => 'Web Developer',
                'slug' => 'web-developer'
            ]
        );
        Category::create(
            [
                'name' => 'Personal',
                'slug' => 'personal'
            ]
        );

        Post::create(
            [
                'title' => 'Artikel Pertama',
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'artikel-pertama',
                'cuplikan' => 'Artikel Pertama',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel vehicula nisi. Donec vitae consequat turpis, ac mollis dolor. Donec at lectus in lectus gravida pharetra. Proin condimentum leo porta erat faucibus, vel fermentum ipsum vehicula. Nunc et tincidunt enim, sed congue ex. Ut condimentum ante placerat, lobortis enim eget, auctor elit. Integer sagittis augue pellentesque consectetur faucibus. Nullam vitae ligula vehicula massa rutrum mattis eget vitae libero. Mauris ac nulla lobortis, eleifend ipsum sollicitudin, venenatis mi. Suspendisse semper luctus mauris, nec suscipit arcu viverra eu. Quisque porta cursus gravida. Phasellus iaculis lacinia aliquet. Nulla ac nibh tempor, fermentum arcu vel, tincidunt odio. Mauris in vulputate felis. Curabitur vel sollicitudin tortor.'
            ]
        );
        Post::create(
            [
                'title' => 'Artikel Ke Dua',
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'artikel-ke-dua',
                'cuplikan' => 'Artikel Ke Dua',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel vehicula nisi. Donec vitae consequat turpis, ac mollis dolor. Donec at lectus in lectus gravida pharetra. Proin condimentum leo porta erat faucibus, vel fermentum ipsum vehicula. Nunc et tincidunt enim, sed congue ex. Ut condimentum ante placerat, lobortis enim eget, auctor elit. Integer sagittis augue pellentesque consectetur faucibus. Nullam vitae ligula vehicula massa rutrum mattis eget vitae libero. Mauris ac nulla lobortis, eleifend ipsum sollicitudin, venenatis mi. Suspendisse semper luctus mauris, nec suscipit arcu viverra eu. Quisque porta cursus gravida. Phasellus iaculis lacinia aliquet. Nulla ac nibh tempor, fermentum arcu vel, tincidunt odio. Mauris in vulputate felis. Curabitur vel sollicitudin tortor.'
            ]
        );
        Post::create(
            [
                'title' => 'Artikel Ke Tiga',
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'artikel-ke-tiga',
                'cuplikan' => 'Artikel Ke Tiga',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel vehicula nisi. Donec vitae consequat turpis, ac mollis dolor. Donec at lectus in lectus gravida pharetra. Proin condimentum leo porta erat faucibus, vel fermentum ipsum vehicula. Nunc et tincidunt enim, sed congue ex. Ut condimentum ante placerat, lobortis enim eget, auctor elit. Integer sagittis augue pellentesque consectetur faucibus. Nullam vitae ligula vehicula massa rutrum mattis eget vitae libero. Mauris ac nulla lobortis, eleifend ipsum sollicitudin, venenatis mi. Suspendisse semper luctus mauris, nec suscipit arcu viverra eu. Quisque porta cursus gravida. Phasellus iaculis lacinia aliquet. Nulla ac nibh tempor, fermentum arcu vel, tincidunt odio. Mauris in vulputate felis. Curabitur vel sollicitudin tortor.'
            ],
        );
    }
}
