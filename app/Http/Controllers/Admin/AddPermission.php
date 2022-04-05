<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AddPermission extends Controller
{
    public function create(User $user)
    {
        return view('admin.addPermission.create', compact('user'));
    }

    public function store(Request $request, User $user)
    {

        $request->validate([
            'permissions' => 'array',
            'roles' => 'array'
        ]);

        $user->roles()->sync($request['roles']);
        $user->permissions()->sync($request['permissions']);

        return redirect(route('admin.users.index'));

    }
}
