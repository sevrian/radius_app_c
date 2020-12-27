@extends('theme.home')

@section('content')
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>

@endif
<div class="col-8">
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>User Name</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="surename">
  </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password">
    </div>

    
  <div class="form-group">
   <button class="btn btn-primary btn-block">Simpan User</button>
</div>

</form>
</div>
@endsection