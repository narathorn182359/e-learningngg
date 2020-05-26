<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'adminpage']);
        Role::create(['name' => 'employee']);
        
        DB::table('users')->insert([
            'username' => "admin",
            'password' => bcrypt('0000'),
        ]);
        $user = User::find(1);
        $user->assignRole('adminpage');

        DB::table('users')->insert([
            'username' => "94018",
            'password' => bcrypt('0000'),
        ]);
        $user = User::find(2);
        $user->assignRole('employee');

    }
}
