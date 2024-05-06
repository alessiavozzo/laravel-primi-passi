<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}">About</a>
            </li>
            <li>
                <a href="{{route('contacts')}}">Contacts</a>
            </li>
        </ul>
    </header>

    <main>
        <h1>{{$message}}</h1>
        <h2>{{$anotherMessage}}</h2>
    </main>
</body>

</html>