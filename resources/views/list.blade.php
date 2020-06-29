@extends('layout')
@section('content')
<div>
<h1>
list of resto</h1> 
</div>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 <!-- <strong>heyyy!</strong> You have added succefully.-->
 {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1 ?>
@foreach($data as $item)

    <tr>
      <th scope="row"><p><!--{{$item->id}}--> {{$i}}</p></th>
      <td><p>{{$item->name}}</p></td>
      <td><p>{{$item->email}}</p></td>
      <td><p>{{$item->address}}</p></td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
      <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>
    </tr>
<?php $i++ ?>
    @endforeach
    
  </tbody>

</table>
   <!--or you can write {{$data}} -->


@stop