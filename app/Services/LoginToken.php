<?php

namespace App\Services;

use Illuminate\Auth\Authenticatable;

class LoginToken implements \Illuminate\Contracts\Auth\Authenticatable
{
	use Authenticatable;
	private $token;

	public function __construct()
	{
	}

	public function getToken()
	{
		return $this->token;
	}

	public function forgetToken()
	{
		$this->token = null;
	}

	public function setToken($token): void
	{
		$this->token = $token;
	}

}