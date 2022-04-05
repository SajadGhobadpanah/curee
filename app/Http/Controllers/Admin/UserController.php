<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-user');


    }

    public function index()
    {
        $user = User::query();

        if ($search = \request('search')) {

            $user->where('name', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);

        }
        if (\request('admin')) {
            $user->where('is_supervisor', 1)->orWhere('is_staff', 1);
        }
        $users = $user->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.user.alluser', compact('users'));
    }


    public function create()
    {
        return view('admin.user.createuser');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request->user()->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'nullable'
        ]);

        if ($request['is_staff']) {
            $request['is_staff'] = 1;
            $data['is_staff'] = $request['is_staff'];

        }
        $user = User::create($data);

        if ($request['emailcheck']) {

            $user->markEmailAsVerified();

        }


        return redirect(route('admin.users.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
//        return  $this->authorize('edit', $user) ?
//        if (\Illuminate\Support\Facades\Gate::allows('edit', $user))
        return view('admin.user.edituser', compact('user'));
//       abort(403);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'image' => 'nullable'
        ]);

        if ($request['password']) {
            $data = $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            $data['password'] = $request['password'];
        }
        if ($request['is_staff']) {
            $request['is_staff'] = 1;
            $data['is_staff'] = $request['is_staff'];

        }

        $user->update($data);
        if ($request['emailcheck']) {
            $user->markEmailAsVerified();
        }
        return redirect(route('admin.users.index'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
