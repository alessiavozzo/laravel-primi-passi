<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>

<body>
    @include('layouts.header')

    <main>
        @foreach($messages as $message)
        {{$message}}
        @endforeach
    </main>
</body>

</html>