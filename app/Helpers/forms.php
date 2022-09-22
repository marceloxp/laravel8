<?php

// create function html_form_class_error
if (!function_exists('html_form_class_error')) {
    function html_form_class_error($errors, $field_name)
    {
        return $errors->has($field_name) ? ' is-invalid' : '';
    }
}
