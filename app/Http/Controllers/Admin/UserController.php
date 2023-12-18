<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $users = User::when($search, function ($query, $search) {
        return $query->where('name', 'like', '%' . $search . '%');
    })->paginate(10);

    return view('admin.user.index', compact('users'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users',
            'password' => 'required|string',
            'role' => 'required|in:admin,mahasiswa,dosen', // Ensure role is one of the allowed values
        ]);

        // Simpan data ke database
        User::create($validatedData);

        // Redirect ke halaman index
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username,' . $id,
            'password' => 'nullable|string',
            'role' => 'required|in:admin,mahasiswa,dosen', // Ensure role is one of the allowed values
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        // Redirect ke halaman index atau halaman detail user
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect ke halaman index
        return redirect()->route('admin.users.index');
    }
}
