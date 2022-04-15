@extends('dashboard.skeleton')
@section('content')


	<div class="ml-20 py-4 flex-grow border-2 border-gray-300 flex flex-col">
		<h1 class="block mb-4 mx-auto  text-xl font-medium text-green-600">Liste aller Kunden</h1>
		<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
			<table class="w-full text-sm text-left text-gray-500 ">
				<thead class="text-xs text-green-500 uppercase bg-green-100 ">
				<tr>
					<th scope="col" class="px-6 py-3">
						Bestellungsnummer
					</th>
					<th scope="col" class="px-6 py-3">
						status
					</th>
					<th scope="col" class="px-6 py-3">
						Tisch
					</th>
					<th scope="col" class="px-6 py-3">
						Preis
					</th>
					<th scope="col" class="px-6 py-3">
						Zahlung
					</th>
				</tr>
				</thead>

				<tbody>
				<tr class="bg-white border-b text-green-400">
					<th scope="row" class="px-6 py-4 font-medium text-green-900 dark:text-white whitespace-nowrap">
						002
					</th>
					<td class="px-6 py-4">
						lifetung
					</td>
					<td class="px-6 py-4">
						3
					</td>
					<td class="px-6 py-4">
						$2999
					</td>
					<td class="px-6 py-4">
						paypal
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection
