<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        Page::truncate();

        $user->pages()->saveMany([
          new Page([
            'title'=>'about',
            'uri'=>'/about',
            'content'=>'this is about us'
          ]),
          new Page([
            'title'=>'contact',
            'uri'=>'/contact',
            'content'=>'contact us'
          ]),
          new Page([
            'title'=>'another page',
            'uri'=>'/another-page',
            'content'=>'this is another page'
          ]),
        ]);
    }
}
