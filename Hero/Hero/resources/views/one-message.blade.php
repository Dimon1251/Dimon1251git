<title>Information</title>
<h1>Information about a hero</h1>
<p><img src="/storage/product/{{$data->file_path}}" width="200" height="200" ></p>
<b>Nickname: {{$data->nickname}}</b><br>
<b>Real name: {{$data->real_name}}</b><br>
<b>Description: {{$data->origin_description}}</b><br>
<b>Superpowers: {{$data->superpowers}}</b><br>
<b>Catch Phrase: {{$data->catch_phrase}}</b><br>

<a href="{{route('contact-update', $data->id)}}"><button class="btn btn-primary">Edit</button></a>
<a href="{{route('contact-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>
<a href="{{route('review')}}"><button class="btn btn-danger">Back</button></a>


