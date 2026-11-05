@extends('layouts.app')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap"><div><h1>Customer Accounts</h1><p class="lead">Create and edit customer records with Laravel validation.</p></div><a class="button" href="{{ route('customers.create') }}">+ Create Customer</a></div>
<div class="table-wrap"><table><thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Status</th><th>Action</th></tr></thead><tbody>@forelse ($customers as $customer)<tr><td>{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td><td><span class="tag">Active</span></td><td><a href="{{ route('customers.edit', $customer) }}">Edit</a></td></tr>@empty<tr><td colspan="6">No customers found.</td></tr>@endforelse</tbody></table></div>
@endsection
