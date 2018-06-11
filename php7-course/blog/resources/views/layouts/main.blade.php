<html>
    <head>
        <title>App Name - @yield('title')</title>
      <!--  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">   -->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
      <header>
        <div class="container">
          <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
          </nav>
        </div>
      </header>



          <div class="container">
              @yield('content')
          </div>

    </body>
</html>
