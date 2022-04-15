@extends('dashboard.skeleton')
@section('content')

	<div class="ml-20 py-4 flex-grow border-2 border-gray-300 flex flex-col">
		<h1 for="base-input" class="block mb-4 mx-auto  text-xl font-medium text-purple-900">Kategorie Erstellen</h1>
		<form method="POST" action="/categories" class=" mx-20 ">
			@csrf
		<div class="mb-6">
			<label for="base-input" class="block mb-2 text-lg font-medium text-purple-500">Kategorie Name</label>
			<input type="text" id="base-input" class="bg-purple-50 border border-purple-300 text-purple-900 text-xl rounded-lg focus:ring-blue-500 focus:border-purple-500 block w-1/2 p-2 ">
		</div>
		<button type="submit" class="text-white bg-purple-500 hover:bg-purple-600 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-base px-6 py-3.5 text-center">Hinzufügen</button>
		</form>
	</div>
@endsection
