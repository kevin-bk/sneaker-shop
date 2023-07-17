<?php

use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as AliasRole;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (RolePermission::LIST_PERMISSION_DASHBOARD as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_POST as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_PRODUCT as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_PAGE as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_COMMENT as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_MEDIA as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_SETTING as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        foreach (RolePermission::LIST_PERMISSION_USER as $key => $value) {
            $condition = [
                'id' => $key,
                'name' => $value,
                'guard_name' => RolePermission::GUARD_NAME_ADMIN,
            ];
            $data = [
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('role_permissions')->updateOrInsert($condition, $data);
        }

        // create permission


        // assign permission for role
        self::setHasPermissionAdmin();
        self::setHasPermissionManager();
        self::setHasPermissionEditor();

        // set user ID permission 1
        $myUser = User::query()->where('id', 1)->first();
        if (!empty($myUser->id)) {
            $myUser->syncRoles([Role::ROLE_CODE_ADMIN]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }

    public static function setHasPermissionAdmin()
    {
        $permissions = Permission::all();
        $role = AliasRole::findByName(Role::ROLE_CODE_ADMIN);

        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission->name)) {
                $role->givePermissionTo($permission->name);
            }
        }
    }

    public static function setHasPermissionManager()
    {
        $permissions = Permission::all();
        $role = AliasRole::findByName(Role::ROLE_CODE_MANAGER_MANAGER);

        foreach ($permissions as $permission) {
            if (!in_array($permission->name, RolePermission::PERMISSION_ALLOW_MANAGER)) {
                continue;
            }

            if (!$role->hasPermissionTo($permission->name)) {
                $role->givePermissionTo($permission->name);
            }
        }
    }

    public static function setHasPermissionEditor()
    {
        $permissions = Permission::all();
        $role = AliasRole::findByName(Role::ROLE_CODE_EDITOR);

        foreach ($permissions as $permission) {
            if (!in_array($permission->name, RolePermission::PERMISSION_ALLOW_EDITOR)) {
                continue;
            }

            if (!$role->hasPermissionTo($permission->name)) {
                $role->givePermissionTo($permission->name);
            }
        }
    }
}
