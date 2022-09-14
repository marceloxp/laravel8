<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RolesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = \Carbon\Carbon::now();

        Schema::disableForeignKeyConstraints();
		\App\Models\Role::truncate();
		\DB::table('role_user')->truncate();
		Schema::enableForeignKeyConstraints();

		$public_role = 
		[
			'name'        => 'Public',
			'description' => 'Public User',
			'color'       => 'Cinza',
			'created_at'  => $now
		];
		$register = \App\Models\Role::create($public_role);
		
		$admin_role = 
		[
			'name'        => 'Admin',
			'description' => 'Generic Admin User',
			'color'       => 'Azul',
			'created_at'  => $now
		];
		$register = \App\Models\Role::create($admin_role);

		$master_role = 
		[
			'name'        => 'Master',
			'description' => 'Master Admin User',
			'color'       => 'Verde',
			'created_at'  => $now
		];
		$register = \App\Models\Role::create($master_role);

		$developer_role = 
		[
			'name'        => 'Developer',
			'description' => 'Developer Admin User',
			'color'       => 'Laranja',
			'created_at'  => $now
		];
		$register = \App\Models\Role::create($developer_role);
	}
}
