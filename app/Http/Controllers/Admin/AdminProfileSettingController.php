<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ImageUpload;
use Illuminate\Validation\Rules\Password;

class AdminProfileSettingController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function profileUpdate() {

        $user = User::find(auth()->user()->id); 
        return view('admin.profile.profileUpdate', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => [
                'nullable',
                Password::min(6),
            ],
            'password_confirmation' => 'required_with:password|same:password',
            'avtar' => 'nullable|image',
        ]);

        $input = $request->all();

        // check for password change
        if(!is_null($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        }else{
            unset($input['password']);
        }

        auth()->user()->update($input);

        toastr()->info('Profile update successfully!');
        return redirect()->route('admin.profile-setting.update');
    }
}