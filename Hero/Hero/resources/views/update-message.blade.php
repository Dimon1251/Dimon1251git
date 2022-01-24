
<title>Edit</title>
<h1>Editing a information</h1>


@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>

@endif


<form method="post" action="{{route('contact-update-submit', $data->id)}}" enctype="multipart/form-data">
    @csrf

    <b>Nickame</b><br>
    <input type="text" class="form-control" placeholder="{{$data->nickname}}" name="nickname" required><br>
    <b>Real name</b><br>
    <input type="text" class="form-control" placeholder="{{$data->real_name}}" name="real_name" required><br>
    <b>Description</b><br>
    <textarea type="text" class="form-control" placeholder="{{$data->origin_description}}" name="origin_description" required></textarea><br>
    <b>Superpowers</b><br>
    <textarea type="text" class="form-control" placeholder="{{$data->superpowers}}" name="superpowers" required></textarea>  <br>
    <b>Catch phrase</b><br>
    <textarea type="text" class="form-control" placeholder="{{$data->catch_phrase}}" name="catch_phrase" required></textarea><br>

    <button type="submit" class="btn btn-success">Edit</button>

<div class="form-group">
    <input type="file" name="file" required>
</div>



</form>

