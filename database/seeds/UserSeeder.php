<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user = new User();
        $new_user->name = 'Mario';
        $new_user->surname = 'Rossi';
        $new_user->address = 'Via Roma';
        $new_user->street_number = 1;
        $new_user->city = 'Roma';
        $new_user->county = 'Roma';
        $new_user->password = 'user1234';
        $new_user->email = 'user@gmail.com';
        $new_user->profile_pic = '';
        $new_user->cv = '';
        $new_user->phone_number = '0123456789';

        $new_user->save();
    }
}
