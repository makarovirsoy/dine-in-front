<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use \Exception;

class AuthController extends Controller
{
	public function loginPage()
	{
		return Inertia::render('Admin/login');
	}

	public function loginApi(Request $request)
	{
		$token = $this->getToken($request);
		if ($token) {
			return Inertia::render('Admin/loginsuccess', ['api_backend_token' => $token]);
		}
		$this->loginPage();
	}

	public function getToken($request)
	{
		$url = config('dineInApi.ApiUrl') . '/authenticate';
		try {
			$response = Http::post($url, $request->all());
		} catch (Exception $e) {
			throw new \Error();
		}
		return $response->json('token');
	}
}
