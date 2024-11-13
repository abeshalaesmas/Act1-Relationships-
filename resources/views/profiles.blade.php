<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALL PROFILES</h1>
    @foreach ( $profiles as $profile )
        <p>Name:{{$profile->name}}</p>
        <p>Status:{{$profile->status}}</p>
        <p>Year:{{$profile->year}}</p>
        <p>Country:{{$profile->country}}</p>
        <hr>
    @endforeach
</body>
</html>