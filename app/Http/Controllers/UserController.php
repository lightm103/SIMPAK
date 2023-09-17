<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function create() {
        return view('users.create');
    }
    
    public function store(Request $request) {
        // Validasi dan simpan data
    }
    
    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user) {
        // Validasi dan update data
    }
    
    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
    
}
