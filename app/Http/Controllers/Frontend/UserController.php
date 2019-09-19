<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;

class UserController extends Controller
{
    function info(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('frontend.users.info', ['email' => $user->email, 'name' => $user->name]);
        }

        return redirect('/');
    }
    public function update(Request $request)
    {
        $id = Auth::id();
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'avatar' => 'mimes:jpeg,jpg,bmp,png|max:2048',
            'password' => 'confirmed'
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Không đúng định dạng Email',
            'email.unique' => 'Email này đã trùng vui lòng chọn Email khác',
            'password.confirmed' => 'Mật Khẩu không trùng nhau',
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $user = User::find($id);
            if ($user !== null) {
                $user->email = $request->input('email');
                $user->name = $request->input('name');
                if ($request->file('avatar')) {
                    $user->avatar = $request->file('avatar')->store('users/avatars', 'public');
                } 
                if ($request->input('password')) {
                    $user->password = bcrypt($request->input('password'));
                }
                $user->save();
                if ($request->input('password')) {
                    Auth::logout();
                }
                return redirect('/');
            }
            return redirect('/');
        }
    }
}
