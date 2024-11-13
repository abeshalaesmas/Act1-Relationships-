<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALL USERS</h1>
    @foreach ($profiles as $profile)
        <div>Name: {{$profile->user->name}}</div>
        <div>Email: {{$profile->user->email}}</div>
        <div>Status: {{$profile->status}}</div>
        <div>Year: {{$profile->year}}</div>
        <div>Country: {{$profile->country}}</div>
        <hr>
    @endforeach

</body>
</html>