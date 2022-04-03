<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 9 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('Client_assurance.create') }}"> Create Company</a>
</div>
</div>
</div>
                                       
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.Nom</th>
<th>Company Nature</th>
<th>Company CIN_RC_IF</th>
<th>Company civilite</th>
<th width="280px">Action</th>
</tr>
@foreach ($clients as $client)
<tr>
<td>{{ $client->Nom }}</td>
<td>{{ $client->Nature }}</td>
<td>{{ $client->civilite }}</td>
<td>{{ $client->Nom }}</td>
<td>
<form action="{{ route('Client_assurance.destroy',$client->Client_assurance) }}" method="Post">
<a class="btn btn-primary" href="{{ route('Client_assurance.edit',$client->Client_assurance) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $clients->links() !!}
</body>
</html>