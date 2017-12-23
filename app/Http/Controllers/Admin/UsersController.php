<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $store = new User;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = bcrypt($request->password);
        $store->save();
        return redirect()->route('admin.users.index')->with('status', 'success-added');

    }


    public function show($id)
    {
        //return view('admin.users.show', ['user' => User::findOrFail($id)]);
    }


    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.users.edit', ['user' => $data]);
    }


    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id.'',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        if (!empty($request->password)) {
            $store->password = bcrypt($request->password);
        }
        $update->save();
        return redirect()->route('admin.users.edit', ['id' => $update->id])->with('status', 'success-updated');
    }


    public function destroy(User $user)
    {
        $destroy = User::findOrFail($user->id);
        $destroy->delete();
        return redirect()->route('admin.users.index')->with('status', 'success-deleted');
    }
}
