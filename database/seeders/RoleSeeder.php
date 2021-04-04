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

     // Permission::create(['name' => 'admin.home'])->assignRole($admin);
      Permission::create(['name' => 'admin.home'])->syncRoles([$admin]);

      Permission::create(['name' => 'admin.users.index'])->syncRoles([$admin]);
      Permission::create(['name' => 'admin.users.create'])->syncRoles([$admin]);
      Permission::create(['name' => 'admin.users.edit'])->syncRoles([$admin]);
      Permission::create(['name' => 'admin.users.destroy'])->syncRoles([$admin]);

    }
}
