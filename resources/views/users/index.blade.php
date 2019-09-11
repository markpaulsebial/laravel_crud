@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Member Since</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td><a href="{{ route('users.show',$users->id)}}">{{$users->name}}</a></td>
            <td>{{$users->email}}</td>
            <td>{{$users->created_at}}</td>
            
            <td>
                <form action="{{ route('users.show',$users->id)}}" method="get">
                  @csrf
                  @method('GET')
                  <button class="btn btn-danger" type="submit">View</button>
			</td>
			<td>
                </form><form action="{{ route('users.edit',$users->id)}}" method="get">
                  @csrf
                  @method('GET')
                  <button class="btn btn-danger" type="submit">Edit</button>
             </td>
			<td>
				</form><form action="{{ route('users.destroy', $users->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
		
        @endforeach
		<br/>
		<tr>
		<a>Not yet on the list? </a> <a href="{{ route('users.create')}}" >Sign up now!</a>
		</tr>
    </tbody>
  </table>
<div>
@endsection

