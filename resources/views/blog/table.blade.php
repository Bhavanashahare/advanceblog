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

        <div class="col-auto ms-auto text-end mt-n1">

            <a href="{{ route('blog.create') }}"> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="">
                    <i data-feather="plus" class="me-1"></i> Create Blog
                </button></a>

        </div>

        <table class="table table-striped">

            <thead>

                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Category Name</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->title }}</td>
                        {{-- ckeditor --}}
                        <td>{!! $d->description !!} </td>
                        {{-- ckeditor --}}
                        <td><img src="{{ asset('uploads/' . $d->image) }}"width="50px"height="50px" alt="">
                        </td>

                        <td>{{ $d->category->name }}</td>
                            <td>
                            <a href="{{route('blog.edit', $d->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                        </td>
                        <td>
                            <a href="{{route('blog.delete', $d->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>
