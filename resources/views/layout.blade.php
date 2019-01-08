<!doctype html>
<html>
<head> 
    <title> @yield('title' , 'My App') </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>
    <body>
      @yield('content')
       <p>
       	<ul>
       	   <li><a href="/">Home</a></li>
           <li><a href="/contact">Contact Us</a></li>
           <li><a href="/about">About Us</a></li>
       </ul>
       </p>
    </body>
</html>
