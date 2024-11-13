<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
    <h1>{{$user->name}}'s Profile</h1>
    </head>
    <section>
         @if($user->profile)
            <p>Status: {{ $user->profile->status }}</p>
            <p>Year: {{ $user->profile->year }}</p>
            <p>Country: {{ $user->profile->country }}</p>
        @else
            <p>No profile information available.</p>
        @endif
    </section>

    
</body>
</html>