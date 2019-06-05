<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', '=', 'admin')->first();
        $authorRole = Role::where('name', '=', 'author')->first();

        User::truncate();

        $admin = User::create([
          'name'=>'admin',
          'email'=>'admin@admin.com',
          'password'=>bcrypt('password')
        ]);

        $ahmed = User::create([
          'name'=>'ahmed',
          'email'=>'ahmed@ahmed.com',
          'password'=>bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $ahmed->roles()->attach($authorRole);
    }
}
