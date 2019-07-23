
<!DOCTYPE html>
<html lang="en-us">
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> {{ $page_title }} </title>

	<!-- Change the author and description -->
	<meta name="author" content="abusinesstheme">
	<meta name="description" content="Voyo One is a multipurpose HTML Template developed with the the latest HTML5 and CSS3 technologies. It can be perfectly fit for any corporate, e-commerce, business, agency or individual website.">

    <!-- Google Font -->    
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700|Raleway:300,400,500,600'>
 	

    <!-- CSS files -->
    <link rel="stylesheet" href="/css/voyo.css">


	<!-- Favicons -->
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-144x144.png">

	
</head>
<body>

<!-- Global Wrapper -->
<div id="wrapper">

    @includeIf('voyo.includes.navigation')

	@includeIf('voyo.includes.page_title')

	{{-- Content --}}
	@yield('content')


	@includeIf('voyo.includes.footer')
	
</div> <!-- END Global Wrapper -->


    {{-- Java Script File --}}
    <script src="/js/voyo.js"></script>
</body>
</html>