@extends('layout')
@section('content')
<div>
<h1>
home page</h1> 
<div>
@foreach ($data as $item)
<li>{{$item->name}}</li>
@endforeach
</div>
<div>
{{$data->links() }}
</div>

@stop