<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use DB;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // php artisan iseed states --noindex --exclude=updated_at,deleted_at,created_at --force

        Schema::disableForeignKeyConstraints();
        DB::table('states')->truncate();
        Schema::enableForeignKeyConstraints();
        
        DB::table('states')->insert(array (
            
            array (
                'id' => 1,
                'name' => 'Acre',
                'uf' => 'AC',
            ),
            
            array (
                'id' => 2,
                'name' => 'Alagoas',
                'uf' => 'AL',
            ),
            
            array (
                'id' => 3,
                'name' => 'Amazonas',
                'uf' => 'AM',
            ),
            
            array (
                'id' => 4,
                'name' => 'Amapá',
                'uf' => 'AP',
            ),
            
            array (
                'id' => 5,
                'name' => 'Bahia',
                'uf' => 'BA',
            ),
            
            array (
                'id' => 6,
                'name' => 'Ceará',
                'uf' => 'CE',
            ),
            
            array (
                'id' => 7,
                'name' => 'Distrito Federal',
                'uf' => 'DF',
            ),
            
            array (
                'id' => 8,
                'name' => 'Espírito Santo',
                'uf' => 'ES',
            ),
            
            array (
                'id' => 9,
                'name' => 'Goiás',
                'uf' => 'GO',
            ),
            
            array (
                'id' => 10,
                'name' => 'Maranhão',
                'uf' => 'MA',
            ),
            
            array (
                'id' => 11,
                'name' => 'Minas Gerais',
                'uf' => 'MG',
            ),
            
            array (
                'id' => 12,
                'name' => 'Mato Grosso do Sul',
                'uf' => 'MS',
            ),
            
            array (
                'id' => 13,
                'name' => 'Mato Grosso',
                'uf' => 'MT',
            ),
            
            array (
                'id' => 14,
                'name' => 'Pará',
                'uf' => 'PA',
            ),
            
            array (
                'id' => 15,
                'name' => 'Paraíba',
                'uf' => 'PB',
            ),
            
            array (
                'id' => 16,
                'name' => 'Pernambuco',
                'uf' => 'PE',
            ),
            
            array (
                'id' => 17,
                'name' => 'Piauí',
                'uf' => 'PI',
            ),
            
            array (
                'id' => 18,
                'name' => 'Paraná',
                'uf' => 'PR',
            ),
            
            array (
                'id' => 19,
                'name' => 'Rio de Janeiro',
                'uf' => 'RJ',
            ),
            
            array (
                'id' => 20,
                'name' => 'Rio Grande do Norte',
                'uf' => 'RN',
            ),
            
            array (
                'id' => 21,
                'name' => 'Rondônia',
                'uf' => 'RO',
            ),
            
            array (
                'id' => 22,
                'name' => 'Roraima',
                'uf' => 'RR',
            ),
            
            array (
                'id' => 23,
                'name' => 'Rio Grande do Sul',
                'uf' => 'RS',
            ),
            
            array (
                'id' => 24,
                'name' => 'Santa Catarina',
                'uf' => 'SC',
            ),
            
            array (
                'id' => 25,
                'name' => 'Sergipe',
                'uf' => 'SE',
            ),
            
            array (
                'id' => 26,
                'name' => 'São Paulo',
                'uf' => 'SP',
            ),
            
            array (
                'id' => 27,
                'name' => 'Tocantins',
                'uf' => 'TO',
            ),
        ));
        
        
    }
}