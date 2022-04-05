<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-permessions');
    }
    public function index()
    {
        $permission = Permission::query();

        if ($search = \request('search')) {
            $permission->where('name', 'LIKE', "%{$search}%")
                ->orWhere('label', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);
        }
        $permissions = $permission->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.permission.allpermission', compact('permissions'));
    }


    public function create()
    {
        return view('admin.permission.createpermission');
    }

    public function store(Request $request)
    {
        $valiData = $request->validate([
            'name' => 'required',
            'label' => 'required'
        ]);
        Permission::create($valiData);

        return redirect(route('admin.permissions.index'));
    }

    public function show(Permission $permission)
    {
        //
    }


    public function edit(Permission $permission)
    {
        return view('admin.permission.editpermission', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $valiData = $request->validate([
            'name' => 'required',
            'label' => 'required'
        ]);
       $permission-> update($valiData);

        return redirect(route('admin.permissions.index'));
    }


    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
