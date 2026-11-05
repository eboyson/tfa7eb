@extends('layouts.app')
@section('content')
<h1>Edit User</h1><div class="card"><form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">@csrf @method('PATCH')
<p><label>Username</label><input name="username" value="{{ old('username', $user->username) }}">@error('username')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Full name</label><input name="full_name" value="{{ old('full_name', $user->full_name) }}">@error('full_name')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Email</label><input type="email" name="email" value="{{ old('email', $user->email) }}">@error('email')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Profile picture</label><input type="file" name="avatar" accept="image/jpeg,image/png,image/gif,image/webp"><br><small>Image only, maximum 2 MB.</small>@error('avatar')<br><small style="color:#b42318">{{ $message }}</small>@enderror</p>
<button class="button" type="submit">Update User</button> <a href="{{ route('users.index') }}">Cancel</a></form></div>
@endsection
