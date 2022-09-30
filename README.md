# Laravel 8 Boilerplate

> Basic site boilerplate start.
> Version 0.0.4

## Install

Clear compose cache (if needs)

```bash
composer clearcache
```

Install Site Package

```bash
composer create-project marceloxp/laravel8 www --no-interaction -s dev
```

### File `.env` configuration

> Configure .env database config and run migration

```bash
php artisan migrate:refresh --seed
```

## Framework

- Laravel 8.x: <https://laravel.com/docs/8.x>

### Server Requirements

- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension

### Dev URL

> <http://local.laravel8.com.br>

## Plugins

| Plugin                           | Address                                          |
| -------------------------------- | ----------------------------------------------   |
| digitalnature/php-ref            | <https://github.com/digitalnature/php-ref>       |
| barryvdh/laravel-debugbar        | <https://github.com/barryvdh/laravel-debugbar>   |
| barryvdh/laravel-ide-helper      | <https://github.com/barryvdh/laravel-ide-helper> |
| ezyang/htmlpurifier              | <https://github.com/ezyang/htmlpurifier>         |
| summernote/summernote            | <https://github.com/summernote/summernote>       |
| technoknol/log-my-queries        | <https://github.com/technoknol/LogMyQueries>     |
| semver/semver                    | <https://github.com/semver/semver>               |
| cknow/laravel-money              | <https://github.com/cknow/laravel-money>         |

## Libraries

| Local  | Library                  | Site                                           | Description                          |
| ------ | ------------------------ | ---------------------------------------------- | ------------------------------------ |
| Global | cjsbaseclass.js          | <https://www.npmjs.com/package/cjsbaseclass>   | Base JS class                        |
| Admin  | jquery.SimpleMask.min.js | <https://github.com/DevUtils/jQuerySimpleMask> | Jquery SimpleMask                    |
| Admin  | prism.js                 | <http://prismjs.com>                           | Syntax highlighter                   |

## Admin Template

> AdminLTE: <https://adminlte.io/themes/v3/>

## Laravel components

<https://laravel.com/docs/8.x/blade#rendering-components>

## Admin Components

### Forms

```blade
<form action="{{ route('adminConfigStore') }}" method="POST">
	@csrf
	<div class="card-body">
		<x-admin-form-model :register="$register">
			{{-- Add ID register field --}}
			<x-admin-form-model.id/>
			
			{{-- Add name register field --}}
			<x-admin-form-model.text name="name"/>
			
			{{-- Add Active/Inactive status register field --}}
			<x-admin-form-model.active name="status"/>
			
			{{-- Add mask date register field --}}
			<x-admin-form-model.mask type="data" name="date"/>

			{{-- Add mask cep register field --}}
			<x-admin-form-model.mask type="cep" name="cep"/>

			{{-- Add mask ddd phone register field --}}
			<x-admin-form-model.mask type="ddd-tel9" name="dddphone"/>

			{{-- Add mask phone register field --}}
			<x-admin-form-model.mask type="tel9" name="phone"/>

			{{-- Add mask cpf register field --}}
			<x-admin-form-model.mask type="cpf" name="cpf"/>

			{{-- Add mask cnpj register field --}}
			<x-admin-form-model.mask type="cnpj" name="cnpj"/>
		</x-admin-form-model>

		{{-- Add Save and Cancel buttons --}}
		<x-admin-form-model.buttons/>
	</div>
</form>
```

### Index list table

```blade
<!-- add component config pagination links -->
<x-admin-pagination-links :table="$table" />
```

### Each button Edit and Delete on list table

```blade
<x-admin-table :register="$register">
	<!-- admin button component edit with icon -->
	<x-admin-table.action-edit/>

	<!-- x-admin button delete -->
	<x-admin-table.action-delete/>
</x-admin-table>
```

### Console Commands

```sh
makex:crud ModelName
```

## Custom Classes

### Datasite `App\Utilities\Datasite`

```php
Datasite::add('csrf_token', csrf_token());
Datasite::add(compact('url'));
```

### Cached `App\Utilities\Cached`

```php
// Time in minutes
Cached::get('brasil', 'states', $states, 10);
Cached::get('brasil', 'regions', $regions, 10);
$result = Cached::get
(
	'group_name',
	['name_1', 'name_2'],
	function() use ($args)
	{
		return \App\Models\Category::get()->first();
	},
	5
);
Cached::forget('admin', 'states');
Cached::forget('admin'); // Clear all files on admin prefix
Cached::flush();         // Clear all cache
```

### MetaSocial `App\Utilities\MetaSocial`

```php
MetaSocial::use('sobre');
MetaSocial::append('title', ' - Fale Conosco');
MetaSocial::set('description', 'Entre em contato conosco.');
MetaSocial::print();
```

### HttpCurl `App\Utilities\HttpCurl`

```php
$json_data = HttpCurl::json('https://viacep.com.br/ws/05415030/json/');
```

### Cep `App\Utilities\Cep`

```php
$address = Cep::get('04045-004');       // Returns Adddress
$valid   = Cep::valid('04045-004');     // Returns true
$valid   = Cep::valid('5');             // Returns false
$masket  = Cep::mask('4045004');        // Returns '04045-004'
$masket  = Cep::toNumeric('04045-004'); // Returns 4045004
```

### Result `App\Utilities\Result`

```php
return Result::success('Dados cadastrados com sucesso.');
return Result::success('Dados cadastrados com sucesso.', ['id': 396]);
return Result::error('Ocorreu um erro na gravação do registro');
return Result::cached('', { 'id': 1, 'uf': 'sp' });
return Result::undefined();   // Ocorreu um erro na solicitação.
return Result::invalid();     // Entrada de dados inválida.
return Result::exception($e); // Ocorreu um erro na solicitação.
```

### RouteLang `App\Utilities\RouteLang`

> Used in `/routes/multilanguague.php`

```php
RouteLang::lang();                    // returns current language, string empty if is default language (pt-br). Ex.: ''
RouteLang::lang('pt-br');             // returns current language, string empty if is default language. Ex.: ''
RouteLang::lang('en');                // returns current language, string empty if is default language. Ex.: 'en'
RouteLang::root();                    // returns current site root language
RouteLang::rootUrl();                 // returns current site full root url language
RouteLang::rootUrl('en');             // returns full root url to language [enb]
RouteLang::prefix('/sobre');          // Translate prefix to current language
RouteLang::route($route, '/empresa'); // Translate url route to current language
RouteLang::getDefaultLocale();        // Returns app default locale config
RouteLang::getCurrentLocale();        // Returns app current locale config (dynamic)
```

### Predefined API routes

- `{{url}}/api/brasil/states`
- `{{url}}/api/brasil/cities/rj`

| URL                                               |
| ------------------------------------------------- |
| http://local.laravel8.com.br/api/brasil/states    |
| http://local.laravel8.com.br/api/brasil/cities/rj |

#### vasset

```html
<!-- Versioned Asset -->
<!-- Add host and app version -->
<img src="{{ vasset('/img/logo.png') }}">
<img src="http://local.laravel8.com.br/images/logo.png?v=0.0.2">
```

#### javascript and css

```php
// Simple print url
js('https://code.jquery.com/jquery-3.6.1.min.js');
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

// Add host and app version
javascript('/js/home.js');
<script type="text/javascript" src="http://local.laravel8.com.br/js/home.js?v=0.0.1"></script>

css('/css/style.css');
<link rel="stylesheet" type="text/css" href="http://local.laravel8.com.br/css/style.css?v=0.0.1">
```

#### DB

```php
echo db_database_name();                                // Returns current database name
echo db_prefix();                                       // Returns current database prefix tables
echo db_comment_table('table_name', 'comment_table');   // Define table comment
echo db_get_comment_table('table_name');                // Returns table comment
echo db_get_pivot_table_name(['videos','tags'], true);  // Returns pivot table name (Ex: blp_tag_video)
echo db_get_pivot_scope_name([Model1, Model2]);         // Returns a pivot scope name (Ex: db_get_pivot_scope_name([Video::class, Tag::class]) => tagVideo)
echo db_get_primary_key('table_name');                  // Returns id
echo db_get_name('table_name', 10);                     // Returns `name` field value
echo db_select_one(Model, ['fields'], ['where'], true); // Returns only one register (Ex: echo db_select_one(\App\Models\City::class, ['id','name'], ['name' => 'São Paulo'], true) => {"id":5325,"name":"São Paulo"})
echo db_select_id(Model, ['where'], false);             // Returns only if by where (Ex: echo db_select_id(\App\Models\City::class, ['name' => 'São Paulo'], true) => 5325)
echo db_model_to_table_name('City');                    // Returns table name from model name => cities
echo db_table_name_to_model('cities');                  // Returns model name from table name => City
echo db_table_name_to_model_path('cities');             // Returns path model from table name => \App\Models\City
echo db_table_name_to_field_id('cities');               // Returns relative field id to another table => city_id
echo db_trim_table_prefix('blp_cities');                // Returns table name without database table prefix => cities
echo db_prefixed_table('cities');                       // Returns table with database table prefix => blp_cities
echo db_table_exists('cities');                         // Returns if table exists in database
```

#### app_version

```php
app_version('0.0.3')
// returns version value from config/app.php or default.
```

```sh
# Increment application version
php artisan app:inc

# Increment application version with composer
composer incversion
```

#### cached_headers

```php
return response($result)->withHeaders(cached_headers($result));
```

#### developer

> Execute `dump` and `die`.

```php
ddd($var);
```

#### lang

> Prints variable in current language, defaults to parameter.

```php
echo dic('Página Inicial');
{{ dic('Página Inicial') }}

echo lang_home_link();     // returns current language root url
echo lang_home_link('en'); // returns root url for language [en]
```

#### string

```php
echo str_mask('04045004', '##.###-###'); // Returns '04.045-004'
echo str_mask('04045004', '#####-###');  // Returns '04045-004'
echo str_plural_2_singular('corações');  // Returns 'coração';

echo str2bool('true');  // Returns true;
echo str2bool('false'); // Returns false;
echo str2bool('foo');   // Returns false;
```

### Custom configs

| Config          | Description                    |
| --------------- | ------------------------------ |
| admin.php       | Menu                           |
| brasil.php      | Estados                        |
| cep.php         | Faixas de CEP por estado       |
| colors.php      | Bootstrap colors               |
| metasocial.php  | Headers metatags               |
| social.php      | Facebook, Twitter, etc         |
| codetrait.php   | Length of model uniq code      |
| tables.php      | Custom configs on admin tables |

### Automatic Assets

> Javascripts and Stylesheets with same route name.

| URL                              | Javascript            | CSS                    |
| -------------------------------- | --------------------- | ---------------------- |
| http://site.com.br/faleconosco   | /js/faleconosco.js    | /css/faleconosco.css   |
| http://site.com.br/sobre/empresa | /js/sobre_empresa.js  | /css/sobre_empresa.css |

### Language (pt-br)

- See: `\resources\lang\pt-br\` files.

### Site pages structure

- Layout: `\resources\views\layouts`
- Pages: `\resources\views\site`

### Logs Folder

- `\storage\logs`

### Updates

## summernote

`composer.json`
```json
	"require": {
	    ...
		"summernote/summernote": "^0.8.8"
	},
	"scripts": {
		"post-update-cmd": [
			"php artisan vendor:publish --tag=summernote"
		],
		...
	}
```

`AppServiceProvider.php`
```php
	public function boot()
	{
        // ...
		$publishes = [ base_path('vendor/summernote/summernote/dist') => public_path('vendor/summernote') ];
		$this->publishes($publishes, 'summernote');
	}
```

### Tests

```terminal
vendor/bin/phpunit --filter ConfigTest
vendor/bin/phpunit --filter UserTest
php artisan dusk --filter AdminTest::testAdminLoginAccess
php artisan dusk --filter AdminTest::testAdminConfigAdd
php artisan dusk --filter AdminTest::testAdminConfigDelete
```

### Commands

#### PHPStan

```terminal
vendor/bin/phpstan analyse app
```

#### PHP CS Fixer

```terminal
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix app
```

#### New Admin Crud

```terminal
php artisan makex:crud Customer --title="Clientes"
```
