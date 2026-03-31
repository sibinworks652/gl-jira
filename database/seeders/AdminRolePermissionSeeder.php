<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AdminRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'dashboard.view',
            'admins.view',
            'admins.create',
            'admins.update',
            'admins.delete',
            'roles.view',
            'roles.create',
            'roles.update',
            'roles.delete',
            'permissions.view',
            'permissions.assign',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'admin');
        }

        $systemAdminRole = Role::findOrCreate('system-admin', 'admin');
        $systemAdminRole->syncPermissions(Permission::where('guard_name', 'admin')->get());

        $admin = Admin::updateOrCreate(
            ['email' => 'admin@gl-jira.com'],
            [
                'name' =>  'System Admin',
                'password' => Hash::make('Admin@12345'),
                'is_active' => true,
            ]
        );

        $admin->syncRoles([$systemAdminRole]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
