<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function index()
    {

        return view('profile.users');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        $valiData = $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',

        ]);
        if ($request['image']) {
            if ($user->image != '/images/user/user.jpg') {
                File::delete(public_path($user->image));
            }
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg|max:5000'
            ]);
            $file = $request->file('image');

            $file->move(public_path('/images/user/'), time() . '.' . $file->getClientOriginalExtension());

            $valiData['image'] = "/images/user/" . time() . '.' . $file->getClientOriginalExtension();

        } else {
            $valiData['image'] = $user->image;
        }

        $user->update($valiData);
        alert()->success('ویرایش اطلاعات با موفقیت انجام شد', 'موفق')->persistent('تایید');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
