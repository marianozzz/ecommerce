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

      Permission::create(['name' => 'admin.home']);

      Permission::create(['name' => 'admin.users.index']);
      Permission::create(['name' => 'admin.users.create']);
      Permission::create(['name' => 'admin.users.edit']);
      Permission::create(['name' => 'admin.users.destroy']);

    }
}
