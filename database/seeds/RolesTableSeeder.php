<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create([
          'name'=>'admin',
          'description'=>'admin'
        ]);

        Role::create([
          'name'=>'editor',
          'description'=>'editor'
        ]);

        Role::create([
          'name'=>'author',
          'description'=>'author'
        ]);
    }
}
