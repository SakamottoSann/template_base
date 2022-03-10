<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>.:: CheckPoint ::.</title>
	
	<meta name="theme-color" content="#1a237e">
	<meta name="apple-mobile-web-app-capable" content="yes">  
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a237e">
	<meta name="apple-mobile-web-app-title" content="Selflog Cargas">
	<meta name="description" content="Localize entregas">

	<link rel="shortcut icon" 
		href="{{ base_url('assets/images/favicon.ico') }}" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="manifest" href="{{ base_url('manifest.json') }}" />
	@include('template.css')
</head>
<body>
	@yield('content')
</body>
<script type="text/javascript">
	function base_url(caminho) {
		return '{{ base_url() }}' + caminho;
	}
</script>
@include('template.javascript')
</html>