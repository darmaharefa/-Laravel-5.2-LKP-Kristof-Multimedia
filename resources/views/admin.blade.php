<!DOCTYPE html>
<html lang="en">
<head>
	@include('partsAdmin._header')
</head>
<body>

	<div id="wrapper">
		@include('partsAdmin._navbar')
		<div id="page-wrapper">
			@yield('konten')
		</div>
	</div>
	
	@include('partsAdmin._footer')
</body>
</html>