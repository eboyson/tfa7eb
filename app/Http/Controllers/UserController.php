<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('users', ['title' => 'User Accounts', 'users' => $users]);
    }

    public function create() { return view('users.create', ['title' => 'Create User']); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:60', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:190'],
        ]);
        User::create($validated);
        return redirect()->route('users.index')->with('success', 'User account created successfully.');
    }

    public function edit(User $user) { return view('users.edit', ['title' => 'Edit User', 'user' => $user]); }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:60', 'unique:users,username,'.$user->id],
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:190'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,webp', 'max:2048'],
        ]);
        unset($validated['avatar']);
        if ($request->hasFile('avatar')) {
            if ($user->avatar) Storage::disk('public')->delete($user->avatar);
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'User account updated successfully.');
    }
}
