<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit book</title>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        {{--  @method('PUT')--}}

        <div class="mb-3">
            <label for="img" class="form-label">img</label>
            <input type="file" class="form-control" id="img" name="img" value="{{ $book->img }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $book->price }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $book->description }}">
        </div>
        <button type="submit" class="btn btn-success"> Update </button>

    </form>

</div>
</body>
</html>
