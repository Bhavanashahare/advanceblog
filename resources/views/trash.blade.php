<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>table</h2>

<button class="btn btn-success"><a href="{{route('category.create')}}">Create</button></a>
<button class="btn btn-danger"><a href="{{route('category.table')}}">customer view</button></a>
  <table class="table table-striped">

    <thead>

      <tr>
        <th>id</th>
        <th>Name</th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($category as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>

             <td><a href="{{route('category.restore',$d->id)}}"><button type="button" class="btn btn-success">restore</button>
            <a href="{{route('category.force-delete',$d->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>


</td>
        </tr>
@endforeach
    </tbody>
  </table>


</div>

</body>
</html>
