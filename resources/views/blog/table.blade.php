<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2> Blog Table</h2>

 <button class="btn btn-success"><a href="{{route('blog.create')}}">Create</a></button>

  <table class="table table-striped">

    <thead>

      <tr>
        <th>id</th>
        <th>title</th>
        <th>discription</th>
        <th>image</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($blog as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
             <td>{!!$d->description!!} </td>
             <td><img src="{{asset('uploads/'.$d->image)}}"width="50px"height="50px" alt=""></td>



                <td><button><a href="{{route('blog.edit',$d->id)}}"> Edit</a></button>
                <button><a href="{{route('blog.delete',$d->id)}}"> Delete</a></button></td>


             </tr>
@endforeach
    </tbody>
    {{$blog->links()}}
  </table>
</div>

</body>
</html>
