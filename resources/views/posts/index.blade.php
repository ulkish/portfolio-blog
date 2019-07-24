<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Posts ></h1>	

	@foreach ($posts as $post)
		<li>{{ $post->title }}</li>
	@endforeach
</body>
</html>
