<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">                                
      
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('Client_assurance.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('Client_assurance.update',$client->Client_assurance) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Nature:</strong>
<input type="text" name="Nature" value="{{ $client->Nature }}" class="form-control" placeholder="Nature">
@error('Nature')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Email:</strong>
<input type="text" name="CIN_RC_IF" class="form-control" placeholder="CIN_RC_IF" value="{{ $client->CIN_RC_IF }}">
@error('CIN_RC_IF')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Address:</strong>
<input type="text" name="civilite" value="{{ $client->civilite }}" class="form-control" placeholder="Company civilite">
@error('civilite')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>