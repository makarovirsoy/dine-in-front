@extends('dashboard.skeleton')
@section('content')

	<div class="ml-20 py-4 flex-grow border-2 border-gray-300 flex flex-col">
		<h1 for="base-input" class="block mb-4 mx-auto  text-xl font-medium text-orange-600">Speise Erstellen</h1>
		<form method="POST" action="/dishes" class=" mx-20 ">
			@csrf
			<div class="mb-6">
				<label for="base-input" class="block mb-2 text-lg font-medium text-orange-500">Name</label>
				<input type="text" id="base-input"
					   class="bg-orange-50 border border-orange-300 text-orange-900 text-xl rounded-lg focus:ring-blue-500 focus:border-orange-500 block w-1/2 p-2 ">
			</div>

			<div class="mb-6">
				<label for="base-input" class="block mb-2 text-lg font-medium text-orange-500">Beschreibung</label>
				<textarea id="message" rows="4"
						  class="block p-2 w-1/2 text-xl text-orange-900 bg-orange-50 rounded-lg border border-orange-300 focus:ring-orange-500 focus:border-orange-500"
						  placeholder="Beschreiben Sie die Speise"></textarea>
			</div>

			<div class="mb-6">
				<label for="base-input" class="block mb-2 text-lg font-medium text-orange-500">Bild Hochladen</label>
				<input class="w-1/2 text-sm text-orange-800  rounded-lg border border-orange-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent"
					   aria-describedby="cover" id="cover" type="file">
			</div>

			<div class="mb-6">
				<label for="base-input" class="block mb-2 text-lg font-medium text-orange-500">verfügbarkeit</label>
				<div class="flex items-center">
					<input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
						   class="w-4 h-4 text-orange-600 bg-orange-100 rounded border-orange-300 focus:ring-orange-500 focus:ring-2"
						   checked>
					<label for="checkbox-1" class="ml-3 text-sm font-medium text-orange-900">Speise wird auf dem Menu
						angezeigt</label>
				</div>
			</div>

			<div class="mb-6">
				<label for="countries" class="block mb-2 text-lg font-medium text-orange-500">Kategorie</label>
				<select id="countries"
						class="border border-orange-300 text-orange-600 text-lg rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-1/2 p-2">
					<option>Vorspeise</option>
					<option>getränke</option>
					<option>Nachtisch</option>
					<option>Germany</option>
				</select>
			</div>
			<button type="submit"
					class=" text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-base px-6 py-3.5 text-center">
				Hinzufügen
			</button>
		</form>
	</div>
@endsection
