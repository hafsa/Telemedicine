<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SuperAdminCreateUserAccountRequest;
use App\Http\Requests\SuperAdminUpdateUserAccountRequest;
use Illuminate\Support\Facades\Hash;

class SuperAdminUsersController extends Controller
{
    /**
     * Show doctor dashboard
     *
     * @return view
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();
        return view('backend.superadmin.users.users-list',  compact('users'));
    }

    public function create()
    {
        return view('backend.superadmin.users.users-create');
    }

    public function store(SuperAdminCreateUserAccountRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        User::create($request->all());
        return redirect(route('users.index'))->with('success', 'User account created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.superadmin.users.users-edit',  compact('user'));
    }

    public function update(SuperAdminUpdateUserAccountRequest $request)
    {
        $doctor = User::where('id',(int) $request->id)->update(['name' => $request->name,'email' => $request->email]);
        return redirect(route('users.index'))->with('success', 'User account updated successfully');
    }

}
