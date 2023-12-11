<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "firstname"=>'super admin',
            "lastname"=>'admin',
            "username"=>'tcmt_super',
            'password'=>hash::make("Tcmt_admin_1234"),
            "role"=>'super admin'
        ]);
    }
}
