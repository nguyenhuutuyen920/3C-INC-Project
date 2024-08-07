<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $users = User::paginate(5);
    return view('admin.user.index', compact('users'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'FullName'=> 'required|unique:users',
            'Email' => 'required|unique:users',
            'Password' => 'required|min:6',
            'Sex' => 'required',
            'Mobile' => 'required|min:10',
            'Address' => 'required',
        ]);
        $user = new User();
        $user->FullName = $request->input('FullName');
        $user->Email = $request->input('Email');
        $user->Password = Hash::make($request->input('Password'));
        $user->Sex = $request->input('Sex');
        $user->Mobile = $request->input('Mobile');
        $user->Address = $request->input('Address');

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'FullName'=> 'required|',
            'Email' => 'required|',
            'Password' => 'required|min:6',
            'Sex' => 'required',
            'Mobile' => 'required|min:10',
            'Address' => 'required',
        ]);
        $user->FullName = $request->input('FullName');
        $user->Email = $request->input('Email');
        $user->Password = Hash::make($request->input('Password'));
        $user->Sex = $request->input('Sex');
        $user->Mobile = $request->input('Mobile');
        $user->Address = $request->input('Address');

        $user->update();

        return redirect()->route('user.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','Thêm thành công');
    }
}
