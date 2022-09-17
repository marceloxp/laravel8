<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Utilities\Result;
use App\Utilities\Cached;
use App\Utilities\Carbex;

if (!function_exists('db_database_name'))
{
	function db_database_name()
	{
		return env('DB_DATABASE');
	}
}

if (!function_exists('db_admin_get_pagination_limit'))
{
	function db_admin_get_pagination_limit()
	{
		return config('database.admin_pagination_limit');
	}
}

if (!function_exists('db_admin_set_pagination_limit'))
{
	function db_admin_set_pagination_limit($pagination_limit)
	{
		config(['database.admin_pagination_limit' => $pagination_limit]);
		return db_admin_get_pagination_limit();
	}
}

if (!function_exists('db_prefix'))
{
	function db_prefix()
	{
		return env('DB_TABLE_PREFIX');
	}
}

if (!function_exists('db_comment_table'))
{
	function db_comment_table($table_name, $table_comment)
	{
		DB::select(sprintf('ALTER TABLE %s COMMENT = "%s"', db_prefixed_table($table_name), $table_comment));
	}
}

if (!function_exists('db_fmt_search'))
{
	function db_fmt_search($search)
	{
		$search = trim($search);
		$search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));
		$search = str_replace(' ', '%', $search);
		return '%' . $search . '%';
	}
}

if (!function_exists('db_get_comment_table'))
{
	function db_get_comment_table($table_name)
	{
		$register = DB::select(sprintf('SHOW TABLE STATUS WHERE Name="%s"', db_prefixed_table($table_name)));
		if (empty($register))
		{
			throw new \Exception(sprintf('Table %s not found!', $table_name));
		}
		$register = $register[0];
		return $register->Comment;
	}
}

if (!function_exists('db_get_pivot_table_name'))
{
	function db_get_pivot_table_name($p_table_names, $use_prefix = true)
	{
		$sorted = array_sort_ex($p_table_names, true);
		$table_name = sprintf('%s_%s', str_to_singular($sorted[0]), str_to_singular($sorted[1]));
		if ($use_prefix)
		{
			$table_name = db_prefixed_table($table_name);
		}
		return $table_name;
	}
}

if (!function_exists('db_get_pivot_scope_name'))
{
	function db_get_pivot_scope_name($p_models)
	{
		$array  = [$p_models[0]::getTableName(), $p_models[1]::getTableName()];
		$table  = array_sort_ex($array, true);
		$table  = str_to_singular($table);
		$table  = str_to_lower($table);
		$result = sprintf('%s%s', $table[0], ucfirst($table[1]));
		return $result;
	}
}

if (!function_exists('db_get_primary_key'))
{
	function db_get_primary_key($table_name)
	{
		$register = DB::select(sprintf('SHOW KEYS FROM %s WHERE Key_name = "PRIMARY"', db_prefixed_table($table_name)));
		$register = $register[0];
		return $register->Column_name;
	}
}

if (!function_exists('db_field_as_unique_index'))
{
	function db_field_as_unique_index($table_name, $field_names)
	{
		$fields = \Illuminate\Support\Collection::wrap($field_names)->implode('_');
		$index_name = sprintf('%s_%s_unique', db_trim_table_prefix($table_name), $fields);
		$sm = Schema::getConnection()->getDoctrineSchemaManager();
		$indexes = \Illuminate\Support\Collection::wrap($sm->listTableIndexes(db_prefixed_table($table_name)));
		$result = $indexes->has($index_name);
		return $result;
	}
}

if (!function_exists('db_table_has_index'))
{
	function db_table_has_index($table_name, $index_name)
	{
		$sm = Schema::getConnection()->getDoctrineSchemaManager();
		$indexes = \Illuminate\Support\Collection::wrap($sm->listTableIndexes(db_prefixed_table($table_name)));
		$result = $indexes->has($index_name);
		return $result;
	}
}

/**
 * Get all comments from table table_name
 * @param $table_name
 * @return collection
 * 
 */
if (!function_exists('db_table_get_fields_captions'))
{
	/**
	 * Get all fields captions of current table model
	 * @return \Illuminate\Support\Collection
	 */
	function db_table_get_fields_captions($table_name)
	{
		$result = Cached::get
		(
			'sys-model',
			['db_table_get_fields_captions', $table_name],
			function() use ($table_name)
			{
				$register = DB::select(sprintf('SHOW FULL COLUMNS FROM %s', db_prefixed_table($table_name)));
				$register = \Illuminate\Support\Collection::make($register);

				// set Comment as "Criado em" if Field = "created_at"
				$register = $register->map(function($item) {
					if ($item->Field == 'created_at') {
						if (empty($item->Comment)) {
							$item->Comment = 'Criado em';
						}
					}
					if ($item->Field == 'updated_at') {
						if (empty($item->Comment)) {
							$item->Comment = 'Atualizado em';
						}
					}
					// set Comment as "#" if Field = "id" and comment is empty
					if ($item->Field == 'id') {
						if (empty($item->Comment)) {
							$item->Comment = '#';
						}
					}
					return $item;
				});
				
				// change all empty comments to field name
				$register = $register->map(function($item) {
					if (empty($item->Comment)) {
						$item->Comment = $item->Field;
					}
					return $item;
				});

				$result = $register->pluck('Comment', 'Field');
				return $result;
			},
			15
		);
		return $result->getData();
	}
}

/**
 * Get comment from table table_name field "field_name"
 * @param $table_name
 * @param $field_name
 * @return string
 * 
 */
if (!function_exists('db_table_get_field_comment'))
{
	function db_table_get_field_comment($table_name, $field_name)
	{
		$result = db_table_get_fields_captions($table_name);
		$result = $result->get($field_name);
		return $result;
	}
}

if (!function_exists('db_get_name'))
{
	function db_get_name($table_name, $id)
	{
		$register = DB::select(sprintf('SELECT `name` FROM `%s` WHERE `id` = "%s";', db_prefixed_table($table_name), $id));
		if (empty($register))
		{
			return '';
		}
		return $register[0]->name;
	}
}

if (!function_exists('db_select_one'))
{
	function db_select_one($p_model, $p_fields, $p_where, $raise_if_empty = false)
	{
		$result = $p_model::where($p_where)->get($p_fields)->first();
		if ($raise_if_empty)
		{
			if (empty($result))
			{
				throw new Exception('Falha na captura dos dados solicitados (1).');
			}
		}
		return $result;
	}
}

if (!function_exists('db_select_id'))
{
	// db_select_id(\App\Models\Menu::class, ['slug' => 'tabelas'], true);
	function db_select_id($p_model, $p_where, $raise_if_empty = false)
	{
		$result = $p_model::where($p_where)->get(['id'])->take(1)->first();
		if ($raise_if_empty && empty($result))
		{
			logger('Falha na captura dos dados solicitados (2).', [$p_model, $p_where, $raise_if_empty]);
			throw new Exception('Falha na captura dos dados solicitados (2).');
		}
		return (!empty($result)) ? $result->id : null;
	}
}

if (!function_exists('db_model_to_table_name'))
{
	function db_model_to_table_name($model_name)
	{
		return Illuminate\Support\Str::plural(mb_strtolower($model_name));
	}
}

if (!function_exists('db_table_name_to_model'))
{
	function db_table_name_to_model($table_name)
	{
		return Illuminate\Support\Str::singular(ucfirst(mb_strtolower($table_name)));
	}
}

if (!function_exists('db_table_name_to_model_path'))
{
	function db_table_name_to_model_path($table_name)
	{
		return sprintf('\App\Models\%s', db_table_name_to_model($table_name));
	}
}

if (!function_exists('db_table_name_to_field_id'))
{
	function db_table_name_to_field_id($table_name)
	{
		return sprintf('%s_id', str_to_singular($table_name));
	}
}

if (!function_exists('db_trim_table_prefix'))
{
	function db_trim_table_prefix($table_name)
	{
		$temp = explode(db_prefix(), $table_name);
		return array_pop($temp);
	}
}

if (!function_exists('db_prefixed_table'))
{
	function db_prefixed_table($table_name)
	{
		return sprintf('%s%s', db_prefix(), db_trim_table_prefix($table_name));
	}
}

if (!function_exists('db_table_exists'))
{
	function db_table_exists($table_name)
	{
		$result = Schema::hasTable(db_trim_table_prefix($table_name));
		return (!empty($result)) ? $result : false;
	}
}

if (!function_exists('ln'))
{
	function ln()
	{
		echo PHP_EOL;
	}
}

if (!function_exists('generate_unique_code'))
{
	function generate_unique_code()
	{
		$codelength = config('codetrait.length', 10);
		$code = null;
		$k = 0;
		$valid = false;
		while (!$valid)
		{
			try
			{
				$k++;
				$code  = mb_strtolower(\Illuminate\Support\Str::random($codelength));
				$id    = DB::table('codes')->insertGetId(['name' => $code, 'attempts' => $k]);
				$valid = ($id > 0);
			}
			catch (\Exception $e)
			{
				
			}
		}

		return $code;
	}

	function unique_code_exists($code)
	{
		return DB::table('codes')->where('name', $code)->exists();
	}
}

if (!function_exists('cep_to_address'))
{
	function cep_to_address($cep)
	{
		return Cached::get
		(
			'brasil_cep',
			[$cep],
			function() use ($cep)
			{
				$query = 'call cep_endereco(?);';
				$address = collect(DB::select($query, [str_to_formatted_cep($cep)]))->first();
				if (empty($address->endereco))
				{
					return Result::error('Endereço não localizado.');
				}
				return Result::success('Endereço localizado', collect($address)->toArray());
			},
			60
		);
	}
}

if (!function_exists('db_log_info'))
{
	function db_log_info($message, $context = [])
	{
		$filename = sprintf('/storage/logs/mysql.%s.log', Carbex::now()->toSqlDate());
		$view_log = new Logger('View Logs');
		$view_log->pushHandler(new StreamHandler(storage_path($filename), Logger::INFO));
		$view_log->info($message, $context);
	}
}

if (!function_exists('db_log_slow'))
{
	function db_log_slow($message, $context = [])
	{
		$filename = sprintf('/logs/mysql.slow.%s.log', Carbex::now()->toSqlDate());
		$view_log = new Logger('View Logs');
		$view_log->pushHandler(new StreamHandler(storage_path($filename), Logger::INFO));
		$view_log->info($message, $context);
	}
}