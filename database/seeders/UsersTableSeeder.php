<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User;
        $user->name="john";
        $user->email="jstratakis92@gmail.com";
        $user->password=Hash::make("original2112"); 
        $user->save();
        User::factory()->count(100)->create();
    }
}
