<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <h2>aylar</h2>
    @if(count($aylar))
        @foreach($aylar as $a)
            <li>  {{ $a }}</li>
        @endforeach
    @endif
</body>
</html>