@extends('dashboard.skeleton')
@section('content')

	<div class="ml-20 py-4 flex-grow flex flex-col">

		<h1 class="block mb-4 mx-auto  text-xl font-medium text-blue-600">Liste aller Kunden</h1>

		<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
			<table class="w-full text-sm text-left text-gray-500 ">
				<thead class="text-xs text-blue-500 uppercase bg-blue-100 ">
				<tr>
					<th scope="col" class="px-6 py-3">
						kunde
					</th>
					<th scope="col" class="px-6 py-3">
						besuche
					</th>
					<th scope="col" class="px-6 py-3 ">
					email
					</th>
				</tr>
				</thead>
				<tbody>
				@for ($i = 0; $i < 5; $i++)
					<tr class="border-b  odd:bg-white even:bg-gray-50 ">
						<th scope="row" class="px-6 py-4 font-medium text-blue-900 ">
							momo
						</th>
						<td class="px-6 py-4 text-blue-400">
							40
						</td>
						<td class="px-6 py-4 text-blue-400">
							kunde@email.ce
						</td>
				@endfor
				</tbody>
			</table>
		</div>
	</div>
@endsection
