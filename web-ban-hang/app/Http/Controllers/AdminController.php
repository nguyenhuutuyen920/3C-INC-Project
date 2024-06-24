<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        request()->validate([ 
            'Email'=>'required|exists:users',
            'Password'=>'required|',
        ]);


        // Lấy dữ liệu từ yêu cầu
        $email = $request->input('Email'); // Lấy giá trị từ trường 'txtemail'
        $password = $request->input('Password'); // Lấy giá trị từ trường 'txtpassword'

        $user = User::where('Email', $email)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu khớp
        if ($user && Hash::check($password, $user->password)) {
            dd();
            // Đăng nhập người dùng
            Auth::login($user);

            // Chuyển hướng người dùng đến trang quản trị (admin.index)
            return redirect()->route('home');
        } else {
            // Trả về phản hồi lỗi nếu đăng nhập không thành công
            return back()->withErrors(['Email' => 'Thông tin đăng nhập không đúng.']);
        }
    }

}
