<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    // Show login form
    public function showLoginForm()
    {
        return view("auth.login");
    }

    // Register Method
    public function register(Request $request)
    {

        

        if($request->isMethod("post")) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'field_of_study' => 'required|string|max:255',
                'phone' => 'required|string|max:25',
                'password' => 'required|string|min:8|confirmed',  // 'confirmed' for password confirmation
            ]);
    
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'field_of_study' => $request->field_of_study,
                "country_code" => $request->country_code,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
    

            return redirect()->route('home');
            
        }
    }

    // Login Method
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    // Logout Method
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
