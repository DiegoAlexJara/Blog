<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        
        @if($category)
         
            Tu post es: {{$post}} de la categoria {{$category}}
        
        @else
        
            Tu post es: {{$post}}
        
        @endif
        
    </h1>
</body>
</html>