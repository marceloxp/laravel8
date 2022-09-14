<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        \App\Models\Config::create([
            'name' => 'initial',
            'value' => '1',
            'flags' => null,
            'status' => 'Ativo',
            'created_at' => $now,
            'updated_at' => $now,
            'deleted_at' => null,
        ]);

        \App\Models\Config::create([
            'name' => 'dbconfig.ready',
            'value' => '1',
            'flags' => null,
            'status' => 'Ativo',
            'created_at' => $now,
            'updated_at' => $now,
            'deleted_at' => null,
        ]);

        \App\Models\Config::create([
            'name' => 'cache.use',
            'value' => 's',
            'flags' => null,
            'status' => 'Ativo',
            'created_at' => $now,
            'updated_at' => $now,
            'deleted_at' => null,
        ]);
        
    }
}
