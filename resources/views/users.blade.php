<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALL USERS</h1>
    @foreach ($users as $user )
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <hr>
    @endforeach
</body>
</html>