<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/main.css" />
        <script type="text/javascript" src="{{url('')}}/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/js/main.js"></script>

        <title>Admin System - @yield('title')</title>

	</head>
	<body>
		<div>
			<br>
			@yield('navbar')
		</div>
		<div>
			@yield('content')
		</div>
	</body>
</html>