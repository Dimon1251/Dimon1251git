<!DOCTYPE html >
<html lang="ru">
<head>
    <meta charset=utf-8">
    <meta name="viewport">
    <title>Home</title>
</head>
<body>


<h1>Heroes</h1>
@foreach($review as $el)
    <div class="alert alert-warning">
        <h3>{{$el->nickname}}</h3>
        <p><img src="/storage/product/{{$el->file_path}}" width="200" height="200" ></p>

        <a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">more details</button></a>
    </div>

@endforeach
<br>
<a class="p-2 text-dark" href="{{route('create')}}">Create a new hero</a>
</body>
</html>
