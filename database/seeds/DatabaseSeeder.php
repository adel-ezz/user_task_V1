<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $add=new User();
        $add->create([
            'name' => 'MainAdmin',
            'email' =>'admin@gmail.com',
            'password'=>bcrypt(123123),
            'is_admin'=>1
        ]);
    }
}
