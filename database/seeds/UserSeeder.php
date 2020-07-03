<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123456') ;
        $user->phone = '123456789';
        $user->image = 'image.jpg';
        $user->role = 'Admin';
        $user->save();

        $user = new \App\User();
        $user->name = 'leaser';
        $user->email = 'leaser@gmail.com';
        $user->password = Hash::make('123456') ;
        $user->phone = '123456789';
        $user->image = 'image.jpg';
        $user->role = 'Leaser';
        $user->save();

        $user = new \App\User();
        $user->name = 'renter';
        $user->email = 'renter@gmail.com';
        $user->password = Hash::make('123456') ;
        $user->phone = '123456789';
        $user->image = 'image.jpg';
        $user->role = 'Renter';
        $user->save();
    }
}
