<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now    = Carbon::now();
        $prefix = trim(DB::getTablePrefix(), '_');
        $year   = Carbon::now()->year;

        // truncate the table users, set disable foreign key check, use Schema facade
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        $admin_user =
        [
            'name'       => User::ROLE_ADMIN,
            'email'      => 'admin@umstudio.com.br',
            'password'   => \Hash::make(sprintf('%s%s%s', $prefix, $year, 'admin')),
            'created_at' => $now
        ];

        $master_user =
        [
            'name'       => User::ROLE_MASTER,
            'email'      => 'master@umstudio.com.br',
            'password'   => \Hash::make(sprintf('%s%s%s', $prefix, $year, 'master')),
            'created_at' => $now
        ];

        $developer_user =
        [
            'name'       => User::ROLE_DEVELOPER,
            'email'      => 'developer@umstudio.com.br',
            'password'   => \Hash::make(sprintf('%s%s%s', $prefix, $year, 'developer')),
            'created_at' => $now
        ];

        DB::transaction(
            function () use ($admin_user, $master_user, $developer_user) {
                $role_admin  = Role::whereName(User::ROLE_ADMIN)->first();
                $role_master = Role::whereName(User::ROLE_MASTER)->first();
                $role_dev    = Role::whereName(User::ROLE_DEVELOPER)->first();

                $register = User::create($admin_user);
                $register->roles()->attach($role_admin);

                $register = User::create($master_user);
                $register->roles()->attach($role_admin);
                $register->roles()->attach($role_master);

                $register = User::create($developer_user);
                $register->roles()->attach($role_admin);
                $register->roles()->attach($role_master);
                $register->roles()->attach($role_dev);
            },
            5
        );
    }
}
