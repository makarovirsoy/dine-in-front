<!doctype html>
<html lang="DE">
<head>
	<meta charset="utf-8">
	<title>Dine In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
@include('dashboard.navigation')
<main class="flex flex-row mt-20">
	@include('dashboard.aside')
	@yield('content')
</main>
</div>
</body>
</html>