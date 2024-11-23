<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function edit()
    {
        $user = auth()->user(); // Get the currently authenticated user
        return view('user.settings.edit', compact('user')); // Return the edit view with user data
    }

    public function update(Request $request)
    {
        $user = auth()->user(); // Get the currently authenticated user

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bio' => 'nullable|string|max:500',
            'links' => 'nullable|url',
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        // Update user with validated data
        $user->update($validated);

        // If a profile picture is uploaded
        if ($request->hasFile('profile_picture')) {
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->save();
        }

        return redirect()->route('user.settings.edit')->with('success', 'Profile updated successfully.');
    }
}
