<!doctype html>
<html lang="DE">
<head>
	<meta charset="utf-8">
	<title>Dine In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
	<script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</head>
<body>
@include('dashboard.navigation')
<main class="flex flex-row mt-20">
	@yield('content')
</main>
</div>
</body>
</html>