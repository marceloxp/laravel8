<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class BaseModel extends Model
{
	public static function getTableName()
	{
		$instanced_model = with(new static);
		$result = $instanced_model->getTable();
		unset($instanced_model);
		return $result;
	}

	/**
	 * Get comment from field "field_name" of current table model
	 * @param $field_name
	 * @return string
	 * 
	 */
	public static function getFieldComment($field_name)
	{
		return db_table_get_field_comment(self::getTableName(), $field_name);
	}

	// add function get get all fields captions
	public static function getFieldsCaptions()
	{
		return db_table_get_fields_captions(self::getTableName());
	}

	public static function _validate($request, $rules, $id = null)
	{
		try
		{
			$result =
			[
				'result'  => true,
				'success' => false,
				'tag'     => 0,
				'message' => '',
				'fields'  => [],
				'error'   => ''
			];

			if ($id)
			{
				$rules['id'] = 'required';
			}

			$form_data = (is_array($request)) ? $request : $request->all();
			$validator = Validator::make($form_data, $rules);
			$fields_captions = self::getFieldsCaptions();

			if (($validator->fails()))
			{
				$result['success'] = false;
				$result['message'] = 'Entrada de dados inválida.';
				$result['all']     = [ $result['message'] ];
				$result['fields']  = [];

				$errors = $validator->errors();

				foreach ($errors->keys() as $field_name)
				{
					$str_error                       = $errors->first($field_name);
					$result['single'][$field_name]   = $str_error;
					$result['fields'][$field_name][] = $str_error;
					$result['all'][]                 = $fields_captions->get($field_name) . ': ' . $str_error;
				}
			}
			else
			{
				$result['success'] = true;
			}
		}
		catch(\Exception $e)
		{
			$result['success'] = false;
			$result['message'] = 'Ocorreu um erro na validação dos dados.';
			$result['error'] = $e->getMessage();
		}

		return $result;
	}
}
