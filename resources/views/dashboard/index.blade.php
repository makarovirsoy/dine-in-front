@extends('dashboard.skeleton')
@section('content')

	<div class="ml-20 py-4 flex-grow ">

		<div class="flex justify-around mb-20">

			<div class="p-6 max-w-sm rounded-lg border-l-8 border-green-300 border border-green-400 shadow-xl w-1/4 bg-green-300 text-gray-900">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">1500 €</h5>
				<p class="mb-3 font-normal text-gray-700">Umsatz</p>
			</div>

			<div class="p-6 max-w-sm rounded-lg border-l-8 border-blue-300 border border-blue-400 shadow-xl w-1/4 bg-blue-300 text-gray-900">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">500</h5>
				<p class="mb-3 font-normal text-gray-700">bestellungen heute</p>
			</div>

			<div class="p-6 max-w-sm rounded-lg border-l-8 border-orange-300 border border-orange-400 shadow-xl w-1/4 bg-orange-300 text-gray-900">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">30</h5>
				<p class="mb-3 font-normal text-gray-700">Neue Bestellungen</p>
			</div>

			<div class="p-6 max-w-sm rounded-lg border-l-8 border-red-300 border border-red-400 shadow-xl w-1/4 bg-red-300 text-gray-900">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">3</h5>
				<p class="mb-3 font-normal text-gray-700">offene Rechungen</p>
			</div>
		</div>
		<div class="my-20 mx-8">
			@include('dashboard.new-orders-table')
		</div>
	</div>
@endsection
