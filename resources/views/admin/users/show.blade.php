<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
	<h1>User Information</h1>
    <p>ID: {{ $userFound['id'] }}</p>
	<p>Name: {{ $userFound['name'] }}</p>
	<p>Age: {{ $userFound['age'] }}</p>
	<p>Gender: {{ $userFound['gender'] }}</p>
</body>
</html>
