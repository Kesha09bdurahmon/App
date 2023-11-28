@extends('Admin.admin')
@section('name')
<h1>Menu</h1>
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
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>

    </div>
  </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">'#'</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Home</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>About us</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>shop</td>
      </tr>
    </tbody>
  </table>
@endsection
