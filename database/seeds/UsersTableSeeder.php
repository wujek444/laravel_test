<?php

use Illuminate\Database\Seeder;
use App\User; //korzystamy z klasy User(użytkownik)

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tworzymy obiekty klasy (wpisujemy dane do bazy)
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->password = bcrypt('user');
        $user->save();


        $user = new User();
        $user->name = 'user2';
        $user->email = 'user2@example.com';
        $user->password = bcrypt('user2');
        $user->save();


        $user = new User();
        $user->name = 'user3';
        $user->email = 'user3@example.com';
        $user->password = bcrypt('user3');
        $user->save();
    }
}
