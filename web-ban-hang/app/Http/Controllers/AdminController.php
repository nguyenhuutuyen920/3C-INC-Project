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
        request()-> validate([ 
            'email'=>'required|email|exists:users',
            'password'=>'required',
        ]);
        // Lấy dữ liệu từ yêu cầu
        $email = $request->input('email'); // Lấy giá trị từ trường 'txtemail'
        $password = $request->input('password'); // Lấy giá trị từ trường 'txtpassword'

        $user = User::where('email', $email)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu khớp
        if ($user && Hash::check($password, $user->password)) {
            // Đăng nhập người dùng
            Auth::login($user);

            // Chuyển hướng người dùng đến trang quản trị (admin.index)
            return redirect()->route('home');
        } else {
            // Trả về phản hồi lỗi nếu đăng nhập không thành công
            return back()->withErrors(['email' => 'Thông tin đăng nhập không đúng.']);
        }
        
    }
    public function register(){
        return view('admin.register');
    }

    public function check_register(Request $request)
    {
        request()-> validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);
        // Lấy dữ liệu từ yêu cầu
        $name = $request->input('name');
        $email = $request->input('email'); // Lấy giá trị từ trường 'txtemail'
        $password = bcrypt($request->input('password')); // Lấy giá trị từ trường 'password'

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        // Lưu người dùng vào cơ sở dữ liệu
        $user->save();
        // Hiển thị dữ liệu đã nhận được (chỉ để kiểm tra)
        return redirect()-> route('admin.login');
    }
}
