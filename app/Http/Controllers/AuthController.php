<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //admin: nrtnhab 20082003
    //$2y$12$Jy20hfZrvjZXmUpV.maAwef0O1A6bCJ9hktTEa4gPWCKum.kfn0cu
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), User::passwordRules());

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $username = $request->input('username');
        $password = $request->input('password');


        // User::create([
        //     'username' => 'nrtnhab',
        //     'displayname' => 'Hoang Anh',
        //     'email' => 'pkbinhchuannrtnhab@gmail.com', 
        //     'password' => Hash::make('20082003'),
        //     'role' => 1,
        // ]);

        $remember = $request->has('remember');
        $user = User::where('username', $username)
            ->orWhere('email', $username)->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {

                Auth::login($user, remember: $remember);
                if ($user->role === User::ROLE_ADMIN) {
                    $response = redirect()->route('users.home');
                } else {
                    $response = redirect()->route('users.home');
                }
                return $response->with('success', 'Login successful!');
            } else {
                return redirect()->back()
                    ->with('error', 'Wrong password!')
                    ->withInput($request->only('username'));
            }
        }
        return redirect()->back()->with('error', 'User not found!');
    }
    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], [
            'email.exists' => 'This email is invalid.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('error', $validator->errors()->first('email'))
                ->withInput();
        }

        $otp = rand(100000, 999999);

        // Lưu OTP vào DB
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['otp' => $otp, 'created_at' => now()]
        );

        // Gửi email (bạn phải cấu hình Mail trước)
        Mail::raw("Your OTP is: $otp\nOTP will be expired after 1 minutes", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Reset your password');
        });

        return redirect()->route('password.verifyForm', ['email' => $request->email])
            ->with('success', 'OTP sent to your email.');
    }

    public function showOtpForm(Request $request)
    {
        return view('verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $rules = array_merge([
            'email' => 'required|email',
            'otp' => 'required',
        ], User::passwordRules());
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $record = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('otp', $request->otp)
            ->first();

        if (!$record || now()->diffInMinutes($record->created_at) > 1) {
            return back()->with('error', 'Invalid or expired OTP');
        }

        // Update password
        DB::table('users')
            ->where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        // Xoá OTP
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Password has been reset.');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Kiểm tra xem user đã tồn tại chưa
        $user = User::where('email', $googleUser->getEmail())->first();
        if (!$user) {
            // Nếu chưa có, tạo mới
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt(str()->random(16)),
                'avatar' => $googleUser->getAvatar(),
            ]);
        }
        Auth::login($user, remember: true);


        if ($user->role === User::ROLE_ADMIN) {
            $response = redirect()->route('users.home');
        } else {
            $response = redirect()->route('users.home');
        }
        $response = $response->with('success', 'Logged in with Google!');

        return $response;
    }
}
