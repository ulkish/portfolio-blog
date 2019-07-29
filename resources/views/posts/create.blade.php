<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create a New Post</title>
</head>
<body>
	<h1>Create a New Post</h1>
	
	<form method="POST" action="/posts">
		@csrf
		<div>
			<input type="text" name="title" placeholder="Project Title">
		</div>
	
		<div>
			<textarea  name="description" cols="30" rows="10"
			placeholder="Project Description"></textarea>
		</div>
		
		<div>
			<button type="submit">Create Project</button>
		</div>
	</form>
</body>
</html>
