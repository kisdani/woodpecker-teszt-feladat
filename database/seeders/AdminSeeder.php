<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->password = Hash::make("admin123");
        $admin->save();
    }
}
