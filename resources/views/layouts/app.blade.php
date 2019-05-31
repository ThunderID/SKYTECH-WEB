<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials._head')
	@stack('styles')
</head>
<body>
	@yield('menu')
	@include('partials._javascript')
	@stack('scripts')
</body>
</html>