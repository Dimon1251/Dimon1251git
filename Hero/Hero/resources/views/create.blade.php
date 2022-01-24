
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group">

            <label>Product Name</label><br>

            <input type="text" class="form-control" placeholder="Enter a nickname" name="nickname" required><br>
            <input type="text" class="form-control" placeholder="Enter a real name" name="real_name" required><br>
            <textarea type="text" class="form-control" placeholder="Enter a description" name="origin_description" required></textarea><br>
            <textarea type="text" class="form-control" placeholder="Enter a superpowers" name="superpowers" required></textarea>  <br>
            <textarea type="text" class="form-control" placeholder="Enter a catch phrase" name="catch_phrase" required></textarea> <br>

        </div>
        <div class="form-group">
            <input  type="file" name="file" required>
        </div>
        <button type="submit">Create</button>
    </form>

</div>
</body>
</html>
