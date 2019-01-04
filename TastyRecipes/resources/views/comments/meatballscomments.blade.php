<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>comments</h1>

	@foreach ($comments as $comment)
		<li>{{ $comment->text }}</li>
	@endforeach
</body>
</html>