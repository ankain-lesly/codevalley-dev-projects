<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function viewProfile() {
        return view("user.profile");
    }

    public function updateProfile(Request $request) {
        $updatedData = $request->validate([
            'name' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'phone' => 'required|string|max:25',
        ]);

        $user = Auth::user();

        $user->update($updatedData);

        return back()->with("success", "Profile updated successfully");
    }
}
