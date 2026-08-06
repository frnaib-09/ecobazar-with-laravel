<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    function viewProfile()
    {
        return view('backend.adminProfile');
    }

    function updateProfile(Request $request) {
    //User Validation
    $request->validate([
            'name' => 'required|string|max:255|min:2',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'phone' => 'nullable|string|max:20',
        ]);

    //Update User Profile Image
    $fileName = '';
    if(request()->hasFile('photo')) {
        //Previous Image Delete
        if(Storage::disk('public')->exist(auth()->user()->photo)) {
            Storage::disk('public')->delete(auth()->user()->photo);
        }
        $fileName = $request->photo->store('admin_images', 'public');
    }

    //Update User Profile to Database
    $authUser = User::find(auth()->user()->id)->update([
        'name' => $request->name,
        'username' => $request->username,
        'photo' => $fileName,
    ]);
    return back();
}
}
