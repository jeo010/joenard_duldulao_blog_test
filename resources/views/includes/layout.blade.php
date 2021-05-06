<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<script src="/js/jquery.js"></script>
	<script src="/js/blogs.js"></script>
	<link href="/css/app.css" rel="stylesheet" type="text/css" />
	<link href="/css/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
	@include('includes.header')
	<br>
	<main>
		@yield("contents")
	</main>
</body>
</html>


