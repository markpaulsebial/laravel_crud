@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Member<br/>
	
  </div>
  <div class="card-body">
  
	ID {{$user->id}}<br/>
	Name {{$user->name}}<br/>
	Email {{$user->email}}<br/>
	Member Since {{$user->created_at}}<br/>
	<br/>
	
	<a href="{{ route('users.index')}}">Back to List</a>
  </div>
</div>
@endsection