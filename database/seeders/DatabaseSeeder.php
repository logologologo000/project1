<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user -> name = "Pannawit Chaloemphummiphat";
        $user -> username = "admin";
        $user -> email = "pannawitt.ch@gmail.com";
        $user -> password = Hash::make("1234");
        $user-> save();
        //insert into user (id , name , username brbabrabra) values (null , "pannawit chaloemphummipaht")
    }
}
