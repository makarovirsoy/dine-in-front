<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
	public function __invoke()
	{
		return Inertia::render('Admin/dashboard', [
			'sales' => 50,
			'openOrders' => 30,
			'ordersToday' => 100,
			'operBills' => 20
		]);
	}
}
