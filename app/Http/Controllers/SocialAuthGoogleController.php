<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Socialite;
use Auth;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {

        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Exception $e) {
            return $this->redirect('auth/google');
        }
        $authUser = $this->createUser($googleUser);

        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    public function CreateUser($googleUser)
    {
        $authUser = User::where('email', $googleUser->email)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => md5(rand(1,10000)),
            'image' => $googleUser->avatar,
        ]);
    }

}

