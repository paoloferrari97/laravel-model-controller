<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="cards">
            <div class="card">
                @foreach ($movies as $movie)
                <h3>{{$movie['title']}}</h3>
                <h4>({{$movie['original_title']}})</h4>
                <span>Nazonalità: {{$movie['nationality']}}</span>
                <span>Uscita nelle sale: {{$movie['date']}}</span>
                <span>Votazione: {{$movie['vote']}}</span>
                @endforeach
            </div>            
        </div>
    </div>
</body>
</html>
