<?php
// create function html_form_class_error
if (!function_exists('html_form_class_error'))
{
	function html_form_class_error($errors, $field_name)
	{
		return $errors->has($field_name) ? ' is-invalid' : '';
	}	
}

if (!function_exists('html_to_attr'))
{
	function html_to_attr($p_attr)
	{
		$result = join
		(
			' ',
			array_map
			(
				function($key) use ($p_attr)
				{
					if(is_bool($p_attr[$key]))
					{
						return $p_attr[$key] ? $key : '';
					}
					return sprintf('%s="%s"', $key, $p_attr[$key]);
				},
				array_keys($p_attr)
			)
		);
		return $result;
	}
}
