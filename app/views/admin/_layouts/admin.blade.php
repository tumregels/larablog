<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Panel</title>

  {{ HTML::style('css/admin.css') }}

  <meta name="description" content="">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<header>
    <div class="container">
    <h1>Admin Pannel</h1>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="container">
        &copy; {{ date('Y') }} Larablog
    </div>
</footer>

</body>
</html>