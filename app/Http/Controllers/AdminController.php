<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $equipes = Team::all();
        $projets = Project::all();
        return view('admin.dashboard', compact('equipes', 'projets'));
    }

    public function login()
    {
        return view('admin.auth.login_form');
    }

    public function authenticate(AdminRequest $request)
    {
        $validated = $request->validated();
        $admin = User::where('email', $validated['email'])->first();

        if (!$admin || !Hash::check($validated['mot_de_passe'], $admin->password)) {
            return back()->with('error', 'Email ou mot de passe incorrect');
        }

        Auth::login($admin);
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
