<?php

use Illuminate\Database\Seeder;
use App\roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        roles::truncate();
        roles::create(['name'=>'admin']);
        roles::create(['name'=>'journalist']);

        roles::create(['name'=>'user']);

    }
}
