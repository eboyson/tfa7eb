@extends('layouts.app')
@section('content')
<h1>Edit Customer</h1><div class="card"><form method="POST" action="{{ route('customers.update', $customer) }}">@csrf @method('PATCH')
<p><label>Full name</label><input name="full_name" value="{{ old('full_name', $customer->full_name) }}">@error('full_name')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Email</label><input type="email" name="email" value="{{ old('email', $customer->email) }}">@error('email')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Phone</label><input name="phone" value="{{ old('phone', $customer->phone) }}">@error('phone')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<p><label>Address</label><input name="address" value="{{ old('address', $customer->address) }}">@error('address')<small style="color:#b42318">{{ $message }}</small>@enderror</p>
<button class="button" type="submit">Update Customer</button> <a href="{{ route('customers.index') }}">Cancel</a></form></div>
@endsection
