<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-roles');
    }

    public function index()
    {
        $role = Role::query();

        if ($search = \request('search')) {
            $role->where('name', 'LIKE', "%{$search}%")
                ->orWhere('label', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);
        }
        $roles = $role->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.roles.allroles', compact('roles'));
    }


    public function create()
    {
        return view('admin.roles.createrole');
    }

    public function store(Request $request)
    {
        $valiData = $request->validate([
            'name' => 'required',
            'label' => 'required',
            'permissions' => 'array'
        ]);
        $role = Role::create($valiData);
        $role->permissions()->sync($request['permissions']);

        return redirect(route('admin.roles.index'));

    }


    public function show(Role $role)
    {
    }


    public function edit(Role $role)
    {
        return view('admin.roles.editrole', compact('role'));

    }

    public function update(Request $request, Role $role)
    {
        $valiData = $request->validate([
            'name' => 'required',
            'label' => 'required',
            'permissions' => 'array'
        ]);
        $role->update($valiData);
        $role->permissions()->sync($request['permissions']);

        return redirect(route('admin.roles.index'));
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
