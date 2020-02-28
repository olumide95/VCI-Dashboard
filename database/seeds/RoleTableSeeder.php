<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = [

           ['name' => 'Admin', 'permissions' => ['role-list', 'role-create', 'role-edit', 'role-delete',  'organisation-list',  'organisation-create', 'organisation-edit', 'organisation-delete','organisations-request-list']],
           
           ['name' => 'Organisation', 'permissions' => [ 'request-list',  'request-create', 'request-edit', 'request-delete']],
            
           ['name' => 'Requester', 'permissions' => [ 'request-list',  'request-create', 'request-edit', 'request-delete']],

           ['name' => 'Inspector', 'permissions' => [ 'report-create']],


           
        ];


        foreach ($roles as $role) {
             $role = Role::create(['name' => $role['name']]);

             foreach ($role['permissions'] as $permission) {
               $role->givePermissionTo($permission);
            }
             
        }
    }
}
