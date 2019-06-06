<?php
use App\User;
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Post::truncate();

        $admin->pages()->saveMany([
          new Post([
            'title' => 'Blog Post 1',
            'slug' => 'blog-post-1',
            'excerpt' => 'Blog post 1 excerpt',
            'body' => 'This is the first blog post'
          ]),
          new Post([
            'title' => 'Blog Post 2',
            'slug' => 'blog-post-2',
            'excerpt' => 'Blog post 2 excerpt',
            'body' => 'This is the second blog post'
          ]),
          new Post([
            'title' => 'Blog Post 3',
            'slug' => 'blog-post-3',
            'excerpt' => 'Blog post 3 excerpt',
            'body' => 'This is the third blog post'
          ]),
          new Post([
            'title' => 'Blog Post 4',
            'slug' => 'blog-post-4',
            'excerpt' => 'Blog post 4 excerpt',
            'body' => 'This is the fourth blog post'
          ]),
        ]);
    }
}
