@extends('layouts.app')
@section('content')
<h1>Create Customer</h1><div class="card"><form method="POST" action="{{ route('customers.store') }}">@csrf
<p><label>Full name</label><input name="full_name" value="{{ old('full_name') }}">@error('full_name')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Email</label><input type="email" name="email" value="{{ old('email') }}">@error('email')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Phone</label><input name="phone" value="{{ old('phone') }}">@error('phone')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Address</label><input name="address" value="{{ old('address') }}">@error('address')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<button class="button" type="submit">Save Customer</button> <a href="{{ route('customers.index') }}">Cancel</a></form></div>
@endsection
