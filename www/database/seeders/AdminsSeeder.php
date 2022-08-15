<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminsSeeder extends Seeder
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

		\DB::select('SET FOREIGN_KEY_CHECKS=0;');
		\DB::select(sprintf('TRUNCATE TABLE %s;', db_prefixed_table('users')));
		\DB::select('SET FOREIGN_KEY_CHECKS=1;');

        $admin_user = 
		[
			'name'       => 'Admin',
			'email'      => 'change@host.com.br',
			'password'   => \Hash::make( sprintf('%s%s%s', $prefix, $year, 'admin') ),
			'created_at' => $now
		];

        DB::transaction
		(
			function() use($admin_user)
			{
				$register = \App\Models\Admin::create($admin_user);
			},
			5
		);
    }
}
