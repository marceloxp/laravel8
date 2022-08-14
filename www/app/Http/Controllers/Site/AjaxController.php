<?php

namespace App\Http\Controllers\Site;

// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\View;
// use Illuminate\Http\Request;
// use \App\Http\Utilities\Result;
// use Illuminate\Support\Str;
// use Validator;

class AjaxController extends SiteController
{
	public function __construct()
	{
		parent::__construct();
	}

	// public function sendsuggestion(Request $request)
	// {
	// 	$form = ['name' => $request->get('suggestion')];
	// 	$valid = \App\Models\Suggestion::validate($form);
	// 	if (!$valid['success'])
	// 	{
	// 		return $valid;
	// 	}
	// 	$create = \App\Models\Suggestion::create($form);
	// 	if (!$create)
	// 	{
	// 		return Result::error('Ocorreu um erro na gravação do registro');
	// 	}
	// 	return Result::success('Dados cadastrados com sucesso.', ['id' => $create->id]);
	// }
}