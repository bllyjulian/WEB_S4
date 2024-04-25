<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataUser;

class ApiDataUser extends Controller
{
    public function index()
    {
        $users = DataUser::all();
        return response()->json($users);
    }

    public function show($username_mb)
    {
        $user = DataUser::findOrFail($username_mb);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = DataUser::create($request->all());
        return response()->json(['message' => 'Data user berhasil ditambahkan', 'data' => $user], 201);
    }

    public function update(Request $request, $username_mb)
    {
        $user = DataUser::findOrFail($username_mb);
        $user->update($request->all());

        return response()->json(['message' => 'Data user berhasil diperbarui', 'data' => $user]);
    }

    public function destroy($username_mb)
    {
        $user = DataUser::findOrFail($username_mb);
        $user->delete();

        return response()->json(['message' => 'Data user berhasil dihapus']);
    }
}
