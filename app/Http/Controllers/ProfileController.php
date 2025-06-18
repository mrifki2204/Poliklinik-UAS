<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Poli;
use App\Models\User;

class ProfileController extends Controller
{

    public function edit()
    {
        $user = auth()->user();  // Get the authenticated user
        $polies = Poli::all();  // Get all available poliklinik (polis) data

        // Return the view with user and poliklinik data
        return view('profile.edit', compact('user', 'polies'));
    }

 public function update(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'id_poli' => ['nullable', 'exists:polis,id'], // Check if the id_poli exists in the 'polis' table
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Update the user's profile with the validated data
        $user->update([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'id_poli' => $validated['id_poli'],  // Update polyclinic if provided
        ]);

        // Redirect back with success message
        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
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
