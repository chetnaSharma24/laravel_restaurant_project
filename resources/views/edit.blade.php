@extends('layout')
@section('content')
<div>
<h1>edit restaurants here</h1>
<form method="post" action={{url('/edit')}}>
@csrf
  <div class="form-group">
    <label >name</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control" >
    <small   class="form-text text-muted">We'll never share your email with anyone else.</small>
    <input type="hidden" name="id" value="{{$data->id}}" class="form-control" >
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="text" name="email" value="{{$data->email}}"class="form-control">
  </div>
  <div class="form-group">
    <label>address</label>
    <input type="text"name="address" value="{{$data->address}}" class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-primary">submit</button>
</form>
    </div>
    @stop