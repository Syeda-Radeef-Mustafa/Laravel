<?php
// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Add this line to import the User model

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Retrieve the user from the database based on the email
        $user = User::where('email', $credentials['email'])->first();

        if ($user && $this->validatePassword($credentials['password'], $user->password)) {
            // Authentication passed
            return redirect()->route('contacts.index'); // Redirect to the contacts page
        }

        // Authentication failed
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    private function validatePassword($plainPassword, $hashedPassword)
    {
        // Implement your own password validation logic here
        // For example, you might use password_verify or another hashing algorithm
        return password_verify($plainPassword, $hashedPassword);
    }
}
