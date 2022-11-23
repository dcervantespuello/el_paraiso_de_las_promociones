<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.admin_profile_view', compact('user'));
    }

    public function editProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.admin_profile_edit', compact('user'));
    }

    public function storeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/profile_images'), $filename);
            $user['profile_image'] = $filename;
        }

        $user->save();

        return redirect()->route('admin.profile');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
