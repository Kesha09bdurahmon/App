@extends('Admin.admin')
@section('name')
<h1>Book category</h1>
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
        <form method="POST" action="{{ route('bookcategory') }}">
            @csrf
            <input type="text" name="book category" placeholder="Book category" class="form-control"><br>
            <input type="text" name="author name" placeholder="Author Name" class="form-control"><br>
            <input type="text" name="publishing" placeholder="Publishing house" class="form-control">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="ok" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>

    </div>
  </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Book category</th>
        <th scope="col">Author Name</th>
        <th scope="col">Publishing house</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Jacob</td>
      </tr>
    </tbody>
  </table>
@endsection
