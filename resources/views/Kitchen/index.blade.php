@extends('Kitchen.skeleton')
@section('content')
	<div class="mx-40 flex flex-col w-full">
		@for ($i = 0; $i < 5; $i++)
			<div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md my-4 flex flex-row justify-between">
				<div class="flex flex-col">
				<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Speise : <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">2</span> Reis</h5>
				<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bemerkung : ohne Salz </p>
					<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">tisch : <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">15</span> </p>
					<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Menge: <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span></p>
					<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Zahlung :  <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">paypal</span></p>
				</div>
				<button class=" w-1/4 inline-flex items-center py-2 px-3 text-lg font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300"> Bestellung Fertig</button>

			</div>
		@endfor
	</div>
@endsection