<?php

use Illuminate\Database\Seeder;
use App\User;
use App\roles;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('user_roles')->truncate();

        $adminRole=roles::where('name','admin')->first();
        $journalistRole=roles::where('name','journalist')->first();
        $userRole=roles::where('name','user')->first();

        $admin=User::create([
            'name'=>'admin user',
            'email'=>'admin@admin.com',
            'password'=>'password'
        ]);

        $journalist=User::create([
            'name'=>'journalist user',
            'email'=>'journalist@journalist.com',
            'password'=>'password'
        ]);

        $admin->roles()->attach($adminRole);
        $journalist->roles()->attach($journalistRole);

    }
}
