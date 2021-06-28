<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">

    @foreach($movies as $movie)  
        <div>
            <p>Titolo: {{$movie->title}}</p>
            <p>Titolo originale: {{$movie->original_title}}</p>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
        </div>
    @endforeach

</div>
  
</body>
</html>