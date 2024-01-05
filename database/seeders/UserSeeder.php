<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_users = [
            [
                'name' => 'Luigi',
                'email' => 'gigi@gigi.it',
                'password' => 'ciaociao',
                'date_of_birth' => '1988-04-18',
            ],
            [
                'name' => 'Jordi',
                'email' => 'jordi@jordi.it',
                'password' => 'ciaociao',
                'date_of_birth' => '1996-04-21',
            ]
        ];
        foreach ($_users as $_user) {
            $user = new User();
            $user->name = $_user['name'];
            $user->email = $_user['email'];
            $user->password = Hash::make($_user['password']);
            $user->date_of_birth = $_user['date_of_birth'];
            $user->save();
        }
    }
}
