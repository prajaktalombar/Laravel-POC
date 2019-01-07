<!doctype html>
<html>
<head> 
    <title> Add Projects </title>
</head>
    <body>
      <h1> Create Projects </h1>

      <form method="POST" action="/projects">
      	{{ csrf_field() }}
      	<div>
      		<input type="text" name="title">
      	</div>
      	<div>
      		<textarea name="description" placeholder="Project Description"></textarea>
      	</div>
      	<div>
      		<button type="submit">Create Project</button>	
      	</div>
      </form>

    </body>
</html>