<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model

class UserSettingsController extends Controller
{
    public function edit()
    {
        // Get the current authenticated user
        $user = auth()->user();
        return view('user.settings.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bio' => 'nullable|string',
            'links' => 'nullable|url',
            'profile_picture' => 'nullable|image|max:1024', // Optional profile picture (max 1MB)
        ]);

        // Get the current authenticated user
        $user = auth()->user();

        // Update the user's profile info (except profile picture)
        $user->update($validated);

        // If a profile picture is uploaded, store it and update the user model
        if ($request->hasFile('profile_picture')) {
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user->save(); // Save any changes to the user model

        // Redirect to the edit page with a success message
        return redirect()->route('user.settings.edit')->with('success', 'Profile updated successfully.');
    }
}
