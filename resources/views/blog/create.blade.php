<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>

<div class="container"  >
  <h2> blog form</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <form action="{{route('blog.store')}}" method="post"  enctype="multipart/form-data>
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>


      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" placeholder=" image" name="image">
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


  </form>
</div>

</body>
</html>
