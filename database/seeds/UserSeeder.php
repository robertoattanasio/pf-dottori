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
        $new_user->name = 'Roberto';
        $new_user->surname = 'Attanasio';
        $new_user->address = 'Via Muzio Clementi';
        $new_user->street_number = 49;
        $new_user->city = 'Aprilia';
        $new_user->county = 'Latina';
        $new_user->password = 'roberto1234';
        $new_user->email = 'roberto@gmail.com';
        $new_user->profile_pic = '';
        $new_user->cv = '';
        $new_user->phone_number = '3496298462';

        $new_user->save();
    }
}
