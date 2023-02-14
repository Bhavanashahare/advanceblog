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
  <h2> Category form</h2>

  <form action="{{route('category.update',$category->id)}}" method="post">
    @csrf




    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{$category->name}}" name="name">
    </div>


    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>
