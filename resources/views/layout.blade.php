<!doctype html>
<html>
<head> 
    <title> @yield('title' , 'My App') </title>
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
