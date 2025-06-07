<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman edit profil.
     */
    public function edit(Request $request): View
{
    return view('profile.edit')->with('user', $request->user());
}

public function update(ProfileUpdateRequest $request)
{
    $user = $request->user();
    $validated = $request->validated();

    if ($user->email !== $validated['email']) {
        $user->email_verified_at = null;
    }

    $user->update([
        'name' => $validated['name'],
        'email' => $validated['email'],
    ]);

    return redirect()->route('profile.edit')->with('status', 'profile-updated');
}

public function updatePassword(Request $request)
{
    $validated = $request->validate([
        'current_password' => ['required', 'current_password'],
        'password' => ['required', 'min:6', 'confirmed'],
    ]);

    $request->user()->update([
        'password' => Hash::make($validated['password']),
    ]);

    return redirect()->route('profile.edit')->with('status', 'password-updated');
}

public function destroy(Request $request)
{
    $request->validate([
        'password' => ['required', 'current_password'],
    ]);

    $user = $request->user();
    Auth::logout();
    $user->delete();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return Redirect::to('/');
}
}
