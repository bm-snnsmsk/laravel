<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>kişiler</h2>
    @if(count($person))
        @foreach($person as $p)
            <li>geçerli kullanıcı  {{ $p }}</li>
        @endforeach
    @endif
</body>
</html>