<?php

use Illuminate\Routing\Controller as BaseController;

class BuatController extends BaseController
{
	public function register()
	{
		return View::make('tampil');
	}
}