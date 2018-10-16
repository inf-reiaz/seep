<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            
            [
                ['name'=>'dev'],
                ['name'=>'superadmin'],
                ['name'=>'admin'],
                ['name'=>'user'],
            ]
        
        );
    }
}
