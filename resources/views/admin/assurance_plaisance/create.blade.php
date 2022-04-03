@extends("admin.base")
@section('content')
    <form method="post" action="">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="short_description">Short Description</label>
                <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-lg btn-success float-right">Add new Protien</button>
        </div>
    </form>
@endsection
