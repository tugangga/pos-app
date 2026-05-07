<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $title = "User";
        $users = User::latest()->paginate(10);
        return view('dashboard.user.index', compact('title', 'users'));
    }

    public function create()
    {
        return view('dashboard.user.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:6|unique:users',
            'nama' => ['required'],
            'role' => ['required'],
            'telp' => ['required'],
            // 'password' => ['required', 'min:6'],
        ]);

        $validated['password'] = Hash::make($request->telp);

        User::create($validated);
        return redirect('/user')->with('sukses', 'Data produk ' . $request->username . 'berhasil disimpan !');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $user = User::find($id);
        return view('/dashboard/user/edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'nama' => ['required'],
            'akses' => ['required'],
            'telp' => ['required'],
            // 'password' => ['required', 'min:6'],
        ]);

        $validated['password'] = Hash::make($request->telp);

        User::where('id', $id)->update($validated);
        return redirect('/dashboard/user')->with('sukses', 'Data produk ' . $request->username . 'berhasil diperbaharui !');
    }


    public function destroy(string $id)
    {
        $user = User::find($id);
        $username = $user->username;
        $user->delete();

        return redirect('/dashboard/user')->with('sukses', "User $username berhasil dihapus!");
    }
}
