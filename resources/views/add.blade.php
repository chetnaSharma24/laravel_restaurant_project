@extends('layout')
@section('content')
<div>
<h1>add restaurants here</h1>
<form method="post" action="add">
@csrf
  <div class="form-group">
    <label >name</label>
    <input type="text" name="name" class="form-control" >
    <small   class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label>address</label>
    <input type="text"name="address" class="form-control">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    @stop