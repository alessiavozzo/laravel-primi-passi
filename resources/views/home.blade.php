<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    @include('layouts.header')

    <main>
        <h1>{{$message}}</h1>
        <h2>{{$anotherMessage}}</h2>
    </main>

</body>

</html>