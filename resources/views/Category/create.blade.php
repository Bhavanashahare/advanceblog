<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <h2> Category form</h2>
  <form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Category Name:</label>
      <textarea type="text" class="form-control" id="name" placeholder="Enter name" name="name"></textarea>
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
      {{-- <div class="form-group">
        <label for="cars">Choose a category:</label>

        <select  id="cars" name="category_id">
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select> --}}
          </div>
  </form>
</div>

</body>
</html>
