<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>i film</h1>
    <ul>
        @foreach ($movies as $item)
        <li>
           nome: {{$item}}
        </li>
        @endforeach
    </ul>
    <a href="/">pagina iniziale</a>
</body>
</html>