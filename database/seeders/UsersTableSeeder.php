<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('11111111'),
            'remember_token' => 'yXdaDkfSXfjO9dQS3cd1HOSpDhFkE7W1jcuLf8fXOrpqEOf6zMGvn4nV1uaT',
        ]);
    }
}
