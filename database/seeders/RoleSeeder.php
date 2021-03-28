<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Jetstream\Rules\Role as RulesRole;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin   = Role::create(['name'=>'Admin']);
      $register =  Role::create(['name'=>'Register']);
      $permission = Permission::create(['name' => 'admin.home']);
    }
}
