<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class admin extends Controller
{




    public function admin_profile()
    {

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('backend.admin_profile_view', compact('adminData'));
    }



    public function edit_profile()
    {

        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.admin_profile_edit', compact('editData'));
    }


    public function rozwal(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    // public function update_admin_photo(Request $request)
    // {

    //     $id = Auth::user()->id;
    //     $data = User::find($id);
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     // $data->username = $request->username;

    //     if ($request->file('profile_image')) {
    //         $file = $request->file('profile_image');

    //         $filename = date('YmdHi') . $file->getClientOriginalName();
    //         $file->move(public_path('upload/admin_images'), $filename);
    //         $data['profile_image'] = $filename;
    //     }
    //     $data->save();

    //     $notification = array(
    //         'message' => 'Profil Admina zaktualizowany',
    //         'alert-type' => 'info'
    //     );

    //     return redirect()->route('admin_profile')->with($notification);
    // }


    public function update_admin_photo(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_image')) {
            // Jeżeli istnieje już zdjęcie, usuń je
            if ($data->profile_image) {
                $oldImagePath = public_path('upload/admin_images') . '/' . $data->profile_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Zapisz nowe zdjęcie
            $file = $request->file('profile_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->profile_image = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profil Admina zaktualizowany',
            'alert-type' => 'info'
        );

        return redirect()->route('admin_profile')->with($notification);
    }



    public function change_password()
    {

        return view('backend.change_password');
    }

    public function update_password(Request $request)
    {

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Old password is not match');
            return redirect()->back();
        }
    }
}
