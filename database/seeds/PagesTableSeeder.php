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

        $about=new Page([
          'title'=>'about',
          'uri'=>'/about',
          'content'=>'this is about us'
        ]);
        $contact=new Page([
          'title'=>'contact',
          'uri'=>'/contact',
          'content'=>'contact us'
        ]);

        $faq=  new Page([
            'title'=>'FAQ',
            'uri'=>'/another-page',
            'content'=>'this is another page'
          ]);

          $user->pages()->saveMany([
            $about,$contact,$faq
          ]);
          $about->appendNode($faq);
    }
}
