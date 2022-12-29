<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $sub_admin         = Role::create(['name' => 'admin']);
        // $userRole       = Role::create(['name'=> 'Editor User']);


        //permission group wise
        $permissionGroups = [
            'admin-dashboard' => [
                'admin-dashboard.view',
            ],

            'users' => [
                'users.list',
                'users.create',
                'users.show',
                'users.edit',
                'users.update',
                'users.destroy',
            ],

            'roles' => [
                'roles.list',
                'roles.create',
                'roles.edit',
                'roles.update',
                'roles.destroy',
            ],
            'permissions' => [
                'permissions.list',
                'permissions.create',
                'permissions.edit',
                'permissions.update',
                'permissions.destroy',
            ],


        ];
        $clientPermission = [
            'users.list',
            'users.create',
            'users.show',
            'users.edit',
            'users.update',
            'users.destroy',

        ];

        //insert the permission and assign it to a role
        foreach ($permissionGroups as $permissionGroupsKey => $permissions) {
            foreach ($permissions as  $permissionName) {
                $permission = Permission::create([
                    'group_name' => $permissionGroupsKey,
                    'name'       => $permissionName,
                ]);

                $superAdminRole->givePermissionTo($permission);
                $permission->assignRole($superAdminRole);

                if (in_array($permissionName, $clientPermission)) {
                    $sub_admin->givePermissionTo($permission);
                    $permission->assignRole($sub_admin);
                }
            }
        }
    }
}
