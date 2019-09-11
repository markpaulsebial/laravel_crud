@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Share<br/>
	<a href="{{ route('shares.index')}}">List Share</a>
  </div>
  <div class="card-body">
    
	ID {{$share->id}}<br/>
	Name {{$share->share_name}}<br/>
	Price                        {{$share->share_price}}<br/>
	Qty. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$share->share_qty}}<br/>
  </div>
</div>
@endsection