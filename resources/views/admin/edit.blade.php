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

<form action="{{ route('user.update', $user->id ) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" class="form-control" name="username" value="{{ $user->username }}">
    </div>
    <div class="form-group">
      <label>Nama </label>
      <input type="text" class="form-control" name="surename" value="{{ $user->surename }}">
  </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block">Update User</button>
    </div>

</form>


@endsection