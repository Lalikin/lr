<?php

class SignController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Контроллер авторизации
	|--------------------------------------------------------------------------
	|
	|
	|
	|
	*/

	public function showIn()
	{
		return View::make('sign.in');
	}

	public function showUp()
	{
		return View::make('sign.up');
	}

}
