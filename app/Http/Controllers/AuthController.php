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
		return Inertia::render('login');
	}

	public function loginApi(Request $request)
	{
		$url = config('dineInApi.ApiUrl') . '/authenticate';
		try {
			$response = Http::post($url, $request->all());
		} catch (Exception $e) {
			throw new \Error();
		}
		$token = $response->json('token');

		return Inertia::render('dashboard', ['api_backend_token' => $token]);
	}

	public function logout()
	{
		return '';
	}

}
