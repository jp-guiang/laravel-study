<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

    User::truncate();
    Category::truncate();

    $user = User::factory()->create();

    $personal = Category::create([
      'name' => 'Personal',
      'slug' => 'personal',
    ]);

    $famemely = Category::create([
      'name' => 'Famemely',
      'slug' => 'famemely',
    ]);

    $work = Category::create([
      'name' => 'Work',
      'slug' => 'work',
    ]);

    Post::create([
      'user_id' => $user->id,
      'category_id' => $famemely->id,
      'title' => 'My Famemely Post',
      'slug' => 'my-famemely-post',
      'excerpt' => 'Famemely Excerpt',
      'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ]);

    Post::create([
      'user_id' => $user->id,
      'category_id' => $personal->id,
      'title' => 'My Personal Post',
      'slug' => 'my-personal-post',
      'excerpt' => 'Personal Excerpt',
      'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ]);

    Post::create([
      'user_id' => $user->id,
      'category_id' => $work->id,
      'title' => 'My Work Post',
      'slug' => 'my-work-post',
      'excerpt' => 'Work Excerpt',
      'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
    ]);
  }
}
