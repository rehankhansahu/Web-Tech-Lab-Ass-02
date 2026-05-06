<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h2>Add User</h2>

<form action="/store" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
@csrf

<input type="text" name="name" class="form-control mb-2" placeholder="Name">

<input type="email" name="email" class="form-control mb-2" placeholder="Email">

<input type="text" name="cnic" class="form-control mb-2" placeholder="CNIC">

<input type="text" name="telephone" class="form-control mb-2" placeholder="Phone">

<textarea name="comments" class="form-control mb-2" placeholder="Comments"></textarea>

<input type="file" name="image" class="form-control mb-2">

<button class="btn btn-success">Save</button>

</form>

</div>