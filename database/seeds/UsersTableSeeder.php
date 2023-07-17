<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->updateOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'role_id' => 1,
            'status' => 1,
            'name' => 'admin',
            'password' => Hash::make('NPTdev123@#'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user->syncRoles('admin');
    }
}
