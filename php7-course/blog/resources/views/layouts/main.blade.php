<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
      <header>
        <nav>
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Search</a>
          <a href="#">Contact</a>
        </nav>
      </header>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
