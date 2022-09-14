<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // php artisan iseed cities --chunksize=2000 --noindex --exclude=updated_at,deleted_at,created_at --force

        // if count of cities is more than 0, then truncate table
        if (DB::table('cities')->count() > 0) {
            Schema::disableForeignKeyConstraints();
            DB::table('cities')->truncate();
            Schema::enableForeignKeyConstraints();
        }
        DB::table('cities')->insert(array (
            
            array (
                'id' => 1,
                'state_id' => 1,
                'name' => 'Acrelândia',
            ),
            
            array (
                'id' => 2,
                'state_id' => 1,
                'name' => 'Assis Brasil',
            ),
            
            array (
                'id' => 3,
                'state_id' => 1,
                'name' => 'Brasiléia',
            ),
            
            array (
                'id' => 4,
                'state_id' => 1,
                'name' => 'Bujari',
            ),
            
            array (
                'id' => 5,
                'state_id' => 1,
                'name' => 'Capixaba',
            ),
            
            array (
                'id' => 6,
                'state_id' => 1,
                'name' => 'Cruzeiro do Sul',
            ),
            
            array (
                'id' => 7,
                'state_id' => 1,
                'name' => 'Epitaciolândia',
            ),
            
            array (
                'id' => 8,
                'state_id' => 1,
                'name' => 'Feijó',
            ),
            
            array (
                'id' => 9,
                'state_id' => 1,
                'name' => 'Jordão',
            ),
            
            array (
                'id' => 10,
                'state_id' => 1,
                'name' => 'Mâncio Lima',
            ),
            
            array (
                'id' => 11,
                'state_id' => 1,
                'name' => 'Manoel Urbano',
            ),
            
            array (
                'id' => 12,
                'state_id' => 1,
                'name' => 'Marechal Thaumaturgo',
            ),
            
            array (
                'id' => 13,
                'state_id' => 1,
                'name' => 'Plácido de Castro',
            ),
            
            array (
                'id' => 14,
                'state_id' => 1,
                'name' => 'Porto Acre',
            ),
            
            array (
                'id' => 15,
                'state_id' => 1,
                'name' => 'Porto Walter',
            ),
            
            array (
                'id' => 16,
                'state_id' => 1,
                'name' => 'Rio Branco',
            ),
            
            array (
                'id' => 17,
                'state_id' => 1,
                'name' => 'Rodrigues Alves',
            ),
            
            array (
                'id' => 18,
                'state_id' => 1,
                'name' => 'Santa Rosa do Purus',
            ),
            
            array (
                'id' => 19,
                'state_id' => 1,
                'name' => 'Sena Madureira',
            ),
            
            array (
                'id' => 20,
                'state_id' => 1,
                'name' => 'Senador Guiomard',
            ),
            
            array (
                'id' => 21,
                'state_id' => 1,
                'name' => 'Tarauacá',
            ),
            
            array (
                'id' => 22,
                'state_id' => 1,
                'name' => 'Xapuri',
            ),
            
            array (
                'id' => 23,
                'state_id' => 2,
                'name' => 'Água Branca',
            ),
            
            array (
                'id' => 26,
                'state_id' => 2,
                'name' => 'Anadia',
            ),
            
            array (
                'id' => 30,
                'state_id' => 2,
                'name' => 'Arapiraca',
            ),
            
            array (
                'id' => 31,
                'state_id' => 2,
                'name' => 'Atalaia',
            ),
            
            array (
                'id' => 36,
                'state_id' => 2,
                'name' => 'Barra de Santo Antônio',
            ),
            
            array (
                'id' => 37,
                'state_id' => 2,
                'name' => 'Barra de São Miguel',
            ),
            
            array (
                'id' => 40,
                'state_id' => 2,
                'name' => 'Batalha',
            ),
            
            array (
                'id' => 42,
                'state_id' => 2,
                'name' => 'Belém',
            ),
            
            array (
                'id' => 43,
                'state_id' => 2,
                'name' => 'Belo Monte',
            ),
            
            array (
                'id' => 47,
                'state_id' => 2,
                'name' => 'Boca da Mata',
            ),
            
            array (
                'id' => 50,
                'state_id' => 2,
                'name' => 'Branquinha',
            ),
            
            array (
                'id' => 51,
                'state_id' => 2,
                'name' => 'Cacimbinhas',
            ),
            
            array (
                'id' => 53,
                'state_id' => 2,
                'name' => 'Cajueiro',
            ),
            
            array (
                'id' => 56,
                'state_id' => 2,
                'name' => 'Campestre',
            ),
            
            array (
                'id' => 57,
                'state_id' => 2,
                'name' => 'Campo Alegre',
            ),
            
            array (
                'id' => 58,
                'state_id' => 2,
                'name' => 'Campo Grande',
            ),
            
            array (
                'id' => 61,
                'state_id' => 2,
                'name' => 'Canapi',
            ),
            
            array (
                'id' => 64,
                'state_id' => 2,
                'name' => 'Capela',
            ),
            
            array (
                'id' => 65,
                'state_id' => 2,
                'name' => 'Carneiros',
            ),
            
            array (
                'id' => 67,
                'state_id' => 2,
                'name' => 'Chã Preta',
            ),
            
            array (
                'id' => 68,
                'state_id' => 2,
                'name' => 'Coité do Nóia',
            ),
            
            array (
                'id' => 69,
                'state_id' => 2,
                'name' => 'Colônia Leopoldina',
            ),
            
            array (
                'id' => 70,
                'state_id' => 2,
                'name' => 'Coqueiro Seco',
            ),
            
            array (
                'id' => 71,
                'state_id' => 2,
                'name' => 'Coruripe',
            ),
            
            array (
                'id' => 73,
                'state_id' => 2,
                'name' => 'Craíbas',
            ),
            
            array (
                'id' => 74,
                'state_id' => 2,
                'name' => 'Delmiro Gouveia',
            ),
            
            array (
                'id' => 75,
                'state_id' => 2,
                'name' => 'Dois Riachos',
            ),
            
            array (
                'id' => 77,
                'state_id' => 2,
                'name' => 'Estrela de Alagoas',
            ),
            
            array (
                'id' => 78,
                'state_id' => 2,
                'name' => 'Feira Grande',
            ),
            
            array (
                'id' => 79,
                'state_id' => 2,
                'name' => 'Feliz Deserto',
            ),
            
            array (
                'id' => 81,
                'state_id' => 2,
                'name' => 'Flexeiras',
            ),
            
            array (
                'id' => 84,
                'state_id' => 2,
                'name' => 'Girau do Ponciano',
            ),
            
            array (
                'id' => 85,
                'state_id' => 2,
                'name' => 'Ibateguara',
            ),
            
            array (
                'id' => 86,
                'state_id' => 2,
                'name' => 'Igaci',
            ),
            
            array (
                'id' => 87,
                'state_id' => 2,
                'name' => 'Igreja Nova',
            ),
            
            array (
                'id' => 88,
                'state_id' => 2,
                'name' => 'Inhapi',
            ),
            
            array (
                'id' => 89,
                'state_id' => 2,
                'name' => 'Jacaré dos Homens',
            ),
            
            array (
                'id' => 90,
                'state_id' => 2,
                'name' => 'Jacuípe',
            ),
            
            array (
                'id' => 91,
                'state_id' => 2,
                'name' => 'Japaratinga',
            ),
            
            array (
                'id' => 92,
                'state_id' => 2,
                'name' => 'Jaramataia',
            ),
            
            array (
                'id' => 94,
                'state_id' => 2,
                'name' => 'Joaquim Gomes',
            ),
            
            array (
                'id' => 95,
                'state_id' => 2,
                'name' => 'Jundiá',
            ),
            
            array (
                'id' => 96,
                'state_id' => 2,
                'name' => 'Junqueiro',
            ),
            
            array (
                'id' => 98,
                'state_id' => 2,
                'name' => 'Lagoa da Canoa',
            ),
            
            array (
                'id' => 108,
                'state_id' => 2,
                'name' => 'Limoeiro de Anadia',
            ),
            
            array (
                'id' => 109,
                'state_id' => 2,
                'name' => 'Maceió',
            ),
            
            array (
                'id' => 110,
                'state_id' => 2,
                'name' => 'Major Isidoro',
            ),
            
            array (
                'id' => 111,
                'state_id' => 2,
                'name' => 'Mar Vermelho',
            ),
            
            array (
                'id' => 112,
                'state_id' => 2,
                'name' => 'Maragogi',
            ),
            
            array (
                'id' => 113,
                'state_id' => 2,
                'name' => 'Maravilha',
            ),
            
            array (
                'id' => 114,
                'state_id' => 2,
                'name' => 'Marechal Deodoro',
            ),
            
            array (
                'id' => 115,
                'state_id' => 2,
                'name' => 'Maribondo',
            ),
            
            array (
                'id' => 117,
                'state_id' => 2,
                'name' => 'Mata Grande',
            ),
            
            array (
                'id' => 118,
                'state_id' => 2,
                'name' => 'Matriz de Camaragibe',
            ),
            
            array (
                'id' => 119,
                'state_id' => 2,
                'name' => 'Messias',
            ),
            
            array (
                'id' => 120,
                'state_id' => 2,
                'name' => 'Minador do Negrão',
            ),
            
            array (
                'id' => 121,
                'state_id' => 2,
                'name' => 'Monteirópolis',
            ),
            
            array (
                'id' => 124,
                'state_id' => 2,
                'name' => 'Murici',
            ),
            
            array (
                'id' => 125,
                'state_id' => 2,
                'name' => 'Novo Lino',
            ),
            
            array (
                'id' => 126,
                'state_id' => 2,
                'name' => 'Olho D\'Água Grande',
            ),
            
            array (
                'id' => 127,
                'state_id' => 2,
                'name' => 'Olho D\'Água das Flores',
            ),
            
            array (
                'id' => 129,
                'state_id' => 2,
                'name' => 'Olho D\'Água do Casado',
            ),
            
            array (
                'id' => 131,
                'state_id' => 2,
                'name' => 'Olivença',
            ),
            
            array (
                'id' => 132,
                'state_id' => 2,
                'name' => 'Ouro Branco',
            ),
            
            array (
                'id' => 133,
                'state_id' => 2,
                'name' => 'Palestina',
            ),
            
            array (
                'id' => 135,
                'state_id' => 2,
                'name' => 'Palmeira dos Índios',
            ),
            
            array (
                'id' => 136,
                'state_id' => 2,
                'name' => 'Pão de Açúcar',
            ),
            
            array (
                'id' => 137,
                'state_id' => 2,
                'name' => 'Pariconha',
            ),
            
            array (
                'id' => 138,
                'state_id' => 2,
                'name' => 'Paripueira',
            ),
            
            array (
                'id' => 139,
                'state_id' => 2,
                'name' => 'Passo de Camaragibe',
            ),
            
            array (
                'id' => 142,
                'state_id' => 2,
                'name' => 'Paulo Jacinto',
            ),
            
            array (
                'id' => 143,
                'state_id' => 2,
                'name' => 'Penedo',
            ),
            
            array (
                'id' => 144,
                'state_id' => 2,
                'name' => 'Piaçabuçu',
            ),
            
            array (
                'id' => 145,
                'state_id' => 2,
                'name' => 'Pilar',
            ),
            
            array (
                'id' => 146,
                'state_id' => 2,
                'name' => 'Pindoba',
            ),
            
            array (
                'id' => 147,
                'state_id' => 2,
                'name' => 'Piranhas',
            ),
            
            array (
                'id' => 150,
                'state_id' => 2,
                'name' => 'Poço das Trincheiras',
            ),
            
            array (
                'id' => 151,
                'state_id' => 2,
                'name' => 'Porto Calvo',
            ),
            
            array (
                'id' => 152,
                'state_id' => 2,
                'name' => 'Porto de Pedras',
            ),
            
            array (
                'id' => 153,
                'state_id' => 2,
                'name' => 'Porto Real do Colégio',
            ),
            
            array (
                'id' => 155,
                'state_id' => 2,
                'name' => 'Quebrangulo',
            ),
            
            array (
                'id' => 158,
                'state_id' => 2,
                'name' => 'Rio Largo',
            ),
            
            array (
                'id' => 160,
                'state_id' => 2,
                'name' => 'Roteiro',
            ),
            
            array (
                'id' => 162,
                'state_id' => 2,
                'name' => 'Santa Luzia do Norte',
            ),
            
            array (
                'id' => 163,
                'state_id' => 2,
                'name' => 'Santana do Ipanema',
            ),
            
            array (
                'id' => 164,
                'state_id' => 2,
                'name' => 'Santana do Mundaú',
            ),
            
            array (
                'id' => 166,
                'state_id' => 2,
                'name' => 'São Brás',
            ),
            
            array (
                'id' => 167,
                'state_id' => 2,
                'name' => 'São José da Laje',
            ),
            
            array (
                'id' => 168,
                'state_id' => 2,
                'name' => 'São José da Tapera',
            ),
            
            array (
                'id' => 169,
                'state_id' => 2,
                'name' => 'São Luís do Quitunde',
            ),
            
            array (
                'id' => 170,
                'state_id' => 2,
                'name' => 'São Miguel dos Campos',
            ),
            
            array (
                'id' => 171,
                'state_id' => 2,
                'name' => 'São Miguel dos Milagres',
            ),
            
            array (
                'id' => 172,
                'state_id' => 2,
                'name' => 'São Sebastião',
            ),
            
            array (
                'id' => 175,
                'state_id' => 2,
                'name' => 'Satuba',
            ),
            
            array (
                'id' => 176,
                'state_id' => 2,
                'name' => 'Senador Rui Palmeira',
            ),
            
            array (
                'id' => 181,
                'state_id' => 2,
                'name' => 'Tanque D\'Arca',
            ),
            
            array (
                'id' => 182,
                'state_id' => 2,
                'name' => 'Taquarana',
            ),
            
            array (
                'id' => 184,
                'state_id' => 2,
                'name' => 'Teotônio Vilela',
            ),
            
            array (
                'id' => 185,
                'state_id' => 2,
                'name' => 'Traipu',
            ),
            
            array (
                'id' => 186,
                'state_id' => 2,
                'name' => 'União dos Palmares',
            ),
            
            array (
                'id' => 188,
                'state_id' => 2,
                'name' => 'Viçosa',
            ),
            
            array (
                'id' => 191,
                'state_id' => 3,
                'name' => 'Alvarães',
            ),
            
            array (
                'id' => 193,
                'state_id' => 3,
                'name' => 'Amaturá',
            ),
            
            array (
                'id' => 194,
                'state_id' => 3,
                'name' => 'Anamã',
            ),
            
            array (
                'id' => 195,
                'state_id' => 3,
                'name' => 'Anori',
            ),
            
            array (
                'id' => 196,
                'state_id' => 3,
                'name' => 'Apuí',
            ),
            
            array (
                'id' => 198,
                'state_id' => 3,
                'name' => 'Atalaia do Norte',
            ),
            
            array (
                'id' => 200,
                'state_id' => 3,
                'name' => 'Autazes',
            ),
            
            array (
                'id' => 204,
                'state_id' => 3,
                'name' => 'Barcelos',
            ),
            
            array (
                'id' => 205,
                'state_id' => 3,
                'name' => 'Barreirinha',
            ),
            
            array (
                'id' => 206,
                'state_id' => 3,
                'name' => 'Benjamin Constant',
            ),
            
            array (
                'id' => 207,
                'state_id' => 3,
                'name' => 'Beruri',
            ),
            
            array (
                'id' => 208,
                'state_id' => 3,
                'name' => 'Boa Vista do Ramos',
            ),
            
            array (
                'id' => 209,
                'state_id' => 3,
                'name' => 'Boca do Acre',
            ),
            
            array (
                'id' => 210,
                'state_id' => 3,
                'name' => 'Borba',
            ),
            
            array (
                'id' => 211,
                'state_id' => 3,
                'name' => 'Caapiranga',
            ),
            
            array (
                'id' => 214,
                'state_id' => 3,
                'name' => 'Canutama',
            ),
            
            array (
                'id' => 215,
                'state_id' => 3,
                'name' => 'Carauari',
            ),
            
            array (
                'id' => 216,
                'state_id' => 3,
                'name' => 'Careiro',
            ),
            
            array (
                'id' => 217,
                'state_id' => 3,
                'name' => 'Careiro da Várzea',
            ),
            
            array (
                'id' => 219,
                'state_id' => 3,
                'name' => 'Coari',
            ),
            
            array (
                'id' => 220,
                'state_id' => 3,
                'name' => 'Codajás',
            ),
            
            array (
                'id' => 222,
                'state_id' => 3,
                'name' => 'Eirunepé',
            ),
            
            array (
                'id' => 223,
                'state_id' => 3,
                'name' => 'Envira',
            ),
            
            array (
                'id' => 225,
                'state_id' => 3,
                'name' => 'Fonte Boa',
            ),
            
            array (
                'id' => 227,
                'state_id' => 3,
                'name' => 'Guajará',
            ),
            
            array (
                'id' => 228,
                'state_id' => 3,
                'name' => 'Humaitá',
            ),
            
            array (
                'id' => 231,
                'state_id' => 3,
                'name' => 'Ipixuna',
            ),
            
            array (
                'id' => 232,
                'state_id' => 3,
                'name' => 'Iranduba',
            ),
            
            array (
                'id' => 233,
                'state_id' => 3,
                'name' => 'Itacoatiara',
            ),
            
            array (
                'id' => 234,
                'state_id' => 3,
                'name' => 'Itamarati',
            ),
            
            array (
                'id' => 235,
                'state_id' => 3,
                'name' => 'Itapiranga',
            ),
            
            array (
                'id' => 236,
                'state_id' => 3,
                'name' => 'Japurá',
            ),
            
            array (
                'id' => 237,
                'state_id' => 3,
                'name' => 'Juruá',
            ),
            
            array (
                'id' => 238,
                'state_id' => 3,
                'name' => 'Jutaí',
            ),
            
            array (
                'id' => 239,
                'state_id' => 3,
                'name' => 'Lábrea',
            ),
            
            array (
                'id' => 241,
                'state_id' => 3,
                'name' => 'Manacapuru',
            ),
            
            array (
                'id' => 242,
                'state_id' => 3,
                'name' => 'Manaquiri',
            ),
            
            array (
                'id' => 243,
                'state_id' => 3,
                'name' => 'Manaus',
            ),
            
            array (
                'id' => 244,
                'state_id' => 3,
                'name' => 'Manicoré',
            ),
            
            array (
                'id' => 245,
                'state_id' => 3,
                'name' => 'Maraã',
            ),
            
            array (
                'id' => 247,
                'state_id' => 3,
                'name' => 'Maués',
            ),
            
            array (
                'id' => 251,
                'state_id' => 3,
                'name' => 'Nhamundá',
            ),
            
            array (
                'id' => 252,
                'state_id' => 3,
                'name' => 'Nova Olinda do Norte',
            ),
            
            array (
                'id' => 253,
                'state_id' => 3,
                'name' => 'Novo Airão',
            ),
            
            array (
                'id' => 254,
                'state_id' => 3,
                'name' => 'Novo Aripuanã',
            ),
            
            array (
                'id' => 256,
                'state_id' => 3,
                'name' => 'Parintins',
            ),
            
            array (
                'id' => 257,
                'state_id' => 3,
                'name' => 'Pauini',
            ),
            
            array (
                'id' => 259,
                'state_id' => 3,
                'name' => 'Presidente Figueiredo',
            ),
            
            array (
                'id' => 261,
                'state_id' => 3,
                'name' => 'Rio Preto da Eva',
            ),
            
            array (
                'id' => 262,
                'state_id' => 3,
                'name' => 'Santa Isabel do Rio Negro',
            ),
            
            array (
                'id' => 264,
                'state_id' => 3,
                'name' => 'Santo Antônio do Içá',
            ),
            
            array (
                'id' => 266,
                'state_id' => 3,
                'name' => 'São Gabriel da Cachoeira',
            ),
            
            array (
                'id' => 267,
                'state_id' => 3,
                'name' => 'São Paulo de Olivença',
            ),
            
            array (
                'id' => 268,
                'state_id' => 3,
                'name' => 'São Sebastião do Uatumã',
            ),
            
            array (
                'id' => 269,
                'state_id' => 3,
                'name' => 'Silves',
            ),
            
            array (
                'id' => 270,
                'state_id' => 3,
                'name' => 'Tabatinga',
            ),
            
            array (
                'id' => 271,
                'state_id' => 3,
                'name' => 'Tapauá',
            ),
            
            array (
                'id' => 272,
                'state_id' => 3,
                'name' => 'Tefé',
            ),
            
            array (
                'id' => 273,
                'state_id' => 3,
                'name' => 'Tonantins',
            ),
            
            array (
                'id' => 274,
                'state_id' => 3,
                'name' => 'Uarini',
            ),
            
            array (
                'id' => 275,
                'state_id' => 3,
                'name' => 'Urucará',
            ),
            
            array (
                'id' => 276,
                'state_id' => 3,
                'name' => 'Urucurituba',
            ),
            
            array (
                'id' => 280,
                'state_id' => 4,
                'name' => 'Amapá',
            ),
            
            array (
                'id' => 281,
                'state_id' => 4,
                'name' => 'Amapari',
            ),
            
            array (
                'id' => 287,
                'state_id' => 4,
                'name' => 'Calçoene',
            ),
            
            array (
                'id' => 294,
                'state_id' => 4,
                'name' => 'Cutias',
            ),
            
            array (
                'id' => 296,
                'state_id' => 4,
                'name' => 'Ferreira Gomes',
            ),
            
            array (
                'id' => 303,
                'state_id' => 4,
                'name' => 'Itaubal',
            ),
            
            array (
                'id' => 304,
                'state_id' => 4,
                'name' => 'Laranjal do Jari',
            ),
            
            array (
                'id' => 307,
                'state_id' => 4,
                'name' => 'Macapá',
            ),
            
            array (
                'id' => 308,
                'state_id' => 4,
                'name' => 'Mazagão',
            ),
            
            array (
                'id' => 310,
                'state_id' => 4,
                'name' => 'Oiapoque',
            ),
            
            array (
                'id' => 312,
                'state_id' => 4,
                'name' => 'Porto Grande',
            ),
            
            array (
                'id' => 313,
                'state_id' => 4,
                'name' => 'Pracuúba',
            ),
            
            array (
                'id' => 316,
                'state_id' => 4,
                'name' => 'Santana',
            ),
            
            array (
                'id' => 322,
                'state_id' => 4,
                'name' => 'Tartarugalzinho',
            ),
            
            array (
                'id' => 324,
                'state_id' => 4,
                'name' => 'Vitória do Jari',
            ),
            
            array (
                'id' => 326,
                'state_id' => 5,
                'name' => 'Abaíra',
            ),
            
            array (
                'id' => 327,
                'state_id' => 5,
                'name' => 'Abaré',
            ),
            
            array (
                'id' => 331,
                'state_id' => 5,
                'name' => 'Acajutiba',
            ),
            
            array (
                'id' => 335,
                'state_id' => 5,
                'name' => 'Adustina',
            ),
            
            array (
                'id' => 339,
                'state_id' => 5,
                'name' => 'Água Fria',
            ),
            
            array (
                'id' => 341,
                'state_id' => 5,
                'name' => 'Aiquara',
            ),
            
            array (
                'id' => 342,
                'state_id' => 5,
                'name' => 'Alagoinhas',
            ),
            
            array (
                'id' => 343,
                'state_id' => 5,
                'name' => 'Alcobaça',
            ),
            
            array (
                'id' => 347,
                'state_id' => 5,
                'name' => 'Almadina',
            ),
            
            array (
                'id' => 351,
                'state_id' => 5,
                'name' => 'Amargosa',
            ),
            
            array (
                'id' => 352,
                'state_id' => 5,
                'name' => 'Amélia Rodrigues',
            ),
            
            array (
                'id' => 353,
                'state_id' => 5,
                'name' => 'América Dourada',
            ),
            
            array (
                'id' => 355,
                'state_id' => 5,
                'name' => 'Anagé',
            ),
            
            array (
                'id' => 356,
                'state_id' => 5,
                'name' => 'Andaraí',
            ),
            
            array (
                'id' => 357,
                'state_id' => 5,
                'name' => 'Andorinha',
            ),
            
            array (
                'id' => 358,
                'state_id' => 5,
                'name' => 'Angical',
            ),
            
            array (
                'id' => 360,
                'state_id' => 5,
                'name' => 'Anguera',
            ),
            
            array (
                'id' => 361,
                'state_id' => 5,
                'name' => 'Antas',
            ),
            
            array (
                'id' => 362,
                'state_id' => 5,
                'name' => 'Antônio Cardoso',
            ),
            
            array (
                'id' => 363,
                'state_id' => 5,
                'name' => 'Antônio Gonçalves',
            ),
            
            array (
                'id' => 364,
                'state_id' => 5,
                'name' => 'Aporá',
            ),
            
            array (
                'id' => 365,
                'state_id' => 5,
                'name' => 'Apuarema',
            ),
            
            array (
                'id' => 366,
                'state_id' => 5,
                'name' => 'Araçás',
            ),
            
            array (
                'id' => 367,
                'state_id' => 5,
                'name' => 'Aracatu',
            ),
            
            array (
                'id' => 368,
                'state_id' => 5,
                'name' => 'Araci',
            ),
            
            array (
                'id' => 369,
                'state_id' => 5,
                'name' => 'Aramari',
            ),
            
            array (
                'id' => 371,
                'state_id' => 5,
                'name' => 'Arataca',
            ),
            
            array (
                'id' => 372,
                'state_id' => 5,
                'name' => 'Aratuípe',
            ),
            
            array (
                'id' => 379,
                'state_id' => 5,
                'name' => 'Aurelino Leal',
            ),
            
            array (
                'id' => 380,
                'state_id' => 5,
                'name' => 'Baianópolis',
            ),
            
            array (
                'id' => 382,
                'state_id' => 5,
                'name' => 'Baixa Grande',
            ),
            
            array (
                'id' => 391,
                'state_id' => 5,
                'name' => 'Banzaê',
            ),
            
            array (
                'id' => 394,
                'state_id' => 5,
                'name' => 'Barra',
            ),
            
            array (
                'id' => 395,
                'state_id' => 5,
                'name' => 'Barra da Estiva',
            ),
            
            array (
                'id' => 396,
                'state_id' => 5,
                'name' => 'Barra do Choça',
            ),
            
            array (
                'id' => 398,
                'state_id' => 5,
                'name' => 'Barra do Mendes',
            ),
            
            array (
                'id' => 400,
                'state_id' => 5,
                'name' => 'Barra do Rocha',
            ),
            
            array (
                'id' => 403,
                'state_id' => 5,
                'name' => 'Barreiras',
            ),
            
            array (
                'id' => 404,
                'state_id' => 5,
                'name' => 'Barro Alto',
            ),
            
            array (
                'id' => 405,
                'state_id' => 5,
                'name' => 'Barro Preto',
            ),
            
            array (
                'id' => 407,
                'state_id' => 5,
                'name' => 'Barrocas',
            ),
            
            array (
                'id' => 413,
                'state_id' => 5,
                'name' => 'Belmonte',
            ),
            
            array (
                'id' => 414,
                'state_id' => 5,
                'name' => 'Belo Campo',
            ),
            
            array (
                'id' => 419,
                'state_id' => 5,
                'name' => 'Biritinga',
            ),
            
            array (
                'id' => 421,
                'state_id' => 5,
                'name' => 'Boa Nova',
            ),
            
            array (
                'id' => 424,
                'state_id' => 5,
                'name' => 'Boa Vista do Tupim',
            ),
            
            array (
                'id' => 427,
                'state_id' => 5,
                'name' => 'Bom Jesus da Lapa',
            ),
            
            array (
                'id' => 428,
                'state_id' => 5,
                'name' => 'Bom Jesus da Serra',
            ),
            
            array (
                'id' => 431,
                'state_id' => 5,
                'name' => 'Boninal',
            ),
            
            array (
                'id' => 432,
                'state_id' => 5,
                'name' => 'Bonito',
            ),
            
            array (
                'id' => 433,
                'state_id' => 5,
                'name' => 'Boquira',
            ),
            
            array (
                'id' => 434,
                'state_id' => 5,
                'name' => 'Botuporã',
            ),
            
            array (
                'id' => 440,
                'state_id' => 5,
                'name' => 'Brejões',
            ),
            
            array (
                'id' => 441,
                'state_id' => 5,
                'name' => 'Brejolândia',
            ),
            
            array (
                'id' => 442,
                'state_id' => 5,
                'name' => 'Brotas de Macaúbas',
            ),
            
            array (
                'id' => 443,
                'state_id' => 5,
                'name' => 'Brumado',
            ),
            
            array (
                'id' => 445,
                'state_id' => 5,
                'name' => 'Buerarema',
            ),
            
            array (
                'id' => 450,
                'state_id' => 5,
                'name' => 'Buritirama',
            ),
            
            array (
                'id' => 451,
                'state_id' => 5,
                'name' => 'Caatiba',
            ),
            
            array (
                'id' => 452,
                'state_id' => 5,
                'name' => 'Cabaceiras do Paraguaçu',
            ),
            
            array (
                'id' => 455,
                'state_id' => 5,
                'name' => 'Cachoeira',
            ),
            
            array (
                'id' => 457,
                'state_id' => 5,
                'name' => 'Caculé',
            ),
            
            array (
                'id' => 458,
                'state_id' => 5,
                'name' => 'Caém',
            ),
            
            array (
                'id' => 459,
                'state_id' => 5,
                'name' => 'Caetanos',
            ),
            
            array (
                'id' => 461,
                'state_id' => 5,
                'name' => 'Caetité',
            ),
            
            array (
                'id' => 462,
                'state_id' => 5,
                'name' => 'Cafarnaum',
            ),
            
            array (
                'id' => 465,
                'state_id' => 5,
                'name' => 'Cairu',
            ),
            
            array (
                'id' => 470,
                'state_id' => 5,
                'name' => 'Caldeirão Grande',
            ),
            
            array (
                'id' => 472,
                'state_id' => 5,
                'name' => 'Camacan',
            ),
            
            array (
                'id' => 473,
                'state_id' => 5,
                'name' => 'Camaçari',
            ),
            
            array (
                'id' => 474,
                'state_id' => 5,
                'name' => 'Camamu',
            ),
            
            array (
                'id' => 478,
                'state_id' => 5,
                'name' => 'Campo Alegre de Lourdes',
            ),
            
            array (
                'id' => 479,
                'state_id' => 5,
                'name' => 'Campo Formoso',
            ),
            
            array (
                'id' => 483,
                'state_id' => 5,
                'name' => 'Canápolis',
            ),
            
            array (
                'id' => 484,
                'state_id' => 5,
                'name' => 'Canarana',
            ),
            
            array (
                'id' => 486,
                'state_id' => 5,
                'name' => 'Canavieiras',
            ),
            
            array (
                'id' => 488,
                'state_id' => 5,
                'name' => 'Candeal',
            ),
            
            array (
                'id' => 489,
                'state_id' => 5,
                'name' => 'Candeias',
            ),
            
            array (
                'id' => 490,
                'state_id' => 5,
                'name' => 'Candiba',
            ),
            
            array (
                'id' => 491,
                'state_id' => 5,
                'name' => 'Cândido Sales',
            ),
            
            array (
                'id' => 493,
                'state_id' => 5,
                'name' => 'Cansanção',
            ),
            
            array (
                'id' => 495,
                'state_id' => 5,
                'name' => 'Canudos',
            ),
            
            array (
                'id' => 498,
                'state_id' => 5,
                'name' => 'Capela do Alto Alegre',
            ),
            
            array (
                'id' => 499,
                'state_id' => 5,
                'name' => 'Capim Grosso',
            ),
            
            array (
                'id' => 501,
                'state_id' => 5,
                'name' => 'Caraíbas',
            ),
            
            array (
                'id' => 505,
                'state_id' => 5,
                'name' => 'Caravelas',
            ),
            
            array (
                'id' => 506,
                'state_id' => 5,
                'name' => 'Cardeal da Silva',
            ),
            
            array (
                'id' => 507,
                'state_id' => 5,
                'name' => 'Carinhanha',
            ),
            
            array (
                'id' => 511,
                'state_id' => 5,
                'name' => 'Casa Nova',
            ),
            
            array (
                'id' => 513,
                'state_id' => 5,
                'name' => 'Castro Alves',
            ),
            
            array (
                'id' => 516,
                'state_id' => 5,
                'name' => 'Catolândia',
            ),
            
            array (
                'id' => 519,
                'state_id' => 5,
                'name' => 'Catu',
            ),
            
            array (
                'id' => 521,
                'state_id' => 5,
                'name' => 'Caturama',
            ),
            
            array (
                'id' => 523,
                'state_id' => 5,
                'name' => 'Central',
            ),
            
            array (
                'id' => 525,
                'state_id' => 5,
                'name' => 'Chorrochó',
            ),
            
            array (
                'id' => 526,
                'state_id' => 5,
                'name' => 'Cícero Dantas',
            ),
            
            array (
                'id' => 528,
                'state_id' => 5,
                'name' => 'Cipó',
            ),
            
            array (
                'id' => 529,
                'state_id' => 5,
                'name' => 'Coaraci',
            ),
            
            array (
                'id' => 530,
                'state_id' => 5,
                'name' => 'Cocos',
            ),
            
            array (
                'id' => 533,
                'state_id' => 5,
                'name' => 'Conceição da Feira',
            ),
            
            array (
                'id' => 534,
                'state_id' => 5,
                'name' => 'Conceição do Almeida',
            ),
            
            array (
                'id' => 535,
                'state_id' => 5,
                'name' => 'Conceição do Coité',
            ),
            
            array (
                'id' => 536,
                'state_id' => 5,
                'name' => 'Conceição do Jacuípe',
            ),
            
            array (
                'id' => 537,
                'state_id' => 5,
                'name' => 'Conde',
            ),
            
            array (
                'id' => 538,
                'state_id' => 5,
                'name' => 'Condeúba',
            ),
            
            array (
                'id' => 539,
                'state_id' => 5,
                'name' => 'Contendas do Sincorá',
            ),
            
            array (
                'id' => 543,
                'state_id' => 5,
                'name' => 'Coração de Maria',
            ),
            
            array (
                'id' => 544,
                'state_id' => 5,
                'name' => 'Cordeiros',
            ),
            
            array (
                'id' => 545,
                'state_id' => 5,
                'name' => 'Coribe',
            ),
            
            array (
                'id' => 546,
                'state_id' => 5,
                'name' => 'Coronel João Sá',
            ),
            
            array (
                'id' => 547,
                'state_id' => 5,
                'name' => 'Correntina',
            ),
            
            array (
                'id' => 549,
                'state_id' => 5,
                'name' => 'Cotegipe',
            ),
            
            array (
                'id' => 551,
                'state_id' => 5,
                'name' => 'Cravolândia',
            ),
            
            array (
                'id' => 552,
                'state_id' => 5,
                'name' => 'Crisópolis',
            ),
            
            array (
                'id' => 554,
                'state_id' => 5,
                'name' => 'Cristópolis',
            ),
            
            array (
                'id' => 556,
                'state_id' => 5,
                'name' => 'Cruz das Almas',
            ),
            
            array (
                'id' => 559,
                'state_id' => 5,
                'name' => 'Curaçá',
            ),
            
            array (
                'id' => 561,
                'state_id' => 5,
                'name' => 'Dário Meira',
            ),
            
            array (
                'id' => 565,
                'state_id' => 5,
                'name' => 'Dias D\'Ávila',
            ),
            
            array (
                'id' => 567,
                'state_id' => 5,
                'name' => 'Dom Basílio',
            ),
            
            array (
                'id' => 568,
                'state_id' => 5,
                'name' => 'Dom Macedo Costa',
            ),
            
            array (
                'id' => 571,
                'state_id' => 5,
                'name' => 'Elísio Medrado',
            ),
            
            array (
                'id' => 572,
                'state_id' => 5,
                'name' => 'Encruzilhada',
            ),
            
            array (
                'id' => 575,
                'state_id' => 5,
                'name' => 'Entre Rios',
            ),
            
            array (
                'id' => 576,
                'state_id' => 5,
                'name' => 'Érico Cardoso',
            ),
            
            array (
                'id' => 577,
                'state_id' => 5,
                'name' => 'Esplanada',
            ),
            
            array (
                'id' => 578,
                'state_id' => 5,
                'name' => 'Euclides da Cunha',
            ),
            
            array (
                'id' => 579,
                'state_id' => 5,
                'name' => 'Eunápolis',
            ),
            
            array (
                'id' => 580,
                'state_id' => 5,
                'name' => 'Fátima',
            ),
            
            array (
                'id' => 581,
                'state_id' => 5,
                'name' => 'Feira da Mata',
            ),
            
            array (
                'id' => 582,
                'state_id' => 5,
                'name' => 'Feira de Santana',
            ),
            
            array (
                'id' => 584,
                'state_id' => 5,
                'name' => 'Filadélfia',
            ),
            
            array (
                'id' => 586,
                'state_id' => 5,
                'name' => 'Firmino Alves',
            ),
            
            array (
                'id' => 587,
                'state_id' => 5,
                'name' => 'Floresta Azul',
            ),
            
            array (
                'id' => 588,
                'state_id' => 5,
                'name' => 'Formosa do Rio Preto',
            ),
            
            array (
                'id' => 595,
                'state_id' => 5,
                'name' => 'Gandu',
            ),
            
            array (
                'id' => 596,
                'state_id' => 5,
                'name' => 'Gavião',
            ),
            
            array (
                'id' => 597,
                'state_id' => 5,
                'name' => 'Gentio do Ouro',
            ),
            
            array (
                'id' => 599,
                'state_id' => 5,
                'name' => 'Glória',
            ),
            
            array (
                'id' => 600,
                'state_id' => 5,
                'name' => 'Gongogi',
            ),
            
            array (
                'id' => 602,
                'state_id' => 5,
                'name' => 'Governador Mangabeira',
            ),
            
            array (
                'id' => 605,
                'state_id' => 5,
                'name' => 'Guajeru',
            ),
            
            array (
                'id' => 606,
                'state_id' => 5,
                'name' => 'Guanambi',
            ),
            
            array (
                'id' => 609,
                'state_id' => 5,
                'name' => 'Guaratinga',
            ),
            
            array (
                'id' => 614,
                'state_id' => 5,
                'name' => 'Heliópolis',
            ),
            
            array (
                'id' => 618,
                'state_id' => 5,
                'name' => 'Iaçu',
            ),
            
            array (
                'id' => 623,
                'state_id' => 5,
                'name' => 'Ibiassucê',
            ),
            
            array (
                'id' => 624,
                'state_id' => 5,
                'name' => 'Ibicaraí',
            ),
            
            array (
                'id' => 625,
                'state_id' => 5,
                'name' => 'Ibicoara',
            ),
            
            array (
                'id' => 626,
                'state_id' => 5,
                'name' => 'Ibicuí',
            ),
            
            array (
                'id' => 627,
                'state_id' => 5,
                'name' => 'Ibipeba',
            ),
            
            array (
                'id' => 629,
                'state_id' => 5,
                'name' => 'Ibipitanga',
            ),
            
            array (
                'id' => 630,
                'state_id' => 5,
                'name' => 'Ibiquera',
            ),
            
            array (
                'id' => 634,
                'state_id' => 5,
                'name' => 'Ibirapitanga',
            ),
            
            array (
                'id' => 635,
                'state_id' => 5,
                'name' => 'Ibirapuã',
            ),
            
            array (
                'id' => 636,
                'state_id' => 5,
                'name' => 'Ibirataia',
            ),
            
            array (
                'id' => 637,
                'state_id' => 5,
                'name' => 'Ibitiara',
            ),
            
            array (
                'id' => 640,
                'state_id' => 5,
                'name' => 'Ibititá',
            ),
            
            array (
                'id' => 644,
                'state_id' => 5,
                'name' => 'Ibotirama',
            ),
            
            array (
                'id' => 645,
                'state_id' => 5,
                'name' => 'Ichu',
            ),
            
            array (
                'id' => 647,
                'state_id' => 5,
                'name' => 'Igaporã',
            ),
            
            array (
                'id' => 651,
                'state_id' => 5,
                'name' => 'Igrapiúna',
            ),
            
            array (
                'id' => 653,
                'state_id' => 5,
                'name' => 'Iguaí',
            ),
            
            array (
                'id' => 659,
                'state_id' => 5,
                'name' => 'Ilhéus',
            ),
            
            array (
                'id' => 662,
                'state_id' => 5,
                'name' => 'Inhambupe',
            ),
            
            array (
                'id' => 667,
                'state_id' => 5,
                'name' => 'Ipecaetá',
            ),
            
            array (
                'id' => 668,
                'state_id' => 5,
                'name' => 'Ipiaú',
            ),
            
            array (
                'id' => 669,
                'state_id' => 5,
                'name' => 'Ipirá',
            ),
            
            array (
                'id' => 672,
                'state_id' => 5,
                'name' => 'Ipupiara',
            ),
            
            array (
                'id' => 673,
                'state_id' => 5,
                'name' => 'Irajuba',
            ),
            
            array (
                'id' => 674,
                'state_id' => 5,
                'name' => 'Iramaia',
            ),
            
            array (
                'id' => 676,
                'state_id' => 5,
                'name' => 'Iraquara',
            ),
            
            array (
                'id' => 677,
                'state_id' => 5,
                'name' => 'Irará',
            ),
            
            array (
                'id' => 678,
                'state_id' => 5,
                'name' => 'Irecê',
            ),
            
            array (
                'id' => 681,
                'state_id' => 5,
                'name' => 'Itabela',
            ),
            
            array (
                'id' => 682,
                'state_id' => 5,
                'name' => 'Itaberaba',
            ),
            
            array (
                'id' => 683,
                'state_id' => 5,
                'name' => 'Itabuna',
            ),
            
            array (
                'id' => 684,
                'state_id' => 5,
                'name' => 'Itacaré',
            ),
            
            array (
                'id' => 688,
                'state_id' => 5,
                'name' => 'Itaeté',
            ),
            
            array (
                'id' => 689,
                'state_id' => 5,
                'name' => 'Itagi',
            ),
            
            array (
                'id' => 690,
                'state_id' => 5,
                'name' => 'Itagibá',
            ),
            
            array (
                'id' => 691,
                'state_id' => 5,
                'name' => 'Itagimirim',
            ),
            
            array (
                'id' => 692,
                'state_id' => 5,
                'name' => 'Itaguaçu da Bahia',
            ),
            
            array (
                'id' => 698,
                'state_id' => 5,
                'name' => 'Itaju do Colônia',
            ),
            
            array (
                'id' => 700,
                'state_id' => 5,
                'name' => 'Itajuípe',
            ),
            
            array (
                'id' => 702,
                'state_id' => 5,
                'name' => 'Itamaraju',
            ),
            
            array (
                'id' => 703,
                'state_id' => 5,
                'name' => 'Itamari',
            ),
            
            array (
                'id' => 704,
                'state_id' => 5,
                'name' => 'Itambé',
            ),
            
            array (
                'id' => 708,
                'state_id' => 5,
                'name' => 'Itanagra',
            ),
            
            array (
                'id' => 709,
                'state_id' => 5,
                'name' => 'Itanhém',
            ),
            
            array (
                'id' => 711,
                'state_id' => 5,
                'name' => 'Itaparica',
            ),
            
            array (
                'id' => 712,
                'state_id' => 5,
                'name' => 'Itapé',
            ),
            
            array (
                'id' => 713,
                'state_id' => 5,
                'name' => 'Itapebi',
            ),
            
            array (
                'id' => 715,
                'state_id' => 5,
                'name' => 'Itapetinga',
            ),
            
            array (
                'id' => 716,
                'state_id' => 5,
                'name' => 'Itapicuru',
            ),
            
            array (
                'id' => 718,
                'state_id' => 5,
                'name' => 'Itapitanga',
            ),
            
            array (
                'id' => 721,
                'state_id' => 5,
                'name' => 'Itaquara',
            ),
            
            array (
                'id' => 723,
                'state_id' => 5,
                'name' => 'Itarantim',
            ),
            
            array (
                'id' => 725,
                'state_id' => 5,
                'name' => 'Itatim',
            ),
            
            array (
                'id' => 727,
                'state_id' => 5,
                'name' => 'Itiruçu',
            ),
            
            array (
                'id' => 728,
                'state_id' => 5,
                'name' => 'Itiúba',
            ),
            
            array (
                'id' => 729,
                'state_id' => 5,
                'name' => 'Itororó',
            ),
            
            array (
                'id' => 730,
                'state_id' => 5,
                'name' => 'Ituaçu',
            ),
            
            array (
                'id' => 731,
                'state_id' => 5,
                'name' => 'Ituberá',
            ),
            
            array (
                'id' => 733,
                'state_id' => 5,
                'name' => 'Iuiu',
            ),
            
            array (
                'id' => 734,
                'state_id' => 5,
                'name' => 'Jaborandi',
            ),
            
            array (
                'id' => 735,
                'state_id' => 5,
                'name' => 'Jacaraci',
            ),
            
            array (
                'id' => 736,
                'state_id' => 5,
                'name' => 'Jacobina',
            ),
            
            array (
                'id' => 740,
                'state_id' => 5,
                'name' => 'Jaguaquara',
            ),
            
            array (
                'id' => 742,
                'state_id' => 5,
                'name' => 'Jaguarari',
            ),
            
            array (
                'id' => 743,
                'state_id' => 5,
                'name' => 'Jaguaripe',
            ),
            
            array (
                'id' => 745,
                'state_id' => 5,
                'name' => 'Jandaíra',
            ),
            
            array (
                'id' => 749,
                'state_id' => 5,
                'name' => 'Jequié',
            ),
            
            array (
                'id' => 750,
                'state_id' => 5,
                'name' => 'Jequiriçá',
            ),
            
            array (
                'id' => 751,
                'state_id' => 5,
                'name' => 'Jeremoabo',
            ),
            
            array (
                'id' => 753,
                'state_id' => 5,
                'name' => 'Jitaúna',
            ),
            
            array (
                'id' => 756,
                'state_id' => 5,
                'name' => 'João Dourado',
            ),
            
            array (
                'id' => 759,
                'state_id' => 5,
                'name' => 'Juazeiro',
            ),
            
            array (
                'id' => 760,
                'state_id' => 5,
                'name' => 'Jucuruçu',
            ),
            
            array (
                'id' => 766,
                'state_id' => 5,
                'name' => 'Jussara',
            ),
            
            array (
                'id' => 767,
                'state_id' => 5,
                'name' => 'Jussari',
            ),
            
            array (
                'id' => 768,
                'state_id' => 5,
                'name' => 'Jussiape',
            ),
            
            array (
                'id' => 770,
                'state_id' => 5,
                'name' => 'Lafaiete Coutinho',
            ),
            
            array (
                'id' => 778,
                'state_id' => 5,
                'name' => 'Lagoa Real',
            ),
            
            array (
                'id' => 779,
                'state_id' => 5,
                'name' => 'Laje',
            ),
            
            array (
                'id' => 781,
                'state_id' => 5,
                'name' => 'Lajedão',
            ),
            
            array (
                'id' => 782,
                'state_id' => 5,
                'name' => 'Lajedinho',
            ),
            
            array (
                'id' => 784,
                'state_id' => 5,
                'name' => 'Lajedo do Tabocal',
            ),
            
            array (
                'id' => 785,
                'state_id' => 5,
                'name' => 'Lamarão',
            ),
            
            array (
                'id' => 787,
                'state_id' => 5,
                'name' => 'Lapão',
            ),
            
            array (
                'id' => 789,
                'state_id' => 5,
                'name' => 'Lauro de Freitas',
            ),
            
            array (
                'id' => 790,
                'state_id' => 5,
                'name' => 'Lençóis',
            ),
            
            array (
                'id' => 791,
                'state_id' => 5,
                'name' => 'Licínio de Almeida',
            ),
            
            array (
                'id' => 793,
                'state_id' => 5,
                'name' => 'Livramento de Nossa Senhora',
            ),
            
            array (
                'id' => 797,
                'state_id' => 5,
                'name' => 'Macajuba',
            ),
            
            array (
                'id' => 798,
                'state_id' => 5,
                'name' => 'Macarani',
            ),
            
            array (
                'id' => 799,
                'state_id' => 5,
                'name' => 'Macaúbas',
            ),
            
            array (
                'id' => 800,
                'state_id' => 5,
                'name' => 'Macururé',
            ),
            
            array (
                'id' => 801,
                'state_id' => 5,
                'name' => 'Madre de Deus',
            ),
            
            array (
                'id' => 802,
                'state_id' => 5,
                'name' => 'Maetinga',
            ),
            
            array (
                'id' => 803,
                'state_id' => 5,
                'name' => 'Maiquinique',
            ),
            
            array (
                'id' => 804,
                'state_id' => 5,
                'name' => 'Mairi',
            ),
            
            array (
                'id' => 805,
                'state_id' => 5,
                'name' => 'Malhada',
            ),
            
            array (
                'id' => 806,
                'state_id' => 5,
                'name' => 'Malhada de Pedras',
            ),
            
            array (
                'id' => 810,
                'state_id' => 5,
                'name' => 'Manoel Vitorino',
            ),
            
            array (
                'id' => 811,
                'state_id' => 5,
                'name' => 'Mansidão',
            ),
            
            array (
                'id' => 814,
                'state_id' => 5,
                'name' => 'Maracás',
            ),
            
            array (
                'id' => 815,
                'state_id' => 5,
                'name' => 'Maragogipe',
            ),
            
            array (
                'id' => 817,
                'state_id' => 5,
                'name' => 'Maraú',
            ),
            
            array (
                'id' => 818,
                'state_id' => 5,
                'name' => 'Marcionílio Souza',
            ),
            
            array (
                'id' => 823,
                'state_id' => 5,
                'name' => 'Mascote',
            ),
            
            array (
                'id' => 827,
                'state_id' => 5,
                'name' => 'Mata de São João',
            ),
            
            array (
                'id' => 829,
                'state_id' => 5,
                'name' => 'Matina',
            ),
            
            array (
                'id' => 831,
                'state_id' => 5,
                'name' => 'Medeiros Neto',
            ),
            
            array (
                'id' => 832,
                'state_id' => 5,
                'name' => 'Miguel Calmon',
            ),
            
            array (
                'id' => 833,
                'state_id' => 5,
                'name' => 'Milagres',
            ),
            
            array (
                'id' => 834,
                'state_id' => 5,
                'name' => 'Luís Eduardo Magalhães',
            ),
            
            array (
                'id' => 839,
                'state_id' => 5,
                'name' => 'Mirangaba',
            ),
            
            array (
                'id' => 840,
                'state_id' => 5,
                'name' => 'Mirante',
            ),
            
            array (
                'id' => 846,
                'state_id' => 5,
                'name' => 'Monte Santo',
            ),
            
            array (
                'id' => 847,
                'state_id' => 5,
                'name' => 'Morpará',
            ),
            
            array (
                'id' => 851,
                'state_id' => 5,
                'name' => 'Morro do Chapéu',
            ),
            
            array (
                'id' => 852,
                'state_id' => 5,
                'name' => 'Mortugaba',
            ),
            
            array (
                'id' => 853,
                'state_id' => 5,
                'name' => 'Mucugê',
            ),
            
            array (
                'id' => 854,
                'state_id' => 5,
                'name' => 'Mucuri',
            ),
            
            array (
                'id' => 855,
                'state_id' => 5,
                'name' => 'Mulungu do Morro',
            ),
            
            array (
                'id' => 856,
                'state_id' => 5,
                'name' => 'Mundo Novo',
            ),
            
            array (
                'id' => 857,
                'state_id' => 5,
                'name' => 'Muniz Ferreira',
            ),
            
            array (
                'id' => 858,
                'state_id' => 5,
                'name' => 'Muquém de São Francisco',
            ),
            
            array (
                'id' => 859,
                'state_id' => 5,
                'name' => 'Muritiba',
            ),
            
            array (
                'id' => 861,
                'state_id' => 5,
                'name' => 'Mutuípe',
            ),
            
            array (
                'id' => 864,
                'state_id' => 5,
                'name' => 'Nazaré',
            ),
            
            array (
                'id' => 865,
                'state_id' => 5,
                'name' => 'Nilo Peçanha',
            ),
            
            array (
                'id' => 866,
                'state_id' => 5,
                'name' => 'Nordestina',
            ),
            
            array (
                'id' => 869,
                'state_id' => 5,
                'name' => 'Nova Canaã',
            ),
            
            array (
                'id' => 870,
                'state_id' => 5,
                'name' => 'Nova Fátima',
            ),
            
            array (
                'id' => 871,
                'state_id' => 5,
                'name' => 'Nova Ibiá',
            ),
            
            array (
                'id' => 873,
                'state_id' => 5,
                'name' => 'Nova Itarana',
            ),
            
            array (
                'id' => 875,
                'state_id' => 5,
                'name' => 'Nova Redenção',
            ),
            
            array (
                'id' => 876,
                'state_id' => 5,
                'name' => 'Nova Soure',
            ),
            
            array (
                'id' => 877,
                'state_id' => 5,
                'name' => 'Nova Viçosa',
            ),
            
            array (
                'id' => 879,
                'state_id' => 5,
                'name' => 'Novo Horizonte',
            ),
            
            array (
                'id' => 880,
                'state_id' => 5,
                'name' => 'Novo Triunfo',
            ),
            
            array (
                'id' => 885,
                'state_id' => 5,
                'name' => 'Olindina',
            ),
            
            array (
                'id' => 886,
                'state_id' => 5,
                'name' => 'Oliveira dos Brejinhos',
            ),
            
            array (
                'id' => 891,
                'state_id' => 5,
                'name' => 'Ouriçangas',
            ),
            
            array (
                'id' => 893,
                'state_id' => 5,
                'name' => 'Ourolândia',
            ),
            
            array (
                'id' => 898,
                'state_id' => 5,
                'name' => 'Palmas de Monte Alto',
            ),
            
            array (
                'id' => 899,
                'state_id' => 5,
                'name' => 'Palmeiras',
            ),
            
            array (
                'id' => 901,
                'state_id' => 5,
                'name' => 'Paramirim',
            ),
            
            array (
                'id' => 903,
                'state_id' => 5,
                'name' => 'Paratinga',
            ),
            
            array (
                'id' => 904,
                'state_id' => 5,
                'name' => 'Paripiranga',
            ),
            
            array (
                'id' => 908,
                'state_id' => 5,
                'name' => 'Pau Brasil',
            ),
            
            array (
                'id' => 909,
                'state_id' => 5,
                'name' => 'Paulo Afonso',
            ),
            
            array (
                'id' => 910,
                'state_id' => 5,
                'name' => 'Pé de Serra',
            ),
            
            array (
                'id' => 911,
                'state_id' => 5,
                'name' => 'Pedrão',
            ),
            
            array (
                'id' => 913,
                'state_id' => 5,
                'name' => 'Pedro Alexandre',
            ),
            
            array (
                'id' => 917,
                'state_id' => 5,
                'name' => 'Piatã',
            ),
            
            array (
                'id' => 919,
                'state_id' => 5,
                'name' => 'Pilão Arcado',
            ),
            
            array (
                'id' => 921,
                'state_id' => 5,
                'name' => 'Pindaí',
            ),
            
            array (
                'id' => 922,
                'state_id' => 5,
                'name' => 'Pindobaçu',
            ),
            
            array (
                'id' => 924,
                'state_id' => 5,
                'name' => 'Pintadas',
            ),
            
            array (
                'id' => 926,
                'state_id' => 5,
                'name' => 'Piraí do Norte',
            ),
            
            array (
                'id' => 930,
                'state_id' => 5,
                'name' => 'Piripá',
            ),
            
            array (
                'id' => 931,
                'state_id' => 5,
                'name' => 'Piritiba',
            ),
            
            array (
                'id' => 933,
                'state_id' => 5,
                'name' => 'Planaltino',
            ),
            
            array (
                'id' => 934,
                'state_id' => 5,
                'name' => 'Planalto',
            ),
            
            array (
                'id' => 937,
                'state_id' => 5,
                'name' => 'Poções',
            ),
            
            array (
                'id' => 939,
                'state_id' => 5,
                'name' => 'Pojuca',
            ),
            
            array (
                'id' => 942,
                'state_id' => 5,
                'name' => 'Ponto Novo',
            ),
            
            array (
                'id' => 944,
                'state_id' => 5,
                'name' => 'Porto Seguro',
            ),
            
            array (
                'id' => 946,
                'state_id' => 5,
                'name' => 'Potiraguá',
            ),
            
            array (
                'id' => 948,
                'state_id' => 5,
                'name' => 'Prado',
            ),
            
            array (
                'id' => 949,
                'state_id' => 5,
                'name' => 'Presidente Dutra',
            ),
            
            array (
                'id' => 950,
                'state_id' => 5,
                'name' => 'Presidente Jânio Quadros',
            ),
            
            array (
                'id' => 951,
                'state_id' => 5,
                'name' => 'Presidente Tancredo Neves',
            ),
            
            array (
                'id' => 954,
                'state_id' => 5,
                'name' => 'Queimadas',
            ),
            
            array (
                'id' => 955,
                'state_id' => 5,
                'name' => 'Quijingue',
            ),
            
            array (
                'id' => 957,
                'state_id' => 5,
                'name' => 'Quixabeira',
            ),
            
            array (
                'id' => 958,
                'state_id' => 5,
                'name' => 'Rafael Jambeiro',
            ),
            
            array (
                'id' => 960,
                'state_id' => 5,
                'name' => 'Remanso',
            ),
            
            array (
                'id' => 962,
                'state_id' => 5,
                'name' => 'Retirolândia',
            ),
            
            array (
                'id' => 963,
                'state_id' => 5,
                'name' => 'Riachão das Neves',
            ),
            
            array (
                'id' => 964,
                'state_id' => 5,
                'name' => 'Riachão do Jacuípe',
            ),
            
            array (
                'id' => 967,
                'state_id' => 5,
                'name' => 'Riacho de Santana',
            ),
            
            array (
                'id' => 969,
                'state_id' => 5,
                'name' => 'Ribeira do Amparo',
            ),
            
            array (
                'id' => 970,
                'state_id' => 5,
                'name' => 'Ribeira do Pombal',
            ),
            
            array (
                'id' => 971,
                'state_id' => 5,
                'name' => 'Ribeirão do Largo',
            ),
            
            array (
                'id' => 974,
                'state_id' => 5,
                'name' => 'Rio de Contas',
            ),
            
            array (
                'id' => 975,
                'state_id' => 5,
                'name' => 'Rio do Antônio',
            ),
            
            array (
                'id' => 978,
                'state_id' => 5,
                'name' => 'Rio do Pires',
            ),
            
            array (
                'id' => 980,
                'state_id' => 5,
                'name' => 'Rio Real',
            ),
            
            array (
                'id' => 981,
                'state_id' => 5,
                'name' => 'Rodelas',
            ),
            
            array (
                'id' => 982,
                'state_id' => 5,
                'name' => 'Ruy Barbosa',
            ),
            
            array (
                'id' => 985,
                'state_id' => 5,
                'name' => 'Salinas da Margarida',
            ),
            
            array (
                'id' => 988,
                'state_id' => 5,
                'name' => 'Salvador',
            ),
            
            array (
                'id' => 990,
                'state_id' => 5,
                'name' => 'Santa Bárbara',
            ),
            
            array (
                'id' => 991,
                'state_id' => 5,
                'name' => 'Santa Brígida',
            ),
            
            array (
                'id' => 992,
                'state_id' => 5,
                'name' => 'Santa Cruz Cabrália',
            ),
            
            array (
                'id' => 993,
                'state_id' => 5,
                'name' => 'Santa Cruz da Vitória',
            ),
            
            array (
                'id' => 994,
                'state_id' => 5,
                'name' => 'Santa Inês',
            ),
            
            array (
                'id' => 995,
                'state_id' => 5,
                'name' => 'Santa Luzia',
            ),
            
            array (
                'id' => 996,
                'state_id' => 5,
                'name' => 'Santa Maria da Vitória',
            ),
            
            array (
                'id' => 997,
                'state_id' => 5,
                'name' => 'Santa Rita de Cássia',
            ),
            
            array (
                'id' => 998,
                'state_id' => 5,
                'name' => 'Santa Terezinha',
            ),
            
            array (
                'id' => 999,
                'state_id' => 5,
                'name' => 'Santaluz',
            ),
            
            array (
                'id' => 1000,
                'state_id' => 5,
                'name' => 'Santana',
            ),
            
            array (
                'id' => 1002,
                'state_id' => 5,
                'name' => 'Santanópolis',
            ),
            
            array (
                'id' => 1004,
                'state_id' => 5,
                'name' => 'Santo Amaro',
            ),
            
            array (
                'id' => 1006,
                'state_id' => 5,
                'name' => 'Santo Antônio de Jesus',
            ),
            
            array (
                'id' => 1007,
                'state_id' => 5,
                'name' => 'Santo Estevão',
            ),
            
            array (
                'id' => 1009,
                'state_id' => 5,
                'name' => 'São Desidério',
            ),
            
            array (
                'id' => 1010,
                'state_id' => 5,
                'name' => 'São Domingos',
            ),
            
            array (
                'id' => 1011,
                'state_id' => 5,
                'name' => 'São Felipe',
            ),
            
            array (
                'id' => 1012,
                'state_id' => 5,
                'name' => 'São Félix',
            ),
            
            array (
                'id' => 1013,
                'state_id' => 5,
                'name' => 'São Félix do Coribe',
            ),
            
            array (
                'id' => 1014,
                'state_id' => 5,
                'name' => 'São Francisco do Conde',
            ),
            
            array (
                'id' => 1015,
                'state_id' => 5,
                'name' => 'São Gabriel',
            ),
            
            array (
                'id' => 1016,
                'state_id' => 5,
                'name' => 'São Gonçalo dos Campos',
            ),
            
            array (
                'id' => 1019,
                'state_id' => 5,
                'name' => 'São José da Vitória',
            ),
            
            array (
                'id' => 1021,
                'state_id' => 5,
                'name' => 'São José do Jacuípe',
            ),
            
            array (
                'id' => 1024,
                'state_id' => 5,
                'name' => 'São Miguel das Matas',
            ),
            
            array (
                'id' => 1027,
                'state_id' => 5,
                'name' => 'São Sebastião do Passe',
            ),
            
            array (
                'id' => 1029,
                'state_id' => 5,
                'name' => 'Sapeaçu',
            ),
            
            array (
                'id' => 1030,
                'state_id' => 5,
                'name' => 'Sátiro Dias',
            ),
            
            array (
                'id' => 1031,
                'state_id' => 5,
                'name' => 'Saubara',
            ),
            
            array (
                'id' => 1033,
                'state_id' => 5,
                'name' => 'Saúde',
            ),
            
            array (
                'id' => 1034,
                'state_id' => 5,
                'name' => 'Seabra',
            ),
            
            array (
                'id' => 1035,
                'state_id' => 5,
                'name' => 'Sebastião Laranjeiras',
            ),
            
            array (
                'id' => 1036,
                'state_id' => 5,
                'name' => 'Senhor do Bonfim',
            ),
            
            array (
                'id' => 1037,
                'state_id' => 5,
                'name' => 'Sento Sé',
            ),
            
            array (
                'id' => 1040,
                'state_id' => 5,
                'name' => 'Serra do Ramalho',
            ),
            
            array (
                'id' => 1041,
                'state_id' => 5,
                'name' => 'Serra Dourada',
            ),
            
            array (
                'id' => 1044,
                'state_id' => 5,
                'name' => 'Serra Preta',
            ),
            
            array (
                'id' => 1045,
                'state_id' => 5,
                'name' => 'Serrinha',
            ),
            
            array (
                'id' => 1046,
                'state_id' => 5,
                'name' => 'Serrolândia',
            ),
            
            array (
                'id' => 1047,
                'state_id' => 5,
                'name' => 'Simões Filho',
            ),
            
            array (
                'id' => 1049,
                'state_id' => 5,
                'name' => 'Sítio do Mato',
            ),
            
            array (
                'id' => 1051,
                'state_id' => 5,
                'name' => 'Sítio do Quinto',
            ),
            
            array (
                'id' => 1055,
                'state_id' => 5,
                'name' => 'Sobradinho',
            ),
            
            array (
                'id' => 1056,
                'state_id' => 5,
                'name' => 'Souto Soares',
            ),
            
            array (
                'id' => 1059,
                'state_id' => 5,
                'name' => 'Tabocas do Brejo Velho',
            ),
            
            array (
                'id' => 1064,
                'state_id' => 5,
                'name' => 'Tanhaçu',
            ),
            
            array (
                'id' => 1065,
                'state_id' => 5,
                'name' => 'Tanque Novo',
            ),
            
            array (
                'id' => 1066,
                'state_id' => 5,
                'name' => 'Tanquinho',
            ),
            
            array (
                'id' => 1068,
                'state_id' => 5,
                'name' => 'Taperoá',
            ),
            
            array (
                'id' => 1071,
                'state_id' => 5,
                'name' => 'Tapiramutá',
            ),
            
            array (
                'id' => 1078,
                'state_id' => 5,
                'name' => 'Teixeira de Freitas',
            ),
            
            array (
                'id' => 1079,
                'state_id' => 5,
                'name' => 'Teodoro Sampaio',
            ),
            
            array (
                'id' => 1080,
                'state_id' => 5,
                'name' => 'Teofilândia',
            ),
            
            array (
                'id' => 1081,
                'state_id' => 5,
                'name' => 'Teolândia',
            ),
            
            array (
                'id' => 1082,
                'state_id' => 5,
                'name' => 'Terra Nova',
            ),
            
            array (
                'id' => 1085,
                'state_id' => 5,
                'name' => 'Tremedal',
            ),
            
            array (
                'id' => 1087,
                'state_id' => 5,
                'name' => 'Tucano',
            ),
            
            array (
                'id' => 1088,
                'state_id' => 5,
                'name' => 'Uauá',
            ),
            
            array (
                'id' => 1089,
                'state_id' => 5,
                'name' => 'Ubaíra',
            ),
            
            array (
                'id' => 1090,
                'state_id' => 5,
                'name' => 'Ubaitaba',
            ),
            
            array (
                'id' => 1091,
                'state_id' => 5,
                'name' => 'Ubatã',
            ),
            
            array (
                'id' => 1094,
                'state_id' => 5,
                'name' => 'Uibaí',
            ),
            
            array (
                'id' => 1095,
                'state_id' => 5,
                'name' => 'Umburanas',
            ),
            
            array (
                'id' => 1097,
                'state_id' => 5,
                'name' => 'Una',
            ),
            
            array (
                'id' => 1098,
                'state_id' => 5,
                'name' => 'Urandi',
            ),
            
            array (
                'id' => 1099,
                'state_id' => 5,
                'name' => 'Uruçuca',
            ),
            
            array (
                'id' => 1100,
                'state_id' => 5,
                'name' => 'Utinga',
            ),
            
            array (
                'id' => 1102,
                'state_id' => 5,
                'name' => 'Valença',
            ),
            
            array (
                'id' => 1103,
                'state_id' => 5,
                'name' => 'Valente',
            ),
            
            array (
                'id' => 1104,
                'state_id' => 5,
                'name' => 'Várzea da Roça',
            ),
            
            array (
                'id' => 1107,
                'state_id' => 5,
                'name' => 'Várzea do Poço',
            ),
            
            array (
                'id' => 1108,
                'state_id' => 5,
                'name' => 'Várzea Nova',
            ),
            
            array (
                'id' => 1110,
                'state_id' => 5,
                'name' => 'Varzedo',
            ),
            
            array (
                'id' => 1113,
                'state_id' => 5,
                'name' => 'VeraZZZn Cruz',
            ),
            
            array (
                'id' => 1114,
                'state_id' => 5,
                'name' => 'Vereda',
            ),
            
            array (
                'id' => 1116,
                'state_id' => 5,
                'name' => 'Vitória da Conquista',
            ),
            
            array (
                'id' => 1118,
                'state_id' => 5,
                'name' => 'Wagner',
            ),
            
            array (
                'id' => 1119,
                'state_id' => 5,
                'name' => 'Wanderley',
            ),
            
            array (
                'id' => 1120,
                'state_id' => 5,
                'name' => 'Wenceslau Guimarães',
            ),
            
            array (
                'id' => 1121,
                'state_id' => 5,
                'name' => 'Xique-Xique',
            ),
            
            array (
                'id' => 1122,
                'state_id' => 6,
                'name' => 'Abaiara',
            ),
            
            array (
                'id' => 1124,
                'state_id' => 6,
                'name' => 'Acarape',
            ),
            
            array (
                'id' => 1125,
                'state_id' => 6,
                'name' => 'Acaraú',
            ),
            
            array (
                'id' => 1126,
                'state_id' => 6,
                'name' => 'Acopiara',
            ),
            
            array (
                'id' => 1131,
                'state_id' => 6,
                'name' => 'Aiuaba',
            ),
            
            array (
                'id' => 1134,
                'state_id' => 6,
                'name' => 'Alcântaras',
            ),
            
            array (
                'id' => 1137,
                'state_id' => 6,
                'name' => 'Altaneira',
            ),
            
            array (
                'id' => 1138,
                'state_id' => 6,
                'name' => 'Alto Santo',
            ),
            
            array (
                'id' => 1145,
                'state_id' => 6,
                'name' => 'Amontada',
            ),
            
            array (
                'id' => 1149,
                'state_id' => 6,
                'name' => 'Antonina do Norte',
            ),
            
            array (
                'id' => 1154,
                'state_id' => 6,
                'name' => 'Apuiarés',
            ),
            
            array (
                'id' => 1156,
                'state_id' => 6,
                'name' => 'Aquiraz',
            ),
            
            array (
                'id' => 1158,
                'state_id' => 6,
                'name' => 'Aracati',
            ),
            
            array (
                'id' => 1161,
                'state_id' => 6,
                'name' => 'Aracoiaba',
            ),
            
            array (
                'id' => 1168,
                'state_id' => 6,
                'name' => 'Ararendá',
            ),
            
            array (
                'id' => 1169,
                'state_id' => 6,
                'name' => 'Araripe',
            ),
            
            array (
                'id' => 1173,
                'state_id' => 6,
                'name' => 'Aratuba',
            ),
            
            array (
                'id' => 1176,
                'state_id' => 6,
                'name' => 'Arneiroz',
            ),
            
            array (
                'id' => 1180,
                'state_id' => 6,
                'name' => 'Assaré',
            ),
            
            array (
                'id' => 1183,
                'state_id' => 6,
                'name' => 'Aurora',
            ),
            
            array (
                'id' => 1185,
                'state_id' => 6,
                'name' => 'Baixio',
            ),
            
            array (
                'id' => 1187,
                'state_id' => 6,
                'name' => 'Banabuiú',
            ),
            
            array (
                'id' => 1190,
                'state_id' => 6,
                'name' => 'Barbalha',
            ),
            
            array (
                'id' => 1196,
                'state_id' => 6,
                'name' => 'Barreira',
            ),
            
            array (
                'id' => 1203,
                'state_id' => 6,
                'name' => 'Barro',
            ),
            
            array (
                'id' => 1205,
                'state_id' => 6,
                'name' => 'Barroquinha',
            ),
            
            array (
                'id' => 1206,
                'state_id' => 6,
                'name' => 'Baturité',
            ),
            
            array (
                'id' => 1208,
                'state_id' => 6,
                'name' => 'Beberibe',
            ),
            
            array (
                'id' => 1209,
                'state_id' => 6,
                'name' => 'Bela Cruz',
            ),
            
            array (
                'id' => 1218,
                'state_id' => 6,
                'name' => 'Boa Viagem',
            ),
            
            array (
                'id' => 1229,
                'state_id' => 6,
                'name' => 'Brejo Santo',
            ),
            
            array (
                'id' => 1247,
                'state_id' => 6,
                'name' => 'Camocim',
            ),
            
            array (
                'id' => 1250,
                'state_id' => 6,
                'name' => 'Campos Sales',
            ),
            
            array (
                'id' => 1256,
                'state_id' => 6,
                'name' => 'Canindé',
            ),
            
            array (
                'id' => 1260,
                'state_id' => 6,
                'name' => 'Capistrano',
            ),
            
            array (
                'id' => 1264,
                'state_id' => 6,
                'name' => 'Caridade',
            ),
            
            array (
                'id' => 1265,
                'state_id' => 6,
                'name' => 'Cariré',
            ),
            
            array (
                'id' => 1266,
                'state_id' => 6,
                'name' => 'Caririaçu',
            ),
            
            array (
                'id' => 1267,
                'state_id' => 6,
                'name' => 'Cariús',
            ),
            
            array (
                'id' => 1270,
                'state_id' => 6,
                'name' => 'Carnaubal',
            ),
            
            array (
                'id' => 1278,
                'state_id' => 6,
                'name' => 'Cascavel',
            ),
            
            array (
                'id' => 1280,
                'state_id' => 6,
                'name' => 'Catarina',
            ),
            
            array (
                'id' => 1283,
                'state_id' => 6,
                'name' => 'Catunda',
            ),
            
            array (
                'id' => 1284,
                'state_id' => 6,
                'name' => 'Caucaia',
            ),
            
            array (
                'id' => 1287,
                'state_id' => 6,
                'name' => 'Cedro',
            ),
            
            array (
                'id' => 1289,
                'state_id' => 6,
                'name' => 'Chaval',
            ),
            
            array (
                'id' => 1290,
                'state_id' => 6,
                'name' => 'Choró',
            ),
            
            array (
                'id' => 1291,
                'state_id' => 6,
                'name' => 'Chorozinho',
            ),
            
            array (
                'id' => 1298,
                'state_id' => 6,
                'name' => 'Coreaú',
            ),
            
            array (
                'id' => 1300,
                'state_id' => 6,
                'name' => 'Crateús',
            ),
            
            array (
                'id' => 1301,
                'state_id' => 6,
                'name' => 'Crato',
            ),
            
            array (
                'id' => 1304,
                'state_id' => 6,
                'name' => 'Croatá',
            ),
            
            array (
                'id' => 1308,
                'state_id' => 6,
                'name' => 'Cruz',
            ),
            
            array (
                'id' => 1318,
                'state_id' => 6,
                'name' => 'Deputado Irapuan Pinheiro',
            ),
            
            array (
                'id' => 1333,
                'state_id' => 6,
                'name' => 'Ererê',
            ),
            
            array (
                'id' => 1337,
                'state_id' => 6,
                'name' => 'Eusébio',
            ),
            
            array (
                'id' => 1338,
                'state_id' => 6,
                'name' => 'Farias Brito',
            ),
            
            array (
                'id' => 1346,
                'state_id' => 6,
                'name' => 'Forquilha',
            ),
            
            array (
                'id' => 1347,
                'state_id' => 6,
                'name' => 'Fortaleza',
            ),
            
            array (
                'id' => 1348,
                'state_id' => 6,
                'name' => 'Fortim',
            ),
            
            array (
                'id' => 1349,
                'state_id' => 6,
                'name' => 'Frecheirinha',
            ),
            
            array (
                'id' => 1355,
                'state_id' => 6,
                'name' => 'General Sampaio',
            ),
            
            array (
                'id' => 1361,
                'state_id' => 6,
                'name' => 'Graça',
            ),
            
            array (
                'id' => 1362,
                'state_id' => 6,
                'name' => 'Granja',
            ),
            
            array (
                'id' => 1363,
                'state_id' => 6,
                'name' => 'Granjeiro',
            ),
            
            array (
                'id' => 1364,
                'state_id' => 6,
                'name' => 'Groairas',
            ),
            
            array (
                'id' => 1365,
                'state_id' => 6,
                'name' => 'Guaiúba',
            ),
            
            array (
                'id' => 1368,
                'state_id' => 6,
                'name' => 'Guaraciaba do Norte',
            ),
            
            array (
                'id' => 1369,
                'state_id' => 6,
                'name' => 'Guaramiranga',
            ),
            
            array (
                'id' => 1375,
                'state_id' => 6,
                'name' => 'Hidrolândia',
            ),
            
            array (
                'id' => 1377,
                'state_id' => 6,
                'name' => 'Horizonte',
            ),
            
            array (
                'id' => 1380,
                'state_id' => 6,
                'name' => 'Ibaretama',
            ),
            
            array (
                'id' => 1382,
                'state_id' => 6,
                'name' => 'Ibiapina',
            ),
            
            array (
                'id' => 1386,
                'state_id' => 6,
                'name' => 'Ibicuitinga',
            ),
            
            array (
                'id' => 1390,
                'state_id' => 6,
                'name' => 'Icapuí',
            ),
            
            array (
                'id' => 1392,
                'state_id' => 6,
                'name' => 'Icó',
            ),
            
            array (
                'id' => 1396,
                'state_id' => 6,
                'name' => 'Iguatu',
            ),
            
            array (
                'id' => 1397,
                'state_id' => 6,
                'name' => 'Independência',
            ),
            
            array (
                'id' => 1402,
                'state_id' => 6,
                'name' => 'Ipaporanga',
            ),
            
            array (
                'id' => 1403,
                'state_id' => 6,
                'name' => 'Ipaumirim',
            ),
            
            array (
                'id' => 1404,
                'state_id' => 6,
                'name' => 'Ipu',
            ),
            
            array (
                'id' => 1405,
                'state_id' => 6,
                'name' => 'Ipueiras',
            ),
            
            array (
                'id' => 1407,
                'state_id' => 6,
                'name' => 'Iracema',
            ),
            
            array (
                'id' => 1411,
                'state_id' => 6,
                'name' => 'Irauçuba',
            ),
            
            array (
                'id' => 1415,
                'state_id' => 6,
                'name' => 'Itaiçaba',
            ),
            
            array (
                'id' => 1417,
                'state_id' => 6,
                'name' => 'Itaitinga',
            ),
            
            array (
                'id' => 1419,
                'state_id' => 6,
                'name' => 'Itapajé',
            ),
            
            array (
                'id' => 1422,
                'state_id' => 6,
                'name' => 'Itapipoca',
            ),
            
            array (
                'id' => 1423,
                'state_id' => 6,
                'name' => 'Itapiúna',
            ),
            
            array (
                'id' => 1425,
                'state_id' => 6,
                'name' => 'Itarema',
            ),
            
            array (
                'id' => 1426,
                'state_id' => 6,
                'name' => 'Itatira',
            ),
            
            array (
                'id' => 1432,
                'state_id' => 6,
                'name' => 'Jaguaretama',
            ),
            
            array (
                'id' => 1433,
                'state_id' => 6,
                'name' => 'Jaguaribara',
            ),
            
            array (
                'id' => 1434,
                'state_id' => 6,
                'name' => 'Jaguaribe',
            ),
            
            array (
                'id' => 1435,
                'state_id' => 6,
                'name' => 'Jaguaruana',
            ),
            
            array (
                'id' => 1439,
                'state_id' => 6,
                'name' => 'Jardim',
            ),
            
            array (
                'id' => 1442,
                'state_id' => 6,
                'name' => 'Jati',
            ),
            
            array (
                'id' => 1443,
                'state_id' => 6,
                'name' => 'Jijoca de Jericoacoara',
            ),
            
            array (
                'id' => 1451,
                'state_id' => 6,
                'name' => 'Juazeiro do Norte',
            ),
            
            array (
                'id' => 1453,
                'state_id' => 6,
                'name' => 'Jucás',
            ),
            
            array (
                'id' => 1468,
                'state_id' => 6,
                'name' => 'Lavras da Mangabeira',
            ),
            
            array (
                'id' => 1470,
                'state_id' => 6,
                'name' => 'Limoeiro do Norte',
            ),
            
            array (
                'id' => 1478,
                'state_id' => 6,
                'name' => 'Madalena',
            ),
            
            array (
                'id' => 1486,
                'state_id' => 6,
                'name' => 'Maracanaú',
            ),
            
            array (
                'id' => 1488,
                'state_id' => 6,
                'name' => 'Maranguape',
            ),
            
            array (
                'id' => 1490,
                'state_id' => 6,
                'name' => 'Marco',
            ),
            
            array (
                'id' => 1495,
                'state_id' => 6,
                'name' => 'Martinópole',
            ),
            
            array (
                'id' => 1496,
                'state_id' => 6,
                'name' => 'Massapê',
            ),
            
            array (
                'id' => 1500,
                'state_id' => 6,
                'name' => 'Mauriti',
            ),
            
            array (
                'id' => 1502,
                'state_id' => 6,
                'name' => 'Meruoca',
            ),
            
            array (
                'id' => 1505,
                'state_id' => 6,
                'name' => 'Milagres',
            ),
            
            array (
                'id' => 1506,
                'state_id' => 6,
                'name' => 'Milhã',
            ),
            
            array (
                'id' => 1510,
                'state_id' => 6,
                'name' => 'Miraíma',
            ),
            
            array (
                'id' => 1513,
                'state_id' => 6,
                'name' => 'Missão Velha',
            ),
            
            array (
                'id' => 1516,
                'state_id' => 6,
                'name' => 'Mombaça',
            ),
            
            array (
                'id' => 1519,
                'state_id' => 6,
                'name' => 'Monsenhor Tabosa',
            ),
            
            array (
                'id' => 1526,
                'state_id' => 6,
                'name' => 'Morada Nova',
            ),
            
            array (
                'id' => 1527,
                'state_id' => 6,
                'name' => 'Moraújo',
            ),
            
            array (
                'id' => 1528,
                'state_id' => 6,
                'name' => 'Morrinhos',
            ),
            
            array (
                'id' => 1531,
                'state_id' => 6,
                'name' => 'Mucambo',
            ),
            
            array (
                'id' => 1532,
                'state_id' => 6,
                'name' => 'Mulungu',
            ),
            
            array (
                'id' => 1547,
                'state_id' => 6,
                'name' => 'Nova Olinda',
            ),
            
            array (
                'id' => 1548,
                'state_id' => 6,
                'name' => 'Nova Russas',
            ),
            
            array (
                'id' => 1551,
                'state_id' => 6,
                'name' => 'Novo Oriente',
            ),
            
            array (
                'id' => 1553,
                'state_id' => 6,
                'name' => 'Ocara',
            ),
            
            array (
                'id' => 1559,
                'state_id' => 6,
                'name' => 'Orós',
            ),
            
            array (
                'id' => 1560,
                'state_id' => 6,
                'name' => 'Pacajus',
            ),
            
            array (
                'id' => 1561,
                'state_id' => 6,
                'name' => 'Pacatuba',
            ),
            
            array (
                'id' => 1562,
                'state_id' => 6,
                'name' => 'Pacoti',
            ),
            
            array (
                'id' => 1563,
                'state_id' => 6,
                'name' => 'Pacujá',
            ),
            
            array (
                'id' => 1572,
                'state_id' => 6,
                'name' => 'Palhano',
            ),
            
            array (
                'id' => 1573,
                'state_id' => 6,
                'name' => 'Palmácia',
            ),
            
            array (
                'id' => 1577,
                'state_id' => 6,
                'name' => 'Paracuru',
            ),
            
            array (
                'id' => 1578,
                'state_id' => 6,
                'name' => 'Paraipaba',
            ),
            
            array (
                'id' => 1580,
                'state_id' => 6,
                'name' => 'Parambu',
            ),
            
            array (
                'id' => 1581,
                'state_id' => 6,
                'name' => 'Paramoti',
            ),
            
            array (
                'id' => 1594,
                'state_id' => 6,
                'name' => 'Pedra Branca',
            ),
            
            array (
                'id' => 1600,
                'state_id' => 6,
                'name' => 'Penaforte',
            ),
            
            array (
                'id' => 1601,
                'state_id' => 6,
                'name' => 'Pentecoste',
            ),
            
            array (
                'id' => 1602,
                'state_id' => 6,
                'name' => 'Pereiro',
            ),
            
            array (
                'id' => 1606,
                'state_id' => 6,
                'name' => 'Pindoretama',
            ),
            
            array (
                'id' => 1608,
                'state_id' => 6,
                'name' => 'Piquet Carneiro',
            ),
            
            array (
                'id' => 1611,
                'state_id' => 6,
                'name' => 'Pires Ferreira',
            ),
            
            array (
                'id' => 1621,
                'state_id' => 6,
                'name' => 'Poranga',
            ),
            
            array (
                'id' => 1623,
                'state_id' => 6,
                'name' => 'Porteiras',
            ),
            
            array (
                'id' => 1624,
                'state_id' => 6,
                'name' => 'Potengi',
            ),
            
            array (
                'id' => 1626,
                'state_id' => 6,
                'name' => 'Potiretama',
            ),
            
            array (
                'id' => 1635,
                'state_id' => 6,
                'name' => 'Quiterianópolis',
            ),
            
            array (
                'id' => 1636,
                'state_id' => 6,
                'name' => 'Quixadá',
            ),
            
            array (
                'id' => 1638,
                'state_id' => 6,
                'name' => 'Quixelô',
            ),
            
            array (
                'id' => 1639,
                'state_id' => 6,
                'name' => 'Quixeramobim',
            ),
            
            array (
                'id' => 1640,
                'state_id' => 6,
                'name' => 'Quixeré',
            ),
            
            array (
                'id' => 1643,
                'state_id' => 6,
                'name' => 'Redenção',
            ),
            
            array (
                'id' => 1644,
                'state_id' => 6,
                'name' => 'Reriutaba',
            ),
            
            array (
                'id' => 1651,
                'state_id' => 6,
                'name' => 'Russas',
            ),
            
            array (
                'id' => 1653,
                'state_id' => 6,
                'name' => 'Saboeiro',
            ),
            
            array (
                'id' => 1656,
                'state_id' => 6,
                'name' => 'Salitre',
            ),
            
            array (
                'id' => 1662,
                'state_id' => 6,
                'name' => 'Santa Quitéria',
            ),
            
            array (
                'id' => 1666,
                'state_id' => 6,
                'name' => 'Santana do Acaraú',
            ),
            
            array (
                'id' => 1667,
                'state_id' => 6,
                'name' => 'Santana do Cariri',
            ),
            
            array (
                'id' => 1676,
                'state_id' => 6,
                'name' => 'São Benedito',
            ),
            
            array (
                'id' => 1682,
                'state_id' => 6,
                'name' => 'São Gonçalo do Amarante',
            ),
            
            array (
                'id' => 1685,
                'state_id' => 6,
                'name' => 'São João do Jaguaribe',
            ),
            
            array (
                'id' => 1696,
                'state_id' => 6,
                'name' => 'São Luís do Curu',
            ),
            
            array (
                'id' => 1710,
                'state_id' => 6,
                'name' => 'Senador Pompeu',
            ),
            
            array (
                'id' => 1711,
                'state_id' => 6,
                'name' => 'Senador Sá',
            ),
            
            array (
                'id' => 1722,
                'state_id' => 6,
                'name' => 'Sobral',
            ),
            
            array (
                'id' => 1724,
                'state_id' => 6,
                'name' => 'Solonópole',
            ),
            
            array (
                'id' => 1731,
                'state_id' => 6,
                'name' => 'Tabuleiro do Norte',
            ),
            
            array (
                'id' => 1733,
                'state_id' => 6,
                'name' => 'Tamboril',
            ),
            
            array (
                'id' => 1739,
                'state_id' => 6,
                'name' => 'Tarrafas',
            ),
            
            array (
                'id' => 1740,
                'state_id' => 6,
                'name' => 'Tauá',
            ),
            
            array (
                'id' => 1741,
                'state_id' => 6,
                'name' => 'Tejuçuoca',
            ),
            
            array (
                'id' => 1742,
                'state_id' => 6,
                'name' => 'Tianguá',
            ),
            
            array (
                'id' => 1746,
                'state_id' => 6,
                'name' => 'Trairi',
            ),
            
            array (
                'id' => 1755,
                'state_id' => 6,
                'name' => 'Tururu',
            ),
            
            array (
                'id' => 1756,
                'state_id' => 6,
                'name' => 'Ubajara',
            ),
            
            array (
                'id' => 1760,
                'state_id' => 6,
                'name' => 'Umari',
            ),
            
            array (
                'id' => 1763,
                'state_id' => 6,
                'name' => 'Umirim',
            ),
            
            array (
                'id' => 1764,
                'state_id' => 6,
                'name' => 'Uruburetama',
            ),
            
            array (
                'id' => 1765,
                'state_id' => 6,
                'name' => 'Uruoca',
            ),
            
            array (
                'id' => 1767,
                'state_id' => 6,
                'name' => 'Varjota',
            ),
            
            array (
                'id' => 1769,
                'state_id' => 6,
                'name' => 'Várzea Alegre',
            ),
            
            array (
                'id' => 1776,
                'state_id' => 6,
                'name' => 'Viçosa do Ceará',
            ),
            
            array (
                'id' => 1778,
                'state_id' => 7,
                'name' => 'Brasília',
            ),
            
            array (
                'id' => 1798,
                'state_id' => 8,
                'name' => 'Afonso Cláudio',
            ),
            
            array (
                'id' => 1800,
                'state_id' => 8,
                'name' => 'Água Doce do Norte',
            ),
            
            array (
                'id' => 1801,
                'state_id' => 8,
                'name' => 'Águia Branca',
            ),
            
            array (
                'id' => 1803,
                'state_id' => 8,
                'name' => 'Alegre',
            ),
            
            array (
                'id' => 1804,
                'state_id' => 8,
                'name' => 'Alfredo Chaves',
            ),
            
            array (
                'id' => 1808,
                'state_id' => 8,
                'name' => 'Alto Rio Novo',
            ),
            
            array (
                'id' => 1810,
                'state_id' => 8,
                'name' => 'Anchieta',
            ),
            
            array (
                'id' => 1813,
                'state_id' => 8,
                'name' => 'Apiacá',
            ),
            
            array (
                'id' => 1816,
                'state_id' => 8,
                'name' => 'Aracruz',
            ),
            
            array (
                'id' => 1821,
                'state_id' => 8,
                'name' => 'Atílio Vivácqua',
            ),
            
            array (
                'id' => 1823,
                'state_id' => 8,
                'name' => 'Baixo Guandu',
            ),
            
            array (
                'id' => 1825,
                'state_id' => 8,
                'name' => 'Barra de São Francisco',
            ),
            
            array (
                'id' => 1831,
                'state_id' => 8,
                'name' => 'Boa Esperança',
            ),
            
            array (
                'id' => 1833,
                'state_id' => 8,
                'name' => 'Bom JesusZZZn do Norte',
            ),
            
            array (
                'id' => 1836,
                'state_id' => 8,
                'name' => 'Brejetuba',
            ),
            
            array (
                'id' => 1839,
                'state_id' => 8,
                'name' => 'Cachoeiro de Itapemirim',
            ),
            
            array (
                'id' => 1844,
                'state_id' => 8,
                'name' => 'Cariacica',
            ),
            
            array (
                'id' => 1845,
                'state_id' => 8,
                'name' => 'Castelo',
            ),
            
            array (
                'id' => 1847,
                'state_id' => 8,
                'name' => 'Colatina',
            ),
            
            array (
                'id' => 1848,
                'state_id' => 8,
                'name' => 'Conceição da Barra',
            ),
            
            array (
                'id' => 1849,
                'state_id' => 8,
                'name' => 'Conceição do Castelo',
            ),
            
            array (
                'id' => 1858,
                'state_id' => 8,
                'name' => 'Divino de São Lourenço',
            ),
            
            array (
                'id' => 1861,
                'state_id' => 8,
                'name' => 'Domingos Martins',
            ),
            
            array (
                'id' => 1863,
                'state_id' => 8,
                'name' => 'Dores do Rio Preto',
            ),
            
            array (
                'id' => 1865,
                'state_id' => 8,
                'name' => 'Ecoporanga',
            ),
            
            array (
                'id' => 1869,
                'state_id' => 8,
                'name' => 'Fundão',
            ),
            
            array (
                'id' => 1874,
                'state_id' => 8,
                'name' => 'Governador Lindenberg',
            ),
            
            array (
                'id' => 1877,
                'state_id' => 8,
                'name' => 'Guaçuí',
            ),
            
            array (
                'id' => 1879,
                'state_id' => 8,
                'name' => 'Guarapari',
            ),
            
            array (
                'id' => 1881,
                'state_id' => 8,
                'name' => 'Ibatiba',
            ),
            
            array (
                'id' => 1884,
                'state_id' => 8,
                'name' => 'Ibiraçu',
            ),
            
            array (
                'id' => 1885,
                'state_id' => 8,
                'name' => 'Ibitirama',
            ),
            
            array (
                'id' => 1888,
                'state_id' => 8,
                'name' => 'Iconha',
            ),
            
            array (
                'id' => 1892,
                'state_id' => 8,
                'name' => 'Irupi',
            ),
            
            array (
                'id' => 1896,
                'state_id' => 8,
                'name' => 'Itaguaçu',
            ),
            
            array (
                'id' => 1903,
                'state_id' => 8,
                'name' => 'Itapemirim',
            ),
            
            array (
                'id' => 1907,
                'state_id' => 8,
                'name' => 'Itarana',
            ),
            
            array (
                'id' => 1910,
                'state_id' => 8,
                'name' => 'Iúna',
            ),
            
            array (
                'id' => 1915,
                'state_id' => 8,
                'name' => 'Jaguaré',
            ),
            
            array (
                'id' => 1916,
                'state_id' => 8,
                'name' => 'Jerônimo Monteiro',
            ),
            
            array (
                'id' => 1918,
                'state_id' => 8,
                'name' => 'João Neiva',
            ),
            
            array (
                'id' => 1923,
                'state_id' => 8,
                'name' => 'Laranja da Terra',
            ),
            
            array (
                'id' => 1925,
                'state_id' => 8,
                'name' => 'Linhares',
            ),
            
            array (
                'id' => 1927,
                'state_id' => 8,
                'name' => 'Mantenópolis',
            ),
            
            array (
                'id' => 1928,
                'state_id' => 8,
                'name' => 'Marataízes',
            ),
            
            array (
                'id' => 1929,
                'state_id' => 8,
                'name' => 'Marechal Floriano',
            ),
            
            array (
                'id' => 1930,
                'state_id' => 8,
                'name' => 'Marilândia',
            ),
            
            array (
                'id' => 1934,
                'state_id' => 8,
                'name' => 'Mimoso do Sul',
            ),
            
            array (
                'id' => 1935,
                'state_id' => 8,
                'name' => 'Montanha',
            ),
            
            array (
                'id' => 1939,
                'state_id' => 8,
                'name' => 'Mucurici',
            ),
            
            array (
                'id' => 1941,
                'state_id' => 8,
                'name' => 'Muniz Freire',
            ),
            
            array (
                'id' => 1942,
                'state_id' => 8,
                'name' => 'Muqui',
            ),
            
            array (
                'id' => 1946,
                'state_id' => 8,
                'name' => 'Nova Venécia',
            ),
            
            array (
                'id' => 1954,
                'state_id' => 8,
                'name' => 'Pancas',
            ),
            
            array (
                'id' => 1957,
                'state_id' => 8,
                'name' => 'Pedro Canário',
            ),
            
            array (
                'id' => 1962,
                'state_id' => 8,
                'name' => 'Pinheiros',
            ),
            
            array (
                'id' => 1964,
                'state_id' => 8,
                'name' => 'Piúma',
            ),
            
            array (
                'id' => 1966,
                'state_id' => 8,
                'name' => 'Ponto Belo',
            ),
            
            array (
                'id' => 1971,
                'state_id' => 8,
                'name' => 'Presidente Kennedy',
            ),
            
            array (
                'id' => 1978,
                'state_id' => 8,
                'name' => 'Rio Bananal',
            ),
            
            array (
                'id' => 1981,
                'state_id' => 8,
                'name' => 'Rio Novo do Sul',
            ),
            
            array (
                'id' => 1988,
                'state_id' => 8,
                'name' => 'Santa Leopoldina',
            ),
            
            array (
                'id' => 1992,
                'state_id' => 8,
                'name' => 'Santa Maria de Jetibá',
            ),
            
            array (
                'id' => 1994,
                'state_id' => 8,
                'name' => 'Santa Teresa',
            ),
            
            array (
                'id' => 2003,
                'state_id' => 8,
                'name' => 'São Domingos do Norte',
            ),
            
            array (
                'id' => 2006,
                'state_id' => 8,
                'name' => 'São Gabriel da Palha',
            ),
            
            array (
                'id' => 2017,
                'state_id' => 8,
                'name' => 'São José do Calçado',
            ),
            
            array (
                'id' => 2019,
                'state_id' => 8,
                'name' => 'São Mateus',
            ),
            
            array (
                'id' => 2024,
                'state_id' => 8,
                'name' => 'São Roque do Canaã',
            ),
            
            array (
                'id' => 2028,
                'state_id' => 8,
                'name' => 'Serra',
            ),
            
            array (
                'id' => 2031,
                'state_id' => 8,
                'name' => 'Sooretama',
            ),
            
            array (
                'id' => 2035,
                'state_id' => 8,
                'name' => 'Vargem Alta',
            ),
            
            array (
                'id' => 2037,
                'state_id' => 8,
                'name' => 'Venda Nova do Imigrante',
            ),
            
            array (
                'id' => 2038,
                'state_id' => 8,
                'name' => 'Viana',
            ),
            
            array (
                'id' => 2042,
                'state_id' => 8,
                'name' => 'Vila Pavão',
            ),
            
            array (
                'id' => 2043,
                'state_id' => 8,
                'name' => 'Vila Valério',
            ),
            
            array (
                'id' => 2044,
                'state_id' => 8,
                'name' => 'Vila Velha',
            ),
            
            array (
                'id' => 2048,
                'state_id' => 8,
                'name' => 'Vitória',
            ),
            
            array (
                'id' => 2049,
                'state_id' => 9,
                'name' => 'Abadia de Goiás',
            ),
            
            array (
                'id' => 2050,
                'state_id' => 9,
                'name' => 'Abadiânia',
            ),
            
            array (
                'id' => 2051,
                'state_id' => 9,
                'name' => 'Acreúna',
            ),
            
            array (
                'id' => 2052,
                'state_id' => 9,
                'name' => 'Adelândia',
            ),
            
            array (
                'id' => 2053,
                'state_id' => 9,
                'name' => 'Água Fria de Goiás',
            ),
            
            array (
                'id' => 2054,
                'state_id' => 9,
                'name' => 'Água Limpa',
            ),
            
            array (
                'id' => 2055,
                'state_id' => 9,
                'name' => 'Águas Lindas de Goiás',
            ),
            
            array (
                'id' => 2056,
                'state_id' => 9,
                'name' => 'Alexânia',
            ),
            
            array (
                'id' => 2057,
                'state_id' => 9,
                'name' => 'Aloândia',
            ),
            
            array (
                'id' => 2059,
                'state_id' => 9,
                'name' => 'Alto Horizonte',
            ),
            
            array (
                'id' => 2060,
                'state_id' => 9,
                'name' => 'Alto Paraíso de Goiás',
            ),
            
            array (
                'id' => 2061,
                'state_id' => 9,
                'name' => 'Alvorada do Norte',
            ),
            
            array (
                'id' => 2062,
                'state_id' => 9,
                'name' => 'Amaralina',
            ),
            
            array (
                'id' => 2063,
                'state_id' => 9,
                'name' => 'Americano do Brasil',
            ),
            
            array (
                'id' => 2064,
                'state_id' => 9,
                'name' => 'Amorinópolis',
            ),
            
            array (
                'id' => 2065,
                'state_id' => 9,
                'name' => 'Anápolis',
            ),
            
            array (
                'id' => 2066,
                'state_id' => 9,
                'name' => 'Anhangüera',
            ),
            
            array (
                'id' => 2067,
                'state_id' => 9,
                'name' => 'Anicuns',
            ),
            
            array (
                'id' => 2069,
                'state_id' => 9,
                'name' => 'Aparecida de Goiânia',
            ),
            
            array (
                'id' => 2072,
                'state_id' => 9,
                'name' => 'Aparecida do Rio Doce',
            ),
            
            array (
                'id' => 2073,
                'state_id' => 9,
                'name' => 'Aporé',
            ),
            
            array (
                'id' => 2074,
                'state_id' => 9,
                'name' => 'Araçu',
            ),
            
            array (
                'id' => 2075,
                'state_id' => 9,
                'name' => 'Aragarças',
            ),
            
            array (
                'id' => 2076,
                'state_id' => 9,
                'name' => 'Aragoiânia',
            ),
            
            array (
                'id' => 2077,
                'state_id' => 9,
                'name' => 'Araguapaz',
            ),
            
            array (
                'id' => 2078,
                'state_id' => 9,
                'name' => 'Arenópolis',
            ),
            
            array (
                'id' => 2079,
                'state_id' => 9,
                'name' => 'Aruanã',
            ),
            
            array (
                'id' => 2080,
                'state_id' => 9,
                'name' => 'Aurilândia',
            ),
            
            array (
                'id' => 2082,
                'state_id' => 9,
                'name' => 'Avelinópolis',
            ),
            
            array (
                'id' => 2084,
                'state_id' => 9,
                'name' => 'Baliza',
            ),
            
            array (
                'id' => 2087,
                'state_id' => 9,
                'name' => 'Barro Alto',
            ),
            
            array (
                'id' => 2088,
                'state_id' => 9,
                'name' => 'Bela Vista de Goiás',
            ),
            
            array (
                'id' => 2089,
                'state_id' => 9,
                'name' => 'Bom Jardim de Goiás',
            ),
            
            array (
                'id' => 2090,
                'state_id' => 9,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 2091,
                'state_id' => 9,
                'name' => 'Bonfinópolis',
            ),
            
            array (
                'id' => 2092,
                'state_id' => 9,
                'name' => 'Bonópolis',
            ),
            
            array (
                'id' => 2093,
                'state_id' => 9,
                'name' => 'Brazabrantes',
            ),
            
            array (
                'id' => 2094,
                'state_id' => 9,
                'name' => 'Britânia',
            ),
            
            array (
                'id' => 2096,
                'state_id' => 9,
                'name' => 'Buriti Alegre',
            ),
            
            array (
                'id' => 2097,
                'state_id' => 9,
                'name' => 'Buriti de Goiás',
            ),
            
            array (
                'id' => 2098,
                'state_id' => 9,
                'name' => 'Buritinópolis',
            ),
            
            array (
                'id' => 2099,
                'state_id' => 9,
                'name' => 'Cabeceiras',
            ),
            
            array (
                'id' => 2100,
                'state_id' => 9,
                'name' => 'Cachoeira Alta',
            ),
            
            array (
                'id' => 2101,
                'state_id' => 9,
                'name' => 'Cachoeira de Goiás',
            ),
            
            array (
                'id' => 2102,
                'state_id' => 9,
                'name' => 'Cachoeira Dourada',
            ),
            
            array (
                'id' => 2103,
                'state_id' => 9,
                'name' => 'Caçu',
            ),
            
            array (
                'id' => 2104,
                'state_id' => 9,
                'name' => 'Caiapônia',
            ),
            
            array (
                'id' => 2107,
                'state_id' => 9,
                'name' => 'Caldas Novas',
            ),
            
            array (
                'id' => 2108,
                'state_id' => 9,
                'name' => 'Caldazinha',
            ),
            
            array (
                'id' => 2110,
                'state_id' => 9,
                'name' => 'Campestre de Goiás',
            ),
            
            array (
                'id' => 2111,
                'state_id' => 9,
                'name' => 'Campinaçu',
            ),
            
            array (
                'id' => 2112,
                'state_id' => 9,
                'name' => 'Campinorte',
            ),
            
            array (
                'id' => 2113,
                'state_id' => 9,
                'name' => 'Campo Alegre de Goiás',
            ),
            
            array (
                'id' => 2116,
                'state_id' => 9,
                'name' => 'Campos Belos',
            ),
            
            array (
                'id' => 2117,
                'state_id' => 9,
                'name' => 'Campos Verdes',
            ),
            
            array (
                'id' => 2122,
                'state_id' => 9,
                'name' => 'Carmo do Rio Verde',
            ),
            
            array (
                'id' => 2123,
                'state_id' => 9,
                'name' => 'Castelândia',
            ),
            
            array (
                'id' => 2125,
                'state_id' => 9,
                'name' => 'Catalão',
            ),
            
            array (
                'id' => 2126,
                'state_id' => 9,
                'name' => 'Caturaí',
            ),
            
            array (
                'id' => 2127,
                'state_id' => 9,
                'name' => 'Cavalcante',
            ),
            
            array (
                'id' => 2130,
                'state_id' => 9,
                'name' => 'Ceres',
            ),
            
            array (
                'id' => 2131,
                'state_id' => 9,
                'name' => 'Cezarina',
            ),
            
            array (
                'id' => 2132,
                'state_id' => 9,
                'name' => 'Chapadão do Céu',
            ),
            
            array (
                'id' => 2135,
                'state_id' => 9,
                'name' => 'Cidade Ocidental',
            ),
            
            array (
                'id' => 2137,
                'state_id' => 9,
                'name' => 'Cocalzinho de Goiás',
            ),
            
            array (
                'id' => 2138,
                'state_id' => 9,
                'name' => 'Colinas do Sul',
            ),
            
            array (
                'id' => 2139,
                'state_id' => 9,
                'name' => 'Córrego do Ouro',
            ),
            
            array (
                'id' => 2141,
                'state_id' => 9,
                'name' => 'Corumbá de Goiás',
            ),
            
            array (
                'id' => 2142,
                'state_id' => 9,
                'name' => 'Corumbaíba',
            ),
            
            array (
                'id' => 2143,
                'state_id' => 9,
                'name' => 'Cristalina',
            ),
            
            array (
                'id' => 2144,
                'state_id' => 9,
                'name' => 'Cristianópolis',
            ),
            
            array (
                'id' => 2145,
                'state_id' => 9,
                'name' => 'Crixás',
            ),
            
            array (
                'id' => 2146,
                'state_id' => 9,
                'name' => 'Cromínia',
            ),
            
            array (
                'id' => 2148,
                'state_id' => 9,
                'name' => 'Cumari',
            ),
            
            array (
                'id' => 2149,
                'state_id' => 9,
                'name' => 'Damianópolis',
            ),
            
            array (
                'id' => 2150,
                'state_id' => 9,
                'name' => 'Damolândia',
            ),
            
            array (
                'id' => 2152,
                'state_id' => 9,
                'name' => 'Davinópolis',
            ),
            
            array (
                'id' => 2154,
                'state_id' => 9,
                'name' => 'Diorama',
            ),
            
            array (
                'id' => 2155,
                'state_id' => 9,
                'name' => 'Divinópolis de Goiás',
            ),
            
            array (
                'id' => 2157,
                'state_id' => 9,
                'name' => 'Doverlândia',
            ),
            
            array (
                'id' => 2158,
                'state_id' => 9,
                'name' => 'Edealina',
            ),
            
            array (
                'id' => 2159,
                'state_id' => 9,
                'name' => 'Edéia',
            ),
            
            array (
                'id' => 2160,
                'state_id' => 9,
                'name' => 'Estrela do Norte',
            ),
            
            array (
                'id' => 2161,
                'state_id' => 9,
                'name' => 'Faina',
            ),
            
            array (
                'id' => 2162,
                'state_id' => 9,
                'name' => 'Fazenda Nova',
            ),
            
            array (
                'id' => 2163,
                'state_id' => 9,
                'name' => 'Firminópolis',
            ),
            
            array (
                'id' => 2164,
                'state_id' => 9,
                'name' => 'Flores de Goiás',
            ),
            
            array (
                'id' => 2165,
                'state_id' => 9,
                'name' => 'Formosa',
            ),
            
            array (
                'id' => 2166,
                'state_id' => 9,
                'name' => 'Formoso',
            ),
            
            array (
                'id' => 2168,
                'state_id' => 9,
                'name' => 'Gameleira de Goiás',
            ),
            
            array (
                'id' => 2171,
                'state_id' => 9,
                'name' => 'Goianápolis',
            ),
            
            array (
                'id' => 2172,
                'state_id' => 9,
                'name' => 'Goiandira',
            ),
            
            array (
                'id' => 2173,
                'state_id' => 9,
                'name' => 'Goianésia',
            ),
            
            array (
                'id' => 2174,
                'state_id' => 9,
                'name' => 'Goiânia',
            ),
            
            array (
                'id' => 2175,
                'state_id' => 9,
                'name' => 'Goianira',
            ),
            
            array (
                'id' => 2176,
                'state_id' => 9,
                'name' => 'Goiás',
            ),
            
            array (
                'id' => 2177,
                'state_id' => 9,
                'name' => 'Goiatuba',
            ),
            
            array (
                'id' => 2178,
                'state_id' => 9,
                'name' => 'Gouvelândia',
            ),
            
            array (
                'id' => 2179,
                'state_id' => 9,
                'name' => 'Guapó',
            ),
            
            array (
                'id' => 2180,
                'state_id' => 9,
                'name' => 'Guaraíta',
            ),
            
            array (
                'id' => 2181,
                'state_id' => 9,
                'name' => 'Guarani de Goiás',
            ),
            
            array (
                'id' => 2182,
                'state_id' => 9,
                'name' => 'Guarinos',
            ),
            
            array (
                'id' => 2183,
                'state_id' => 9,
                'name' => 'Heitoraí',
            ),
            
            array (
                'id' => 2184,
                'state_id' => 9,
                'name' => 'Hidrolândia',
            ),
            
            array (
                'id' => 2185,
                'state_id' => 9,
                'name' => 'Hidrolina',
            ),
            
            array (
                'id' => 2186,
                'state_id' => 9,
                'name' => 'Iaciara',
            ),
            
            array (
                'id' => 2187,
                'state_id' => 9,
                'name' => 'Inaciolândia',
            ),
            
            array (
                'id' => 2188,
                'state_id' => 9,
                'name' => 'Indiara',
            ),
            
            array (
                'id' => 2189,
                'state_id' => 9,
                'name' => 'Inhumas',
            ),
            
            array (
                'id' => 2191,
                'state_id' => 9,
                'name' => 'Ipameri',
            ),
            
            array (
                'id' => 2192,
                'state_id' => 9,
                'name' => 'Iporá',
            ),
            
            array (
                'id' => 2193,
                'state_id' => 9,
                'name' => 'Israelândia',
            ),
            
            array (
                'id' => 2194,
                'state_id' => 9,
                'name' => 'Itaberaí',
            ),
            
            array (
                'id' => 2196,
                'state_id' => 9,
                'name' => 'Itaguari',
            ),
            
            array (
                'id' => 2197,
                'state_id' => 9,
                'name' => 'Itaguaru',
            ),
            
            array (
                'id' => 2198,
                'state_id' => 9,
                'name' => 'Itajá',
            ),
            
            array (
                'id' => 2199,
                'state_id' => 9,
                'name' => 'Itapaci',
            ),
            
            array (
                'id' => 2200,
                'state_id' => 9,
                'name' => 'Itapirapuã',
            ),
            
            array (
                'id' => 2201,
                'state_id' => 9,
                'name' => 'Itapuranga',
            ),
            
            array (
                'id' => 2202,
                'state_id' => 9,
                'name' => 'Itarumã',
            ),
            
            array (
                'id' => 2203,
                'state_id' => 9,
                'name' => 'Itauçu',
            ),
            
            array (
                'id' => 2204,
                'state_id' => 9,
                'name' => 'Itumbiara',
            ),
            
            array (
                'id' => 2205,
                'state_id' => 9,
                'name' => 'Ivolândia',
            ),
            
            array (
                'id' => 2207,
                'state_id' => 9,
                'name' => 'Jandaia',
            ),
            
            array (
                'id' => 2208,
                'state_id' => 9,
                'name' => 'Jaraguá',
            ),
            
            array (
                'id' => 2209,
                'state_id' => 9,
                'name' => 'Jataí',
            ),
            
            array (
                'id' => 2210,
                'state_id' => 9,
                'name' => 'Jaupaci',
            ),
            
            array (
                'id' => 2212,
                'state_id' => 9,
                'name' => 'Jesúpolis',
            ),
            
            array (
                'id' => 2214,
                'state_id' => 9,
                'name' => 'Joviânia',
            ),
            
            array (
                'id' => 2217,
                'state_id' => 9,
                'name' => 'Jussara',
            ),
            
            array (
                'id' => 2220,
                'state_id' => 9,
                'name' => 'Leopoldo de Bulhões',
            ),
            
            array (
                'id' => 2222,
                'state_id' => 9,
                'name' => 'Luziânia',
            ),
            
            array (
                'id' => 2223,
                'state_id' => 9,
                'name' => 'Mairipotaba',
            ),
            
            array (
                'id' => 2224,
                'state_id' => 9,
                'name' => 'Mambaí',
            ),
            
            array (
                'id' => 2225,
                'state_id' => 9,
                'name' => 'Mara Rosa',
            ),
            
            array (
                'id' => 2227,
                'state_id' => 9,
                'name' => 'Marzagão',
            ),
            
            array (
                'id' => 2228,
                'state_id' => 9,
                'name' => 'Matrinchã',
            ),
            
            array (
                'id' => 2229,
                'state_id' => 9,
                'name' => 'Maurilândia',
            ),
            
            array (
                'id' => 2232,
                'state_id' => 9,
                'name' => 'Mimoso de Goiás',
            ),
            
            array (
                'id' => 2233,
                'state_id' => 9,
                'name' => 'Minaçu',
            ),
            
            array (
                'id' => 2234,
                'state_id' => 9,
                'name' => 'Mineiros',
            ),
            
            array (
                'id' => 2235,
                'state_id' => 9,
                'name' => 'Moiporá',
            ),
            
            array (
                'id' => 2236,
                'state_id' => 9,
                'name' => 'Monte Alegre de Goiás',
            ),
            
            array (
                'id' => 2237,
                'state_id' => 9,
                'name' => 'Montes Claros de Goiás',
            ),
            
            array (
                'id' => 2238,
                'state_id' => 9,
                'name' => 'Montividiu',
            ),
            
            array (
                'id' => 2239,
                'state_id' => 9,
                'name' => 'Montividiu do Norte',
            ),
            
            array (
                'id' => 2240,
                'state_id' => 9,
                'name' => 'Morrinhos',
            ),
            
            array (
                'id' => 2241,
                'state_id' => 9,
                'name' => 'Morro Agudo de Goiás',
            ),
            
            array (
                'id' => 2242,
                'state_id' => 9,
                'name' => 'Mossâmedes',
            ),
            
            array (
                'id' => 2243,
                'state_id' => 9,
                'name' => 'Mozarlândia',
            ),
            
            array (
                'id' => 2244,
                'state_id' => 9,
                'name' => 'Mundo Novo',
            ),
            
            array (
                'id' => 2245,
                'state_id' => 9,
                'name' => 'Mutunópolis',
            ),
            
            array (
                'id' => 2247,
                'state_id' => 9,
                'name' => 'Nazário',
            ),
            
            array (
                'id' => 2248,
                'state_id' => 9,
                'name' => 'Nerópolis',
            ),
            
            array (
                'id' => 2249,
                'state_id' => 9,
                'name' => 'Niquelândia',
            ),
            
            array (
                'id' => 2250,
                'state_id' => 9,
                'name' => 'Nova América',
            ),
            
            array (
                'id' => 2251,
                'state_id' => 9,
                'name' => 'Nova Aurora',
            ),
            
            array (
                'id' => 2252,
                'state_id' => 9,
                'name' => 'Nova Crixás',
            ),
            
            array (
                'id' => 2253,
                'state_id' => 9,
                'name' => 'Nova Glória',
            ),
            
            array (
                'id' => 2254,
                'state_id' => 9,
                'name' => 'Nova Iguaçu de Goiás',
            ),
            
            array (
                'id' => 2255,
                'state_id' => 9,
                'name' => 'Nova Roma',
            ),
            
            array (
                'id' => 2256,
                'state_id' => 9,
                'name' => 'Nova Veneza',
            ),
            
            array (
                'id' => 2257,
                'state_id' => 9,
                'name' => 'Novo Brasil',
            ),
            
            array (
                'id' => 2258,
                'state_id' => 9,
                'name' => 'Novo Gama',
            ),
            
            array (
                'id' => 2259,
                'state_id' => 9,
                'name' => 'Novo Planalto',
            ),
            
            array (
                'id' => 2262,
                'state_id' => 9,
                'name' => 'Orizona',
            ),
            
            array (
                'id' => 2263,
                'state_id' => 9,
                'name' => 'Ouro Verde de Goiás',
            ),
            
            array (
                'id' => 2265,
                'state_id' => 9,
                'name' => 'Ouvidor',
            ),
            
            array (
                'id' => 2266,
                'state_id' => 9,
                'name' => 'Padre Bernardo',
            ),
            
            array (
                'id' => 2267,
                'state_id' => 9,
                'name' => 'Palestina de Goiás',
            ),
            
            array (
                'id' => 2268,
                'state_id' => 9,
                'name' => 'Palmeiras de Goiás',
            ),
            
            array (
                'id' => 2269,
                'state_id' => 9,
                'name' => 'Palmelo',
            ),
            
            array (
                'id' => 2270,
                'state_id' => 9,
                'name' => 'Palminópolis',
            ),
            
            array (
                'id' => 2271,
                'state_id' => 9,
                'name' => 'Panamá',
            ),
            
            array (
                'id' => 2272,
                'state_id' => 9,
                'name' => 'Paranaiguara',
            ),
            
            array (
                'id' => 2273,
                'state_id' => 9,
                'name' => 'Paraúna',
            ),
            
            array (
                'id' => 2276,
                'state_id' => 9,
                'name' => 'Perolândia',
            ),
            
            array (
                'id' => 2277,
                'state_id' => 9,
                'name' => 'Petrolina de Goiás',
            ),
            
            array (
                'id' => 2278,
                'state_id' => 9,
                'name' => 'Pilar de Goiás',
            ),
            
            array (
                'id' => 2280,
                'state_id' => 9,
                'name' => 'Piracanjuba',
            ),
            
            array (
                'id' => 2281,
                'state_id' => 9,
                'name' => 'Piranhas',
            ),
            
            array (
                'id' => 2282,
                'state_id' => 9,
                'name' => 'Pirenópolis',
            ),
            
            array (
                'id' => 2284,
                'state_id' => 9,
                'name' => 'Pires do Rio',
            ),
            
            array (
                'id' => 2285,
                'state_id' => 9,
                'name' => 'Planaltina de Goiás',
            ),
            
            array (
                'id' => 2286,
                'state_id' => 9,
                'name' => 'Pontalina',
            ),
            
            array (
                'id' => 2287,
                'state_id' => 9,
                'name' => 'Porangatu',
            ),
            
            array (
                'id' => 2288,
                'state_id' => 9,
                'name' => 'Porteirão',
            ),
            
            array (
                'id' => 2289,
                'state_id' => 9,
                'name' => 'Portelândia',
            ),
            
            array (
                'id' => 2290,
                'state_id' => 9,
                'name' => 'Posse',
            ),
            
            array (
                'id' => 2292,
                'state_id' => 9,
                'name' => 'Professor Jamil',
            ),
            
            array (
                'id' => 2293,
                'state_id' => 9,
                'name' => 'Quirinópolis',
            ),
            
            array (
                'id' => 2295,
                'state_id' => 9,
                'name' => 'Rianápolis',
            ),
            
            array (
                'id' => 2297,
                'state_id' => 9,
                'name' => 'Rio Quente',
            ),
            
            array (
                'id' => 2298,
                'state_id' => 9,
                'name' => 'Rio Verde',
            ),
            
            array (
                'id' => 2300,
                'state_id' => 9,
                'name' => 'Campo Limpo de Goiás',
            ),
            
            array (
                'id' => 2302,
                'state_id' => 9,
                'name' => 'Rubiataba',
            ),
            
            array (
                'id' => 2303,
                'state_id' => 9,
                'name' => 'Sanclerlândia',
            ),
            
            array (
                'id' => 2304,
                'state_id' => 9,
                'name' => 'Santa Bárbara de Goiás',
            ),
            
            array (
                'id' => 2306,
                'state_id' => 9,
                'name' => 'Santa Cruz de Goiás',
            ),
            
            array (
                'id' => 2307,
                'state_id' => 9,
                'name' => 'Santa Fé de Goiás',
            ),
            
            array (
                'id' => 2308,
                'state_id' => 9,
                'name' => 'Santa Helena de Goiás',
            ),
            
            array (
                'id' => 2309,
                'state_id' => 9,
                'name' => 'Santa Isabel',
            ),
            
            array (
                'id' => 2310,
                'state_id' => 9,
                'name' => 'Santa Rita do Araguaia',
            ),
            
            array (
                'id' => 2311,
                'state_id' => 9,
                'name' => 'Santa Rita do Novo Destino',
            ),
            
            array (
                'id' => 2313,
                'state_id' => 9,
                'name' => 'Santa Rosa de Goiás',
            ),
            
            array (
                'id' => 2314,
                'state_id' => 9,
                'name' => 'Santa Tereza de Goiás',
            ),
            
            array (
                'id' => 2315,
                'state_id' => 9,
                'name' => 'Santa Terezinha de Goiás',
            ),
            
            array (
                'id' => 2316,
                'state_id' => 9,
                'name' => 'Santo Antônio da Barra',
            ),
            
            array (
                'id' => 2317,
                'state_id' => 9,
                'name' => 'Santo Antônio de Goiás',
            ),
            
            array (
                'id' => 2318,
                'state_id' => 9,
                'name' => 'Santo Antônio do Descoberto',
            ),
            
            array (
                'id' => 2320,
                'state_id' => 9,
                'name' => 'São Domingos',
            ),
            
            array (
                'id' => 2321,
                'state_id' => 9,
                'name' => 'São Francisco de Goiás',
            ),
            
            array (
                'id' => 2324,
                'state_id' => 9,
                'name' => 'São João D\'Aliança',
            ),
            
            array (
                'id' => 2325,
                'state_id' => 9,
                'name' => 'São João da Paraúna',
            ),
            
            array (
                'id' => 2326,
                'state_id' => 9,
                'name' => 'São Luís de Montes Belos',
            ),
            
            array (
                'id' => 2327,
                'state_id' => 9,
                'name' => 'São Luiz do Norte',
            ),
            
            array (
                'id' => 2329,
                'state_id' => 9,
                'name' => 'São Miguel do Araguaia',
            ),
            
            array (
                'id' => 2330,
                'state_id' => 9,
                'name' => 'São Miguel do Passa Quatro',
            ),
            
            array (
                'id' => 2331,
                'state_id' => 9,
                'name' => 'São Patrício',
            ),
            
            array (
                'id' => 2333,
                'state_id' => 9,
                'name' => 'São Simão',
            ),
            
            array (
                'id' => 2336,
                'state_id' => 9,
                'name' => 'Senador Canedo',
            ),
            
            array (
                'id' => 2338,
                'state_id' => 9,
                'name' => 'Serranópolis',
            ),
            
            array (
                'id' => 2339,
                'state_id' => 9,
                'name' => 'Silvânia',
            ),
            
            array (
                'id' => 2340,
                'state_id' => 9,
                'name' => 'Simolândia',
            ),
            
            array (
                'id' => 2341,
                'state_id' => 9,
                'name' => 'Sítio D\'Abadia',
            ),
            
            array (
                'id' => 2343,
                'state_id' => 9,
                'name' => 'Taquaral de Goiás',
            ),
            
            array (
                'id' => 2345,
                'state_id' => 9,
                'name' => 'Teresina de Goiás',
            ),
            
            array (
                'id' => 2346,
                'state_id' => 9,
                'name' => 'Terezópolis de Goiás',
            ),
            
            array (
                'id' => 2347,
                'state_id' => 9,
                'name' => 'Lagoa Santa',
            ),
            
            array (
                'id' => 2348,
                'state_id' => 9,
                'name' => 'Três Ranchos',
            ),
            
            array (
                'id' => 2349,
                'state_id' => 9,
                'name' => 'Trindade',
            ),
            
            array (
                'id' => 2350,
                'state_id' => 9,
                'name' => 'Trombas',
            ),
            
            array (
                'id' => 2352,
                'state_id' => 9,
                'name' => 'Turvânia',
            ),
            
            array (
                'id' => 2353,
                'state_id' => 9,
                'name' => 'Turvelândia',
            ),
            
            array (
                'id' => 2354,
                'state_id' => 9,
                'name' => 'Uirapuru',
            ),
            
            array (
                'id' => 2355,
                'state_id' => 9,
                'name' => 'Uruaçu',
            ),
            
            array (
                'id' => 2356,
                'state_id' => 9,
                'name' => 'Uruana',
            ),
            
            array (
                'id' => 2358,
                'state_id' => 9,
                'name' => 'Urutaí',
            ),
            
            array (
                'id' => 2361,
                'state_id' => 9,
                'name' => 'Valparaíso de Goiás',
            ),
            
            array (
                'id' => 2362,
                'state_id' => 9,
                'name' => 'Varjão',
            ),
            
            array (
                'id' => 2363,
                'state_id' => 9,
                'name' => 'Vianópolis',
            ),
            
            array (
                'id' => 2364,
                'state_id' => 9,
                'name' => 'Vicentinópolis',
            ),
            
            array (
                'id' => 2365,
                'state_id' => 9,
                'name' => 'Vila Boa',
            ),
            
            array (
                'id' => 2367,
                'state_id' => 9,
                'name' => 'Vila Propício',
            ),
            
            array (
                'id' => 2369,
                'state_id' => 10,
                'name' => 'Açailândia',
            ),
            
            array (
                'id' => 2370,
                'state_id' => 10,
                'name' => 'Afonso Cunha',
            ),
            
            array (
                'id' => 2371,
                'state_id' => 10,
                'name' => 'Água Doce do Maranhão',
            ),
            
            array (
                'id' => 2372,
                'state_id' => 10,
                'name' => 'Alcântara',
            ),
            
            array (
                'id' => 2373,
                'state_id' => 10,
                'name' => 'Aldeias Altas',
            ),
            
            array (
                'id' => 2374,
                'state_id' => 10,
                'name' => 'Altamira do Maranhão',
            ),
            
            array (
                'id' => 2375,
                'state_id' => 10,
                'name' => 'Alto Alegre do Maranhão',
            ),
            
            array (
                'id' => 2376,
                'state_id' => 10,
                'name' => 'Alto Alegre do Pindaré',
            ),
            
            array (
                'id' => 2377,
                'state_id' => 10,
                'name' => 'Alto Parnaíba',
            ),
            
            array (
                'id' => 2378,
                'state_id' => 10,
                'name' => 'Amapá do Maranhão',
            ),
            
            array (
                'id' => 2379,
                'state_id' => 10,
                'name' => 'Amarante do Maranhão',
            ),
            
            array (
                'id' => 2380,
                'state_id' => 10,
                'name' => 'Anajatuba',
            ),
            
            array (
                'id' => 2381,
                'state_id' => 10,
                'name' => 'Anapurus',
            ),
            
            array (
                'id' => 2383,
                'state_id' => 10,
                'name' => 'Apicum-Açu',
            ),
            
            array (
                'id' => 2384,
                'state_id' => 10,
                'name' => 'Araguanã',
            ),
            
            array (
                'id' => 2385,
                'state_id' => 10,
                'name' => 'Araióses',
            ),
            
            array (
                'id' => 2386,
                'state_id' => 10,
                'name' => 'Arame',
            ),
            
            array (
                'id' => 2387,
                'state_id' => 10,
                'name' => 'Arari',
            ),
            
            array (
                'id' => 2389,
                'state_id' => 10,
                'name' => 'Axixá',
            ),
            
            array (
                'id' => 2390,
                'state_id' => 10,
                'name' => 'Bacabal',
            ),
            
            array (
                'id' => 2391,
                'state_id' => 10,
                'name' => 'Bacabeira',
            ),
            
            array (
                'id' => 2393,
                'state_id' => 10,
                'name' => 'Bacuri',
            ),
            
            array (
                'id' => 2394,
                'state_id' => 10,
                'name' => 'Bacurituba',
            ),
            
            array (
                'id' => 2395,
                'state_id' => 10,
                'name' => 'Balsas',
            ),
            
            array (
                'id' => 2396,
                'state_id' => 10,
                'name' => 'Barão de Grajaú',
            ),
            
            array (
                'id' => 2398,
                'state_id' => 10,
                'name' => 'Barra do Corda',
            ),
            
            array (
                'id' => 2399,
                'state_id' => 10,
                'name' => 'Barreirinhas',
            ),
            
            array (
                'id' => 2401,
                'state_id' => 10,
                'name' => 'Bela Vista do Maranhão',
            ),
            
            array (
                'id' => 2402,
                'state_id' => 10,
                'name' => 'Belágua',
            ),
            
            array (
                'id' => 2403,
                'state_id' => 10,
                'name' => 'Benedito Leite',
            ),
            
            array (
                'id' => 2404,
                'state_id' => 10,
                'name' => 'Bequimão',
            ),
            
            array (
                'id' => 2405,
                'state_id' => 10,
                'name' => 'Bernardo do Mearim',
            ),
            
            array (
                'id' => 2406,
                'state_id' => 10,
                'name' => 'Boa Vista do Gurupi',
            ),
            
            array (
                'id' => 2408,
                'state_id' => 10,
                'name' => 'Bom Jardim',
            ),
            
            array (
                'id' => 2409,
                'state_id' => 10,
                'name' => 'Bom Jesus das Selvas',
            ),
            
            array (
                'id' => 2410,
                'state_id' => 10,
                'name' => 'Bom Lugar',
            ),
            
            array (
                'id' => 2412,
                'state_id' => 10,
                'name' => 'Brejo',
            ),
            
            array (
                'id' => 2413,
                'state_id' => 10,
                'name' => 'Brejo de Areia',
            ),
            
            array (
                'id' => 2415,
                'state_id' => 10,
                'name' => 'Buriti',
            ),
            
            array (
                'id' => 2416,
                'state_id' => 10,
                'name' => 'Buriti Bravo',
            ),
            
            array (
                'id' => 2418,
                'state_id' => 10,
                'name' => 'Buriticupu',
            ),
            
            array (
                'id' => 2419,
                'state_id' => 10,
                'name' => 'Buritirama',
            ),
            
            array (
                'id' => 2420,
                'state_id' => 10,
                'name' => 'Cachoeira Grande',
            ),
            
            array (
                'id' => 2421,
                'state_id' => 10,
                'name' => 'Cajapió',
            ),
            
            array (
                'id' => 2422,
                'state_id' => 10,
                'name' => 'Cajari',
            ),
            
            array (
                'id' => 2423,
                'state_id' => 10,
                'name' => 'Campestre do Maranhão',
            ),
            
            array (
                'id' => 2424,
                'state_id' => 10,
                'name' => 'Cândido Mendes',
            ),
            
            array (
                'id' => 2425,
                'state_id' => 10,
                'name' => 'Cantanhede',
            ),
            
            array (
                'id' => 2426,
                'state_id' => 10,
                'name' => 'Capinzal do Norte',
            ),
            
            array (
                'id' => 2428,
                'state_id' => 10,
                'name' => 'Carolina',
            ),
            
            array (
                'id' => 2429,
                'state_id' => 10,
                'name' => 'Carutapera',
            ),
            
            array (
                'id' => 2430,
                'state_id' => 10,
                'name' => 'Caxias',
            ),
            
            array (
                'id' => 2431,
                'state_id' => 10,
                'name' => 'Cedral',
            ),
            
            array (
                'id' => 2432,
                'state_id' => 10,
                'name' => 'Central do Maranhão',
            ),
            
            array (
                'id' => 2433,
                'state_id' => 10,
                'name' => 'Centro do Guilherme',
            ),
            
            array (
                'id' => 2434,
                'state_id' => 10,
                'name' => 'Centro Novo do Maranhão',
            ),
            
            array (
                'id' => 2435,
                'state_id' => 10,
                'name' => 'Chapadinha',
            ),
            
            array (
                'id' => 2436,
                'state_id' => 10,
                'name' => 'Cidelândia',
            ),
            
            array (
                'id' => 2437,
                'state_id' => 10,
                'name' => 'Codó',
            ),
            
            array (
                'id' => 2439,
                'state_id' => 10,
                'name' => 'Coelho Neto',
            ),
            
            array (
                'id' => 2440,
                'state_id' => 10,
                'name' => 'Colinas',
            ),
            
            array (
                'id' => 2441,
                'state_id' => 10,
                'name' => 'Conceição do Lago-Açu',
            ),
            
            array (
                'id' => 2442,
                'state_id' => 10,
                'name' => 'Coroatá',
            ),
            
            array (
                'id' => 2444,
                'state_id' => 10,
                'name' => 'Cururupu',
            ),
            
            array (
                'id' => 2447,
                'state_id' => 10,
                'name' => 'Davinópolis',
            ),
            
            array (
                'id' => 2448,
                'state_id' => 10,
                'name' => 'Dom Pedro',
            ),
            
            array (
                'id' => 2449,
                'state_id' => 10,
                'name' => 'Duque Bacelar',
            ),
            
            array (
                'id' => 2450,
                'state_id' => 10,
                'name' => 'Esperantinópolis',
            ),
            
            array (
                'id' => 2452,
                'state_id' => 10,
                'name' => 'Estreito',
            ),
            
            array (
                'id' => 2453,
                'state_id' => 10,
                'name' => 'Feira Nova do Maranhão',
            ),
            
            array (
                'id' => 2454,
                'state_id' => 10,
                'name' => 'Fernando Falcão',
            ),
            
            array (
                'id' => 2455,
                'state_id' => 10,
                'name' => 'Formosa da Serra Negra',
            ),
            
            array (
                'id' => 2456,
                'state_id' => 10,
                'name' => 'Fortaleza dos Nogueiras',
            ),
            
            array (
                'id' => 2457,
                'state_id' => 10,
                'name' => 'Fortuna',
            ),
            
            array (
                'id' => 2459,
                'state_id' => 10,
                'name' => 'Godofredo Viana',
            ),
            
            array (
                'id' => 2460,
                'state_id' => 10,
                'name' => 'Gonçalves Dias',
            ),
            
            array (
                'id' => 2461,
                'state_id' => 10,
                'name' => 'Governador Archer',
            ),
            
            array (
                'id' => 2462,
                'state_id' => 10,
                'name' => 'Governador Edson Lobão',
            ),
            
            array (
                'id' => 2463,
                'state_id' => 10,
                'name' => 'Governador Eugênio Barros',
            ),
            
            array (
                'id' => 2464,
                'state_id' => 10,
                'name' => 'Governador Luiz Rocha',
            ),
            
            array (
                'id' => 2465,
                'state_id' => 10,
                'name' => 'Governador Newton Bello',
            ),
            
            array (
                'id' => 2466,
                'state_id' => 10,
                'name' => 'Governador Nunes Freire',
            ),
            
            array (
                'id' => 2467,
                'state_id' => 10,
                'name' => 'Graça Aranha',
            ),
            
            array (
                'id' => 2468,
                'state_id' => 10,
                'name' => 'Grajaú',
            ),
            
            array (
                'id' => 2469,
                'state_id' => 10,
                'name' => 'Guimarães',
            ),
            
            array (
                'id' => 2470,
                'state_id' => 10,
                'name' => 'Humberto de Campos',
            ),
            
            array (
                'id' => 2472,
                'state_id' => 10,
                'name' => 'Icatu',
            ),
            
            array (
                'id' => 2473,
                'state_id' => 10,
                'name' => 'Igarapé do Meio',
            ),
            
            array (
                'id' => 2474,
                'state_id' => 10,
                'name' => 'Igarapé Grande',
            ),
            
            array (
                'id' => 2475,
                'state_id' => 10,
                'name' => 'Imperatriz',
            ),
            
            array (
                'id' => 2476,
                'state_id' => 10,
                'name' => 'Itaipava do Grajaú',
            ),
            
            array (
                'id' => 2478,
                'state_id' => 10,
                'name' => 'Itapecuru Mirim',
            ),
            
            array (
                'id' => 2480,
                'state_id' => 10,
                'name' => 'Itinga do Maranhão',
            ),
            
            array (
                'id' => 2481,
                'state_id' => 10,
                'name' => 'Jatobá',
            ),
            
            array (
                'id' => 2482,
                'state_id' => 10,
                'name' => 'Jenipapo dos Vieiras',
            ),
            
            array (
                'id' => 2483,
                'state_id' => 10,
                'name' => 'João Lisboa',
            ),
            
            array (
                'id' => 2484,
                'state_id' => 10,
                'name' => 'Joselândia',
            ),
            
            array (
                'id' => 2485,
                'state_id' => 10,
                'name' => 'Junco do Maranhão',
            ),
            
            array (
                'id' => 2486,
                'state_id' => 10,
                'name' => 'Lago da Pedra',
            ),
            
            array (
                'id' => 2487,
                'state_id' => 10,
                'name' => 'Lago do Junco',
            ),
            
            array (
                'id' => 2488,
                'state_id' => 10,
                'name' => 'Lago dos Rodrigues',
            ),
            
            array (
                'id' => 2489,
                'state_id' => 10,
                'name' => 'Lago Verde',
            ),
            
            array (
                'id' => 2490,
                'state_id' => 10,
                'name' => 'Lagoa do Mato',
            ),
            
            array (
                'id' => 2491,
                'state_id' => 10,
                'name' => 'Lagoa Grande do Maranhão',
            ),
            
            array (
                'id' => 2492,
                'state_id' => 10,
                'name' => 'Lajeado Novo',
            ),
            
            array (
                'id' => 2495,
                'state_id' => 10,
                'name' => 'Lima Campos',
            ),
            
            array (
                'id' => 2496,
                'state_id' => 10,
                'name' => 'Loreto',
            ),
            
            array (
                'id' => 2497,
                'state_id' => 10,
                'name' => 'Luís Domingues',
            ),
            
            array (
                'id' => 2498,
                'state_id' => 10,
                'name' => 'Magalhães de Almeida',
            ),
            
            array (
                'id' => 2500,
                'state_id' => 10,
                'name' => 'Maracaçumé',
            ),
            
            array (
                'id' => 2501,
                'state_id' => 10,
                'name' => 'Marajá do Sena',
            ),
            
            array (
                'id' => 2502,
                'state_id' => 10,
                'name' => 'Maranhãozinho',
            ),
            
            array (
                'id' => 2505,
                'state_id' => 10,
                'name' => 'Mata Roma',
            ),
            
            array (
                'id' => 2506,
                'state_id' => 10,
                'name' => 'Matinha',
            ),
            
            array (
                'id' => 2507,
                'state_id' => 10,
                'name' => 'Matões',
            ),
            
            array (
                'id' => 2508,
                'state_id' => 10,
                'name' => 'Matões do Norte',
            ),
            
            array (
                'id' => 2509,
                'state_id' => 10,
                'name' => 'Milagres do Maranhão',
            ),
            
            array (
                'id' => 2510,
                'state_id' => 10,
                'name' => 'Mirador',
            ),
            
            array (
                'id' => 2511,
                'state_id' => 10,
                'name' => 'Miranda do Norte',
            ),
            
            array (
                'id' => 2512,
                'state_id' => 10,
                'name' => 'Mirinzal',
            ),
            
            array (
                'id' => 2513,
                'state_id' => 10,
                'name' => 'Monção',
            ),
            
            array (
                'id' => 2514,
                'state_id' => 10,
                'name' => 'Montes Altos',
            ),
            
            array (
                'id' => 2515,
                'state_id' => 10,
                'name' => 'Morros',
            ),
            
            array (
                'id' => 2516,
                'state_id' => 10,
                'name' => 'Nina Rodrigues',
            ),
            
            array (
                'id' => 2517,
                'state_id' => 10,
                'name' => 'Nova Colinas',
            ),
            
            array (
                'id' => 2518,
                'state_id' => 10,
                'name' => 'Nova Iorque',
            ),
            
            array (
                'id' => 2519,
                'state_id' => 10,
                'name' => 'Nova Olinda do Maranhão',
            ),
            
            array (
                'id' => 2520,
                'state_id' => 10,
                'name' => 'Olho D\'Água das Cunhãs',
            ),
            
            array (
                'id' => 2521,
                'state_id' => 10,
                'name' => 'Olinda Nova do Maranhão',
            ),
            
            array (
                'id' => 2522,
                'state_id' => 10,
                'name' => 'Paço do Lumiar',
            ),
            
            array (
                'id' => 2523,
                'state_id' => 10,
                'name' => 'Palmeirândia',
            ),
            
            array (
                'id' => 2525,
                'state_id' => 10,
                'name' => 'Paraibano',
            ),
            
            array (
                'id' => 2526,
                'state_id' => 10,
                'name' => 'Parnarama',
            ),
            
            array (
                'id' => 2527,
                'state_id' => 10,
                'name' => 'Passagem Franca',
            ),
            
            array (
                'id' => 2528,
                'state_id' => 10,
                'name' => 'Pastos Bons',
            ),
            
            array (
                'id' => 2529,
                'state_id' => 10,
                'name' => 'Paulino Neves',
            ),
            
            array (
                'id' => 2530,
                'state_id' => 10,
                'name' => 'Paulo Ramos',
            ),
            
            array (
                'id' => 2531,
                'state_id' => 10,
                'name' => 'Pedreiras',
            ),
            
            array (
                'id' => 2532,
                'state_id' => 10,
                'name' => 'Pedro do Rosário',
            ),
            
            array (
                'id' => 2533,
                'state_id' => 10,
                'name' => 'Penalva',
            ),
            
            array (
                'id' => 2534,
                'state_id' => 10,
                'name' => 'Peri Mirim',
            ),
            
            array (
                'id' => 2535,
                'state_id' => 10,
                'name' => 'Peritoró',
            ),
            
            array (
                'id' => 2537,
                'state_id' => 10,
                'name' => 'Pindaré Mirim',
            ),
            
            array (
                'id' => 2538,
                'state_id' => 10,
                'name' => 'Pinheiro',
            ),
            
            array (
                'id' => 2539,
                'state_id' => 10,
                'name' => 'Pio XII',
            ),
            
            array (
                'id' => 2540,
                'state_id' => 10,
                'name' => 'Pirapemas',
            ),
            
            array (
                'id' => 2541,
                'state_id' => 10,
                'name' => 'Poção de Pedras',
            ),
            
            array (
                'id' => 2543,
                'state_id' => 10,
                'name' => 'Porto Franco',
            ),
            
            array (
                'id' => 2544,
                'state_id' => 10,
                'name' => 'Porto Rico do Maranhão',
            ),
            
            array (
                'id' => 2545,
                'state_id' => 10,
                'name' => 'Presidente Dutra',
            ),
            
            array (
                'id' => 2546,
                'state_id' => 10,
                'name' => 'Presidente Juscelino',
            ),
            
            array (
                'id' => 2547,
                'state_id' => 10,
                'name' => 'Presidente Médici',
            ),
            
            array (
                'id' => 2548,
                'state_id' => 10,
                'name' => 'Presidente Sarney',
            ),
            
            array (
                'id' => 2549,
                'state_id' => 10,
                'name' => 'Presidente Vargas',
            ),
            
            array (
                'id' => 2550,
                'state_id' => 10,
                'name' => 'Primeira Cruz',
            ),
            
            array (
                'id' => 2551,
                'state_id' => 10,
                'name' => 'Raposa',
            ),
            
            array (
                'id' => 2553,
                'state_id' => 10,
                'name' => 'Riachão',
            ),
            
            array (
                'id' => 2554,
                'state_id' => 10,
                'name' => 'Ribamar Fiquene',
            ),
            
            array (
                'id' => 2558,
                'state_id' => 10,
                'name' => 'Rosário',
            ),
            
            array (
                'id' => 2559,
                'state_id' => 10,
                'name' => 'Sambaíba',
            ),
            
            array (
                'id' => 2560,
                'state_id' => 10,
                'name' => 'Santa Filomena do Maranhão',
            ),
            
            array (
                'id' => 2561,
                'state_id' => 10,
                'name' => 'Santa Helena',
            ),
            
            array (
                'id' => 2562,
                'state_id' => 10,
                'name' => 'Santa Inês',
            ),
            
            array (
                'id' => 2563,
                'state_id' => 10,
                'name' => 'Santa Luzia',
            ),
            
            array (
                'id' => 2564,
                'state_id' => 10,
                'name' => 'Santa Luzia do Paruá',
            ),
            
            array (
                'id' => 2565,
                'state_id' => 10,
                'name' => 'Santa Quitéria do Maranhão',
            ),
            
            array (
                'id' => 2566,
                'state_id' => 10,
                'name' => 'Santa Rita',
            ),
            
            array (
                'id' => 2567,
                'state_id' => 10,
                'name' => 'Santana do Maranhão',
            ),
            
            array (
                'id' => 2568,
                'state_id' => 10,
                'name' => 'Santo Amaro',
            ),
            
            array (
                'id' => 2569,
                'state_id' => 10,
                'name' => 'Santo Antônio dos Lopes',
            ),
            
            array (
                'id' => 2570,
                'state_id' => 10,
                'name' => 'São Benedito do Rio Preto',
            ),
            
            array (
                'id' => 2571,
                'state_id' => 10,
                'name' => 'São Bento',
            ),
            
            array (
                'id' => 2572,
                'state_id' => 10,
                'name' => 'São Bernardo',
            ),
            
            array (
                'id' => 2573,
                'state_id' => 10,
                'name' => 'São Domingos do Azeitão',
            ),
            
            array (
                'id' => 2574,
                'state_id' => 10,
                'name' => 'São Domingos do Maranhão',
            ),
            
            array (
                'id' => 2575,
                'state_id' => 10,
                'name' => 'São Félix de Balsas',
            ),
            
            array (
                'id' => 2576,
                'state_id' => 10,
                'name' => 'São Francisco do Brejão',
            ),
            
            array (
                'id' => 2577,
                'state_id' => 10,
                'name' => 'São Francisco do Maranhão',
            ),
            
            array (
                'id' => 2578,
                'state_id' => 10,
                'name' => 'São João Batista',
            ),
            
            array (
                'id' => 2580,
                'state_id' => 10,
                'name' => 'São João do Carú',
            ),
            
            array (
                'id' => 2581,
                'state_id' => 10,
                'name' => 'São João do Paraíso',
            ),
            
            array (
                'id' => 2582,
                'state_id' => 10,
                'name' => 'São João do Sóter',
            ),
            
            array (
                'id' => 2583,
                'state_id' => 10,
                'name' => 'São João dos Patos',
            ),
            
            array (
                'id' => 2585,
                'state_id' => 10,
                'name' => 'São José de Ribamar',
            ),
            
            array (
                'id' => 2586,
                'state_id' => 10,
                'name' => 'São José dos Basílios',
            ),
            
            array (
                'id' => 2587,
                'state_id' => 10,
                'name' => 'São Luís',
            ),
            
            array (
                'id' => 2588,
                'state_id' => 10,
                'name' => 'São Luís Gonzaga do Maranhão',
            ),
            
            array (
                'id' => 2589,
                'state_id' => 10,
                'name' => 'São Mateus do Maranhão',
            ),
            
            array (
                'id' => 2590,
                'state_id' => 10,
                'name' => 'São Pedro da Água Branca',
            ),
            
            array (
                'id' => 2591,
                'state_id' => 10,
                'name' => 'São Pedro dos Crentes',
            ),
            
            array (
                'id' => 2592,
                'state_id' => 10,
                'name' => 'São Raimundo das Mangabeiras',
            ),
            
            array (
                'id' => 2594,
                'state_id' => 10,
                'name' => 'São Raimundo do Doca Bezerra',
            ),
            
            array (
                'id' => 2595,
                'state_id' => 10,
                'name' => 'São Roberto',
            ),
            
            array (
                'id' => 2596,
                'state_id' => 10,
                'name' => 'São Vicente Ferrer',
            ),
            
            array (
                'id' => 2597,
                'state_id' => 10,
                'name' => 'Satubinha',
            ),
            
            array (
                'id' => 2598,
                'state_id' => 10,
                'name' => 'Senador Alexandre Costa',
            ),
            
            array (
                'id' => 2599,
                'state_id' => 10,
                'name' => 'Senador La Roque',
            ),
            
            array (
                'id' => 2600,
                'state_id' => 10,
                'name' => 'Serrano do Maranhão',
            ),
            
            array (
                'id' => 2601,
                'state_id' => 10,
                'name' => 'Sítio Novo',
            ),
            
            array (
                'id' => 2602,
                'state_id' => 10,
                'name' => 'Sucupira do Norte',
            ),
            
            array (
                'id' => 2603,
                'state_id' => 10,
                'name' => 'Sucupira do Riachão',
            ),
            
            array (
                'id' => 2604,
                'state_id' => 10,
                'name' => 'Tasso Fragoso',
            ),
            
            array (
                'id' => 2605,
                'state_id' => 10,
                'name' => 'Timbiras',
            ),
            
            array (
                'id' => 2606,
                'state_id' => 10,
                'name' => 'Timon',
            ),
            
            array (
                'id' => 2607,
                'state_id' => 10,
                'name' => 'Trizidela do Vale',
            ),
            
            array (
                'id' => 2608,
                'state_id' => 10,
                'name' => 'Tufilândia',
            ),
            
            array (
                'id' => 2609,
                'state_id' => 10,
                'name' => 'Tuntum',
            ),
            
            array (
                'id' => 2610,
                'state_id' => 10,
                'name' => 'Turiaçu',
            ),
            
            array (
                'id' => 2611,
                'state_id' => 10,
                'name' => 'Turilândia',
            ),
            
            array (
                'id' => 2612,
                'state_id' => 10,
                'name' => 'Tutóia',
            ),
            
            array (
                'id' => 2613,
                'state_id' => 10,
                'name' => 'Urbano Santos',
            ),
            
            array (
                'id' => 2614,
                'state_id' => 10,
                'name' => 'Vargem Grande',
            ),
            
            array (
                'id' => 2615,
                'state_id' => 10,
                'name' => 'Viana',
            ),
            
            array (
                'id' => 2616,
                'state_id' => 10,
                'name' => 'Vila Nova dos Martírios',
            ),
            
            array (
                'id' => 2617,
                'state_id' => 10,
                'name' => 'Vitória do Mearim',
            ),
            
            array (
                'id' => 2618,
                'state_id' => 10,
                'name' => 'Vitorino Freire',
            ),
            
            array (
                'id' => 2619,
                'state_id' => 10,
                'name' => 'Zé Doca',
            ),
            
            array (
                'id' => 2620,
                'state_id' => 11,
                'name' => 'Abadia dos Dourados',
            ),
            
            array (
                'id' => 2621,
                'state_id' => 11,
                'name' => 'Abaeté',
            ),
            
            array (
                'id' => 2624,
                'state_id' => 11,
                'name' => 'Abre Campo',
            ),
            
            array (
                'id' => 2626,
                'state_id' => 11,
                'name' => 'Acaiaca',
            ),
            
            array (
                'id' => 2627,
                'state_id' => 11,
                'name' => 'Açucena',
            ),
            
            array (
                'id' => 2630,
                'state_id' => 11,
                'name' => 'Água Boa',
            ),
            
            array (
                'id' => 2632,
                'state_id' => 11,
                'name' => 'Água Comprida',
            ),
            
            array (
                'id' => 2634,
                'state_id' => 11,
                'name' => 'Aguanil',
            ),
            
            array (
                'id' => 2638,
                'state_id' => 11,
                'name' => 'Águas Formosas',
            ),
            
            array (
                'id' => 2639,
                'state_id' => 11,
                'name' => 'Águas Vermelhas',
            ),
            
            array (
                'id' => 2640,
                'state_id' => 11,
                'name' => 'Aimorés',
            ),
            
            array (
                'id' => 2641,
                'state_id' => 11,
                'name' => 'Aiuruoca',
            ),
            
            array (
                'id' => 2642,
                'state_id' => 11,
                'name' => 'Alagoa',
            ),
            
            array (
                'id' => 2643,
                'state_id' => 11,
                'name' => 'Albertina',
            ),
            
            array (
                'id' => 2649,
                'state_id' => 11,
                'name' => 'Além Paraíba',
            ),
            
            array (
                'id' => 2651,
                'state_id' => 11,
                'name' => 'Alfenas',
            ),
            
            array (
                'id' => 2652,
                'state_id' => 11,
                'name' => 'Alfredo Vasconcelos',
            ),
            
            array (
                'id' => 2654,
                'state_id' => 11,
                'name' => 'Almenara',
            ),
            
            array (
                'id' => 2655,
                'state_id' => 11,
                'name' => 'Alpercata',
            ),
            
            array (
                'id' => 2656,
                'state_id' => 11,
                'name' => 'Alpinópolis',
            ),
            
            array (
                'id' => 2657,
                'state_id' => 11,
                'name' => 'Alterosa',
            ),
            
            array (
                'id' => 2658,
                'state_id' => 11,
                'name' => 'Alto Caparaó',
            ),
            
            array (
                'id' => 2661,
                'state_id' => 11,
                'name' => 'Alto Jequitibá',
            ),
            
            array (
                'id' => 2663,
                'state_id' => 11,
                'name' => 'Alto Rio Doce',
            ),
            
            array (
                'id' => 2666,
                'state_id' => 11,
                'name' => 'Alvarenga',
            ),
            
            array (
                'id' => 2667,
                'state_id' => 11,
                'name' => 'Alvinópolis',
            ),
            
            array (
                'id' => 2669,
                'state_id' => 11,
                'name' => 'Alvorada de Minas',
            ),
            
            array (
                'id' => 2673,
                'state_id' => 11,
                'name' => 'Amparo da Serra',
            ),
            
            array (
                'id' => 2675,
                'state_id' => 11,
                'name' => 'Andradas',
            ),
            
            array (
                'id' => 2676,
                'state_id' => 11,
                'name' => 'Andrelândia',
            ),
            
            array (
                'id' => 2679,
                'state_id' => 11,
                'name' => 'Angelândia',
            ),
            
            array (
                'id' => 2683,
                'state_id' => 11,
                'name' => 'Antônio Carlos',
            ),
            
            array (
                'id' => 2684,
                'state_id' => 11,
                'name' => 'Antônio Dias',
            ),
            
            array (
                'id' => 2688,
                'state_id' => 11,
                'name' => 'Antônio Prado de Minas',
            ),
            
            array (
                'id' => 2691,
                'state_id' => 11,
                'name' => 'Araçaí',
            ),
            
            array (
                'id' => 2693,
                'state_id' => 11,
                'name' => 'Aracitaba',
            ),
            
            array (
                'id' => 2694,
                'state_id' => 11,
                'name' => 'Araçuaí',
            ),
            
            array (
                'id' => 2695,
                'state_id' => 11,
                'name' => 'Araguari',
            ),
            
            array (
                'id' => 2698,
                'state_id' => 11,
                'name' => 'Arantina',
            ),
            
            array (
                'id' => 2699,
                'state_id' => 11,
                'name' => 'Araponga',
            ),
            
            array (
                'id' => 2700,
                'state_id' => 11,
                'name' => 'Araporã',
            ),
            
            array (
                'id' => 2701,
                'state_id' => 11,
                'name' => 'Arapuá',
            ),
            
            array (
                'id' => 2702,
                'state_id' => 11,
                'name' => 'Araújos',
            ),
            
            array (
                'id' => 2704,
                'state_id' => 11,
                'name' => 'Araxá',
            ),
            
            array (
                'id' => 2706,
                'state_id' => 11,
                'name' => 'Arceburgo',
            ),
            
            array (
                'id' => 2707,
                'state_id' => 11,
                'name' => 'Arcos',
            ),
            
            array (
                'id' => 2708,
                'state_id' => 11,
                'name' => 'Areado',
            ),
            
            array (
                'id' => 2710,
                'state_id' => 11,
                'name' => 'Argirita',
            ),
            
            array (
                'id' => 2711,
                'state_id' => 11,
                'name' => 'Aricanduva',
            ),
            
            array (
                'id' => 2712,
                'state_id' => 11,
                'name' => 'Arinos',
            ),
            
            array (
                'id' => 2716,
                'state_id' => 11,
                'name' => 'Astolfo Dutra',
            ),
            
            array (
                'id' => 2717,
                'state_id' => 11,
                'name' => 'Ataléia',
            ),
            
            array (
                'id' => 2718,
                'state_id' => 11,
                'name' => 'Augusto de Lima',
            ),
            
            array (
                'id' => 2723,
                'state_id' => 11,
                'name' => 'Baependi',
            ),
            
            array (
                'id' => 2728,
                'state_id' => 11,
                'name' => 'Baldim',
            ),
            
            array (
                'id' => 2729,
                'state_id' => 11,
                'name' => 'Bambuí',
            ),
            
            array (
                'id' => 2730,
                'state_id' => 11,
                'name' => 'Bandeira',
            ),
            
            array (
                'id' => 2731,
                'state_id' => 11,
                'name' => 'Bandeira do Sul',
            ),
            
            array (
                'id' => 2733,
                'state_id' => 11,
                'name' => 'Barão de Cocais',
            ),
            
            array (
                'id' => 2734,
                'state_id' => 11,
                'name' => 'Barão de Monte Alto',
            ),
            
            array (
                'id' => 2735,
                'state_id' => 11,
                'name' => 'Barbacena',
            ),
            
            array (
                'id' => 2741,
                'state_id' => 11,
                'name' => 'Barra Longa',
            ),
            
            array (
                'id' => 2749,
                'state_id' => 11,
                'name' => 'Barroso',
            ),
            
            array (
                'id' => 2751,
                'state_id' => 11,
                'name' => 'Bela Vista de Minas',
            ),
            
            array (
                'id' => 2753,
                'state_id' => 11,
                'name' => 'Belmiro Braga',
            ),
            
            array (
                'id' => 2754,
                'state_id' => 11,
                'name' => 'Belo Horizonte',
            ),
            
            array (
                'id' => 2755,
                'state_id' => 11,
                'name' => 'Belo Oriente',
            ),
            
            array (
                'id' => 2757,
                'state_id' => 11,
                'name' => 'Belo Vale',
            ),
            
            array (
                'id' => 2759,
                'state_id' => 11,
                'name' => 'Berilo',
            ),
            
            array (
                'id' => 2760,
                'state_id' => 11,
                'name' => 'Berizal',
            ),
            
            array (
                'id' => 2761,
                'state_id' => 11,
                'name' => 'Bertópolis',
            ),
            
            array (
                'id' => 2762,
                'state_id' => 11,
                'name' => 'Betim',
            ),
            
            array (
                'id' => 2763,
                'state_id' => 11,
                'name' => 'Bias Fortes',
            ),
            
            array (
                'id' => 2764,
                'state_id' => 11,
                'name' => 'Bicas',
            ),
            
            array (
                'id' => 2766,
                'state_id' => 11,
                'name' => 'Biquinhas',
            ),
            
            array (
                'id' => 2768,
                'state_id' => 11,
                'name' => 'Boa Esperança',
            ),
            
            array (
                'id' => 2772,
                'state_id' => 11,
                'name' => 'Bocaina de Minas',
            ),
            
            array (
                'id' => 2773,
                'state_id' => 11,
                'name' => 'Bocaiúva',
            ),
            
            array (
                'id' => 2774,
                'state_id' => 11,
                'name' => 'Bom Despacho',
            ),
            
            array (
                'id' => 2775,
                'state_id' => 11,
                'name' => 'Bom Jardim de Minas',
            ),
            
            array (
                'id' => 2777,
                'state_id' => 11,
                'name' => 'Bom Jesus da Penha',
            ),
            
            array (
                'id' => 2779,
                'state_id' => 11,
                'name' => 'Bom Jesus do Amparo',
            ),
            
            array (
                'id' => 2781,
                'state_id' => 11,
                'name' => 'Bom Jesus do Galho',
            ),
            
            array (
                'id' => 2784,
                'state_id' => 11,
                'name' => 'Bom Repouso',
            ),
            
            array (
                'id' => 2786,
                'state_id' => 11,
                'name' => 'Bom Sucesso',
            ),
            
            array (
                'id' => 2789,
                'state_id' => 11,
                'name' => 'Bonfim',
            ),
            
            array (
                'id' => 2790,
                'state_id' => 11,
                'name' => 'Bonfinópolis de Minas',
            ),
            
            array (
                'id' => 2791,
                'state_id' => 11,
                'name' => 'Bonito de Minas',
            ),
            
            array (
                'id' => 2793,
                'state_id' => 11,
                'name' => 'Borda da Mata',
            ),
            
            array (
                'id' => 2794,
                'state_id' => 11,
                'name' => 'Botelhos',
            ),
            
            array (
                'id' => 2795,
                'state_id' => 11,
                'name' => 'Botumirim',
            ),
            
            array (
                'id' => 2796,
                'state_id' => 11,
                'name' => 'Brás Pires',
            ),
            
            array (
                'id' => 2797,
                'state_id' => 11,
                'name' => 'Brasilândia de Minas',
            ),
            
            array (
                'id' => 2798,
                'state_id' => 11,
                'name' => 'Brasília de Minas',
            ),
            
            array (
                'id' => 2799,
                'state_id' => 11,
                'name' => 'Brasópolis',
            ),
            
            array (
                'id' => 2800,
                'state_id' => 11,
                'name' => 'Braúnas',
            ),
            
            array (
                'id' => 2805,
                'state_id' => 11,
                'name' => 'Brumadinho',
            ),
            
            array (
                'id' => 2809,
                'state_id' => 11,
                'name' => 'Bueno Brandão',
            ),
            
            array (
                'id' => 2810,
                'state_id' => 11,
                'name' => 'Buenópolis',
            ),
            
            array (
                'id' => 2811,
                'state_id' => 11,
                'name' => 'Bugre',
            ),
            
            array (
                'id' => 2812,
                'state_id' => 11,
                'name' => 'Buritis',
            ),
            
            array (
                'id' => 2813,
                'state_id' => 11,
                'name' => 'Buritizeiro',
            ),
            
            array (
                'id' => 2815,
                'state_id' => 11,
                'name' => 'Cabeceira Grande',
            ),
            
            array (
                'id' => 2816,
                'state_id' => 11,
                'name' => 'Cabo Verde',
            ),
            
            array (
                'id' => 2821,
                'state_id' => 11,
                'name' => 'Cachoeira da Prata',
            ),
            
            array (
                'id' => 2822,
                'state_id' => 11,
                'name' => 'Cachoeira de Minas',
            ),
            
            array (
                'id' => 2823,
                'state_id' => 11,
                'name' => 'Cachoeira de Pajeú',
            ),
            
            array (
                'id' => 2830,
                'state_id' => 11,
                'name' => 'Cachoeira Dourada',
            ),
            
            array (
                'id' => 2833,
                'state_id' => 11,
                'name' => 'Caetanópolis',
            ),
            
            array (
                'id' => 2834,
                'state_id' => 11,
                'name' => 'Caeté',
            ),
            
            array (
                'id' => 2836,
                'state_id' => 11,
                'name' => 'Caiana',
            ),
            
            array (
                'id' => 2838,
                'state_id' => 11,
                'name' => 'Cajuri',
            ),
            
            array (
                'id' => 2839,
                'state_id' => 11,
                'name' => 'Caldas',
            ),
            
            array (
                'id' => 2841,
                'state_id' => 11,
                'name' => 'Camacho',
            ),
            
            array (
                'id' => 2842,
                'state_id' => 11,
                'name' => 'Camanducaia',
            ),
            
            array (
                'id' => 2844,
                'state_id' => 11,
                'name' => 'Cambuí',
            ),
            
            array (
                'id' => 2845,
                'state_id' => 11,
                'name' => 'Cambuquira',
            ),
            
            array (
                'id' => 2846,
                'state_id' => 11,
                'name' => 'Campanário',
            ),
            
            array (
                'id' => 2847,
                'state_id' => 11,
                'name' => 'Campanha',
            ),
            
            array (
                'id' => 2848,
                'state_id' => 11,
                'name' => 'Campestre',
            ),
            
            array (
                'id' => 2850,
                'state_id' => 11,
                'name' => 'Campina Verde',
            ),
            
            array (
                'id' => 2853,
                'state_id' => 11,
                'name' => 'Campo Azul',
            ),
            
            array (
                'id' => 2854,
                'state_id' => 11,
                'name' => 'Campo Belo',
            ),
            
            array (
                'id' => 2855,
                'state_id' => 11,
                'name' => 'Campo do Meio',
            ),
            
            array (
                'id' => 2856,
                'state_id' => 11,
                'name' => 'Campo Florido',
            ),
            
            array (
                'id' => 2859,
                'state_id' => 11,
                'name' => 'Campos Altos',
            ),
            
            array (
                'id' => 2860,
                'state_id' => 11,
                'name' => 'Campos Gerais',
            ),
            
            array (
                'id' => 2861,
                'state_id' => 11,
                'name' => 'Cana Verde',
            ),
            
            array (
                'id' => 2862,
                'state_id' => 11,
                'name' => 'Canaã',
            ),
            
            array (
                'id' => 2865,
                'state_id' => 11,
                'name' => 'Canápolis',
            ),
            
            array (
                'id' => 2867,
                'state_id' => 11,
                'name' => 'Candeias',
            ),
            
            array (
                'id' => 2869,
                'state_id' => 11,
                'name' => 'Cantagalo',
            ),
            
            array (
                'id' => 2870,
                'state_id' => 11,
                'name' => 'Caparaó',
            ),
            
            array (
                'id' => 2871,
                'state_id' => 11,
                'name' => 'Capela Nova',
            ),
            
            array (
                'id' => 2872,
                'state_id' => 11,
                'name' => 'Capelinha',
            ),
            
            array (
                'id' => 2873,
                'state_id' => 11,
                'name' => 'Capetinga',
            ),
            
            array (
                'id' => 2874,
                'state_id' => 11,
                'name' => 'Capim Branco',
            ),
            
            array (
                'id' => 2875,
                'state_id' => 11,
                'name' => 'Capinópolis',
            ),
            
            array (
                'id' => 2877,
                'state_id' => 11,
                'name' => 'Capitão Andrade',
            ),
            
            array (
                'id' => 2878,
                'state_id' => 11,
                'name' => 'Capitão Enéas',
            ),
            
            array (
                'id' => 2879,
                'state_id' => 11,
                'name' => 'Capitólio',
            ),
            
            array (
                'id' => 2880,
                'state_id' => 11,
                'name' => 'Caputira',
            ),
            
            array (
                'id' => 2881,
                'state_id' => 11,
                'name' => 'Caraí',
            ),
            
            array (
                'id' => 2882,
                'state_id' => 11,
                'name' => 'Caranaíba',
            ),
            
            array (
                'id' => 2883,
                'state_id' => 11,
                'name' => 'Carandaí',
            ),
            
            array (
                'id' => 2884,
                'state_id' => 11,
                'name' => 'Carangola',
            ),
            
            array (
                'id' => 2885,
                'state_id' => 11,
                'name' => 'Caratinga',
            ),
            
            array (
                'id' => 2886,
                'state_id' => 11,
                'name' => 'Carbonita',
            ),
            
            array (
                'id' => 2888,
                'state_id' => 11,
                'name' => 'Careaçu',
            ),
            
            array (
                'id' => 2891,
                'state_id' => 11,
                'name' => 'Carlos Chagas',
            ),
            
            array (
                'id' => 2892,
                'state_id' => 11,
                'name' => 'Carmésia',
            ),
            
            array (
                'id' => 2893,
                'state_id' => 11,
                'name' => 'Carmo da Cachoeira',
            ),
            
            array (
                'id' => 2894,
                'state_id' => 11,
                'name' => 'Carmo da Mata',
            ),
            
            array (
                'id' => 2895,
                'state_id' => 11,
                'name' => 'Carmo de Minas',
            ),
            
            array (
                'id' => 2896,
                'state_id' => 11,
                'name' => 'Carmo do Cajuru',
            ),
            
            array (
                'id' => 2897,
                'state_id' => 11,
                'name' => 'Carmo do Paranaíba',
            ),
            
            array (
                'id' => 2898,
                'state_id' => 11,
                'name' => 'Carmo do Rio Claro',
            ),
            
            array (
                'id' => 2899,
                'state_id' => 11,
                'name' => 'Carmópolis de Minas',
            ),
            
            array (
                'id' => 2900,
                'state_id' => 11,
                'name' => 'Carneirinho',
            ),
            
            array (
                'id' => 2901,
                'state_id' => 11,
                'name' => 'Carrancas',
            ),
            
            array (
                'id' => 2903,
                'state_id' => 11,
                'name' => 'Carvalhópolis',
            ),
            
            array (
                'id' => 2904,
                'state_id' => 11,
                'name' => 'Carvalhos',
            ),
            
            array (
                'id' => 2905,
                'state_id' => 11,
                'name' => 'Casa Grande',
            ),
            
            array (
                'id' => 2906,
                'state_id' => 11,
                'name' => 'Cascalho Rico',
            ),
            
            array (
                'id' => 2907,
                'state_id' => 11,
                'name' => 'Cássia',
            ),
            
            array (
                'id' => 2909,
                'state_id' => 11,
                'name' => 'Cataguases',
            ),
            
            array (
                'id' => 2911,
                'state_id' => 11,
                'name' => 'Catas Altas',
            ),
            
            array (
                'id' => 2912,
                'state_id' => 11,
                'name' => 'Catas Altas da Noruega',
            ),
            
            array (
                'id' => 2914,
                'state_id' => 11,
                'name' => 'Catuji',
            ),
            
            array (
                'id' => 2917,
                'state_id' => 11,
                'name' => 'Catuti',
            ),
            
            array (
                'id' => 2918,
                'state_id' => 11,
                'name' => 'Caxambu',
            ),
            
            array (
                'id' => 2919,
                'state_id' => 11,
                'name' => 'Cedro do Abaeté',
            ),
            
            array (
                'id' => 2921,
                'state_id' => 11,
                'name' => 'Central de Minas',
            ),
            
            array (
                'id' => 2923,
                'state_id' => 11,
                'name' => 'Centralina',
            ),
            
            array (
                'id' => 2925,
                'state_id' => 11,
                'name' => 'Chácara',
            ),
            
            array (
                'id' => 2926,
                'state_id' => 11,
                'name' => 'Chalé',
            ),
            
            array (
                'id' => 2928,
                'state_id' => 11,
                'name' => 'Chapada do Norte',
            ),
            
            array (
                'id' => 2929,
                'state_id' => 11,
                'name' => 'Chapada Gaúcha',
            ),
            
            array (
                'id' => 2931,
                'state_id' => 11,
                'name' => 'Chiador',
            ),
            
            array (
                'id' => 2934,
                'state_id' => 11,
                'name' => 'Cipotânea',
            ),
            
            array (
                'id' => 2937,
                'state_id' => 11,
                'name' => 'Claraval',
            ),
            
            array (
                'id' => 2939,
                'state_id' => 11,
                'name' => 'Claro dos Poções',
            ),
            
            array (
                'id' => 2940,
                'state_id' => 11,
                'name' => 'Cláudio',
            ),
            
            array (
                'id' => 2944,
                'state_id' => 11,
                'name' => 'Coimbra',
            ),
            
            array (
                'id' => 2945,
                'state_id' => 11,
                'name' => 'Coluna',
            ),
            
            array (
                'id' => 2946,
                'state_id' => 11,
                'name' => 'Comendador Gomes',
            ),
            
            array (
                'id' => 2947,
                'state_id' => 11,
                'name' => 'Comercinho',
            ),
            
            array (
                'id' => 2948,
                'state_id' => 11,
                'name' => 'Conceição da Aparecida',
            ),
            
            array (
                'id' => 2949,
                'state_id' => 11,
                'name' => 'Conceição da Barra de Minas',
            ),
            
            array (
                'id' => 2953,
                'state_id' => 11,
                'name' => 'Conceição das Alagoas',
            ),
            
            array (
                'id' => 2954,
                'state_id' => 11,
                'name' => 'Conceição das Pedras',
            ),
            
            array (
                'id' => 2955,
                'state_id' => 11,
                'name' => 'Conceição de Ipanema',
            ),
            
            array (
                'id' => 2962,
                'state_id' => 11,
                'name' => 'Conceição do Mato Dentro',
            ),
            
            array (
                'id' => 2963,
                'state_id' => 11,
                'name' => 'Conceição do Pará',
            ),
            
            array (
                'id' => 2965,
                'state_id' => 11,
                'name' => 'Conceição do Rio Verde',
            ),
            
            array (
                'id' => 2966,
                'state_id' => 11,
                'name' => 'Conceição dos Ouros',
            ),
            
            array (
                'id' => 2970,
                'state_id' => 11,
                'name' => 'Cônego Marinho',
            ),
            
            array (
                'id' => 2971,
                'state_id' => 11,
                'name' => 'Confins',
            ),
            
            array (
                'id' => 2972,
                'state_id' => 11,
                'name' => 'Congonhal',
            ),
            
            array (
                'id' => 2973,
                'state_id' => 11,
                'name' => 'Congonhas',
            ),
            
            array (
                'id' => 2974,
                'state_id' => 11,
                'name' => 'Congonhas do Norte',
            ),
            
            array (
                'id' => 2975,
                'state_id' => 11,
                'name' => 'Conquista',
            ),
            
            array (
                'id' => 2976,
                'state_id' => 11,
                'name' => 'Conselheiro Lafaiete',
            ),
            
            array (
                'id' => 2978,
                'state_id' => 11,
                'name' => 'Conselheiro Pena',
            ),
            
            array (
                'id' => 2979,
                'state_id' => 11,
                'name' => 'Consolação',
            ),
            
            array (
                'id' => 2980,
                'state_id' => 11,
                'name' => 'Contagem',
            ),
            
            array (
                'id' => 2983,
                'state_id' => 11,
                'name' => 'Coqueiral',
            ),
            
            array (
                'id' => 2984,
                'state_id' => 11,
                'name' => 'Coração de Jesus',
            ),
            
            array (
                'id' => 2985,
                'state_id' => 11,
                'name' => 'Cordisburgo',
            ),
            
            array (
                'id' => 2986,
                'state_id' => 11,
                'name' => 'Cordislândia',
            ),
            
            array (
                'id' => 2987,
                'state_id' => 11,
                'name' => 'Corinto',
            ),
            
            array (
                'id' => 2988,
                'state_id' => 11,
                'name' => 'Coroaci',
            ),
            
            array (
                'id' => 2989,
                'state_id' => 11,
                'name' => 'Coromandel',
            ),
            
            array (
                'id' => 2990,
                'state_id' => 11,
                'name' => 'Coronel Fabriciano',
            ),
            
            array (
                'id' => 2991,
                'state_id' => 11,
                'name' => 'Coronel Murta',
            ),
            
            array (
                'id' => 2992,
                'state_id' => 11,
                'name' => 'Coronel Pacheco',
            ),
            
            array (
                'id' => 2993,
                'state_id' => 11,
                'name' => 'Coronel Xavier Chaves',
            ),
            
            array (
                'id' => 2994,
                'state_id' => 11,
                'name' => 'Córrego Danta',
            ),
            
            array (
                'id' => 2996,
                'state_id' => 11,
                'name' => 'Córrego do Bom Jesus',
            ),
            
            array (
                'id' => 2998,
                'state_id' => 11,
                'name' => 'Córrego Fundo',
            ),
            
            array (
                'id' => 2999,
                'state_id' => 11,
                'name' => 'Córrego Novo',
            ),
            
            array (
                'id' => 3006,
                'state_id' => 11,
                'name' => 'Couto de Magalhães de Minas',
            ),
            
            array (
                'id' => 3008,
                'state_id' => 11,
                'name' => 'Crisólita',
            ),
            
            array (
                'id' => 3010,
                'state_id' => 11,
                'name' => 'Cristais',
            ),
            
            array (
                'id' => 3011,
                'state_id' => 11,
                'name' => 'Cristália',
            ),
            
            array (
                'id' => 3012,
                'state_id' => 11,
                'name' => 'Cristiano Otoni',
            ),
            
            array (
                'id' => 3013,
                'state_id' => 11,
                'name' => 'Cristina',
            ),
            
            array (
                'id' => 3014,
                'state_id' => 11,
                'name' => 'Crucilândia',
            ),
            
            array (
                'id' => 3015,
                'state_id' => 11,
                'name' => 'Cruzeiro da Fortaleza',
            ),
            
            array (
                'id' => 3017,
                'state_id' => 11,
                'name' => 'Cruzília',
            ),
            
            array (
                'id' => 3020,
                'state_id' => 11,
                'name' => 'Cuparaque',
            ),
            
            array (
                'id' => 3022,
                'state_id' => 11,
                'name' => 'Curral de Dentro',
            ),
            
            array (
                'id' => 3023,
                'state_id' => 11,
                'name' => 'Curvelo',
            ),
            
            array (
                'id' => 3024,
                'state_id' => 11,
                'name' => 'Datas',
            ),
            
            array (
                'id' => 3025,
                'state_id' => 11,
                'name' => 'Delfim Moreira',
            ),
            
            array (
                'id' => 3026,
                'state_id' => 11,
                'name' => 'Delfinópolis',
            ),
            
            array (
                'id' => 3027,
                'state_id' => 11,
                'name' => 'Delta',
            ),
            
            array (
                'id' => 3030,
                'state_id' => 11,
                'name' => 'Descoberto',
            ),
            
            array (
                'id' => 3033,
                'state_id' => 11,
                'name' => 'Desterro de Entre Rios',
            ),
            
            array (
                'id' => 3034,
                'state_id' => 11,
                'name' => 'DesterroZZZn do Melo',
            ),
            
            array (
                'id' => 3036,
                'state_id' => 11,
                'name' => 'Diamantina',
            ),
            
            array (
                'id' => 3039,
                'state_id' => 11,
                'name' => 'Diogo de Vasconcelos',
            ),
            
            array (
                'id' => 3040,
                'state_id' => 11,
                'name' => 'Dionísio',
            ),
            
            array (
                'id' => 3041,
                'state_id' => 11,
                'name' => 'Divinésia',
            ),
            
            array (
                'id' => 3042,
                'state_id' => 11,
                'name' => 'Divino',
            ),
            
            array (
                'id' => 3043,
                'state_id' => 11,
                'name' => 'Divino das Laranjeiras',
            ),
            
            array (
                'id' => 3046,
                'state_id' => 11,
                'name' => 'Divinolândia de Minas',
            ),
            
            array (
                'id' => 3047,
                'state_id' => 11,
                'name' => 'Divinópolis',
            ),
            
            array (
                'id' => 3048,
                'state_id' => 11,
                'name' => 'Divisa Alegre',
            ),
            
            array (
                'id' => 3049,
                'state_id' => 11,
                'name' => 'Divisa Nova',
            ),
            
            array (
                'id' => 3050,
                'state_id' => 11,
                'name' => 'Divisópolis',
            ),
            
            array (
                'id' => 3052,
                'state_id' => 11,
                'name' => 'Dom Bosco',
            ),
            
            array (
                'id' => 3053,
                'state_id' => 11,
                'name' => 'Dom Cavati',
            ),
            
            array (
                'id' => 3054,
                'state_id' => 11,
                'name' => 'Dom Joaquim',
            ),
            
            array (
                'id' => 3057,
                'state_id' => 11,
                'name' => 'Dom Silvério',
            ),
            
            array (
                'id' => 3058,
                'state_id' => 11,
                'name' => 'Dom Viçoso',
            ),
            
            array (
                'id' => 3059,
                'state_id' => 11,
                'name' => 'Dona Euzébia',
            ),
            
            array (
                'id' => 3061,
                'state_id' => 11,
                'name' => 'Dores de Campos',
            ),
            
            array (
                'id' => 3062,
                'state_id' => 11,
                'name' => 'Dores de Guanhães',
            ),
            
            array (
                'id' => 3063,
                'state_id' => 11,
                'name' => 'Dores do Indaiá',
            ),
            
            array (
                'id' => 3065,
                'state_id' => 11,
                'name' => 'Dores do Turvo',
            ),
            
            array (
                'id' => 3066,
                'state_id' => 11,
                'name' => 'Doresópolis',
            ),
            
            array (
                'id' => 3068,
                'state_id' => 11,
                'name' => 'Douradoquara',
            ),
            
            array (
                'id' => 3071,
                'state_id' => 11,
                'name' => 'Durandé',
            ),
            
            array (
                'id' => 3073,
                'state_id' => 11,
                'name' => 'Elói Mendes',
            ),
            
            array (
                'id' => 3075,
                'state_id' => 11,
                'name' => 'Engenheiro Caldas',
            ),
            
            array (
                'id' => 3077,
                'state_id' => 11,
                'name' => 'Engenheiro Navarro',
            ),
            
            array (
                'id' => 3081,
                'state_id' => 11,
                'name' => 'Entre Folhas',
            ),
            
            array (
                'id' => 3082,
                'state_id' => 11,
                'name' => 'Entre Rios de Minas',
            ),
            
            array (
                'id' => 3085,
                'state_id' => 11,
                'name' => 'Ervália',
            ),
            
            array (
                'id' => 3086,
                'state_id' => 11,
                'name' => 'Esmeraldas',
            ),
            
            array (
                'id' => 3088,
                'state_id' => 11,
                'name' => 'Espera Feliz',
            ),
            
            array (
                'id' => 3089,
                'state_id' => 11,
                'name' => 'Espinosa',
            ),
            
            array (
                'id' => 3090,
                'state_id' => 11,
                'name' => 'Espírito Santo do Dourado',
            ),
            
            array (
                'id' => 3093,
                'state_id' => 11,
                'name' => 'Estiva',
            ),
            
            array (
                'id' => 3095,
                'state_id' => 11,
                'name' => 'Estrela Dalva',
            ),
            
            array (
                'id' => 3097,
                'state_id' => 11,
                'name' => 'Estrela do Indaiá',
            ),
            
            array (
                'id' => 3098,
                'state_id' => 11,
                'name' => 'Estrela do Sul',
            ),
            
            array (
                'id' => 3099,
                'state_id' => 11,
                'name' => 'Eugenópolis',
            ),
            
            array (
                'id' => 3101,
                'state_id' => 11,
                'name' => 'Ewbank da Câmara',
            ),
            
            array (
                'id' => 3104,
                'state_id' => 11,
                'name' => 'Extrema',
            ),
            
            array (
                'id' => 3105,
                'state_id' => 11,
                'name' => 'Fama',
            ),
            
            array (
                'id' => 3106,
                'state_id' => 11,
                'name' => 'Faria Lemos',
            ),
            
            array (
                'id' => 3110,
                'state_id' => 11,
                'name' => 'Felício dos Santos',
            ),
            
            array (
                'id' => 3111,
                'state_id' => 11,
                'name' => 'Felisburgo',
            ),
            
            array (
                'id' => 3112,
                'state_id' => 11,
                'name' => 'Felixlândia',
            ),
            
            array (
                'id' => 3113,
                'state_id' => 11,
                'name' => 'Fernandes Tourinho',
            ),
            
            array (
                'id' => 3117,
                'state_id' => 11,
                'name' => 'Ferros',
            ),
            
            array (
                'id' => 3119,
                'state_id' => 11,
                'name' => 'Fervedouro',
            ),
            
            array (
                'id' => 3125,
                'state_id' => 11,
                'name' => 'Florestal',
            ),
            
            array (
                'id' => 3128,
                'state_id' => 11,
                'name' => 'Formiga',
            ),
            
            array (
                'id' => 3129,
                'state_id' => 11,
                'name' => 'Formoso',
            ),
            
            array (
                'id' => 3130,
                'state_id' => 11,
                'name' => 'Fortaleza de Minas',
            ),
            
            array (
                'id' => 3131,
                'state_id' => 11,
                'name' => 'Fortuna de Minas',
            ),
            
            array (
                'id' => 3132,
                'state_id' => 11,
                'name' => 'Francisco Badaró',
            ),
            
            array (
                'id' => 3133,
                'state_id' => 11,
                'name' => 'Francisco Dumont',
            ),
            
            array (
                'id' => 3134,
                'state_id' => 11,
                'name' => 'Francisco Sá',
            ),
            
            array (
                'id' => 3135,
                'state_id' => 11,
                'name' => 'Franciscópolis',
            ),
            
            array (
                'id' => 3137,
                'state_id' => 11,
                'name' => 'Frei Gaspar',
            ),
            
            array (
                'id' => 3138,
                'state_id' => 11,
                'name' => 'Frei Inocêncio',
            ),
            
            array (
                'id' => 3139,
                'state_id' => 11,
                'name' => 'Frei Lagonegro',
            ),
            
            array (
                'id' => 3143,
                'state_id' => 11,
                'name' => 'Fronteira',
            ),
            
            array (
                'id' => 3144,
                'state_id' => 11,
                'name' => 'Fronteira dos Vales',
            ),
            
            array (
                'id' => 3145,
                'state_id' => 11,
                'name' => 'Fruta de Leite',
            ),
            
            array (
                'id' => 3146,
                'state_id' => 11,
                'name' => 'Frutal',
            ),
            
            array (
                'id' => 3148,
                'state_id' => 11,
                'name' => 'Funilândia',
            ),
            
            array (
                'id' => 3153,
                'state_id' => 11,
                'name' => 'Galiléia',
            ),
            
            array (
                'id' => 3155,
                'state_id' => 11,
                'name' => 'Gameleiras',
            ),
            
            array (
                'id' => 3158,
                'state_id' => 11,
                'name' => 'Glaucilândia',
            ),
            
            array (
                'id' => 3161,
                'state_id' => 11,
                'name' => 'Goiabeira',
            ),
            
            array (
                'id' => 3162,
                'state_id' => 11,
                'name' => 'Goianá',
            ),
            
            array (
                'id' => 3164,
                'state_id' => 11,
                'name' => 'Gonçalves',
            ),
            
            array (
                'id' => 3165,
                'state_id' => 11,
                'name' => 'Gonzaga',
            ),
            
            array (
                'id' => 3168,
                'state_id' => 11,
                'name' => 'Gouveia',
            ),
            
            array (
                'id' => 3169,
                'state_id' => 11,
                'name' => 'Governador Valadares',
            ),
            
            array (
                'id' => 3172,
                'state_id' => 11,
                'name' => 'Grão Mogol',
            ),
            
            array (
                'id' => 3174,
                'state_id' => 11,
                'name' => 'Grupiara',
            ),
            
            array (
                'id' => 3177,
                'state_id' => 11,
                'name' => 'Guanhães',
            ),
            
            array (
                'id' => 3178,
                'state_id' => 11,
                'name' => 'Guapé',
            ),
            
            array (
                'id' => 3179,
                'state_id' => 11,
                'name' => 'Guaraciaba',
            ),
            
            array (
                'id' => 3180,
                'state_id' => 11,
                'name' => 'Guaraciama',
            ),
            
            array (
                'id' => 3181,
                'state_id' => 11,
                'name' => 'Guaranésia',
            ),
            
            array (
                'id' => 3182,
                'state_id' => 11,
                'name' => 'Guarani',
            ),
            
            array (
                'id' => 3184,
                'state_id' => 11,
                'name' => 'Guarará',
            ),
            
            array (
                'id' => 3187,
                'state_id' => 11,
                'name' => 'Guarda-Mor',
            ),
            
            array (
                'id' => 3190,
                'state_id' => 11,
                'name' => 'Guaxupé',
            ),
            
            array (
                'id' => 3191,
                'state_id' => 11,
                'name' => 'Guidoval',
            ),
            
            array (
                'id' => 3192,
                'state_id' => 11,
                'name' => 'Guimarânia',
            ),
            
            array (
                'id' => 3194,
                'state_id' => 11,
                'name' => 'Guiricema',
            ),
            
            array (
                'id' => 3195,
                'state_id' => 11,
                'name' => 'Gurinhatã',
            ),
            
            array (
                'id' => 3196,
                'state_id' => 11,
                'name' => 'Heliodora',
            ),
            
            array (
                'id' => 3200,
                'state_id' => 11,
                'name' => 'Iapu',
            ),
            
            array (
                'id' => 3201,
                'state_id' => 11,
                'name' => 'Ibertioga',
            ),
            
            array (
                'id' => 3202,
                'state_id' => 11,
                'name' => 'Ibiá',
            ),
            
            array (
                'id' => 3203,
                'state_id' => 11,
                'name' => 'Ibiaí',
            ),
            
            array (
                'id' => 3204,
                'state_id' => 11,
                'name' => 'Ibiracatu',
            ),
            
            array (
                'id' => 3205,
                'state_id' => 11,
                'name' => 'Ibiraci',
            ),
            
            array (
                'id' => 3206,
                'state_id' => 11,
                'name' => 'Ibirité',
            ),
            
            array (
                'id' => 3208,
                'state_id' => 11,
                'name' => 'Ibitiúra de Minas',
            ),
            
            array (
                'id' => 3209,
                'state_id' => 11,
                'name' => 'Ibituruna',
            ),
            
            array (
                'id' => 3210,
                'state_id' => 11,
                'name' => 'Icaraí de Minas',
            ),
            
            array (
                'id' => 3211,
                'state_id' => 11,
                'name' => 'Igarapé',
            ),
            
            array (
                'id' => 3212,
                'state_id' => 11,
                'name' => 'Igaratinga',
            ),
            
            array (
                'id' => 3213,
                'state_id' => 11,
                'name' => 'Iguatama',
            ),
            
            array (
                'id' => 3214,
                'state_id' => 11,
                'name' => 'Ijaci',
            ),
            
            array (
                'id' => 3216,
                'state_id' => 11,
                'name' => 'Ilicínea',
            ),
            
            array (
                'id' => 3217,
                'state_id' => 11,
                'name' => 'Imbé de Minas',
            ),
            
            array (
                'id' => 3218,
                'state_id' => 11,
                'name' => 'Inconfidentes',
            ),
            
            array (
                'id' => 3219,
                'state_id' => 11,
                'name' => 'Indaiabira',
            ),
            
            array (
                'id' => 3221,
                'state_id' => 11,
                'name' => 'Indianópolis',
            ),
            
            array (
                'id' => 3222,
                'state_id' => 11,
                'name' => 'Ingaí',
            ),
            
            array (
                'id' => 3224,
                'state_id' => 11,
                'name' => 'Inhapim',
            ),
            
            array (
                'id' => 3225,
                'state_id' => 11,
                'name' => 'Inhaúma',
            ),
            
            array (
                'id' => 3226,
                'state_id' => 11,
                'name' => 'Inimutaba',
            ),
            
            array (
                'id' => 3227,
                'state_id' => 11,
                'name' => 'Ipaba',
            ),
            
            array (
                'id' => 3228,
                'state_id' => 11,
                'name' => 'Ipanema',
            ),
            
            array (
                'id' => 3229,
                'state_id' => 11,
                'name' => 'Ipatinga',
            ),
            
            array (
                'id' => 3230,
                'state_id' => 11,
                'name' => 'Ipiaçu',
            ),
            
            array (
                'id' => 3232,
                'state_id' => 11,
                'name' => 'Ipuiúna',
            ),
            
            array (
                'id' => 3233,
                'state_id' => 11,
                'name' => 'Iraí de Minas',
            ),
            
            array (
                'id' => 3234,
                'state_id' => 11,
                'name' => 'Itabira',
            ),
            
            array (
                'id' => 3235,
                'state_id' => 11,
                'name' => 'Itabirinha',
            ),
            
            array (
                'id' => 3236,
                'state_id' => 11,
                'name' => 'Itabirito',
            ),
            
            array (
                'id' => 3238,
                'state_id' => 11,
                'name' => 'Itacambira',
            ),
            
            array (
                'id' => 3239,
                'state_id' => 11,
                'name' => 'Itacarambi',
            ),
            
            array (
                'id' => 3242,
                'state_id' => 11,
                'name' => 'Itaguara',
            ),
            
            array (
                'id' => 3244,
                'state_id' => 11,
                'name' => 'Itaipé',
            ),
            
            array (
                'id' => 3245,
                'state_id' => 11,
                'name' => 'Itajubá',
            ),
            
            array (
                'id' => 3247,
                'state_id' => 11,
                'name' => 'Itamarandiba',
            ),
            
            array (
                'id' => 3249,
                'state_id' => 11,
                'name' => 'Itamarati de Minas',
            ),
            
            array (
                'id' => 3250,
                'state_id' => 11,
                'name' => 'Itambacuri',
            ),
            
            array (
                'id' => 3251,
                'state_id' => 11,
                'name' => 'Itambé do Mato Dentro',
            ),
            
            array (
                'id' => 3253,
                'state_id' => 11,
                'name' => 'Itamogi',
            ),
            
            array (
                'id' => 3254,
                'state_id' => 11,
                'name' => 'Itamonte',
            ),
            
            array (
                'id' => 3256,
                'state_id' => 11,
                'name' => 'Itanhandu',
            ),
            
            array (
                'id' => 3257,
                'state_id' => 11,
                'name' => 'Itanhomi',
            ),
            
            array (
                'id' => 3258,
                'state_id' => 11,
                'name' => 'Itaobim',
            ),
            
            array (
                'id' => 3259,
                'state_id' => 11,
                'name' => 'Itapagipe',
            ),
            
            array (
                'id' => 3261,
                'state_id' => 11,
                'name' => 'Itapecerica',
            ),
            
            array (
                'id' => 3262,
                'state_id' => 11,
                'name' => 'Itapeva',
            ),
            
            array (
                'id' => 3265,
                'state_id' => 11,
                'name' => 'Itatiaiuçu',
            ),
            
            array (
                'id' => 3266,
                'state_id' => 11,
                'name' => 'Itaú de Minas',
            ),
            
            array (
                'id' => 3267,
                'state_id' => 11,
                'name' => 'Itaúna',
            ),
            
            array (
                'id' => 3269,
                'state_id' => 11,
                'name' => 'Itaverava',
            ),
            
            array (
                'id' => 3271,
                'state_id' => 11,
                'name' => 'Itinga',
            ),
            
            array (
                'id' => 3273,
                'state_id' => 11,
                'name' => 'Itueta',
            ),
            
            array (
                'id' => 3275,
                'state_id' => 11,
                'name' => 'Ituiutaba',
            ),
            
            array (
                'id' => 3276,
                'state_id' => 11,
                'name' => 'Itumirim',
            ),
            
            array (
                'id' => 3277,
                'state_id' => 11,
                'name' => 'Iturama',
            ),
            
            array (
                'id' => 3278,
                'state_id' => 11,
                'name' => 'Itutinga',
            ),
            
            array (
                'id' => 3279,
                'state_id' => 11,
                'name' => 'Jaboticatubas',
            ),
            
            array (
                'id' => 3282,
                'state_id' => 11,
                'name' => 'Jacinto',
            ),
            
            array (
                'id' => 3283,
                'state_id' => 11,
                'name' => 'Jacuí',
            ),
            
            array (
                'id' => 3284,
                'state_id' => 11,
                'name' => 'Jacutinga',
            ),
            
            array (
                'id' => 3285,
                'state_id' => 11,
                'name' => 'Jaguaraçu',
            ),
            
            array (
                'id' => 3288,
                'state_id' => 11,
                'name' => 'Jaíba',
            ),
            
            array (
                'id' => 3289,
                'state_id' => 11,
                'name' => 'Jampruca',
            ),
            
            array (
                'id' => 3290,
                'state_id' => 11,
                'name' => 'Janaúba',
            ),
            
            array (
                'id' => 3291,
                'state_id' => 11,
                'name' => 'Januária',
            ),
            
            array (
                'id' => 3292,
                'state_id' => 11,
                'name' => 'Japaraíba',
            ),
            
            array (
                'id' => 3293,
                'state_id' => 11,
                'name' => 'Japonvar',
            ),
            
            array (
                'id' => 3295,
                'state_id' => 11,
                'name' => 'Jeceaba',
            ),
            
            array (
                'id' => 3296,
                'state_id' => 11,
                'name' => 'Jenipapo de Minas',
            ),
            
            array (
                'id' => 3297,
                'state_id' => 11,
                'name' => 'Jequeri',
            ),
            
            array (
                'id' => 3298,
                'state_id' => 11,
                'name' => 'Jequitaí',
            ),
            
            array (
                'id' => 3299,
                'state_id' => 11,
                'name' => 'Jequitibá',
            ),
            
            array (
                'id' => 3300,
                'state_id' => 11,
                'name' => 'Jequitinhonha',
            ),
            
            array (
                'id' => 3301,
                'state_id' => 11,
                'name' => 'Jesuânia',
            ),
            
            array (
                'id' => 3302,
                'state_id' => 11,
                'name' => 'Joaíma',
            ),
            
            array (
                'id' => 3303,
                'state_id' => 11,
                'name' => 'Joanésia',
            ),
            
            array (
                'id' => 3304,
                'state_id' => 11,
                'name' => 'João Monlevade',
            ),
            
            array (
                'id' => 3305,
                'state_id' => 11,
                'name' => 'João Pinheiro',
            ),
            
            array (
                'id' => 3306,
                'state_id' => 11,
                'name' => 'Joaquim Felício',
            ),
            
            array (
                'id' => 3307,
                'state_id' => 11,
                'name' => 'Jordânia',
            ),
            
            array (
                'id' => 3308,
                'state_id' => 11,
                'name' => 'José Gonçalves de Minas',
            ),
            
            array (
                'id' => 3309,
                'state_id' => 11,
                'name' => 'José Raydan',
            ),
            
            array (
                'id' => 3311,
                'state_id' => 11,
                'name' => 'Josenópolis',
            ),
            
            array (
                'id' => 3312,
                'state_id' => 11,
                'name' => 'Juatuba',
            ),
            
            array (
                'id' => 3315,
                'state_id' => 11,
                'name' => 'Juiz de Fora',
            ),
            
            array (
                'id' => 3317,
                'state_id' => 11,
                'name' => 'Juramento',
            ),
            
            array (
                'id' => 3319,
                'state_id' => 11,
                'name' => 'Juruaia',
            ),
            
            array (
                'id' => 3322,
                'state_id' => 11,
                'name' => 'Juvenília',
            ),
            
            array (
                'id' => 3324,
                'state_id' => 11,
                'name' => 'Ladainha',
            ),
            
            array (
                'id' => 3325,
                'state_id' => 11,
                'name' => 'Lagamar',
            ),
            
            array (
                'id' => 3327,
                'state_id' => 11,
                'name' => 'Lagoa da Prata',
            ),
            
            array (
                'id' => 3328,
                'state_id' => 11,
                'name' => 'Lagoa dos Patos',
            ),
            
            array (
                'id' => 3329,
                'state_id' => 11,
                'name' => 'Lagoa Dourada',
            ),
            
            array (
                'id' => 3330,
                'state_id' => 11,
                'name' => 'Lagoa Formosa',
            ),
            
            array (
                'id' => 3331,
                'state_id' => 11,
                'name' => 'Lagoa Grande',
            ),
            
            array (
                'id' => 3332,
                'state_id' => 11,
                'name' => 'Lagoa Santa',
            ),
            
            array (
                'id' => 3333,
                'state_id' => 11,
                'name' => 'Lajinha',
            ),
            
            array (
                'id' => 3334,
                'state_id' => 11,
                'name' => 'Lambari',
            ),
            
            array (
                'id' => 3335,
                'state_id' => 11,
                'name' => 'Lamim',
            ),
            
            array (
                'id' => 3338,
                'state_id' => 11,
                'name' => 'Laranjal',
            ),
            
            array (
                'id' => 3340,
                'state_id' => 11,
                'name' => 'Lassance',
            ),
            
            array (
                'id' => 3341,
                'state_id' => 11,
                'name' => 'Lavras',
            ),
            
            array (
                'id' => 3342,
                'state_id' => 11,
                'name' => 'LeandroZZZn Ferreira',
            ),
            
            array (
                'id' => 3343,
                'state_id' => 11,
                'name' => 'Leme do Prado',
            ),
            
            array (
                'id' => 3344,
                'state_id' => 11,
                'name' => 'Leopoldina',
            ),
            
            array (
                'id' => 3346,
                'state_id' => 11,
                'name' => 'Liberdade',
            ),
            
            array (
                'id' => 3347,
                'state_id' => 11,
                'name' => 'Lima Duarte',
            ),
            
            array (
                'id' => 3348,
                'state_id' => 11,
                'name' => 'Limeira do Oeste',
            ),
            
            array (
                'id' => 3351,
                'state_id' => 11,
                'name' => 'Lontra',
            ),
            
            array (
                'id' => 3354,
                'state_id' => 11,
                'name' => 'Luisburgo',
            ),
            
            array (
                'id' => 3355,
                'state_id' => 11,
                'name' => 'Luislândia',
            ),
            
            array (
                'id' => 3358,
                'state_id' => 11,
                'name' => 'Luminárias',
            ),
            
            array (
                'id' => 3360,
                'state_id' => 11,
                'name' => 'Luz',
            ),
            
            array (
                'id' => 3362,
                'state_id' => 11,
                'name' => 'Machacalis',
            ),
            
            array (
                'id' => 3363,
                'state_id' => 11,
                'name' => 'Machado',
            ),
            
            array (
                'id' => 3366,
                'state_id' => 11,
                'name' => 'Madre de Deus de Minas',
            ),
            
            array (
                'id' => 3370,
                'state_id' => 11,
                'name' => 'Malacacheta',
            ),
            
            array (
                'id' => 3371,
                'state_id' => 11,
                'name' => 'Mamonas',
            ),
            
            array (
                'id' => 3372,
                'state_id' => 11,
                'name' => 'Manga',
            ),
            
            array (
                'id' => 3373,
                'state_id' => 11,
                'name' => 'Manhuaçu',
            ),
            
            array (
                'id' => 3374,
                'state_id' => 11,
                'name' => 'Manhumirim',
            ),
            
            array (
                'id' => 3375,
                'state_id' => 11,
                'name' => 'Mantena',
            ),
            
            array (
                'id' => 3378,
                'state_id' => 11,
                'name' => 'Mar de Espanha',
            ),
            
            array (
                'id' => 3380,
                'state_id' => 11,
                'name' => 'Maravilhas',
            ),
            
            array (
                'id' => 3381,
                'state_id' => 11,
                'name' => 'Maria da Fé',
            ),
            
            array (
                'id' => 3382,
                'state_id' => 11,
                'name' => 'Mariana',
            ),
            
            array (
                'id' => 3383,
                'state_id' => 11,
                'name' => 'Marilac',
            ),
            
            array (
                'id' => 3385,
                'state_id' => 11,
                'name' => 'Mário Campos',
            ),
            
            array (
                'id' => 3386,
                'state_id' => 11,
                'name' => 'Maripá de Minas',
            ),
            
            array (
                'id' => 3387,
                'state_id' => 11,
                'name' => 'Marliéria',
            ),
            
            array (
                'id' => 3388,
                'state_id' => 11,
                'name' => 'Marmelópolis',
            ),
            
            array (
                'id' => 3390,
                'state_id' => 11,
                'name' => 'Martinho Campos',
            ),
            
            array (
                'id' => 3392,
                'state_id' => 11,
                'name' => 'Martins Soares',
            ),
            
            array (
                'id' => 3393,
                'state_id' => 11,
                'name' => 'Mata Verde',
            ),
            
            array (
                'id' => 3394,
                'state_id' => 11,
                'name' => 'Materlândia',
            ),
            
            array (
                'id' => 3395,
                'state_id' => 11,
                'name' => 'Mateus Leme',
            ),
            
            array (
                'id' => 3396,
                'state_id' => 11,
                'name' => 'Mathias Lobato',
            ),
            
            array (
                'id' => 3397,
                'state_id' => 11,
                'name' => 'Matias Barbosa',
            ),
            
            array (
                'id' => 3398,
                'state_id' => 11,
                'name' => 'Matias Cardoso',
            ),
            
            array (
                'id' => 3399,
                'state_id' => 11,
                'name' => 'Matipó',
            ),
            
            array (
                'id' => 3400,
                'state_id' => 11,
                'name' => 'Mato Verde',
            ),
            
            array (
                'id' => 3401,
                'state_id' => 11,
                'name' => 'Matozinhos',
            ),
            
            array (
                'id' => 3402,
                'state_id' => 11,
                'name' => 'Matutina',
            ),
            
            array (
                'id' => 3403,
                'state_id' => 11,
                'name' => 'Medeiros',
            ),
            
            array (
                'id' => 3404,
                'state_id' => 11,
                'name' => 'Medina',
            ),
            
            array (
                'id' => 3407,
                'state_id' => 11,
                'name' => 'Mendes Pimentel',
            ),
            
            array (
                'id' => 3409,
                'state_id' => 11,
                'name' => 'Mercês',
            ),
            
            array (
                'id' => 3411,
                'state_id' => 11,
                'name' => 'Mesquita',
            ),
            
            array (
                'id' => 3416,
                'state_id' => 11,
                'name' => 'Minas Novas',
            ),
            
            array (
                'id' => 3417,
                'state_id' => 11,
                'name' => 'Minduri',
            ),
            
            array (
                'id' => 3418,
                'state_id' => 11,
                'name' => 'Mirabela',
            ),
            
            array (
                'id' => 3419,
                'state_id' => 11,
                'name' => 'Miradouro',
            ),
            
            array (
                'id' => 3421,
                'state_id' => 11,
                'name' => 'Miraí',
            ),
            
            array (
                'id' => 3425,
                'state_id' => 11,
                'name' => 'Miravânia',
            ),
            
            array (
                'id' => 3429,
                'state_id' => 11,
                'name' => 'Moeda',
            ),
            
            array (
                'id' => 3430,
                'state_id' => 11,
                'name' => 'Moema',
            ),
            
            array (
                'id' => 3432,
                'state_id' => 11,
                'name' => 'Monjolos',
            ),
            
            array (
                'id' => 3436,
                'state_id' => 11,
                'name' => 'Monsenhor Paulo',
            ),
            
            array (
                'id' => 3437,
                'state_id' => 11,
                'name' => 'Montalvânia',
            ),
            
            array (
                'id' => 3438,
                'state_id' => 11,
                'name' => 'Monte Alegre de Minas',
            ),
            
            array (
                'id' => 3439,
                'state_id' => 11,
                'name' => 'Monte Azul',
            ),
            
            array (
                'id' => 3440,
                'state_id' => 11,
                'name' => 'Monte Belo',
            ),
            
            array (
                'id' => 3441,
                'state_id' => 11,
                'name' => 'Monte Carmelo',
            ),
            
            array (
                'id' => 3443,
                'state_id' => 11,
                'name' => 'Monte Formoso',
            ),
            
            array (
                'id' => 3445,
                'state_id' => 11,
                'name' => 'Monte Santo de Minas',
            ),
            
            array (
                'id' => 3446,
                'state_id' => 11,
                'name' => 'Monte Sião',
            ),
            
            array (
                'id' => 3448,
                'state_id' => 11,
                'name' => 'Montes Claros',
            ),
            
            array (
                'id' => 3449,
                'state_id' => 11,
                'name' => 'Montezuma',
            ),
            
            array (
                'id' => 3450,
                'state_id' => 11,
                'name' => 'Morada Nova de Minas',
            ),
            
            array (
                'id' => 3452,
                'state_id' => 11,
                'name' => 'Morro da Garça',
            ),
            
            array (
                'id' => 3454,
                'state_id' => 11,
                'name' => 'Morro do Pilar',
            ),
            
            array (
                'id' => 3458,
                'state_id' => 11,
                'name' => 'Munhoz',
            ),
            
            array (
                'id' => 3460,
                'state_id' => 11,
                'name' => 'Muriaé',
            ),
            
            array (
                'id' => 3461,
                'state_id' => 11,
                'name' => 'Mutum',
            ),
            
            array (
                'id' => 3462,
                'state_id' => 11,
                'name' => 'Muzambinho',
            ),
            
            array (
                'id' => 3463,
                'state_id' => 11,
                'name' => 'Nacip Raydan',
            ),
            
            array (
                'id' => 3464,
                'state_id' => 11,
                'name' => 'Nanuque',
            ),
            
            array (
                'id' => 3465,
                'state_id' => 11,
                'name' => 'Naque',
            ),
            
            array (
                'id' => 3467,
                'state_id' => 11,
                'name' => 'Natalândia',
            ),
            
            array (
                'id' => 3468,
                'state_id' => 11,
                'name' => 'Natércia',
            ),
            
            array (
                'id' => 3470,
                'state_id' => 11,
                'name' => 'Nazareno',
            ),
            
            array (
                'id' => 3473,
                'state_id' => 11,
                'name' => 'Nepomuceno',
            ),
            
            array (
                'id' => 3476,
                'state_id' => 11,
                'name' => 'Ninheira',
            ),
            
            array (
                'id' => 3477,
                'state_id' => 11,
                'name' => 'Nova Belém',
            ),
            
            array (
                'id' => 3478,
                'state_id' => 11,
                'name' => 'Nova Era',
            ),
            
            array (
                'id' => 3480,
                'state_id' => 11,
                'name' => 'Nova Lima',
            ),
            
            array (
                'id' => 3482,
                'state_id' => 11,
                'name' => 'Nova Módica',
            ),
            
            array (
                'id' => 3483,
                'state_id' => 11,
                'name' => 'Nova Ponte',
            ),
            
            array (
                'id' => 3484,
                'state_id' => 11,
                'name' => 'Nova Porteirinha',
            ),
            
            array (
                'id' => 3485,
                'state_id' => 11,
                'name' => 'Nova Resende',
            ),
            
            array (
                'id' => 3486,
                'state_id' => 11,
                'name' => 'Nova Serrana',
            ),
            
            array (
                'id' => 3487,
                'state_id' => 11,
                'name' => 'Nova União',
            ),
            
            array (
                'id' => 3489,
                'state_id' => 11,
                'name' => 'Novo Cruzeiro',
            ),
            
            array (
                'id' => 3491,
                'state_id' => 11,
                'name' => 'Novo Oriente de Minas',
            ),
            
            array (
                'id' => 3492,
                'state_id' => 11,
                'name' => 'Novorizonte',
            ),
            
            array (
                'id' => 3494,
                'state_id' => 11,
                'name' => 'Olaria',
            ),
            
            array (
                'id' => 3497,
                'state_id' => 11,
                'name' => 'Olhos D\'Água',
            ),
            
            array (
                'id' => 3499,
                'state_id' => 11,
                'name' => 'Olímpio Noronha',
            ),
            
            array (
                'id' => 3500,
                'state_id' => 11,
                'name' => 'Oliveira',
            ),
            
            array (
                'id' => 3501,
                'state_id' => 11,
                'name' => 'Oliveira Fortes',
            ),
            
            array (
                'id' => 3502,
                'state_id' => 11,
                'name' => 'Onça de Pitangui',
            ),
            
            array (
                'id' => 3503,
                'state_id' => 11,
                'name' => 'Oratórios',
            ),
            
            array (
                'id' => 3504,
                'state_id' => 11,
                'name' => 'Orizânia',
            ),
            
            array (
                'id' => 3505,
                'state_id' => 11,
                'name' => 'Ouro Branco',
            ),
            
            array (
                'id' => 3506,
                'state_id' => 11,
                'name' => 'Ouro Fino',
            ),
            
            array (
                'id' => 3507,
                'state_id' => 11,
                'name' => 'Ouro Preto',
            ),
            
            array (
                'id' => 3508,
                'state_id' => 11,
                'name' => 'Ouro Verde de Minas',
            ),
            
            array (
                'id' => 3511,
                'state_id' => 11,
                'name' => 'Padre Carvalho',
            ),
            
            array (
                'id' => 3516,
                'state_id' => 11,
                'name' => 'Padre Paraíso',
            ),
            
            array (
                'id' => 3519,
                'state_id' => 11,
                'name' => 'Pai Pedro',
            ),
            
            array (
                'id' => 3520,
                'state_id' => 11,
                'name' => 'Paineiras',
            ),
            
            array (
                'id' => 3521,
                'state_id' => 11,
                'name' => 'Pains',
            ),
            
            array (
                'id' => 3523,
                'state_id' => 11,
                'name' => 'Paiva',
            ),
            
            array (
                'id' => 3524,
                'state_id' => 11,
                'name' => 'Palma',
            ),
            
            array (
                'id' => 3528,
                'state_id' => 11,
                'name' => 'Palmópolis',
            ),
            
            array (
                'id' => 3530,
                'state_id' => 11,
                'name' => 'Papagaios',
            ),
            
            array (
                'id' => 3531,
                'state_id' => 11,
                'name' => 'Pará de Minas',
            ),
            
            array (
                'id' => 3532,
                'state_id' => 11,
                'name' => 'Paracatu',
            ),
            
            array (
                'id' => 3533,
                'state_id' => 11,
                'name' => 'Paraguaçu',
            ),
            
            array (
                'id' => 3536,
                'state_id' => 11,
                'name' => 'Paraisópolis',
            ),
            
            array (
                'id' => 3537,
                'state_id' => 11,
                'name' => 'Paraopeba',
            ),
            
            array (
                'id' => 3542,
                'state_id' => 11,
                'name' => 'Passa Quatro',
            ),
            
            array (
                'id' => 3543,
                'state_id' => 11,
                'name' => 'Passa Tempo',
            ),
            
            array (
                'id' => 3544,
                'state_id' => 11,
                'name' => 'Passa Vinte',
            ),
            
            array (
                'id' => 3545,
                'state_id' => 11,
                'name' => 'Passabém',
            ),
            
            array (
                'id' => 3547,
                'state_id' => 11,
                'name' => 'Passos',
            ),
            
            array (
                'id' => 3548,
                'state_id' => 11,
                'name' => 'Patis',
            ),
            
            array (
                'id' => 3549,
                'state_id' => 11,
                'name' => 'Patos de Minas',
            ),
            
            array (
                'id' => 3551,
                'state_id' => 11,
                'name' => 'Patrocínio',
            ),
            
            array (
                'id' => 3552,
                'state_id' => 11,
                'name' => 'Patrocínio do Muriaé',
            ),
            
            array (
                'id' => 3553,
                'state_id' => 11,
                'name' => 'Paula Cândido',
            ),
            
            array (
                'id' => 3555,
                'state_id' => 11,
                'name' => 'Paulistas',
            ),
            
            array (
                'id' => 3556,
                'state_id' => 11,
                'name' => 'Pavão',
            ),
            
            array (
                'id' => 3558,
                'state_id' => 11,
                'name' => 'Peçanha',
            ),
            
            array (
                'id' => 3559,
                'state_id' => 11,
                'name' => 'Pedra Azul',
            ),
            
            array (
                'id' => 3560,
                'state_id' => 11,
                'name' => 'Pedra Bonita',
            ),
            
            array (
                'id' => 3562,
                'state_id' => 11,
                'name' => 'Pedra do Anta',
            ),
            
            array (
                'id' => 3563,
                'state_id' => 11,
                'name' => 'Pedra do Indaiá',
            ),
            
            array (
                'id' => 3565,
                'state_id' => 11,
                'name' => 'Pedra Dourada',
            ),
            
            array (
                'id' => 3568,
                'state_id' => 11,
                'name' => 'Pedralva',
            ),
            
            array (
                'id' => 3569,
                'state_id' => 11,
                'name' => 'Pedras de Maria da Cruz',
            ),
            
            array (
                'id' => 3570,
                'state_id' => 11,
                'name' => 'Pedrinópolis',
            ),
            
            array (
                'id' => 3571,
                'state_id' => 11,
                'name' => 'Pedro Leopoldo',
            ),
            
            array (
                'id' => 3573,
                'state_id' => 11,
                'name' => 'Pedro Teixeira',
            ),
            
            array (
                'id' => 3581,
                'state_id' => 11,
                'name' => 'Pequeri',
            ),
            
            array (
                'id' => 3582,
                'state_id' => 11,
                'name' => 'Pequi',
            ),
            
            array (
                'id' => 3583,
                'state_id' => 11,
                'name' => 'Perdigão',
            ),
            
            array (
                'id' => 3585,
                'state_id' => 11,
                'name' => 'Perdizes',
            ),
            
            array (
                'id' => 3586,
                'state_id' => 11,
                'name' => 'Perdões',
            ),
            
            array (
                'id' => 3588,
                'state_id' => 11,
                'name' => 'Periquito',
            ),
            
            array (
                'id' => 3590,
                'state_id' => 11,
                'name' => 'Pescador',
            ),
            
            array (
                'id' => 3594,
                'state_id' => 11,
                'name' => 'Piau',
            ),
            
            array (
                'id' => 3596,
                'state_id' => 11,
                'name' => 'Piedade de Caratinga',
            ),
            
            array (
                'id' => 3597,
                'state_id' => 11,
                'name' => 'Piedade de Ponte Nova',
            ),
            
            array (
                'id' => 3599,
                'state_id' => 11,
                'name' => 'Piedade do Rio Grande',
            ),
            
            array (
                'id' => 3600,
                'state_id' => 11,
                'name' => 'Piedade dos Gerais',
            ),
            
            array (
                'id' => 3602,
                'state_id' => 11,
                'name' => 'Pimenta',
            ),
            
            array (
                'id' => 3604,
                'state_id' => 11,
                'name' => 'Pingo-D\'Água',
            ),
            
            array (
                'id' => 3608,
                'state_id' => 11,
                'name' => 'Pintópolis',
            ),
            
            array (
                'id' => 3611,
                'state_id' => 11,
                'name' => 'Piracema',
            ),
            
            array (
                'id' => 3612,
                'state_id' => 11,
                'name' => 'Pirajuba',
            ),
            
            array (
                'id' => 3613,
                'state_id' => 11,
                'name' => 'Piranga',
            ),
            
            array (
                'id' => 3614,
                'state_id' => 11,
                'name' => 'Piranguçu',
            ),
            
            array (
                'id' => 3615,
                'state_id' => 11,
                'name' => 'Piranguinho',
            ),
            
            array (
                'id' => 3618,
                'state_id' => 11,
                'name' => 'Pirapetinga',
            ),
            
            array (
                'id' => 3619,
                'state_id' => 11,
                'name' => 'Pirapora',
            ),
            
            array (
                'id' => 3620,
                'state_id' => 11,
                'name' => 'Piraúba',
            ),
            
            array (
                'id' => 3623,
                'state_id' => 11,
                'name' => 'Pitangui',
            ),
            
            array (
                'id' => 3625,
                'state_id' => 11,
                'name' => 'Piumhi',
            ),
            
            array (
                'id' => 3627,
                'state_id' => 11,
                'name' => 'Planura',
            ),
            
            array (
                'id' => 3630,
                'state_id' => 11,
                'name' => 'Poço Fundo',
            ),
            
            array (
                'id' => 3632,
                'state_id' => 11,
                'name' => 'Poços de Caldas',
            ),
            
            array (
                'id' => 3633,
                'state_id' => 11,
                'name' => 'Pocrane',
            ),
            
            array (
                'id' => 3634,
                'state_id' => 11,
                'name' => 'Pompéu',
            ),
            
            array (
                'id' => 3641,
                'state_id' => 11,
                'name' => 'Ponte Nova',
            ),
            
            array (
                'id' => 3644,
                'state_id' => 11,
                'name' => 'Ponto Chique',
            ),
            
            array (
                'id' => 3647,
                'state_id' => 11,
                'name' => 'Ponto dos Volantes',
            ),
            
            array (
                'id' => 3648,
                'state_id' => 11,
                'name' => 'Porteirinha',
            ),
            
            array (
                'id' => 3652,
                'state_id' => 11,
                'name' => 'Porto Firme',
            ),
            
            array (
                'id' => 3653,
                'state_id' => 11,
                'name' => 'Poté',
            ),
            
            array (
                'id' => 3654,
                'state_id' => 11,
                'name' => 'Pouso Alegre',
            ),
            
            array (
                'id' => 3655,
                'state_id' => 11,
                'name' => 'Pouso Alto',
            ),
            
            array (
                'id' => 3656,
                'state_id' => 11,
                'name' => 'Prados',
            ),
            
            array (
                'id' => 3657,
                'state_id' => 11,
                'name' => 'Prata',
            ),
            
            array (
                'id' => 3658,
                'state_id' => 11,
                'name' => 'Pratápolis',
            ),
            
            array (
                'id' => 3659,
                'state_id' => 11,
                'name' => 'Pratinha',
            ),
            
            array (
                'id' => 3660,
                'state_id' => 11,
                'name' => 'Presidente Bernardes',
            ),
            
            array (
                'id' => 3661,
                'state_id' => 11,
                'name' => 'Presidente Juscelino',
            ),
            
            array (
                'id' => 3662,
                'state_id' => 11,
                'name' => 'Presidente Kubitschek',
            ),
            
            array (
                'id' => 3663,
                'state_id' => 11,
                'name' => 'Presidente Olegário',
            ),
            
            array (
                'id' => 3667,
                'state_id' => 11,
                'name' => 'Prudente de Morais',
            ),
            
            array (
                'id' => 3670,
                'state_id' => 11,
                'name' => 'Quartel Geral',
            ),
            
            array (
                'id' => 3673,
                'state_id' => 11,
                'name' => 'Queluzito',
            ),
            
            array (
                'id' => 3677,
                'state_id' => 11,
                'name' => 'Raposos',
            ),
            
            array (
                'id' => 3678,
                'state_id' => 11,
                'name' => 'Raul Soares',
            ),
            
            array (
                'id' => 3681,
                'state_id' => 11,
                'name' => 'Recreio',
            ),
            
            array (
                'id' => 3682,
                'state_id' => 11,
                'name' => 'Reduto',
            ),
            
            array (
                'id' => 3683,
                'state_id' => 11,
                'name' => 'Resende Costa',
            ),
            
            array (
                'id' => 3684,
                'state_id' => 11,
                'name' => 'Resplendor',
            ),
            
            array (
                'id' => 3685,
                'state_id' => 11,
                'name' => 'Ressaquinha',
            ),
            
            array (
                'id' => 3686,
                'state_id' => 11,
                'name' => 'Riachinho',
            ),
            
            array (
                'id' => 3688,
                'state_id' => 11,
                'name' => 'Riacho dos Machados',
            ),
            
            array (
                'id' => 3689,
                'state_id' => 11,
                'name' => 'Ribeirão das Neves',
            ),
            
            array (
                'id' => 3691,
                'state_id' => 11,
                'name' => 'Ribeirão Vermelho',
            ),
            
            array (
                'id' => 3694,
                'state_id' => 11,
                'name' => 'Rio Acima',
            ),
            
            array (
                'id' => 3695,
                'state_id' => 11,
                'name' => 'Rio Casca',
            ),
            
            array (
                'id' => 3697,
                'state_id' => 11,
                'name' => 'Rio do Prado',
            ),
            
            array (
                'id' => 3698,
                'state_id' => 11,
                'name' => 'Rio Doce',
            ),
            
            array (
                'id' => 3699,
                'state_id' => 11,
                'name' => 'Rio Espera',
            ),
            
            array (
                'id' => 3700,
                'state_id' => 11,
                'name' => 'Rio Manso',
            ),
            
            array (
                'id' => 3702,
                'state_id' => 11,
                'name' => 'Rio Novo',
            ),
            
            array (
                'id' => 3703,
                'state_id' => 11,
                'name' => 'Rio Paranaíba',
            ),
            
            array (
                'id' => 3704,
                'state_id' => 11,
                'name' => 'Rio Pardo de Minas',
            ),
            
            array (
                'id' => 3705,
                'state_id' => 11,
                'name' => 'Rio Piracicaba',
            ),
            
            array (
                'id' => 3706,
                'state_id' => 11,
                'name' => 'Rio Pomba',
            ),
            
            array (
                'id' => 3708,
                'state_id' => 11,
                'name' => 'Rio Preto',
            ),
            
            array (
                'id' => 3709,
                'state_id' => 11,
                'name' => 'Rio Vermelho',
            ),
            
            array (
                'id' => 3710,
                'state_id' => 11,
                'name' => 'Ritápolis',
            ),
            
            array (
                'id' => 3713,
                'state_id' => 11,
                'name' => 'Rochedo de Minas',
            ),
            
            array (
                'id' => 3715,
                'state_id' => 11,
                'name' => 'Rodeiro',
            ),
            
            array (
                'id' => 3717,
                'state_id' => 11,
                'name' => 'Romaria',
            ),
            
            array (
                'id' => 3718,
                'state_id' => 11,
                'name' => 'Rosário da Limeira',
            ),
            
            array (
                'id' => 3722,
                'state_id' => 11,
                'name' => 'Rubelita',
            ),
            
            array (
                'id' => 3723,
                'state_id' => 11,
                'name' => 'Rubim',
            ),
            
            array (
                'id' => 3724,
                'state_id' => 11,
                'name' => 'Sabará',
            ),
        ));
        DB::table('cities')->insert(array (
            
            array (
                'id' => 3725,
                'state_id' => 11,
                'name' => 'Sabinópolis',
            ),
            
            array (
                'id' => 3726,
                'state_id' => 11,
                'name' => 'Sacramento',
            ),
            
            array (
                'id' => 3727,
                'state_id' => 11,
                'name' => 'Salinas',
            ),
            
            array (
                'id' => 3729,
                'state_id' => 11,
                'name' => 'Salto da Divisa',
            ),
            
            array (
                'id' => 3731,
                'state_id' => 11,
                'name' => 'Santa Bárbara',
            ),
            
            array (
                'id' => 3732,
                'state_id' => 11,
                'name' => 'Santa Bárbara do Leste',
            ),
            
            array (
                'id' => 3733,
                'state_id' => 11,
                'name' => 'Santa Bárbara do Monte Verde',
            ),
            
            array (
                'id' => 3734,
                'state_id' => 11,
                'name' => 'Santa Bárbara do Tugúrio',
            ),
            
            array (
                'id' => 3737,
                'state_id' => 11,
                'name' => 'Santa Cruz de Minas',
            ),
            
            array (
                'id' => 3738,
                'state_id' => 11,
                'name' => 'Santa Cruz de Salinas',
            ),
            
            array (
                'id' => 3739,
                'state_id' => 11,
                'name' => 'Santa Cruz do Escalvado',
            ),
            
            array (
                'id' => 3743,
                'state_id' => 11,
                'name' => 'Santa Efigênia de Minas',
            ),
            
            array (
                'id' => 3744,
                'state_id' => 11,
                'name' => 'Santa Fé de Minas',
            ),
            
            array (
                'id' => 3746,
                'state_id' => 11,
                'name' => 'Santa Helena de Minas',
            ),
            
            array (
                'id' => 3748,
                'state_id' => 11,
                'name' => 'Santa Juliana',
            ),
            
            array (
                'id' => 3749,
                'state_id' => 11,
                'name' => 'Santa Luzia',
            ),
            
            array (
                'id' => 3751,
                'state_id' => 11,
                'name' => 'Santa Margarida',
            ),
            
            array (
                'id' => 3752,
                'state_id' => 11,
                'name' => 'Santa Maria de Itabira',
            ),
            
            array (
                'id' => 3753,
                'state_id' => 11,
                'name' => 'Santa Maria do Salto',
            ),
            
            array (
                'id' => 3754,
                'state_id' => 11,
                'name' => 'Santa Maria do Suaçuí',
            ),
            
            array (
                'id' => 3756,
                'state_id' => 11,
                'name' => 'Santa Rita de Caldas',
            ),
            
            array (
                'id' => 3757,
                'state_id' => 11,
                'name' => 'Santa Rita de Jacutinga',
            ),
            
            array (
                'id' => 3758,
                'state_id' => 11,
                'name' => 'Santa Rita de Minas',
            ),
            
            array (
                'id' => 3761,
                'state_id' => 11,
                'name' => 'Santa Rita do Ibitipoca',
            ),
            
            array (
                'id' => 3762,
                'state_id' => 11,
                'name' => 'Santa Rita do Itueto',
            ),
            
            array (
                'id' => 3764,
                'state_id' => 11,
                'name' => 'Santa Rita do Sapucaí',
            ),
            
            array (
                'id' => 3766,
                'state_id' => 11,
                'name' => 'Santa Rosa da Serra',
            ),
            
            array (
                'id' => 3771,
                'state_id' => 11,
                'name' => 'Santa Vitória',
            ),
            
            array (
                'id' => 3772,
                'state_id' => 11,
                'name' => 'Santana da Vargem',
            ),
            
            array (
                'id' => 3774,
                'state_id' => 11,
                'name' => 'Santana de Cataguases',
            ),
            
            array (
                'id' => 3776,
                'state_id' => 11,
                'name' => 'Santana de Pirapama',
            ),
            
            array (
                'id' => 3781,
                'state_id' => 11,
                'name' => 'Santana do Deserto',
            ),
            
            array (
                'id' => 3782,
                'state_id' => 11,
                'name' => 'Santana do Garambéu',
            ),
            
            array (
                'id' => 3783,
                'state_id' => 11,
                'name' => 'Santana do Jacaré',
            ),
            
            array (
                'id' => 3784,
                'state_id' => 11,
                'name' => 'Santana do Manhuaçu',
            ),
            
            array (
                'id' => 3785,
                'state_id' => 11,
                'name' => 'Santana do Paraíso',
            ),
            
            array (
                'id' => 3787,
                'state_id' => 11,
                'name' => 'Santana do Riacho',
            ),
            
            array (
                'id' => 3789,
                'state_id' => 11,
                'name' => 'Santana dos Montes',
            ),
            
            array (
                'id' => 3793,
                'state_id' => 11,
                'name' => 'Santo Antônio do Amparo',
            ),
            
            array (
                'id' => 3794,
                'state_id' => 11,
                'name' => 'Santo Antônio do Aventureiro',
            ),
            
            array (
                'id' => 3798,
                'state_id' => 11,
                'name' => 'Santo Antônio do Grama',
            ),
            
            array (
                'id' => 3799,
                'state_id' => 11,
                'name' => 'Santo Antônio do Itambé',
            ),
            
            array (
                'id' => 3800,
                'state_id' => 11,
                'name' => 'Santo Antônio do Jacinto',
            ),
            
            array (
                'id' => 3803,
                'state_id' => 11,
                'name' => 'Santo Antônio do Monte',
            ),
            
            array (
                'id' => 3807,
                'state_id' => 11,
                'name' => 'Santo Antônio do Retiro',
            ),
            
            array (
                'id' => 3808,
                'state_id' => 11,
                'name' => 'Santo Antônio do Rio Abaixo',
            ),
            
            array (
                'id' => 3812,
                'state_id' => 11,
                'name' => 'Santo Hipólito',
            ),
            
            array (
                'id' => 3813,
                'state_id' => 11,
                'name' => 'Santos Dumont',
            ),
            
            array (
                'id' => 3816,
                'state_id' => 11,
                'name' => 'São Bento Abade',
            ),
            
            array (
                'id' => 3818,
                'state_id' => 11,
                'name' => 'São Brás do Suaçuí',
            ),
            
            array (
                'id' => 3823,
                'state_id' => 11,
                'name' => 'São Domingos das Dores',
            ),
            
            array (
                'id' => 3824,
                'state_id' => 11,
                'name' => 'São Domingos do Prata',
            ),
            
            array (
                'id' => 3825,
                'state_id' => 11,
                'name' => 'São Félix de Minas',
            ),
            
            array (
                'id' => 3826,
                'state_id' => 11,
                'name' => 'São Francisco',
            ),
            
            array (
                'id' => 3827,
                'state_id' => 11,
                'name' => 'São Francisco de Paula',
            ),
            
            array (
                'id' => 3828,
                'state_id' => 11,
                'name' => 'São Francisco de Sales',
            ),
            
            array (
                'id' => 3829,
                'state_id' => 11,
                'name' => 'São Francisco do Glória',
            ),
            
            array (
                'id' => 3831,
                'state_id' => 11,
                'name' => 'São Geraldo',
            ),
            
            array (
                'id' => 3833,
                'state_id' => 11,
                'name' => 'São Geraldo da Piedade',
            ),
            
            array (
                'id' => 3836,
                'state_id' => 11,
                'name' => 'São Geraldo do Baixio',
            ),
            
            array (
                'id' => 3838,
                'state_id' => 11,
                'name' => 'São Gonçalo do Abaeté',
            ),
            
            array (
                'id' => 3840,
                'state_id' => 11,
                'name' => 'São Gonçalo do Pará',
            ),
            
            array (
                'id' => 3841,
                'state_id' => 11,
                'name' => 'São Gonçalo do Rio Abaixo',
            ),
            
            array (
                'id' => 3843,
                'state_id' => 11,
                'name' => 'São Gonçalo do Rio Preto',
            ),
            
            array (
                'id' => 3844,
                'state_id' => 11,
                'name' => 'São Gonçalo do Sapucaí',
            ),
            
            array (
                'id' => 3845,
                'state_id' => 11,
                'name' => 'São Gotardo',
            ),
            
            array (
                'id' => 3847,
                'state_id' => 11,
                'name' => 'São João Batista do Glória',
            ),
            
            array (
                'id' => 3849,
                'state_id' => 11,
                'name' => 'São João da Lagoa',
            ),
            
            array (
                'id' => 3850,
                'state_id' => 11,
                'name' => 'São João da Mata',
            ),
            
            array (
                'id' => 3851,
                'state_id' => 11,
                'name' => 'São João da Ponte',
            ),
            
            array (
                'id' => 3856,
                'state_id' => 11,
                'name' => 'São João das Missões',
            ),
            
            array (
                'id' => 3857,
                'state_id' => 11,
                'name' => 'São João Del Rei',
            ),
            
            array (
                'id' => 3860,
                'state_id' => 11,
                'name' => 'São João do Manhuaçu',
            ),
            
            array (
                'id' => 3861,
                'state_id' => 11,
                'name' => 'São João do Manteninha',
            ),
            
            array (
                'id' => 3862,
                'state_id' => 11,
                'name' => 'São João do Oriente',
            ),
            
            array (
                'id' => 3863,
                'state_id' => 11,
                'name' => 'São João do Pacuí',
            ),
            
            array (
                'id' => 3864,
                'state_id' => 11,
                'name' => 'São João do Paraíso',
            ),
            
            array (
                'id' => 3865,
                'state_id' => 11,
                'name' => 'São João Evangelista',
            ),
            
            array (
                'id' => 3866,
                'state_id' => 11,
                'name' => 'São João Nepomuceno',
            ),
            
            array (
                'id' => 3869,
                'state_id' => 11,
                'name' => 'São Joaquim de Bicas',
            ),
            
            array (
                'id' => 3870,
                'state_id' => 11,
                'name' => 'São José da Barra',
            ),
            
            array (
                'id' => 3872,
                'state_id' => 11,
                'name' => 'São José da Lapa',
            ),
            
            array (
                'id' => 3874,
                'state_id' => 11,
                'name' => 'São José da Safira',
            ),
            
            array (
                'id' => 3875,
                'state_id' => 11,
                'name' => 'São José da Varginha',
            ),
            
            array (
                'id' => 3878,
                'state_id' => 11,
                'name' => 'São José do Alegre',
            ),
            
            array (
                'id' => 3882,
                'state_id' => 11,
                'name' => 'São José do Divino',
            ),
            
            array (
                'id' => 3883,
                'state_id' => 11,
                'name' => 'São José do Goiabal',
            ),
            
            array (
                'id' => 3885,
                'state_id' => 11,
                'name' => 'São José do Jacuri',
            ),
            
            array (
                'id' => 3886,
                'state_id' => 11,
                'name' => 'São José do Mantimento',
            ),
            
            array (
                'id' => 3892,
                'state_id' => 11,
                'name' => 'São Lourenço',
            ),
            
            array (
                'id' => 3895,
                'state_id' => 11,
                'name' => 'São Miguel do Anta',
            ),
            
            array (
                'id' => 3897,
                'state_id' => 11,
                'name' => 'São Pedro da União',
            ),
            
            array (
                'id' => 3903,
                'state_id' => 11,
                'name' => 'São Pedro do Suaçuí',
            ),
            
            array (
                'id' => 3904,
                'state_id' => 11,
                'name' => 'São Pedro dos Ferros',
            ),
            
            array (
                'id' => 3906,
                'state_id' => 11,
                'name' => 'São Romão',
            ),
            
            array (
                'id' => 3907,
                'state_id' => 11,
                'name' => 'São Roque de Minas',
            ),
            
            array (
                'id' => 3909,
                'state_id' => 11,
                'name' => 'São Sebastião da Bela Vista',
            ),
            
            array (
                'id' => 3911,
                'state_id' => 11,
                'name' => 'São Sebastião da Vargem Alegre',
            ),
            
            array (
                'id' => 3914,
                'state_id' => 11,
                'name' => 'São Sebastião do Anta',
            ),
            
            array (
                'id' => 3921,
                'state_id' => 11,
                'name' => 'São Sebastião do Maranhão',
            ),
            
            array (
                'id' => 3923,
                'state_id' => 11,
                'name' => 'São Sebastião do Oeste',
            ),
            
            array (
                'id' => 3924,
                'state_id' => 11,
                'name' => 'São Sebastião do Paraíso',
            ),
            
            array (
                'id' => 3926,
                'state_id' => 11,
                'name' => 'São Sebastião do Rio Preto',
            ),
            
            array (
                'id' => 3927,
                'state_id' => 11,
                'name' => 'São Sebastião do Rio Verde',
            ),
            
            array (
                'id' => 3933,
                'state_id' => 11,
                'name' => 'São Tiago',
            ),
            
            array (
                'id' => 3934,
                'state_id' => 11,
                'name' => 'São Tomás de Aquino',
            ),
            
            array (
                'id' => 3935,
                'state_id' => 11,
                'name' => 'São Thomé das Letras',
            ),
            
            array (
                'id' => 3938,
                'state_id' => 11,
                'name' => 'São Vicente de Minas',
            ),
            
            array (
                'id' => 3943,
                'state_id' => 11,
                'name' => 'Sapucaí-Mirim',
            ),
            
            array (
                'id' => 3948,
                'state_id' => 11,
                'name' => 'Sardoá',
            ),
            
            array (
                'id' => 3949,
                'state_id' => 11,
                'name' => 'Sarzedo',
            ),
            
            array (
                'id' => 3951,
                'state_id' => 11,
                'name' => 'Sem Peixe',
            ),
            
            array (
                'id' => 3952,
                'state_id' => 11,
                'name' => 'Senador Amaral',
            ),
            
            array (
                'id' => 3953,
                'state_id' => 11,
                'name' => 'Senador Cortes',
            ),
            
            array (
                'id' => 3954,
                'state_id' => 11,
                'name' => 'Senador Firmino',
            ),
            
            array (
                'id' => 3955,
                'state_id' => 11,
                'name' => 'Senador José Bento',
            ),
            
            array (
                'id' => 3957,
                'state_id' => 11,
                'name' => 'Senador Modestino Gonçalves',
            ),
            
            array (
                'id' => 3962,
                'state_id' => 11,
                'name' => 'Senhora de Oliveira',
            ),
            
            array (
                'id' => 3964,
                'state_id' => 11,
                'name' => 'Senhora do Porto',
            ),
            
            array (
                'id' => 3965,
                'state_id' => 11,
                'name' => 'Senhora dos Remédios',
            ),
            
            array (
                'id' => 3967,
                'state_id' => 11,
                'name' => 'Sericita',
            ),
            
            array (
                'id' => 3968,
                'state_id' => 11,
                'name' => 'Seritinga',
            ),
            
            array (
                'id' => 3970,
                'state_id' => 11,
                'name' => 'Serra Azul de Minas',
            ),
            
            array (
                'id' => 3973,
                'state_id' => 11,
                'name' => 'Serra da Saudade',
            ),
            
            array (
                'id' => 3976,
                'state_id' => 11,
                'name' => 'Serra do Salitre',
            ),
            
            array (
                'id' => 3977,
                'state_id' => 11,
                'name' => 'Serra dos Aimorés',
            ),
            
            array (
                'id' => 3980,
                'state_id' => 11,
                'name' => 'Serrania',
            ),
            
            array (
                'id' => 3981,
                'state_id' => 11,
                'name' => 'Serranópolis de Minas',
            ),
            
            array (
                'id' => 3982,
                'state_id' => 11,
                'name' => 'Serranos',
            ),
            
            array (
                'id' => 3983,
                'state_id' => 11,
                'name' => 'Serro',
            ),
            
            array (
                'id' => 3986,
                'state_id' => 11,
                'name' => 'Sete Lagoas',
            ),
            
            array (
                'id' => 3987,
                'state_id' => 11,
                'name' => 'Setubinha',
            ),
            
            array (
                'id' => 3992,
                'state_id' => 11,
                'name' => 'Silveirânia',
            ),
            
            array (
                'id' => 3994,
                'state_id' => 11,
                'name' => 'Silvianópolis',
            ),
            
            array (
                'id' => 3996,
                'state_id' => 11,
                'name' => 'Simão Pereira',
            ),
            
            array (
                'id' => 3997,
                'state_id' => 11,
                'name' => 'Simonésia',
            ),
            
            array (
                'id' => 3999,
                'state_id' => 11,
                'name' => 'Sobrália',
            ),
            
            array (
                'id' => 4000,
                'state_id' => 11,
                'name' => 'Soledade de Minas',
            ),
            
            array (
                'id' => 4005,
                'state_id' => 11,
                'name' => 'Tabuleiro',
            ),
            
            array (
                'id' => 4006,
                'state_id' => 11,
                'name' => 'Taiobeiras',
            ),
            
            array (
                'id' => 4007,
                'state_id' => 11,
                'name' => 'Taparuba',
            ),
            
            array (
                'id' => 4008,
                'state_id' => 11,
                'name' => 'Tapira',
            ),
            
            array (
                'id' => 4009,
                'state_id' => 11,
                'name' => 'Tapiraí',
            ),
            
            array (
                'id' => 4011,
                'state_id' => 11,
                'name' => 'Taquaraçu de Minas',
            ),
            
            array (
                'id' => 4013,
                'state_id' => 11,
                'name' => 'Tarumirim',
            ),
            
            array (
                'id' => 4015,
                'state_id' => 11,
                'name' => 'Teixeiras',
            ),
            
            array (
                'id' => 4017,
                'state_id' => 11,
                'name' => 'Teófilo Otoni',
            ),
            
            array (
                'id' => 4019,
                'state_id' => 11,
                'name' => 'Timóteo',
            ),
            
            array (
                'id' => 4020,
                'state_id' => 11,
                'name' => 'Tiradentes',
            ),
            
            array (
                'id' => 4021,
                'state_id' => 11,
                'name' => 'Tiros',
            ),
            
            array (
                'id' => 4024,
                'state_id' => 11,
                'name' => 'Tocantins',
            ),
            
            array (
                'id' => 4025,
                'state_id' => 11,
                'name' => 'Tocos do Moji',
            ),
            
            array (
                'id' => 4026,
                'state_id' => 11,
                'name' => 'Toledo',
            ),
            
            array (
                'id' => 4028,
                'state_id' => 11,
                'name' => 'Tombos',
            ),
            
            array (
                'id' => 4032,
                'state_id' => 11,
                'name' => 'Três Corações',
            ),
            
            array (
                'id' => 4034,
                'state_id' => 11,
                'name' => 'Três Marias',
            ),
            
            array (
                'id' => 4035,
                'state_id' => 11,
                'name' => 'Três Pontas',
            ),
            
            array (
                'id' => 4038,
                'state_id' => 11,
                'name' => 'Tumiritinga',
            ),
            
            array (
                'id' => 4039,
                'state_id' => 11,
                'name' => 'Tupaciguara',
            ),
            
            array (
                'id' => 4041,
                'state_id' => 11,
                'name' => 'Turmalina',
            ),
            
            array (
                'id' => 4042,
                'state_id' => 11,
                'name' => 'Turvolândia',
            ),
            
            array (
                'id' => 4043,
                'state_id' => 11,
                'name' => 'Ubá',
            ),
            
            array (
                'id' => 4044,
                'state_id' => 11,
                'name' => 'Ubaí',
            ),
            
            array (
                'id' => 4045,
                'state_id' => 11,
                'name' => 'Ubaporanga',
            ),
            
            array (
                'id' => 4047,
                'state_id' => 11,
                'name' => 'Uberaba',
            ),
            
            array (
                'id' => 4048,
                'state_id' => 11,
                'name' => 'Uberlândia',
            ),
            
            array (
                'id' => 4049,
                'state_id' => 11,
                'name' => 'Umburatiba',
            ),
            
            array (
                'id' => 4051,
                'state_id' => 11,
                'name' => 'Unaí',
            ),
            
            array (
                'id' => 4052,
                'state_id' => 11,
                'name' => 'União de Minas',
            ),
            
            array (
                'id' => 4053,
                'state_id' => 11,
                'name' => 'Uruana de Minas',
            ),
            
            array (
                'id' => 4054,
                'state_id' => 11,
                'name' => 'Urucânia',
            ),
            
            array (
                'id' => 4055,
                'state_id' => 11,
                'name' => 'Urucuia',
            ),
            
            array (
                'id' => 4062,
                'state_id' => 11,
                'name' => 'Vargem Alegre',
            ),
            
            array (
                'id' => 4063,
                'state_id' => 11,
                'name' => 'Vargem Bonita',
            ),
            
            array (
                'id' => 4064,
                'state_id' => 11,
                'name' => 'Vargem Grande do Rio Pardo',
            ),
            
            array (
                'id' => 4066,
                'state_id' => 11,
                'name' => 'Varginha',
            ),
            
            array (
                'id' => 4067,
                'state_id' => 11,
                'name' => 'Varjão de Minas',
            ),
            
            array (
                'id' => 4068,
                'state_id' => 11,
                'name' => 'Várzea da Palma',
            ),
            
            array (
                'id' => 4069,
                'state_id' => 11,
                'name' => 'Varzelândia',
            ),
            
            array (
                'id' => 4071,
                'state_id' => 11,
                'name' => 'Vazante',
            ),
            
            array (
                'id' => 4073,
                'state_id' => 11,
                'name' => 'Verdelândia',
            ),
            
            array (
                'id' => 4076,
                'state_id' => 11,
                'name' => 'Veredinha',
            ),
            
            array (
                'id' => 4077,
                'state_id' => 11,
                'name' => 'Veríssimo',
            ),
            
            array (
                'id' => 4079,
                'state_id' => 11,
                'name' => 'Vermelho Novo',
            ),
            
            array (
                'id' => 4081,
                'state_id' => 11,
                'name' => 'Vespasiano',
            ),
            
            array (
                'id' => 4082,
                'state_id' => 11,
                'name' => 'Viçosa',
            ),
            
            array (
                'id' => 4083,
                'state_id' => 11,
                'name' => 'Vieiras',
            ),
            
            array (
                'id' => 4090,
                'state_id' => 11,
                'name' => 'Virgem da Lapa',
            ),
            
            array (
                'id' => 4091,
                'state_id' => 11,
                'name' => 'Virgínia',
            ),
            
            array (
                'id' => 4092,
                'state_id' => 11,
                'name' => 'Virginópolis',
            ),
            
            array (
                'id' => 4093,
                'state_id' => 11,
                'name' => 'Virgolândia',
            ),
            
            array (
                'id' => 4094,
                'state_id' => 11,
                'name' => 'Visconde do Rio Branco',
            ),
            
            array (
                'id' => 4098,
                'state_id' => 11,
                'name' => 'Volta Grande',
            ),
            
            array (
                'id' => 4099,
                'state_id' => 11,
                'name' => 'Wenceslau Braz',
            ),
            
            array (
                'id' => 4103,
                'state_id' => 12,
                'name' => 'Água Clara',
            ),
            
            array (
                'id' => 4105,
                'state_id' => 12,
                'name' => 'Alcinópolis',
            ),
            
            array (
                'id' => 4107,
                'state_id' => 12,
                'name' => 'Amambaí',
            ),
            
            array (
                'id' => 4110,
                'state_id' => 12,
                'name' => 'Anastácio',
            ),
            
            array (
                'id' => 4111,
                'state_id' => 12,
                'name' => 'Anaurilândia',
            ),
            
            array (
                'id' => 4112,
                'state_id' => 12,
                'name' => 'Angélica',
            ),
            
            array (
                'id' => 4114,
                'state_id' => 12,
                'name' => 'Antônio João',
            ),
            
            array (
                'id' => 4115,
                'state_id' => 12,
                'name' => 'Aparecida do Taboado',
            ),
            
            array (
                'id' => 4116,
                'state_id' => 12,
                'name' => 'Aquidauana',
            ),
            
            array (
                'id' => 4117,
                'state_id' => 12,
                'name' => 'Aral Moreira',
            ),
            
            array (
                'id' => 4123,
                'state_id' => 12,
                'name' => 'Bandeirantes',
            ),
            
            array (
                'id' => 4124,
                'state_id' => 12,
                'name' => 'Bataguassu',
            ),
            
            array (
                'id' => 4125,
                'state_id' => 12,
                'name' => 'Batayporã',
            ),
            
            array (
                'id' => 4127,
                'state_id' => 12,
                'name' => 'Bela Vista',
            ),
            
            array (
                'id' => 4130,
                'state_id' => 12,
                'name' => 'Bodoquena',
            ),
            
            array (
                'id' => 4132,
                'state_id' => 12,
                'name' => 'Bonito',
            ),
            
            array (
                'id' => 4134,
                'state_id' => 12,
                'name' => 'Brasilândia',
            ),
            
            array (
                'id' => 4135,
                'state_id' => 12,
                'name' => 'Caarapó',
            ),
            
            array (
                'id' => 4138,
                'state_id' => 12,
                'name' => 'Camapuã',
            ),
            
            array (
                'id' => 4141,
                'state_id' => 12,
                'name' => 'Campo Grande',
            ),
            
            array (
                'id' => 4143,
                'state_id' => 12,
                'name' => 'Caracol',
            ),
            
            array (
                'id' => 4145,
                'state_id' => 12,
                'name' => 'Cassilândia',
            ),
            
            array (
                'id' => 4146,
                'state_id' => 12,
                'name' => 'Chapadão do Sul',
            ),
            
            array (
                'id' => 4150,
                'state_id' => 12,
                'name' => 'Corguinho',
            ),
            
            array (
                'id' => 4151,
                'state_id' => 12,
                'name' => 'Coronel Sapucaia',
            ),
            
            array (
                'id' => 4152,
                'state_id' => 12,
                'name' => 'Corumbá',
            ),
            
            array (
                'id' => 4153,
                'state_id' => 12,
                'name' => 'Costa Rica',
            ),
            
            array (
                'id' => 4154,
                'state_id' => 12,
                'name' => 'Coxim',
            ),
            
            array (
                'id' => 4160,
                'state_id' => 12,
                'name' => 'Deodápolis',
            ),
            
            array (
                'id' => 4161,
                'state_id' => 12,
                'name' => 'Dois Irmãos do Buriti',
            ),
            
            array (
                'id' => 4162,
                'state_id' => 12,
                'name' => 'Douradina',
            ),
            
            array (
                'id' => 4163,
                'state_id' => 12,
                'name' => 'Dourados',
            ),
            
            array (
                'id' => 4164,
                'state_id' => 12,
                'name' => 'Eldorado',
            ),
            
            array (
                'id' => 4165,
                'state_id' => 12,
                'name' => 'Fátima do Sul',
            ),
            
            array (
                'id' => 4166,
                'state_id' => 12,
                'name' => 'Figueirão',
            ),
            
            array (
                'id' => 4168,
                'state_id' => 12,
                'name' => 'Glória de Dourados',
            ),
            
            array (
                'id' => 4172,
                'state_id' => 12,
                'name' => 'Guia Lopes da Laguna',
            ),
            
            array (
                'id' => 4173,
                'state_id' => 12,
                'name' => 'Iguatemi',
            ),
            
            array (
                'id' => 4179,
                'state_id' => 12,
                'name' => 'Inocência',
            ),
            
            array (
                'id' => 4182,
                'state_id' => 12,
                'name' => 'Itaporã',
            ),
            
            array (
                'id' => 4183,
                'state_id' => 12,
                'name' => 'Itaquiraí',
            ),
            
            array (
                'id' => 4184,
                'state_id' => 12,
                'name' => 'Ivinhema',
            ),
            
            array (
                'id' => 4187,
                'state_id' => 12,
                'name' => 'Japorã',
            ),
            
            array (
                'id' => 4188,
                'state_id' => 12,
                'name' => 'Jaraguari',
            ),
            
            array (
                'id' => 4189,
                'state_id' => 12,
                'name' => 'Jardim',
            ),
            
            array (
                'id' => 4190,
                'state_id' => 12,
                'name' => 'Jateí',
            ),
            
            array (
                'id' => 4193,
                'state_id' => 12,
                'name' => 'Jutí',
            ),
            
            array (
                'id' => 4194,
                'state_id' => 12,
                'name' => 'Ladário',
            ),
            
            array (
                'id' => 4196,
                'state_id' => 12,
                'name' => 'Laguna Carapã',
            ),
            
            array (
                'id' => 4197,
                'state_id' => 12,
                'name' => 'Maracaju',
            ),
            
            array (
                'id' => 4198,
                'state_id' => 12,
                'name' => 'Miranda',
            ),
            
            array (
                'id' => 4203,
                'state_id' => 12,
                'name' => 'Mundo Novo',
            ),
            
            array (
                'id' => 4204,
                'state_id' => 12,
                'name' => 'Naviraí',
            ),
            
            array (
                'id' => 4206,
                'state_id' => 12,
                'name' => 'Nioaque',
            ),
            
            array (
                'id' => 4208,
                'state_id' => 12,
                'name' => 'Nova Alvorada do Sul',
            ),
            
            array (
                'id' => 4210,
                'state_id' => 12,
                'name' => 'Nova Andradina',
            ),
            
            array (
                'id' => 4214,
                'state_id' => 12,
                'name' => 'Novo Horizonte do Sul',
            ),
            
            array (
                'id' => 4220,
                'state_id' => 12,
                'name' => 'Paranaíba',
            ),
            
            array (
                'id' => 4221,
                'state_id' => 12,
                'name' => 'Paranhos',
            ),
            
            array (
                'id' => 4222,
                'state_id' => 12,
                'name' => 'Pedro Gomes',
            ),
            
            array (
                'id' => 4226,
                'state_id' => 12,
                'name' => 'Ponta Porã',
            ),
            
            array (
                'id' => 4230,
                'state_id' => 12,
                'name' => 'Porto Murtinho',
            ),
            
            array (
                'id' => 4237,
                'state_id' => 12,
                'name' => 'Ribas do Rio Pardo',
            ),
            
            array (
                'id' => 4238,
                'state_id' => 12,
                'name' => 'Rio Brilhante',
            ),
            
            array (
                'id' => 4239,
                'state_id' => 12,
                'name' => 'Rio Negro',
            ),
            
            array (
                'id' => 4240,
                'state_id' => 12,
                'name' => 'Rio Verde de Mato Grosso',
            ),
            
            array (
                'id' => 4242,
                'state_id' => 12,
                'name' => 'Rochedo',
            ),
            
            array (
                'id' => 4244,
                'state_id' => 12,
                'name' => 'Santa Rita do Pardo',
            ),
            
            array (
                'id' => 4246,
                'state_id' => 12,
                'name' => 'São Gabriel do Oeste',
            ),
            
            array (
                'id' => 4253,
                'state_id' => 12,
                'name' => 'Selvíria',
            ),
            
            array (
                'id' => 4254,
                'state_id' => 12,
                'name' => 'Sete Quedas',
            ),
            
            array (
                'id' => 4255,
                'state_id' => 12,
                'name' => 'Sidrolândia',
            ),
            
            array (
                'id' => 4256,
                'state_id' => 12,
                'name' => 'Sonora',
            ),
            
            array (
                'id' => 4257,
                'state_id' => 12,
                'name' => 'Tacuru',
            ),
            
            array (
                'id' => 4260,
                'state_id' => 12,
                'name' => 'Taquarussu',
            ),
            
            array (
                'id' => 4262,
                'state_id' => 12,
                'name' => 'Terenos',
            ),
            
            array (
                'id' => 4263,
                'state_id' => 12,
                'name' => 'Três Lagoas',
            ),
            
            array (
                'id' => 4265,
                'state_id' => 12,
                'name' => 'Vicentina',
            ),
            
            array (
                'id' => 4272,
                'state_id' => 13,
                'name' => 'Acorizal',
            ),
            
            array (
                'id' => 4273,
                'state_id' => 13,
                'name' => 'Água Boa',
            ),
            
            array (
                'id' => 4280,
                'state_id' => 13,
                'name' => 'Alta Floresta',
            ),
            
            array (
                'id' => 4281,
                'state_id' => 13,
                'name' => 'Alto Araguaia',
            ),
            
            array (
                'id' => 4282,
                'state_id' => 13,
                'name' => 'Alto Boa Vista',
            ),
            
            array (
                'id' => 4284,
                'state_id' => 13,
                'name' => 'Alto Garças',
            ),
            
            array (
                'id' => 4286,
                'state_id' => 13,
                'name' => 'Alto Paraguai',
            ),
            
            array (
                'id' => 4288,
                'state_id' => 13,
                'name' => 'Alto Taquari',
            ),
            
            array (
                'id' => 4290,
                'state_id' => 13,
                'name' => 'Apiacás',
            ),
            
            array (
                'id' => 4291,
                'state_id' => 13,
                'name' => 'Araguaiana',
            ),
            
            array (
                'id' => 4292,
                'state_id' => 13,
                'name' => 'Araguainha',
            ),
            
            array (
                'id' => 4293,
                'state_id' => 13,
                'name' => 'Araputanga',
            ),
            
            array (
                'id' => 4294,
                'state_id' => 13,
                'name' => 'Arenápolis',
            ),
            
            array (
                'id' => 4295,
                'state_id' => 13,
                'name' => 'Aripuanã',
            ),
            
            array (
                'id' => 4298,
                'state_id' => 13,
                'name' => 'Barão de Melgaço',
            ),
            
            array (
                'id' => 4299,
                'state_id' => 13,
                'name' => 'Barra do Bugres',
            ),
            
            array (
                'id' => 4300,
                'state_id' => 13,
                'name' => 'Barra do Garças',
            ),
            
            array (
                'id' => 4310,
                'state_id' => 13,
                'name' => 'Brasnorte',
            ),
            
            array (
                'id' => 4313,
                'state_id' => 13,
                'name' => 'Cáceres',
            ),
            
            array (
                'id' => 4315,
                'state_id' => 13,
                'name' => 'Campinápolis',
            ),
            
            array (
                'id' => 4316,
                'state_id' => 13,
                'name' => 'Campo Novo do Parecis',
            ),
            
            array (
                'id' => 4317,
                'state_id' => 13,
                'name' => 'Campo Verde',
            ),
            
            array (
                'id' => 4318,
                'state_id' => 13,
                'name' => 'Campos de Júlio',
            ),
            
            array (
                'id' => 4320,
                'state_id' => 13,
                'name' => 'Canabrava do Norte',
            ),
            
            array (
                'id' => 4321,
                'state_id' => 13,
                'name' => 'Canarana',
            ),
            
            array (
                'id' => 4327,
                'state_id' => 13,
                'name' => 'Carlinda',
            ),
            
            array (
                'id' => 4329,
                'state_id' => 13,
                'name' => 'Castanheira',
            ),
            
            array (
                'id' => 4331,
                'state_id' => 13,
                'name' => 'Chapada dos Guimarães',
            ),
            
            array (
                'id' => 4333,
                'state_id' => 13,
                'name' => 'Cláudia',
            ),
            
            array (
                'id' => 4334,
                'state_id' => 13,
                'name' => 'Cocalinho',
            ),
            
            array (
                'id' => 4335,
                'state_id' => 13,
                'name' => 'Colíder',
            ),
            
            array (
                'id' => 4337,
                'state_id' => 13,
                'name' => 'Comodoro',
            ),
            
            array (
                'id' => 4338,
                'state_id' => 13,
                'name' => 'Confresa',
            ),
            
            array (
                'id' => 4341,
                'state_id' => 13,
                'name' => 'Cotriguaçu',
            ),
            
            array (
                'id' => 4347,
                'state_id' => 13,
                'name' => 'Cuiabá',
            ),
            
            array (
                'id' => 4348,
                'state_id' => 13,
                'name' => 'Curvelândia',
            ),
            
            array (
                'id' => 4350,
                'state_id' => 13,
                'name' => 'Denise',
            ),
            
            array (
                'id' => 4351,
                'state_id' => 13,
                'name' => 'Diamantino',
            ),
            
            array (
                'id' => 4352,
                'state_id' => 13,
                'name' => 'Dom Aquino',
            ),
            
            array (
                'id' => 4359,
                'state_id' => 13,
                'name' => 'Feliz Natal',
            ),
            
            array (
                'id' => 4360,
                'state_id' => 13,
                'name' => 'Figueirópolis D\'Oeste',
            ),
            
            array (
                'id' => 4364,
                'state_id' => 13,
                'name' => 'Gaúcha do Norte',
            ),
            
            array (
                'id' => 4365,
                'state_id' => 13,
                'name' => 'General Carneiro',
            ),
            
            array (
                'id' => 4366,
                'state_id' => 13,
                'name' => 'Glória D\'Oeste',
            ),
            
            array (
                'id' => 4367,
                'state_id' => 13,
                'name' => 'Guarantã do Norte',
            ),
            
            array (
                'id' => 4369,
                'state_id' => 13,
                'name' => 'Guiratinga',
            ),
            
            array (
                'id' => 4372,
                'state_id' => 13,
                'name' => 'Indiavaí',
            ),
            
            array (
                'id' => 4375,
                'state_id' => 13,
                'name' => 'Itaúba',
            ),
            
            array (
                'id' => 4376,
                'state_id' => 13,
                'name' => 'Itiquira',
            ),
            
            array (
                'id' => 4377,
                'state_id' => 13,
                'name' => 'Jaciara',
            ),
            
            array (
                'id' => 4378,
                'state_id' => 13,
                'name' => 'Jangada',
            ),
            
            array (
                'id' => 4381,
                'state_id' => 13,
                'name' => 'Jauru',
            ),
            
            array (
                'id' => 4383,
                'state_id' => 13,
                'name' => 'Juara',
            ),
            
            array (
                'id' => 4384,
                'state_id' => 13,
                'name' => 'Juína',
            ),
            
            array (
                'id' => 4385,
                'state_id' => 13,
                'name' => 'Juruena',
            ),
            
            array (
                'id' => 4386,
                'state_id' => 13,
                'name' => 'Juscimeira',
            ),
            
            array (
                'id' => 4387,
                'state_id' => 13,
                'name' => 'Lambari D\'Oeste',
            ),
            
            array (
                'id' => 4389,
                'state_id' => 13,
                'name' => 'Lucas do Rio Verde',
            ),
            
            array (
                'id' => 4391,
                'state_id' => 13,
                'name' => 'Luciara',
            ),
            
            array (
                'id' => 4393,
                'state_id' => 13,
                'name' => 'Marcelândia',
            ),
            
            array (
                'id' => 4396,
                'state_id' => 13,
                'name' => 'Matupá',
            ),
            
            array (
                'id' => 4398,
                'state_id' => 13,
                'name' => 'Mirassol D\'Oeste',
            ),
            
            array (
                'id' => 4399,
                'state_id' => 13,
                'name' => 'Nobres',
            ),
            
            array (
                'id' => 4401,
                'state_id' => 13,
                'name' => 'Nortelândia',
            ),
            
            array (
                'id' => 4403,
                'state_id' => 13,
                'name' => 'Nossa Senhora do Livramento',
            ),
            
            array (
                'id' => 4405,
                'state_id' => 13,
                'name' => 'Nova Bandeirantes',
            ),
            
            array (
                'id' => 4406,
                'state_id' => 13,
                'name' => 'Nova Brasilândia',
            ),
            
            array (
                'id' => 4408,
                'state_id' => 13,
                'name' => 'Nova Canaã do Norte',
            ),
            
            array (
                'id' => 4411,
                'state_id' => 13,
                'name' => 'Nova Guarita',
            ),
            
            array (
                'id' => 4412,
                'state_id' => 13,
                'name' => 'Nova Lacerda',
            ),
            
            array (
                'id' => 4413,
                'state_id' => 13,
                'name' => 'Nova Marilândia',
            ),
            
            array (
                'id' => 4414,
                'state_id' => 13,
                'name' => 'Nova Maringá',
            ),
            
            array (
                'id' => 4415,
                'state_id' => 13,
                'name' => 'NovaZZZn Monte Verde',
            ),
            
            array (
                'id' => 4416,
                'state_id' => 13,
                'name' => 'Nova Mutum',
            ),
            
            array (
                'id' => 4417,
                'state_id' => 13,
                'name' => 'Nova Olímpia',
            ),
            
            array (
                'id' => 4418,
                'state_id' => 13,
                'name' => 'Nova Ubiratã',
            ),
            
            array (
                'id' => 4419,
                'state_id' => 13,
                'name' => 'Nova Xavantina',
            ),
            
            array (
                'id' => 4422,
                'state_id' => 13,
                'name' => 'Novo Horizonte do Norte',
            ),
            
            array (
                'id' => 4423,
                'state_id' => 13,
                'name' => 'Novo Mundo',
            ),
            
            array (
                'id' => 4425,
                'state_id' => 13,
                'name' => 'Novo São Joaquim',
            ),
            
            array (
                'id' => 4429,
                'state_id' => 13,
                'name' => 'Paranaitá',
            ),
            
            array (
                'id' => 4430,
                'state_id' => 13,
                'name' => 'Paranatinga',
            ),
            
            array (
                'id' => 4432,
                'state_id' => 13,
                'name' => 'Pedra Preta',
            ),
            
            array (
                'id' => 4433,
                'state_id' => 13,
                'name' => 'Peixoto de Azevedo',
            ),
            
            array (
                'id' => 4436,
                'state_id' => 13,
                'name' => 'Planalto da Serra',
            ),
            
            array (
                'id' => 4437,
                'state_id' => 13,
                'name' => 'Poconé',
            ),
            
            array (
                'id' => 4439,
                'state_id' => 13,
                'name' => 'Pontal do Araguaia',
            ),
            
            array (
                'id' => 4440,
                'state_id' => 13,
                'name' => 'Ponte Branca',
            ),
            
            array (
                'id' => 4442,
                'state_id' => 13,
                'name' => 'Pontes e Lacerda',
            ),
            
            array (
                'id' => 4444,
                'state_id' => 13,
                'name' => 'Porto Alegre do Norte',
            ),
            
            array (
                'id' => 4445,
                'state_id' => 13,
                'name' => 'Porto dos Gaúchos',
            ),
            
            array (
                'id' => 4446,
                'state_id' => 13,
                'name' => 'Porto Esperidião',
            ),
            
            array (
                'id' => 4447,
                'state_id' => 13,
                'name' => 'Porto Estrela',
            ),
            
            array (
                'id' => 4448,
                'state_id' => 13,
                'name' => 'Poxoréu',
            ),
            
            array (
                'id' => 4451,
                'state_id' => 13,
                'name' => 'Primavera do Leste',
            ),
            
            array (
                'id' => 4453,
                'state_id' => 13,
                'name' => 'Querência',
            ),
            
            array (
                'id' => 4455,
                'state_id' => 13,
                'name' => 'Reserva do Cabaçal',
            ),
            
            array (
                'id' => 4456,
                'state_id' => 13,
                'name' => 'Ribeirão Cascalheira',
            ),
            
            array (
                'id' => 4458,
                'state_id' => 13,
                'name' => 'Ribeirãozinho',
            ),
            
            array (
                'id' => 4459,
                'state_id' => 13,
                'name' => 'Rio Branco',
            ),
            
            array (
                'id' => 4462,
                'state_id' => 13,
                'name' => 'Rondonópolis',
            ),
            
            array (
                'id' => 4463,
                'state_id' => 13,
                'name' => 'Rosário Oeste',
            ),
            
            array (
                'id' => 4464,
                'state_id' => 13,
                'name' => 'Salto do Céu',
            ),
            
            array (
                'id' => 4466,
                'state_id' => 13,
                'name' => 'Santa Carmem',
            ),
            
            array (
                'id' => 4470,
                'state_id' => 13,
                'name' => 'Santa Terezinha',
            ),
            
            array (
                'id' => 4472,
                'state_id' => 13,
                'name' => 'Santo Afonso',
            ),
            
            array (
                'id' => 4473,
                'state_id' => 13,
                'name' => 'Santo Antônio do Leverger',
            ),
            
            array (
                'id' => 4476,
                'state_id' => 13,
                'name' => 'Vale de São Domingos',
            ),
            
            array (
                'id' => 4477,
                'state_id' => 13,
                'name' => 'São Félix do Araguaia',
            ),
            
            array (
                'id' => 4483,
                'state_id' => 13,
                'name' => 'São José do Povo',
            ),
            
            array (
                'id' => 4484,
                'state_id' => 13,
                'name' => 'São José do Rio Claro',
            ),
            
            array (
                'id' => 4485,
                'state_id' => 13,
                'name' => 'São José do Xingu',
            ),
            
            array (
                'id' => 4486,
                'state_id' => 13,
                'name' => 'São José dos Quatro Marcos',
            ),
            
            array (
                'id' => 4488,
                'state_id' => 13,
                'name' => 'São Pedro da Cipa',
            ),
            
            array (
                'id' => 4490,
                'state_id' => 13,
                'name' => 'Sapezal',
            ),
            
            array (
                'id' => 4492,
                'state_id' => 13,
                'name' => 'Serra Nova Dourada',
            ),
            
            array (
                'id' => 4493,
                'state_id' => 13,
                'name' => 'Sinop',
            ),
            
            array (
                'id' => 4495,
                'state_id' => 13,
                'name' => 'Sorriso',
            ),
            
            array (
                'id' => 4497,
                'state_id' => 13,
                'name' => 'Tabaporã',
            ),
            
            array (
                'id' => 4498,
                'state_id' => 13,
                'name' => 'Tangará da Serra',
            ),
            
            array (
                'id' => 4500,
                'state_id' => 13,
                'name' => 'Tapurah',
            ),
            
            array (
                'id' => 4501,
                'state_id' => 13,
                'name' => 'Terra Nova do Norte',
            ),
            
            array (
                'id' => 4503,
                'state_id' => 13,
                'name' => 'Tesouro',
            ),
            
            array (
                'id' => 4505,
                'state_id' => 13,
                'name' => 'Torixoréu',
            ),
            
            array (
                'id' => 4507,
                'state_id' => 13,
                'name' => 'União do Sul',
            ),
            
            array (
                'id' => 4511,
                'state_id' => 13,
                'name' => 'Várzea Grande',
            ),
            
            array (
                'id' => 4512,
                'state_id' => 13,
                'name' => 'Vera',
            ),
            
            array (
                'id' => 4514,
                'state_id' => 13,
                'name' => 'Vila Bela da Santíssima Trindade',
            ),
            
            array (
                'id' => 4520,
                'state_id' => 13,
                'name' => 'Vila Rica',
            ),
            
            array (
                'id' => 4521,
                'state_id' => 13,
                'name' => 'Novo Santo Antônio',
            ),
            
            array (
                'id' => 4522,
                'state_id' => 14,
                'name' => 'Abaetetuba',
            ),
            
            array (
                'id' => 4523,
                'state_id' => 14,
                'name' => 'Abel Figueiredo',
            ),
            
            array (
                'id' => 4524,
                'state_id' => 14,
                'name' => 'Acará',
            ),
            
            array (
                'id' => 4525,
                'state_id' => 14,
                'name' => 'Afuá',
            ),
            
            array (
                'id' => 4527,
                'state_id' => 14,
                'name' => 'Água Azul do Norte',
            ),
            
            array (
                'id' => 4529,
                'state_id' => 14,
                'name' => 'Alenquer',
            ),
            
            array (
                'id' => 4531,
                'state_id' => 14,
                'name' => 'Almeirim',
            ),
            
            array (
                'id' => 4534,
                'state_id' => 14,
                'name' => 'Altamira',
            ),
            
            array (
                'id' => 4538,
                'state_id' => 14,
                'name' => 'Anajás',
            ),
            
            array (
                'id' => 4539,
                'state_id' => 14,
                'name' => 'Ananindeua',
            ),
            
            array (
                'id' => 4540,
                'state_id' => 14,
                'name' => 'Anapu',
            ),
            
            array (
                'id' => 4552,
                'state_id' => 14,
                'name' => 'Augusto Corrêa',
            ),
            
            array (
                'id' => 4553,
                'state_id' => 14,
                'name' => 'Aurora do Pará',
            ),
            
            array (
                'id' => 4554,
                'state_id' => 14,
                'name' => 'Aveiro',
            ),
            
            array (
                'id' => 4555,
                'state_id' => 14,
                'name' => 'Bagre',
            ),
            
            array (
                'id' => 4556,
                'state_id' => 14,
                'name' => 'Baião',
            ),
            
            array (
                'id' => 4557,
                'state_id' => 14,
                'name' => 'Bannach',
            ),
            
            array (
                'id' => 4558,
                'state_id' => 14,
                'name' => 'Barcarena',
            ),
            
            array (
                'id' => 4565,
                'state_id' => 14,
                'name' => 'Belém',
            ),
            
            array (
                'id' => 4566,
                'state_id' => 14,
                'name' => 'Belterra',
            ),
            
            array (
                'id' => 4567,
                'state_id' => 14,
                'name' => 'Benevides',
            ),
            
            array (
                'id' => 4576,
                'state_id' => 14,
                'name' => 'Bom Jesus do Tocantins',
            ),
            
            array (
                'id' => 4577,
                'state_id' => 14,
                'name' => 'Bonito',
            ),
            
            array (
                'id' => 4578,
                'state_id' => 14,
                'name' => 'Bragança',
            ),
            
            array (
                'id' => 4579,
                'state_id' => 14,
                'name' => 'Brasil Novo',
            ),
            
            array (
                'id' => 4582,
                'state_id' => 14,
                'name' => 'Brejo Grande do Araguaia',
            ),
            
            array (
                'id' => 4583,
                'state_id' => 14,
                'name' => 'Breu Branco',
            ),
            
            array (
                'id' => 4584,
                'state_id' => 14,
                'name' => 'Breves',
            ),
            
            array (
                'id' => 4585,
                'state_id' => 14,
                'name' => 'Bujaru',
            ),
            
            array (
                'id' => 4586,
                'state_id' => 14,
                'name' => 'Cachoeira do Piriá',
            ),
            
            array (
                'id' => 4587,
                'state_id' => 14,
                'name' => 'Cachoeira do Arari',
            ),
            
            array (
                'id' => 4593,
                'state_id' => 14,
                'name' => 'Cametá',
            ),
            
            array (
                'id' => 4595,
                'state_id' => 14,
                'name' => 'Canaã dos Carajás',
            ),
            
            array (
                'id' => 4596,
                'state_id' => 14,
                'name' => 'Capanema',
            ),
            
            array (
                'id' => 4597,
                'state_id' => 14,
                'name' => 'Capitão Poço',
            ),
            
            array (
                'id' => 4605,
                'state_id' => 14,
                'name' => 'Castanhal',
            ),
            
            array (
                'id' => 4607,
                'state_id' => 14,
                'name' => 'Chaves',
            ),
            
            array (
                'id' => 4608,
                'state_id' => 14,
                'name' => 'Colares',
            ),
            
            array (
                'id' => 4610,
                'state_id' => 14,
                'name' => 'Conceição do Araguaia',
            ),
            
            array (
                'id' => 4611,
                'state_id' => 14,
                'name' => 'Concórdia do Pará',
            ),
            
            array (
                'id' => 4617,
                'state_id' => 14,
                'name' => 'Cumaru do Norte',
            ),
            
            array (
                'id' => 4618,
                'state_id' => 14,
                'name' => 'Curionópolis',
            ),
            
            array (
                'id' => 4619,
                'state_id' => 14,
                'name' => 'Curralinho',
            ),
            
            array (
                'id' => 4620,
                'state_id' => 14,
                'name' => 'Curuá',
            ),
            
            array (
                'id' => 4622,
                'state_id' => 14,
                'name' => 'Curuçá',
            ),
            
            array (
                'id' => 4625,
                'state_id' => 14,
                'name' => 'Dom Eliseu',
            ),
            
            array (
                'id' => 4626,
                'state_id' => 14,
                'name' => 'Eldorado dos Carajás',
            ),
            
            array (
                'id' => 4629,
                'state_id' => 14,
                'name' => 'Faro',
            ),
            
            array (
                'id' => 4633,
                'state_id' => 14,
                'name' => 'Floresta do Araguaia',
            ),
            
            array (
                'id' => 4634,
                'state_id' => 14,
                'name' => 'Garrafão do Norte',
            ),
            
            array (
                'id' => 4635,
                'state_id' => 14,
                'name' => 'Goianésia do Pará',
            ),
            
            array (
                'id' => 4639,
                'state_id' => 14,
                'name' => 'Gurupá',
            ),
            
            array (
                'id' => 4645,
                'state_id' => 14,
                'name' => 'Igarapé-Açu',
            ),
            
            array (
                'id' => 4646,
                'state_id' => 14,
                'name' => 'Igarapé-Miri',
            ),
            
            array (
                'id' => 4648,
                'state_id' => 14,
                'name' => 'Inhangapi',
            ),
            
            array (
                'id' => 4649,
                'state_id' => 14,
                'name' => 'Ipixuna do Pará',
            ),
            
            array (
                'id' => 4650,
                'state_id' => 14,
                'name' => 'Irituia',
            ),
            
            array (
                'id' => 4651,
                'state_id' => 14,
                'name' => 'Itaituba',
            ),
            
            array (
                'id' => 4654,
                'state_id' => 14,
                'name' => 'Itupiranga',
            ),
            
            array (
                'id' => 4655,
                'state_id' => 14,
                'name' => 'Jacareacanga',
            ),
            
            array (
                'id' => 4656,
                'state_id' => 14,
                'name' => 'Jacundá',
            ),
            
            array (
                'id' => 4667,
                'state_id' => 14,
                'name' => 'Juruti',
            ),
            
            array (
                'id' => 4672,
                'state_id' => 14,
                'name' => 'Limoeiro do Ajuru',
            ),
            
            array (
                'id' => 4673,
                'state_id' => 14,
                'name' => 'Mãe do Rio',
            ),
            
            array (
                'id' => 4674,
                'state_id' => 14,
                'name' => 'Magalhães Barata',
            ),
            
            array (
                'id' => 4677,
                'state_id' => 14,
                'name' => 'Marabá',
            ),
            
            array (
                'id' => 4678,
                'state_id' => 14,
                'name' => 'Maracanã',
            ),
            
            array (
                'id' => 4680,
                'state_id' => 14,
                'name' => 'Marapanim',
            ),
            
            array (
                'id' => 4681,
                'state_id' => 14,
                'name' => 'Marituba',
            ),
            
            array (
                'id' => 4685,
                'state_id' => 14,
                'name' => 'Medicilândia',
            ),
            
            array (
                'id' => 4686,
                'state_id' => 14,
                'name' => 'Melgaço',
            ),
            
            array (
                'id' => 4691,
                'state_id' => 14,
                'name' => 'Mocajuba',
            ),
            
            array (
                'id' => 4693,
                'state_id' => 14,
                'name' => 'Moju',
            ),
            
            array (
                'id' => 4695,
                'state_id' => 14,
                'name' => 'Monte Alegre',
            ),
            
            array (
                'id' => 4700,
                'state_id' => 14,
                'name' => 'Muaná',
            ),
            
            array (
                'id' => 4709,
                'state_id' => 14,
                'name' => 'Nova Esperança do Piriá',
            ),
            
            array (
                'id' => 4710,
                'state_id' => 14,
                'name' => 'Nova Ipixuna',
            ),
            
            array (
                'id' => 4712,
                'state_id' => 14,
                'name' => 'Nova Timboteua',
            ),
            
            array (
                'id' => 4714,
                'state_id' => 14,
                'name' => 'Novo Progresso',
            ),
            
            array (
                'id' => 4715,
                'state_id' => 14,
                'name' => 'Novo Repartimento',
            ),
            
            array (
                'id' => 4717,
                'state_id' => 14,
                'name' => 'Óbidos',
            ),
            
            array (
                'id' => 4718,
                'state_id' => 14,
                'name' => 'Oeiras do Pará',
            ),
            
            array (
                'id' => 4719,
                'state_id' => 14,
                'name' => 'Oriximiná',
            ),
            
            array (
                'id' => 4722,
                'state_id' => 14,
                'name' => 'Ourém',
            ),
            
            array (
                'id' => 4723,
                'state_id' => 14,
                'name' => 'Ourilândia do Norte',
            ),
            
            array (
                'id' => 4725,
                'state_id' => 14,
                'name' => 'Pacajá',
            ),
            
            array (
                'id' => 4727,
                'state_id' => 14,
                'name' => 'Palestina do Pará',
            ),
            
            array (
                'id' => 4728,
                'state_id' => 14,
                'name' => 'Paragominas',
            ),
            
            array (
                'id' => 4730,
                'state_id' => 14,
                'name' => 'Parauapebas',
            ),
            
            array (
                'id' => 4731,
                'state_id' => 14,
                'name' => 'Pau D\'Arco',
            ),
            
            array (
                'id' => 4733,
                'state_id' => 14,
                'name' => 'Peixe-Boi',
            ),
            
            array (
                'id' => 4738,
                'state_id' => 14,
                'name' => 'Piçarra',
            ),
            
            array (
                'id' => 4743,
                'state_id' => 14,
                'name' => 'Placas',
            ),
            
            array (
                'id' => 4744,
                'state_id' => 14,
                'name' => 'Ponta de Pedras',
            ),
            
            array (
                'id' => 4746,
                'state_id' => 14,
                'name' => 'Portel',
            ),
            
            array (
                'id' => 4747,
                'state_id' => 14,
                'name' => 'Porto de Moz',
            ),
            
            array (
                'id' => 4750,
                'state_id' => 14,
                'name' => 'Prainha',
            ),
            
            array (
                'id' => 4751,
                'state_id' => 14,
                'name' => 'Primavera',
            ),
            
            array (
                'id' => 4752,
                'state_id' => 14,
                'name' => 'Quatipuru',
            ),
            
            array (
                'id' => 4754,
                'state_id' => 14,
                'name' => 'Redenção',
            ),
            
            array (
                'id' => 4757,
                'state_id' => 14,
                'name' => 'Rio Maria',
            ),
            
            array (
                'id' => 4760,
                'state_id' => 14,
                'name' => 'Rondon do Pará',
            ),
            
            array (
                'id' => 4761,
                'state_id' => 14,
                'name' => 'Rurópolis',
            ),
            
            array (
                'id' => 4762,
                'state_id' => 14,
                'name' => 'Salinópolis',
            ),
            
            array (
                'id' => 4763,
                'state_id' => 14,
                'name' => 'Salvaterra',
            ),
            
            array (
                'id' => 4764,
                'state_id' => 14,
                'name' => 'Santa Bárbara do Pará',
            ),
            
            array (
                'id' => 4765,
                'state_id' => 14,
                'name' => 'Santa Cruz do Arari',
            ),
            
            array (
                'id' => 4766,
                'state_id' => 14,
                'name' => 'Santa Isabel do Pará',
            ),
            
            array (
                'id' => 4767,
                'state_id' => 14,
                'name' => 'Santa Luzia do Pará',
            ),
            
            array (
                'id' => 4769,
                'state_id' => 14,
                'name' => 'Santa Maria das Barreiras',
            ),
            
            array (
                'id' => 4770,
                'state_id' => 14,
                'name' => 'Santa Maria do Pará',
            ),
            
            array (
                'id' => 4773,
                'state_id' => 14,
                'name' => 'Santana do Araguaia',
            ),
            
            array (
                'id' => 4774,
                'state_id' => 14,
                'name' => 'Santarém',
            ),
            
            array (
                'id' => 4775,
                'state_id' => 14,
                'name' => 'Santarém Novo',
            ),
            
            array (
                'id' => 4777,
                'state_id' => 14,
                'name' => 'Santo Antônio do Tauá',
            ),
            
            array (
                'id' => 4778,
                'state_id' => 14,
                'name' => 'São Caetano de Odivelas',
            ),
            
            array (
                'id' => 4779,
                'state_id' => 14,
                'name' => 'São Domingos do Araguaia',
            ),
            
            array (
                'id' => 4780,
                'state_id' => 14,
                'name' => 'São Domingos do Capim',
            ),
            
            array (
                'id' => 4781,
                'state_id' => 14,
                'name' => 'São Félix do Xingu',
            ),
            
            array (
                'id' => 4784,
                'state_id' => 14,
                'name' => 'São Francisco do Pará',
            ),
            
            array (
                'id' => 4785,
                'state_id' => 14,
                'name' => 'São Geraldo do Araguaia',
            ),
            
            array (
                'id' => 4786,
                'state_id' => 14,
                'name' => 'São João da Ponta',
            ),
            
            array (
                'id' => 4787,
                'state_id' => 14,
                'name' => 'São João de Pirabas',
            ),
            
            array (
                'id' => 4789,
                'state_id' => 14,
                'name' => 'São João do Araguaia',
            ),
            
            array (
                'id' => 4797,
                'state_id' => 14,
                'name' => 'São Miguel do Guamá',
            ),
            
            array (
                'id' => 4805,
                'state_id' => 14,
                'name' => 'São Sebastião da Boa Vista',
            ),
            
            array (
                'id' => 4807,
                'state_id' => 14,
                'name' => 'Sapucaia',
            ),
            
            array (
                'id' => 4808,
                'state_id' => 14,
                'name' => 'Senador José Porfírio',
            ),
            
            array (
                'id' => 4810,
                'state_id' => 14,
                'name' => 'Soure',
            ),
            
            array (
                'id' => 4811,
                'state_id' => 14,
                'name' => 'Tailândia',
            ),
            
            array (
                'id' => 4816,
                'state_id' => 14,
                'name' => 'TerraZZZn Alta',
            ),
            
            array (
                'id' => 4817,
                'state_id' => 14,
                'name' => 'Terra Santa',
            ),
            
            array (
                'id' => 4820,
                'state_id' => 14,
                'name' => 'Tomé-Açú',
            ),
            
            array (
                'id' => 4821,
                'state_id' => 14,
                'name' => 'Tracuateua',
            ),
            
            array (
                'id' => 4822,
                'state_id' => 14,
                'name' => 'Trairão',
            ),
            
            array (
                'id' => 4823,
                'state_id' => 14,
                'name' => 'Tucumã',
            ),
            
            array (
                'id' => 4824,
                'state_id' => 14,
                'name' => 'Tucuruí',
            ),
            
            array (
                'id' => 4825,
                'state_id' => 14,
                'name' => 'Ulianópolis',
            ),
            
            array (
                'id' => 4826,
                'state_id' => 14,
                'name' => 'Uruará',
            ),
            
            array (
                'id' => 4831,
                'state_id' => 14,
                'name' => 'Vigia',
            ),
            
            array (
                'id' => 4842,
                'state_id' => 14,
                'name' => 'Viseu',
            ),
            
            array (
                'id' => 4845,
                'state_id' => 14,
                'name' => 'Vitória do Xingu',
            ),
            
            array (
                'id' => 4846,
                'state_id' => 14,
                'name' => 'Xinguara',
            ),
            
            array (
                'id' => 4848,
                'state_id' => 15,
                'name' => 'Água Branca',
            ),
            
            array (
                'id' => 4849,
                'state_id' => 15,
                'name' => 'Aguiar',
            ),
            
            array (
                'id' => 4850,
                'state_id' => 15,
                'name' => 'Alagoa Grande',
            ),
            
            array (
                'id' => 4851,
                'state_id' => 15,
                'name' => 'Alagoa Nova',
            ),
            
            array (
                'id' => 4852,
                'state_id' => 15,
                'name' => 'Alagoinha',
            ),
            
            array (
                'id' => 4853,
                'state_id' => 15,
                'name' => 'Alcantil',
            ),
            
            array (
                'id' => 4854,
                'state_id' => 15,
                'name' => 'Algodão de Jandaíra',
            ),
            
            array (
                'id' => 4855,
                'state_id' => 15,
                'name' => 'Alhandra',
            ),
            
            array (
                'id' => 4856,
                'state_id' => 15,
                'name' => 'Amparo',
            ),
            
            array (
                'id' => 4857,
                'state_id' => 15,
                'name' => 'Aparecida',
            ),
            
            array (
                'id' => 4858,
                'state_id' => 15,
                'name' => 'Araçagi',
            ),
            
            array (
                'id' => 4859,
                'state_id' => 15,
                'name' => 'Arara',
            ),
            
            array (
                'id' => 4860,
                'state_id' => 15,
                'name' => 'Araruna',
            ),
            
            array (
                'id' => 4861,
                'state_id' => 15,
                'name' => 'Areia',
            ),
            
            array (
                'id' => 4862,
                'state_id' => 15,
                'name' => 'Areia de Baraúnas',
            ),
            
            array (
                'id' => 4863,
                'state_id' => 15,
                'name' => 'Areial',
            ),
            
            array (
                'id' => 4865,
                'state_id' => 15,
                'name' => 'Aroeiras',
            ),
            
            array (
                'id' => 4866,
                'state_id' => 15,
                'name' => 'Riachão do Bacamarte',
            ),
            
            array (
                'id' => 4867,
                'state_id' => 15,
                'name' => 'Assunção',
            ),
            
            array (
                'id' => 4868,
                'state_id' => 15,
                'name' => 'Baía da Traição',
            ),
            
            array (
                'id' => 4870,
                'state_id' => 15,
                'name' => 'Bananeiras',
            ),
            
            array (
                'id' => 4871,
                'state_id' => 15,
                'name' => 'Baraúna',
            ),
            
            array (
                'id' => 4872,
                'state_id' => 15,
                'name' => 'Barra de Santa Rosa',
            ),
            
            array (
                'id' => 4873,
                'state_id' => 15,
                'name' => 'Barra de Santana',
            ),
            
            array (
                'id' => 4874,
                'state_id' => 15,
                'name' => 'Barra de São Miguel',
            ),
            
            array (
                'id' => 4876,
                'state_id' => 15,
                'name' => 'Bayeux',
            ),
            
            array (
                'id' => 4877,
                'state_id' => 15,
                'name' => 'Belém',
            ),
            
            array (
                'id' => 4878,
                'state_id' => 15,
                'name' => 'Belém do Brejo do Cruz',
            ),
            
            array (
                'id' => 4879,
                'state_id' => 15,
                'name' => 'Bernardino Batista',
            ),
            
            array (
                'id' => 4880,
                'state_id' => 15,
                'name' => 'Boa Ventura',
            ),
            
            array (
                'id' => 4881,
                'state_id' => 15,
                'name' => 'Boa Vista',
            ),
            
            array (
                'id' => 4882,
                'state_id' => 15,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 4883,
                'state_id' => 15,
                'name' => 'Bom Sucesso',
            ),
            
            array (
                'id' => 4885,
                'state_id' => 15,
                'name' => 'Bonito de Santa Fé',
            ),
            
            array (
                'id' => 4886,
                'state_id' => 15,
                'name' => 'Boqueirão',
            ),
            
            array (
                'id' => 4887,
                'state_id' => 15,
                'name' => 'Borborema',
            ),
            
            array (
                'id' => 4888,
                'state_id' => 15,
                'name' => 'Brejo do Cruz',
            ),
            
            array (
                'id' => 4889,
                'state_id' => 15,
                'name' => 'Brejo dos Santos',
            ),
            
            array (
                'id' => 4890,
                'state_id' => 15,
                'name' => 'Caaporã',
            ),
            
            array (
                'id' => 4891,
                'state_id' => 15,
                'name' => 'Cabaceiras',
            ),
            
            array (
                'id' => 4892,
                'state_id' => 15,
                'name' => 'Cabedelo',
            ),
            
            array (
                'id' => 4894,
                'state_id' => 15,
                'name' => 'Cachoeira dos Índios',
            ),
            
            array (
                'id' => 4896,
                'state_id' => 15,
                'name' => 'Cacimba de Areia',
            ),
            
            array (
                'id' => 4897,
                'state_id' => 15,
                'name' => 'Cacimba de Dentro',
            ),
            
            array (
                'id' => 4898,
                'state_id' => 15,
                'name' => 'Cacimbas',
            ),
            
            array (
                'id' => 4899,
                'state_id' => 15,
                'name' => 'Caiçara',
            ),
            
            array (
                'id' => 4900,
                'state_id' => 15,
                'name' => 'Cajazeiras',
            ),
            
            array (
                'id' => 4901,
                'state_id' => 15,
                'name' => 'Cajazeirinhas',
            ),
            
            array (
                'id' => 4902,
                'state_id' => 15,
                'name' => 'Caldas Brandão',
            ),
            
            array (
                'id' => 4903,
                'state_id' => 15,
                'name' => 'Camalaú',
            ),
            
            array (
                'id' => 4904,
                'state_id' => 15,
                'name' => 'Campina Grande',
            ),
            
            array (
                'id' => 4908,
                'state_id' => 15,
                'name' => 'Capim',
            ),
            
            array (
                'id' => 4909,
                'state_id' => 15,
                'name' => 'Caraúbas',
            ),
            
            array (
                'id' => 4911,
                'state_id' => 15,
                'name' => 'Carrapateira',
            ),
            
            array (
                'id' => 4913,
                'state_id' => 15,
                'name' => 'Casserengue',
            ),
            
            array (
                'id' => 4914,
                'state_id' => 15,
                'name' => 'Catingueira',
            ),
            
            array (
                'id' => 4916,
                'state_id' => 15,
                'name' => 'Catolé do Rocha',
            ),
            
            array (
                'id' => 4917,
                'state_id' => 15,
                'name' => 'Caturité',
            ),
            
            array (
                'id' => 4919,
                'state_id' => 15,
                'name' => 'Conceição',
            ),
            
            array (
                'id' => 4920,
                'state_id' => 15,
                'name' => 'Condado',
            ),
            
            array (
                'id' => 4921,
                'state_id' => 15,
                'name' => 'Conde',
            ),
            
            array (
                'id' => 4922,
                'state_id' => 15,
                'name' => 'Congo',
            ),
            
            array (
                'id' => 4923,
                'state_id' => 15,
                'name' => 'Coremas',
            ),
            
            array (
                'id' => 4925,
                'state_id' => 15,
                'name' => 'Coxixola',
            ),
            
            array (
                'id' => 4926,
                'state_id' => 15,
                'name' => 'Cruz do Espírito Santo',
            ),
            
            array (
                'id' => 4927,
                'state_id' => 15,
                'name' => 'Cubati',
            ),
            
            array (
                'id' => 4928,
                'state_id' => 15,
                'name' => 'Cuité',
            ),
            
            array (
                'id' => 4929,
                'state_id' => 15,
                'name' => 'Cuité de Mamanguape',
            ),
            
            array (
                'id' => 4930,
                'state_id' => 15,
                'name' => 'Cuitegi',
            ),
            
            array (
                'id' => 4932,
                'state_id' => 15,
                'name' => 'Curral de Cima',
            ),
            
            array (
                'id' => 4933,
                'state_id' => 15,
                'name' => 'Curral Velho',
            ),
            
            array (
                'id' => 4934,
                'state_id' => 15,
                'name' => 'Damião',
            ),
            
            array (
                'id' => 4935,
                'state_id' => 15,
                'name' => 'Desterro',
            ),
            
            array (
                'id' => 4936,
                'state_id' => 15,
                'name' => 'Diamante',
            ),
            
            array (
                'id' => 4937,
                'state_id' => 15,
                'name' => 'Dona Inês',
            ),
            
            array (
                'id' => 4938,
                'state_id' => 15,
                'name' => 'Duas Estradas',
            ),
            
            array (
                'id' => 4939,
                'state_id' => 15,
                'name' => 'Emas',
            ),
            
            array (
                'id' => 4941,
                'state_id' => 15,
                'name' => 'Esperança',
            ),
            
            array (
                'id' => 4942,
                'state_id' => 15,
                'name' => 'Fagundes',
            ),
            
            array (
                'id' => 4946,
                'state_id' => 15,
                'name' => 'Frei Martinho',
            ),
            
            array (
                'id' => 4947,
                'state_id' => 15,
                'name' => 'Gado Bravo',
            ),
            
            array (
                'id' => 4949,
                'state_id' => 15,
                'name' => 'Guarabira',
            ),
            
            array (
                'id' => 4951,
                'state_id' => 15,
                'name' => 'Gurinhém',
            ),
            
            array (
                'id' => 4952,
                'state_id' => 15,
                'name' => 'Gurjão',
            ),
            
            array (
                'id' => 4953,
                'state_id' => 15,
                'name' => 'Ibiara',
            ),
            
            array (
                'id' => 4954,
                'state_id' => 15,
                'name' => 'Igaracy',
            ),
            
            array (
                'id' => 4955,
                'state_id' => 15,
                'name' => 'Imaculada',
            ),
            
            array (
                'id' => 4956,
                'state_id' => 15,
                'name' => 'Ingá',
            ),
            
            array (
                'id' => 4957,
                'state_id' => 15,
                'name' => 'Itabaiana',
            ),
            
            array (
                'id' => 4959,
                'state_id' => 15,
                'name' => 'Itaporanga',
            ),
            
            array (
                'id' => 4960,
                'state_id' => 15,
                'name' => 'Itapororoca',
            ),
            
            array (
                'id' => 4961,
                'state_id' => 15,
                'name' => 'Itatuba',
            ),
            
            array (
                'id' => 4962,
                'state_id' => 15,
                'name' => 'Jacaraú',
            ),
            
            array (
                'id' => 4963,
                'state_id' => 15,
                'name' => 'Jericó',
            ),
            
            array (
                'id' => 4964,
                'state_id' => 15,
                'name' => 'João Pessoa',
            ),
            
            array (
                'id' => 4965,
                'state_id' => 15,
                'name' => 'Juarez Távora',
            ),
            
            array (
                'id' => 4966,
                'state_id' => 15,
                'name' => 'Juazeirinho',
            ),
            
            array (
                'id' => 4967,
                'state_id' => 15,
                'name' => 'Junco do Seridó',
            ),
            
            array (
                'id' => 4968,
                'state_id' => 15,
                'name' => 'Juripiranga',
            ),
            
            array (
                'id' => 4969,
                'state_id' => 15,
                'name' => 'Juru',
            ),
            
            array (
                'id' => 4970,
                'state_id' => 15,
                'name' => 'Lagoa',
            ),
            
            array (
                'id' => 4971,
                'state_id' => 15,
                'name' => 'Lagoa de Dentro',
            ),
            
            array (
                'id' => 4973,
                'state_id' => 15,
                'name' => 'Lagoa Seca',
            ),
            
            array (
                'id' => 4974,
                'state_id' => 15,
                'name' => 'Lastro',
            ),
            
            array (
                'id' => 4976,
                'state_id' => 15,
                'name' => 'Livramento',
            ),
            
            array (
                'id' => 4977,
                'state_id' => 15,
                'name' => 'Logradouro',
            ),
            
            array (
                'id' => 4978,
                'state_id' => 15,
                'name' => 'Lucena',
            ),
            
            array (
                'id' => 4979,
                'state_id' => 15,
                'name' => 'Mãe D\'Água',
            ),
            
            array (
                'id' => 4981,
                'state_id' => 15,
                'name' => 'Malta',
            ),
            
            array (
                'id' => 4982,
                'state_id' => 15,
                'name' => 'Mamanguape',
            ),
            
            array (
                'id' => 4983,
                'state_id' => 15,
                'name' => 'Manaíra',
            ),
            
            array (
                'id' => 4984,
                'state_id' => 15,
                'name' => 'Marcação',
            ),
            
            array (
                'id' => 4985,
                'state_id' => 15,
                'name' => 'Mari',
            ),
            
            array (
                'id' => 4986,
                'state_id' => 15,
                'name' => 'Marizópolis',
            ),
            
            array (
                'id' => 4987,
                'state_id' => 15,
                'name' => 'Massaranduba',
            ),
            
            array (
                'id' => 4990,
                'state_id' => 15,
                'name' => 'Mataraca',
            ),
            
            array (
                'id' => 4991,
                'state_id' => 15,
                'name' => 'Matinhas',
            ),
            
            array (
                'id' => 4992,
                'state_id' => 15,
                'name' => 'Mato Grosso',
            ),
            
            array (
                'id' => 4993,
                'state_id' => 15,
                'name' => 'Maturéia',
            ),
            
            array (
                'id' => 4995,
                'state_id' => 15,
                'name' => 'Mogeiro',
            ),
            
            array (
                'id' => 4996,
                'state_id' => 15,
                'name' => 'Montadas',
            ),
            
            array (
                'id' => 4997,
                'state_id' => 15,
                'name' => 'Monte Horebe',
            ),
            
            array (
                'id' => 4998,
                'state_id' => 15,
                'name' => 'Monteiro',
            ),
            
            array (
                'id' => 5000,
                'state_id' => 15,
                'name' => 'Mulungu',
            ),
            
            array (
                'id' => 5002,
                'state_id' => 15,
                'name' => 'Natuba',
            ),
            
            array (
                'id' => 5004,
                'state_id' => 15,
                'name' => 'Nazarezinho',
            ),
            
            array (
                'id' => 5006,
                'state_id' => 15,
                'name' => 'Nova Floresta',
            ),
            
            array (
                'id' => 5007,
                'state_id' => 15,
                'name' => 'Nova Olinda',
            ),
            
            array (
                'id' => 5008,
                'state_id' => 15,
                'name' => 'Nova Palmeira',
            ),
            
            array (
                'id' => 5012,
                'state_id' => 15,
                'name' => 'Olho D\'Água',
            ),
            
            array (
                'id' => 5013,
                'state_id' => 15,
                'name' => 'Olivedos',
            ),
            
            array (
                'id' => 5014,
                'state_id' => 15,
                'name' => 'Ouro Velho',
            ),
            
            array (
                'id' => 5015,
                'state_id' => 15,
                'name' => 'Parari',
            ),
            
            array (
                'id' => 5016,
                'state_id' => 15,
                'name' => 'Passagem',
            ),
            
            array (
                'id' => 5017,
                'state_id' => 15,
                'name' => 'Patos',
            ),
            
            array (
                'id' => 5018,
                'state_id' => 15,
                'name' => 'Paulista',
            ),
            
            array (
                'id' => 5019,
                'state_id' => 15,
                'name' => 'Pedra Branca',
            ),
            
            array (
                'id' => 5020,
                'state_id' => 15,
                'name' => 'Pedra Lavrada',
            ),
            
            array (
                'id' => 5021,
                'state_id' => 15,
                'name' => 'Pedras de Fogo',
            ),
            
            array (
                'id' => 5022,
                'state_id' => 15,
                'name' => 'Pedro Régis',
            ),
            
            array (
                'id' => 5025,
                'state_id' => 15,
                'name' => 'Piancó',
            ),
            
            array (
                'id' => 5026,
                'state_id' => 15,
                'name' => 'Picuí',
            ),
            
            array (
                'id' => 5027,
                'state_id' => 15,
                'name' => 'Pilar',
            ),
            
            array (
                'id' => 5028,
                'state_id' => 15,
                'name' => 'Pilões',
            ),
            
            array (
                'id' => 5029,
                'state_id' => 15,
                'name' => 'Pilõezinhos',
            ),
            
            array (
                'id' => 5033,
                'state_id' => 15,
                'name' => 'Pirpirituba',
            ),
            
            array (
                'id' => 5035,
                'state_id' => 15,
                'name' => 'Pitimbu',
            ),
            
            array (
                'id' => 5036,
                'state_id' => 15,
                'name' => 'Pocinhos',
            ),
            
            array (
                'id' => 5037,
                'state_id' => 15,
                'name' => 'Poço Dantas',
            ),
            
            array (
                'id' => 5038,
                'state_id' => 15,
                'name' => 'Poço de José de Moura',
            ),
            
            array (
                'id' => 5039,
                'state_id' => 15,
                'name' => 'Pombal',
            ),
            
            array (
                'id' => 5041,
                'state_id' => 15,
                'name' => 'Prata',
            ),
            
            array (
                'id' => 5042,
                'state_id' => 15,
                'name' => 'Princesa Isabel',
            ),
            
            array (
                'id' => 5043,
                'state_id' => 15,
                'name' => 'Puxinanã',
            ),
            
            array (
                'id' => 5044,
                'state_id' => 15,
                'name' => 'Queimadas',
            ),
            
            array (
                'id' => 5045,
                'state_id' => 15,
                'name' => 'Quixabá',
            ),
            
            array (
                'id' => 5047,
                'state_id' => 15,
                'name' => 'Remígio',
            ),
            
            array (
                'id' => 5048,
                'state_id' => 15,
                'name' => 'Riachão',
            ),
            
            array (
                'id' => 5049,
                'state_id' => 15,
                'name' => 'Riachão do Poço',
            ),
            
            array (
                'id' => 5050,
                'state_id' => 15,
                'name' => 'Riacho de Santo Antônio',
            ),
            
            array (
                'id' => 5051,
                'state_id' => 15,
                'name' => 'Riacho dos Cavalos',
            ),
            
            array (
                'id' => 5053,
                'state_id' => 15,
                'name' => 'Rio Tinto',
            ),
            
            array (
                'id' => 5056,
                'state_id' => 15,
                'name' => 'Salgadinho',
            ),
            
            array (
                'id' => 5057,
                'state_id' => 15,
                'name' => 'Salgado de São Félix',
            ),
            
            array (
                'id' => 5058,
                'state_id' => 15,
                'name' => 'Santa Cecília',
            ),
            
            array (
                'id' => 5059,
                'state_id' => 15,
                'name' => 'Santa Cruz',
            ),
            
            array (
                'id' => 5061,
                'state_id' => 15,
                'name' => 'Santa Helena',
            ),
            
            array (
                'id' => 5062,
                'state_id' => 15,
                'name' => 'Santa Inês',
            ),
            
            array (
                'id' => 5063,
                'state_id' => 15,
                'name' => 'Santa Luzia',
            ),
            
            array (
                'id' => 5066,
                'state_id' => 15,
                'name' => 'Santa Rita',
            ),
            
            array (
                'id' => 5068,
                'state_id' => 15,
                'name' => 'Santa Teresinha',
            ),
            
            array (
                'id' => 5070,
                'state_id' => 15,
                'name' => 'Santana de Mangueira',
            ),
            
            array (
                'id' => 5071,
                'state_id' => 15,
                'name' => 'Santana dos Garrotes',
            ),
            
            array (
                'id' => 5072,
                'state_id' => 15,
                'name' => 'Joca Claudino',
            ),
            
            array (
                'id' => 5073,
                'state_id' => 15,
                'name' => 'Santo André',
            ),
            
            array (
                'id' => 5074,
                'state_id' => 15,
                'name' => 'São Bento',
            ),
            
            array (
                'id' => 5075,
                'state_id' => 15,
                'name' => 'São Bentinho',
            ),
            
            array (
                'id' => 5076,
                'state_id' => 15,
                'name' => 'São Domingos de Pombal',
            ),
            
            array (
                'id' => 5077,
                'state_id' => 15,
                'name' => 'São Domingos do Cariri',
            ),
            
            array (
                'id' => 5078,
                'state_id' => 15,
                'name' => 'São Francisco',
            ),
            
            array (
                'id' => 5081,
                'state_id' => 15,
                'name' => 'São João do Cariri',
            ),
            
            array (
                'id' => 5082,
                'state_id' => 15,
                'name' => 'São João do Rio do Peixe',
            ),
            
            array (
                'id' => 5083,
                'state_id' => 15,
                'name' => 'São João do Tigre',
            ),
            
            array (
                'id' => 5084,
                'state_id' => 15,
                'name' => 'São José da Lagoa Tapada',
            ),
            
            array (
                'id' => 5086,
                'state_id' => 15,
                'name' => 'São José de Caiana',
            ),
            
            array (
                'id' => 5087,
                'state_id' => 15,
                'name' => 'São José de Espinharas',
            ),
            
            array (
                'id' => 5089,
                'state_id' => 15,
                'name' => 'São José de Piranhas',
            ),
            
            array (
                'id' => 5090,
                'state_id' => 15,
                'name' => 'São José de Princesa',
            ),
            
            array (
                'id' => 5091,
                'state_id' => 15,
                'name' => 'São José do Bonfim',
            ),
            
            array (
                'id' => 5092,
                'state_id' => 15,
                'name' => 'São José do Brejo do Cruz',
            ),
            
            array (
                'id' => 5093,
                'state_id' => 15,
                'name' => 'São José do Sabugi',
            ),
            
            array (
                'id' => 5094,
                'state_id' => 15,
                'name' => 'São José dos Cordeiros',
            ),
            
            array (
                'id' => 5095,
                'state_id' => 15,
                'name' => 'São José dos Ramos',
            ),
            
            array (
                'id' => 5096,
                'state_id' => 15,
                'name' => 'São Mamede',
            ),
            
            array (
                'id' => 5097,
                'state_id' => 15,
                'name' => 'São Miguel de Taipu',
            ),
            
            array (
                'id' => 5099,
                'state_id' => 15,
                'name' => 'São Sebastião de Lagoa de Roça',
            ),
            
            array (
                'id' => 5100,
                'state_id' => 15,
                'name' => 'São Sebastião do Umbuzeiro',
            ),
            
            array (
                'id' => 5101,
                'state_id' => 15,
                'name' => 'Sapé',
            ),
            
            array (
                'id' => 5103,
                'state_id' => 15,
                'name' => 'São Vicente do Seridó',
            ),
            
            array (
                'id' => 5104,
                'state_id' => 15,
                'name' => 'Serra Branca',
            ),
            
            array (
                'id' => 5105,
                'state_id' => 15,
                'name' => 'Serra da Raiz',
            ),
            
            array (
                'id' => 5106,
                'state_id' => 15,
                'name' => 'Serra Grande',
            ),
            
            array (
                'id' => 5107,
                'state_id' => 15,
                'name' => 'Serra Redonda',
            ),
            
            array (
                'id' => 5108,
                'state_id' => 15,
                'name' => 'Serraria',
            ),
            
            array (
                'id' => 5109,
                'state_id' => 15,
                'name' => 'Sertãozinho',
            ),
            
            array (
                'id' => 5110,
                'state_id' => 15,
                'name' => 'Sobrado',
            ),
            
            array (
                'id' => 5111,
                'state_id' => 15,
                'name' => 'Solânea',
            ),
            
            array (
                'id' => 5112,
                'state_id' => 15,
                'name' => 'Soledade',
            ),
            
            array (
                'id' => 5113,
                'state_id' => 15,
                'name' => 'Sossego',
            ),
            
            array (
                'id' => 5114,
                'state_id' => 15,
                'name' => 'Sousa',
            ),
            
            array (
                'id' => 5116,
                'state_id' => 15,
                'name' => 'Sumé',
            ),
            
            array (
                'id' => 5117,
                'state_id' => 15,
                'name' => 'Tacima',
            ),
            
            array (
                'id' => 5120,
                'state_id' => 15,
                'name' => 'Taperoá',
            ),
            
            array (
                'id' => 5121,
                'state_id' => 15,
                'name' => 'Tavares',
            ),
            
            array (
                'id' => 5122,
                'state_id' => 15,
                'name' => 'Teixeira',
            ),
            
            array (
                'id' => 5123,
                'state_id' => 15,
                'name' => 'Tenório',
            ),
            
            array (
                'id' => 5124,
                'state_id' => 15,
                'name' => 'Triunfo',
            ),
            
            array (
                'id' => 5125,
                'state_id' => 15,
                'name' => 'Uiraúna',
            ),
            
            array (
                'id' => 5127,
                'state_id' => 15,
                'name' => 'Umbuzeiro',
            ),
            
            array (
                'id' => 5128,
                'state_id' => 15,
                'name' => 'Várzea',
            ),
            
            array (
                'id' => 5132,
                'state_id' => 15,
                'name' => 'Vieirópolis',
            ),
            
            array (
                'id' => 5133,
                'state_id' => 15,
                'name' => 'Vista Serrana',
            ),
            
            array (
                'id' => 5134,
                'state_id' => 15,
                'name' => 'Zabelê',
            ),
            
            array (
                'id' => 5135,
                'state_id' => 16,
                'name' => 'Abreu e Lima',
            ),
            
            array (
                'id' => 5136,
                'state_id' => 16,
                'name' => 'Afogados da Ingazeira',
            ),
            
            array (
                'id' => 5137,
                'state_id' => 16,
                'name' => 'Afrânio',
            ),
            
            array (
                'id' => 5138,
                'state_id' => 16,
                'name' => 'Agrestina',
            ),
            
            array (
                'id' => 5140,
                'state_id' => 16,
                'name' => 'Água Preta',
            ),
            
            array (
                'id' => 5141,
                'state_id' => 16,
                'name' => 'Águas Belas',
            ),
            
            array (
                'id' => 5143,
                'state_id' => 16,
                'name' => 'Alagoinha',
            ),
            
            array (
                'id' => 5146,
                'state_id' => 16,
                'name' => 'Aliança',
            ),
            
            array (
                'id' => 5147,
                'state_id' => 16,
                'name' => 'Altinho',
            ),
            
            array (
                'id' => 5148,
                'state_id' => 16,
                'name' => 'Amaraji',
            ),
            
            array (
                'id' => 5150,
                'state_id' => 16,
                'name' => 'Angelim',
            ),
            
            array (
                'id' => 5152,
                'state_id' => 16,
                'name' => 'Araçoiaba',
            ),
            
            array (
                'id' => 5153,
                'state_id' => 16,
                'name' => 'Araripina',
            ),
            
            array (
                'id' => 5154,
                'state_id' => 16,
                'name' => 'Arcoverde',
            ),
            
            array (
                'id' => 5158,
                'state_id' => 16,
                'name' => 'Barra de Guabiraba',
            ),
            
            array (
                'id' => 5165,
                'state_id' => 16,
                'name' => 'Barreiros',
            ),
            
            array (
                'id' => 5167,
                'state_id' => 16,
                'name' => 'Belém de Maria',
            ),
            
            array (
                'id' => 5168,
                'state_id' => 16,
                'name' => 'Belém do São Francisco',
            ),
            
            array (
                'id' => 5169,
                'state_id' => 16,
                'name' => 'Belo Jardim',
            ),
            
            array (
                'id' => 5173,
                'state_id' => 16,
                'name' => 'Betânia',
            ),
            
            array (
                'id' => 5174,
                'state_id' => 16,
                'name' => 'Bezerros',
            ),
            
            array (
                'id' => 5177,
                'state_id' => 16,
                'name' => 'Bodocó',
            ),
            
            array (
                'id' => 5178,
                'state_id' => 16,
                'name' => 'Bom Conselho',
            ),
            
            array (
                'id' => 5179,
                'state_id' => 16,
                'name' => 'Bom Jardim',
            ),
            
            array (
                'id' => 5182,
                'state_id' => 16,
                'name' => 'Bonito',
            ),
            
            array (
                'id' => 5183,
                'state_id' => 16,
                'name' => 'Brejão',
            ),
            
            array (
                'id' => 5184,
                'state_id' => 16,
                'name' => 'Brejinho',
            ),
            
            array (
                'id' => 5185,
                'state_id' => 16,
                'name' => 'Brejo da Madre de Deus',
            ),
            
            array (
                'id' => 5186,
                'state_id' => 16,
                'name' => 'Buenos Aires',
            ),
            
            array (
                'id' => 5187,
                'state_id' => 16,
                'name' => 'Buíque',
            ),
            
            array (
                'id' => 5189,
                'state_id' => 16,
                'name' => 'Cabo de Santo Agostinho',
            ),
            
            array (
                'id' => 5190,
                'state_id' => 16,
                'name' => 'Cabrobó',
            ),
            
            array (
                'id' => 5192,
                'state_id' => 16,
                'name' => 'Cachoeirinha',
            ),
            
            array (
                'id' => 5193,
                'state_id' => 16,
                'name' => 'Caetés',
            ),
            
            array (
                'id' => 5195,
                'state_id' => 16,
                'name' => 'Calçado',
            ),
            
            array (
                'id' => 5197,
                'state_id' => 16,
                'name' => 'Calumbi',
            ),
            
            array (
                'id' => 5198,
                'state_id' => 16,
                'name' => 'Camaragibe',
            ),
            
            array (
                'id' => 5200,
                'state_id' => 16,
                'name' => 'Camocim de São Félix',
            ),
            
            array (
                'id' => 5201,
                'state_id' => 16,
                'name' => 'Camutanga',
            ),
            
            array (
                'id' => 5203,
                'state_id' => 16,
                'name' => 'Canhotinho',
            ),
            
            array (
                'id' => 5204,
                'state_id' => 16,
                'name' => 'Capoeiras',
            ),
            
            array (
                'id' => 5211,
                'state_id' => 16,
                'name' => 'Carnaíba',
            ),
            
            array (
                'id' => 5212,
                'state_id' => 16,
                'name' => 'Carnaubeira da Penha',
            ),
            
            array (
                'id' => 5214,
                'state_id' => 16,
                'name' => 'Carpina',
            ),
            
            array (
                'id' => 5216,
                'state_id' => 16,
                'name' => 'Caruaru',
            ),
            
            array (
                'id' => 5217,
                'state_id' => 16,
                'name' => 'Casinhas',
            ),
            
            array (
                'id' => 5218,
                'state_id' => 16,
                'name' => 'Catende',
            ),
            
            array (
                'id' => 5222,
                'state_id' => 16,
                'name' => 'Cedro',
            ),
            
            array (
                'id' => 5223,
                'state_id' => 16,
                'name' => 'Chã de Alegria',
            ),
            
            array (
                'id' => 5225,
                'state_id' => 16,
                'name' => 'Chã Grande',
            ),
            
            array (
                'id' => 5231,
                'state_id' => 16,
                'name' => 'Condado',
            ),
            
            array (
                'id' => 5232,
                'state_id' => 16,
                'name' => 'Correntes',
            ),
            
            array (
                'id' => 5233,
                'state_id' => 16,
                'name' => 'Cortês',
            ),
            
            array (
                'id' => 5239,
                'state_id' => 16,
                'name' => 'Cumaru',
            ),
            
            array (
                'id' => 5240,
                'state_id' => 16,
                'name' => 'Cupira',
            ),
            
            array (
                'id' => 5242,
                'state_id' => 16,
                'name' => 'Custódia',
            ),
            
            array (
                'id' => 5244,
                'state_id' => 16,
                'name' => 'Dormentes',
            ),
            
            array (
                'id' => 5246,
                'state_id' => 16,
                'name' => 'Escada',
            ),
            
            array (
                'id' => 5248,
                'state_id' => 16,
                'name' => 'Exu',
            ),
            
            array (
                'id' => 5250,
                'state_id' => 16,
                'name' => 'Feira Nova',
            ),
            
            array (
                'id' => 5252,
                'state_id' => 16,
                'name' => 'Fernando de Noronha',
            ),
            
            array (
                'id' => 5253,
                'state_id' => 16,
                'name' => 'Ferreiros',
            ),
            
            array (
                'id' => 5254,
                'state_id' => 16,
                'name' => 'Flores',
            ),
            
            array (
                'id' => 5255,
                'state_id' => 16,
                'name' => 'Floresta',
            ),
            
            array (
                'id' => 5256,
                'state_id' => 16,
                'name' => 'Frei Miguelinho',
            ),
            
            array (
                'id' => 5258,
                'state_id' => 16,
                'name' => 'Gameleira',
            ),
            
            array (
                'id' => 5259,
                'state_id' => 16,
                'name' => 'Garanhuns',
            ),
            
            array (
                'id' => 5260,
                'state_id' => 16,
                'name' => 'Glória do Goitá',
            ),
            
            array (
                'id' => 5261,
                'state_id' => 16,
                'name' => 'Goiana',
            ),
            
            array (
                'id' => 5263,
                'state_id' => 16,
                'name' => 'Granito',
            ),
            
            array (
                'id' => 5264,
                'state_id' => 16,
                'name' => 'Gravatá',
            ),
            
            array (
                'id' => 5270,
                'state_id' => 16,
                'name' => 'Iati',
            ),
            
            array (
                'id' => 5271,
                'state_id' => 16,
                'name' => 'Ibimirim',
            ),
            
            array (
                'id' => 5272,
                'state_id' => 16,
                'name' => 'Ibirajuba',
            ),
            
            array (
                'id' => 5281,
                'state_id' => 16,
                'name' => 'Igarassu',
            ),
            
            array (
                'id' => 5282,
                'state_id' => 16,
                'name' => 'Iguaraci',
            ),
            
            array (
                'id' => 5283,
                'state_id' => 16,
                'name' => 'Inajá',
            ),
            
            array (
                'id' => 5284,
                'state_id' => 16,
                'name' => 'Ingazeira',
            ),
            
            array (
                'id' => 5285,
                'state_id' => 16,
                'name' => 'Ipojuca',
            ),
            
            array (
                'id' => 5286,
                'state_id' => 16,
                'name' => 'Ipubi',
            ),
            
            array (
                'id' => 5291,
                'state_id' => 16,
                'name' => 'Itacuruba',
            ),
            
            array (
                'id' => 5292,
                'state_id' => 16,
                'name' => 'Itaíba',
            ),
            
            array (
                'id' => 5293,
                'state_id' => 16,
                'name' => 'Ilha de Itamaracá',
            ),
            
            array (
                'id' => 5294,
                'state_id' => 16,
                'name' => 'Itambé',
            ),
            
            array (
                'id' => 5295,
                'state_id' => 16,
                'name' => 'Itapetim',
            ),
            
            array (
                'id' => 5296,
                'state_id' => 16,
                'name' => 'Itapissuma',
            ),
            
            array (
                'id' => 5297,
                'state_id' => 16,
                'name' => 'Itaquitinga',
            ),
            
            array (
                'id' => 5302,
                'state_id' => 16,
                'name' => 'Jaboatão dos Guararapes',
            ),
            
            array (
                'id' => 5304,
                'state_id' => 16,
                'name' => 'Jaqueira',
            ),
            
            array (
                'id' => 5305,
                'state_id' => 16,
                'name' => 'Jataúba',
            ),
            
            array (
                'id' => 5307,
                'state_id' => 16,
                'name' => 'Jatobá',
            ),
            
            array (
                'id' => 5309,
                'state_id' => 16,
                'name' => 'João Alfredo',
            ),
            
            array (
                'id' => 5310,
                'state_id' => 16,
                'name' => 'Joaquim Nabuco',
            ),
            
            array (
                'id' => 5314,
                'state_id' => 16,
                'name' => 'Jucati',
            ),
            
            array (
                'id' => 5315,
                'state_id' => 16,
                'name' => 'Jupi',
            ),
            
            array (
                'id' => 5316,
                'state_id' => 16,
                'name' => 'Jurema',
            ),
            
            array (
                'id' => 5321,
                'state_id' => 16,
                'name' => 'Lagoa do Carro',
            ),
            
            array (
                'id' => 5322,
                'state_id' => 16,
                'name' => 'Lagoa do Itaenga',
            ),
            
            array (
                'id' => 5323,
                'state_id' => 16,
                'name' => 'Lagoa do Ouro',
            ),
            
            array (
                'id' => 5325,
                'state_id' => 16,
                'name' => 'Lagoa dos Gatos',
            ),
            
            array (
                'id' => 5326,
                'state_id' => 16,
                'name' => 'Lagoa Grande',
            ),
            
            array (
                'id' => 5329,
                'state_id' => 16,
                'name' => 'Lajedo',
            ),
            
            array (
                'id' => 5331,
                'state_id' => 16,
                'name' => 'Limoeiro',
            ),
            
            array (
                'id' => 5334,
                'state_id' => 16,
                'name' => 'Macaparana',
            ),
            
            array (
                'id' => 5335,
                'state_id' => 16,
                'name' => 'Machados',
            ),
            
            array (
                'id' => 5337,
                'state_id' => 16,
                'name' => 'Manari',
            ),
            
            array (
                'id' => 5341,
                'state_id' => 16,
                'name' => 'Maraial',
            ),
            
            array (
                'id' => 5345,
                'state_id' => 16,
                'name' => 'Mirandiba',
            ),
            
            array (
                'id' => 5347,
                'state_id' => 16,
                'name' => 'Moreilândia',
            ),
            
            array (
                'id' => 5348,
                'state_id' => 16,
                'name' => 'Moreno',
            ),
            
            array (
                'id' => 5355,
                'state_id' => 16,
                'name' => 'Nazaré da Mata',
            ),
            
            array (
                'id' => 5362,
                'state_id' => 16,
                'name' => 'Olinda',
            ),
            
            array (
                'id' => 5365,
                'state_id' => 16,
                'name' => 'Orobó',
            ),
            
            array (
                'id' => 5366,
                'state_id' => 16,
                'name' => 'Orocó',
            ),
            
            array (
                'id' => 5367,
                'state_id' => 16,
                'name' => 'Ouricuri',
            ),
            
            array (
                'id' => 5369,
                'state_id' => 16,
                'name' => 'Palmares',
            ),
            
            array (
                'id' => 5370,
                'state_id' => 16,
                'name' => 'Palmeirina',
            ),
            
            array (
                'id' => 5371,
                'state_id' => 16,
                'name' => 'Panelas',
            ),
            
            array (
                'id' => 5377,
                'state_id' => 16,
                'name' => 'Paranatama',
            ),
            
            array (
                'id' => 5379,
                'state_id' => 16,
                'name' => 'Parnamirim',
            ),
            
            array (
                'id' => 5381,
                'state_id' => 16,
                'name' => 'Passira',
            ),
            
            array (
                'id' => 5383,
                'state_id' => 16,
                'name' => 'Paudalho',
            ),
            
            array (
                'id' => 5384,
                'state_id' => 16,
                'name' => 'Paulista',
            ),
            
            array (
                'id' => 5385,
                'state_id' => 16,
                'name' => 'Pedra',
            ),
            
            array (
                'id' => 5387,
                'state_id' => 16,
                'name' => 'Pesqueira',
            ),
            
            array (
                'id' => 5388,
                'state_id' => 16,
                'name' => 'Petrolândia',
            ),
            
            array (
                'id' => 5389,
                'state_id' => 16,
                'name' => 'Petrolina',
            ),
            
            array (
                'id' => 5391,
                'state_id' => 16,
                'name' => 'Poção',
            ),
            
            array (
                'id' => 5395,
                'state_id' => 16,
                'name' => 'Pombos',
            ),
            
            array (
                'id' => 5399,
                'state_id' => 16,
                'name' => 'Primavera',
            ),
            
            array (
                'id' => 5400,
                'state_id' => 16,
                'name' => 'Quipapá',
            ),
            
            array (
                'id' => 5402,
                'state_id' => 16,
                'name' => 'Quixabá',
            ),
            
            array (
                'id' => 5406,
                'state_id' => 16,
                'name' => 'Recife',
            ),
            
            array (
                'id' => 5407,
                'state_id' => 16,
                'name' => 'Riacho das Almas',
            ),
            
            array (
                'id' => 5411,
                'state_id' => 16,
                'name' => 'Ribeirão',
            ),
            
            array (
                'id' => 5413,
                'state_id' => 16,
                'name' => 'Rio Formoso',
            ),
            
            array (
                'id' => 5414,
                'state_id' => 16,
                'name' => 'Sairé',
            ),
            
            array (
                'id' => 5415,
                'state_id' => 16,
                'name' => 'Salgadinho',
            ),
            
            array (
                'id' => 5416,
                'state_id' => 16,
                'name' => 'Salgueiro',
            ),
            
            array (
                'id' => 5417,
                'state_id' => 16,
                'name' => 'Saloá',
            ),
            
            array (
                'id' => 5419,
                'state_id' => 16,
                'name' => 'Sanharó',
            ),
            
            array (
                'id' => 5420,
                'state_id' => 16,
                'name' => 'Santa Cruz',
            ),
            
            array (
                'id' => 5421,
                'state_id' => 16,
                'name' => 'Santa Cruz da Baixa Verde',
            ),
            
            array (
                'id' => 5422,
                'state_id' => 16,
                'name' => 'Santa Cruz do Capibaribe',
            ),
            
            array (
                'id' => 5423,
                'state_id' => 16,
                'name' => 'Santa Filomena',
            ),
            
            array (
                'id' => 5424,
                'state_id' => 16,
                'name' => 'Santa Maria da Boa Vista',
            ),
            
            array (
                'id' => 5425,
                'state_id' => 16,
                'name' => 'Santa Maria do Cambucá',
            ),
            
            array (
                'id' => 5427,
                'state_id' => 16,
                'name' => 'Santa Terezinha',
            ),
            
            array (
                'id' => 5433,
                'state_id' => 16,
                'name' => 'São Benedito do Sul',
            ),
            
            array (
                'id' => 5434,
                'state_id' => 16,
                'name' => 'São Bento do Una',
            ),
            
            array (
                'id' => 5436,
                'state_id' => 16,
                'name' => 'São Caitano',
            ),
            
            array (
                'id' => 5438,
                'state_id' => 16,
                'name' => 'São João',
            ),
            
            array (
                'id' => 5439,
                'state_id' => 16,
                'name' => 'São Joaquim do Monte',
            ),
            
            array (
                'id' => 5441,
                'state_id' => 16,
                'name' => 'São José da Coroa Grande',
            ),
            
            array (
                'id' => 5442,
                'state_id' => 16,
                'name' => 'São José do Belmonte',
            ),
            
            array (
                'id' => 5443,
                'state_id' => 16,
                'name' => 'São José do Egito',
            ),
            
            array (
                'id' => 5445,
                'state_id' => 16,
                'name' => 'São LourençoZZZn da Mata',
            ),
            
            array (
                'id' => 5448,
                'state_id' => 16,
                'name' => 'São Vicente Ferrer',
            ),
            
            array (
                'id' => 5453,
                'state_id' => 16,
                'name' => 'Serra Talhada',
            ),
            
            array (
                'id' => 5454,
                'state_id' => 16,
                'name' => 'Serrita',
            ),
            
            array (
                'id' => 5456,
                'state_id' => 16,
                'name' => 'Sertânia',
            ),
            
            array (
                'id' => 5459,
                'state_id' => 16,
                'name' => 'Sirinhaém',
            ),
            
            array (
                'id' => 5461,
                'state_id' => 16,
                'name' => 'Solidão',
            ),
            
            array (
                'id' => 5462,
                'state_id' => 16,
                'name' => 'Surubim',
            ),
            
            array (
                'id' => 5463,
                'state_id' => 16,
                'name' => 'Tabira',
            ),
            
            array (
                'id' => 5465,
                'state_id' => 16,
                'name' => 'Tacaimbó',
            ),
            
            array (
                'id' => 5466,
                'state_id' => 16,
                'name' => 'Tacaratu',
            ),
            
            array (
                'id' => 5467,
                'state_id' => 16,
                'name' => 'Tamandaré',
            ),
            
            array (
                'id' => 5470,
                'state_id' => 16,
                'name' => 'Taquaritinga do Norte',
            ),
            
            array (
                'id' => 5474,
                'state_id' => 16,
                'name' => 'Terezinha',
            ),
            
            array (
                'id' => 5475,
                'state_id' => 16,
                'name' => 'Terra Nova',
            ),
            
            array (
                'id' => 5476,
                'state_id' => 16,
                'name' => 'Timbaúba',
            ),
            
            array (
                'id' => 5478,
                'state_id' => 16,
                'name' => 'Toritama',
            ),
            
            array (
                'id' => 5479,
                'state_id' => 16,
                'name' => 'Tracunhaém',
            ),
            
            array (
                'id' => 5482,
                'state_id' => 16,
                'name' => 'Trindade',
            ),
            
            array (
                'id' => 5483,
                'state_id' => 16,
                'name' => 'Triunfo',
            ),
            
            array (
                'id' => 5485,
                'state_id' => 16,
                'name' => 'Tupanatinga',
            ),
            
            array (
                'id' => 5487,
                'state_id' => 16,
                'name' => 'Tuparetama',
            ),
            
            array (
                'id' => 5496,
                'state_id' => 16,
                'name' => 'Venturosa',
            ),
            
            array (
                'id' => 5497,
                'state_id' => 16,
                'name' => 'Verdejante',
            ),
            
            array (
                'id' => 5498,
                'state_id' => 16,
                'name' => 'Vertente do Lério',
            ),
            
            array (
                'id' => 5499,
                'state_id' => 16,
                'name' => 'Vertentes',
            ),
            
            array (
                'id' => 5500,
                'state_id' => 16,
                'name' => 'Vicência',
            ),
            
            array (
                'id' => 5503,
                'state_id' => 16,
                'name' => 'Vitória de Santo Antão',
            ),
            
            array (
                'id' => 5505,
                'state_id' => 16,
                'name' => 'Xexéu',
            ),
            
            array (
                'id' => 5508,
                'state_id' => 17,
                'name' => 'Acauã',
            ),
            
            array (
                'id' => 5509,
                'state_id' => 17,
                'name' => 'Agricolândia',
            ),
            
            array (
                'id' => 5510,
                'state_id' => 17,
                'name' => 'Água Branca',
            ),
            
            array (
                'id' => 5511,
                'state_id' => 17,
                'name' => 'Alagoinha do Piauí',
            ),
            
            array (
                'id' => 5512,
                'state_id' => 17,
                'name' => 'Alegrete do Piauí',
            ),
            
            array (
                'id' => 5513,
                'state_id' => 17,
                'name' => 'Alto Longá',
            ),
            
            array (
                'id' => 5514,
                'state_id' => 17,
                'name' => 'Altos',
            ),
            
            array (
                'id' => 5515,
                'state_id' => 17,
                'name' => 'Alvorada do Gurguéia',
            ),
            
            array (
                'id' => 5516,
                'state_id' => 17,
                'name' => 'Amarante',
            ),
            
            array (
                'id' => 5517,
                'state_id' => 17,
                'name' => 'Angical do Piauí',
            ),
            
            array (
                'id' => 5518,
                'state_id' => 17,
                'name' => 'Anísio de Abreu',
            ),
            
            array (
                'id' => 5519,
                'state_id' => 17,
                'name' => 'Antônio Almeida',
            ),
            
            array (
                'id' => 5520,
                'state_id' => 17,
                'name' => 'Aroazes',
            ),
            
            array (
                'id' => 5521,
                'state_id' => 17,
                'name' => 'Arraial',
            ),
            
            array (
                'id' => 5522,
                'state_id' => 17,
                'name' => 'Assunção do Piauí',
            ),
            
            array (
                'id' => 5523,
                'state_id' => 17,
                'name' => 'Avelino Lopes',
            ),
            
            array (
                'id' => 5524,
                'state_id' => 17,
                'name' => 'Baixa Grande do Ribeiro',
            ),
            
            array (
                'id' => 5525,
                'state_id' => 17,
                'name' => 'Barra D\'Alcântara',
            ),
            
            array (
                'id' => 5526,
                'state_id' => 17,
                'name' => 'Barras',
            ),
            
            array (
                'id' => 5527,
                'state_id' => 17,
                'name' => 'Barreiras do Piauí',
            ),
            
            array (
                'id' => 5528,
                'state_id' => 17,
                'name' => 'Barro Duro',
            ),
            
            array (
                'id' => 5529,
                'state_id' => 17,
                'name' => 'Batalha',
            ),
            
            array (
                'id' => 5530,
                'state_id' => 17,
                'name' => 'Bela Vista do Piauí',
            ),
            
            array (
                'id' => 5531,
                'state_id' => 17,
                'name' => 'Belém do Piauí',
            ),
            
            array (
                'id' => 5532,
                'state_id' => 17,
                'name' => 'Beneditinos',
            ),
            
            array (
                'id' => 5533,
                'state_id' => 17,
                'name' => 'Bertolínia',
            ),
            
            array (
                'id' => 5534,
                'state_id' => 17,
                'name' => 'Betânia do Piauí',
            ),
            
            array (
                'id' => 5535,
                'state_id' => 17,
                'name' => 'Boa Hora',
            ),
            
            array (
                'id' => 5536,
                'state_id' => 17,
                'name' => 'Bocaina',
            ),
            
            array (
                'id' => 5537,
                'state_id' => 17,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 5538,
                'state_id' => 17,
                'name' => 'Bom Princípio do Piauí',
            ),
            
            array (
                'id' => 5539,
                'state_id' => 17,
                'name' => 'Bonfim do Piauí',
            ),
            
            array (
                'id' => 5540,
                'state_id' => 17,
                'name' => 'Boqueirão do Piauí',
            ),
            
            array (
                'id' => 5541,
                'state_id' => 17,
                'name' => 'Brasileira',
            ),
            
            array (
                'id' => 5542,
                'state_id' => 17,
                'name' => 'Brejo do Piauí',
            ),
            
            array (
                'id' => 5543,
                'state_id' => 17,
                'name' => 'Buriti dos Lopes',
            ),
            
            array (
                'id' => 5544,
                'state_id' => 17,
                'name' => 'Buriti dos Montes',
            ),
            
            array (
                'id' => 5545,
                'state_id' => 17,
                'name' => 'Cabeceiras do Piauí',
            ),
            
            array (
                'id' => 5546,
                'state_id' => 17,
                'name' => 'Cajazeiras do Piauí',
            ),
            
            array (
                'id' => 5547,
                'state_id' => 17,
                'name' => 'Cajueiro da Praia',
            ),
            
            array (
                'id' => 5548,
                'state_id' => 17,
                'name' => 'Caldeirão Grande do Piauí',
            ),
            
            array (
                'id' => 5549,
                'state_id' => 17,
                'name' => 'Campinas do Piauí',
            ),
            
            array (
                'id' => 5550,
                'state_id' => 17,
                'name' => 'Campo Alegre do Fidalgo',
            ),
            
            array (
                'id' => 5551,
                'state_id' => 17,
                'name' => 'Campo Grande do Piauí',
            ),
            
            array (
                'id' => 5552,
                'state_id' => 17,
                'name' => 'Campo Largo do Piauí',
            ),
            
            array (
                'id' => 5553,
                'state_id' => 17,
                'name' => 'Campo Maior',
            ),
            
            array (
                'id' => 5554,
                'state_id' => 17,
                'name' => 'Canavieira',
            ),
            
            array (
                'id' => 5555,
                'state_id' => 17,
                'name' => 'Canto do Buriti',
            ),
            
            array (
                'id' => 5556,
                'state_id' => 17,
                'name' => 'Capitão de Campos',
            ),
            
            array (
                'id' => 5557,
                'state_id' => 17,
                'name' => 'Capitão Gervásio Oliveira',
            ),
            
            array (
                'id' => 5558,
                'state_id' => 17,
                'name' => 'Caracol',
            ),
            
            array (
                'id' => 5559,
                'state_id' => 17,
                'name' => 'Caraúbas do Piauí',
            ),
            
            array (
                'id' => 5560,
                'state_id' => 17,
                'name' => 'Caridade do Piauí',
            ),
            
            array (
                'id' => 5561,
                'state_id' => 17,
                'name' => 'Castelo do Piauí',
            ),
            
            array (
                'id' => 5562,
                'state_id' => 17,
                'name' => 'Caxingó',
            ),
            
            array (
                'id' => 5563,
                'state_id' => 17,
                'name' => 'Cocal',
            ),
            
            array (
                'id' => 5564,
                'state_id' => 17,
                'name' => 'Cocal de Telha',
            ),
            
            array (
                'id' => 5565,
                'state_id' => 17,
                'name' => 'Cocal dos Alves',
            ),
            
            array (
                'id' => 5566,
                'state_id' => 17,
                'name' => 'Coivaras',
            ),
            
            array (
                'id' => 5567,
                'state_id' => 17,
                'name' => 'Colônia do Gurguéia',
            ),
            
            array (
                'id' => 5568,
                'state_id' => 17,
                'name' => 'Colônia do Piauí',
            ),
            
            array (
                'id' => 5569,
                'state_id' => 17,
                'name' => 'Conceição do Canindé',
            ),
            
            array (
                'id' => 5570,
                'state_id' => 17,
                'name' => 'Coronel José Dias',
            ),
            
            array (
                'id' => 5571,
                'state_id' => 17,
                'name' => 'Corrente',
            ),
            
            array (
                'id' => 5572,
                'state_id' => 17,
                'name' => 'Cristalândia do Piauí',
            ),
            
            array (
                'id' => 5573,
                'state_id' => 17,
                'name' => 'Cristino Castro',
            ),
            
            array (
                'id' => 5574,
                'state_id' => 17,
                'name' => 'Curimatá',
            ),
            
            array (
                'id' => 5575,
                'state_id' => 17,
                'name' => 'Currais',
            ),
            
            array (
                'id' => 5576,
                'state_id' => 17,
                'name' => 'Curral Novo do Piauí',
            ),
            
            array (
                'id' => 5577,
                'state_id' => 17,
                'name' => 'Curralinhos',
            ),
            
            array (
                'id' => 5578,
                'state_id' => 17,
                'name' => 'Demerval Lobão',
            ),
            
            array (
                'id' => 5579,
                'state_id' => 17,
                'name' => 'Dirceu Arcoverde',
            ),
            
            array (
                'id' => 5580,
                'state_id' => 17,
                'name' => 'Dom Expedito Lopes',
            ),
            
            array (
                'id' => 5581,
                'state_id' => 17,
                'name' => 'Dom Inocêncio',
            ),
            
            array (
                'id' => 5582,
                'state_id' => 17,
                'name' => 'Domingos Mourão',
            ),
            
            array (
                'id' => 5583,
                'state_id' => 17,
                'name' => 'Elesbão Veloso',
            ),
            
            array (
                'id' => 5584,
                'state_id' => 17,
                'name' => 'Eliseu Martins',
            ),
            
            array (
                'id' => 5585,
                'state_id' => 17,
                'name' => 'Esperantina',
            ),
            
            array (
                'id' => 5586,
                'state_id' => 17,
                'name' => 'Fartura do Piauí',
            ),
            
            array (
                'id' => 5587,
                'state_id' => 17,
                'name' => 'Flores do Piauí',
            ),
            
            array (
                'id' => 5588,
                'state_id' => 17,
                'name' => 'Floresta do Piauí',
            ),
            
            array (
                'id' => 5589,
                'state_id' => 17,
                'name' => 'Floriano',
            ),
            
            array (
                'id' => 5590,
                'state_id' => 17,
                'name' => 'Francinópolis',
            ),
            
            array (
                'id' => 5591,
                'state_id' => 17,
                'name' => 'Francisco Ayres',
            ),
            
            array (
                'id' => 5592,
                'state_id' => 17,
                'name' => 'Francisco Macedo',
            ),
            
            array (
                'id' => 5593,
                'state_id' => 17,
                'name' => 'Francisco Santos',
            ),
            
            array (
                'id' => 5594,
                'state_id' => 17,
                'name' => 'Fronteiras',
            ),
            
            array (
                'id' => 5595,
                'state_id' => 17,
                'name' => 'Geminiano',
            ),
            
            array (
                'id' => 5596,
                'state_id' => 17,
                'name' => 'Gilbués',
            ),
            
            array (
                'id' => 5597,
                'state_id' => 17,
                'name' => 'Guadalupe',
            ),
            
            array (
                'id' => 5598,
                'state_id' => 17,
                'name' => 'Guaribas',
            ),
            
            array (
                'id' => 5599,
                'state_id' => 17,
                'name' => 'Hugo Napoleão',
            ),
            
            array (
                'id' => 5600,
                'state_id' => 17,
                'name' => 'Ilha Grande',
            ),
            
            array (
                'id' => 5601,
                'state_id' => 17,
                'name' => 'Inhuma',
            ),
            
            array (
                'id' => 5602,
                'state_id' => 17,
                'name' => 'Ipiranga do Piauí',
            ),
            
            array (
                'id' => 5603,
                'state_id' => 17,
                'name' => 'Isaías Coelho',
            ),
            
            array (
                'id' => 5604,
                'state_id' => 17,
                'name' => 'Itainópolis',
            ),
            
            array (
                'id' => 5605,
                'state_id' => 17,
                'name' => 'Itaueira',
            ),
            
            array (
                'id' => 5606,
                'state_id' => 17,
                'name' => 'Jacobina do Piauí',
            ),
            
            array (
                'id' => 5607,
                'state_id' => 17,
                'name' => 'Jaicós',
            ),
            
            array (
                'id' => 5608,
                'state_id' => 17,
                'name' => 'Jardim do Mulato',
            ),
            
            array (
                'id' => 5609,
                'state_id' => 17,
                'name' => 'Jatobá do Piauí',
            ),
            
            array (
                'id' => 5610,
                'state_id' => 17,
                'name' => 'Jerumenha',
            ),
            
            array (
                'id' => 5611,
                'state_id' => 17,
                'name' => 'João Costa',
            ),
            
            array (
                'id' => 5612,
                'state_id' => 17,
                'name' => 'Joaquim Pires',
            ),
            
            array (
                'id' => 5613,
                'state_id' => 17,
                'name' => 'Joca Marques',
            ),
            
            array (
                'id' => 5614,
                'state_id' => 17,
                'name' => 'José de Freitas',
            ),
            
            array (
                'id' => 5615,
                'state_id' => 17,
                'name' => 'Juazeiro do Piauí',
            ),
            
            array (
                'id' => 5616,
                'state_id' => 17,
                'name' => 'Júlio Borges',
            ),
            
            array (
                'id' => 5617,
                'state_id' => 17,
                'name' => 'Jurema',
            ),
            
            array (
                'id' => 5618,
                'state_id' => 17,
                'name' => 'Lagoa Alegre',
            ),
            
            array (
                'id' => 5619,
                'state_id' => 17,
                'name' => 'Lagoa de São Francisco',
            ),
            
            array (
                'id' => 5620,
                'state_id' => 17,
                'name' => 'Lagoa do Barro do Piauí',
            ),
            
            array (
                'id' => 5621,
                'state_id' => 17,
                'name' => 'Lagoa do Piauí',
            ),
            
            array (
                'id' => 5622,
                'state_id' => 17,
                'name' => 'Lagoa do Sítio',
            ),
            
            array (
                'id' => 5623,
                'state_id' => 17,
                'name' => 'Lagoinha do Piauí',
            ),
            
            array (
                'id' => 5624,
                'state_id' => 17,
                'name' => 'Landri Sales',
            ),
            
            array (
                'id' => 5625,
                'state_id' => 17,
                'name' => 'Luís Correia',
            ),
            
            array (
                'id' => 5626,
                'state_id' => 17,
                'name' => 'Luzilândia',
            ),
            
            array (
                'id' => 5627,
                'state_id' => 17,
                'name' => 'Madeiro',
            ),
            
            array (
                'id' => 5628,
                'state_id' => 17,
                'name' => 'Manoel Emídio',
            ),
            
            array (
                'id' => 5629,
                'state_id' => 17,
                'name' => 'Marcolândia',
            ),
            
            array (
                'id' => 5630,
                'state_id' => 17,
                'name' => 'Marcos Parente',
            ),
            
            array (
                'id' => 5631,
                'state_id' => 17,
                'name' => 'Massapê do Piauí',
            ),
            
            array (
                'id' => 5632,
                'state_id' => 17,
                'name' => 'Matias Olímpio',
            ),
            
            array (
                'id' => 5633,
                'state_id' => 17,
                'name' => 'Miguel Alves',
            ),
            
            array (
                'id' => 5634,
                'state_id' => 17,
                'name' => 'Miguel Leão',
            ),
            
            array (
                'id' => 5635,
                'state_id' => 17,
                'name' => 'Milton Brandão',
            ),
            
            array (
                'id' => 5636,
                'state_id' => 17,
                'name' => 'Monsenhor Gil',
            ),
            
            array (
                'id' => 5637,
                'state_id' => 17,
                'name' => 'Monsenhor Hipólito',
            ),
            
            array (
                'id' => 5638,
                'state_id' => 17,
                'name' => 'Monte Alegre do Piauí',
            ),
            
            array (
                'id' => 5639,
                'state_id' => 17,
                'name' => 'Morro Cabeça no Tempo',
            ),
            
            array (
                'id' => 5640,
                'state_id' => 17,
                'name' => 'Morro do Chapéu do Piauí',
            ),
            
            array (
                'id' => 5641,
                'state_id' => 17,
                'name' => 'Murici dos Portelas',
            ),
            
            array (
                'id' => 5642,
                'state_id' => 17,
                'name' => 'Nazaré do Piauí',
            ),
            
            array (
                'id' => 5643,
                'state_id' => 17,
                'name' => 'Nossa Senhora de Nazaré',
            ),
            
            array (
                'id' => 5644,
                'state_id' => 17,
                'name' => 'Nossa Senhora dos Remédios',
            ),
            
            array (
                'id' => 5645,
                'state_id' => 17,
                'name' => 'Nova Santa Rita',
            ),
            
            array (
                'id' => 5647,
                'state_id' => 17,
                'name' => 'Novo Oriente do Piauí',
            ),
            
            array (
                'id' => 5648,
                'state_id' => 17,
                'name' => 'Novo Santo Antônio',
            ),
            
            array (
                'id' => 5649,
                'state_id' => 17,
                'name' => 'Oeiras',
            ),
            
            array (
                'id' => 5650,
                'state_id' => 17,
                'name' => 'Olho D\'Água do Piauí',
            ),
            
            array (
                'id' => 5651,
                'state_id' => 17,
                'name' => 'Padre Marcos',
            ),
            
            array (
                'id' => 5652,
                'state_id' => 17,
                'name' => 'Paes Landim',
            ),
            
            array (
                'id' => 5653,
                'state_id' => 17,
                'name' => 'Pajeú do Piauí',
            ),
            
            array (
                'id' => 5654,
                'state_id' => 17,
                'name' => 'Palmeira do Piauí',
            ),
            
            array (
                'id' => 5655,
                'state_id' => 17,
                'name' => 'Palmeirais',
            ),
            
            array (
                'id' => 5656,
                'state_id' => 17,
                'name' => 'Paquetá',
            ),
            
            array (
                'id' => 5657,
                'state_id' => 17,
                'name' => 'Parnaguá',
            ),
            
            array (
                'id' => 5658,
                'state_id' => 17,
                'name' => 'Parnaíba',
            ),
            
            array (
                'id' => 5659,
                'state_id' => 17,
                'name' => 'Passagem Franca do Piauí',
            ),
            
            array (
                'id' => 5660,
                'state_id' => 17,
                'name' => 'Patos do Piauí',
            ),
            
            array (
                'id' => 5661,
                'state_id' => 17,
                'name' => 'Paulistana',
            ),
            
            array (
                'id' => 5662,
                'state_id' => 17,
                'name' => 'Pavussu',
            ),
            
            array (
                'id' => 5663,
                'state_id' => 17,
                'name' => 'Pedro II',
            ),
            
            array (
                'id' => 5664,
                'state_id' => 17,
                'name' => 'Pedro Laurentino',
            ),
            
            array (
                'id' => 5665,
                'state_id' => 17,
                'name' => 'Picos',
            ),
            
            array (
                'id' => 5666,
                'state_id' => 17,
                'name' => 'Pimenteiras',
            ),
            
            array (
                'id' => 5667,
                'state_id' => 17,
                'name' => 'Pio IX',
            ),
            
            array (
                'id' => 5668,
                'state_id' => 17,
                'name' => 'Piracuruca',
            ),
            
            array (
                'id' => 5669,
                'state_id' => 17,
                'name' => 'Piripiri',
            ),
            
            array (
                'id' => 5670,
                'state_id' => 17,
                'name' => 'Porto',
            ),
            
            array (
                'id' => 5671,
                'state_id' => 17,
                'name' => 'Porto Alegre do Piauí',
            ),
            
            array (
                'id' => 5672,
                'state_id' => 17,
                'name' => 'Prata do Piauí',
            ),
            
            array (
                'id' => 5673,
                'state_id' => 17,
                'name' => 'Queimada Nova',
            ),
            
            array (
                'id' => 5674,
                'state_id' => 17,
                'name' => 'Redenção do Gurguéia',
            ),
            
            array (
                'id' => 5675,
                'state_id' => 17,
                'name' => 'Regeneração',
            ),
            
            array (
                'id' => 5676,
                'state_id' => 17,
                'name' => 'Riacho Frio',
            ),
            
            array (
                'id' => 5677,
                'state_id' => 17,
                'name' => 'Ribeira do Piauí',
            ),
            
            array (
                'id' => 5678,
                'state_id' => 17,
                'name' => 'Ribeiro Gonçalves',
            ),
            
            array (
                'id' => 5679,
                'state_id' => 17,
                'name' => 'Rio Grande do Piauí',
            ),
            
            array (
                'id' => 5680,
                'state_id' => 17,
                'name' => 'Santa Cruz do Piauí',
            ),
            
            array (
                'id' => 5681,
                'state_id' => 17,
                'name' => 'Santa Cruz dos Milagres',
            ),
            
            array (
                'id' => 5682,
                'state_id' => 17,
                'name' => 'Santa Filomena',
            ),
            
            array (
                'id' => 5683,
                'state_id' => 17,
                'name' => 'Santa Luz',
            ),
            
            array (
                'id' => 5684,
                'state_id' => 17,
                'name' => 'Santa Rosa do Piauí',
            ),
            
            array (
                'id' => 5685,
                'state_id' => 17,
                'name' => 'Santana do Piauí',
            ),
            
            array (
                'id' => 5686,
                'state_id' => 17,
                'name' => 'Santo Antônio de Lisboa',
            ),
            
            array (
                'id' => 5687,
                'state_id' => 17,
                'name' => 'Santo Antônio dos Milagres',
            ),
            
            array (
                'id' => 5688,
                'state_id' => 17,
                'name' => 'Santo Inácio do Piauí',
            ),
            
            array (
                'id' => 5689,
                'state_id' => 17,
                'name' => 'São Braz do Piauí',
            ),
            
            array (
                'id' => 5690,
                'state_id' => 17,
                'name' => 'São Félix do Piauí',
            ),
            
            array (
                'id' => 5691,
                'state_id' => 17,
                'name' => 'São Francisco de Assis do Piauí',
            ),
            
            array (
                'id' => 5692,
                'state_id' => 17,
                'name' => 'São Francisco do Piauí',
            ),
            
            array (
                'id' => 5693,
                'state_id' => 17,
                'name' => 'São Gonçalo do Gurguéia',
            ),
            
            array (
                'id' => 5694,
                'state_id' => 17,
                'name' => 'São Gonçalo do Piauí',
            ),
            
            array (
                'id' => 5695,
                'state_id' => 17,
                'name' => 'São João da Canabrava',
            ),
            
            array (
                'id' => 5696,
                'state_id' => 17,
                'name' => 'São João da Fronteira',
            ),
            
            array (
                'id' => 5697,
                'state_id' => 17,
                'name' => 'São João da Serra',
            ),
            
            array (
                'id' => 5698,
                'state_id' => 17,
                'name' => 'São João da Varjota',
            ),
            
            array (
                'id' => 5699,
                'state_id' => 17,
                'name' => 'São João do Arraial',
            ),
            
            array (
                'id' => 5700,
                'state_id' => 17,
                'name' => 'São João do Piauí',
            ),
            
            array (
                'id' => 5701,
                'state_id' => 17,
                'name' => 'São José do Divino',
            ),
            
            array (
                'id' => 5702,
                'state_id' => 17,
                'name' => 'São José do Peixe',
            ),
            
            array (
                'id' => 5703,
                'state_id' => 17,
                'name' => 'São José do Piauí',
            ),
            
            array (
                'id' => 5704,
                'state_id' => 17,
                'name' => 'São Julião',
            ),
            
            array (
                'id' => 5705,
                'state_id' => 17,
                'name' => 'São Lourenço do Piauí',
            ),
            
            array (
                'id' => 5706,
                'state_id' => 17,
                'name' => 'São Luís do Piauí',
            ),
            
            array (
                'id' => 5707,
                'state_id' => 17,
                'name' => 'São Miguel da Baixa Grande',
            ),
            
            array (
                'id' => 5708,
                'state_id' => 17,
                'name' => 'São Miguel do Fidalgo',
            ),
            
            array (
                'id' => 5709,
                'state_id' => 17,
                'name' => 'São Miguel do Tapuio',
            ),
            
            array (
                'id' => 5710,
                'state_id' => 17,
                'name' => 'São Pedro do Piauí',
            ),
            
            array (
                'id' => 5711,
                'state_id' => 17,
                'name' => 'São Raimundo Nonato',
            ),
            
            array (
                'id' => 5712,
                'state_id' => 17,
                'name' => 'Sebastião Barros',
            ),
            
            array (
                'id' => 5713,
                'state_id' => 17,
                'name' => 'Sebastião Leal',
            ),
            
            array (
                'id' => 5714,
                'state_id' => 17,
                'name' => 'Sigefredo Pacheco',
            ),
            
            array (
                'id' => 5715,
                'state_id' => 17,
                'name' => 'Simões',
            ),
            
            array (
                'id' => 5716,
                'state_id' => 17,
                'name' => 'Simplício Mendes',
            ),
            
            array (
                'id' => 5717,
                'state_id' => 17,
                'name' => 'Socorro do Piauí',
            ),
            
            array (
                'id' => 5718,
                'state_id' => 17,
                'name' => 'Sussuapara',
            ),
            
            array (
                'id' => 5719,
                'state_id' => 17,
                'name' => 'Tamboril do Piauí',
            ),
            
            array (
                'id' => 5720,
                'state_id' => 17,
                'name' => 'Tanque do Piauí',
            ),
            
            array (
                'id' => 5721,
                'state_id' => 17,
                'name' => 'Teresina',
            ),
            
            array (
                'id' => 5722,
                'state_id' => 17,
                'name' => 'União',
            ),
            
            array (
                'id' => 5723,
                'state_id' => 17,
                'name' => 'Uruçuí',
            ),
            
            array (
                'id' => 5724,
                'state_id' => 17,
                'name' => 'Valença do Piauí',
            ),
            
            array (
                'id' => 5725,
                'state_id' => 17,
                'name' => 'Várzea Branca',
            ),
            
            array (
                'id' => 5726,
                'state_id' => 17,
                'name' => 'Várzea Grande',
            ),
            
            array (
                'id' => 5727,
                'state_id' => 17,
                'name' => 'Vera Mendes',
            ),
            
            array (
                'id' => 5728,
                'state_id' => 17,
                'name' => 'Vila Nova do Piauí',
            ),
            
            array (
                'id' => 5729,
                'state_id' => 17,
                'name' => 'Wall Ferraz',
            ),
            
            array (
                'id' => 5731,
                'state_id' => 18,
                'name' => 'Abatiá',
            ),
            
            array (
                'id' => 5735,
                'state_id' => 18,
                'name' => 'Adrianópolis',
            ),
            
            array (
                'id' => 5743,
                'state_id' => 18,
                'name' => 'Agudos do Sul',
            ),
            
            array (
                'id' => 5746,
                'state_id' => 18,
                'name' => 'Almirante Tamandaré',
            ),
            
            array (
                'id' => 5747,
                'state_id' => 18,
                'name' => 'Altamira do Paraná',
            ),
            
            array (
                'id' => 5755,
                'state_id' => 18,
                'name' => 'Alto Paraná',
            ),
            
            array (
                'id' => 5756,
                'state_id' => 18,
                'name' => 'Alto Piquiri',
            ),
            
            array (
                'id' => 5761,
                'state_id' => 18,
                'name' => 'Altônia',
            ),
            
            array (
                'id' => 5763,
                'state_id' => 18,
                'name' => 'Alvorada do Sul',
            ),
            
            array (
                'id' => 5764,
                'state_id' => 18,
                'name' => 'Amaporã',
            ),
            
            array (
                'id' => 5766,
                'state_id' => 18,
                'name' => 'Ampére',
            ),
            
            array (
                'id' => 5767,
                'state_id' => 18,
                'name' => 'Anahy',
            ),
            
            array (
                'id' => 5768,
                'state_id' => 18,
                'name' => 'Andirá',
            ),
            
            array (
                'id' => 5771,
                'state_id' => 18,
                'name' => 'Ângulo',
            ),
            
            array (
                'id' => 5774,
                'state_id' => 18,
                'name' => 'Antonina',
            ),
            
            array (
                'id' => 5776,
                'state_id' => 18,
                'name' => 'Antônio Olinto',
            ),
            
            array (
                'id' => 5780,
                'state_id' => 18,
                'name' => 'Apucarana',
            ),
            
            array (
                'id' => 5783,
                'state_id' => 18,
                'name' => 'Arapongas',
            ),
            
            array (
                'id' => 5784,
                'state_id' => 18,
                'name' => 'Arapoti',
            ),
            
            array (
                'id' => 5785,
                'state_id' => 18,
                'name' => 'Arapuã',
            ),
            
            array (
                'id' => 5788,
                'state_id' => 18,
                'name' => 'Araruna',
            ),
            
            array (
                'id' => 5789,
                'state_id' => 18,
                'name' => 'Araucária',
            ),
            
            array (
                'id' => 5793,
                'state_id' => 18,
                'name' => 'Ariranha do Ivaí',
            ),
            
            array (
                'id' => 5796,
                'state_id' => 18,
                'name' => 'Assaí',
            ),
            
            array (
                'id' => 5797,
                'state_id' => 18,
                'name' => 'Assis Chateaubriand',
            ),
            
            array (
                'id' => 5798,
                'state_id' => 18,
                'name' => 'Astorga',
            ),
            
            array (
                'id' => 5799,
                'state_id' => 18,
                'name' => 'Atalaia',
            ),
            
            array (
                'id' => 5804,
                'state_id' => 18,
                'name' => 'Balsa Nova',
            ),
            
            array (
                'id' => 5805,
                'state_id' => 18,
                'name' => 'Bandeirantes',
            ),
            
            array (
                'id' => 5809,
                'state_id' => 18,
                'name' => 'Barbosa Ferraz',
            ),
            
            array (
                'id' => 5812,
                'state_id' => 18,
                'name' => 'Barra do Jacaré',
            ),
            
            array (
                'id' => 5819,
                'state_id' => 18,
                'name' => 'Barracão',
            ),
            
            array (
                'id' => 5834,
                'state_id' => 18,
                'name' => 'Bela Vista da Caroba',
            ),
            
            array (
                'id' => 5836,
                'state_id' => 18,
                'name' => 'Bela Vista do Paraíso',
            ),
            
            array (
                'id' => 5842,
                'state_id' => 18,
                'name' => 'Bituruna',
            ),
            
            array (
                'id' => 5843,
                'state_id' => 18,
                'name' => 'Boa Esperança',
            ),
            
            array (
                'id' => 5845,
                'state_id' => 18,
                'name' => 'Boa Esperança do Iguaçu',
            ),
            
            array (
                'id' => 5846,
                'state_id' => 18,
                'name' => 'Boa Ventura de São Roque',
            ),
            
            array (
                'id' => 5852,
                'state_id' => 18,
                'name' => 'Boa Vista da Aparecida',
            ),
            
            array (
                'id' => 5854,
                'state_id' => 18,
                'name' => 'Bocaiúva do Sul',
            ),
            
            array (
                'id' => 5856,
                'state_id' => 18,
                'name' => 'Bom Jesus do Sul',
            ),
            
            array (
                'id' => 5862,
                'state_id' => 18,
                'name' => 'Bom Sucesso',
            ),
            
            array (
                'id' => 5864,
                'state_id' => 18,
                'name' => 'Bom Sucesso do Sul',
            ),
            
            array (
                'id' => 5868,
                'state_id' => 18,
                'name' => 'Borrazópolis',
            ),
            
            array (
                'id' => 5871,
                'state_id' => 18,
                'name' => 'Braganey',
            ),
            
            array (
                'id' => 5873,
                'state_id' => 18,
                'name' => 'Brasilândia do Sul',
            ),
            
            array (
                'id' => 5886,
                'state_id' => 18,
                'name' => 'Cafeara',
            ),
            
            array (
                'id' => 5888,
                'state_id' => 18,
                'name' => 'Cafelândia',
            ),
            
            array (
                'id' => 5889,
                'state_id' => 18,
                'name' => 'Cafezal do Sul',
            ),
            
            array (
                'id' => 5892,
                'state_id' => 18,
                'name' => 'Califórnia',
            ),
            
            array (
                'id' => 5894,
                'state_id' => 18,
                'name' => 'Cambará',
            ),
            
            array (
                'id' => 5895,
                'state_id' => 18,
                'name' => 'Cambé',
            ),
            
            array (
                'id' => 5897,
                'state_id' => 18,
                'name' => 'Cambira',
            ),
            
            array (
                'id' => 5902,
                'state_id' => 18,
                'name' => 'Campina da Lagoa',
            ),
            
            array (
                'id' => 5904,
                'state_id' => 18,
                'name' => 'Campina do Simão',
            ),
            
            array (
                'id' => 5906,
                'state_id' => 18,
                'name' => 'Campina Grande do Sul',
            ),
            
            array (
                'id' => 5908,
                'state_id' => 18,
                'name' => 'Campo Bonito',
            ),
            
            array (
                'id' => 5910,
                'state_id' => 18,
                'name' => 'Campo do Tenente',
            ),
            
            array (
                'id' => 5911,
                'state_id' => 18,
                'name' => 'Campo Largo',
            ),
            
            array (
                'id' => 5913,
                'state_id' => 18,
                'name' => 'Campo Magro',
            ),
            
            array (
                'id' => 5914,
                'state_id' => 18,
                'name' => 'Campo Mourão',
            ),
            
            array (
                'id' => 5915,
                'state_id' => 18,
                'name' => 'Cândido de Abreu',
            ),
            
            array (
                'id' => 5916,
                'state_id' => 18,
                'name' => 'Candói',
            ),
            
            array (
                'id' => 5918,
                'state_id' => 18,
                'name' => 'Cantagalo',
            ),
            
            array (
                'id' => 5920,
                'state_id' => 18,
                'name' => 'Capanema',
            ),
            
            array (
                'id' => 5927,
                'state_id' => 18,
                'name' => 'Capitão Leônidas Marques',
            ),
            
            array (
                'id' => 5933,
                'state_id' => 18,
                'name' => 'Carambeí',
            ),
            
            array (
                'id' => 5938,
                'state_id' => 18,
                'name' => 'Carlópolis',
            ),
            
            array (
                'id' => 5941,
                'state_id' => 18,
                'name' => 'Cascavel',
            ),
            
            array (
                'id' => 5942,
                'state_id' => 18,
                'name' => 'Castro',
            ),
            
            array (
                'id' => 5943,
                'state_id' => 18,
                'name' => 'Catanduvas',
            ),
            
            array (
                'id' => 5949,
                'state_id' => 18,
                'name' => 'Centenário do Sul',
            ),
            
            array (
                'id' => 5955,
                'state_id' => 18,
                'name' => 'Cerro Azul',
            ),
            
            array (
                'id' => 5957,
                'state_id' => 18,
                'name' => 'Céu Azul',
            ),
            
            array (
                'id' => 5958,
                'state_id' => 18,
                'name' => 'Chopinzinho',
            ),
            
            array (
                'id' => 5959,
                'state_id' => 18,
                'name' => 'Cianorte',
            ),
            
            array (
                'id' => 5960,
                'state_id' => 18,
                'name' => 'Cidade Gaúcha',
            ),
            
            array (
                'id' => 5962,
                'state_id' => 18,
                'name' => 'Clevelândia',
            ),
            
            array (
                'id' => 5964,
                'state_id' => 18,
                'name' => 'Colombo',
            ),
            
            array (
                'id' => 5983,
                'state_id' => 18,
                'name' => 'Colorado',
            ),
            
            array (
                'id' => 5990,
                'state_id' => 18,
                'name' => 'Congonhinhas',
            ),
            
            array (
                'id' => 5991,
                'state_id' => 18,
                'name' => 'Conselheiro Mairinck',
            ),
            
            array (
                'id' => 5993,
                'state_id' => 18,
                'name' => 'Contenda',
            ),
            
            array (
                'id' => 5995,
                'state_id' => 18,
                'name' => 'Corbélia',
            ),
            
            array (
                'id' => 5996,
                'state_id' => 18,
                'name' => 'Cornélio Procópio',
            ),
            
            array (
                'id' => 5997,
                'state_id' => 18,
                'name' => 'Coronel Domingos Soares',
            ),
            
            array (
                'id' => 5999,
                'state_id' => 18,
                'name' => 'Coronel Vivida',
            ),
            
            array (
                'id' => 6001,
                'state_id' => 18,
                'name' => 'Corumbataí do Sul',
            ),
            
            array (
                'id' => 6008,
                'state_id' => 18,
                'name' => 'Cruz Machado',
            ),
            
            array (
                'id' => 6009,
                'state_id' => 18,
                'name' => 'Cruzeiro do Iguaçu',
            ),
            
            array (
                'id' => 6011,
                'state_id' => 18,
                'name' => 'Cruzeiro do Oeste',
            ),
            
            array (
                'id' => 6012,
                'state_id' => 18,
                'name' => 'Cruzeiro do Sul',
            ),
            
            array (
                'id' => 6013,
                'state_id' => 18,
                'name' => 'Cruzmaltina',
            ),
            
            array (
                'id' => 6015,
                'state_id' => 18,
                'name' => 'Curitiba',
            ),
            
            array (
                'id' => 6016,
                'state_id' => 18,
                'name' => 'Curiúva',
            ),
            
            array (
                'id' => 6023,
                'state_id' => 18,
                'name' => 'Diamante d\'Oeste',
            ),
            
            array (
                'id' => 6024,
                'state_id' => 18,
                'name' => 'Diamante do Norte',
            ),
            
            array (
                'id' => 6025,
                'state_id' => 18,
                'name' => 'Diamante do Sul',
            ),
            
            array (
                'id' => 6030,
                'state_id' => 18,
                'name' => 'Dois Vizinhos',
            ),
            
            array (
                'id' => 6033,
                'state_id' => 18,
                'name' => 'Douradina',
            ),
            
            array (
                'id' => 6035,
                'state_id' => 18,
                'name' => 'Doutor Camargo',
            ),
            
            array (
                'id' => 6038,
                'state_id' => 18,
                'name' => 'Doutor Ulysses',
            ),
            
            array (
                'id' => 6046,
                'state_id' => 18,
                'name' => 'Enéas Marques',
            ),
            
            array (
                'id' => 6047,
                'state_id' => 18,
                'name' => 'Engenheiro Beltrão',
            ),
            
            array (
                'id' => 6049,
                'state_id' => 18,
                'name' => 'Entre Rios do Oeste',
            ),
            
            array (
                'id' => 6051,
                'state_id' => 18,
                'name' => 'Esperança Nova',
            ),
            
            array (
                'id' => 6052,
                'state_id' => 18,
                'name' => 'Espigão Alto do Iguaçu',
            ),
            
            array (
                'id' => 6059,
                'state_id' => 18,
                'name' => 'Farol',
            ),
            
            array (
                'id' => 6061,
                'state_id' => 18,
                'name' => 'Faxinal',
            ),
            
            array (
                'id' => 6068,
                'state_id' => 18,
                'name' => 'Fazenda Rio Grande',
            ),
            
            array (
                'id' => 6072,
                'state_id' => 18,
                'name' => 'Fênix',
            ),
            
            array (
                'id' => 6073,
                'state_id' => 18,
                'name' => 'Fernandes Pinheiro',
            ),
            
            array (
                'id' => 6077,
                'state_id' => 18,
                'name' => 'Figueira',
            ),
            
            array (
                'id' => 6081,
                'state_id' => 18,
                'name' => 'Flor da Serra do Sul',
            ),
            
            array (
                'id' => 6082,
                'state_id' => 18,
                'name' => 'Floraí',
            ),
            
            array (
                'id' => 6083,
                'state_id' => 18,
                'name' => 'Floresta',
            ),
            
            array (
                'id' => 6084,
                'state_id' => 18,
                'name' => 'Florestópolis',
            ),
            
            array (
                'id' => 6086,
                'state_id' => 18,
                'name' => 'Flórida',
            ),
            
            array (
                'id' => 6090,
                'state_id' => 18,
                'name' => 'Formosa do Oeste',
            ),
            
            array (
                'id' => 6091,
                'state_id' => 18,
                'name' => 'Foz do Iguaçu',
            ),
            
            array (
                'id' => 6092,
                'state_id' => 18,
                'name' => 'Foz do Jordão',
            ),
            
            array (
                'id' => 6093,
                'state_id' => 18,
                'name' => 'Francisco Alves',
            ),
            
            array (
                'id' => 6094,
                'state_id' => 18,
                'name' => 'Francisco Beltrão',
            ),
            
            array (
                'id' => 6104,
                'state_id' => 18,
                'name' => 'General Carneiro',
            ),
            
            array (
                'id' => 6107,
                'state_id' => 18,
                'name' => 'Godoy Moreira',
            ),
            
            array (
                'id' => 6108,
                'state_id' => 18,
                'name' => 'Goioerê',
            ),
            
            array (
                'id' => 6109,
                'state_id' => 18,
                'name' => 'Goioxim',
            ),
            
            array (
                'id' => 6113,
                'state_id' => 18,
                'name' => 'Grandes Rios',
            ),
            
            array (
                'id' => 6115,
                'state_id' => 18,
                'name' => 'Guaíra',
            ),
            
            array (
                'id' => 6116,
                'state_id' => 18,
                'name' => 'Guairaçá',
            ),
            
            array (
                'id' => 6120,
                'state_id' => 18,
                'name' => 'Guamiranga',
            ),
            
            array (
                'id' => 6122,
                'state_id' => 18,
                'name' => 'Guapirama',
            ),
            
            array (
                'id' => 6124,
                'state_id' => 18,
                'name' => 'Guaporema',
            ),
            
            array (
                'id' => 6126,
                'state_id' => 18,
                'name' => 'Guaraci',
            ),
            
            array (
                'id' => 6130,
                'state_id' => 18,
                'name' => 'Guaraniaçu',
            ),
            
            array (
                'id' => 6131,
                'state_id' => 18,
                'name' => 'Guarapuava',
            ),
            
            array (
                'id' => 6133,
                'state_id' => 18,
                'name' => 'Guaraqueçaba',
            ),
            
            array (
                'id' => 6135,
                'state_id' => 18,
                'name' => 'Guaratuba',
            ),
            
            array (
                'id' => 6145,
                'state_id' => 18,
                'name' => 'Honório Serpa',
            ),
            
            array (
                'id' => 6147,
                'state_id' => 18,
                'name' => 'Ibaiti',
            ),
            
            array (
                'id' => 6148,
                'state_id' => 18,
                'name' => 'Ibema',
            ),
            
            array (
                'id' => 6150,
                'state_id' => 18,
                'name' => 'Ibiporã',
            ),
            
            array (
                'id' => 6152,
                'state_id' => 18,
                'name' => 'Icaraíma',
            ),
            
            array (
                'id' => 6155,
                'state_id' => 18,
                'name' => 'Iguaraçu',
            ),
            
            array (
                'id' => 6157,
                'state_id' => 18,
                'name' => 'Iguatu',
            ),
            
            array (
                'id' => 6161,
                'state_id' => 18,
                'name' => 'Imbaú',
            ),
            
            array (
                'id' => 6163,
                'state_id' => 18,
                'name' => 'Imbituva',
            ),
            
            array (
                'id' => 6164,
                'state_id' => 18,
                'name' => 'Inácio Martins',
            ),
            
            array (
                'id' => 6165,
                'state_id' => 18,
                'name' => 'Inajá',
            ),
            
            array (
                'id' => 6167,
                'state_id' => 18,
                'name' => 'Indianópolis',
            ),
            
            array (
                'id' => 6172,
                'state_id' => 18,
                'name' => 'Ipiranga',
            ),
            
            array (
                'id' => 6175,
                'state_id' => 18,
                'name' => 'Iporã',
            ),
            
            array (
                'id' => 6176,
                'state_id' => 18,
                'name' => 'Iracema do Oeste',
            ),
            
            array (
                'id' => 6178,
                'state_id' => 18,
                'name' => 'Irati',
            ),
            
            array (
                'id' => 6180,
                'state_id' => 18,
                'name' => 'Iretama',
            ),
            
            array (
                'id' => 6181,
                'state_id' => 18,
                'name' => 'Itaguajé',
            ),
            
            array (
                'id' => 6183,
                'state_id' => 18,
                'name' => 'Itaipulândia',
            ),
            
            array (
                'id' => 6184,
                'state_id' => 18,
                'name' => 'Itambaracá',
            ),
            
            array (
                'id' => 6185,
                'state_id' => 18,
                'name' => 'Itambé',
            ),
            
            array (
                'id' => 6189,
                'state_id' => 18,
                'name' => 'Itapejara d\'Oeste',
            ),
            
            array (
                'id' => 6190,
                'state_id' => 18,
                'name' => 'Itaperuçu',
            ),
            
            array (
                'id' => 6192,
                'state_id' => 18,
                'name' => 'Itaúna do Sul',
            ),
            
            array (
                'id' => 6194,
                'state_id' => 18,
                'name' => 'Ivaí',
            ),
            
            array (
                'id' => 6196,
                'state_id' => 18,
                'name' => 'Ivaiporã',
            ),
            
            array (
                'id' => 6198,
                'state_id' => 18,
                'name' => 'Ivaté',
            ),
            
            array (
                'id' => 6199,
                'state_id' => 18,
                'name' => 'Ivatuba',
            ),
            
            array (
                'id' => 6201,
                'state_id' => 18,
                'name' => 'Jaboti',
            ),
            
            array (
                'id' => 6205,
                'state_id' => 18,
                'name' => 'Jacarezinho',
            ),
            
            array (
                'id' => 6211,
                'state_id' => 18,
                'name' => 'Jaguapitã',
            ),
            
            array (
                'id' => 6212,
                'state_id' => 18,
                'name' => 'Jaguariaíva',
            ),
            
            array (
                'id' => 6213,
                'state_id' => 18,
                'name' => 'Jandaia do Sul',
            ),
            
            array (
                'id' => 6216,
                'state_id' => 18,
                'name' => 'Janiópolis',
            ),
            
            array (
                'id' => 6217,
                'state_id' => 18,
                'name' => 'Japira',
            ),
            
            array (
                'id' => 6218,
                'state_id' => 18,
                'name' => 'Japurá',
            ),
            
            array (
                'id' => 6221,
                'state_id' => 18,
                'name' => 'Jardim Alegre',
            ),
            
            array (
                'id' => 6222,
                'state_id' => 18,
                'name' => 'Jardim Olinda',
            ),
            
            array (
                'id' => 6226,
                'state_id' => 18,
                'name' => 'Jataizinho',
            ),
            
            array (
                'id' => 6228,
                'state_id' => 18,
                'name' => 'Jesuítas',
            ),
            
            array (
                'id' => 6230,
                'state_id' => 18,
                'name' => 'Joaquim Távora',
            ),
            
            array (
                'id' => 6234,
                'state_id' => 18,
                'name' => 'Jundiaí do Sul',
            ),
            
            array (
                'id' => 6235,
                'state_id' => 18,
                'name' => 'Juranda',
            ),
            
            array (
                'id' => 6236,
                'state_id' => 18,
                'name' => 'Jussara',
            ),
            
            array (
                'id' => 6238,
                'state_id' => 18,
                'name' => 'Kaloré',
            ),
            
            array (
                'id' => 6254,
                'state_id' => 18,
                'name' => 'Lapa',
            ),
            
            array (
                'id' => 6256,
                'state_id' => 18,
                'name' => 'Laranjal',
            ),
            
            array (
                'id' => 6257,
                'state_id' => 18,
                'name' => 'Laranjeiras do Sul',
            ),
            
            array (
                'id' => 6261,
                'state_id' => 18,
                'name' => 'Leópolis',
            ),
            
            array (
                'id' => 6263,
                'state_id' => 18,
                'name' => 'Lidianópolis',
            ),
            
            array (
                'id' => 6264,
                'state_id' => 18,
                'name' => 'Lindoeste',
            ),
            
            array (
                'id' => 6266,
                'state_id' => 18,
                'name' => 'Loanda',
            ),
            
            array (
                'id' => 6267,
                'state_id' => 18,
                'name' => 'Lobato',
            ),
            
            array (
                'id' => 6268,
                'state_id' => 18,
                'name' => 'Londrina',
            ),
            
            array (
                'id' => 6272,
                'state_id' => 18,
                'name' => 'Luiziana',
            ),
            
            array (
                'id' => 6273,
                'state_id' => 18,
                'name' => 'Lunardelli',
            ),
            
            array (
                'id' => 6274,
                'state_id' => 18,
                'name' => 'Lupionópolis',
            ),
            
            array (
                'id' => 6279,
                'state_id' => 18,
                'name' => 'Mallet',
            ),
            
            array (
                'id' => 6281,
                'state_id' => 18,
                'name' => 'Mamborê',
            ),
            
            array (
                'id' => 6283,
                'state_id' => 18,
                'name' => 'Mandaguaçu',
            ),
            
            array (
                'id' => 6284,
                'state_id' => 18,
                'name' => 'Mandaguari',
            ),
            
            array (
                'id' => 6286,
                'state_id' => 18,
                'name' => 'Mandirituba',
            ),
            
            array (
                'id' => 6287,
                'state_id' => 18,
                'name' => 'Manfrinópolis',
            ),
            
            array (
                'id' => 6288,
                'state_id' => 18,
                'name' => 'Mangueirinha',
            ),
            
            array (
                'id' => 6289,
                'state_id' => 18,
                'name' => 'Manoel Ribas',
            ),
            
            array (
                'id' => 6297,
                'state_id' => 18,
                'name' => 'Marechal Cândido Rondon',
            ),
            
            array (
                'id' => 6299,
                'state_id' => 18,
                'name' => 'Maria Helena',
            ),
            
            array (
                'id' => 6301,
                'state_id' => 18,
                'name' => 'Marialva',
            ),
            
            array (
                'id' => 6303,
                'state_id' => 18,
                'name' => 'Marilândia do Sul',
            ),
            
            array (
                'id' => 6304,
                'state_id' => 18,
                'name' => 'Marilena',
            ),
            
            array (
                'id' => 6306,
                'state_id' => 18,
                'name' => 'Mariluz',
            ),
            
            array (
                'id' => 6308,
                'state_id' => 18,
                'name' => 'Maringá',
            ),
            
            array (
                'id' => 6309,
                'state_id' => 18,
                'name' => 'Mariópolis',
            ),
            
            array (
                'id' => 6310,
                'state_id' => 18,
                'name' => 'Maripá',
            ),
            
            array (
                'id' => 6314,
                'state_id' => 18,
                'name' => 'Marmeleiro',
            ),
            
            array (
                'id' => 6316,
                'state_id' => 18,
                'name' => 'Marquinho',
            ),
            
            array (
                'id' => 6319,
                'state_id' => 18,
                'name' => 'Marumbi',
            ),
            
            array (
                'id' => 6320,
                'state_id' => 18,
                'name' => 'Matelândia',
            ),
            
            array (
                'id' => 6321,
                'state_id' => 18,
                'name' => 'Matinhos',
            ),
            
            array (
                'id' => 6324,
                'state_id' => 18,
                'name' => 'Mato Rico',
            ),
            
            array (
                'id' => 6325,
                'state_id' => 18,
                'name' => 'Mauá da Serra',
            ),
            
            array (
                'id' => 6326,
                'state_id' => 18,
                'name' => 'Medianeira',
            ),
            
            array (
                'id' => 6330,
                'state_id' => 18,
                'name' => 'Mercedes',
            ),
            
            array (
                'id' => 6331,
                'state_id' => 18,
                'name' => 'Mirador',
            ),
            
            array (
                'id' => 6334,
                'state_id' => 18,
                'name' => 'Miraselva',
            ),
            
            array (
                'id' => 6335,
                'state_id' => 18,
                'name' => 'Missal',
            ),
            
            array (
                'id' => 6338,
                'state_id' => 18,
                'name' => 'Moreira Sales',
            ),
            
            array (
                'id' => 6339,
                'state_id' => 18,
                'name' => 'Morretes',
            ),
            
            array (
                'id' => 6342,
                'state_id' => 18,
                'name' => 'Munhoz de Melo',
            ),
            
            array (
                'id' => 6349,
                'state_id' => 18,
                'name' => 'Nossa Senhora das Graças',
            ),
            
            array (
                'id' => 6352,
                'state_id' => 18,
                'name' => 'Nova Aliança do Ivaí',
            ),
            
            array (
                'id' => 6354,
                'state_id' => 18,
                'name' => 'Nova América da Colina',
            ),
            
            array (
                'id' => 6356,
                'state_id' => 18,
                'name' => 'Nova Aurora',
            ),
            
            array (
                'id' => 6361,
                'state_id' => 18,
                'name' => 'Nova Cantu',
            ),
            
            array (
                'id' => 6364,
                'state_id' => 18,
                'name' => 'Nova Esperança',
            ),
            
            array (
                'id' => 6365,
                'state_id' => 18,
                'name' => 'Nova Esperança do Sudoeste',
            ),
            
            array (
                'id' => 6366,
                'state_id' => 18,
                'name' => 'Nova Fátima',
            ),
            
            array (
                'id' => 6367,
                'state_id' => 18,
                'name' => 'Nova Laranjeiras',
            ),
            
            array (
                'id' => 6368,
                'state_id' => 18,
                'name' => 'Nova Londrina',
            ),
            
            array (
                'id' => 6370,
                'state_id' => 18,
                'name' => 'Nova Olímpia',
            ),
            
            array (
                'id' => 6371,
                'state_id' => 18,
                'name' => 'Nova Prata do Iguaçu',
            ),
            
            array (
                'id' => 6373,
                'state_id' => 18,
                'name' => 'Nova Santa Bárbara',
            ),
            
            array (
                'id' => 6374,
                'state_id' => 18,
                'name' => 'Nova Santa Rosa',
            ),
            
            array (
                'id' => 6375,
                'state_id' => 18,
                'name' => 'Nova Tebas',
            ),
            
            array (
                'id' => 6380,
                'state_id' => 18,
                'name' => 'Novo Itacolomi',
            ),
            
            array (
                'id' => 6390,
                'state_id' => 18,
                'name' => 'Ortigueira',
            ),
            
            array (
                'id' => 6392,
                'state_id' => 18,
                'name' => 'Ourizona',
            ),
            
            array (
                'id' => 6393,
                'state_id' => 18,
                'name' => 'Ouro Verde do Oeste',
            ),
            
            array (
                'id' => 6396,
                'state_id' => 18,
                'name' => 'Paiçandu',
            ),
            
            array (
                'id' => 6401,
                'state_id' => 18,
                'name' => 'Palmas',
            ),
            
            array (
                'id' => 6402,
                'state_id' => 18,
                'name' => 'Palmeira',
            ),
            
            array (
                'id' => 6406,
                'state_id' => 18,
                'name' => 'Palmital',
            ),
            
            array (
                'id' => 6410,
                'state_id' => 18,
                'name' => 'Palotina',
            ),
            
            array (
                'id' => 6414,
                'state_id' => 18,
                'name' => 'Paraíso do Norte',
            ),
            
            array (
                'id' => 6416,
                'state_id' => 18,
                'name' => 'Paranacity',
            ),
            
            array (
                'id' => 6418,
                'state_id' => 18,
                'name' => 'Paranaguá',
            ),
            
            array (
                'id' => 6419,
                'state_id' => 18,
                'name' => 'Paranapoema',
            ),
            
            array (
                'id' => 6420,
                'state_id' => 18,
                'name' => 'Paranavaí',
            ),
            
            array (
                'id' => 6426,
                'state_id' => 18,
                'name' => 'Pato Bragado',
            ),
            
            array (
                'id' => 6427,
                'state_id' => 18,
                'name' => 'Pato Branco',
            ),
            
            array (
                'id' => 6430,
                'state_id' => 18,
                'name' => 'Paula Freitas',
            ),
            
            array (
                'id' => 6432,
                'state_id' => 18,
                'name' => 'Paulo Frontin',
            ),
            
            array (
                'id' => 6433,
                'state_id' => 18,
                'name' => 'Peabiru',
            ),
            
            array (
                'id' => 6438,
                'state_id' => 18,
                'name' => 'Perobal',
            ),
            
            array (
                'id' => 6439,
                'state_id' => 18,
                'name' => 'Pérola',
            ),
            
            array (
                'id' => 6440,
                'state_id' => 18,
                'name' => 'Pérola d\'Oeste',
            ),
            
            array (
                'id' => 6443,
                'state_id' => 18,
                'name' => 'Piên',
            ),
            
            array (
                'id' => 6445,
                'state_id' => 18,
                'name' => 'Pinhais',
            ),
            
            array (
                'id' => 6446,
                'state_id' => 18,
                'name' => 'Pinhal de São Bento',
            ),
            
            array (
                'id' => 6448,
                'state_id' => 18,
                'name' => 'Pinhalão',
            ),
            
            array (
                'id' => 6454,
                'state_id' => 18,
                'name' => 'Pinhão',
            ),
            
            array (
                'id' => 6458,
                'state_id' => 18,
                'name' => 'Piraí do Sul',
            ),
            
            array (
                'id' => 6460,
                'state_id' => 18,
                'name' => 'Piraquara',
            ),
            
            array (
                'id' => 6462,
                'state_id' => 18,
                'name' => 'Pitanga',
            ),
            
            array (
                'id' => 6463,
                'state_id' => 18,
                'name' => 'Pitangueiras',
            ),
            
            array (
                'id' => 6465,
                'state_id' => 18,
                'name' => 'Planaltina do Paraná',
            ),
            
            array (
                'id' => 6466,
                'state_id' => 18,
                'name' => 'Planalto',
            ),
            
            array (
                'id' => 6471,
                'state_id' => 18,
                'name' => 'Ponta Grossa',
            ),
            
            array (
                'id' => 6472,
                'state_id' => 18,
                'name' => 'Pontal do Paraná',
            ),
            
            array (
                'id' => 6473,
                'state_id' => 18,
                'name' => 'Porecatu',
            ),
            
            array (
                'id' => 6476,
                'state_id' => 18,
                'name' => 'Porto Amazonas',
            ),
            
            array (
                'id' => 6477,
                'state_id' => 18,
                'name' => 'Porto Barreiro',
            ),
            
            array (
                'id' => 6484,
                'state_id' => 18,
                'name' => 'Porto Rico',
            ),
            
            array (
                'id' => 6489,
                'state_id' => 18,
                'name' => 'Porto Vitória',
            ),
            
            array (
                'id' => 6490,
                'state_id' => 18,
                'name' => 'Prado Ferreira',
            ),
            
            array (
                'id' => 6491,
                'state_id' => 18,
                'name' => 'Pranchita',
            ),
            
            array (
                'id' => 6494,
                'state_id' => 18,
                'name' => 'Presidente Castelo Branco',
            ),
            
            array (
                'id' => 6496,
                'state_id' => 18,
                'name' => 'Primeiro de Maio',
            ),
            
            array (
                'id' => 6498,
                'state_id' => 18,
                'name' => 'Prudentópolis',
            ),
            
            array (
                'id' => 6500,
                'state_id' => 18,
                'name' => 'Quatiguá',
            ),
            
            array (
                'id' => 6501,
                'state_id' => 18,
                'name' => 'Quatro Barras',
            ),
            
            array (
                'id' => 6502,
                'state_id' => 18,
                'name' => 'Quatro Pontes',
            ),
            
            array (
                'id' => 6504,
                'state_id' => 18,
                'name' => 'Quedas do Iguaçu',
            ),
            
            array (
                'id' => 6506,
                'state_id' => 18,
                'name' => 'Querência do Norte',
            ),
            
            array (
                'id' => 6507,
                'state_id' => 18,
                'name' => 'Quinta do Sol',
            ),
            
            array (
                'id' => 6509,
                'state_id' => 18,
                'name' => 'Quitandinha',
            ),
            
            array (
                'id' => 6510,
                'state_id' => 18,
                'name' => 'Ramilândia',
            ),
            
            array (
                'id' => 6511,
                'state_id' => 18,
                'name' => 'Rancho Alegre',
            ),
            
            array (
                'id' => 6512,
                'state_id' => 18,
                'name' => 'Rancho Alegre d\'Oeste',
            ),
            
            array (
                'id' => 6513,
                'state_id' => 18,
                'name' => 'Realeza',
            ),
            
            array (
                'id' => 6514,
                'state_id' => 18,
                'name' => 'Rebouças',
            ),
            
            array (
                'id' => 6517,
                'state_id' => 18,
                'name' => 'Renascença',
            ),
            
            array (
                'id' => 6518,
                'state_id' => 18,
                'name' => 'Reserva',
            ),
            
            array (
                'id' => 6519,
                'state_id' => 18,
                'name' => 'Reserva do Iguaçu',
            ),
            
            array (
                'id' => 6523,
                'state_id' => 18,
                'name' => 'Ribeirão Claro',
            ),
            
            array (
                'id' => 6524,
                'state_id' => 18,
                'name' => 'Ribeirão do Pinhal',
            ),
            
            array (
                'id' => 6527,
                'state_id' => 18,
                'name' => 'Rio Azul',
            ),
            
            array (
                'id' => 6528,
                'state_id' => 18,
                'name' => 'Rio Bom',
            ),
            
            array (
                'id' => 6530,
                'state_id' => 18,
                'name' => 'Rio Bonito do Iguaçu',
            ),
            
            array (
                'id' => 6531,
                'state_id' => 18,
                'name' => 'Rio Branco do Ivaí',
            ),
            
            array (
                'id' => 6532,
                'state_id' => 18,
                'name' => 'Rio Branco do Sul',
            ),
            
            array (
                'id' => 6543,
                'state_id' => 18,
                'name' => 'Rio Negro',
            ),
            
            array (
                'id' => 6554,
                'state_id' => 18,
                'name' => 'Rolândia',
            ),
            
            array (
                'id' => 6556,
                'state_id' => 18,
                'name' => 'Roncador',
            ),
            
            array (
                'id' => 6558,
                'state_id' => 18,
                'name' => 'Rondon',
            ),
            
            array (
                'id' => 6559,
                'state_id' => 18,
                'name' => 'Rosário do Ivaí',
            ),
            
            array (
                'id' => 6560,
                'state_id' => 18,
                'name' => 'Sabáudia',
            ),
            
            array (
                'id' => 6562,
                'state_id' => 18,
                'name' => 'Salgado Filho',
            ),
            
            array (
                'id' => 6565,
                'state_id' => 18,
                'name' => 'Salto do Itararé',
            ),
            
            array (
                'id' => 6566,
                'state_id' => 18,
                'name' => 'Salto do Lontra',
            ),
            
            array (
                'id' => 6569,
                'state_id' => 18,
                'name' => 'Santa Amélia',
            ),
            
            array (
                'id' => 6570,
                'state_id' => 18,
                'name' => 'Santa Cecília do Pavão',
            ),
            
            array (
                'id' => 6572,
                'state_id' => 18,
                'name' => 'Santa Cruz de Monte Castelo',
            ),
            
            array (
                'id' => 6575,
                'state_id' => 18,
                'name' => 'Santa Fé',
            ),
            
            array (
                'id' => 6577,
                'state_id' => 18,
                'name' => 'Santa Helena',
            ),
            
            array (
                'id' => 6578,
                'state_id' => 18,
                'name' => 'Santa Inês',
            ),
            
            array (
                'id' => 6579,
                'state_id' => 18,
                'name' => 'Santa Isabel do Ivaí',
            ),
            
            array (
                'id' => 6580,
                'state_id' => 18,
                'name' => 'Santa Izabel do Oeste',
            ),
            
            array (
                'id' => 6581,
                'state_id' => 18,
                'name' => 'Santa Lúcia',
            ),
            
            array (
                'id' => 6587,
                'state_id' => 18,
                'name' => 'Santa Maria do Oeste',
            ),
            
            array (
                'id' => 6589,
                'state_id' => 18,
                'name' => 'Santa Mariana',
            ),
            
            array (
                'id' => 6590,
                'state_id' => 18,
                'name' => 'Santa Mônica',
            ),
            
            array (
                'id' => 6597,
                'state_id' => 18,
                'name' => 'Santa Tereza do Oeste',
            ),
            
            array (
                'id' => 6598,
                'state_id' => 18,
                'name' => 'Santa Terezinha de Itaipu',
            ),
            
            array (
                'id' => 6601,
                'state_id' => 18,
                'name' => 'Santana do Itararé',
            ),
            
            array (
                'id' => 6604,
                'state_id' => 18,
                'name' => 'Santo Antônio da Platina',
            ),
            
            array (
                'id' => 6605,
                'state_id' => 18,
                'name' => 'Santo Antônio do Caiuá',
            ),
            
            array (
                'id' => 6608,
                'state_id' => 18,
                'name' => 'Santo Antônio do Paraíso',
            ),
            
            array (
                'id' => 6609,
                'state_id' => 18,
                'name' => 'Santo Antônio do Sudoeste',
            ),
            
            array (
                'id' => 6610,
                'state_id' => 18,
                'name' => 'Santo Inácio',
            ),
            
            array (
                'id' => 6616,
                'state_id' => 18,
                'name' => 'São Carlos do Ivaí',
            ),
            
            array (
                'id' => 6632,
                'state_id' => 18,
                'name' => 'São Jerônimo da Serra',
            ),
            
            array (
                'id' => 6633,
                'state_id' => 18,
                'name' => 'São João',
            ),
            
            array (
                'id' => 6639,
                'state_id' => 18,
                'name' => 'São João do Caiuá',
            ),
            
            array (
                'id' => 6640,
                'state_id' => 18,
                'name' => 'São João do Ivaí',
            ),
            
            array (
                'id' => 6642,
                'state_id' => 18,
                'name' => 'São João do Triunfo',
            ),
            
            array (
                'id' => 6646,
                'state_id' => 18,
                'name' => 'São Jorge D\'Oeste',
            ),
            
            array (
                'id' => 6647,
                'state_id' => 18,
                'name' => 'São Jorge do Ivaí',
            ),
            
            array (
                'id' => 6648,
                'state_id' => 18,
                'name' => 'São Jorge do Patrocínio',
            ),
            
            array (
                'id' => 6651,
                'state_id' => 18,
                'name' => 'São José da Boa Vista',
            ),
            
            array (
                'id' => 6652,
                'state_id' => 18,
                'name' => 'São José das Palmeiras',
            ),
            
            array (
                'id' => 6656,
                'state_id' => 18,
                'name' => 'São José dos Pinhais',
            ),
            
            array (
                'id' => 6670,
                'state_id' => 18,
                'name' => 'São Manoel do Paraná',
            ),
            
            array (
                'id' => 6674,
                'state_id' => 18,
                'name' => 'São Mateus do Sul',
            ),
            
            array (
                'id' => 6679,
                'state_id' => 18,
                'name' => 'São Miguel do Iguaçu',
            ),
            
            array (
                'id' => 6687,
                'state_id' => 18,
                'name' => 'São Pedro do Iguaçu',
            ),
            
            array (
                'id' => 6688,
                'state_id' => 18,
                'name' => 'São Pedro do Ivaí',
            ),
            
            array (
                'id' => 6689,
                'state_id' => 18,
                'name' => 'São Pedro do Paraná',
            ),
            
            array (
                'id' => 6702,
                'state_id' => 18,
                'name' => 'São Sebastião da Amoreira',
            ),
            
            array (
                'id' => 6704,
                'state_id' => 18,
                'name' => 'São Tomé',
            ),
            
            array (
                'id' => 6708,
                'state_id' => 18,
                'name' => 'Sapopema',
            ),
            
            array (
                'id' => 6709,
                'state_id' => 18,
                'name' => 'Sarandi',
            ),
            
            array (
                'id' => 6711,
                'state_id' => 18,
                'name' => 'Saudade do Iguaçu',
            ),
            
            array (
                'id' => 6718,
                'state_id' => 18,
                'name' => 'Sengés',
            ),
            
            array (
                'id' => 6722,
                'state_id' => 18,
                'name' => 'Serranópolis do Iguaçu',
            ),
            
            array (
                'id' => 6727,
                'state_id' => 18,
                'name' => 'Sertaneja',
            ),
            
            array (
                'id' => 6728,
                'state_id' => 18,
                'name' => 'Sertanópolis',
            ),
            
            array (
                'id' => 6734,
                'state_id' => 18,
                'name' => 'Siqueira Campos',
            ),
            
            array (
                'id' => 6737,
                'state_id' => 18,
                'name' => 'Sulina',
            ),
            
            array (
                'id' => 6742,
                'state_id' => 18,
                'name' => 'Tamarana',
            ),
            
            array (
                'id' => 6744,
                'state_id' => 18,
                'name' => 'Tamboara',
            ),
            
            array (
                'id' => 6746,
                'state_id' => 18,
                'name' => 'Tapejara',
            ),
            
            array (
                'id' => 6747,
                'state_id' => 18,
                'name' => 'Tapira',
            ),
            
            array (
                'id' => 6753,
                'state_id' => 18,
                'name' => 'Teixeira Soares',
            ),
            
            array (
                'id' => 6754,
                'state_id' => 18,
                'name' => 'Telêmaco Borba',
            ),
            
            array (
                'id' => 6758,
                'state_id' => 18,
                'name' => 'Terra Boa',
            ),
            
            array (
                'id' => 6760,
                'state_id' => 18,
                'name' => 'Terra Rica',
            ),
            
            array (
                'id' => 6761,
                'state_id' => 18,
                'name' => 'Terra Roxa',
            ),
            
            array (
                'id' => 6762,
                'state_id' => 18,
                'name' => 'Tibagi',
            ),
            
            array (
                'id' => 6763,
                'state_id' => 18,
                'name' => 'Tijucas do Sul',
            ),
            
            array (
                'id' => 6770,
                'state_id' => 18,
                'name' => 'Toledo',
            ),
            
            array (
                'id' => 6772,
                'state_id' => 18,
                'name' => 'Tomazina',
            ),
            
            array (
                'id' => 6774,
                'state_id' => 18,
                'name' => 'Três Barras do Paraná',
            ),
            
            array (
                'id' => 6786,
                'state_id' => 18,
                'name' => 'Tunas do Paraná',
            ),
            
            array (
                'id' => 6787,
                'state_id' => 18,
                'name' => 'Tuneiras do Oeste',
            ),
            
            array (
                'id' => 6788,
                'state_id' => 18,
                'name' => 'Tupãssi',
            ),
            
            array (
                'id' => 6790,
                'state_id' => 18,
                'name' => 'Turvo',
            ),
            
            array (
                'id' => 6793,
                'state_id' => 18,
                'name' => 'Ubiratã',
            ),
            
            array (
                'id' => 6794,
                'state_id' => 18,
                'name' => 'Umuarama',
            ),
            
            array (
                'id' => 6796,
                'state_id' => 18,
                'name' => 'União da Vitória',
            ),
            
            array (
                'id' => 6798,
                'state_id' => 18,
                'name' => 'Uniflor',
            ),
            
            array (
                'id' => 6799,
                'state_id' => 18,
                'name' => 'Uraí',
            ),
            
            array (
                'id' => 6806,
                'state_id' => 18,
                'name' => 'Ventania',
            ),
            
            array (
                'id' => 6807,
                'state_id' => 18,
                'name' => 'Vera Cruz do Oeste',
            ),
            
            array (
                'id' => 6809,
                'state_id' => 18,
                'name' => 'Verê',
            ),
            
            array (
                'id' => 6812,
                'state_id' => 18,
                'name' => 'Alto Paraíso',
            ),
            
            array (
                'id' => 6827,
                'state_id' => 18,
                'name' => 'Virmond',
            ),
            
            array (
                'id' => 6832,
                'state_id' => 18,
                'name' => 'Vitorino',
            ),
            
            array (
                'id' => 6834,
                'state_id' => 18,
                'name' => 'Wenceslau Braz',
            ),
            
            array (
                'id' => 6835,
                'state_id' => 18,
                'name' => 'Xambrê',
            ),
            
            array (
                'id' => 6838,
                'state_id' => 18,
                'name' => 'Quarto Centenário',
            ),
            
            array (
                'id' => 6845,
                'state_id' => 19,
                'name' => 'Angra dos Reis',
            ),
            
            array (
                'id' => 6847,
                'state_id' => 19,
                'name' => 'Aperibé',
            ),
            
            array (
                'id' => 6848,
                'state_id' => 19,
                'name' => 'Araruama',
            ),
            
            array (
                'id' => 6849,
                'state_id' => 19,
                'name' => 'Areal',
            ),
            
            array (
                'id' => 6850,
                'state_id' => 19,
                'name' => 'Armação dos Búzios',
            ),
            
            array (
                'id' => 6851,
                'state_id' => 19,
                'name' => 'Arraial do Cabo',
            ),
            
            array (
                'id' => 6862,
                'state_id' => 19,
                'name' => 'Barra do Piraí',
            ),
            
            array (
                'id' => 6863,
                'state_id' => 19,
                'name' => 'Barra Mansa',
            ),
            
            array (
                'id' => 6865,
                'state_id' => 19,
                'name' => 'Belford Roxo',
            ),
            
            array (
                'id' => 6870,
                'state_id' => 19,
                'name' => 'Bom Jardim',
            ),
            
            array (
                'id' => 6871,
                'state_id' => 19,
                'name' => 'Bom Jesus do Itabapoana',
            ),
            
            array (
                'id' => 6873,
                'state_id' => 19,
                'name' => 'Cabo Frio',
            ),
            
            array (
                'id' => 6875,
                'state_id' => 19,
                'name' => 'Cachoeiras de Macacu',
            ),
            
            array (
                'id' => 6879,
                'state_id' => 19,
                'name' => 'Cambuci',
            ),
            
            array (
                'id' => 6881,
                'state_id' => 19,
                'name' => 'Campos dos Goytacazes',
            ),
            
            array (
                'id' => 6883,
                'state_id' => 19,
                'name' => 'Cantagalo',
            ),
            
            array (
                'id' => 6885,
                'state_id' => 19,
                'name' => 'Carapebus',
            ),
            
            array (
                'id' => 6886,
                'state_id' => 19,
                'name' => 'Cardoso Moreira',
            ),
            
            array (
                'id' => 6887,
                'state_id' => 19,
                'name' => 'Carmo',
            ),
            
            array (
                'id' => 6889,
                'state_id' => 19,
                'name' => 'Casimiro de Abreu',
            ),
            
            array (
                'id' => 6893,
                'state_id' => 19,
                'name' => 'Comendador Levy Gasparian',
            ),
            
            array (
                'id' => 6896,
                'state_id' => 19,
                'name' => 'Conceição de Macabu',
            ),
            
            array (
                'id' => 6900,
                'state_id' => 19,
                'name' => 'Cordeiro',
            ),
            
            array (
                'id' => 6911,
                'state_id' => 19,
                'name' => 'Duas Barras',
            ),
            
            array (
                'id' => 6912,
                'state_id' => 19,
                'name' => 'Duque de Caxias',
            ),
            
            array (
                'id' => 6914,
                'state_id' => 19,
                'name' => 'Engenheiro Paulo de Frontin',
            ),
            
            array (
                'id' => 6927,
                'state_id' => 19,
                'name' => 'Guapimirim',
            ),
            
            array (
                'id' => 6932,
                'state_id' => 19,
                'name' => 'Iguaba Grande',
            ),
            
            array (
                'id' => 6941,
                'state_id' => 19,
                'name' => 'Itaboraí',
            ),
            
            array (
                'id' => 6943,
                'state_id' => 19,
                'name' => 'Itaguaí',
            ),
            
            array (
                'id' => 6947,
                'state_id' => 19,
                'name' => 'Italva',
            ),
            
            array (
                'id' => 6949,
                'state_id' => 19,
                'name' => 'Itaocara',
            ),
            
            array (
                'id' => 6950,
                'state_id' => 19,
                'name' => 'Itaperuna',
            ),
            
            array (
                'id' => 6951,
                'state_id' => 19,
                'name' => 'Itatiaia',
            ),
            
            array (
                'id' => 6955,
                'state_id' => 19,
                'name' => 'Japeri',
            ),
            
            array (
                'id' => 6957,
                'state_id' => 19,
                'name' => 'Laje do Muriaé',
            ),
            
            array (
                'id' => 6962,
                'state_id' => 19,
                'name' => 'Macaé',
            ),
            
            array (
                'id' => 6963,
                'state_id' => 19,
                'name' => 'Macuco',
            ),
            
            array (
                'id' => 6964,
                'state_id' => 19,
                'name' => 'Magé',
            ),
            
            array (
                'id' => 6966,
                'state_id' => 19,
                'name' => 'Mangaratiba',
            ),
            
            array (
                'id' => 6971,
                'state_id' => 19,
                'name' => 'Maricá',
            ),
            
            array (
                'id' => 6972,
                'state_id' => 19,
                'name' => 'Mendes',
            ),
            
            array (
                'id' => 6973,
                'state_id' => 19,
                'name' => 'Mesquita',
            ),
            
            array (
                'id' => 6974,
                'state_id' => 19,
                'name' => 'Miguel Pereira',
            ),
            
            array (
                'id' => 6975,
                'state_id' => 19,
                'name' => 'Miracema',
            ),
            
            array (
                'id' => 6985,
                'state_id' => 19,
                'name' => 'Natividade',
            ),
            
            array (
                'id' => 6988,
                'state_id' => 19,
                'name' => 'Nilópolis',
            ),
            
            array (
                'id' => 6989,
                'state_id' => 19,
                'name' => 'Niterói',
            ),
            
            array (
                'id' => 6993,
                'state_id' => 19,
                'name' => 'Nova Friburgo',
            ),
            
            array (
                'id' => 6994,
                'state_id' => 19,
                'name' => 'Nova Iguaçu',
            ),
            
            array (
                'id' => 6999,
                'state_id' => 19,
                'name' => 'Paracambi',
            ),
            
            array (
                'id' => 7000,
                'state_id' => 19,
                'name' => 'Paraíba do Sul',
            ),
            
            array (
                'id' => 7004,
                'state_id' => 19,
                'name' => 'Parati',
            ),
            
            array (
                'id' => 7007,
                'state_id' => 19,
                'name' => 'Paty do Alferes',
            ),
            
            array (
                'id' => 7012,
                'state_id' => 19,
                'name' => 'Petrópolis',
            ),
            
            array (
                'id' => 7015,
                'state_id' => 19,
                'name' => 'Pinheiral',
            ),
            
            array (
                'id' => 7017,
                'state_id' => 19,
                'name' => 'Piraí',
            ),
            
            array (
                'id' => 7020,
                'state_id' => 19,
                'name' => 'Porciúncula',
            ),
            
            array (
                'id' => 7023,
                'state_id' => 19,
                'name' => 'Porto Real',
            ),
            
            array (
                'id' => 7030,
                'state_id' => 19,
                'name' => 'Quatis',
            ),
            
            array (
                'id' => 7031,
                'state_id' => 19,
                'name' => 'Queimados',
            ),
            
            array (
                'id' => 7032,
                'state_id' => 19,
                'name' => 'Quissamã',
            ),
            
            array (
                'id' => 7035,
                'state_id' => 19,
                'name' => 'Resende',
            ),
            
            array (
                'id' => 7039,
                'state_id' => 19,
                'name' => 'Rio Bonito',
            ),
            
            array (
                'id' => 7040,
                'state_id' => 19,
                'name' => 'Rio Claro',
            ),
            
            array (
                'id' => 7041,
                'state_id' => 19,
                'name' => 'Rio das Flores',
            ),
            
            array (
                'id' => 7042,
                'state_id' => 19,
                'name' => 'Rio das Ostras',
            ),
            
            array (
                'id' => 7043,
                'state_id' => 19,
                'name' => 'Rio de Janeiro',
            ),
            
            array (
                'id' => 7057,
                'state_id' => 19,
                'name' => 'Santa Maria Madalena',
            ),
            
            array (
                'id' => 7062,
                'state_id' => 19,
                'name' => 'Santo Antônio de Pádua',
            ),
            
            array (
                'id' => 7065,
                'state_id' => 19,
                'name' => 'São Fidélis',
            ),
            
            array (
                'id' => 7066,
                'state_id' => 19,
                'name' => 'São Francisco de Itabapoana',
            ),
            
            array (
                'id' => 7067,
                'state_id' => 19,
                'name' => 'São Gonçalo',
            ),
            
            array (
                'id' => 7068,
                'state_id' => 19,
                'name' => 'São João da Barra',
            ),
            
            array (
                'id' => 7069,
                'state_id' => 19,
                'name' => 'São João de Meriti',
            ),
            
            array (
                'id' => 7073,
                'state_id' => 19,
                'name' => 'São José de Ubá',
            ),
            
            array (
                'id' => 7076,
                'state_id' => 19,
                'name' => 'São José do Vale do Rio Preto',
            ),
            
            array (
                'id' => 7078,
                'state_id' => 19,
                'name' => 'São Pedro da Aldeia',
            ),
            
            array (
                'id' => 7080,
                'state_id' => 19,
                'name' => 'São Sebastião do Alto',
            ),
            
            array (
                'id' => 7084,
                'state_id' => 19,
                'name' => 'Sapucaia',
            ),
            
            array (
                'id' => 7085,
                'state_id' => 19,
                'name' => 'Saquarema',
            ),
            
            array (
                'id' => 7088,
                'state_id' => 19,
                'name' => 'Seropédica',
            ),
            
            array (
                'id' => 7091,
                'state_id' => 19,
                'name' => 'Silva Jardim',
            ),
            
            array (
                'id' => 7095,
                'state_id' => 19,
                'name' => 'Sumidouro',
            ),
            
            array (
                'id' => 7099,
                'state_id' => 19,
                'name' => 'Tanguá',
            ),
            
            array (
                'id' => 7102,
                'state_id' => 19,
                'name' => 'Teresópolis',
            ),
            
            array (
                'id' => 7104,
                'state_id' => 19,
                'name' => 'Trajano de Morais',
            ),
            
            array (
                'id' => 7107,
                'state_id' => 19,
                'name' => 'Três Rios',
            ),
            
            array (
                'id' => 7110,
                'state_id' => 19,
                'name' => 'Valença',
            ),
            
            array (
                'id' => 7112,
                'state_id' => 19,
                'name' => 'Varre-Sai',
            ),
            
            array (
                'id' => 7113,
                'state_id' => 19,
                'name' => 'Vassouras',
            ),
            
            array (
                'id' => 7121,
                'state_id' => 19,
                'name' => 'Volta Redonda',
            ),
            
            array (
                'id' => 7124,
                'state_id' => 20,
                'name' => 'Acari',
            ),
            
            array (
                'id' => 7125,
                'state_id' => 20,
                'name' => 'Açu',
            ),
            
            array (
                'id' => 7126,
                'state_id' => 20,
                'name' => 'Afonso Bezerra',
            ),
            
            array (
                'id' => 7127,
                'state_id' => 20,
                'name' => 'Água Nova',
            ),
            
            array (
                'id' => 7128,
                'state_id' => 20,
                'name' => 'Alexandria',
            ),
            
            array (
                'id' => 7129,
                'state_id' => 20,
                'name' => 'Almino Afonso',
            ),
            
            array (
                'id' => 7130,
                'state_id' => 20,
                'name' => 'Alto do Rodrigues',
            ),
            
            array (
                'id' => 7131,
                'state_id' => 20,
                'name' => 'Angicos',
            ),
            
            array (
                'id' => 7132,
                'state_id' => 20,
                'name' => 'Antônio Martins',
            ),
            
            array (
                'id' => 7133,
                'state_id' => 20,
                'name' => 'Apodi',
            ),
            
            array (
                'id' => 7134,
                'state_id' => 20,
                'name' => 'Areia Branca',
            ),
            
            array (
                'id' => 7135,
                'state_id' => 20,
                'name' => 'Arez',
            ),
            
            array (
                'id' => 7136,
                'state_id' => 20,
                'name' => 'Baía Formosa',
            ),
            
            array (
                'id' => 7138,
                'state_id' => 20,
                'name' => 'Baraúna',
            ),
            
            array (
                'id' => 7139,
                'state_id' => 20,
                'name' => 'Barcelona',
            ),
            
            array (
                'id' => 7141,
                'state_id' => 20,
                'name' => 'Bento Fernandes',
            ),
            
            array (
                'id' => 7142,
                'state_id' => 20,
                'name' => 'Boa Saúde',
            ),
            
            array (
                'id' => 7143,
                'state_id' => 20,
                'name' => 'Bodó',
            ),
            
            array (
                'id' => 7144,
                'state_id' => 20,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 7145,
                'state_id' => 20,
                'name' => 'Brejinho',
            ),
            
            array (
                'id' => 7146,
                'state_id' => 20,
                'name' => 'Caiçara do Norte',
            ),
            
            array (
                'id' => 7147,
                'state_id' => 20,
                'name' => 'Caiçara do Rio do Vento',
            ),
            
            array (
                'id' => 7148,
                'state_id' => 20,
                'name' => 'Caicó',
            ),
            
            array (
                'id' => 7149,
                'state_id' => 20,
                'name' => 'Campo Grande',
            ),
            
            array (
                'id' => 7150,
                'state_id' => 20,
                'name' => 'Campo Redondo',
            ),
            
            array (
                'id' => 7151,
                'state_id' => 20,
                'name' => 'Canguaretama',
            ),
            
            array (
                'id' => 7152,
                'state_id' => 20,
                'name' => 'Caraúbas',
            ),
            
            array (
                'id' => 7153,
                'state_id' => 20,
                'name' => 'Carnaúba dos Dantas',
            ),
            
            array (
                'id' => 7154,
                'state_id' => 20,
                'name' => 'Carnaubais',
            ),
            
            array (
                'id' => 7155,
                'state_id' => 20,
                'name' => 'Ceará-Mirim',
            ),
            
            array (
                'id' => 7156,
                'state_id' => 20,
                'name' => 'Cerro Corá',
            ),
            
            array (
                'id' => 7157,
                'state_id' => 20,
                'name' => 'Coronel Ezequiel',
            ),
            
            array (
                'id' => 7158,
                'state_id' => 20,
                'name' => 'Coronel João Pessoa',
            ),
            
            array (
                'id' => 7160,
                'state_id' => 20,
                'name' => 'Cruzeta',
            ),
            
            array (
                'id' => 7161,
                'state_id' => 20,
                'name' => 'Currais Novos',
            ),
            
            array (
                'id' => 7162,
                'state_id' => 20,
                'name' => 'Doutor Severiano',
            ),
            
            array (
                'id' => 7163,
                'state_id' => 20,
                'name' => 'Encanto',
            ),
            
            array (
                'id' => 7164,
                'state_id' => 20,
                'name' => 'Equador',
            ),
            
            array (
                'id' => 7165,
                'state_id' => 20,
                'name' => 'Espírito Santo',
            ),
            
            array (
                'id' => 7166,
                'state_id' => 20,
                'name' => 'Paraú',
            ),
            
            array (
                'id' => 7167,
                'state_id' => 20,
                'name' => 'Extremoz',
            ),
            
            array (
                'id' => 7168,
                'state_id' => 20,
                'name' => 'Felipe Guerra',
            ),
            
            array (
                'id' => 7169,
                'state_id' => 20,
                'name' => 'Fernando Pedroza',
            ),
            
            array (
                'id' => 7171,
                'state_id' => 20,
                'name' => 'Florânia',
            ),
            
            array (
                'id' => 7172,
                'state_id' => 20,
                'name' => 'Francisco Dantas',
            ),
            
            array (
                'id' => 7173,
                'state_id' => 20,
                'name' => 'Frutuoso Gomes',
            ),
            
            array (
                'id' => 7174,
                'state_id' => 20,
                'name' => 'Galinhos',
            ),
            
            array (
                'id' => 7176,
                'state_id' => 20,
                'name' => 'Goianinha',
            ),
            
            array (
                'id' => 7177,
                'state_id' => 20,
                'name' => 'Governador Dix-Sept Rosado',
            ),
            
            array (
                'id' => 7178,
                'state_id' => 20,
                'name' => 'Grossos',
            ),
            
            array (
                'id' => 7179,
                'state_id' => 20,
                'name' => 'Guamaré',
            ),
            
            array (
                'id' => 7180,
                'state_id' => 20,
                'name' => 'Ielmo Marinho',
            ),
            
            array (
                'id' => 7182,
                'state_id' => 20,
                'name' => 'Ipanguaçu',
            ),
            
            array (
                'id' => 7184,
                'state_id' => 20,
                'name' => 'Ipueira',
            ),
            
            array (
                'id' => 7185,
                'state_id' => 20,
                'name' => 'Itajá',
            ),
            
            array (
                'id' => 7186,
                'state_id' => 20,
                'name' => 'Itaú',
            ),
            
            array (
                'id' => 7187,
                'state_id' => 20,
                'name' => 'Jaçanã',
            ),
            
            array (
                'id' => 7188,
                'state_id' => 20,
                'name' => 'Jandaíra',
            ),
            
            array (
                'id' => 7189,
                'state_id' => 20,
                'name' => 'Janduís',
            ),
            
            array (
                'id' => 7190,
                'state_id' => 20,
                'name' => 'Japi',
            ),
            
            array (
                'id' => 7191,
                'state_id' => 20,
                'name' => 'Jardim de Angicos',
            ),
            
            array (
                'id' => 7192,
                'state_id' => 20,
                'name' => 'Jardim de Piranhas',
            ),
            
            array (
                'id' => 7193,
                'state_id' => 20,
                'name' => 'Jardim do Seridó',
            ),
            
            array (
                'id' => 7194,
                'state_id' => 20,
                'name' => 'João Câmara',
            ),
            
            array (
                'id' => 7195,
                'state_id' => 20,
                'name' => 'João Dias',
            ),
            
            array (
                'id' => 7196,
                'state_id' => 20,
                'name' => 'José da Penha',
            ),
            
            array (
                'id' => 7197,
                'state_id' => 20,
                'name' => 'Jucurutu',
            ),
            
            array (
                'id' => 7198,
                'state_id' => 20,
                'name' => 'Jundiá',
            ),
            
            array (
                'id' => 7199,
                'state_id' => 20,
                'name' => 'Lagoa D\'Anta',
            ),
            
            array (
                'id' => 7200,
                'state_id' => 20,
                'name' => 'Lagoa de Pedras',
            ),
            
            array (
                'id' => 7201,
                'state_id' => 20,
                'name' => 'Lagoa de Velhos',
            ),
            
            array (
                'id' => 7202,
                'state_id' => 20,
                'name' => 'Lagoa Nova',
            ),
            
            array (
                'id' => 7203,
                'state_id' => 20,
                'name' => 'Lagoa Salgada',
            ),
            
            array (
                'id' => 7204,
                'state_id' => 20,
                'name' => 'Lajes',
            ),
            
            array (
                'id' => 7205,
                'state_id' => 20,
                'name' => 'Lajes Pintadas',
            ),
            
            array (
                'id' => 7206,
                'state_id' => 20,
                'name' => 'Lucrécia',
            ),
            
            array (
                'id' => 7207,
                'state_id' => 20,
                'name' => 'Luís Gomes',
            ),
            
            array (
                'id' => 7208,
                'state_id' => 20,
                'name' => 'Macaíba',
            ),
            
            array (
                'id' => 7209,
                'state_id' => 20,
                'name' => 'Macau',
            ),
            
            array (
                'id' => 7211,
                'state_id' => 20,
                'name' => 'Major Sales',
            ),
            
            array (
                'id' => 7212,
                'state_id' => 20,
                'name' => 'Marcelino Vieira',
            ),
            
            array (
                'id' => 7213,
                'state_id' => 20,
                'name' => 'Martins',
            ),
            
            array (
                'id' => 7215,
                'state_id' => 20,
                'name' => 'Maxaranguape',
            ),
            
            array (
                'id' => 7216,
                'state_id' => 20,
                'name' => 'Messias Targino',
            ),
            
            array (
                'id' => 7217,
                'state_id' => 20,
                'name' => 'Montanhas',
            ),
            
            array (
                'id' => 7218,
                'state_id' => 20,
                'name' => 'Monte Alegre',
            ),
            
            array (
                'id' => 7219,
                'state_id' => 20,
                'name' => 'Monte das Gameleiras',
            ),
            
            array (
                'id' => 7220,
                'state_id' => 20,
                'name' => 'Mossoró',
            ),
            
            array (
                'id' => 7221,
                'state_id' => 20,
                'name' => 'Natal',
            ),
            
            array (
                'id' => 7222,
                'state_id' => 20,
                'name' => 'Nísia Floresta',
            ),
            
            array (
                'id' => 7223,
                'state_id' => 20,
                'name' => 'Nova Cruz',
            ),
            
            array (
                'id' => 7224,
                'state_id' => 20,
                'name' => 'Olho-D\'Água do Borges',
            ),
            
            array (
                'id' => 7225,
                'state_id' => 20,
                'name' => 'Ouro Branco',
            ),
            
            array (
                'id' => 7226,
                'state_id' => 20,
                'name' => 'Paraná',
            ),
            
            array (
                'id' => 7227,
                'state_id' => 20,
                'name' => 'Parazinho',
            ),
            
            array (
                'id' => 7228,
                'state_id' => 20,
                'name' => 'Parelhas',
            ),
            
            array (
                'id' => 7229,
                'state_id' => 20,
                'name' => 'Parnamirim',
            ),
            
            array (
                'id' => 7230,
                'state_id' => 20,
                'name' => 'Passa e Fica',
            ),
            
            array (
                'id' => 7231,
                'state_id' => 20,
                'name' => 'Passagem',
            ),
            
            array (
                'id' => 7232,
                'state_id' => 20,
                'name' => 'Patu',
            ),
            
            array (
                'id' => 7233,
                'state_id' => 20,
                'name' => 'Pau dos Ferros',
            ),
            
            array (
                'id' => 7234,
                'state_id' => 20,
                'name' => 'Pedra Grande',
            ),
            
            array (
                'id' => 7235,
                'state_id' => 20,
                'name' => 'Pedra Preta',
            ),
            
            array (
                'id' => 7236,
                'state_id' => 20,
                'name' => 'Pedro Avelino',
            ),
            
            array (
                'id' => 7237,
                'state_id' => 20,
                'name' => 'Pedro Velho',
            ),
            
            array (
                'id' => 7238,
                'state_id' => 20,
                'name' => 'Pendências',
            ),
            
            array (
                'id' => 7239,
                'state_id' => 20,
                'name' => 'Pilões',
            ),
            
            array (
                'id' => 7240,
                'state_id' => 20,
                'name' => 'Poço Branco',
            ),
            
            array (
                'id' => 7241,
                'state_id' => 20,
                'name' => 'Portalegre',
            ),
            
            array (
                'id' => 7242,
                'state_id' => 20,
                'name' => 'Porto do Mangue',
            ),
            
            array (
                'id' => 7243,
                'state_id' => 20,
                'name' => 'Pureza',
            ),
            
            array (
                'id' => 7244,
                'state_id' => 20,
                'name' => 'Rafael Fernandes',
            ),
            
            array (
                'id' => 7245,
                'state_id' => 20,
                'name' => 'Rafael Godeiro',
            ),
            
            array (
                'id' => 7246,
                'state_id' => 20,
                'name' => 'Riacho da Cruz',
            ),
            
            array (
                'id' => 7247,
                'state_id' => 20,
                'name' => 'Riacho de Santana',
            ),
            
            array (
                'id' => 7248,
                'state_id' => 20,
                'name' => 'Riachuelo',
            ),
            
            array (
                'id' => 7249,
                'state_id' => 20,
                'name' => 'Rio do Fogo',
            ),
            
            array (
                'id' => 7250,
                'state_id' => 20,
                'name' => 'Rodolfo Fernandes',
            ),
            
            array (
                'id' => 7252,
                'state_id' => 20,
                'name' => 'Ruy Barbosa',
            ),
            
            array (
                'id' => 7254,
                'state_id' => 20,
                'name' => 'Santa Cruz',
            ),
            
            array (
                'id' => 7256,
                'state_id' => 20,
                'name' => 'Santa Maria',
            ),
            
            array (
                'id' => 7258,
                'state_id' => 20,
                'name' => 'Santana do Matos',
            ),
            
            array (
                'id' => 7259,
                'state_id' => 20,
                'name' => 'Santana do Seridó',
            ),
            
            array (
                'id' => 7260,
                'state_id' => 20,
                'name' => 'Santo Antônio',
            ),
            
            array (
                'id' => 7262,
                'state_id' => 20,
                'name' => 'São Bento do Norte',
            ),
            
            array (
                'id' => 7263,
                'state_id' => 20,
                'name' => 'São Bento do Trairi',
            ),
            
            array (
                'id' => 7265,
                'state_id' => 20,
                'name' => 'São Fernando',
            ),
            
            array (
                'id' => 7266,
                'state_id' => 20,
                'name' => 'São Francisco do Oeste',
            ),
            
            array (
                'id' => 7268,
                'state_id' => 20,
                'name' => 'São Gonçalo do Amarante',
            ),
            
            array (
                'id' => 7269,
                'state_id' => 20,
                'name' => 'São João do Sabugi',
            ),
            
            array (
                'id' => 7271,
                'state_id' => 20,
                'name' => 'São José de Mipibu',
            ),
            
            array (
                'id' => 7272,
                'state_id' => 20,
                'name' => 'São José do Campestre',
            ),
            
            array (
                'id' => 7273,
                'state_id' => 20,
                'name' => 'São José do Seridó',
            ),
            
            array (
                'id' => 7274,
                'state_id' => 20,
                'name' => 'São Miguel',
            ),
            
            array (
                'id' => 7275,
                'state_id' => 20,
                'name' => 'São Miguel de Touros',
            ),
            
            array (
                'id' => 7276,
                'state_id' => 20,
                'name' => 'São Paulo do Potengi',
            ),
            
            array (
                'id' => 7277,
                'state_id' => 20,
                'name' => 'São Pedro',
            ),
            
            array (
                'id' => 7278,
                'state_id' => 20,
                'name' => 'São Rafael',
            ),
            
            array (
                'id' => 7279,
                'state_id' => 20,
                'name' => 'São Tomé',
            ),
            
            array (
                'id' => 7280,
                'state_id' => 20,
                'name' => 'São Vicente',
            ),
            
            array (
                'id' => 7281,
                'state_id' => 20,
                'name' => 'Senador Elói de Souza',
            ),
            
            array (
                'id' => 7282,
                'state_id' => 20,
                'name' => 'Senador Georgino Avelino',
            ),
            
            array (
                'id' => 7283,
                'state_id' => 20,
                'name' => 'Serra Caiada',
            ),
            
            array (
                'id' => 7285,
                'state_id' => 20,
                'name' => 'Serra de São Bento',
            ),
            
            array (
                'id' => 7286,
                'state_id' => 20,
                'name' => 'Serra do Mel',
            ),
            
            array (
                'id' => 7287,
                'state_id' => 20,
                'name' => 'Serra Negra do Norte',
            ),
            
            array (
                'id' => 7288,
                'state_id' => 20,
                'name' => 'Serrinha',
            ),
            
            array (
                'id' => 7289,
                'state_id' => 20,
                'name' => 'Serrinha dos Pintos',
            ),
            
            array (
                'id' => 7290,
                'state_id' => 20,
                'name' => 'Severiano Melo',
            ),
            
            array (
                'id' => 7291,
                'state_id' => 20,
                'name' => 'Sítio Novo',
            ),
            
            array (
                'id' => 7292,
                'state_id' => 20,
                'name' => 'Taboleiro Grande',
            ),
            
            array (
                'id' => 7293,
                'state_id' => 20,
                'name' => 'Taipu',
            ),
            
            array (
                'id' => 7294,
                'state_id' => 20,
                'name' => 'Tangará',
            ),
            
            array (
                'id' => 7295,
                'state_id' => 20,
                'name' => 'Tenente Ananias',
            ),
            
            array (
                'id' => 7296,
                'state_id' => 20,
                'name' => 'Tenente Laurentino Cruz',
            ),
            
            array (
                'id' => 7297,
                'state_id' => 20,
                'name' => 'Tibau',
            ),
            
            array (
                'id' => 7298,
                'state_id' => 20,
                'name' => 'Tibau do Sul',
            ),
            
            array (
                'id' => 7299,
                'state_id' => 20,
                'name' => 'Timbaúba dos Batistas',
            ),
            
            array (
                'id' => 7300,
                'state_id' => 20,
                'name' => 'Touros',
            ),
            
            array (
                'id' => 7302,
                'state_id' => 20,
                'name' => 'Triunfo Potiguar',
            ),
            
            array (
                'id' => 7303,
                'state_id' => 20,
                'name' => 'Umarizal',
            ),
            
            array (
                'id' => 7304,
                'state_id' => 20,
                'name' => 'Upanema',
            ),
            
            array (
                'id' => 7305,
                'state_id' => 20,
                'name' => 'Várzea',
            ),
            
            array (
                'id' => 7306,
                'state_id' => 20,
                'name' => 'Venha-Ver',
            ),
            
            array (
                'id' => 7307,
                'state_id' => 20,
                'name' => 'Vera Cruz',
            ),
            
            array (
                'id' => 7308,
                'state_id' => 20,
                'name' => 'Viçosa',
            ),
            
            array (
                'id' => 7309,
                'state_id' => 20,
                'name' => 'Vila Flor',
            ),
            
            array (
                'id' => 7311,
                'state_id' => 21,
                'name' => 'Alto Alegre dos Parecis',
            ),
            
            array (
                'id' => 7312,
                'state_id' => 21,
                'name' => 'Alta Floresta D\'Oeste',
            ),
            
            array (
                'id' => 7313,
                'state_id' => 21,
                'name' => 'Alto Paraíso',
            ),
            
            array (
                'id' => 7314,
                'state_id' => 21,
                'name' => 'Alvorada D\'Oeste',
            ),
            
            array (
                'id' => 7315,
                'state_id' => 21,
                'name' => 'Ariquemes',
            ),
            
            array (
                'id' => 7316,
                'state_id' => 21,
                'name' => 'Buritis',
            ),
            
            array (
                'id' => 7317,
                'state_id' => 21,
                'name' => 'Cabixi',
            ),
            
            array (
                'id' => 7318,
                'state_id' => 21,
                'name' => 'Cacaulândia',
            ),
            
            array (
                'id' => 7319,
                'state_id' => 21,
                'name' => 'Cacoal',
            ),
            
            array (
                'id' => 7321,
                'state_id' => 21,
                'name' => 'Campo Novo de Rondônia',
            ),
            
            array (
                'id' => 7322,
                'state_id' => 21,
                'name' => 'Candeias do Jamari',
            ),
            
            array (
                'id' => 7323,
                'state_id' => 21,
                'name' => 'Castanheiras',
            ),
            
            array (
                'id' => 7324,
                'state_id' => 21,
                'name' => 'Cerejeiras',
            ),
            
            array (
                'id' => 7325,
                'state_id' => 21,
                'name' => 'Chupinguaia',
            ),
            
            array (
                'id' => 7326,
                'state_id' => 21,
                'name' => 'Colorado do Oeste',
            ),
            
            array (
                'id' => 7327,
                'state_id' => 21,
                'name' => 'Corumbiara',
            ),
            
            array (
                'id' => 7328,
                'state_id' => 21,
                'name' => 'Costa Marques',
            ),
            
            array (
                'id' => 7329,
                'state_id' => 21,
                'name' => 'Cujubim',
            ),
            
            array (
                'id' => 7330,
                'state_id' => 21,
                'name' => 'Espigão do Oeste',
            ),
            
            array (
                'id' => 7331,
                'state_id' => 21,
                'name' => 'Governador Jorge Teixeira',
            ),
            
            array (
                'id' => 7332,
                'state_id' => 21,
                'name' => 'Guajará-Mirim',
            ),
            
            array (
                'id' => 7334,
                'state_id' => 21,
                'name' => 'Itapuã do Oeste',
            ),
            
            array (
                'id' => 7335,
                'state_id' => 21,
                'name' => 'Jaru',
            ),
            
            array (
                'id' => 7336,
                'state_id' => 21,
                'name' => 'Ji-Paraná',
            ),
            
            array (
                'id' => 7337,
                'state_id' => 21,
                'name' => 'Machadinho D\'Oeste',
            ),
            
            array (
                'id' => 7339,
                'state_id' => 21,
                'name' => 'Ministro Andreazza',
            ),
            
            array (
                'id' => 7340,
                'state_id' => 21,
                'name' => 'Mirante da Serra',
            ),
            
            array (
                'id' => 7341,
                'state_id' => 21,
                'name' => 'Monte Negro',
            ),
            
            array (
                'id' => 7342,
                'state_id' => 21,
                'name' => 'Nova Brasilândia D\'Oeste',
            ),
            
            array (
                'id' => 7343,
                'state_id' => 21,
                'name' => 'Nova Mamoré',
            ),
            
            array (
                'id' => 7344,
                'state_id' => 21,
                'name' => 'Nova União',
            ),
            
            array (
                'id' => 7346,
                'state_id' => 21,
                'name' => 'Novo Horizonte do Oeste',
            ),
            
            array (
                'id' => 7347,
                'state_id' => 21,
                'name' => 'Ouro Preto do Oeste',
            ),
            
            array (
                'id' => 7348,
                'state_id' => 21,
                'name' => 'Parecis',
            ),
            
            array (
                'id' => 7350,
                'state_id' => 21,
                'name' => 'Pimenta Bueno',
            ),
            
            array (
                'id' => 7351,
                'state_id' => 21,
                'name' => 'Pimenteiras do Oeste',
            ),
            
            array (
                'id' => 7352,
                'state_id' => 21,
                'name' => 'Porto Velho',
            ),
            
            array (
                'id' => 7353,
                'state_id' => 21,
                'name' => 'PresidenteZZZn Médici',
            ),
            
            array (
                'id' => 7354,
                'state_id' => 21,
                'name' => 'Primavera de Rondônia',
            ),
            
            array (
                'id' => 7356,
                'state_id' => 21,
                'name' => 'Rio Crespo',
            ),
            
            array (
                'id' => 7358,
                'state_id' => 21,
                'name' => 'Rolim de Moura',
            ),
            
            array (
                'id' => 7359,
                'state_id' => 21,
                'name' => 'Santa Luzia D\'Oeste',
            ),
            
            array (
                'id' => 7360,
                'state_id' => 21,
                'name' => 'São Felipe D\'Oeste',
            ),
            
            array (
                'id' => 7361,
                'state_id' => 21,
                'name' => 'São Francisco do Guaporé',
            ),
            
            array (
                'id' => 7362,
                'state_id' => 21,
                'name' => 'São Miguel do Guaporé',
            ),
            
            array (
                'id' => 7363,
                'state_id' => 21,
                'name' => 'Seringueiras',
            ),
            
            array (
                'id' => 7365,
                'state_id' => 21,
                'name' => 'Teixeirópolis',
            ),
            
            array (
                'id' => 7366,
                'state_id' => 21,
                'name' => 'Theobroma',
            ),
            
            array (
                'id' => 7367,
                'state_id' => 21,
                'name' => 'Urupá',
            ),
            
            array (
                'id' => 7368,
                'state_id' => 21,
                'name' => 'Vale do Anari',
            ),
            
            array (
                'id' => 7369,
                'state_id' => 21,
                'name' => 'Vale do Paraíso',
            ),
            
            array (
                'id' => 7371,
                'state_id' => 21,
                'name' => 'Vilhena',
            ),
            
            array (
                'id' => 7373,
                'state_id' => 22,
                'name' => 'Alto Alegre',
            ),
            
            array (
                'id' => 7374,
                'state_id' => 22,
                'name' => 'Amajari',
            ),
            
            array (
                'id' => 7375,
                'state_id' => 22,
                'name' => 'Boa Vista',
            ),
            
            array (
                'id' => 7376,
                'state_id' => 22,
                'name' => 'Bonfim',
            ),
            
            array (
                'id' => 7377,
                'state_id' => 22,
                'name' => 'Cantá',
            ),
            
            array (
                'id' => 7378,
                'state_id' => 22,
                'name' => 'Caracaraí',
            ),
            
            array (
                'id' => 7379,
                'state_id' => 22,
                'name' => 'Caroebe',
            ),
            
            array (
                'id' => 7380,
                'state_id' => 22,
                'name' => 'Iracema',
            ),
            
            array (
                'id' => 7381,
                'state_id' => 22,
                'name' => 'Mucajaí',
            ),
            
            array (
                'id' => 7382,
                'state_id' => 22,
                'name' => 'Normandia',
            ),
            
            array (
                'id' => 7383,
                'state_id' => 22,
                'name' => 'Pacaraima',
            ),
            
            array (
                'id' => 7384,
                'state_id' => 22,
                'name' => 'Rorainópolis',
            ),
            
            array (
                'id' => 7385,
                'state_id' => 22,
                'name' => 'São João da Baliza',
            ),
            
            array (
                'id' => 7386,
                'state_id' => 22,
                'name' => 'São Luiz',
            ),
            
            array (
                'id' => 7387,
                'state_id' => 22,
                'name' => 'Uiramutã',
            ),
            
            array (
                'id' => 7388,
                'state_id' => 23,
                'name' => 'Aceguá',
            ),
            
            array (
                'id' => 7390,
                'state_id' => 23,
                'name' => 'Água Santa',
            ),
            
            array (
                'id' => 7392,
                'state_id' => 23,
                'name' => 'Agudo',
            ),
            
            array (
                'id' => 7393,
                'state_id' => 23,
                'name' => 'Ajuricaba',
            ),
            
            array (
                'id' => 7395,
                'state_id' => 23,
                'name' => 'Alecrim',
            ),
            
            array (
                'id' => 7396,
                'state_id' => 23,
                'name' => 'Alegrete',
            ),
            
            array (
                'id' => 7397,
                'state_id' => 23,
                'name' => 'Alegria',
            ),
            
            array (
                'id' => 7399,
                'state_id' => 23,
                'name' => 'Almirante Tamandaré do Sul',
            ),
            
            array (
                'id' => 7400,
                'state_id' => 23,
                'name' => 'Alpestre',
            ),
            
            array (
                'id' => 7401,
                'state_id' => 23,
                'name' => 'Alto Alegre',
            ),
            
            array (
                'id' => 7404,
                'state_id' => 23,
                'name' => 'Alto Feliz',
            ),
            
            array (
                'id' => 7408,
                'state_id' => 23,
                'name' => 'Alvorada',
            ),
            
            array (
                'id' => 7409,
                'state_id' => 23,
                'name' => 'Amaral Ferrador',
            ),
            
            array (
                'id' => 7410,
                'state_id' => 23,
                'name' => 'Ametista do Sul',
            ),
            
            array (
                'id' => 7411,
                'state_id' => 23,
                'name' => 'André da Rocha',
            ),
            
            array (
                'id' => 7412,
                'state_id' => 23,
                'name' => 'Anta Gorda',
            ),
            
            array (
                'id' => 7414,
                'state_id' => 23,
                'name' => 'Antônio Prado',
            ),
            
            array (
                'id' => 7415,
                'state_id' => 23,
                'name' => 'Arambaré',
            ),
            
            array (
                'id' => 7416,
                'state_id' => 23,
                'name' => 'Araricá',
            ),
            
            array (
                'id' => 7417,
                'state_id' => 23,
                'name' => 'Aratiba',
            ),
            
            array (
                'id' => 7421,
                'state_id' => 23,
                'name' => 'Arroio do Meio',
            ),
            
            array (
                'id' => 7422,
                'state_id' => 23,
                'name' => 'Arroio do Padre',
            ),
            
            array (
                'id' => 7423,
                'state_id' => 23,
                'name' => 'Arroio do Sal',
            ),
            
            array (
                'id' => 7425,
                'state_id' => 23,
                'name' => 'Arroio do Tigre',
            ),
            
            array (
                'id' => 7426,
                'state_id' => 23,
                'name' => 'Arroio dos Ratos',
            ),
            
            array (
                'id' => 7427,
                'state_id' => 23,
                'name' => 'Arroio Grande',
            ),
            
            array (
                'id' => 7431,
                'state_id' => 23,
                'name' => 'Arvorezinha',
            ),
            
            array (
                'id' => 7434,
                'state_id' => 23,
                'name' => 'Augusto Pestana',
            ),
            
            array (
                'id' => 7435,
                'state_id' => 23,
                'name' => 'Áurea',
            ),
            
            array (
                'id' => 7439,
                'state_id' => 23,
                'name' => 'Bagé',
            ),
            
            array (
                'id' => 7441,
                'state_id' => 23,
                'name' => 'Balneário Pinhal',
            ),
            
            array (
                'id' => 7443,
                'state_id' => 23,
                'name' => 'Barão',
            ),
            
            array (
                'id' => 7444,
                'state_id' => 23,
                'name' => 'Barão de Cotegipe',
            ),
            
            array (
                'id' => 7445,
                'state_id' => 23,
                'name' => 'Barão do Triunfo',
            ),
            
            array (
                'id' => 7446,
                'state_id' => 23,
                'name' => 'Barra do Guarita',
            ),
            
            array (
                'id' => 7448,
                'state_id' => 23,
                'name' => 'Barra do Quaraí',
            ),
            
            array (
                'id' => 7449,
                'state_id' => 23,
                'name' => 'Barra do Ribeiro',
            ),
            
            array (
                'id' => 7450,
                'state_id' => 23,
                'name' => 'Barra do Rio Azul',
            ),
            
            array (
                'id' => 7451,
                'state_id' => 23,
                'name' => 'Barra Funda',
            ),
            
            array (
                'id' => 7452,
                'state_id' => 23,
                'name' => 'Barracão',
            ),
            
            array (
                'id' => 7458,
                'state_id' => 23,
                'name' => 'Barros Cassal',
            ),
            
            array (
                'id' => 7465,
                'state_id' => 23,
                'name' => 'Benjamin Constant do Sul',
            ),
            
            array (
                'id' => 7466,
                'state_id' => 23,
                'name' => 'Bento Gonçalves',
            ),
            
            array (
                'id' => 7472,
                'state_id' => 23,
                'name' => 'Boa Vista das Missões',
            ),
            
            array (
                'id' => 7473,
                'state_id' => 23,
                'name' => 'Boa Vista do Buricá',
            ),
            
            array (
                'id' => 7474,
                'state_id' => 23,
                'name' => 'Boa Vista do Cadeado',
            ),
            
            array (
                'id' => 7475,
                'state_id' => 23,
                'name' => 'Boa Vista do Incra',
            ),
            
            array (
                'id' => 7476,
                'state_id' => 23,
                'name' => 'Boa Vista do Sul',
            ),
            
            array (
                'id' => 7481,
                'state_id' => 23,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 7482,
                'state_id' => 23,
                'name' => 'Bom Princípio',
            ),
            
            array (
                'id' => 7483,
                'state_id' => 23,
                'name' => 'Bom Progresso',
            ),
            
            array (
                'id' => 7486,
                'state_id' => 23,
                'name' => 'Bom Retiro do Sul',
            ),
            
            array (
                'id' => 7490,
                'state_id' => 23,
                'name' => 'Boqueirão do Leão',
            ),
            
            array (
                'id' => 7492,
                'state_id' => 23,
                'name' => 'Bossoroca',
            ),
            
            array (
                'id' => 7494,
                'state_id' => 23,
                'name' => 'Braga',
            ),
            
            array (
                'id' => 7495,
                'state_id' => 23,
                'name' => 'Brochier',
            ),
            
            array (
                'id' => 7497,
                'state_id' => 23,
                'name' => 'Butiá',
            ),
            
            array (
                'id' => 7499,
                'state_id' => 23,
                'name' => 'Caçapava do Sul',
            ),
            
            array (
                'id' => 7500,
                'state_id' => 23,
                'name' => 'Cacequi',
            ),
            
            array (
                'id' => 7501,
                'state_id' => 23,
                'name' => 'Cachoeira do Sul',
            ),
            
            array (
                'id' => 7502,
                'state_id' => 23,
                'name' => 'Cachoeirinha',
            ),
            
            array (
                'id' => 7503,
                'state_id' => 23,
                'name' => 'Cacique Doble',
            ),
            
            array (
                'id' => 7505,
                'state_id' => 23,
                'name' => 'Caibaté',
            ),
            
            array (
                'id' => 7506,
                'state_id' => 23,
                'name' => 'Caiçara',
            ),
            
            array (
                'id' => 7507,
                'state_id' => 23,
                'name' => 'Camaquã',
            ),
            
            array (
                'id' => 7508,
                'state_id' => 23,
                'name' => 'Camargo',
            ),
            
            array (
                'id' => 7509,
                'state_id' => 23,
                'name' => 'Cambará do Sul',
            ),
            
            array (
                'id' => 7512,
                'state_id' => 23,
                'name' => 'Campestre da Serra',
            ),
            
            array (
                'id' => 7513,
                'state_id' => 23,
                'name' => 'Campina das Missões',
            ),
            
            array (
                'id' => 7516,
                'state_id' => 23,
                'name' => 'Campinas do Sul',
            ),
            
            array (
                'id' => 7517,
                'state_id' => 23,
                'name' => 'Campo Bom',
            ),
            
            array (
                'id' => 7520,
                'state_id' => 23,
                'name' => 'Campo Novo',
            ),
            
            array (
                'id' => 7525,
                'state_id' => 23,
                'name' => 'Campos Borges',
            ),
            
            array (
                'id' => 7526,
                'state_id' => 23,
                'name' => 'Candelária',
            ),
            
            array (
                'id' => 7528,
                'state_id' => 23,
                'name' => 'Cândido Godói',
            ),
            
            array (
                'id' => 7529,
                'state_id' => 23,
                'name' => 'Candiota',
            ),
            
            array (
                'id' => 7530,
                'state_id' => 23,
                'name' => 'Canela',
            ),
            
            array (
                'id' => 7531,
                'state_id' => 23,
                'name' => 'Canguçu',
            ),
            
            array (
                'id' => 7533,
                'state_id' => 23,
                'name' => 'Canoas',
            ),
            
            array (
                'id' => 7534,
                'state_id' => 23,
                'name' => 'Canudos do Vale',
            ),
            
            array (
                'id' => 7536,
                'state_id' => 23,
                'name' => 'Capão Bonito do Sul',
            ),
            
            array (
                'id' => 7539,
                'state_id' => 23,
                'name' => 'Capão da Canoa',
            ),
            
            array (
                'id' => 7542,
                'state_id' => 23,
                'name' => 'Capão do Cipó',
            ),
            
            array (
                'id' => 7543,
                'state_id' => 23,
                'name' => 'Capão do Leão',
            ),
            
            array (
                'id' => 7544,
                'state_id' => 23,
                'name' => 'Capela de Santana',
            ),
            
            array (
                'id' => 7547,
                'state_id' => 23,
                'name' => 'Capitão',
            ),
            
            array (
                'id' => 7548,
                'state_id' => 23,
                'name' => 'Capivari do Sul',
            ),
            
            array (
                'id' => 7552,
                'state_id' => 23,
                'name' => 'Caraá',
            ),
            
            array (
                'id' => 7554,
                'state_id' => 23,
                'name' => 'Carazinho',
            ),
            
            array (
                'id' => 7555,
                'state_id' => 23,
                'name' => 'Carlos Barbosa',
            ),
            
            array (
                'id' => 7556,
                'state_id' => 23,
                'name' => 'Carlos Gomes',
            ),
            
            array (
                'id' => 7558,
                'state_id' => 23,
                'name' => 'Casca',
            ),
            
            array (
                'id' => 7561,
                'state_id' => 23,
                'name' => 'Caseiros',
            ),
            
            array (
                'id' => 7563,
                'state_id' => 23,
                'name' => 'Catuípe',
            ),
            
            array (
                'id' => 7566,
                'state_id' => 23,
                'name' => 'Caxias do Sul',
            ),
            
            array (
                'id' => 7569,
                'state_id' => 23,
                'name' => 'Centenário',
            ),
            
            array (
                'id' => 7572,
                'state_id' => 23,
                'name' => 'Cerrito',
            ),
            
            array (
                'id' => 7576,
                'state_id' => 23,
                'name' => 'Cerro Branco',
            ),
            
            array (
                'id' => 7580,
                'state_id' => 23,
                'name' => 'Cerro Grande',
            ),
            
            array (
                'id' => 7581,
                'state_id' => 23,
                'name' => 'Cerro Grande do Sul',
            ),
            
            array (
                'id' => 7582,
                'state_id' => 23,
                'name' => 'Cerro Largo',
            ),
        ));
        DB::table('cities')->insert(array (
            
            array (
                'id' => 7583,
                'state_id' => 23,
                'name' => 'Chapada',
            ),
            
            array (
                'id' => 7585,
                'state_id' => 23,
                'name' => 'Charqueadas',
            ),
            
            array (
                'id' => 7586,
                'state_id' => 23,
                'name' => 'Charrua',
            ),
            
            array (
                'id' => 7587,
                'state_id' => 23,
                'name' => 'Chiapetta',
            ),
            
            array (
                'id' => 7591,
                'state_id' => 23,
                'name' => 'Chuí',
            ),
            
            array (
                'id' => 7592,
                'state_id' => 23,
                'name' => 'Chuvisca',
            ),
            
            array (
                'id' => 7593,
                'state_id' => 23,
                'name' => 'Cidreira',
            ),
            
            array (
                'id' => 7595,
                'state_id' => 23,
                'name' => 'Ciríaco',
            ),
            
            array (
                'id' => 7599,
                'state_id' => 23,
                'name' => 'Colinas',
            ),
            
            array (
                'id' => 7607,
                'state_id' => 23,
                'name' => 'Colorado',
            ),
            
            array (
                'id' => 7609,
                'state_id' => 23,
                'name' => 'Condor',
            ),
            
            array (
                'id' => 7611,
                'state_id' => 23,
                'name' => 'Constantina',
            ),
            
            array (
                'id' => 7612,
                'state_id' => 23,
                'name' => 'Coqueiro Baixo',
            ),
            
            array (
                'id' => 7613,
                'state_id' => 23,
                'name' => 'Coqueiros do Sul',
            ),
            
            array (
                'id' => 7616,
                'state_id' => 23,
                'name' => 'Coronel Barros',
            ),
            
            array (
                'id' => 7617,
                'state_id' => 23,
                'name' => 'Coronel Bicaco',
            ),
            
            array (
                'id' => 7619,
                'state_id' => 23,
                'name' => 'Coronel Pilar',
            ),
            
            array (
                'id' => 7624,
                'state_id' => 23,
                'name' => 'Cotiporã',
            ),
            
            array (
                'id' => 7625,
                'state_id' => 23,
                'name' => 'Coxilha',
            ),
            
            array (
                'id' => 7628,
                'state_id' => 23,
                'name' => 'Crissiumal',
            ),
            
            array (
                'id' => 7629,
                'state_id' => 23,
                'name' => 'Cristal',
            ),
            
            array (
                'id' => 7630,
                'state_id' => 23,
                'name' => 'Cristal do Sul',
            ),
            
            array (
                'id' => 7632,
                'state_id' => 23,
                'name' => 'Cruz Alta',
            ),
            
            array (
                'id' => 7633,
                'state_id' => 23,
                'name' => 'Cruzaltense',
            ),
            
            array (
                'id' => 7635,
                'state_id' => 23,
                'name' => 'Cruzeiro do Sul',
            ),
            
            array (
                'id' => 7642,
                'state_id' => 23,
                'name' => 'David Canabarro',
            ),
            
            array (
                'id' => 7646,
                'state_id' => 23,
                'name' => 'Derrubadas',
            ),
            
            array (
                'id' => 7647,
                'state_id' => 23,
                'name' => 'Dezesseis de Novembro',
            ),
            
            array (
                'id' => 7648,
                'state_id' => 23,
                'name' => 'Dilermando de Aguiar',
            ),
            
            array (
                'id' => 7650,
                'state_id' => 23,
                'name' => 'Dois Irmãos',
            ),
            
            array (
                'id' => 7651,
                'state_id' => 23,
                'name' => 'Dois Irmãos das Missões',
            ),
            
            array (
                'id' => 7652,
                'state_id' => 23,
                'name' => 'Dois Lajeados',
            ),
            
            array (
                'id' => 7653,
                'state_id' => 23,
                'name' => 'São José do Sul',
            ),
            
            array (
                'id' => 7654,
                'state_id' => 23,
                'name' => 'Dom Feliciano',
            ),
            
            array (
                'id' => 7656,
                'state_id' => 23,
                'name' => 'Dom Pedrito',
            ),
            
            array (
                'id' => 7657,
                'state_id' => 23,
                'name' => 'Dom Pedro de Alcântara',
            ),
            
            array (
                'id' => 7658,
                'state_id' => 23,
                'name' => 'Dona Francisca',
            ),
            
            array (
                'id' => 7661,
                'state_id' => 23,
                'name' => 'Bozano',
            ),
            
            array (
                'id' => 7663,
                'state_id' => 23,
                'name' => 'Doutor Maurício Cardoso',
            ),
            
            array (
                'id' => 7664,
                'state_id' => 23,
                'name' => 'Doutor Ricardo',
            ),
            
            array (
                'id' => 7665,
                'state_id' => 23,
                'name' => 'Eldorado do Sul',
            ),
            
            array (
                'id' => 7667,
                'state_id' => 23,
                'name' => 'Encantado',
            ),
            
            array (
                'id' => 7669,
                'state_id' => 23,
                'name' => 'Encruzilhada do Sul',
            ),
            
            array (
                'id' => 7670,
                'state_id' => 23,
                'name' => 'Engenho Velho',
            ),
            
            array (
                'id' => 7671,
                'state_id' => 23,
                'name' => 'Entre Rios do Sul',
            ),
            
            array (
                'id' => 7672,
                'state_id' => 23,
                'name' => 'Entre-Ijuís',
            ),
            
            array (
                'id' => 7674,
                'state_id' => 23,
                'name' => 'Erebango',
            ),
            
            array (
                'id' => 7675,
                'state_id' => 23,
                'name' => 'Erechim',
            ),
            
            array (
                'id' => 7676,
                'state_id' => 23,
                'name' => 'Ernestina',
            ),
            
            array (
                'id' => 7678,
                'state_id' => 23,
                'name' => 'Erval Grande',
            ),
            
            array (
                'id' => 7679,
                'state_id' => 23,
                'name' => 'Erval Seco',
            ),
            
            array (
                'id' => 7681,
                'state_id' => 23,
                'name' => 'Esmeralda',
            ),
            
            array (
                'id' => 7682,
                'state_id' => 23,
                'name' => 'Esperança do Sul',
            ),
            
            array (
                'id' => 7687,
                'state_id' => 23,
                'name' => 'Espumoso',
            ),
            
            array (
                'id' => 7694,
                'state_id' => 23,
                'name' => 'Estação',
            ),
            
            array (
                'id' => 7696,
                'state_id' => 23,
                'name' => 'Estância Velha',
            ),
            
            array (
                'id' => 7697,
                'state_id' => 23,
                'name' => 'Esteio',
            ),
            
            array (
                'id' => 7700,
                'state_id' => 23,
                'name' => 'Estrela',
            ),
            
            array (
                'id' => 7702,
                'state_id' => 23,
                'name' => 'Estrela Velha',
            ),
            
            array (
                'id' => 7703,
                'state_id' => 23,
                'name' => 'Eugênio de Castro',
            ),
            
            array (
                'id' => 7705,
                'state_id' => 23,
                'name' => 'Fagundes Varela',
            ),
            
            array (
                'id' => 7710,
                'state_id' => 23,
                'name' => 'Farroupilha',
            ),
            
            array (
                'id' => 7712,
                'state_id' => 23,
                'name' => 'Faxinal do Soturno',
            ),
            
            array (
                'id' => 7713,
                'state_id' => 23,
                'name' => 'Faxinalzinho',
            ),
            
            array (
                'id' => 7716,
                'state_id' => 23,
                'name' => 'Fazenda Vilanova',
            ),
            
            array (
                'id' => 7717,
                'state_id' => 23,
                'name' => 'Feliz',
            ),
            
            array (
                'id' => 7719,
                'state_id' => 23,
                'name' => 'Flores da Cunha',
            ),
            
            array (
                'id' => 7722,
                'state_id' => 23,
                'name' => 'Floriano Peixoto',
            ),
            
            array (
                'id' => 7724,
                'state_id' => 23,
                'name' => 'Fontoura Xavier',
            ),
            
            array (
                'id' => 7725,
                'state_id' => 23,
                'name' => 'Formigueiro',
            ),
            
            array (
                'id' => 7728,
                'state_id' => 23,
                'name' => 'Forquetinha',
            ),
            
            array (
                'id' => 7729,
                'state_id' => 23,
                'name' => 'Fortaleza dos Valos',
            ),
            
            array (
                'id' => 7730,
                'state_id' => 23,
                'name' => 'Frederico Westphalen',
            ),
            
            array (
                'id' => 7733,
                'state_id' => 23,
                'name' => 'Garibaldi',
            ),
            
            array (
                'id' => 7735,
                'state_id' => 23,
                'name' => 'Garruchos',
            ),
            
            array (
                'id' => 7736,
                'state_id' => 23,
                'name' => 'Gaurama',
            ),
            
            array (
                'id' => 7737,
                'state_id' => 23,
                'name' => 'General Câmara',
            ),
            
            array (
                'id' => 7738,
                'state_id' => 23,
                'name' => 'Gentil',
            ),
            
            array (
                'id' => 7739,
                'state_id' => 23,
                'name' => 'Getúlio Vargas',
            ),
            
            array (
                'id' => 7740,
                'state_id' => 23,
                'name' => 'Giruá',
            ),
            
            array (
                'id' => 7742,
                'state_id' => 23,
                'name' => 'Glorinha',
            ),
            
            array (
                'id' => 7744,
                'state_id' => 23,
                'name' => 'Gramado',
            ),
            
            array (
                'id' => 7745,
                'state_id' => 23,
                'name' => 'Gramado dos Loureiros',
            ),
            
            array (
                'id' => 7747,
                'state_id' => 23,
                'name' => 'Gramado Xavier',
            ),
            
            array (
                'id' => 7748,
                'state_id' => 23,
                'name' => 'Gravataí',
            ),
            
            array (
                'id' => 7749,
                'state_id' => 23,
                'name' => 'Guabiju',
            ),
            
            array (
                'id' => 7750,
                'state_id' => 23,
                'name' => 'Guaíba',
            ),
            
            array (
                'id' => 7752,
                'state_id' => 23,
                'name' => 'Guaporé',
            ),
            
            array (
                'id' => 7753,
                'state_id' => 23,
                'name' => 'Guarani das Missões',
            ),
            
            array (
                'id' => 7755,
                'state_id' => 23,
                'name' => 'Harmonia',
            ),
            
            array (
                'id' => 7756,
                'state_id' => 23,
                'name' => 'Herval',
            ),
            
            array (
                'id' => 7757,
                'state_id' => 23,
                'name' => 'Herveiras',
            ),
            
            array (
                'id' => 7759,
                'state_id' => 23,
                'name' => 'Horizontina',
            ),
            
            array (
                'id' => 7760,
                'state_id' => 23,
                'name' => 'Hulha Negra',
            ),
            
            array (
                'id' => 7761,
                'state_id' => 23,
                'name' => 'Humaitá',
            ),
            
            array (
                'id' => 7762,
                'state_id' => 23,
                'name' => 'Ibarama',
            ),
            
            array (
                'id' => 7764,
                'state_id' => 23,
                'name' => 'Ibiaçá',
            ),
            
            array (
                'id' => 7765,
                'state_id' => 23,
                'name' => 'Ibiraiaras',
            ),
            
            array (
                'id' => 7766,
                'state_id' => 23,
                'name' => 'Ibirapuitã',
            ),
            
            array (
                'id' => 7767,
                'state_id' => 23,
                'name' => 'Ibirubá',
            ),
            
            array (
                'id' => 7768,
                'state_id' => 23,
                'name' => 'Igrejinha',
            ),
            
            array (
                'id' => 7771,
                'state_id' => 23,
                'name' => 'Ijuí',
            ),
            
            array (
                'id' => 7773,
                'state_id' => 23,
                'name' => 'Ilópolis',
            ),
            
            array (
                'id' => 7774,
                'state_id' => 23,
                'name' => 'Imbé',
            ),
            
            array (
                'id' => 7775,
                'state_id' => 23,
                'name' => 'Imigrante',
            ),
            
            array (
                'id' => 7776,
                'state_id' => 23,
                'name' => 'Independência',
            ),
            
            array (
                'id' => 7777,
                'state_id' => 23,
                'name' => 'Inhacorá',
            ),
            
            array (
                'id' => 7778,
                'state_id' => 23,
                'name' => 'Ipê',
            ),
            
            array (
                'id' => 7780,
                'state_id' => 23,
                'name' => 'Ipiranga do Sul',
            ),
            
            array (
                'id' => 7782,
                'state_id' => 23,
                'name' => 'Iraí',
            ),
            
            array (
                'id' => 7784,
                'state_id' => 23,
                'name' => 'Itaara',
            ),
            
            array (
                'id' => 7786,
                'state_id' => 23,
                'name' => 'Itacurubi',
            ),
            
            array (
                'id' => 7792,
                'state_id' => 23,
                'name' => 'Itapuca',
            ),
            
            array (
                'id' => 7794,
                'state_id' => 23,
                'name' => 'Itaqui',
            ),
            
            array (
                'id' => 7795,
                'state_id' => 23,
                'name' => 'Itati',
            ),
            
            array (
                'id' => 7796,
                'state_id' => 23,
                'name' => 'Itatiba do Sul',
            ),
            
            array (
                'id' => 7800,
                'state_id' => 23,
                'name' => 'Ivorá',
            ),
            
            array (
                'id' => 7801,
                'state_id' => 23,
                'name' => 'Ivoti',
            ),
            
            array (
                'id' => 7802,
                'state_id' => 23,
                'name' => 'Jaboticaba',
            ),
            
            array (
                'id' => 7803,
                'state_id' => 23,
                'name' => 'Jacuizinho',
            ),
            
            array (
                'id' => 7804,
                'state_id' => 23,
                'name' => 'Jacutinga',
            ),
            
            array (
                'id' => 7805,
                'state_id' => 23,
                'name' => 'Jaguarão',
            ),
            
            array (
                'id' => 7807,
                'state_id' => 23,
                'name' => 'Jaguari',
            ),
            
            array (
                'id' => 7809,
                'state_id' => 23,
                'name' => 'Jaquirana',
            ),
            
            array (
                'id' => 7810,
                'state_id' => 23,
                'name' => 'Jari',
            ),
            
            array (
                'id' => 7815,
                'state_id' => 23,
                'name' => 'Jóia',
            ),
            
            array (
                'id' => 7818,
                'state_id' => 23,
                'name' => 'Júlio de Castilhos',
            ),
            
            array (
                'id' => 7819,
                'state_id' => 23,
                'name' => 'Lagoa Bonita do Sul',
            ),
            
            array (
                'id' => 7820,
                'state_id' => 23,
                'name' => 'Lagoa dos Três Cantos',
            ),
            
            array (
                'id' => 7821,
                'state_id' => 23,
                'name' => 'Lagoa Vermelha',
            ),
            
            array (
                'id' => 7822,
                'state_id' => 23,
                'name' => 'Lagoão',
            ),
            
            array (
                'id' => 7823,
                'state_id' => 23,
                'name' => 'Lajeado',
            ),
            
            array (
                'id' => 7827,
                'state_id' => 23,
                'name' => 'Lajeado do Bugre',
            ),
            
            array (
                'id' => 7833,
                'state_id' => 23,
                'name' => 'Lavras do Sul',
            ),
            
            array (
                'id' => 7835,
                'state_id' => 23,
                'name' => 'Liberato Salzano',
            ),
            
            array (
                'id' => 7836,
                'state_id' => 23,
                'name' => 'Lindolfo Collor',
            ),
            
            array (
                'id' => 7838,
                'state_id' => 23,
                'name' => 'Linha Nova',
            ),
            
            array (
                'id' => 7841,
                'state_id' => 23,
                'name' => 'Maçambará',
            ),
            
            array (
                'id' => 7842,
                'state_id' => 23,
                'name' => 'Machadinho',
            ),
            
            array (
                'id' => 7844,
                'state_id' => 23,
                'name' => 'Mampituba',
            ),
            
            array (
                'id' => 7847,
                'state_id' => 23,
                'name' => 'Manoel Viana',
            ),
            
            array (
                'id' => 7848,
                'state_id' => 23,
                'name' => 'Maquiné',
            ),
            
            array (
                'id' => 7849,
                'state_id' => 23,
                'name' => 'Maratá',
            ),
            
            array (
                'id' => 7850,
                'state_id' => 23,
                'name' => 'Marau',
            ),
            
            array (
                'id' => 7851,
                'state_id' => 23,
                'name' => 'Marcelino Ramos',
            ),
            
            array (
                'id' => 7853,
                'state_id' => 23,
                'name' => 'Mariana Pimentel',
            ),
            
            array (
                'id' => 7854,
                'state_id' => 23,
                'name' => 'Mariano Moro',
            ),
            
            array (
                'id' => 7857,
                'state_id' => 23,
                'name' => 'Marques de Souza',
            ),
            
            array (
                'id' => 7858,
                'state_id' => 23,
                'name' => 'Mata',
            ),
            
            array (
                'id' => 7860,
                'state_id' => 23,
                'name' => 'Mato Castelhano',
            ),
            
            array (
                'id' => 7862,
                'state_id' => 23,
                'name' => 'Mato Leitão',
            ),
            
            array (
                'id' => 7863,
                'state_id' => 23,
                'name' => 'Mato Queimado',
            ),
            
            array (
                'id' => 7866,
                'state_id' => 23,
                'name' => 'Maximiliano de Almeida',
            ),
            
            array (
                'id' => 7868,
                'state_id' => 23,
                'name' => 'Minas do Leão',
            ),
            
            array (
                'id' => 7869,
                'state_id' => 23,
                'name' => 'Miraguaí',
            ),
            
            array (
                'id' => 7873,
                'state_id' => 23,
                'name' => 'Montauri',
            ),
            
            array (
                'id' => 7876,
                'state_id' => 23,
                'name' => 'Monte Alegre dos Campos',
            ),
            
            array (
                'id' => 7878,
                'state_id' => 23,
                'name' => 'Monte Belo do Sul',
            ),
            
            array (
                'id' => 7880,
                'state_id' => 23,
                'name' => 'Montenegro',
            ),
            
            array (
                'id' => 7881,
                'state_id' => 23,
                'name' => 'Mormaço',
            ),
            
            array (
                'id' => 7883,
                'state_id' => 23,
                'name' => 'Morrinhos do Sul',
            ),
            
            array (
                'id' => 7886,
                'state_id' => 23,
                'name' => 'Morro Redondo',
            ),
            
            array (
                'id' => 7887,
                'state_id' => 23,
                'name' => 'Morro Reuter',
            ),
            
            array (
                'id' => 7889,
                'state_id' => 23,
                'name' => 'Mostardas',
            ),
            
            array (
                'id' => 7890,
                'state_id' => 23,
                'name' => 'Muçum',
            ),
            
            array (
                'id' => 7891,
                'state_id' => 23,
                'name' => 'Muitos Capões',
            ),
            
            array (
                'id' => 7892,
                'state_id' => 23,
                'name' => 'Muliterno',
            ),
            
            array (
                'id' => 7893,
                'state_id' => 23,
                'name' => 'Não-Me-Toque',
            ),
            
            array (
                'id' => 7895,
                'state_id' => 23,
                'name' => 'Nicolau Vergueiro',
            ),
            
            array (
                'id' => 7896,
                'state_id' => 23,
                'name' => 'Nonoai',
            ),
            
            array (
                'id' => 7899,
                'state_id' => 23,
                'name' => 'Nova Alvorada',
            ),
            
            array (
                'id' => 7900,
                'state_id' => 23,
                'name' => 'Nova Araçá',
            ),
            
            array (
                'id' => 7901,
                'state_id' => 23,
                'name' => 'Nova Bassano',
            ),
            
            array (
                'id' => 7902,
                'state_id' => 23,
                'name' => 'Nova Boa Vista',
            ),
            
            array (
                'id' => 7903,
                'state_id' => 23,
                'name' => 'Nova Bréscia',
            ),
            
            array (
                'id' => 7904,
                'state_id' => 23,
                'name' => 'Nova Candelária',
            ),
            
            array (
                'id' => 7905,
                'state_id' => 23,
                'name' => 'Nova Esperança do Sul',
            ),
            
            array (
                'id' => 7906,
                'state_id' => 23,
                'name' => 'Nova Hartz',
            ),
            
            array (
                'id' => 7908,
                'state_id' => 23,
                'name' => 'Nova Pádua',
            ),
            
            array (
                'id' => 7909,
                'state_id' => 23,
                'name' => 'Nova Palma',
            ),
            
            array (
                'id' => 7910,
                'state_id' => 23,
                'name' => 'Nova Petrópolis',
            ),
            
            array (
                'id' => 7911,
                'state_id' => 23,
                'name' => 'Nova Prata',
            ),
            
            array (
                'id' => 7912,
                'state_id' => 23,
                'name' => 'Nova Ramada',
            ),
            
            array (
                'id' => 7913,
                'state_id' => 23,
                'name' => 'Nova Roma do Sul',
            ),
            
            array (
                'id' => 7914,
                'state_id' => 23,
                'name' => 'Nova Santa Rita',
            ),
            
            array (
                'id' => 7916,
                'state_id' => 23,
                'name' => 'Novo Barreiro',
            ),
            
            array (
                'id' => 7917,
                'state_id' => 23,
                'name' => 'Novo Cabrais',
            ),
            
            array (
                'id' => 7918,
                'state_id' => 23,
                'name' => 'Novo Hamburgo',
            ),
            
            array (
                'id' => 7920,
                'state_id' => 23,
                'name' => 'Novo Machado',
            ),
            
            array (
                'id' => 7922,
                'state_id' => 23,
                'name' => 'Novo Tiradentes',
            ),
            
            array (
                'id' => 7925,
                'state_id' => 23,
                'name' => 'Osório',
            ),
            
            array (
                'id' => 7932,
                'state_id' => 23,
                'name' => 'Paim Filho',
            ),
            
            array (
                'id' => 7933,
                'state_id' => 23,
                'name' => 'Palmares do Sul',
            ),
            
            array (
                'id' => 7935,
                'state_id' => 23,
                'name' => 'Palmeira das Missões',
            ),
            
            array (
                'id' => 7936,
                'state_id' => 23,
                'name' => 'Palmitinho',
            ),
            
            array (
                'id' => 7938,
                'state_id' => 23,
                'name' => 'Panambi',
            ),
            
            array (
                'id' => 7939,
                'state_id' => 23,
                'name' => 'Pantano Grande',
            ),
            
            array (
                'id' => 7940,
                'state_id' => 23,
                'name' => 'Paraí',
            ),
            
            array (
                'id' => 7941,
                'state_id' => 23,
                'name' => 'Paraíso do Sul',
            ),
            
            array (
                'id' => 7942,
                'state_id' => 23,
                'name' => 'Pareci Novo',
            ),
            
            array (
                'id' => 7943,
                'state_id' => 23,
                'name' => 'Parobé',
            ),
            
            array (
                'id' => 7944,
                'state_id' => 23,
                'name' => 'Passa Sete',
            ),
            
            array (
                'id' => 7952,
                'state_id' => 23,
                'name' => 'Passo do Sobrado',
            ),
            
            array (
                'id' => 7953,
                'state_id' => 23,
                'name' => 'Passo Fundo',
            ),
            
            array (
                'id' => 7956,
                'state_id' => 23,
                'name' => 'Paulo Bento',
            ),
            
            array (
                'id' => 7958,
                'state_id' => 23,
                'name' => 'Paverama',
            ),
            
            array (
                'id' => 7959,
                'state_id' => 23,
                'name' => 'Pedras Altas',
            ),
            
            array (
                'id' => 7962,
                'state_id' => 23,
                'name' => 'Pedro Osório',
            ),
            
            array (
                'id' => 7964,
                'state_id' => 23,
                'name' => 'Pejuçara',
            ),
            
            array (
                'id' => 7965,
                'state_id' => 23,
                'name' => 'Pelotas',
            ),
            
            array (
                'id' => 7966,
                'state_id' => 23,
                'name' => 'Picada Café',
            ),
            
            array (
                'id' => 7967,
                'state_id' => 23,
                'name' => 'Pinhal',
            ),
            
            array (
                'id' => 7972,
                'state_id' => 23,
                'name' => 'Pinhal da Serra',
            ),
            
            array (
                'id' => 7973,
                'state_id' => 23,
                'name' => 'Pinhal Grande',
            ),
            
            array (
                'id' => 7976,
                'state_id' => 23,
                'name' => 'Pinheirinho do Vale',
            ),
            
            array (
                'id' => 7977,
                'state_id' => 23,
                'name' => 'Pinheiro Machado',
            ),
            
            array (
                'id' => 7982,
                'state_id' => 23,
                'name' => 'Pirapó',
            ),
            
            array (
                'id' => 7983,
                'state_id' => 23,
                'name' => 'Piratini',
            ),
            
            array (
                'id' => 7985,
                'state_id' => 23,
                'name' => 'Planalto',
            ),
            
            array (
                'id' => 7988,
                'state_id' => 23,
                'name' => 'Poço das Antas',
            ),
            
            array (
                'id' => 7991,
                'state_id' => 23,
                'name' => 'Pontão',
            ),
            
            array (
                'id' => 7992,
                'state_id' => 23,
                'name' => 'Ponte Preta',
            ),
            
            array (
                'id' => 7993,
                'state_id' => 23,
                'name' => 'Portão',
            ),
            
            array (
                'id' => 7994,
                'state_id' => 23,
                'name' => 'Porto Alegre',
            ),
            
            array (
                'id' => 7996,
                'state_id' => 23,
                'name' => 'Porto Lucena',
            ),
            
            array (
                'id' => 7997,
                'state_id' => 23,
                'name' => 'Porto Mauá',
            ),
            
            array (
                'id' => 7998,
                'state_id' => 23,
                'name' => 'Porto Vera Cruz',
            ),
            
            array (
                'id' => 7999,
                'state_id' => 23,
                'name' => 'Porto Xavier',
            ),
            
            array (
                'id' => 8000,
                'state_id' => 23,
                'name' => 'Pouso Novo',
            ),
            
            array (
                'id' => 8005,
                'state_id' => 23,
                'name' => 'Presidente Lucena',
            ),
            
            array (
                'id' => 8006,
                'state_id' => 23,
                'name' => 'Progresso',
            ),
            
            array (
                'id' => 8010,
                'state_id' => 23,
                'name' => 'Protásio Alves',
            ),
            
            array (
                'id' => 8012,
                'state_id' => 23,
                'name' => 'Putinga',
            ),
            
            array (
                'id' => 8013,
                'state_id' => 23,
                'name' => 'Quaraí',
            ),
            
            array (
                'id' => 8015,
                'state_id' => 23,
                'name' => 'Quatro Irmãos',
            ),
            
            array (
                'id' => 8016,
                'state_id' => 23,
                'name' => 'Quevedos',
            ),
            
            array (
                'id' => 8020,
                'state_id' => 23,
                'name' => 'Quinze de Novembro',
            ),
            
            array (
                'id' => 8023,
                'state_id' => 23,
                'name' => 'Redentora',
            ),
            
            array (
                'id' => 8025,
                'state_id' => 23,
                'name' => 'Relvado',
            ),
            
            array (
                'id' => 8026,
                'state_id' => 23,
                'name' => 'Restinga Seca',
            ),
            
            array (
                'id' => 8040,
                'state_id' => 23,
                'name' => 'Rio dos Índios',
            ),
            
            array (
                'id' => 8041,
                'state_id' => 23,
                'name' => 'Rio Grande',
            ),
            
            array (
                'id' => 8043,
                'state_id' => 23,
                'name' => 'Rio Pardo',
            ),
            
            array (
                'id' => 8047,
                'state_id' => 23,
                'name' => 'Riozinho',
            ),
            
            array (
                'id' => 8048,
                'state_id' => 23,
                'name' => 'Roca Sales',
            ),
            
            array (
                'id' => 8049,
                'state_id' => 23,
                'name' => 'Rodeio Bonito',
            ),
            
            array (
                'id' => 8050,
                'state_id' => 23,
                'name' => 'Rolador',
            ),
            
            array (
                'id' => 8051,
                'state_id' => 23,
                'name' => 'Rolante',
            ),
            
            array (
                'id' => 8053,
                'state_id' => 23,
                'name' => 'Ronda Alta',
            ),
            
            array (
                'id' => 8054,
                'state_id' => 23,
                'name' => 'Rondinha',
            ),
            
            array (
                'id' => 8055,
                'state_id' => 23,
                'name' => 'Roque Gonzales',
            ),
            
            array (
                'id' => 8057,
                'state_id' => 23,
                'name' => 'Rosário do Sul',
            ),
            
            array (
                'id' => 8058,
                'state_id' => 23,
                'name' => 'Sagrada Família',
            ),
            
            array (
                'id' => 8060,
                'state_id' => 23,
                'name' => 'Saldanha Marinho',
            ),
            
            array (
                'id' => 8064,
                'state_id' => 23,
                'name' => 'Salto do Jacuí',
            ),
            
            array (
                'id' => 8065,
                'state_id' => 23,
                'name' => 'SalvadorZZZn das Missões',
            ),
            
            array (
                'id' => 8066,
                'state_id' => 23,
                'name' => 'Salvador do Sul',
            ),
            
            array (
                'id' => 8067,
                'state_id' => 23,
                'name' => 'Sananduva',
            ),
            
            array (
                'id' => 8071,
                'state_id' => 23,
                'name' => 'Santa Bárbara do Sul',
            ),
            
            array (
                'id' => 8073,
                'state_id' => 23,
                'name' => 'Santa Cecília do Sul',
            ),
            
            array (
                'id' => 8075,
                'state_id' => 23,
                'name' => 'Santa Clara do Sul',
            ),
            
            array (
                'id' => 8079,
                'state_id' => 23,
                'name' => 'Santa Cruz do Sul',
            ),
            
            array (
                'id' => 8087,
                'state_id' => 23,
                'name' => 'Santa Maria',
            ),
            
            array (
                'id' => 8088,
                'state_id' => 23,
                'name' => 'Santa Maria do Herval',
            ),
            
            array (
                'id' => 8090,
                'state_id' => 23,
                'name' => 'Santa Rosa',
            ),
            
            array (
                'id' => 8094,
                'state_id' => 23,
                'name' => 'Santa Tereza',
            ),
            
            array (
                'id' => 8096,
                'state_id' => 23,
                'name' => 'Santa Vitória do Palmar',
            ),
            
            array (
                'id' => 8100,
                'state_id' => 23,
                'name' => 'Santana da Boa Vista',
            ),
            
            array (
                'id' => 8101,
                'state_id' => 23,
                'name' => 'Santana do Livramento',
            ),
            
            array (
                'id' => 8102,
                'state_id' => 23,
                'name' => 'Santiago',
            ),
            
            array (
                'id' => 8104,
                'state_id' => 23,
                'name' => 'Santo Ângelo',
            ),
            
            array (
                'id' => 8108,
                'state_id' => 23,
                'name' => 'Santo Antônio da Patrulha',
            ),
            
            array (
                'id' => 8109,
                'state_id' => 23,
                'name' => 'Santo Antônio das Missões',
            ),
            
            array (
                'id' => 8112,
                'state_id' => 23,
                'name' => 'Santo Antônio do Palma',
            ),
            
            array (
                'id' => 8113,
                'state_id' => 23,
                'name' => 'Santo Antônio do Planalto',
            ),
            
            array (
                'id' => 8114,
                'state_id' => 23,
                'name' => 'Santo Augusto',
            ),
            
            array (
                'id' => 8115,
                'state_id' => 23,
                'name' => 'Santo Cristo',
            ),
            
            array (
                'id' => 8116,
                'state_id' => 23,
                'name' => 'Santo Expedito do Sul',
            ),
            
            array (
                'id' => 8120,
                'state_id' => 23,
                'name' => 'São Borja',
            ),
            
            array (
                'id' => 8122,
                'state_id' => 23,
                'name' => 'São Domingos do Sul',
            ),
            
            array (
                'id' => 8124,
                'state_id' => 23,
                'name' => 'São Francisco de Assis',
            ),
            
            array (
                'id' => 8125,
                'state_id' => 23,
                'name' => 'São Francisco de Paula',
            ),
            
            array (
                'id' => 8126,
                'state_id' => 23,
                'name' => 'São Gabriel',
            ),
            
            array (
                'id' => 8127,
                'state_id' => 23,
                'name' => 'São Jerônimo',
            ),
            
            array (
                'id' => 8131,
                'state_id' => 23,
                'name' => 'São João da Urtiga',
            ),
            
            array (
                'id' => 8132,
                'state_id' => 23,
                'name' => 'São João do Polêsine',
            ),
            
            array (
                'id' => 8133,
                'state_id' => 23,
                'name' => 'São Jorge',
            ),
            
            array (
                'id' => 8137,
                'state_id' => 23,
                'name' => 'São José das Missões',
            ),
            
            array (
                'id' => 8140,
                'state_id' => 23,
                'name' => 'São José do Herval',
            ),
            
            array (
                'id' => 8141,
                'state_id' => 23,
                'name' => 'São José do Hortêncio',
            ),
            
            array (
                'id' => 8142,
                'state_id' => 23,
                'name' => 'São José do Inhacorá',
            ),
            
            array (
                'id' => 8143,
                'state_id' => 23,
                'name' => 'São José do Norte',
            ),
            
            array (
                'id' => 8144,
                'state_id' => 23,
                'name' => 'São José do Ouro',
            ),
            
            array (
                'id' => 8145,
                'state_id' => 23,
                'name' => 'São José dos Ausentes',
            ),
            
            array (
                'id' => 8146,
                'state_id' => 23,
                'name' => 'São Leopoldo',
            ),
            
            array (
                'id' => 8148,
                'state_id' => 23,
                'name' => 'São Lourenço do Sul',
            ),
            
            array (
                'id' => 8151,
                'state_id' => 23,
                'name' => 'São Luiz Gonzaga',
            ),
            
            array (
                'id' => 8153,
                'state_id' => 23,
                'name' => 'São Marcos',
            ),
            
            array (
                'id' => 8155,
                'state_id' => 23,
                'name' => 'São Martinho',
            ),
            
            array (
                'id' => 8156,
                'state_id' => 23,
                'name' => 'São Martinho da Serra',
            ),
            
            array (
                'id' => 8158,
                'state_id' => 23,
                'name' => 'São Miguel das Missões',
            ),
            
            array (
                'id' => 8159,
                'state_id' => 23,
                'name' => 'São Nicolau',
            ),
            
            array (
                'id' => 8161,
                'state_id' => 23,
                'name' => 'São Paulo das Missões',
            ),
            
            array (
                'id' => 8163,
                'state_id' => 23,
                'name' => 'São Pedro das Missões',
            ),
            
            array (
                'id' => 8164,
                'state_id' => 23,
                'name' => 'São Pedro da Serra',
            ),
            
            array (
                'id' => 8165,
                'state_id' => 23,
                'name' => 'São Pedro do Butiá',
            ),
            
            array (
                'id' => 8167,
                'state_id' => 23,
                'name' => 'São Pedro do Sul',
            ),
            
            array (
                'id' => 8171,
                'state_id' => 23,
                'name' => 'São Sebastião do Caí',
            ),
            
            array (
                'id' => 8172,
                'state_id' => 23,
                'name' => 'São Sepé',
            ),
            
            array (
                'id' => 8174,
                'state_id' => 23,
                'name' => 'São Valentim',
            ),
            
            array (
                'id' => 8176,
                'state_id' => 23,
                'name' => 'São Valentim do Sul',
            ),
            
            array (
                'id' => 8177,
                'state_id' => 23,
                'name' => 'São Valério do Sul',
            ),
            
            array (
                'id' => 8178,
                'state_id' => 23,
                'name' => 'São Vendelino',
            ),
            
            array (
                'id' => 8179,
                'state_id' => 23,
                'name' => 'São Vicente do Sul',
            ),
            
            array (
                'id' => 8180,
                'state_id' => 23,
                'name' => 'Sapiranga',
            ),
            
            array (
                'id' => 8181,
                'state_id' => 23,
                'name' => 'Sapucaia do Sul',
            ),
            
            array (
                'id' => 8182,
                'state_id' => 23,
                'name' => 'Sarandi',
            ),
            
            array (
                'id' => 8184,
                'state_id' => 23,
                'name' => 'Seberi',
            ),
            
            array (
                'id' => 8187,
                'state_id' => 23,
                'name' => 'Sede Nova',
            ),
            
            array (
                'id' => 8188,
                'state_id' => 23,
                'name' => 'Segredo',
            ),
            
            array (
                'id' => 8191,
                'state_id' => 23,
                'name' => 'Selbach',
            ),
            
            array (
                'id' => 8192,
                'state_id' => 23,
                'name' => 'Senador Salgado Filho',
            ),
            
            array (
                'id' => 8193,
                'state_id' => 23,
                'name' => 'Sentinela do Sul',
            ),
            
            array (
                'id' => 8195,
                'state_id' => 23,
                'name' => 'Serafina Corrêa',
            ),
            
            array (
                'id' => 8196,
                'state_id' => 23,
                'name' => 'Sério',
            ),
            
            array (
                'id' => 8199,
                'state_id' => 23,
                'name' => 'Sertão',
            ),
            
            array (
                'id' => 8200,
                'state_id' => 23,
                'name' => 'Sertão Santana',
            ),
            
            array (
                'id' => 8202,
                'state_id' => 23,
                'name' => 'Sete de Setembro',
            ),
            
            array (
                'id' => 8206,
                'state_id' => 23,
                'name' => 'Severiano de Almeida',
            ),
            
            array (
                'id' => 8209,
                'state_id' => 23,
                'name' => 'Silveira Martins',
            ),
            
            array (
                'id' => 8210,
                'state_id' => 23,
                'name' => 'Sinimbu',
            ),
            
            array (
                'id' => 8213,
                'state_id' => 23,
                'name' => 'Sobradinho',
            ),
            
            array (
                'id' => 8214,
                'state_id' => 23,
                'name' => 'Soledade',
            ),
            
            array (
                'id' => 8217,
                'state_id' => 23,
                'name' => 'Tabaí',
            ),
            
            array (
                'id' => 8223,
                'state_id' => 23,
                'name' => 'Tapejara',
            ),
            
            array (
                'id' => 8224,
                'state_id' => 23,
                'name' => 'Tapera',
            ),
            
            array (
                'id' => 8226,
                'state_id' => 23,
                'name' => 'Tapes',
            ),
            
            array (
                'id' => 8227,
                'state_id' => 23,
                'name' => 'Taquara',
            ),
            
            array (
                'id' => 8228,
                'state_id' => 23,
                'name' => 'Taquari',
            ),
            
            array (
                'id' => 8230,
                'state_id' => 23,
                'name' => 'Taquaruçu do Sul',
            ),
            
            array (
                'id' => 8231,
                'state_id' => 23,
                'name' => 'Tavares',
            ),
            
            array (
                'id' => 8232,
                'state_id' => 23,
                'name' => 'Tenente Portela',
            ),
            
            array (
                'id' => 8233,
                'state_id' => 23,
                'name' => 'Terra de Areia',
            ),
            
            array (
                'id' => 8235,
                'state_id' => 23,
                'name' => 'Teutônia',
            ),
            
            array (
                'id' => 8238,
                'state_id' => 23,
                'name' => 'Tiradentes do Sul',
            ),
            
            array (
                'id' => 8239,
                'state_id' => 23,
                'name' => 'Toropi',
            ),
            
            array (
                'id' => 8242,
                'state_id' => 23,
                'name' => 'Torres',
            ),
            
            array (
                'id' => 8245,
                'state_id' => 23,
                'name' => 'Tramandaí',
            ),
            
            array (
                'id' => 8246,
                'state_id' => 23,
                'name' => 'Travesseiro',
            ),
            
            array (
                'id' => 8248,
                'state_id' => 23,
                'name' => 'Três Arroios',
            ),
            
            array (
                'id' => 8250,
                'state_id' => 23,
                'name' => 'Três Cachoeiras',
            ),
            
            array (
                'id' => 8251,
                'state_id' => 23,
                'name' => 'Três Coroas',
            ),
            
            array (
                'id' => 8252,
                'state_id' => 23,
                'name' => 'Três de Maio',
            ),
            
            array (
                'id' => 8253,
                'state_id' => 23,
                'name' => 'Três Forquilhas',
            ),
            
            array (
                'id' => 8254,
                'state_id' => 23,
                'name' => 'Três Palmeiras',
            ),
            
            array (
                'id' => 8255,
                'state_id' => 23,
                'name' => 'Três Passos',
            ),
            
            array (
                'id' => 8257,
                'state_id' => 23,
                'name' => 'Trindade do Sul',
            ),
            
            array (
                'id' => 8258,
                'state_id' => 23,
                'name' => 'Triunfo',
            ),
            
            array (
                'id' => 8260,
                'state_id' => 23,
                'name' => 'Tucunduva',
            ),
            
            array (
                'id' => 8262,
                'state_id' => 23,
                'name' => 'Tunas',
            ),
            
            array (
                'id' => 8264,
                'state_id' => 23,
                'name' => 'Tupanci do Sul',
            ),
            
            array (
                'id' => 8265,
                'state_id' => 23,
                'name' => 'Tupanciretã',
            ),
            
            array (
                'id' => 8267,
                'state_id' => 23,
                'name' => 'Tupandi',
            ),
            
            array (
                'id' => 8269,
                'state_id' => 23,
                'name' => 'Tuparendi',
            ),
            
            array (
                'id' => 8272,
                'state_id' => 23,
                'name' => 'Turuçu',
            ),
            
            array (
                'id' => 8274,
                'state_id' => 23,
                'name' => 'Ubiretama',
            ),
            
            array (
                'id' => 8276,
                'state_id' => 23,
                'name' => 'União da Serra',
            ),
            
            array (
                'id' => 8277,
                'state_id' => 23,
                'name' => 'Unistalda',
            ),
            
            array (
                'id' => 8278,
                'state_id' => 23,
                'name' => 'Uruguaiana',
            ),
            
            array (
                'id' => 8280,
                'state_id' => 23,
                'name' => 'Vacaria',
            ),
            
            array (
                'id' => 8283,
                'state_id' => 23,
                'name' => 'Vale do Sol',
            ),
            
            array (
                'id' => 8284,
                'state_id' => 23,
                'name' => 'Vale Real',
            ),
            
            array (
                'id' => 8286,
                'state_id' => 23,
                'name' => 'Vale Verde',
            ),
            
            array (
                'id' => 8287,
                'state_id' => 23,
                'name' => 'Vanini',
            ),
            
            array (
                'id' => 8288,
                'state_id' => 23,
                'name' => 'Venâncio Aires',
            ),
            
            array (
                'id' => 8289,
                'state_id' => 23,
                'name' => 'Vera Cruz',
            ),
            
            array (
                'id' => 8290,
                'state_id' => 23,
                'name' => 'Veranópolis',
            ),
            
            array (
                'id' => 8292,
                'state_id' => 23,
                'name' => 'Vespasiano Correa',
            ),
            
            array (
                'id' => 8293,
                'state_id' => 23,
                'name' => 'Viadutos',
            ),
            
            array (
                'id' => 8294,
                'state_id' => 23,
                'name' => 'Viamão',
            ),
            
            array (
                'id' => 8295,
                'state_id' => 23,
                'name' => 'Vicente Dutra',
            ),
            
            array (
                'id' => 8296,
                'state_id' => 23,
                'name' => 'Victor Graeff',
            ),
            
            array (
                'id' => 8299,
                'state_id' => 23,
                'name' => 'Vila Flores',
            ),
            
            array (
                'id' => 8300,
                'state_id' => 23,
                'name' => 'Vila Lângaro',
            ),
            
            array (
                'id' => 8302,
                'state_id' => 23,
                'name' => 'Vila Maria',
            ),
            
            array (
                'id' => 8303,
                'state_id' => 23,
                'name' => 'Vila Nova do Sul',
            ),
            
            array (
                'id' => 8307,
                'state_id' => 23,
                'name' => 'Vista Alegre',
            ),
            
            array (
                'id' => 8309,
                'state_id' => 23,
                'name' => 'Vista Alegre do Prata',
            ),
            
            array (
                'id' => 8310,
                'state_id' => 23,
                'name' => 'Vista Gaúcha',
            ),
            
            array (
                'id' => 8312,
                'state_id' => 23,
                'name' => 'Vitória das Missões',
            ),
            
            array (
                'id' => 8317,
                'state_id' => 23,
                'name' => 'Xangri-Lá',
            ),
            
            array (
                'id' => 8318,
                'state_id' => 23,
                'name' => 'Novo Xingu',
            ),
            
            array (
                'id' => 8319,
                'state_id' => 24,
                'name' => 'Abdon Batista',
            ),
            
            array (
                'id' => 8320,
                'state_id' => 24,
                'name' => 'Abelardo Luz',
            ),
            
            array (
                'id' => 8321,
                'state_id' => 24,
                'name' => 'Agrolândia',
            ),
            
            array (
                'id' => 8322,
                'state_id' => 24,
                'name' => 'Agronômica',
            ),
            
            array (
                'id' => 8323,
                'state_id' => 24,
                'name' => 'Água Doce',
            ),
            
            array (
                'id' => 8326,
                'state_id' => 24,
                'name' => 'Águas de Chapecó',
            ),
            
            array (
                'id' => 8327,
                'state_id' => 24,
                'name' => 'Águas Frias',
            ),
            
            array (
                'id' => 8328,
                'state_id' => 24,
                'name' => 'Águas Mornas',
            ),
            
            array (
                'id' => 8331,
                'state_id' => 24,
                'name' => 'Alfredo Wagner',
            ),
            
            array (
                'id' => 8333,
                'state_id' => 24,
                'name' => 'Alto Bela Vista',
            ),
            
            array (
                'id' => 8335,
                'state_id' => 24,
                'name' => 'Anchieta',
            ),
            
            array (
                'id' => 8336,
                'state_id' => 24,
                'name' => 'Angelina',
            ),
            
            array (
                'id' => 8337,
                'state_id' => 24,
                'name' => 'Anita Garibaldi',
            ),
            
            array (
                'id' => 8338,
                'state_id' => 24,
                'name' => 'Anitápolis',
            ),
            
            array (
                'id' => 8340,
                'state_id' => 24,
                'name' => 'Antônio Carlos',
            ),
            
            array (
                'id' => 8341,
                'state_id' => 24,
                'name' => 'Apiúna',
            ),
            
            array (
                'id' => 8342,
                'state_id' => 24,
                'name' => 'Arabutã',
            ),
            
            array (
                'id' => 8343,
                'state_id' => 24,
                'name' => 'Araquari',
            ),
            
            array (
                'id' => 8344,
                'state_id' => 24,
                'name' => 'Araranguá',
            ),
            
            array (
                'id' => 8345,
                'state_id' => 24,
                'name' => 'Armazém',
            ),
            
            array (
                'id' => 8347,
                'state_id' => 24,
                'name' => 'Arroio Trinta',
            ),
            
            array (
                'id' => 8348,
                'state_id' => 24,
                'name' => 'Arvoredo',
            ),
            
            array (
                'id' => 8349,
                'state_id' => 24,
                'name' => 'Ascurra',
            ),
            
            array (
                'id' => 8350,
                'state_id' => 24,
                'name' => 'Atalanta',
            ),
            
            array (
                'id' => 8352,
                'state_id' => 24,
                'name' => 'Aurora',
            ),
            
            array (
                'id' => 8355,
                'state_id' => 24,
                'name' => 'Balneário Arroio do Silva',
            ),
            
            array (
                'id' => 8356,
                'state_id' => 24,
                'name' => 'Balneário Barra do Sul',
            ),
            
            array (
                'id' => 8357,
                'state_id' => 24,
                'name' => 'Balneário Camboriú',
            ),
            
            array (
                'id' => 8358,
                'state_id' => 24,
                'name' => 'Balneário Gaivota',
            ),
            
            array (
                'id' => 8360,
                'state_id' => 24,
                'name' => 'Bandeirante',
            ),
            
            array (
                'id' => 8361,
                'state_id' => 24,
                'name' => 'Barra Bonita',
            ),
            
            array (
                'id' => 8367,
                'state_id' => 24,
                'name' => 'Barra Velha',
            ),
            
            array (
                'id' => 8373,
                'state_id' => 24,
                'name' => 'Bela Vista do Toldo',
            ),
            
            array (
                'id' => 8374,
                'state_id' => 24,
                'name' => 'Belmonte',
            ),
            
            array (
                'id' => 8375,
                'state_id' => 24,
                'name' => 'Benedito Novo',
            ),
            
            array (
                'id' => 8376,
                'state_id' => 24,
                'name' => 'Biguaçu',
            ),
            
            array (
                'id' => 8377,
                'state_id' => 24,
                'name' => 'Blumenau',
            ),
            
            array (
                'id' => 8378,
                'state_id' => 24,
                'name' => 'Bocaína do Sul',
            ),
            
            array (
                'id' => 8380,
                'state_id' => 24,
                'name' => 'Bom Jardim da Serra',
            ),
            
            array (
                'id' => 8381,
                'state_id' => 24,
                'name' => 'Bom Jesus',
            ),
            
            array (
                'id' => 8382,
                'state_id' => 24,
                'name' => 'Bom Jesus do Oeste',
            ),
            
            array (
                'id' => 8383,
                'state_id' => 24,
                'name' => 'Bom Retiro',
            ),
            
            array (
                'id' => 8385,
                'state_id' => 24,
                'name' => 'Bombinhas',
            ),
            
            array (
                'id' => 8386,
                'state_id' => 24,
                'name' => 'Botuverá',
            ),
            
            array (
                'id' => 8387,
                'state_id' => 24,
                'name' => 'Braço do Norte',
            ),
            
            array (
                'id' => 8388,
                'state_id' => 24,
                'name' => 'Braço do Trombudo',
            ),
            
            array (
                'id' => 8389,
                'state_id' => 24,
                'name' => 'Brunópolis',
            ),
            
            array (
                'id' => 8390,
                'state_id' => 24,
                'name' => 'Brusque',
            ),
            
            array (
                'id' => 8391,
                'state_id' => 24,
                'name' => 'Caçador',
            ),
            
            array (
                'id' => 8394,
                'state_id' => 24,
                'name' => 'Caibi',
            ),
            
            array (
                'id' => 8395,
                'state_id' => 24,
                'name' => 'Calmon',
            ),
            
            array (
                'id' => 8396,
                'state_id' => 24,
                'name' => 'Camboriú',
            ),
            
            array (
                'id' => 8400,
                'state_id' => 24,
                'name' => 'Campo Alegre',
            ),
            
            array (
                'id' => 8401,
                'state_id' => 24,
                'name' => 'Campo Belo do Sul',
            ),
            
            array (
                'id' => 8402,
                'state_id' => 24,
                'name' => 'Campo Erê',
            ),
            
            array (
                'id' => 8403,
                'state_id' => 24,
                'name' => 'Campos Novos',
            ),
            
            array (
                'id' => 8405,
                'state_id' => 24,
                'name' => 'Canelinha',
            ),
            
            array (
                'id' => 8407,
                'state_id' => 24,
                'name' => 'Canoinhas',
            ),
            
            array (
                'id' => 8408,
                'state_id' => 24,
                'name' => 'Capão Alto',
            ),
            
            array (
                'id' => 8409,
                'state_id' => 24,
                'name' => 'Capinzal',
            ),
            
            array (
                'id' => 8410,
                'state_id' => 24,
                'name' => 'Capivari de Baixo',
            ),
            
            array (
                'id' => 8412,
                'state_id' => 24,
                'name' => 'Catanduvas',
            ),
            
            array (
                'id' => 8414,
                'state_id' => 24,
                'name' => 'Caxambu do Sul',
            ),
            
            array (
                'id' => 8416,
                'state_id' => 24,
                'name' => 'Celso Ramos',
            ),
            
            array (
                'id' => 8417,
                'state_id' => 24,
                'name' => 'Cerro Negro',
            ),
            
            array (
                'id' => 8418,
                'state_id' => 24,
                'name' => 'Chapadão do Lageado',
            ),
            
            array (
                'id' => 8419,
                'state_id' => 24,
                'name' => 'Chapecó',
            ),
            
            array (
                'id' => 8421,
                'state_id' => 24,
                'name' => 'Cocal do Sul',
            ),
            
            array (
                'id' => 8424,
                'state_id' => 24,
                'name' => 'Concórdia',
            ),
            
            array (
                'id' => 8425,
                'state_id' => 24,
                'name' => 'Cordilheira Alta',
            ),
            
            array (
                'id' => 8426,
                'state_id' => 24,
                'name' => 'Coronel Freitas',
            ),
            
            array (
                'id' => 8427,
                'state_id' => 24,
                'name' => 'Coronel Martins',
            ),
            
            array (
                'id' => 8428,
                'state_id' => 24,
                'name' => 'Correia Pinto',
            ),
            
            array (
                'id' => 8429,
                'state_id' => 24,
                'name' => 'Corupá',
            ),
            
            array (
                'id' => 8430,
                'state_id' => 24,
                'name' => 'Criciúma',
            ),
            
            array (
                'id' => 8431,
                'state_id' => 24,
                'name' => 'Cunha Porã',
            ),
            
            array (
                'id' => 8432,
                'state_id' => 24,
                'name' => 'Cunhataí',
            ),
            
            array (
                'id' => 8433,
                'state_id' => 24,
                'name' => 'Curitibanos',
            ),
            
            array (
                'id' => 8436,
                'state_id' => 24,
                'name' => 'Descanso',
            ),
            
            array (
                'id' => 8437,
                'state_id' => 24,
                'name' => 'Dionísio Cerqueira',
            ),
            
            array (
                'id' => 8438,
                'state_id' => 24,
                'name' => 'Dona Emma',
            ),
            
            array (
                'id' => 8439,
                'state_id' => 24,
                'name' => 'Doutor Pedrinho',
            ),
            
            array (
                'id' => 8442,
                'state_id' => 24,
                'name' => 'Entre Rios',
            ),
            
            array (
                'id' => 8443,
                'state_id' => 24,
                'name' => 'Ermo',
            ),
            
            array (
                'id' => 8444,
                'state_id' => 24,
                'name' => 'Erval Velho',
            ),
            
            array (
                'id' => 8447,
                'state_id' => 24,
                'name' => 'Faxinal dos Guedes',
            ),
            
            array (
                'id' => 8451,
                'state_id' => 24,
                'name' => 'Flor do Sertão',
            ),
            
            array (
                'id' => 8452,
                'state_id' => 24,
                'name' => 'Florianópolis',
            ),
            
            array (
                'id' => 8453,
                'state_id' => 24,
                'name' => 'Formosa do Sul',
            ),
            
            array (
                'id' => 8454,
                'state_id' => 24,
                'name' => 'Forquilhinha',
            ),
            
            array (
                'id' => 8456,
                'state_id' => 24,
                'name' => 'Fraiburgo',
            ),
            
            array (
                'id' => 8458,
                'state_id' => 24,
                'name' => 'Frei Rogério',
            ),
            
            array (
                'id' => 8459,
                'state_id' => 24,
                'name' => 'Galvão',
            ),
            
            array (
                'id' => 8461,
                'state_id' => 24,
                'name' => 'Garopaba',
            ),
            
            array (
                'id' => 8462,
                'state_id' => 24,
                'name' => 'Garuva',
            ),
            
            array (
                'id' => 8463,
                'state_id' => 24,
                'name' => 'Gaspar',
            ),
            
            array (
                'id' => 8465,
                'state_id' => 24,
                'name' => 'Governador Celso Ramos',
            ),
            
            array (
                'id' => 8466,
                'state_id' => 24,
                'name' => 'Grão Pará',
            ),
            
            array (
                'id' => 8468,
                'state_id' => 24,
                'name' => 'Gravatal',
            ),
            
            array (
                'id' => 8469,
                'state_id' => 24,
                'name' => 'Guabiruba',
            ),
            
            array (
                'id' => 8471,
                'state_id' => 24,
                'name' => 'Guaraciaba',
            ),
            
            array (
                'id' => 8472,
                'state_id' => 24,
                'name' => 'Guaramirim',
            ),
            
            array (
                'id' => 8473,
                'state_id' => 24,
                'name' => 'Guarujá do Sul',
            ),
            
            array (
                'id' => 8475,
                'state_id' => 24,
                'name' => 'Guatambú',
            ),
            
            array (
                'id' => 8478,
                'state_id' => 24,
                'name' => 'Herval D\'Oeste',
            ),
            
            array (
                'id' => 8479,
                'state_id' => 24,
                'name' => 'Ibiam',
            ),
            
            array (
                'id' => 8480,
                'state_id' => 24,
                'name' => 'Ibicaré',
            ),
            
            array (
                'id' => 8482,
                'state_id' => 24,
                'name' => 'Ibirama',
            ),
            
            array (
                'id' => 8483,
                'state_id' => 24,
                'name' => 'Içara',
            ),
            
            array (
                'id' => 8484,
                'state_id' => 24,
                'name' => 'Ilhota',
            ),
            
            array (
                'id' => 8485,
                'state_id' => 24,
                'name' => 'Imaruí',
            ),
            
            array (
                'id' => 8486,
                'state_id' => 24,
                'name' => 'Imbituba',
            ),
            
            array (
                'id' => 8487,
                'state_id' => 24,
                'name' => 'Imbuia',
            ),
            
            array (
                'id' => 8488,
                'state_id' => 24,
                'name' => 'Indaial',
            ),
            
            array (
                'id' => 8492,
                'state_id' => 24,
                'name' => 'Iomerê',
            ),
            
            array (
                'id' => 8493,
                'state_id' => 24,
                'name' => 'Ipira',
            ),
            
            array (
                'id' => 8495,
                'state_id' => 24,
                'name' => 'Iporã do Oeste',
            ),
            
            array (
                'id' => 8496,
                'state_id' => 24,
                'name' => 'Ipuaçu',
            ),
            
            array (
                'id' => 8497,
                'state_id' => 24,
                'name' => 'Ipumirim',
            ),
            
            array (
                'id' => 8498,
                'state_id' => 24,
                'name' => 'Iraceminha',
            ),
            
            array (
                'id' => 8500,
                'state_id' => 24,
                'name' => 'Irani',
            ),
            
            array (
                'id' => 8502,
                'state_id' => 24,
                'name' => 'Irati',
            ),
            
            array (
                'id' => 8503,
                'state_id' => 24,
                'name' => 'Irineópolis',
            ),
            
            array (
                'id' => 8504,
                'state_id' => 24,
                'name' => 'Itá',
            ),
            
            array (
                'id' => 8506,
                'state_id' => 24,
                'name' => 'Itaiópolis',
            ),
            
            array (
                'id' => 8507,
                'state_id' => 24,
                'name' => 'Itajaí',
            ),
            
            array (
                'id' => 8509,
                'state_id' => 24,
                'name' => 'Itapema',
            ),
            
            array (
                'id' => 8510,
                'state_id' => 24,
                'name' => 'Itapiranga',
            ),
            
            array (
                'id' => 8511,
                'state_id' => 24,
                'name' => 'Itapoá',
            ),
            
            array (
                'id' => 8514,
                'state_id' => 24,
                'name' => 'Ituporanga',
            ),
            
            array (
                'id' => 8515,
                'state_id' => 24,
                'name' => 'Jaborá',
            ),
            
            array (
                'id' => 8516,
                'state_id' => 24,
                'name' => 'Jacinto Machado',
            ),
            
            array (
                'id' => 8517,
                'state_id' => 24,
                'name' => 'Jaguaruna',
            ),
            
            array (
                'id' => 8518,
                'state_id' => 24,
                'name' => 'Jaraguá do Sul',
            ),
            
            array (
                'id' => 8519,
                'state_id' => 24,
                'name' => 'Jardinópolis',
            ),
            
            array (
                'id' => 8520,
                'state_id' => 24,
                'name' => 'Joaçaba',
            ),
            
            array (
                'id' => 8521,
                'state_id' => 24,
                'name' => 'Joinville',
            ),
            
            array (
                'id' => 8522,
                'state_id' => 24,
                'name' => 'José Boiteux',
            ),
            
            array (
                'id' => 8523,
                'state_id' => 24,
                'name' => 'Jupiá',
            ),
            
            array (
                'id' => 8524,
                'state_id' => 24,
                'name' => 'Lacerdópolis',
            ),
            
            array (
                'id' => 8525,
                'state_id' => 24,
                'name' => 'Lages',
            ),
            
            array (
                'id' => 8528,
                'state_id' => 24,
                'name' => 'Laguna',
            ),
            
            array (
                'id' => 8529,
                'state_id' => 24,
                'name' => 'Lajeado Grande',
            ),
            
            array (
                'id' => 8530,
                'state_id' => 24,
                'name' => 'Laurentino',
            ),
            
            array (
                'id' => 8531,
                'state_id' => 24,
                'name' => 'Lauro Müller',
            ),
            
            array (
                'id' => 8533,
                'state_id' => 24,
                'name' => 'Lebon Régis',
            ),
            
            array (
                'id' => 8534,
                'state_id' => 24,
                'name' => 'Leoberto Leal',
            ),
            
            array (
                'id' => 8535,
                'state_id' => 24,
                'name' => 'Lindóia do Sul',
            ),
            
            array (
                'id' => 8537,
                'state_id' => 24,
                'name' => 'Lontras',
            ),
            
            array (
                'id' => 8539,
                'state_id' => 24,
                'name' => 'Luiz Alves',
            ),
            
            array (
                'id' => 8540,
                'state_id' => 24,
                'name' => 'Luzerna',
            ),
            
            array (
                'id' => 8542,
                'state_id' => 24,
                'name' => 'Macieira',
            ),
            
            array (
                'id' => 8543,
                'state_id' => 24,
                'name' => 'Mafra',
            ),
            
            array (
                'id' => 8544,
                'state_id' => 24,
                'name' => 'Major Gercino',
            ),
            
            array (
                'id' => 8545,
                'state_id' => 24,
                'name' => 'Major Vieira',
            ),
            
            array (
                'id' => 8546,
                'state_id' => 24,
                'name' => 'Maracajá',
            ),
            
            array (
                'id' => 8549,
                'state_id' => 24,
                'name' => 'Maravilha',
            ),
            
            array (
                'id' => 8552,
                'state_id' => 24,
                'name' => 'Marema',
            ),
            
            array (
                'id' => 8556,
                'state_id' => 24,
                'name' => 'Massaranduba',
            ),
            
            array (
                'id' => 8557,
                'state_id' => 24,
                'name' => 'Matos Costa',
            ),
            
            array (
                'id' => 8558,
                'state_id' => 24,
                'name' => 'Meleiro',
            ),
            
            array (
                'id' => 8561,
                'state_id' => 24,
                'name' => 'Mirim Doce',
            ),
            
            array (
                'id' => 8562,
                'state_id' => 24,
                'name' => 'Modelo',
            ),
            
            array (
                'id' => 8563,
                'state_id' => 24,
                'name' => 'Mondaí',
            ),
            
            array (
                'id' => 8565,
                'state_id' => 24,
                'name' => 'Monte Carlo',
            ),
            
            array (
                'id' => 8566,
                'state_id' => 24,
                'name' => 'Monte Castelo',
            ),
            
            array (
                'id' => 8568,
                'state_id' => 24,
                'name' => 'Morro da Fumaça',
            ),
            
            array (
                'id' => 8570,
                'state_id' => 24,
                'name' => 'Morro Grande',
            ),
            
            array (
                'id' => 8571,
                'state_id' => 24,
                'name' => 'Navegantes',
            ),
            
            array (
                'id' => 8574,
                'state_id' => 24,
                'name' => 'Nova Erechim',
            ),
            
            array (
                'id' => 8576,
                'state_id' => 24,
                'name' => 'Nova Itaberaba',
            ),
            
            array (
                'id' => 8579,
                'state_id' => 24,
                'name' => 'Nova Trento',
            ),
            
            array (
                'id' => 8580,
                'state_id' => 24,
                'name' => 'Nova Veneza',
            ),
            
            array (
                'id' => 8581,
                'state_id' => 24,
                'name' => 'Novo Horizonte',
            ),
            
            array (
                'id' => 8582,
                'state_id' => 24,
                'name' => 'Orleans',
            ),
            
            array (
                'id' => 8583,
                'state_id' => 24,
                'name' => 'Otacílio Costa',
            ),
            
            array (
                'id' => 8584,
                'state_id' => 24,
                'name' => 'Ouro',
            ),
            
            array (
                'id' => 8585,
                'state_id' => 24,
                'name' => 'Ouro Verde',
            ),
            
            array (
                'id' => 8587,
                'state_id' => 24,
                'name' => 'Paial',
            ),
            
            array (
                'id' => 8588,
                'state_id' => 24,
                'name' => 'Painel',
            ),
            
            array (
                'id' => 8589,
                'state_id' => 24,
                'name' => 'Palhoça',
            ),
            
            array (
                'id' => 8590,
                'state_id' => 24,
                'name' => 'Palma Sola',
            ),
            
            array (
                'id' => 8591,
                'state_id' => 24,
                'name' => 'Palmeira',
            ),
            
            array (
                'id' => 8592,
                'state_id' => 24,
                'name' => 'Palmitos',
            ),
            
            array (
                'id' => 8594,
                'state_id' => 24,
                'name' => 'Papanduva',
            ),
            
            array (
                'id' => 8595,
                'state_id' => 24,
                'name' => 'Paraíso',
            ),
            
            array (
                'id' => 8596,
                'state_id' => 24,
                'name' => 'Passo de Torres',
            ),
            
            array (
                'id' => 8598,
                'state_id' => 24,
                'name' => 'Passos Maia',
            ),
            
            array (
                'id' => 8600,
                'state_id' => 24,
                'name' => 'Paulo Lopes',
            ),
            
            array (
                'id' => 8601,
                'state_id' => 24,
                'name' => 'Pedras Grandes',
            ),
            
            array (
                'id' => 8602,
                'state_id' => 24,
                'name' => 'Penha',
            ),
            
            array (
                'id' => 8604,
                'state_id' => 24,
                'name' => 'Peritiba',
            ),
            
            array (
                'id' => 8606,
                'state_id' => 24,
                'name' => 'Petrolândia',
            ),
            
            array (
                'id' => 8607,
                'state_id' => 24,
                'name' => 'Balneário Piçarras',
            ),
            
            array (
                'id' => 8609,
                'state_id' => 24,
                'name' => 'Pinhalzinho',
            ),
            
            array (
                'id' => 8611,
                'state_id' => 24,
                'name' => 'Pinheiro Preto',
            ),
            
            array (
                'id' => 8614,
                'state_id' => 24,
                'name' => 'Piratuba',
            ),
            
            array (
                'id' => 8616,
                'state_id' => 24,
                'name' => 'Planalto Alegre',
            ),
            
            array (
                'id' => 8618,
                'state_id' => 24,
                'name' => 'Pomerode',
            ),
            
            array (
                'id' => 8619,
                'state_id' => 24,
                'name' => 'Ponte Alta',
            ),
            
            array (
                'id' => 8620,
                'state_id' => 24,
                'name' => 'Ponte Alta do Norte',
            ),
            
            array (
                'id' => 8621,
                'state_id' => 24,
                'name' => 'Ponte Serrada',
            ),
            
            array (
                'id' => 8622,
                'state_id' => 24,
                'name' => 'Porto Belo',
            ),
            
            array (
                'id' => 8623,
                'state_id' => 24,
                'name' => 'Porto União',
            ),
            
            array (
                'id' => 8624,
                'state_id' => 24,
                'name' => 'Pouso Redondo',
            ),
            
            array (
                'id' => 8625,
                'state_id' => 24,
                'name' => 'Praia Grande',
            ),
            
            array (
                'id' => 8627,
                'state_id' => 24,
                'name' => 'Presidente Castelo Branco',
            ),
            
            array (
                'id' => 8628,
                'state_id' => 24,
                'name' => 'Presidente Getúlio',
            ),
            
            array (
                'id' => 8631,
                'state_id' => 24,
                'name' => 'Presidente Nereu',
            ),
            
            array (
                'id' => 8632,
                'state_id' => 24,
                'name' => 'Princesa',
            ),
            
            array (
                'id' => 8634,
                'state_id' => 24,
                'name' => 'Quilombo',
            ),
            
            array (
                'id' => 8636,
                'state_id' => 24,
                'name' => 'Rancho Queimado',
            ),
            
            array (
                'id' => 8646,
                'state_id' => 24,
                'name' => 'Rio das Antas',
            ),
            
            array (
                'id' => 8648,
                'state_id' => 24,
                'name' => 'Rio do Campo',
            ),
            
            array (
                'id' => 8649,
                'state_id' => 24,
                'name' => 'Rio do Oeste',
            ),
            
            array (
                'id' => 8650,
                'state_id' => 24,
                'name' => 'Rio do Sul',
            ),
            
            array (
                'id' => 8652,
                'state_id' => 24,
                'name' => 'Rio dos Cedros',
            ),
            
            array (
                'id' => 8653,
                'state_id' => 24,
                'name' => 'Rio Fortuna',
            ),
            
            array (
                'id' => 8655,
                'state_id' => 24,
                'name' => 'Rio Negrinho',
            ),
            
            array (
                'id' => 8657,
                'state_id' => 24,
                'name' => 'Rio Rufino',
            ),
            
            array (
                'id' => 8658,
                'state_id' => 24,
                'name' => 'Riqueza',
            ),
            
            array (
                'id' => 8659,
                'state_id' => 24,
                'name' => 'Rodeio',
            ),
            
            array (
                'id' => 8660,
                'state_id' => 24,
                'name' => 'Romelândia',
            ),
            
            array (
                'id' => 8662,
                'state_id' => 24,
                'name' => 'Salete',
            ),
            
            array (
                'id' => 8663,
                'state_id' => 24,
                'name' => 'Saltinho',
            ),
            
            array (
                'id' => 8664,
                'state_id' => 24,
                'name' => 'Salto Veloso',
            ),
            
            array (
                'id' => 8666,
                'state_id' => 24,
                'name' => 'Sangão',
            ),
            
            array (
                'id' => 8667,
                'state_id' => 24,
                'name' => 'Santa Cecília',
            ),
            
            array (
                'id' => 8669,
                'state_id' => 24,
                'name' => 'Santa Helena',
            ),
            
            array (
                'id' => 8675,
                'state_id' => 24,
                'name' => 'Santa Rosa de Lima',
            ),
            
            array (
                'id' => 8676,
                'state_id' => 24,
                'name' => 'Santa Rosa do Sul',
            ),
            
            array (
                'id' => 8677,
                'state_id' => 24,
                'name' => 'Santa Terezinha',
            ),
            
            array (
                'id' => 8678,
                'state_id' => 24,
                'name' => 'Santa Terezinha do Progresso',
            ),
            
            array (
                'id' => 8680,
                'state_id' => 24,
                'name' => 'Santiago do Sul',
            ),
            
            array (
                'id' => 8681,
                'state_id' => 24,
                'name' => 'Santo Amaro da Imperatriz',
            ),
            
            array (
                'id' => 8684,
                'state_id' => 24,
                'name' => 'São Bento do Sul',
            ),
            
            array (
                'id' => 8685,
                'state_id' => 24,
                'name' => 'São Bernardino',
            ),
            
            array (
                'id' => 8686,
                'state_id' => 24,
                'name' => 'São Bonifácio',
            ),
            
            array (
                'id' => 8687,
                'state_id' => 24,
                'name' => 'São Carlos',
            ),
            
            array (
                'id' => 8689,
                'state_id' => 24,
                'name' => 'São Cristóvão do Sul',
            ),
            
            array (
                'id' => 8691,
                'state_id' => 24,
                'name' => 'São Domingos',
            ),
            
            array (
                'id' => 8692,
                'state_id' => 24,
                'name' => 'São Francisco do Sul',
            ),
            
            array (
                'id' => 8694,
                'state_id' => 24,
                'name' => 'São João Batista',
            ),
            
            array (
                'id' => 8695,
                'state_id' => 24,
                'name' => 'São João do Itaperiú',
            ),
            
            array (
                'id' => 8696,
                'state_id' => 24,
                'name' => 'São João do Oeste',
            ),
            
            array (
                'id' => 8698,
                'state_id' => 24,
                'name' => 'São João do Sul',
            ),
            
            array (
                'id' => 8699,
                'state_id' => 24,
                'name' => 'São Joaquim',
            ),
            
            array (
                'id' => 8700,
                'state_id' => 24,
                'name' => 'São José',
            ),
            
            array (
                'id' => 8701,
                'state_id' => 24,
                'name' => 'São José do Cedro',
            ),
            
            array (
                'id' => 8702,
                'state_id' => 24,
                'name' => 'São José do Cerrito',
            ),
            
            array (
                'id' => 8705,
                'state_id' => 24,
                'name' => 'São Lourenço do Oeste',
            ),
            
            array (
                'id' => 8706,
                'state_id' => 24,
                'name' => 'São Ludgero',
            ),
            
            array (
                'id' => 8707,
                'state_id' => 24,
                'name' => 'São Martinho',
            ),
            
            array (
                'id' => 8708,
                'state_id' => 24,
                'name' => 'São Miguel do Oeste',
            ),
            
            array (
                'id' => 8709,
                'state_id' => 24,
                'name' => 'São Miguel da Boa Vista',
            ),
            
            array (
                'id' => 8711,
                'state_id' => 24,
                'name' => 'São Pedro de Alcântara',
            ),
            
            array (
                'id' => 8717,
                'state_id' => 24,
                'name' => 'Saudades',
            ),
            
            array (
                'id' => 8718,
                'state_id' => 24,
                'name' => 'Schroeder',
            ),
            
            array (
                'id' => 8719,
                'state_id' => 24,
                'name' => 'Seara',
            ),
            
            array (
                'id' => 8721,
                'state_id' => 24,
                'name' => 'Serra Alta',
            ),
            
            array (
                'id' => 8723,
                'state_id' => 24,
                'name' => 'Siderópolis',
            ),
            
            array (
                'id' => 8724,
                'state_id' => 24,
                'name' => 'Sombrio',
            ),
            
            array (
                'id' => 8726,
                'state_id' => 24,
                'name' => 'Sul Brasil',
            ),
            
            array (
                'id' => 8727,
                'state_id' => 24,
                'name' => 'Taió',
            ),
            
            array (
                'id' => 8728,
                'state_id' => 24,
                'name' => 'Tangará',
            ),
            
            array (
                'id' => 8732,
                'state_id' => 24,
                'name' => 'Tigrinhos',
            ),
            
            array (
                'id' => 8733,
                'state_id' => 24,
                'name' => 'Tijucas',
            ),
            
            array (
                'id' => 8734,
                'state_id' => 24,
                'name' => 'Timbé do Sul',
            ),
            
            array (
                'id' => 8735,
                'state_id' => 24,
                'name' => 'Timbó',
            ),
            
            array (
                'id' => 8736,
                'state_id' => 24,
                'name' => 'Timbó Grande',
            ),
            
            array (
                'id' => 8737,
                'state_id' => 24,
                'name' => 'Três Barras',
            ),
            
            array (
                'id' => 8738,
                'state_id' => 24,
                'name' => 'Treviso',
            ),
            
            array (
                'id' => 8739,
                'state_id' => 24,
                'name' => 'Treze de Maio',
            ),
            
            array (
                'id' => 8740,
                'state_id' => 24,
                'name' => 'Treze Tílias',
            ),
            
            array (
                'id' => 8741,
                'state_id' => 24,
                'name' => 'Trombudo Central',
            ),
            
            array (
                'id' => 8742,
                'state_id' => 24,
                'name' => 'Tubarão',
            ),
            
            array (
                'id' => 8743,
                'state_id' => 24,
                'name' => 'Tunápolis',
            ),
            
            array (
                'id' => 8745,
                'state_id' => 24,
                'name' => 'Turvo',
            ),
            
            array (
                'id' => 8746,
                'state_id' => 24,
                'name' => 'União do Oeste',
            ),
            
            array (
                'id' => 8747,
                'state_id' => 24,
                'name' => 'Urubici',
            ),
            
            array (
                'id' => 8749,
                'state_id' => 24,
                'name' => 'Urupema',
            ),
            
            array (
                'id' => 8750,
                'state_id' => 24,
                'name' => 'Urussanga',
            ),
            
            array (
                'id' => 8751,
                'state_id' => 24,
                'name' => 'Vargeão',
            ),
            
            array (
                'id' => 8752,
                'state_id' => 24,
                'name' => 'Vargem',
            ),
            
            array (
                'id' => 8753,
                'state_id' => 24,
                'name' => 'Vargem Bonita',
            ),
            
            array (
                'id' => 8755,
                'state_id' => 24,
                'name' => 'Vidal Ramos',
            ),
            
            array (
                'id' => 8756,
                'state_id' => 24,
                'name' => 'Videira',
            ),
            
            array (
                'id' => 8761,
                'state_id' => 24,
                'name' => 'Vítor Meireles',
            ),
            
            array (
                'id' => 8762,
                'state_id' => 24,
                'name' => 'Witmarsum',
            ),
            
            array (
                'id' => 8763,
                'state_id' => 24,
                'name' => 'Xanxerê',
            ),
            
            array (
                'id' => 8764,
                'state_id' => 24,
                'name' => 'Xavantina',
            ),
            
            array (
                'id' => 8765,
                'state_id' => 24,
                'name' => 'Xaxim',
            ),
            
            array (
                'id' => 8766,
                'state_id' => 24,
                'name' => 'Zortéa',
            ),
            
            array (
                'id' => 8768,
                'state_id' => 25,
                'name' => 'Amparo de São Francisco',
            ),
            
            array (
                'id' => 8769,
                'state_id' => 25,
                'name' => 'Aquidabã',
            ),
            
            array (
                'id' => 8770,
                'state_id' => 25,
                'name' => 'Aracaju',
            ),
            
            array (
                'id' => 8771,
                'state_id' => 25,
                'name' => 'Arauá',
            ),
            
            array (
                'id' => 8772,
                'state_id' => 25,
                'name' => 'Areia Branca',
            ),
            
            array (
                'id' => 8774,
                'state_id' => 25,
                'name' => 'Barra dos Coqueiros',
            ),
            
            array (
                'id' => 8776,
                'state_id' => 25,
                'name' => 'Boquim',
            ),
            
            array (
                'id' => 8777,
                'state_id' => 25,
                'name' => 'Brejo Grande',
            ),
            
            array (
                'id' => 8778,
                'state_id' => 25,
                'name' => 'Campo do Brito',
            ),
            
            array (
                'id' => 8779,
                'state_id' => 25,
                'name' => 'Canhoba',
            ),
            
            array (
                'id' => 8780,
                'state_id' => 25,
                'name' => 'Canindé de São Francisco',
            ),
            
            array (
                'id' => 8781,
                'state_id' => 25,
                'name' => 'Capela',
            ),
            
            array (
                'id' => 8782,
                'state_id' => 25,
                'name' => 'Carira',
            ),
            
            array (
                'id' => 8783,
                'state_id' => 25,
                'name' => 'Carmópolis',
            ),
            
            array (
                'id' => 8784,
                'state_id' => 25,
                'name' => 'Cedro de São João',
            ),
            
            array (
                'id' => 8785,
                'state_id' => 25,
                'name' => 'Cristinápolis',
            ),
            
            array (
                'id' => 8786,
                'state_id' => 25,
                'name' => 'Cumbe',
            ),
            
            array (
                'id' => 8787,
                'state_id' => 25,
                'name' => 'Divina Pastora',
            ),
            
            array (
                'id' => 8788,
                'state_id' => 25,
                'name' => 'Estância',
            ),
            
            array (
                'id' => 8789,
                'state_id' => 25,
                'name' => 'Feira Nova',
            ),
            
            array (
                'id' => 8790,
                'state_id' => 25,
                'name' => 'Frei Paulo',
            ),
            
            array (
                'id' => 8791,
                'state_id' => 25,
                'name' => 'Gararu',
            ),
            
            array (
                'id' => 8792,
                'state_id' => 25,
                'name' => 'General Maynard',
            ),
            
            array (
                'id' => 8793,
                'state_id' => 25,
                'name' => 'Graccho Cardoso',
            ),
            
            array (
                'id' => 8794,
                'state_id' => 25,
                'name' => 'Ilha das Flores',
            ),
            
            array (
                'id' => 8795,
                'state_id' => 25,
                'name' => 'Indiaroba',
            ),
            
            array (
                'id' => 8796,
                'state_id' => 25,
                'name' => 'Itabaiana',
            ),
            
            array (
                'id' => 8797,
                'state_id' => 25,
                'name' => 'Itabaianinha',
            ),
            
            array (
                'id' => 8798,
                'state_id' => 25,
                'name' => 'Itabi',
            ),
            
            array (
                'id' => 8799,
                'state_id' => 25,
                'name' => 'Itaporanga D\'Ajuda',
            ),
            
            array (
                'id' => 8800,
                'state_id' => 25,
                'name' => 'Japaratuba',
            ),
            
            array (
                'id' => 8801,
                'state_id' => 25,
                'name' => 'Japoatã',
            ),
            
            array (
                'id' => 8802,
                'state_id' => 25,
                'name' => 'Lagarto',
            ),
            
            array (
                'id' => 8804,
                'state_id' => 25,
                'name' => 'Laranjeiras',
            ),
            
            array (
                'id' => 8805,
                'state_id' => 25,
                'name' => 'Macambira',
            ),
            
            array (
                'id' => 8806,
                'state_id' => 25,
                'name' => 'Malhada dos Bois',
            ),
            
            array (
                'id' => 8807,
                'state_id' => 25,
                'name' => 'Malhador',
            ),
            
            array (
                'id' => 8808,
                'state_id' => 25,
                'name' => 'Maruim',
            ),
            
            array (
                'id' => 8810,
                'state_id' => 25,
                'name' => 'Moita Bonita',
            ),
            
            array (
                'id' => 8811,
                'state_id' => 25,
                'name' => 'Monte Alegre de Sergipe',
            ),
            
            array (
                'id' => 8813,
                'state_id' => 25,
                'name' => 'Muribeca',
            ),
            
            array (
                'id' => 8814,
                'state_id' => 25,
                'name' => 'Neópolis',
            ),
            
            array (
                'id' => 8815,
                'state_id' => 25,
                'name' => 'Nossa Senhora Aparecida',
            ),
            
            array (
                'id' => 8816,
                'state_id' => 25,
                'name' => 'Nossa Senhora da Glória',
            ),
            
            array (
                'id' => 8817,
                'state_id' => 25,
                'name' => 'Nossa Senhora das Dores',
            ),
            
            array (
                'id' => 8818,
                'state_id' => 25,
                'name' => 'Nossa Senhora de Lourdes',
            ),
            
            array (
                'id' => 8819,
                'state_id' => 25,
                'name' => 'Nossa Senhora do Socorro',
            ),
            
            array (
                'id' => 8820,
                'state_id' => 25,
                'name' => 'Pacatuba',
            ),
            
            array (
                'id' => 8822,
                'state_id' => 25,
                'name' => 'Pedra Mole',
            ),
            
            array (
                'id' => 8824,
                'state_id' => 25,
                'name' => 'Pedrinhas',
            ),
            
            array (
                'id' => 8825,
                'state_id' => 25,
                'name' => 'Pinhão',
            ),
            
            array (
                'id' => 8826,
                'state_id' => 25,
                'name' => 'Pirambu',
            ),
            
            array (
                'id' => 8827,
                'state_id' => 25,
                'name' => 'Poço Redondo',
            ),
            
            array (
                'id' => 8828,
                'state_id' => 25,
                'name' => 'Poço Verde',
            ),
            
            array (
                'id' => 8829,
                'state_id' => 25,
                'name' => 'Porto da Folha',
            ),
            
            array (
                'id' => 8830,
                'state_id' => 25,
                'name' => 'Propriá',
            ),
            
            array (
                'id' => 8831,
                'state_id' => 25,
                'name' => 'Riachão do Dantas',
            ),
            
            array (
                'id' => 8832,
                'state_id' => 25,
                'name' => 'Riachuelo',
            ),
            
            array (
                'id' => 8833,
                'state_id' => 25,
                'name' => 'Ribeirópolis',
            ),
            
            array (
                'id' => 8834,
                'state_id' => 25,
                'name' => 'Rosário do Catete',
            ),
            
            array (
                'id' => 8835,
                'state_id' => 25,
                'name' => 'Salgado',
            ),
            
            array (
                'id' => 8837,
                'state_id' => 25,
                'name' => 'Santa Luzia do Itanhy',
            ),
            
            array (
                'id' => 8838,
                'state_id' => 25,
                'name' => 'Santa Rosa de Lima',
            ),
            
            array (
                'id' => 8839,
                'state_id' => 25,
                'name' => 'Santana do São Francisco',
            ),
            
            array (
                'id' => 8840,
                'state_id' => 25,
                'name' => 'Santo Amaro das Brotas',
            ),
            
            array (
                'id' => 8841,
                'state_id' => 25,
                'name' => 'São Cristóvão',
            ),
            
            array (
                'id' => 8842,
                'state_id' => 25,
                'name' => 'São Domingos',
            ),
            
            array (
                'id' => 8843,
                'state_id' => 25,
                'name' => 'São Francisco',
            ),
            
            array (
                'id' => 8846,
                'state_id' => 25,
                'name' => 'São Miguel do Aleixo',
            ),
            
            array (
                'id' => 8847,
                'state_id' => 25,
                'name' => 'Simão Dias',
            ),
            
            array (
                'id' => 8848,
                'state_id' => 25,
                'name' => 'Siriri',
            ),
            
            array (
                'id' => 8849,
                'state_id' => 25,
                'name' => 'Telha',
            ),
            
            array (
                'id' => 8850,
                'state_id' => 25,
                'name' => 'Tobias Barreto',
            ),
            
            array (
                'id' => 8851,
                'state_id' => 25,
                'name' => 'Tomar do Geru',
            ),
            
            array (
                'id' => 8852,
                'state_id' => 25,
                'name' => 'Umbaúba',
            ),
            
            array (
                'id' => 8853,
                'state_id' => 26,
                'name' => 'Adamantina',
            ),
            
            array (
                'id' => 8854,
                'state_id' => 26,
                'name' => 'Adolfo',
            ),
            
            array (
                'id' => 8857,
                'state_id' => 26,
                'name' => 'Aguaí',
            ),
            
            array (
                'id' => 8858,
                'state_id' => 26,
                'name' => 'Águas da Prata',
            ),
            
            array (
                'id' => 8859,
                'state_id' => 26,
                'name' => 'Águas de Lindóia',
            ),
            
            array (
                'id' => 8860,
                'state_id' => 26,
                'name' => 'Águas de Santa Bárbara',
            ),
            
            array (
                'id' => 8861,
                'state_id' => 26,
                'name' => 'Águas de São Pedro',
            ),
            
            array (
                'id' => 8862,
                'state_id' => 26,
                'name' => 'Agudos',
            ),
            
            array (
                'id' => 8865,
                'state_id' => 26,
                'name' => 'Alambari',
            ),
            
            array (
                'id' => 8870,
                'state_id' => 26,
                'name' => 'Alfredo Marcondes',
            ),
            
            array (
                'id' => 8871,
                'state_id' => 26,
                'name' => 'Altair',
            ),
            
            array (
                'id' => 8872,
                'state_id' => 26,
                'name' => 'Altinópolis',
            ),
            
            array (
                'id' => 8873,
                'state_id' => 26,
                'name' => 'Alto Alegre',
            ),
            
            array (
                'id' => 8875,
                'state_id' => 26,
                'name' => 'Alumínio',
            ),
            
            array (
                'id' => 8876,
                'state_id' => 26,
                'name' => 'Álvares Florence',
            ),
            
            array (
                'id' => 8877,
                'state_id' => 26,
                'name' => 'Álvares Machado',
            ),
            
            array (
                'id' => 8878,
                'state_id' => 26,
                'name' => 'Álvaro de Carvalho',
            ),
            
            array (
                'id' => 8879,
                'state_id' => 26,
                'name' => 'Alvinlândia',
            ),
            
            array (
                'id' => 8883,
                'state_id' => 26,
                'name' => 'Americana',
            ),
            
            array (
                'id' => 8884,
                'state_id' => 26,
                'name' => 'Américo Brasiliense',
            ),
            
            array (
                'id' => 8885,
                'state_id' => 26,
                'name' => 'Américo de Campos',
            ),
            
            array (
                'id' => 8886,
                'state_id' => 26,
                'name' => 'Amparo',
            ),
            
            array (
                'id' => 8888,
                'state_id' => 26,
                'name' => 'Analândia',
            ),
            
            array (
                'id' => 8891,
                'state_id' => 26,
                'name' => 'Andradina',
            ),
            
            array (
                'id' => 8892,
                'state_id' => 26,
                'name' => 'Angatuba',
            ),
            
            array (
                'id' => 8893,
                'state_id' => 26,
                'name' => 'Anhembi',
            ),
            
            array (
                'id' => 8894,
                'state_id' => 26,
                'name' => 'Anhumas',
            ),
            
            array (
                'id' => 8896,
                'state_id' => 26,
                'name' => 'Aparecida',
            ),
            
            array (
                'id' => 8897,
                'state_id' => 26,
                'name' => 'Aparecida D\'Oeste',
            ),
            
            array (
                'id' => 8901,
                'state_id' => 26,
                'name' => 'Apiaí',
            ),
            
            array (
                'id' => 8906,
                'state_id' => 26,
                'name' => 'Araçariguama',
            ),
            
            array (
                'id' => 8907,
                'state_id' => 26,
                'name' => 'Araçatuba',
            ),
            
            array (
                'id' => 8908,
                'state_id' => 26,
                'name' => 'Araçoiaba da Serra',
            ),
            
            array (
                'id' => 8909,
                'state_id' => 26,
                'name' => 'Aramina',
            ),
            
            array (
                'id' => 8910,
                'state_id' => 26,
                'name' => 'Arandu',
            ),
            
            array (
                'id' => 8911,
                'state_id' => 26,
                'name' => 'Arapeí',
            ),
            
            array (
                'id' => 8912,
                'state_id' => 26,
                'name' => 'Araraquara',
            ),
            
            array (
                'id' => 8913,
                'state_id' => 26,
                'name' => 'Araras',
            ),
            
            array (
                'id' => 8916,
                'state_id' => 26,
                'name' => 'Arco-Íris',
            ),
            
            array (
                'id' => 8917,
                'state_id' => 26,
                'name' => 'Arealva',
            ),
            
            array (
                'id' => 8918,
                'state_id' => 26,
                'name' => 'Areias',
            ),
            
            array (
                'id' => 8919,
                'state_id' => 26,
                'name' => 'Areiópolis',
            ),
            
            array (
                'id' => 8920,
                'state_id' => 26,
                'name' => 'Ariranha',
            ),
            
            array (
                'id' => 8923,
                'state_id' => 26,
                'name' => 'Artur Nogueira',
            ),
            
            array (
                'id' => 8924,
                'state_id' => 26,
                'name' => 'Arujá',
            ),
            
            array (
                'id' => 8925,
                'state_id' => 26,
                'name' => 'Aspásia',
            ),
            
            array (
                'id' => 8926,
                'state_id' => 26,
                'name' => 'Assis',
            ),
            
            array (
                'id' => 8928,
                'state_id' => 26,
                'name' => 'Atibaia',
            ),
            
            array (
                'id' => 8930,
                'state_id' => 26,
                'name' => 'Auriflama',
            ),
            
            array (
                'id' => 8931,
                'state_id' => 26,
                'name' => 'Avaí',
            ),
            
            array (
                'id' => 8932,
                'state_id' => 26,
                'name' => 'Avanhandava',
            ),
            
            array (
                'id' => 8933,
                'state_id' => 26,
                'name' => 'Avaré',
            ),
            
            array (
                'id' => 8937,
                'state_id' => 26,
                'name' => 'Bady Bassitt',
            ),
            
            array (
                'id' => 8940,
                'state_id' => 26,
                'name' => 'Balbinos',
            ),
            
            array (
                'id' => 8941,
                'state_id' => 26,
                'name' => 'Bálsamo',
            ),
            
            array (
                'id' => 8942,
                'state_id' => 26,
                'name' => 'Bananal',
            ),
            
            array (
                'id' => 8945,
                'state_id' => 26,
                'name' => 'Barão de Antonina',
            ),
            
            array (
                'id' => 8947,
                'state_id' => 26,
                'name' => 'Barbosa',
            ),
            
            array (
                'id' => 8948,
                'state_id' => 26,
                'name' => 'Bariri',
            ),
            
            array (
                'id' => 8949,
                'state_id' => 26,
                'name' => 'Barra Bonita',
            ),
            
            array (
                'id' => 8950,
                'state_id' => 26,
                'name' => 'Barra do Chapéu',
            ),
            
            array (
                'id' => 8951,
                'state_id' => 26,
                'name' => 'Barra do Turvo',
            ),
            
            array (
                'id' => 8954,
                'state_id' => 26,
                'name' => 'Barretos',
            ),
            
            array (
                'id' => 8955,
                'state_id' => 26,
                'name' => 'Barrinha',
            ),
            
            array (
                'id' => 8956,
                'state_id' => 26,
                'name' => 'Barueri',
            ),
            
            array (
                'id' => 8957,
                'state_id' => 26,
                'name' => 'Bastos',
            ),
            
            array (
                'id' => 8958,
                'state_id' => 26,
                'name' => 'Batatais',
            ),
            
            array (
                'id' => 8961,
                'state_id' => 26,
                'name' => 'Bauru',
            ),
            
            array (
                'id' => 8962,
                'state_id' => 26,
                'name' => 'Bebedouro',
            ),
            
            array (
                'id' => 8965,
                'state_id' => 26,
                'name' => 'Bento de Abreu',
            ),
            
            array (
                'id' => 8966,
                'state_id' => 26,
                'name' => 'Bernardino de Campos',
            ),
            
            array (
                'id' => 8967,
                'state_id' => 26,
                'name' => 'Bertioga',
            ),
            
            array (
                'id' => 8968,
                'state_id' => 26,
                'name' => 'Bilac',
            ),
            
            array (
                'id' => 8969,
                'state_id' => 26,
                'name' => 'Birigüi',
            ),
            
            array (
                'id' => 8970,
                'state_id' => 26,
                'name' => 'Biritiba-Mirim',
            ),
            
            array (
                'id' => 8972,
                'state_id' => 26,
                'name' => 'Boa Esperança do Sul',
            ),
            
            array (
                'id' => 8975,
                'state_id' => 26,
                'name' => 'Bocaina',
            ),
            
            array (
                'id' => 8976,
                'state_id' => 26,
                'name' => 'Bofete',
            ),
            
            array (
                'id' => 8977,
                'state_id' => 26,
                'name' => 'Boituva',
            ),
            
            array (
                'id' => 8979,
                'state_id' => 26,
                'name' => 'Bom Jesus dos Perdões',
            ),
            
            array (
                'id' => 8981,
                'state_id' => 26,
                'name' => 'Bom Sucesso de Itararé',
            ),
            
            array (
                'id' => 8983,
                'state_id' => 26,
                'name' => 'Borá',
            ),
            
            array (
                'id' => 8984,
                'state_id' => 26,
                'name' => 'Boracéia',
            ),
            
            array (
                'id' => 8985,
                'state_id' => 26,
                'name' => 'Borborema',
            ),
            
            array (
                'id' => 8986,
                'state_id' => 26,
                'name' => 'Borebi',
            ),
            
            array (
                'id' => 8989,
                'state_id' => 26,
                'name' => 'Botucatu',
            ),
            
            array (
                'id' => 8992,
                'state_id' => 26,
                'name' => 'Bragança Paulista',
            ),
            
            array (
                'id' => 8995,
                'state_id' => 26,
                'name' => 'Braúna',
            ),
            
            array (
                'id' => 8996,
                'state_id' => 26,
                'name' => 'Brejo Alegre',
            ),
            
            array (
                'id' => 8997,
                'state_id' => 26,
                'name' => 'Brodowski',
            ),
            
            array (
                'id' => 8998,
                'state_id' => 26,
                'name' => 'Brotas',
            ),
            
            array (
                'id' => 9000,
                'state_id' => 26,
                'name' => 'Buri',
            ),
            
            array (
                'id' => 9001,
                'state_id' => 26,
                'name' => 'Buritama',
            ),
            
            array (
                'id' => 9002,
                'state_id' => 26,
                'name' => 'Buritizal',
            ),
            
            array (
                'id' => 9003,
                'state_id' => 26,
                'name' => 'Cabrália Paulista',
            ),
            
            array (
                'id' => 9004,
                'state_id' => 26,
                'name' => 'Cabreúva',
            ),
            
            array (
                'id' => 9005,
                'state_id' => 26,
                'name' => 'Caçapava',
            ),
            
            array (
                'id' => 9007,
                'state_id' => 26,
                'name' => 'Cachoeira Paulista',
            ),
            
            array (
                'id' => 9008,
                'state_id' => 26,
                'name' => 'Caconde',
            ),
            
            array (
                'id' => 9009,
                'state_id' => 26,
                'name' => 'Cafelândia',
            ),
            
            array (
                'id' => 9011,
                'state_id' => 26,
                'name' => 'Caiabu',
            ),
            
            array (
                'id' => 9013,
                'state_id' => 26,
                'name' => 'Caieiras',
            ),
            
            array (
                'id' => 9014,
                'state_id' => 26,
                'name' => 'Caiuá',
            ),
            
            array (
                'id' => 9015,
                'state_id' => 26,
                'name' => 'Cajamar',
            ),
            
            array (
                'id' => 9016,
                'state_id' => 26,
                'name' => 'Cajati',
            ),
            
            array (
                'id' => 9017,
                'state_id' => 26,
                'name' => 'Cajobi',
            ),
            
            array (
                'id' => 9018,
                'state_id' => 26,
                'name' => 'Cajuru',
            ),
            
            array (
                'id' => 9023,
                'state_id' => 26,
                'name' => 'Campina do Monte Alegre',
            ),
            
            array (
                'id' => 9025,
                'state_id' => 26,
                'name' => 'Campinas',
            ),
            
            array (
                'id' => 9026,
                'state_id' => 26,
                'name' => 'Campo Limpo Paulista',
            ),
            
            array (
                'id' => 9028,
                'state_id' => 26,
                'name' => 'Campos do Jordão',
            ),
            
            array (
                'id' => 9029,
                'state_id' => 26,
                'name' => 'Campos Novos Paulista',
            ),
            
            array (
                'id' => 9030,
                'state_id' => 26,
                'name' => 'Cananéia',
            ),
            
            array (
                'id' => 9031,
                'state_id' => 26,
                'name' => 'Canas',
            ),
            
            array (
                'id' => 9033,
                'state_id' => 26,
                'name' => 'Cândido Mota',
            ),
            
            array (
                'id' => 9034,
                'state_id' => 26,
                'name' => 'Cândido Rodrigues',
            ),
            
            array (
                'id' => 9036,
                'state_id' => 26,
                'name' => 'Canitar',
            ),
            
            array (
                'id' => 9037,
                'state_id' => 26,
                'name' => 'Capão Bonito',
            ),
            
            array (
                'id' => 9038,
                'state_id' => 26,
                'name' => 'Capela do Alto',
            ),
            
            array (
                'id' => 9039,
                'state_id' => 26,
                'name' => 'Capivari',
            ),
            
            array (
                'id' => 9043,
                'state_id' => 26,
                'name' => 'Caraguatatuba',
            ),
            
            array (
                'id' => 9044,
                'state_id' => 26,
                'name' => 'Carapicuíba',
            ),
            
            array (
                'id' => 9046,
                'state_id' => 26,
                'name' => 'Cardoso',
            ),
            
            array (
                'id' => 9049,
                'state_id' => 26,
                'name' => 'Casa Branca',
            ),
            
            array (
                'id' => 9050,
                'state_id' => 26,
                'name' => 'Cássia dos Coqueiros',
            ),
            
            array (
                'id' => 9051,
                'state_id' => 26,
                'name' => 'Castilho',
            ),
            
            array (
                'id' => 9052,
                'state_id' => 26,
                'name' => 'Catanduva',
            ),
            
            array (
                'id' => 9053,
                'state_id' => 26,
                'name' => 'Catiguá',
            ),
            
            array (
                'id' => 9056,
                'state_id' => 26,
                'name' => 'Cedral',
            ),
            
            array (
                'id' => 9057,
                'state_id' => 26,
                'name' => 'Cerqueira César',
            ),
            
            array (
                'id' => 9058,
                'state_id' => 26,
                'name' => 'Cerquilho',
            ),
            
            array (
                'id' => 9059,
                'state_id' => 26,
                'name' => 'Cesário Lange',
            ),
            
            array (
                'id' => 9061,
                'state_id' => 26,
                'name' => 'Charqueada',
            ),
            
            array (
                'id' => 9062,
                'state_id' => 26,
                'name' => 'Chavantes',
            ),
            
            array (
                'id' => 9065,
                'state_id' => 26,
                'name' => 'Clementina',
            ),
            
            array (
                'id' => 9067,
                'state_id' => 26,
                'name' => 'Colina',
            ),
            
            array (
                'id' => 9068,
                'state_id' => 26,
                'name' => 'Colômbia',
            ),
            
            array (
                'id' => 9070,
                'state_id' => 26,
                'name' => 'Conchal',
            ),
            
            array (
                'id' => 9071,
                'state_id' => 26,
                'name' => 'Conchas',
            ),
            
            array (
                'id' => 9072,
                'state_id' => 26,
                'name' => 'Cordeirópolis',
            ),
            
            array (
                'id' => 9073,
                'state_id' => 26,
                'name' => 'Coroados',
            ),
            
            array (
                'id' => 9075,
                'state_id' => 26,
                'name' => 'Coronel Macedo',
            ),
            
            array (
                'id' => 9078,
                'state_id' => 26,
                'name' => 'Corumbataí',
            ),
            
            array (
                'id' => 9079,
                'state_id' => 26,
                'name' => 'Cosmópolis',
            ),
            
            array (
                'id' => 9080,
                'state_id' => 26,
                'name' => 'Cosmorama',
            ),
            
            array (
                'id' => 9082,
                'state_id' => 26,
                'name' => 'Cotia',
            ),
            
            array (
                'id' => 9083,
                'state_id' => 26,
                'name' => 'Cravinhos',
            ),
            
            array (
                'id' => 9084,
                'state_id' => 26,
                'name' => 'Cristais Paulista',
            ),
            
            array (
                'id' => 9086,
                'state_id' => 26,
                'name' => 'Cruzália',
            ),
            
            array (
                'id' => 9087,
                'state_id' => 26,
                'name' => 'Cruzeiro',
            ),
            
            array (
                'id' => 9088,
                'state_id' => 26,
                'name' => 'Cubatão',
            ),
            
            array (
                'id' => 9090,
                'state_id' => 26,
                'name' => 'Cunha',
            ),
            
            array (
                'id' => 9093,
                'state_id' => 26,
                'name' => 'Descalvado',
            ),
            
            array (
                'id' => 9094,
                'state_id' => 26,
                'name' => 'Diadema',
            ),
            
            array (
                'id' => 9095,
                'state_id' => 26,
                'name' => 'Dirce Reis',
            ),
            
            array (
                'id' => 9097,
                'state_id' => 26,
                'name' => 'Divinolândia',
            ),
            
            array (
                'id' => 9098,
                'state_id' => 26,
                'name' => 'Dobrada',
            ),
            
            array (
                'id' => 9099,
                'state_id' => 26,
                'name' => 'Dois Córregos',
            ),
            
            array (
                'id' => 9100,
                'state_id' => 26,
                'name' => 'Dolcinópolis',
            ),
            
            array (
                'id' => 9102,
                'state_id' => 26,
                'name' => 'Dourado',
            ),
            
            array (
                'id' => 9103,
                'state_id' => 26,
                'name' => 'Dracena',
            ),
            
            array (
                'id' => 9104,
                'state_id' => 26,
                'name' => 'Duartina',
            ),
            
            array (
                'id' => 9105,
                'state_id' => 26,
                'name' => 'Dumont',
            ),
            
            array (
                'id' => 9107,
                'state_id' => 26,
                'name' => 'Echaporã',
            ),
            
            array (
                'id' => 9108,
                'state_id' => 26,
                'name' => 'Eldorado',
            ),
            
            array (
                'id' => 9110,
                'state_id' => 26,
                'name' => 'Elias Fausto',
            ),
            
            array (
                'id' => 9111,
                'state_id' => 26,
                'name' => 'Elisiário',
            ),
            
            array (
                'id' => 9112,
                'state_id' => 26,
                'name' => 'Embaúba',
            ),
            
            array (
                'id' => 9113,
                'state_id' => 26,
                'name' => 'Embu das Artes',
            ),
            
            array (
                'id' => 9114,
                'state_id' => 26,
                'name' => 'Embu-Guaçu',
            ),
            
            array (
                'id' => 9115,
                'state_id' => 26,
                'name' => 'Emilianópolis',
            ),
            
            array (
                'id' => 9118,
                'state_id' => 26,
                'name' => 'Engenheiro Coelho',
            ),
            
            array (
                'id' => 9124,
                'state_id' => 26,
                'name' => 'Espírito Santo do Pinhal',
            ),
            
            array (
                'id' => 9125,
                'state_id' => 26,
                'name' => 'Espírito Santo do Turvo',
            ),
            
            array (
                'id' => 9126,
                'state_id' => 26,
                'name' => 'Estiva Gerbi',
            ),
            
            array (
                'id' => 9127,
                'state_id' => 26,
                'name' => 'Estrela D\'Oeste',
            ),
            
            array (
                'id' => 9128,
                'state_id' => 26,
                'name' => 'Estrela do Norte',
            ),
            
            array (
                'id' => 9129,
                'state_id' => 26,
                'name' => 'Euclides da Cunha Paulista',
            ),
            
            array (
                'id' => 9131,
                'state_id' => 26,
                'name' => 'Fartura',
            ),
            
            array (
                'id' => 9135,
                'state_id' => 26,
                'name' => 'Fernando Prestes',
            ),
            
            array (
                'id' => 9136,
                'state_id' => 26,
                'name' => 'Fernandópolis',
            ),
            
            array (
                'id' => 9137,
                'state_id' => 26,
                'name' => 'Fernão',
            ),
            
            array (
                'id' => 9138,
                'state_id' => 26,
                'name' => 'Ferraz de Vasconcelos',
            ),
            
            array (
                'id' => 9139,
                'state_id' => 26,
                'name' => 'Flora Rica',
            ),
            
            array (
                'id' => 9140,
                'state_id' => 26,
                'name' => 'Floreal',
            ),
            
            array (
                'id' => 9142,
                'state_id' => 26,
                'name' => 'Flórida Paulista',
            ),
            
            array (
                'id' => 9143,
                'state_id' => 26,
                'name' => 'Florínia',
            ),
            
            array (
                'id' => 9144,
                'state_id' => 26,
                'name' => 'Franca',
            ),
            
            array (
                'id' => 9145,
                'state_id' => 26,
                'name' => 'Francisco Morato',
            ),
            
            array (
                'id' => 9146,
                'state_id' => 26,
                'name' => 'Franco da Rocha',
            ),
            
            array (
                'id' => 9148,
                'state_id' => 26,
                'name' => 'Gabriel Monteiro',
            ),
            
            array (
                'id' => 9149,
                'state_id' => 26,
                'name' => 'Gália',
            ),
            
            array (
                'id' => 9150,
                'state_id' => 26,
                'name' => 'Garça',
            ),
            
            array (
                'id' => 9152,
                'state_id' => 26,
                'name' => 'Gastão Vidigal',
            ),
            
            array (
                'id' => 9153,
                'state_id' => 26,
                'name' => 'Gavião Peixoto',
            ),
            
            array (
                'id' => 9154,
                'state_id' => 26,
                'name' => 'General Salgado',
            ),
            
            array (
                'id' => 9155,
                'state_id' => 26,
                'name' => 'Getulina',
            ),
            
            array (
                'id' => 9156,
                'state_id' => 26,
                'name' => 'Glicério',
            ),
            
            array (
                'id' => 9160,
                'state_id' => 26,
                'name' => 'Guaiçara',
            ),
            
            array (
                'id' => 9161,
                'state_id' => 26,
                'name' => 'Guaimbê',
            ),
            
            array (
                'id' => 9162,
                'state_id' => 26,
                'name' => 'Guaíra',
            ),
            
            array (
                'id' => 9164,
                'state_id' => 26,
                'name' => 'Guapiaçu',
            ),
            
            array (
                'id' => 9165,
                'state_id' => 26,
                'name' => 'Guapiara',
            ),
            
            array (
                'id' => 9167,
                'state_id' => 26,
                'name' => 'Guará',
            ),
            
            array (
                'id' => 9168,
                'state_id' => 26,
                'name' => 'Guaraçaí',
            ),
            
            array (
                'id' => 9169,
                'state_id' => 26,
                'name' => 'Guaraci',
            ),
            
            array (
                'id' => 9171,
                'state_id' => 26,
                'name' => 'Guarani D\'Oeste',
            ),
            
            array (
                'id' => 9172,
                'state_id' => 26,
                'name' => 'Guarantã',
            ),
            
            array (
                'id' => 9175,
                'state_id' => 26,
                'name' => 'Guararapes',
            ),
            
            array (
                'id' => 9176,
                'state_id' => 26,
                'name' => 'Guararema',
            ),
            
            array (
                'id' => 9177,
                'state_id' => 26,
                'name' => 'Guaratinguetá',
            ),
            
            array (
                'id' => 9178,
                'state_id' => 26,
                'name' => 'Guareí',
            ),
            
            array (
                'id' => 9179,
                'state_id' => 26,
                'name' => 'Guariba',
            ),
            
            array (
                'id' => 9182,
                'state_id' => 26,
                'name' => 'Guarujá',
            ),
            
            array (
                'id' => 9183,
                'state_id' => 26,
                'name' => 'Guarulhos',
            ),
            
            array (
                'id' => 9184,
                'state_id' => 26,
                'name' => 'Guatapará',
            ),
            
            array (
                'id' => 9185,
                'state_id' => 26,
                'name' => 'Guzolândia',
            ),
            
            array (
                'id' => 9186,
                'state_id' => 26,
                'name' => 'Herculândia',
            ),
            
            array (
                'id' => 9187,
                'state_id' => 26,
                'name' => 'Holambra',
            ),
            
            array (
                'id' => 9189,
                'state_id' => 26,
                'name' => 'Hortolândia',
            ),
            
            array (
                'id' => 9190,
                'state_id' => 26,
                'name' => 'Iacanga',
            ),
            
            array (
                'id' => 9191,
                'state_id' => 26,
                'name' => 'Iacri',
            ),
            
            array (
                'id' => 9192,
                'state_id' => 26,
                'name' => 'Iaras',
            ),
            
            array (
                'id' => 9193,
                'state_id' => 26,
                'name' => 'Ibaté',
            ),
            
            array (
                'id' => 9195,
                'state_id' => 26,
                'name' => 'Ibirá',
            ),
            
            array (
                'id' => 9196,
                'state_id' => 26,
                'name' => 'Ibirarema',
            ),
            
            array (
                'id' => 9197,
                'state_id' => 26,
                'name' => 'Ibitinga',
            ),
            
            array (
                'id' => 9201,
                'state_id' => 26,
                'name' => 'Ibiúna',
            ),
            
            array (
                'id' => 9202,
                'state_id' => 26,
                'name' => 'Icém',
            ),
            
            array (
                'id' => 9204,
                'state_id' => 26,
                'name' => 'Iepê',
            ),
            
            array (
                'id' => 9206,
                'state_id' => 26,
                'name' => 'Igaraçu do Tietê',
            ),
            
            array (
                'id' => 9208,
                'state_id' => 26,
                'name' => 'Igarapava',
            ),
            
            array (
                'id' => 9209,
                'state_id' => 26,
                'name' => 'Igaratá',
            ),
            
            array (
                'id' => 9210,
                'state_id' => 26,
                'name' => 'Iguape',
            ),
            
            array (
                'id' => 9211,
                'state_id' => 26,
                'name' => 'Ilha Comprida',
            ),
            
            array (
                'id' => 9213,
                'state_id' => 26,
                'name' => 'Ilha Solteira',
            ),
            
            array (
                'id' => 9214,
                'state_id' => 26,
                'name' => 'Ilhabela',
            ),
            
            array (
                'id' => 9216,
                'state_id' => 26,
                'name' => 'Indaiatuba',
            ),
            
            array (
                'id' => 9217,
                'state_id' => 26,
                'name' => 'Indiana',
            ),
            
            array (
                'id' => 9218,
                'state_id' => 26,
                'name' => 'Indiaporã',
            ),
            
            array (
                'id' => 9220,
                'state_id' => 26,
                'name' => 'Inúbia Paulista',
            ),
            
            array (
                'id' => 9221,
                'state_id' => 26,
                'name' => 'Ipaussu',
            ),
            
            array (
                'id' => 9222,
                'state_id' => 26,
                'name' => 'Iperó',
            ),
            
            array (
                'id' => 9223,
                'state_id' => 26,
                'name' => 'Ipeúna',
            ),
            
            array (
                'id' => 9224,
                'state_id' => 26,
                'name' => 'Ipiguá',
            ),
            
            array (
                'id' => 9225,
                'state_id' => 26,
                'name' => 'Iporanga',
            ),
            
            array (
                'id' => 9226,
                'state_id' => 26,
                'name' => 'Ipuã',
            ),
            
            array (
                'id' => 9227,
                'state_id' => 26,
                'name' => 'Iracemápolis',
            ),
            
            array (
                'id' => 9229,
                'state_id' => 26,
                'name' => 'Irapuã',
            ),
            
            array (
                'id' => 9230,
                'state_id' => 26,
                'name' => 'Irapuru',
            ),
            
            array (
                'id' => 9231,
                'state_id' => 26,
                'name' => 'Itaberá',
            ),
            
            array (
                'id' => 9233,
                'state_id' => 26,
                'name' => 'Itaí',
            ),
            
            array (
                'id' => 9235,
                'state_id' => 26,
                'name' => 'Itajobi',
            ),
            
            array (
                'id' => 9236,
                'state_id' => 26,
                'name' => 'Itaju',
            ),
            
            array (
                'id' => 9237,
                'state_id' => 26,
                'name' => 'Itanhaém',
            ),
            
            array (
                'id' => 9238,
                'state_id' => 26,
                'name' => 'Itaóca',
            ),
            
            array (
                'id' => 9239,
                'state_id' => 26,
                'name' => 'Itapecerica da Serra',
            ),
            
            array (
                'id' => 9240,
                'state_id' => 26,
                'name' => 'Itapetininga',
            ),
            
            array (
                'id' => 9242,
                'state_id' => 26,
                'name' => 'Itapeva',
            ),
            
            array (
                'id' => 9243,
                'state_id' => 26,
                'name' => 'Itapevi',
            ),
            
            array (
                'id' => 9244,
                'state_id' => 26,
                'name' => 'Itapira',
            ),
            
            array (
                'id' => 9245,
                'state_id' => 26,
                'name' => 'Itapirapuã Paulista',
            ),
            
            array (
                'id' => 9246,
                'state_id' => 26,
                'name' => 'Itápolis',
            ),
            
            array (
                'id' => 9247,
                'state_id' => 26,
                'name' => 'Itaporanga',
            ),
            
            array (
                'id' => 9248,
                'state_id' => 26,
                'name' => 'Itapuí',
            ),
            
            array (
                'id' => 9249,
                'state_id' => 26,
                'name' => 'Itapura',
            ),
            
            array (
                'id' => 9250,
                'state_id' => 26,
                'name' => 'Itaquaquecetuba',
            ),
            
            array (
                'id' => 9252,
                'state_id' => 26,
                'name' => 'Itararé',
            ),
            
            array (
                'id' => 9253,
                'state_id' => 26,
                'name' => 'Itariri',
            ),
            
            array (
                'id' => 9254,
                'state_id' => 26,
                'name' => 'Itatiba',
            ),
            
            array (
                'id' => 9255,
                'state_id' => 26,
                'name' => 'Itatinga',
            ),
            
            array (
                'id' => 9256,
                'state_id' => 26,
                'name' => 'Itirapina',
            ),
            
            array (
                'id' => 9257,
                'state_id' => 26,
                'name' => 'Itirapuã',
            ),
            
            array (
                'id' => 9258,
                'state_id' => 26,
                'name' => 'Itobi',
            ),
            
            array (
                'id' => 9260,
                'state_id' => 26,
                'name' => 'Itu',
            ),
            
            array (
                'id' => 9261,
                'state_id' => 26,
                'name' => 'Itupeva',
            ),
            
            array (
                'id' => 9262,
                'state_id' => 26,
                'name' => 'Ituverava',
            ),
            
            array (
                'id' => 9264,
                'state_id' => 26,
                'name' => 'Jaborandi',
            ),
            
            array (
                'id' => 9265,
                'state_id' => 26,
                'name' => 'Jaboticabal',
            ),
            
            array (
                'id' => 9267,
                'state_id' => 26,
                'name' => 'Jacareí',
            ),
            
            array (
                'id' => 9268,
                'state_id' => 26,
                'name' => 'Jaci',
            ),
            
            array (
                'id' => 9271,
                'state_id' => 26,
                'name' => 'Jacupiranga',
            ),
            
            array (
                'id' => 9273,
                'state_id' => 26,
                'name' => 'Jaguariúna',
            ),
            
            array (
                'id' => 9274,
                'state_id' => 26,
                'name' => 'Jales',
            ),
            
            array (
                'id' => 9276,
                'state_id' => 26,
                'name' => 'Jambeiro',
            ),
            
            array (
                'id' => 9277,
                'state_id' => 26,
                'name' => 'Jandira',
            ),
            
            array (
                'id' => 9282,
                'state_id' => 26,
                'name' => 'Jardinópolis',
            ),
            
            array (
                'id' => 9283,
                'state_id' => 26,
                'name' => 'Jarinu',
            ),
            
            array (
                'id' => 9285,
                'state_id' => 26,
                'name' => 'Jaú',
            ),
            
            array (
                'id' => 9286,
                'state_id' => 26,
                'name' => 'Jeriquara',
            ),
            
            array (
                'id' => 9287,
                'state_id' => 26,
                'name' => 'Joanópolis',
            ),
            
            array (
                'id' => 9288,
                'state_id' => 26,
                'name' => 'João Ramalho',
            ),
            
            array (
                'id' => 9291,
                'state_id' => 26,
                'name' => 'José Bonifácio',
            ),
            
            array (
                'id' => 9293,
                'state_id' => 26,
                'name' => 'Júlio Mesquita',
            ),
            
            array (
                'id' => 9294,
                'state_id' => 26,
                'name' => 'Jumirim',
            ),
            
            array (
                'id' => 9295,
                'state_id' => 26,
                'name' => 'Jundiaí',
            ),
            
            array (
                'id' => 9298,
                'state_id' => 26,
                'name' => 'Junqueirópolis',
            ),
            
            array (
                'id' => 9299,
                'state_id' => 26,
                'name' => 'Juquiá',
            ),
            
            array (
                'id' => 9301,
                'state_id' => 26,
                'name' => 'Juquitiba',
            ),
            
            array (
                'id' => 9309,
                'state_id' => 26,
                'name' => 'Lagoinha',
            ),
            
            array (
                'id' => 9310,
                'state_id' => 26,
                'name' => 'Laranjal Paulista',
            ),
            
            array (
                'id' => 9313,
                'state_id' => 26,
                'name' => 'Lavínia',
            ),
            
            array (
                'id' => 9314,
                'state_id' => 26,
                'name' => 'Lavrinhas',
            ),
            
            array (
                'id' => 9315,
                'state_id' => 26,
                'name' => 'Leme',
            ),
            
            array (
                'id' => 9316,
                'state_id' => 26,
                'name' => 'Lençóis Paulista',
            ),
            
            array (
                'id' => 9317,
                'state_id' => 26,
                'name' => 'Limeira',
            ),
            
            array (
                'id' => 9318,
                'state_id' => 26,
                'name' => 'Lindóia',
            ),
            
            array (
                'id' => 9319,
                'state_id' => 26,
                'name' => 'Lins',
            ),
            
            array (
                'id' => 9321,
                'state_id' => 26,
                'name' => 'Lorena',
            ),
            
            array (
                'id' => 9322,
                'state_id' => 26,
                'name' => 'Lourdes',
            ),
            
            array (
                'id' => 9323,
                'state_id' => 26,
                'name' => 'Louveira',
            ),
            
            array (
                'id' => 9324,
                'state_id' => 26,
                'name' => 'Lucélia',
            ),
            
            array (
                'id' => 9325,
                'state_id' => 26,
                'name' => 'Lucianópolis',
            ),
            
            array (
                'id' => 9326,
                'state_id' => 26,
                'name' => 'Luís Antônio',
            ),
            
            array (
                'id' => 9327,
                'state_id' => 26,
                'name' => 'Luiziânia',
            ),
            
            array (
                'id' => 9328,
                'state_id' => 26,
                'name' => 'Lupércio',
            ),
            
            array (
                'id' => 9330,
                'state_id' => 26,
                'name' => 'Lutécia',
            ),
            
            array (
                'id' => 9331,
                'state_id' => 26,
                'name' => 'Macatuba',
            ),
            
            array (
                'id' => 9332,
                'state_id' => 26,
                'name' => 'Macaubal',
            ),
            
            array (
                'id' => 9333,
                'state_id' => 26,
                'name' => 'Macedônia',
            ),
            
            array (
                'id' => 9335,
                'state_id' => 26,
                'name' => 'Mágda',
            ),
            
            array (
                'id' => 9337,
                'state_id' => 26,
                'name' => 'Mairinque',
            ),
            
            array (
                'id' => 9338,
                'state_id' => 26,
                'name' => 'Mairiporã',
            ),
            
            array (
                'id' => 9340,
                'state_id' => 26,
                'name' => 'Manduri',
            ),
            
            array (
                'id' => 9342,
                'state_id' => 26,
                'name' => 'Marabá Paulista',
            ),
            
            array (
                'id' => 9343,
                'state_id' => 26,
                'name' => 'Maracaí',
            ),
            
            array (
                'id' => 9344,
                'state_id' => 26,
                'name' => 'Marapoama',
            ),
            
            array (
                'id' => 9347,
                'state_id' => 26,
                'name' => 'Mariápolis',
            ),
            
            array (
                'id' => 9348,
                'state_id' => 26,
                'name' => 'Marília',
            ),
            
            array (
                'id' => 9349,
                'state_id' => 26,
                'name' => 'Marinópolis',
            ),
            
            array (
                'id' => 9353,
                'state_id' => 26,
                'name' => 'Martinópolis',
            ),
            
            array (
                'id' => 9354,
                'state_id' => 26,
                'name' => 'Matão',
            ),
            
            array (
                'id' => 9355,
                'state_id' => 26,
                'name' => 'Mauá',
            ),
            
            array (
                'id' => 9356,
                'state_id' => 26,
                'name' => 'Mendonça',
            ),
            
            array (
                'id' => 9357,
                'state_id' => 26,
                'name' => 'Meridiano',
            ),
            
            array (
                'id' => 9358,
                'state_id' => 26,
                'name' => 'Mesópolis',
            ),
            
            array (
                'id' => 9359,
                'state_id' => 26,
                'name' => 'Miguelópolis',
            ),
            
            array (
                'id' => 9360,
                'state_id' => 26,
                'name' => 'Mineiros do Tietê',
            ),
            
            array (
                'id' => 9361,
                'state_id' => 26,
                'name' => 'Mira Estrela',
            ),
            
            array (
                'id' => 9362,
                'state_id' => 26,
                'name' => 'Miracatu',
            ),
            
            array (
                'id' => 9364,
                'state_id' => 26,
                'name' => 'Mirandópolis',
            ),
            
            array (
                'id' => 9365,
                'state_id' => 26,
                'name' => 'Mirante do Paranapanema',
            ),
            
            array (
                'id' => 9366,
                'state_id' => 26,
                'name' => 'Mirassol',
            ),
            
            array (
                'id' => 9367,
                'state_id' => 26,
                'name' => 'Mirassolândia',
            ),
            
            array (
                'id' => 9368,
                'state_id' => 26,
                'name' => 'Mococa',
            ),
            
            array (
                'id' => 9369,
                'state_id' => 26,
                'name' => 'Mogi das Cruzes',
            ),
            
            array (
                'id' => 9370,
                'state_id' => 26,
                'name' => 'Mogi Guaçu',
            ),
            
            array (
                'id' => 9371,
                'state_id' => 26,
                'name' => 'Mogi Mirim',
            ),
            
            array (
                'id' => 9372,
                'state_id' => 26,
                'name' => 'Mombuca',
            ),
            
            array (
                'id' => 9373,
                'state_id' => 26,
                'name' => 'Monções',
            ),
            
            array (
                'id' => 9374,
                'state_id' => 26,
                'name' => 'Mongaguá',
            ),
            
            array (
                'id' => 9376,
                'state_id' => 26,
                'name' => 'Monte Alegre do Sul',
            ),
            
            array (
                'id' => 9377,
                'state_id' => 26,
                'name' => 'Monte Alto',
            ),
            
            array (
                'id' => 9378,
                'state_id' => 26,
                'name' => 'Monte Aprazível',
            ),
            
            array (
                'id' => 9379,
                'state_id' => 26,
                'name' => 'Monte Azul Paulista',
            ),
            
            array (
                'id' => 9381,
                'state_id' => 26,
                'name' => 'Monte Castelo',
            ),
            
            array (
                'id' => 9382,
                'state_id' => 26,
                'name' => 'Monte Mor',
            ),
            
            array (
                'id' => 9384,
                'state_id' => 26,
                'name' => 'Monteiro Lobato',
            ),
            
            array (
                'id' => 9386,
                'state_id' => 26,
                'name' => 'Morro Agudo',
            ),
            
            array (
                'id' => 9388,
                'state_id' => 26,
                'name' => 'Morungaba',
            ),
            
            array (
                'id' => 9390,
                'state_id' => 26,
                'name' => 'Motuca',
            ),
            
            array (
                'id' => 9392,
                'state_id' => 26,
                'name' => 'Murutinga do Sul',
            ),
            
            array (
                'id' => 9393,
                'state_id' => 26,
                'name' => 'Nantes',
            ),
            
            array (
                'id' => 9394,
                'state_id' => 26,
                'name' => 'Narandiba',
            ),
            
            array (
                'id' => 9395,
                'state_id' => 26,
                'name' => 'Natividade da Serra',
            ),
            
            array (
                'id' => 9396,
                'state_id' => 26,
                'name' => 'Nazaré Paulista',
            ),
            
            array (
                'id' => 9397,
                'state_id' => 26,
                'name' => 'Neves Paulista',
            ),
            
            array (
                'id' => 9398,
                'state_id' => 26,
                'name' => 'Nhandeara',
            ),
            
            array (
                'id' => 9399,
                'state_id' => 26,
                'name' => 'Nipoã',
            ),
            
            array (
                'id' => 9403,
                'state_id' => 26,
                'name' => 'Nova Aliança',
            ),
            
            array (
                'id' => 9406,
                'state_id' => 26,
                'name' => 'Nova Campina',
            ),
            
            array (
                'id' => 9407,
                'state_id' => 26,
                'name' => 'Nova Canaã Paulista',
            ),
            
            array (
                'id' => 9408,
                'state_id' => 26,
                'name' => 'Nova Castilho',
            ),
            
            array (
                'id' => 9409,
                'state_id' => 26,
                'name' => 'Nova Europa',
            ),
            
            array (
                'id' => 9410,
                'state_id' => 26,
                'name' => 'Nova Granada',
            ),
            
            array (
                'id' => 9411,
                'state_id' => 26,
                'name' => 'Nova Guataporanga',
            ),
            
            array (
                'id' => 9412,
                'state_id' => 26,
                'name' => 'Nova Independência',
            ),
            
            array (
                'id' => 9414,
                'state_id' => 26,
                'name' => 'Nova Luzitânia',
            ),
            
            array (
                'id' => 9415,
                'state_id' => 26,
                'name' => 'Nova Odessa',
            ),
            
            array (
                'id' => 9418,
                'state_id' => 26,
                'name' => 'Novais',
            ),
            
            array (
                'id' => 9420,
                'state_id' => 26,
                'name' => 'Novo Horizonte',
            ),
            
            array (
                'id' => 9421,
                'state_id' => 26,
                'name' => 'Nuporanga',
            ),
            
            array (
                'id' => 9423,
                'state_id' => 26,
                'name' => 'Ocauçu',
            ),
            
            array (
                'id' => 9424,
                'state_id' => 26,
                'name' => 'Óleo',
            ),
            
            array (
                'id' => 9425,
                'state_id' => 26,
                'name' => 'Olímpia',
            ),
            
            array (
                'id' => 9428,
                'state_id' => 26,
                'name' => 'Onda Verde',
            ),
            
            array (
                'id' => 9429,
                'state_id' => 26,
                'name' => 'Oriente',
            ),
            
            array (
                'id' => 9430,
                'state_id' => 26,
                'name' => 'Orindiúva',
            ),
            
            array (
                'id' => 9431,
                'state_id' => 26,
                'name' => 'Orlândia',
            ),
            
            array (
                'id' => 9432,
                'state_id' => 26,
                'name' => 'Osasco',
            ),
            
            array (
                'id' => 9433,
                'state_id' => 26,
                'name' => 'Oscar Bressane',
            ),
            
            array (
                'id' => 9434,
                'state_id' => 26,
                'name' => 'Osvaldo Cruz',
            ),
            
            array (
                'id' => 9435,
                'state_id' => 26,
                'name' => 'Ourinhos',
            ),
            
            array (
                'id' => 9437,
                'state_id' => 26,
                'name' => 'Ouro Verde',
            ),
            
            array (
                'id' => 9438,
                'state_id' => 26,
                'name' => 'Ouroeste',
            ),
            
            array (
                'id' => 9439,
                'state_id' => 26,
                'name' => 'Pacaembu',
            ),
            
            array (
                'id' => 9441,
                'state_id' => 26,
                'name' => 'Palestina',
            ),
            
            array (
                'id' => 9442,
                'state_id' => 26,
                'name' => 'Palmares Paulista',
            ),
            
            array (
                'id' => 9443,
                'state_id' => 26,
                'name' => 'Palmeira D\'Oeste',
            ),
            
            array (
                'id' => 9445,
                'state_id' => 26,
                'name' => 'Palmital',
            ),
            
            array (
                'id' => 9446,
                'state_id' => 26,
                'name' => 'Panorama',
            ),
            
            array (
                'id' => 9447,
                'state_id' => 26,
                'name' => 'Paraguaçu Paulista',
            ),
            
            array (
                'id' => 9448,
                'state_id' => 26,
                'name' => 'Paraibuna',
            ),
            
            array (
                'id' => 9449,
                'state_id' => 26,
                'name' => 'Paraíso',
            ),
            
            array (
                'id' => 9452,
                'state_id' => 26,
                'name' => 'Paranapanema',
            ),
            
            array (
                'id' => 9454,
                'state_id' => 26,
                'name' => 'Paranapuã',
            ),
            
            array (
                'id' => 9455,
                'state_id' => 26,
                'name' => 'Parapuã',
            ),
            
            array (
                'id' => 9456,
                'state_id' => 26,
                'name' => 'Pardinho',
            ),
            
            array (
                'id' => 9457,
                'state_id' => 26,
                'name' => 'Pariquera-Açu',
            ),
            
            array (
                'id' => 9458,
                'state_id' => 26,
                'name' => 'Parisi',
            ),
            
            array (
                'id' => 9462,
                'state_id' => 26,
                'name' => 'Patrocínio Paulista',
            ),
            
            array (
                'id' => 9463,
                'state_id' => 26,
                'name' => 'Paulicéia',
            ),
            
            array (
                'id' => 9464,
                'state_id' => 26,
                'name' => 'Paulínia',
            ),
            
            array (
                'id' => 9465,
                'state_id' => 26,
                'name' => 'Paulistânia',
            ),
            
            array (
                'id' => 9466,
                'state_id' => 26,
                'name' => 'Paulo de Faria',
            ),
            
            array (
                'id' => 9468,
                'state_id' => 26,
                'name' => 'Pederneiras',
            ),
            
            array (
                'id' => 9469,
                'state_id' => 26,
                'name' => 'Pedra Bela',
            ),
            
            array (
                'id' => 9471,
                'state_id' => 26,
                'name' => 'Pedranópolis',
            ),
            
            array (
                'id' => 9472,
                'state_id' => 26,
                'name' => 'Pedregulho',
            ),
            
            array (
                'id' => 9473,
                'state_id' => 26,
                'name' => 'Pedreira',
            ),
            
            array (
                'id' => 9474,
                'state_id' => 26,
                'name' => 'Pedrinhas Paulista',
            ),
            
            array (
                'id' => 9476,
                'state_id' => 26,
                'name' => 'Pedro de Toledo',
            ),
            
            array (
                'id' => 9477,
                'state_id' => 26,
                'name' => 'Penápolis',
            ),
            
            array (
                'id' => 9478,
                'state_id' => 26,
                'name' => 'Pereira Barreto',
            ),
            
            array (
                'id' => 9479,
                'state_id' => 26,
                'name' => 'Pereiras',
            ),
            
            array (
                'id' => 9480,
                'state_id' => 26,
                'name' => 'Peruíbe',
            ),
            
            array (
                'id' => 9481,
                'state_id' => 26,
                'name' => 'Piacatu',
            ),
            
            array (
                'id' => 9483,
                'state_id' => 26,
                'name' => 'Piedade',
            ),
            
            array (
                'id' => 9484,
                'state_id' => 26,
                'name' => 'Pilar do Sul',
            ),
            
            array (
                'id' => 9485,
                'state_id' => 26,
                'name' => 'Pindamonhangaba',
            ),
            
            array (
                'id' => 9486,
                'state_id' => 26,
                'name' => 'Pindorama',
            ),
            
            array (
                'id' => 9487,
                'state_id' => 26,
                'name' => 'Pinhalzinho',
            ),
            
            array (
                'id' => 9490,
                'state_id' => 26,
                'name' => 'Piquerobi',
            ),
            
            array (
                'id' => 9491,
                'state_id' => 26,
                'name' => 'Piquete',
            ),
            
            array (
                'id' => 9492,
                'state_id' => 26,
                'name' => 'Piracaia',
            ),
            
            array (
                'id' => 9493,
                'state_id' => 26,
                'name' => 'Piracicaba',
            ),
            
            array (
                'id' => 9494,
                'state_id' => 26,
                'name' => 'Piraju',
            ),
            
            array (
                'id' => 9495,
                'state_id' => 26,
                'name' => 'Pirajuí',
            ),
            
            array (
                'id' => 9497,
                'state_id' => 26,
                'name' => 'Pirangi',
            ),
            
            array (
                'id' => 9499,
                'state_id' => 26,
                'name' => 'Pirapora do Bom Jesus',
            ),
            
            array (
                'id' => 9500,
                'state_id' => 26,
                'name' => 'Pirapozinho',
            ),
            
            array (
                'id' => 9501,
                'state_id' => 26,
                'name' => 'Pirassununga',
            ),
            
            array (
                'id' => 9502,
                'state_id' => 26,
                'name' => 'Piratininga',
            ),
            
            array (
                'id' => 9503,
                'state_id' => 26,
                'name' => 'Pitangueiras',
            ),
            
            array (
                'id' => 9504,
                'state_id' => 26,
                'name' => 'Planalto',
            ),
            
            array (
                'id' => 9507,
                'state_id' => 26,
                'name' => 'Platina',
            ),
            
            array (
                'id' => 9508,
                'state_id' => 26,
                'name' => 'Poá',
            ),
            
            array (
                'id' => 9509,
                'state_id' => 26,
                'name' => 'Poloni',
            ),
            
            array (
                'id' => 9511,
                'state_id' => 26,
                'name' => 'Pompéia',
            ),
            
            array (
                'id' => 9512,
                'state_id' => 26,
                'name' => 'Pongaí',
            ),
            
            array (
                'id' => 9513,
                'state_id' => 26,
                'name' => 'Pontal',
            ),
            
            array (
                'id' => 9514,
                'state_id' => 26,
                'name' => 'Pontalinda',
            ),
            
            array (
                'id' => 9515,
                'state_id' => 26,
                'name' => 'Pontes Gestal',
            ),
            
            array (
                'id' => 9516,
                'state_id' => 26,
                'name' => 'Populina',
            ),
            
            array (
                'id' => 9517,
                'state_id' => 26,
                'name' => 'Porangaba',
            ),
            
            array (
                'id' => 9518,
                'state_id' => 26,
                'name' => 'Porto Feliz',
            ),
            
            array (
                'id' => 9519,
                'state_id' => 26,
                'name' => 'Porto Ferreira',
            ),
            
            array (
                'id' => 9521,
                'state_id' => 26,
                'name' => 'Potim',
            ),
            
            array (
                'id' => 9522,
                'state_id' => 26,
                'name' => 'Potirendaba',
            ),
            
            array (
                'id' => 9524,
                'state_id' => 26,
                'name' => 'Pracinha',
            ),
            
            array (
                'id' => 9526,
                'state_id' => 26,
                'name' => 'Pradópolis',
            ),
            
            array (
                'id' => 9527,
                'state_id' => 26,
                'name' => 'Praia Grande',
            ),
            
            array (
                'id' => 9528,
                'state_id' => 26,
                'name' => 'Pratânia',
            ),
            
            array (
                'id' => 9529,
                'state_id' => 26,
                'name' => 'Presidente Alves',
            ),
            
            array (
                'id' => 9530,
                'state_id' => 26,
                'name' => 'Presidente Bernardes',
            ),
            
            array (
                'id' => 9531,
                'state_id' => 26,
                'name' => 'Presidente Epitácio',
            ),
            
            array (
                'id' => 9532,
                'state_id' => 26,
                'name' => 'Presidente Prudente',
            ),
            
            array (
                'id' => 9533,
                'state_id' => 26,
                'name' => 'Presidente Venceslau',
            ),
            
            array (
                'id' => 9535,
                'state_id' => 26,
                'name' => 'Promissão',
            ),
            
            array (
                'id' => 9537,
                'state_id' => 26,
                'name' => 'Quadra',
            ),
            
            array (
                'id' => 9538,
                'state_id' => 26,
                'name' => 'Quatá',
            ),
            
            array (
                'id' => 9539,
                'state_id' => 26,
                'name' => 'Queiroz',
            ),
            
            array (
                'id' => 9540,
                'state_id' => 26,
                'name' => 'Queluz',
            ),
            
            array (
                'id' => 9541,
                'state_id' => 26,
                'name' => 'Quintana',
            ),
            
            array (
                'id' => 9543,
                'state_id' => 26,
                'name' => 'Rafard',
            ),
            
            array (
                'id' => 9544,
                'state_id' => 26,
                'name' => 'Rancharia',
            ),
            
            array (
                'id' => 9546,
                'state_id' => 26,
                'name' => 'Redenção da Serra',
            ),
            
            array (
                'id' => 9547,
                'state_id' => 26,
                'name' => 'Regente Feijó',
            ),
            
            array (
                'id' => 9548,
                'state_id' => 26,
                'name' => 'Reginópolis',
            ),
            
            array (
                'id' => 9549,
                'state_id' => 26,
                'name' => 'Registro',
            ),
            
            array (
                'id' => 9550,
                'state_id' => 26,
                'name' => 'Restinga',
            ),
            
            array (
                'id' => 9552,
                'state_id' => 26,
                'name' => 'Ribeira',
            ),
            
            array (
                'id' => 9553,
                'state_id' => 26,
                'name' => 'Ribeirão Bonito',
            ),
            
            array (
                'id' => 9554,
                'state_id' => 26,
                'name' => 'Ribeirão Branco',
            ),
            
            array (
                'id' => 9555,
                'state_id' => 26,
                'name' => 'Ribeirão Corrente',
            ),
            
            array (
                'id' => 9556,
                'state_id' => 26,
                'name' => 'Ribeirão do Sul',
            ),
            
            array (
                'id' => 9557,
                'state_id' => 26,
                'name' => 'Ribeirão dos Índios',
            ),
            
            array (
                'id' => 9558,
                'state_id' => 26,
                'name' => 'Ribeirão Grande',
            ),
            
            array (
                'id' => 9559,
                'state_id' => 26,
                'name' => 'Ribeirão Pires',
            ),
            
            array (
                'id' => 9560,
                'state_id' => 26,
                'name' => 'Ribeirão Preto',
            ),
            
            array (
                'id' => 9563,
                'state_id' => 26,
                'name' => 'Rifaina',
            ),
            
            array (
                'id' => 9564,
                'state_id' => 26,
                'name' => 'Rincão',
            ),
            
            array (
                'id' => 9565,
                'state_id' => 26,
                'name' => 'Rinópolis',
            ),
            
            array (
                'id' => 9566,
                'state_id' => 26,
                'name' => 'Rio Claro',
            ),
            
            array (
                'id' => 9567,
                'state_id' => 26,
                'name' => 'Rio das Pedras',
            ),
            
            array (
                'id' => 9568,
                'state_id' => 26,
                'name' => 'Rio Grande da Serra',
            ),
            
            array (
                'id' => 9569,
                'state_id' => 26,
                'name' => 'Riolândia',
            ),
            
            array (
                'id' => 9570,
                'state_id' => 26,
                'name' => 'Riversul',
            ),
            
            array (
                'id' => 9573,
                'state_id' => 26,
                'name' => 'Rosana',
            ),
            
            array (
                'id' => 9574,
                'state_id' => 26,
                'name' => 'Roseira',
            ),
            
            array (
                'id' => 9575,
                'state_id' => 26,
                'name' => 'Rubiácea',
            ),
            
            array (
                'id' => 9577,
                'state_id' => 26,
                'name' => 'Rubinéia',
            ),
            
            array (
                'id' => 9580,
                'state_id' => 26,
                'name' => 'Sabino',
            ),
            
            array (
                'id' => 9581,
                'state_id' => 26,
                'name' => 'Sagres',
            ),
            
            array (
                'id' => 9582,
                'state_id' => 26,
                'name' => 'Sales',
            ),
            
            array (
                'id' => 9583,
                'state_id' => 26,
                'name' => 'Sales Oliveira',
            ),
            
            array (
                'id' => 9584,
                'state_id' => 26,
                'name' => 'Salesópolis',
            ),
            
            array (
                'id' => 9585,
                'state_id' => 26,
                'name' => 'Salmourão',
            ),
            
            array (
                'id' => 9586,
                'state_id' => 26,
                'name' => 'Saltinho',
            ),
            
            array (
                'id' => 9587,
                'state_id' => 26,
                'name' => 'Salto',
            ),
            
            array (
                'id' => 9588,
                'state_id' => 26,
                'name' => 'Salto de Pirapora',
            ),
            
            array (
                'id' => 9590,
                'state_id' => 26,
                'name' => 'Salto Grande',
            ),
            
            array (
                'id' => 9591,
                'state_id' => 26,
                'name' => 'Sandovalina',
            ),
            
            array (
                'id' => 9592,
                'state_id' => 26,
                'name' => 'Santa Adélia',
            ),
            
            array (
                'id' => 9593,
                'state_id' => 26,
                'name' => 'Santa Albertina',
            ),
            
            array (
                'id' => 9595,
                'state_id' => 26,
                'name' => 'Santa Bárbara D\'Oeste',
            ),
            
            array (
                'id' => 9596,
                'state_id' => 26,
                'name' => 'Santa Branca',
            ),
            
            array (
                'id' => 9597,
                'state_id' => 26,
                'name' => 'Santa Clara D\'Oeste',
            ),
            
            array (
                'id' => 9598,
                'state_id' => 26,
                'name' => 'Santa Cruz da Conceição',
            ),
            
            array (
                'id' => 9599,
                'state_id' => 26,
                'name' => 'Santa Cruz da Esperança',
            ),
            
            array (
                'id' => 9601,
                'state_id' => 26,
                'name' => 'Santa Cruz das Palmeiras',
            ),
            
            array (
                'id' => 9602,
                'state_id' => 26,
                'name' => 'Santa Cruz do Rio Pardo',
            ),
            
            array (
                'id' => 9604,
                'state_id' => 26,
                'name' => 'Santa Ernestina',
            ),
            
            array (
                'id' => 9606,
                'state_id' => 26,
                'name' => 'Santa Fé do Sul',
            ),
            
            array (
                'id' => 9607,
                'state_id' => 26,
                'name' => 'Santa Gertrudes',
            ),
            
            array (
                'id' => 9608,
                'state_id' => 26,
                'name' => 'Santa Isabel',
            ),
            
            array (
                'id' => 9610,
                'state_id' => 26,
                'name' => 'Santa Lúcia',
            ),
            
            array (
                'id' => 9612,
                'state_id' => 26,
                'name' => 'Santa Maria da Serra',
            ),
            
            array (
                'id' => 9614,
                'state_id' => 26,
                'name' => 'Santa Mercedes',
            ),
            
            array (
                'id' => 9615,
                'state_id' => 26,
                'name' => 'Santa Rita D\'Oeste',
            ),
            
            array (
                'id' => 9616,
                'state_id' => 26,
                'name' => 'Santa Rita do Passa Quatro',
            ),
            
            array (
                'id' => 9618,
                'state_id' => 26,
                'name' => 'Santa Rosa de Viterbo',
            ),
            
            array (
                'id' => 9619,
                'state_id' => 26,
                'name' => 'Santa Salete',
            ),
            
            array (
                'id' => 9621,
                'state_id' => 26,
                'name' => 'Santana da Ponte Pensa',
            ),
            
            array (
                'id' => 9622,
                'state_id' => 26,
                'name' => 'Santana de Parnaíba',
            ),
            
            array (
                'id' => 9624,
                'state_id' => 26,
                'name' => 'Santo Anastácio',
            ),
            
            array (
                'id' => 9625,
                'state_id' => 26,
                'name' => 'Santo André',
            ),
            
            array (
                'id' => 9626,
                'state_id' => 26,
                'name' => 'Santo Antônio da Alegria',
            ),
            
            array (
                'id' => 9628,
                'state_id' => 26,
                'name' => 'Santo Antônio de Posse',
            ),
            
            array (
                'id' => 9629,
                'state_id' => 26,
                'name' => 'Santo Antônio do Aracanguá',
            ),
            
            array (
                'id' => 9630,
                'state_id' => 26,
                'name' => 'Santo Antônio do Jardim',
            ),
            
            array (
                'id' => 9632,
                'state_id' => 26,
                'name' => 'Santo Antônio do Pinhal',
            ),
            
            array (
                'id' => 9634,
                'state_id' => 26,
                'name' => 'Santo Expedito',
            ),
            
            array (
                'id' => 9635,
                'state_id' => 26,
                'name' => 'Santópolis do Aguapeí',
            ),
            
            array (
                'id' => 9636,
                'state_id' => 26,
                'name' => 'Santos',
            ),
            
            array (
                'id' => 9639,
                'state_id' => 26,
                'name' => 'São Bento do Sapucaí',
            ),
            
            array (
                'id' => 9640,
                'state_id' => 26,
                'name' => 'São Bernardo do Campo',
            ),
            
            array (
                'id' => 9642,
                'state_id' => 26,
                'name' => 'São Caetano do Sul',
            ),
            
            array (
                'id' => 9643,
                'state_id' => 26,
                'name' => 'São Carlos',
            ),
            
            array (
                'id' => 9644,
                'state_id' => 26,
                'name' => 'São Francisco',
            ),
            
            array (
                'id' => 9647,
                'state_id' => 26,
                'name' => 'São João da Boa Vista',
            ),
            
            array (
                'id' => 9648,
                'state_id' => 26,
                'name' => 'São João das Duas Pontes',
            ),
            
            array (
                'id' => 9649,
                'state_id' => 26,
                'name' => 'São João de Iracema',
            ),
            
            array (
                'id' => 9652,
                'state_id' => 26,
                'name' => 'São João do Pau d\'Alho',
            ),
            
            array (
                'id' => 9654,
                'state_id' => 26,
                'name' => 'São Joaquim da Barra',
            ),
            
            array (
                'id' => 9655,
                'state_id' => 26,
                'name' => 'São José da Bela Vista',
            ),
            
            array (
                'id' => 9657,
                'state_id' => 26,
                'name' => 'São José do Barreiro',
            ),
            
            array (
                'id' => 9658,
                'state_id' => 26,
                'name' => 'São José do Rio Pardo',
            ),
            
            array (
                'id' => 9659,
                'state_id' => 26,
                'name' => 'São José do Rio Preto',
            ),
            
            array (
                'id' => 9660,
                'state_id' => 26,
                'name' => 'São José dos Campos',
            ),
            
            array (
                'id' => 9661,
                'state_id' => 26,
                'name' => 'São Lourenço da Serra',
            ),
            
            array (
                'id' => 9663,
                'state_id' => 26,
                'name' => 'São Luiz do Paraitinga',
            ),
            
            array (
                'id' => 9665,
                'state_id' => 26,
                'name' => 'São Manuel',
            ),
            
            array (
                'id' => 9667,
                'state_id' => 26,
                'name' => 'São Miguel Arcanjo',
            ),
            
            array (
                'id' => 9668,
                'state_id' => 26,
                'name' => 'São Paulo',
            ),
            
            array (
                'id' => 9669,
                'state_id' => 26,
                'name' => 'São Pedro',
            ),
            
            array (
                'id' => 9670,
                'state_id' => 26,
                'name' => 'São Pedro do Turvo',
            ),
            
            array (
                'id' => 9671,
                'state_id' => 26,
                'name' => 'São Roque',
            ),
            
            array (
                'id' => 9673,
                'state_id' => 26,
                'name' => 'São Sebastião',
            ),
            
            array (
                'id' => 9674,
                'state_id' => 26,
                'name' => 'São Sebastião da Grama',
            ),
            
            array (
                'id' => 9677,
                'state_id' => 26,
                'name' => 'São Simão',
            ),
            
            array (
                'id' => 9678,
                'state_id' => 26,
                'name' => 'São Vicente',
            ),
            
            array (
                'id' => 9680,
                'state_id' => 26,
                'name' => 'Sarapuí',
            ),
            
            array (
                'id' => 9681,
                'state_id' => 26,
                'name' => 'Sarutaiá',
            ),
            
            array (
                'id' => 9682,
                'state_id' => 26,
                'name' => 'Sebastianópolis do Sul',
            ),
            
            array (
                'id' => 9683,
                'state_id' => 26,
                'name' => 'Serra Azul',
            ),
            
            array (
                'id' => 9684,
                'state_id' => 26,
                'name' => 'Serra Negra',
            ),
            
            array (
                'id' => 9685,
                'state_id' => 26,
                'name' => 'Serrana',
            ),
            
            array (
                'id' => 9686,
                'state_id' => 26,
                'name' => 'Sertãozinho',
            ),
            
            array (
                'id' => 9687,
                'state_id' => 26,
                'name' => 'Sete Barras',
            ),
            
            array (
                'id' => 9688,
                'state_id' => 26,
                'name' => 'Severínia',
            ),
            
            array (
                'id' => 9690,
                'state_id' => 26,
                'name' => 'Silveiras',
            ),
            
            array (
                'id' => 9693,
                'state_id' => 26,
                'name' => 'Socorro',
            ),
            
            array (
                'id' => 9696,
                'state_id' => 26,
                'name' => 'Sorocaba',
            ),
            
            array (
                'id' => 9698,
                'state_id' => 26,
                'name' => 'Sud Mennucci',
            ),
            
            array (
                'id' => 9700,
                'state_id' => 26,
                'name' => 'Sumaré',
            ),
            
            array (
                'id' => 9702,
                'state_id' => 26,
                'name' => 'Suzanápolis',
            ),
            
            array (
                'id' => 9703,
                'state_id' => 26,
                'name' => 'Suzano',
            ),
            
            array (
                'id' => 9705,
                'state_id' => 26,
                'name' => 'Tabapuã',
            ),
            
            array (
                'id' => 9706,
                'state_id' => 26,
                'name' => 'Tabatinga',
            ),
            
            array (
                'id' => 9707,
                'state_id' => 26,
                'name' => 'Taboão da Serra',
            ),
            
            array (
                'id' => 9708,
                'state_id' => 26,
                'name' => 'Taciba',
            ),
            
            array (
                'id' => 9709,
                'state_id' => 26,
                'name' => 'Taguaí',
            ),
            
            array (
                'id' => 9710,
                'state_id' => 26,
                'name' => 'Taiaçu',
            ),
            
            array (
                'id' => 9712,
                'state_id' => 26,
                'name' => 'Taiúva',
            ),
            
            array (
                'id' => 9714,
                'state_id' => 26,
                'name' => 'Tambaú',
            ),
            
            array (
                'id' => 9715,
                'state_id' => 26,
                'name' => 'Tanabi',
            ),
            
            array (
                'id' => 9717,
                'state_id' => 26,
                'name' => 'Tapiraí',
            ),
            
            array (
                'id' => 9718,
                'state_id' => 26,
                'name' => 'Tapiratiba',
            ),
            
            array (
                'id' => 9719,
                'state_id' => 26,
                'name' => 'Taquaral',
            ),
            
            array (
                'id' => 9720,
                'state_id' => 26,
                'name' => 'Taquaritinga',
            ),
            
            array (
                'id' => 9721,
                'state_id' => 26,
                'name' => 'Taquarituba',
            ),
            
            array (
                'id' => 9722,
                'state_id' => 26,
                'name' => 'Taquarivaí',
            ),
            
            array (
                'id' => 9723,
                'state_id' => 26,
                'name' => 'Tarabai',
            ),
            
            array (
                'id' => 9724,
                'state_id' => 26,
                'name' => 'Tarumã',
            ),
            
            array (
                'id' => 9725,
                'state_id' => 26,
                'name' => 'Tatuí',
            ),
            
            array (
                'id' => 9726,
                'state_id' => 26,
                'name' => 'Taubaté',
            ),
            
            array (
                'id' => 9728,
                'state_id' => 26,
                'name' => 'Tejupá',
            ),
            
            array (
                'id' => 9729,
                'state_id' => 26,
                'name' => 'Teodoro Sampaio',
            ),
            
            array (
                'id' => 9732,
                'state_id' => 26,
                'name' => 'Terra Roxa',
            ),
            
            array (
                'id' => 9735,
                'state_id' => 26,
                'name' => 'Tietê',
            ),
            
            array (
                'id' => 9736,
                'state_id' => 26,
                'name' => 'Timburi',
            ),
            
            array (
                'id' => 9738,
                'state_id' => 26,
                'name' => 'Torre de Pedra',
            ),
            
            array (
                'id' => 9739,
                'state_id' => 26,
                'name' => 'Torrinha',
            ),
            
            array (
                'id' => 9740,
                'state_id' => 26,
                'name' => 'Trabiju',
            ),
            
            array (
                'id' => 9741,
                'state_id' => 26,
                'name' => 'Tremembé',
            ),
            
            array (
                'id' => 9743,
                'state_id' => 26,
                'name' => 'Três Fronteiras',
            ),
            
            array (
                'id' => 9746,
                'state_id' => 26,
                'name' => 'Tuiuti',
            ),
            
            array (
                'id' => 9748,
                'state_id' => 26,
                'name' => 'Tupã',
            ),
            
            array (
                'id' => 9750,
                'state_id' => 26,
                'name' => 'Tupi Paulista',
            ),
            
            array (
                'id' => 9752,
                'state_id' => 26,
                'name' => 'Turiúba',
            ),
            
            array (
                'id' => 9753,
                'state_id' => 26,
                'name' => 'Turmalina',
            ),
            
            array (
                'id' => 9755,
                'state_id' => 26,
                'name' => 'Ubarana',
            ),
            
            array (
                'id' => 9756,
                'state_id' => 26,
                'name' => 'Ubatuba',
            ),
            
            array (
                'id' => 9757,
                'state_id' => 26,
                'name' => 'Ubirajara',
            ),
            
            array (
                'id' => 9758,
                'state_id' => 26,
                'name' => 'Uchoa',
            ),
            
            array (
                'id' => 9759,
                'state_id' => 26,
                'name' => 'União Paulista',
            ),
            
            array (
                'id' => 9761,
                'state_id' => 26,
                'name' => 'Urânia',
            ),
            
            array (
                'id' => 9762,
                'state_id' => 26,
                'name' => 'Uru',
            ),
            
            array (
                'id' => 9763,
                'state_id' => 26,
                'name' => 'Urupês',
            ),
            
            array (
                'id' => 9767,
                'state_id' => 26,
                'name' => 'Valentim Gentil',
            ),
            
            array (
                'id' => 9768,
                'state_id' => 26,
                'name' => 'Valinhos',
            ),
            
            array (
                'id' => 9769,
                'state_id' => 26,
                'name' => 'Valparaíso',
            ),
            
            array (
                'id' => 9771,
                'state_id' => 26,
                'name' => 'Vargem',
            ),
            
            array (
                'id' => 9772,
                'state_id' => 26,
                'name' => 'Vargem Grande do Sul',
            ),
            
            array (
                'id' => 9773,
                'state_id' => 26,
                'name' => 'Vargem Grande Paulista',
            ),
            
            array (
                'id' => 9775,
                'state_id' => 26,
                'name' => 'Várzea Paulista',
            ),
            
            array (
                'id' => 9777,
                'state_id' => 26,
                'name' => 'Vera Cruz',
            ),
            
            array (
                'id' => 9783,
                'state_id' => 26,
                'name' => 'Vinhedo',
            ),
            
            array (
                'id' => 9784,
                'state_id' => 26,
                'name' => 'Viradouro',
            ),
            
            array (
                'id' => 9785,
                'state_id' => 26,
                'name' => 'Vista Alegre do Alto',
            ),
            
            array (
                'id' => 9786,
                'state_id' => 26,
                'name' => 'Vitória Brasil',
            ),
            
            array (
                'id' => 9788,
                'state_id' => 26,
                'name' => 'Votorantim',
            ),
            
            array (
                'id' => 9789,
                'state_id' => 26,
                'name' => 'Votuporanga',
            ),
            
            array (
                'id' => 9790,
                'state_id' => 26,
                'name' => 'Zacarias',
            ),
            
            array (
                'id' => 9791,
                'state_id' => 27,
                'name' => 'Abreulândia',
            ),
            
            array (
                'id' => 9792,
                'state_id' => 27,
                'name' => 'Aguiarnópolis',
            ),
            
            array (
                'id' => 9793,
                'state_id' => 27,
                'name' => 'Aliança do Tocantins',
            ),
            
            array (
                'id' => 9794,
                'state_id' => 27,
                'name' => 'Almas',
            ),
            
            array (
                'id' => 9795,
                'state_id' => 27,
                'name' => 'Alvorada',
            ),
            
            array (
                'id' => 9797,
                'state_id' => 27,
                'name' => 'Ananás',
            ),
            
            array (
                'id' => 9798,
                'state_id' => 27,
                'name' => 'Angico',
            ),
            
            array (
                'id' => 9799,
                'state_id' => 27,
                'name' => 'Aparecida do Rio Negro',
            ),
            
            array (
                'id' => 9802,
                'state_id' => 27,
                'name' => 'Aragominas',
            ),
            
            array (
                'id' => 9803,
                'state_id' => 27,
                'name' => 'Araguacema',
            ),
            
            array (
                'id' => 9804,
                'state_id' => 27,
                'name' => 'Araguaçu',
            ),
            
            array (
                'id' => 9805,
                'state_id' => 27,
                'name' => 'Araguaína',
            ),
            
            array (
                'id' => 9806,
                'state_id' => 27,
                'name' => 'Araguanã',
            ),
            
            array (
                'id' => 9807,
                'state_id' => 27,
                'name' => 'Araguatins',
            ),
            
            array (
                'id' => 9808,
                'state_id' => 27,
                'name' => 'Arapoema',
            ),
            
            array (
                'id' => 9809,
                'state_id' => 27,
                'name' => 'Arraias',
            ),
            
            array (
                'id' => 9810,
                'state_id' => 27,
                'name' => 'Augustinópolis',
            ),
            
            array (
                'id' => 9811,
                'state_id' => 27,
                'name' => 'Aurora do Tocantins',
            ),
            
            array (
                'id' => 9812,
                'state_id' => 27,
                'name' => 'Axixá do Tocantins',
            ),
            
            array (
                'id' => 9813,
                'state_id' => 27,
                'name' => 'Babaçulândia',
            ),
            
            array (
                'id' => 9814,
                'state_id' => 27,
                'name' => 'Bandeirantes do Tocantins',
            ),
            
            array (
                'id' => 9816,
                'state_id' => 27,
                'name' => 'Barra do Ouro',
            ),
            
            array (
                'id' => 9817,
                'state_id' => 27,
                'name' => 'Barrolândia',
            ),
            
            array (
                'id' => 9818,
                'state_id' => 27,
                'name' => 'Bernardo Sayão',
            ),
            
            array (
                'id' => 9819,
                'state_id' => 27,
                'name' => 'Bom Jesus do Tocantins',
            ),
            
            array (
                'id' => 9821,
                'state_id' => 27,
                'name' => 'Brasilândia do Tocantins',
            ),
            
            array (
                'id' => 9822,
                'state_id' => 27,
                'name' => 'Brejinho de Nazaré',
            ),
            
            array (
                'id' => 9823,
                'state_id' => 27,
                'name' => 'Buriti do Tocantins',
            ),
            
            array (
                'id' => 9824,
                'state_id' => 27,
                'name' => 'Cachoeirinha',
            ),
            
            array (
                'id' => 9825,
                'state_id' => 27,
                'name' => 'Campos Lindos',
            ),
            
            array (
                'id' => 9827,
                'state_id' => 27,
                'name' => 'Cariri do Tocantins',
            ),
            
            array (
                'id' => 9828,
                'state_id' => 27,
                'name' => 'Carmolândia',
            ),
            
            array (
                'id' => 9829,
                'state_id' => 27,
                'name' => 'Carrasco Bonito',
            ),
            
            array (
                'id' => 9831,
                'state_id' => 27,
                'name' => 'Caseara',
            ),
            
            array (
                'id' => 9832,
                'state_id' => 27,
                'name' => 'Centenário',
            ),
            
            array (
                'id' => 9833,
                'state_id' => 27,
                'name' => 'Chapada de Areia',
            ),
            
            array (
                'id' => 9834,
                'state_id' => 27,
                'name' => 'Chapada da Natividade',
            ),
            
            array (
                'id' => 9837,
                'state_id' => 27,
                'name' => 'Colinas do Tocantins',
            ),
            
            array (
                'id' => 9838,
                'state_id' => 27,
                'name' => 'Colméia',
            ),
            
            array (
                'id' => 9839,
                'state_id' => 27,
                'name' => 'Combinado',
            ),
            
            array (
                'id' => 9840,
                'state_id' => 27,
                'name' => 'Conceição do Tocantins',
            ),
            
            array (
                'id' => 9842,
                'state_id' => 27,
                'name' => 'Couto de Magalhães',
            ),
            
            array (
                'id' => 9844,
                'state_id' => 27,
                'name' => 'Cristalândia',
            ),
            
            array (
                'id' => 9846,
                'state_id' => 27,
                'name' => 'Crixás do Tocantins',
            ),
            
            array (
                'id' => 9847,
                'state_id' => 27,
                'name' => 'Darcinópolis',
            ),
            
            array (
                'id' => 9848,
                'state_id' => 27,
                'name' => 'Dianópolis',
            ),
            
            array (
                'id' => 9849,
                'state_id' => 27,
                'name' => 'Divinópolis do Tocantins',
            ),
            
            array (
                'id' => 9850,
                'state_id' => 27,
                'name' => 'Dois Irmãos do Tocantins',
            ),
            
            array (
                'id' => 9851,
                'state_id' => 27,
                'name' => 'Duerê',
            ),
            
            array (
                'id' => 9853,
                'state_id' => 27,
                'name' => 'Esperantina',
            ),
            
            array (
                'id' => 9854,
                'state_id' => 27,
                'name' => 'Fátima',
            ),
            
            array (
                'id' => 9855,
                'state_id' => 27,
                'name' => 'Figueirópolis',
            ),
            
            array (
                'id' => 9856,
                'state_id' => 27,
                'name' => 'Filadélfia',
            ),
            
            array (
                'id' => 9857,
                'state_id' => 27,
                'name' => 'Formoso do Araguaia',
            ),
            
            array (
                'id' => 9858,
                'state_id' => 27,
                'name' => 'Fortaleza do Tabocão',
            ),
            
            array (
                'id' => 9859,
                'state_id' => 27,
                'name' => 'Goianorte',
            ),
            
            array (
                'id' => 9860,
                'state_id' => 27,
                'name' => 'Goiatins',
            ),
            
            array (
                'id' => 9861,
                'state_id' => 27,
                'name' => 'Guaraí',
            ),
            
            array (
                'id' => 9862,
                'state_id' => 27,
                'name' => 'Gurupi',
            ),
            
            array (
                'id' => 9864,
                'state_id' => 27,
                'name' => 'Ipueiras',
            ),
            
            array (
                'id' => 9865,
                'state_id' => 27,
                'name' => 'Itacajá',
            ),
            
            array (
                'id' => 9866,
                'state_id' => 27,
                'name' => 'Itaguatins',
            ),
            
            array (
                'id' => 9867,
                'state_id' => 27,
                'name' => 'Itapiratins',
            ),
            
            array (
                'id' => 9868,
                'state_id' => 27,
                'name' => 'Itaporã do Tocantins',
            ),
            
            array (
                'id' => 9869,
                'state_id' => 27,
                'name' => 'Jaú do Tocantins',
            ),
            
            array (
                'id' => 9870,
                'state_id' => 27,
                'name' => 'Juarina',
            ),
            
            array (
                'id' => 9872,
                'state_id' => 27,
                'name' => 'Lagoa da Confusão',
            ),
            
            array (
                'id' => 9873,
                'state_id' => 27,
                'name' => 'Lagoa do Tocantins',
            ),
            
            array (
                'id' => 9874,
                'state_id' => 27,
                'name' => 'Lajeado',
            ),
            
            array (
                'id' => 9875,
                'state_id' => 27,
                'name' => 'Lavandeira',
            ),
            
            array (
                'id' => 9876,
                'state_id' => 27,
                'name' => 'Lizarda',
            ),
            
            array (
                'id' => 9877,
                'state_id' => 27,
                'name' => 'Luzinópolis',
            ),
            
            array (
                'id' => 9878,
                'state_id' => 27,
                'name' => 'Marianópolis do Tocantins',
            ),
            
            array (
                'id' => 9879,
                'state_id' => 27,
                'name' => 'Mateiros',
            ),
            
            array (
                'id' => 9880,
                'state_id' => 27,
                'name' => 'Maurilândia do Tocantins',
            ),
            
            array (
                'id' => 9881,
                'state_id' => 27,
                'name' => 'Miracema do Tocantins',
            ),
            
            array (
                'id' => 9883,
                'state_id' => 27,
                'name' => 'Miranorte',
            ),
            
            array (
                'id' => 9884,
                'state_id' => 27,
                'name' => 'Monte do Carmo',
            ),
            
            array (
                'id' => 9886,
                'state_id' => 27,
                'name' => 'Monte Santo do Tocantins',
            ),
            
            array (
                'id' => 9887,
                'state_id' => 27,
                'name' => 'Palmeiras do Tocantins',
            ),
            
            array (
                'id' => 9888,
                'state_id' => 27,
                'name' => 'Muricilândia',
            ),
            
            array (
                'id' => 9890,
                'state_id' => 27,
                'name' => 'Natividade',
            ),
            
            array (
                'id' => 9891,
                'state_id' => 27,
                'name' => 'Nazaré',
            ),
            
            array (
                'id' => 9892,
                'state_id' => 27,
                'name' => 'Nova Olinda',
            ),
            
            array (
                'id' => 9893,
                'state_id' => 27,
                'name' => 'Nova Rosalândia',
            ),
            
            array (
                'id' => 9894,
                'state_id' => 27,
                'name' => 'Novo Acordo',
            ),
            
            array (
                'id' => 9895,
                'state_id' => 27,
                'name' => 'Novo Alegre',
            ),
            
            array (
                'id' => 9897,
                'state_id' => 27,
                'name' => 'Novo Jardim',
            ),
            
            array (
                'id' => 9898,
                'state_id' => 27,
                'name' => 'Oliveira de Fátima',
            ),
            
            array (
                'id' => 9899,
                'state_id' => 27,
                'name' => 'Palmas',
            ),
            
            array (
                'id' => 9900,
                'state_id' => 27,
                'name' => 'Palmeirante',
            ),
            
            array (
                'id' => 9901,
                'state_id' => 27,
                'name' => 'Palmeirópolis',
            ),
            
            array (
                'id' => 9902,
                'state_id' => 27,
                'name' => 'Paraíso do Tocantins',
            ),
            
            array (
                'id' => 9903,
                'state_id' => 27,
                'name' => 'Paranã',
            ),
            
            array (
                'id' => 9904,
                'state_id' => 27,
                'name' => 'Pau D\'Arco',
            ),
            
            array (
                'id' => 9906,
                'state_id' => 27,
                'name' => 'Pedro Afonso',
            ),
            
            array (
                'id' => 9908,
                'state_id' => 27,
                'name' => 'Peixe',
            ),
            
            array (
                'id' => 9910,
                'state_id' => 27,
                'name' => 'Pequizeiro',
            ),
            
            array (
                'id' => 9912,
                'state_id' => 27,
                'name' => 'Pindorama do Tocantins',
            ),
            
            array (
                'id' => 9913,
                'state_id' => 27,
                'name' => 'Piraquê',
            ),
            
            array (
                'id' => 9914,
                'state_id' => 27,
                'name' => 'Pium',
            ),
            
            array (
                'id' => 9915,
                'state_id' => 27,
                'name' => 'Ponte Alta do Bom Jesus',
            ),
            
            array (
                'id' => 9916,
                'state_id' => 27,
                'name' => 'Ponte Alta do Tocantins',
            ),
            
            array (
                'id' => 9919,
                'state_id' => 27,
                'name' => 'Porto Alegre do Tocantins',
            ),
            
            array (
                'id' => 9921,
                'state_id' => 27,
                'name' => 'Porto Nacional',
            ),
            
            array (
                'id' => 9922,
                'state_id' => 27,
                'name' => 'Praia Norte',
            ),
            
            array (
                'id' => 9923,
                'state_id' => 27,
                'name' => 'Presidente Kennedy',
            ),
            
            array (
                'id' => 9925,
                'state_id' => 27,
                'name' => 'Pugmil',
            ),
            
            array (
                'id' => 9926,
                'state_id' => 27,
                'name' => 'Recursolândia',
            ),
            
            array (
                'id' => 9927,
                'state_id' => 27,
                'name' => 'Riachinho',
            ),
            
            array (
                'id' => 9928,
                'state_id' => 27,
                'name' => 'Rio da Conceição',
            ),
            
            array (
                'id' => 9929,
                'state_id' => 27,
                'name' => 'Rio dos Bois',
            ),
            
            array (
                'id' => 9930,
                'state_id' => 27,
                'name' => 'Rio Sono',
            ),
            
            array (
                'id' => 9931,
                'state_id' => 27,
                'name' => 'Sampaio',
            ),
            
            array (
                'id' => 9932,
                'state_id' => 27,
                'name' => 'Sandolândia',
            ),
            
            array (
                'id' => 9933,
                'state_id' => 27,
                'name' => 'Santa Fé do Araguaia',
            ),
            
            array (
                'id' => 9934,
                'state_id' => 27,
                'name' => 'Santa Maria do Tocantins',
            ),
            
            array (
                'id' => 9935,
                'state_id' => 27,
                'name' => 'Santa Rita do Tocantins',
            ),
            
            array (
                'id' => 9936,
                'state_id' => 27,
                'name' => 'Santa Rosa do Tocantins',
            ),
            
            array (
                'id' => 9937,
                'state_id' => 27,
                'name' => 'Santa Tereza do Tocantins',
            ),
            
            array (
                'id' => 9938,
                'state_id' => 27,
                'name' => 'Santa Terezinha do Tocantins',
            ),
            
            array (
                'id' => 9939,
                'state_id' => 27,
                'name' => 'São Bento do Tocantins',
            ),
            
            array (
                'id' => 9940,
                'state_id' => 27,
                'name' => 'São Félix do Tocantins',
            ),
            
            array (
                'id' => 9941,
                'state_id' => 27,
                'name' => 'São Miguel do Tocantins',
            ),
            
            array (
                'id' => 9942,
                'state_id' => 27,
                'name' => 'São Salvador do Tocantins',
            ),
            
            array (
                'id' => 9943,
                'state_id' => 27,
                'name' => 'São Sebastião do Tocantins',
            ),
            
            array (
                'id' => 9944,
                'state_id' => 27,
                'name' => 'São Valério da Natividade',
            ),
            
            array (
                'id' => 9945,
                'state_id' => 27,
                'name' => 'Silvanópolis',
            ),
            
            array (
                'id' => 9946,
                'state_id' => 27,
                'name' => 'Sítio Novo do Tocantins',
            ),
            
            array (
                'id' => 9947,
                'state_id' => 27,
                'name' => 'Sucupira',
            ),
            
            array (
                'id' => 9948,
                'state_id' => 27,
                'name' => 'Taguatinga',
            ),
            
            array (
                'id' => 9949,
                'state_id' => 27,
                'name' => 'Taipas do Tocantins',
            ),
            
            array (
                'id' => 9950,
                'state_id' => 27,
                'name' => 'Talismã',
            ),
            
            array (
                'id' => 9954,
                'state_id' => 27,
                'name' => 'Tocantínia',
            ),
            
            array (
                'id' => 9955,
                'state_id' => 27,
                'name' => 'Tocantinópolis',
            ),
            
            array (
                'id' => 9956,
                'state_id' => 27,
                'name' => 'Tupirama',
            ),
            
            array (
                'id' => 9958,
                'state_id' => 27,
                'name' => 'Tupiratins',
            ),
            
            array (
                'id' => 9960,
                'state_id' => 27,
                'name' => 'Wanderlândia',
            ),
            
            array (
                'id' => 9961,
                'state_id' => 27,
                'name' => 'Xambioá',
            ),
            
            array (
                'id' => 10089,
                'state_id' => 2,
                'name' => 'Jequiá da Praia',
            ),
            
            array (
                'id' => 10090,
                'state_id' => 9,
                'name' => 'Ipiranga de Goiás',
            ),
            
            array (
                'id' => 10091,
                'state_id' => 13,
                'name' => 'Conquista D\'Oeste',
            ),
            
            array (
                'id' => 10092,
                'state_id' => 13,
                'name' => 'Colniza',
            ),
            
            array (
                'id' => 10093,
                'state_id' => 13,
                'name' => 'Rondolândia',
            ),
            
            array (
                'id' => 10094,
                'state_id' => 13,
                'name' => 'Santa Rita do Trivelato',
            ),
            
            array (
                'id' => 10095,
                'state_id' => 13,
                'name' => 'Nova Santa Helena',
            ),
            
            array (
                'id' => 10096,
                'state_id' => 13,
                'name' => 'Santo Antônio do Leste',
            ),
            
            array (
                'id' => 10097,
                'state_id' => 13,
                'name' => 'Nova Nazaré',
            ),
            
            array (
                'id' => 10098,
                'state_id' => 13,
                'name' => 'Santa Cruz do Xingu',
            ),
            
            array (
                'id' => 10099,
                'state_id' => 13,
                'name' => 'Bom Jesus do Araguaia',
            ),
            
            array (
                'id' => 10100,
                'state_id' => 17,
                'name' => 'Pau D\'Arco do Piauí',
            ),
            
            array (
                'id' => 10101,
                'state_id' => 23,
                'name' => 'Westfalia',
            ),
            
            array (
                'id' => 10102,
                'state_id' => 23,
                'name' => 'Santa Margarida do Sul',
            ),
            
            array (
                'id' => 10103,
                'state_id' => 23,
                'name' => 'Tio Hugo',
            ),
            
            array (
                'id' => 10144,
                'state_id' => 9,
                'name' => 'Rialma',
            ),
            
            array (
                'id' => 11019,
                'state_id' => 17,
                'name' => 'Aroeiras do Itaim',
            ),
            
            array (
                'id' => 11020,
                'state_id' => 13,
                'name' => 'Ipiranga do Norte',
            ),
            
            array (
                'id' => 11021,
                'state_id' => 13,
                'name' => 'Itanhangá',
            ),
            
            array (
                'id' => 11323,
                'state_id' => 4,
                'name' => 'Serra do Navio',
            ),
            
            array (
                'id' => 11896,
                'state_id' => 17,
                'name' => 'Nazária',
            ),
        ));
        
        
    }
}