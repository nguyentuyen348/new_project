
<div class="container">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <h3>CREATE BOOK</h3>
        <div class="mb-3">
            <label for="book" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
</div>
