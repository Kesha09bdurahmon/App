@extends('Admin.admin')
@section('name')
<h1>Books</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button class="mb-3">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Name" class="form-control"><br>
            <label for="Author">Author of book</label>
            <select class="form-select" aria-label="Default select example" id="Author">
                @foreach ($models as $model)
                <option value="{{ $model->id }}">{{ $model->author_name }}</option>
                @endforeach
            </select><br>
            <label for="Category">Category of book</label>
            <select class="form-select" aria-label="Default select example" id="Category">
                @foreach ($models as $model)
                <option value="{{ $model->id }}">{{ $model->book_category }}</option>
                @endforeach
            </select><br>
            <label for="Publish">Publishing house of book</label>
            <select class="form-select" aria-label="Default select example" id="Publish">
                @foreach ($models as $model)
                <option value="{{ $model->id }}">{{ $model->publishing_house }}</option>
                @endforeach
            </select><br>
            <input type="number" name="pages" placeholder="Number of pages" class="form-control"><br>
            <input type="text" name="description" placeholder="Description" class="form-control"><br>
            <input type="number" name="publish date" placeholder="Publishing date of book" class="form-control"><br>
            <input type="file" name="img" placeholder="Image of book" class="form-control"><br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>

    </div>
  </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">'#'</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Category</th>
        <th scope="col">Publishing house</th>
        <th scope="col">Number of pages</th>
        <th scope="col">Description</th>
        <th scope="col">publish date</th>
        <th scope="col">img</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>Mark</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection
