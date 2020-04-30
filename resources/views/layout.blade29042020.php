<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : StaysafeUK
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--<link rel="stylesheet" href="/css/app.css)"/> -->
	@yield('head')
</head>
<body>
    <div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">StaysafeUK</a></h1>
		</div>
		<div id="menu">
			<ul>
            <li class="{{Request::path() === '/' ? '/' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li><a href="{{Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="/clients" accesskey="2" title="">Our Clients</a></li>
				<li><a href="{{Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">Blogs</a></li>
				<li><a href="{{Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles"accesskey="4" title="">Articles</a></li>
				<li><a href="{{Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
				<li><a href="{{Request::path() === 'create' ? 'current_page_item' : ''}}"><a href="/articles/create" accesskey="5" title="create">Create</a></li>
			</ul>
		</div>
	</div>
	</div>

    @yield ('header')

</div>
<div>
<!-- <script src="/js/app.js"></script> -->
</div>
@yield ('content')
</body>
</html>
