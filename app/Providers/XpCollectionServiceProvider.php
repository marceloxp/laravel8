<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class XpCollectionServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// collect([ ['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'], ['id' => 2, 'name' => 'Gomes', 'color' => 'bg-orange'] ])->toBootstrapLabel()->toText();
		\Illuminate\Support\Collection::macro
		(
			'toBootstrapLabel',
			function($p_color = 'bg-green')
			{
				return $this->map
				(
					function($value) use ($p_color)
					{
						$color = $p_color ?? $value['color'];
						return bs_label($value['id'], $value['name'], $color);
					}
				);
			}
		);

		// collect([ ['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'], ['id' => 2, 'name' => 'Gomes', 'color' => 'bg-orange'] ])->toBootstrapLabels()->toText();
		\Illuminate\Support\Collection::macro
		(
			'toBootstrapLabels',
			function($color = 'bg-light-blue')
			{
				$items = $this->map
				(
					function($value, $key) use ($color)
					{
						$br = ( ($key != 0) && ($key % 2 == 0) ) ? '<br>' : '&nbsp;';
						return bs_label($value['id'], $value['name'], $color) . $br;
					}
				);
				return collect()->concat($items);
			}
		);

		// collect(['Marcelo', 'Gomes'])->toText(', ');
		// collect([ ['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'], ['id' => 2, 'name' => 'Gomes', 'color' => 'bg-orange'] ])->toBootstrapLabel()->toText();
		\Illuminate\Support\Collection::macro
		(
			'toText',
			function($p_glue = '')
			{
				return implode($p_glue, $this->toArray());
			}
		);

		// collect([ ['id' => 1, 'name' => 'Tony'], ['id' => 2, 'name' => 'Loki'], ['id' => 4, 'name' => 'Peter'] ])->extract('name');
		\Illuminate\Support\Collection::macro
		(
			'extract',
			function($p_field_name)
			{
				$result = collect([]);
				$this->each
				(
					function($item, $key) use ($p_field_name, $result)
					{
						$result->push($item[$p_field_name]);
					}
				);
				return $result;
			}
		);

		// collect([ ['id' => 1, 'name' => ' Tony '], ['id' => 2, 'name' => '   Loki  '], ['id' => 4, 'name' => 'Peter'] ])->trim('name');
		// collect([' Tony ', '   Loki  ', 'Peter'])->trim();
		\Illuminate\Support\Collection::macro
		(
			'trim',
			function($p_field_name = '')
			{
				$this->transform
				(
					function($item, $key) use ($p_field_name)
					{
						if ($p_field_name)
						{
							$item[$p_field_name] = trim($item[$p_field_name]);
						}
						else
						{
							$item = trim($item);
						}
						return $item;
					}
				);
				return $this;
			}
		);

		// collect([ ['id' => 1, 'name' => 'Tony'], ['id' => 2, 'name' => 'Loki'], ['id' => 4, 'name' => 'Peter'] ])->toLower('name');
		// collect(['Tony', 'Loki', 'Peter'])->toLower();
		\Illuminate\Support\Collection::macro
		(
			'toLower',
			function($p_field_name = '')
			{
				$this->transform
				(
					function($item, $key) use ($p_field_name)
					{
						if ($p_field_name)
						{
							$item[$p_field_name] = mb_strtolower($item[$p_field_name]);
						}
						else
						{
							$item = mb_strtolower($item);
						}
						return $item;
					}
				);
				return $this;
			}
		);

		// collect([ ['id' => 1, 'name' => 'Tony Stark'], ['id' => 2, 'name' => 'Loki'], ['id' => 4, 'name' => 'Peter Paker'] ])->slugify('name');
		// collect(['Tony', 'Loki', 'Peter'])->slugify();
		\Illuminate\Support\Collection::macro
		(
			'slugify',
			function($p_field_name = '', $p_separator = '-')
			{
				$this->transform
				(
					function($item, $key) use ($p_field_name, $p_separator)
					{
						if ($p_field_name)
						{
							$item[$p_field_name] = str_slugify($item[$p_field_name], $p_separator);
						}
						else
						{
							$item = str_slugify($item, $p_separator);
						}
						return $item;
					}
				);
				return $this;
			}
		);

		\Illuminate\Support\Collection::macro
		(
			'toArrayDeep',
			function()
			{
				$this->transform
				(
					function($item, $key)
					{
						$item->child = collect($item->child)->toArrayDeep();
						return $item->toArray();
					}
				);
				return $this->toArray();
			}
		);

		// $a = [ ['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'], ['id' => 2, 'name' => 'Gomes', 'color' => 'bg-orange'] ]; collect($a)->toBootstrapLabel();
		\Illuminate\Support\Collection::macro
		(
			'toHtmlUnorderedList',
			function()
			{
				$result = '<ul>' . PHP_EOL;
				$unlist = $this->map
				(
					function($value)
					{
						return '<li>' . $value . '</li>';
					}
				);
				$result .= $unlist->toText(PHP_EOL);
				$result .= '</ul>' . PHP_EOL;
				return $result;
			}
		);

		// collect(['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'])->toHtmlTable();
		\Illuminate\Support\Collection::macro
		(
			'toHtmlTable',
			function($p_properties = '')
			{
				$result = '<table ' . $p_properties . '>' . PHP_EOL;
				$result .= $this->map
				(
					function($value, $key)
					{
						return chr(9) . '<tr><td width="200" align="right"><strong>' . $key . '</strong></td><td>' . $value . '</td></tr>' . PHP_EOL;
					}
				)->toText();
				$result .= '</table>';
				return $result;
			}
		);

		// collect(['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'])->exceptValues('bg-green');
		\Illuminate\Support\Collection::macro
		(
			'exceptValues',
			function($p_values)
			{
				return $this->filter
				(
					function($value, $key) use ($p_values)
					{
						return (!in_array($value, $p_values));
					}
				);
			}
		);

		// collect(['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'])->exceptValues('bg-green');
		\Illuminate\Support\Collection::macro
		(
			'onlyValues',
			function(...$p_values)
			{
				return $this->filter
				(
					function($value, $key) use ($p_values)
					{
						return (in_array($value, $p_values));
					}
				);
			}
		);

		// collect(['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'])->renameKey('color', 'last_color')->renameKey('name', 'nome_completo');
		// $a = collect(['id' => 1, 'name' => 'Marcelo', 'color' => 'bg-green'])->renameKey('color', 'last_color');
		// $a->renameKey('name', 'nome_completo');
		\Illuminate\Support\Collection::macro
		(
			'renameKey',
			function($p_old_key_name, $p_new_key_name)
			{
				$index = $this->keys()->search($p_old_key_name);
				if ($index === false)
				{
					return $this;
				}

				$item_value = $this->get($p_old_key_name);
				$part       = $this->splice($index);
				$first      = $part->shift();

				$this->put($p_new_key_name, $item_value);
				foreach ($part as $key => $value)
				{
					$this->put($key, $value);
				}

				return $this;
			}
		);

		/*
$a = collect(['id' => 1, 'name' => 'Marcelo', 'age' => 45, 'state' => 'SP', 'color' => 'bg-green']);
$a = $a->toggleKey('name', 'state');
$a = $a->toggleKey('name', 'state')->toggleKey('color', 'id');
		*/

		function ___toggle_array_key($array, $key_ini, $key_end)
		{
			$array_keys = array_keys($array);
			$pos1 = array_search($key_ini, $array_keys);
			$pos2 = array_search($key_end, $array_keys);

			$slice1 = $pos1;
			$slice2 = $pos2;

			$use_ini = $key_ini;
			$use_end = $key_end;

			if ($pos1 > $pos2)
			{
				$slice1 = $pos2;
				$slice2 = $pos1;
			
				$use_ini = $key_end;
				$use_end = $key_ini;
			}

			$arr1   = array_slice($array, 0, $slice1+1);
			$elem1  = [$use_ini => array_pop($arr1)];
			$arr2   = array_slice($array, $slice1+1, $slice2+1);
			$elem2  = [$use_end => array_pop($arr2)];
			$arr3   = array_slice($array, $slice2+1);
			$result = $arr1 + $elem2 + $arr2 + $elem1 + $arr3;

			return $result;
		}

		\Illuminate\Support\Collection::macro
		(
			'toggleKey',
			function($p_from_key_name, $p_to_key_name)
			{
				return collect(___toggle_array_key($this->toArray(), $p_from_key_name, $p_to_key_name));
			}
		);

		/*
$a = collect(['id' => 1, 'name' => 'Marcelo', 'age' => 45, 'state' => 'SP', 'color' => 'bg-green']);
$a->moveKey('name', 'state');
$a->moveKey('state', 'name');
$a->moveKey('name', 'state')->moveKey('color', 'id');
		*/

		function ___move_array_key($array, $key_ini, $key_end)
		{
			$array_keys = array_keys($array);
			$pos1 = array_search($key_ini, $array_keys);
			$pos2 = array_search($key_end, $array_keys);

			$slice1 = $pos1;
			$slice2 = $pos2;

			$use_ini = $key_ini;
			$use_end = $key_end;

			if ($pos1 > $pos2)
			{
				$slice1 = $pos2;
				$slice2 = $pos1;
			
				$use_ini = $key_end;
				$use_end = $key_ini;
			}

			$arr1   = array_slice($array, 0, $slice1+1);
			$elem1  = [$use_ini => array_pop($arr1)];
			$arr2   = array_slice($array, $slice1+1, $slice2+1);
			$elem2  = [$use_end => array_pop($arr2)];
			$arr3   = array_slice($array, $slice2+1);
			if ($pos1 > $pos2)
			{
				$result = $arr1 + $elem2 + $elem1 + $arr2 + $arr3;
			}
			else
			{
				$result = $arr1 + $arr2 + $elem2 + $elem1 + $arr3;
			}

			return $result;
		}

		\Illuminate\Support\Collection::macro
		(
			'moveKey',
			function($p_from_key_name, $p_to_key_name)
			{
				return collect(___move_array_key($this->toArray(), $p_from_key_name, $p_to_key_name));
			}
		);
	}
}