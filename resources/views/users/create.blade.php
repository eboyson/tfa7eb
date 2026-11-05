@extends('layouts.app')
@section('content')
<h1>Create User</h1><div class="card"><form method="POST" action="{{ route('users.store') }}">@csrf
<p><label>Username</label><input name="username" value="{{ old('username') }}">@error('username')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Full name</label><input name="full_name" value="{{ old('full_name') }}">@error('full_name')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Email</label><input type="email" name="email" value="{{ old('email') }}">@error('email')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<button class="button" type="submit">Save User</button> <a href="{{ route('users.index') }}">Cancel</a></form></div>
@endsection
