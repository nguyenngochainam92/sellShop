<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $lipsum = new LoremIpsumGenerator;

        Role::create([
            'title' => 'Administrartor',
            'slug'  => 'admin'
        ]);

        Role::create([
            'title' => 'Redactor',
            'slug'  => 'redac'
        ]);

        Role::create([
            'title' => 'User',
            'slug'  => 'user'
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@la.fr',
            'password' => bcrypt('admin'),
            'seen' =>true,
            'role_id'=>1,
            'confirmed' =>true
        ]);

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
