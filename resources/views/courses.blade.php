<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALL COURSES</h1>
    @foreach ( $courses as $course)
        <p>Course:{{$course->course_name}}</p>
        <p>Session:{{$course->session}}</p>
        <p>Grades:{{$course->grades}}</p>
        <hr>
    @endforeach
</body>
</html>