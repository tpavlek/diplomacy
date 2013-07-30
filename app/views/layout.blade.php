<!DOCTYPE html>
<html>
  <head>
    <title>Tech Group Diplomacy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/pure-min.css" >
    <link rel="stylesheet" href="styles/style.css" >
    <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
  </head>
  <body>
    <div class="pure-menu pure-menu-horizontal pure-menu-open">
      <a class="pure-menu-heading">Diplomacy</a>
      <ul>
        <li><a href="#current">Current</a></li>
        <li><a href="http://en.wikibooks.org/wiki/Diplomacy/Rules">Rules</a></li>
        <li><a href="#submit">Submit Orders</a></li>

      </ul>

    </div>
    <div class="content-wrapper">
		@yield('content')
    </div>
	<div class="footer">
      &copy; TROY Pavlek. I made this with my hands
    </div>

  </body>

</html>

