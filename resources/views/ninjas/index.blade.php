<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ninja Network | Home</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>

    @if($greeting == 'Hello ')
        <p>Hi From inside the if statement</p>
    @endif

    <p>{{$greeting}}</p>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{$ninja['name']}}</p>
                <a href="/ninjas/{{$ninja['id']}}"> View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
